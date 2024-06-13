<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kategori;
use App\Models\Meja;
use App\Models\User;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Pengeluaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(Request $request){
    
        $totalKitchenUsers = User::where('level_user', 'Kitchen')->count();
        $totalBartenderUsers = User::where('level_user', 'Bartender')->count();
        $totalKasirUsers = User::where('level_user', 'Kasir')->count();
        $totalPelayanUsers = User::where('level_user', 'Pelayan')->count();
        $totalMenu = Menu::count();
        
        // Daily statistics
        $totalCustomer = Order::whereBetween('waktu_order', [now()->startOfDay(), now()->endOfDay()])->sum('jlh_org');
        $jual = OrderDetail::whereHas('order', function ($query) {
            $query->whereBetween('waktu_order', [now()->startOfDay(), now()->endOfDay()]);
        })->sum('jumlah');
        $dapat = OrderDetail::whereHas('order', function ($query) {
            $query->whereBetween('waktu_order', [now()->startOfDay(), now()->endOfDay()]);
        })->sum('subtotal');
        $pengeluaran = Pengeluaran::whereBetween('waktu_pengeluaran', [now()->startOfDay(), now()->endOfDay()])->sum('pengeluaran');
    
        // Weekly statistics
        $totalCustomerw = Order::whereBetween('waktu_order', [now()->startOfWeek(), now()->endOfWeek()])->sum('jlh_org');
        $jualw = OrderDetail::whereHas('order', function ($query) {
            $query->whereBetween('waktu_order', [now()->startOfWeek(), now()->endOfWeek()]);
        })->sum('jumlah');
        $dapatw = OrderDetail::whereHas('order', function ($query) {
            $query->whereBetween('waktu_order', [now()->startOfWeek(), now()->endOfWeek()]);
        })->sum('subtotal');
        $pengeluaranw = Pengeluaran::whereBetween('waktu_pengeluaran', [now()->startOfWeek(), now()->endOfWeek()])->sum('pengeluaran');
    
        // Monthly statistics
        $totalCustomerm = Order::whereBetween('waktu_order', [now()->startOfMonth(), now()->endOfMonth()])->sum('jlh_org');
        $jualm = OrderDetail::whereHas('order', function ($query) {
            $query->whereBetween('waktu_order', [now()->startOfMonth(), now()->endOfMonth()]);
        })->sum('jumlah');
        $dapatm = OrderDetail::whereHas('order', function ($query) {
            $query->whereBetween('waktu_order', [now()->startOfMonth(), now()->endOfMonth()]);
        })->sum('subtotal');
        $pengeluaranm = Pengeluaran::whereBetween('waktu_pengeluaran', [now()->startOfMonth(), now()->endOfMonth()])->sum('pengeluaran');
    
        $orders = Order::whereBetween('waktu_order', [now()->startOfDay(), now()->endOfDay()])
                    ->orderBy('waktu_order')
                    ->get();
        $ordersw = Order::whereBetween('waktu_order', [now()->startOfWeek(), now()->endOfWeek()])
                    ->orderBy('waktu_order')
                    ->get();
        $ordersm = Order::whereBetween('waktu_order', [now()->startOfMonth(), now()->endOfMonth()])
                    ->orderBy('waktu_order')
                    ->get();
    
        $totalIncome = 0;
        $menuQuantities = [];
        $menuQuantitiesw = [];
        $menuQuantitiesm = [];
    
        // Loop through each order for daily statistics
        foreach ($orders as $order) {
            $subtotal = $order->detailorder()->sum('subtotal');
            $totalIncome += $subtotal;
    
            $orderDetails = $order->detailorder;
    
            foreach ($orderDetails as $detail) {
                $menuId = $detail->id_menu;
                if (!isset($menuQuantities[$menuId])) {
                    $menuQuantities[$menuId] = [
                        'quantity' => 0,
                        'total_price' => 0,
                        'gambar_menu' => '/img/menu/' . $detail->menu->gambar_menu,
                    ];
                }
    
                // Add the order quantity and calculate the total price
                $menuQuantities[$menuId]['quantity'] += $detail->jumlah;
                $menuQuantities[$menuId]['total_price'] += $detail->menu->harga * $detail->jumlah;
            }
        }
    
        // Loop through each order for weekly statistics
        foreach ($ordersw as $order) {
            $subtotal = $order->detailorder()->sum('subtotal');
            $totalIncome += $subtotal;
    
            $orderDetails = $order->detailorder;
    
            foreach ($orderDetails as $detail) {
                $menuIdw = $detail->id_menu;
                if (!isset($menuQuantitiesw[$menuIdw])) {
                    $menuQuantitiesw[$menuIdw] = [
                        'quantity' => 0,
                        'total_price' => 0,
                        'gambar_menu' => '/img/menu/' . $detail->menu->gambar_menu,
                    ];
                }
    
                $menuQuantitiesw[$menuIdw]['quantity'] += $detail->jumlah;
                $menuQuantitiesw[$menuIdw]['total_price'] += $detail->menu->harga * $detail->jumlah;
            }
        }
    
        // Loop through each order for monthly statistics
        foreach ($ordersm as $order) {
            $subtotal = $order->detailorder()->sum('subtotal');
            $totalIncome += $subtotal;
    
            $orderDetails = $order->detailorder;
    
            foreach ($orderDetails as $detail) {
                $menuIdm = $detail->id_menu;
                if (!isset($menuQuantitiesm[$menuIdm])) {
                    $menuQuantitiesm[$menuIdm] = [
                        'quantity' => 0,
                        'total_price' => 0,
                        'gambar_menu' => '/img/menu/' . $detail->menu->gambar_menu,
                    ];
                }
    
                $menuQuantitiesm[$menuIdm]['quantity'] += $detail->jumlah;
                $menuQuantitiesm[$menuIdm]['total_price'] += $detail->menu->harga * $detail->jumlah;
            }
        }
    
        // Sort the menus by quantity ordered in descending order
        arsort($menuQuantities);
        arsort($menuQuantitiesw);
        arsort($menuQuantitiesm);
    
        // Get the top 3 best-selling menus
        $topMenuQuantities = array_slice($menuQuantities, 0, 3, true);
        $topMenuQuantitiesw = array_slice($menuQuantitiesw, 0, 3, true);
        $topMenuQuantitiesm = array_slice($menuQuantitiesm, 0, 3, true);
    
        // Get menu names based on menu IDs
        $menuNames = Menu::whereIn('id_menu', array_keys($topMenuQuantities))->pluck('nama_menu', 'id_menu');
        $menuNamesw = Menu::whereIn('id_menu', array_keys($topMenuQuantitiesw))->pluck('nama_menu', 'id_menu');
        $menuNamesm = Menu::whereIn('id_menu', array_keys($topMenuQuantitiesm))->pluck('nama_menu', 'id_menu');
    
        return view('admin.dashboard', [
            'totalKitchenUsers' => $totalKitchenUsers,
            'totalBartenderUsers' => $totalBartenderUsers,
            'totalKasirUsers' => $totalKasirUsers,
            'totalPelayanUsers' => $totalPelayanUsers,
            'totalMenu' => $totalMenu,
            'totalCustomer' => $totalCustomer,
            'totalCustomerw' => $totalCustomerw,
            'totalCustomerm' => $totalCustomerm,
            'jual' => $jual,
            'jualw' => $jualw,
            'jualm' => $jualm,
            'dapat' => $dapat,
            'dapatw' => $dapatw,
            'dapatm' => $dapatm,
            'pengeluaran' => $pengeluaran,
            'pengeluaranw' => $pengeluaranw,
            'pengeluaranm' => $pengeluaranm,
            'menuNames' => $menuNames,
            'menuNamesw' => $menuNamesw,
            'menuNamesm' => $menuNamesm,
            'topMenuQuantities' => $topMenuQuantities,
            'topMenuQuantitiesw' => $topMenuQuantitiesw,
            'topMenuQuantitiesm' => $topMenuQuantitiesm,
        ]);
    }
    

    public function user(){
        $user = User::all();
        $karyawan = Karyawan::all();
        return view('admin.user',[
            'user' => $user,
            'karyawan' => $karyawan
        ]);
    }
    public function daftar(){
        
        return view('admin.form-daftar-akun');
    }
    public function storeuser(Request $request){
        $foto = $request->file('foto');
        $fileName = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        $foto->move(public_path('/img'), $foto->getClientOriginalName());

        $user = new User();
        $user->id_user = (string) Str::uuid();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->password);
        $user->level_user = $request->input('level_user');
        $user->save();

        $karyawan = new Karyawan();
        $karyawan->id_user = $user->id_user;
        $karyawan->nama = $request->input('nama_lengkap');
        $karyawan->tgl_lahir = $request->input('tgl_lahir');
        $karyawan->alamat = $request->input('alamat');
        $karyawan->no_hp = $request->input('no_hp');
        $karyawan->gaji = $request->input('gaji');
        $karyawan->foto = $fileName . '.' . $foto->getClientOriginalExtension();
        $karyawan->save();

        return redirect()->route('user');
    }
    public function menu(){
        $menus = Menu::all();
        $kategori = Kategori::all();
         
        return view('admin.menu',[
            'menus' => $menus,
            'kategori' => $kategori
        ]);
    }
    public function meja(){
        $meja = Meja::all();
         
        return view('admin.meja',[
            'meja' => $meja,
        ]);
    }
    public function kategori(Request $request){
        $kategori = new Kategori();
        $kategori->kategori = $request->input('nama');
        $kategori->jenis = $request->input('jenis');
        $kategori->save();
         
        return back()->with('succes', 'Kategori berhasil ditambahkan');
    }
    public function subkategori(Request $request){
        $kategori = new Kategori();
        $kategori->subkategori = $request->input('nama');
        $kategori->kategori = $request->input('kategori');
        $kategori->jenis = $request->input('jenis');
        $kategori->save();
         
        return back()->with('sub', 'Sub Kategori berhasil ditambahkan');
    }
    public function laporan(){
        $today = Carbon::today()->toDateString();

        // Mengambil orders hari ini dan mengurutkannya berdasarkan waktu_order
        $laporan = Order::whereDate('waktu_order', $today)
                        ->orderBy('waktu_order')
                        ->get();
        $daily = Pengeluaran::whereDate('waktu_pengeluaran', $today)
                        ->orderBy('waktu_pengeluaran')
                        ->get();

        // Mendapatkan awal dan akhir bulan saat ini
        $startOfMonth = Carbon::now()->startOfMonth()->toDateString();
        $endOfMonth = Carbon::now()->endOfMonth()->toDateString();

        // Mengambil orders dalam bulan ini dan mengurutkannya berdasarkan waktu_order
        $bulan = Order::whereBetween('waktu_order', [$startOfMonth, $endOfMonth])
                    ->orderBy('waktu_order')
                    ->get();
        $monthly = Pengeluaran::whereBetween('waktu_pengeluaran', [$startOfMonth, $endOfMonth])
                    ->orderBy('waktu_pengeluaran')
                    ->get();

        $startOfWeek = Carbon::now()->startOfWeek()->toDateString();
        $endOfWeek = Carbon::now()->endOfWeek()->toDateString();   
        
        $minggu = Order::whereBetween('waktu_order', [$startOfWeek, $endOfWeek])
                    ->orderBy('waktu_order')
                    ->get();
        $weekly = Pengeluaran::whereBetween('waktu_pengeluaran', [$startOfWeek, $endOfWeek])
                    ->orderBy('waktu_pengeluaran')
                    ->get();

        // Menambahkan total subtotal ke setiap order
        foreach ($laporan as $order) {
            $order->total_subtotal = $order->detailorder->sum('subtotal');
        }
        foreach ($bulan as $bulans) {
            $bulans->total_subtotal = $bulans->detailorder->sum('subtotal');
        }
        foreach ($minggu as $orders) {
            $orders->total_subtotal = $orders->detailorder->sum('subtotal');
        }

        foreach ($daily as $dail) {
            $dail->total_subtotal = $dail->sum('pengeluaran');
        }
        foreach ($weekly as $week) {
            $week->total_subtotal = $week->sum('pengeluaran');
        }
        foreach ($monthly as $month) {
            $month->total_subtotal = $month->sum('pengeluaran');
        }
        
         
        return view('admin.laporan-penjualan',[
            'laporan' => $laporan,
            'minggu' => $minggu,
            'bulan' => $bulan,
            'daily' => $daily,
            'weekly' => $weekly,
            'monthly' => $monthly,

        ]);
    }
    public function storemenu(Request $request){
        $foto = $request->file('foto');
        $fileName = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        $foto->move(public_path('img/menu'), $foto->getClientOriginalName());

        $subkategori = $request->input('subkategori');
        $kategori = Kategori::where('subkategori', $subkategori)->first();
        $id_kategori = $kategori->id_ktgmenu;

        $menu = new Menu();
        $menu->nama_menu = $request->input('nama');
        $menu->harga = $request->input('harga');
        $menu->keterangan = $request->input('keterangan');
        $menu->id_ktgmenu = $id_kategori;
        $menu->gambar_menu = $fileName . '.' . $foto->getClientOriginalExtension();
        $menu->save();

        return back();
    }
    public function destroymenu($id_menu){
        $menu = Menu::find($id_menu);
        $gambar_menu_path = public_path('img/menu/') . $menu->gambar_menu;
        if (file_exists($gambar_menu_path)) {
            unlink($gambar_menu_path);
        }
        $menu->delete();

        return back()->with('delete', 'Menu berhasil dihapus.');
    }
    public function updatemenu(Request $request, $id_menu){
        $menu = Menu::find($id_menu);
        $menu->nama_menu = $request->input('nama');
        $menu->harga = $request->input('harga');
        $menu->ktgmenu->subkategori = $request->input('subkategori');
        $menu->keterangan = $request->input('keterangan');
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $nama_foto = time().'.'.$foto->getClientOriginalExtension();
            $lokasi_foto = public_path('/img/menu');
            $foto->move($lokasi_foto, $nama_foto);
            $menu->foto = $nama_foto;
        }
        $menu->save();
        

        return back()->with('notification', 'Menu berhasil diupdate.');
    }
    public function destroyuser($id_user){
        $user = User::find($id_user);
        $user->delete();

        if ($user->karyawan) {
            $user->karyawan->delete();
        }

        return back()->with('delete', 'Data karyawan berhasil dihapus.');
    }
    public function updateuser(Request $request, $id_user){
        $menu = Karyawan::find($id_user);
        $menu->nama = $request->input('nama');
        $menu->no_hp = $request->input('telepon');
        $menu->alamat = $request->input('alamat');
        $menu->tgl_lahir = $request->input('tanggal_lahir');
        $menu->gaji = $request->input('gaji');
        
        $menu->save();

        return back()->with('notification', 'Data karyawan berhasil diupdate.');
    }
}
