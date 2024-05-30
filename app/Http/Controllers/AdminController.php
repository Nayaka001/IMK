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
    public function index(){
        $totalKitchenUsers = User::where('level_user', 'Kitchen')->count();
        $totalBartenderUsers = User::where('level_user', 'Bartender')->count();
        $totalKasirUsers = User::where('level_user', 'Kasir')->count();
        $totalPelayanUsers = User::where('level_user', 'Pelayan')->count();
        $totalMenu = Menu::count();
        $totalCustomer = Order::sum('jlh_org');
        $jual = OrderDetail::sum('jumlah');
        $dapat = OrderDetail::sum('subtotal');
        $pengeluaran = Pengeluaran::sum('pengeluaran');

        return view('admin.dashboard',[
            'totalKitchenUsers' => $totalKitchenUsers,
            'totalBartenderUsers' => $totalBartenderUsers,
            'totalKasirUsers' => $totalKasirUsers,
            'totalPelayanUsers' => $totalPelayanUsers,
            'totalMenu' => $totalMenu,
            'totalCustomer' => $totalCustomer,
            'jual' => $jual,
            'dapat' => $dapat,
            'pengeluaran' => $pengeluaran
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
         
        return back()->with('succes', 'Sub Kategori berhasil ditambahkan');
    }
    public function laporan(){
        $today = Carbon::today()->toDateString();

        // Mengambil orders hari ini dan mengurutkannya berdasarkan waktu_order
        $laporan = Order::whereDate('waktu_order', $today)
                        ->orderBy('waktu_order')
                        ->get();

        // Mendapatkan awal dan akhir bulan saat ini
        $startOfMonth = Carbon::now()->startOfMonth()->toDateString();
        $endOfMonth = Carbon::now()->endOfMonth()->toDateString();

        // Mengambil orders dalam bulan ini dan mengurutkannya berdasarkan waktu_order
        $bulan = Order::whereBetween('waktu_order', [$startOfMonth, $endOfMonth])
                    ->orderBy('waktu_order')
                    ->get();

        $startOfWeek = Carbon::now()->startOfWeek()->toDateString();
        $endOfWeek = Carbon::now()->endOfWeek()->toDateString();   
        
        $minggu = Order::whereBetween('waktu_order', [$startOfWeek, $endOfWeek])
                    ->orderBy('waktu_order')
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
         
        return view('admin.laporan-penjualan',[
            'laporan' => $laporan,
            'minggu' => $minggu,
            'bulan' => $bulan,
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

        return back()->with('success', 'Menu berhasil dihapus.');
    }
    public function destroyuser($id_user){
        $user = User::find($id_user);
        $user->delete();

        if ($user->karyawan) {
            $user->karyawan->delete();
        }

        return back()->with('success', 'Menu berhasil dihapus.');
    }
}
