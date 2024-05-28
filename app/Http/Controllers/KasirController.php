<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use App\Models\Kategori;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Pengeluaran;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            $kategori = Kategori::all();
            $menu = Menu::where('nama_menu', 'LIKE', '%' . $request->search . '%')->get();

        } else {
            $kategori = Kategori::all();
            $menu = Menu::all();
        }
        
        return view('menu', [
            'kategori' => $kategori,
            'menu' => $menu
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'items' => 'required|array',
            'items.*.name' => 'required|string',
            'items.*.menu_id' => 'required|integer',
            'items.*.price' => 'required|numeric',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.note' => 'nullable|string',
        ]);
        $nomor= Session::get('nomor_meja');
        $tipe = Session::get('tipe_order');

        if ($nomor !== 'Bawa Pulang') {
            $customerName = Session::get('nama_pelanggan');
            $customerMeja = Session::get('nomor_meja');
            $customerId = Session::get('order_id');
            $customerJumlah = Session::get('jumlah_orang');
            $tipe_order = Session::get('tipe_order');
    
            $order = new Order();
            $order->id_order = $customerId;
            $order->tipe_order = $tipe_order;
            $order->id_user = $request->input('id_user');
            $order->nama_pelanggan = $customerName;
            $order->jlh_org = $customerJumlah;
            $order->id_meja = $customerMeja;
            $order->save();
        }
        else if($tipe !== 'Bawa Pulang'){
            $customerName = Session::get('nama_pelanggan');
            $customerId = Session::get('order_id');
            $customerJumlah = Session::get('jumlah_orang');
            $tipe_order = Session::get('tipe_order');
    
            $order = new Order();
            $order->id_order = $customerId;
            $order->tipe_order = $tipe_order;
            $order->id_user = $request->input('id_user');
            $order->nama_pelanggan = $customerName;
            $order->jlh_org = $customerJumlah;
            $order->save();
        }
        foreach ($validated['items'] as $item) {
                $orderDetail = new OrderDetail();
                $orderDetail->id_order = $customerId; // Menggunakan ID Order yang baru saja disimpan
                $orderDetail->id_menu = $item['menu_id'];
                $orderDetail->note = $item['note'];
                $orderDetail->jumlah = $item['quantity'];
                $orderDetail->subtotal = $item['price'];
                $orderDetail->progress = $request->input('progress');
                $orderDetail->save();
        }
        // dd($request->all());
        return redirect()->route('kasir.neworder');

    }
    public function neworder(){
        $meja = Meja::all();
        
        return view('formnewdine', [
            'meja' => $meja
        ]);
    }
    public function neworderdine(Request $request){

    // Tambahkan 1 ke ID order terakhir untuk membuat ID order baru
    $lastOrderId = Order::max('id_order');

    // Mengecek jika $lastOrderId null atau kosong, kemudian mengatur nilai awal
    if (is_null($lastOrderId)) {
        $newOrderId = 1; // Atur nilai awal jika tidak ada data order
    } else {
        $newOrderId = $lastOrderId + 1; // Jika ada data order, tambahkan 1
    }
    
    // Menyimpan nilai $newOrderId ke dalam sesi
    Session::put('tipe_order', $request->tipe_order);
    Session::put('nama_pelanggan', $request->nama_pelanggan);
    Session::put('jumlah_orang', $request->jumlah_orang);
    Session::put('nomor_meja', $request->nomor_meja);
    Session::put('order_id', $newOrderId);
        // dd(Session::all());

        // Simpan data form ke sesi
        // $test = session([
        //     'nama_pelanggan' => $validatedData['nama_pelanggan'],
        //     'jumlah_orang' => $validatedData['jumlah_orang'],
        //     'nomor_meja' => $validatedData['nomor_meja']
        // ]);
        // dd($test);
        return redirect()->route('kasir.addnewdine');
    }
    public function newordertake(Request $request){
        $lastOrderId = Order::max('id_order');

    // Mengecek jika $lastOrderId null atau kosong, kemudian mengatur nilai awal
        if (is_null($lastOrderId)) {
            $newOrderId = 1; // Atur nilai awal jika tidak ada data order
        } else {
            $newOrderId = $lastOrderId + 1; // Jika ada data order, tambahkan 1
        }
        Session::put('nama_pelanggan', $request->nama_pelanggan);
        Session::put('tipe_order', $request->tipe_order);
        Session::put('nomor_meja', $request->nomor_meja);
        Session::put('order_id', $newOrderId);
        // dd(Session::all());
        return redirect()->route('kasir.addnewtake');
    }
    public function neworderres(Request $request){

        Session::put('nama_pelanggan', $request->nama_pelanggan);
        Session::put('nomor_hp', $request->nomor_hp);
        Session::put('jumlah_orang', $request->jumlah_orang);
        Session::put('tangga_datang', $request->tangga_datang);
        Session::put('waktu_datang', $request->waktu_datang);
        Session::put('nomor_meja', $request->nomor_meja);
        // dd(Session::all());
        return redirect()->route('kasir.addnewres');
    }
    public function addnewdine(Request $request){
        if ($request->has('search')) {
            $kategori = Kategori::all();
            $menu = Menu::where('nama_menu', 'LIKE', '%' . $request->search . '%')->get();

        } else {
            $kategori = Kategori::all();
            $menu = Menu::all();
        }
        
        return view('neworder', [
            'kategori' => $kategori,
            'menu' => $menu
        ]);
    }
    public function addnewres(Request $request){
        if ($request->has('search')) {
            $kategori = Kategori::all();
            $menu = Menu::where('nama_menu', 'LIKE', '%' . $request->search . '%')->get();

        } else {
            $kategori = Kategori::all();
            $menu = Menu::all();
        }
        

        return view('neworder',  [
            'kategori' => $kategori,
            'menu' => $menu
        ]);
    }
    public function addnewtake(Request $request){

        if ($request->has('search')) {
            $kategori = Kategori::all();
            $menu = Menu::where('nama_menu', 'LIKE', '%' . $request->search . '%')->get();

        } else {
            $kategori = Kategori::all();
            $menu = Menu::all();
        }
        

        return view('neworder',  [
            'kategori' => $kategori,
            'menu' => $menu
        ]);
    }
    public function orderwait(){
        $orders = Order::all();
        $detail = Order::with('detailorder')->get();

    // Array untuk menyimpan hasil perhitungan
        $ordersWithDetails = [];

        // Loop untuk setiap order dan menghitung jumlah entri di OrderDetail
        foreach ($orders as $order) {
            $orderId = $order->id_order;
            $totalMenu = OrderDetail::where('id_order', $orderId)->sum('jumlah');

            // Menyimpan hasil perhitungan dalam array
            $ordersWithDetails[] = [
                'order' => $order,
                'detail' => $detail,
                'totalMenu' => $totalMenu,
            ];
        }

        // Mengirim hasil ke view
        return view('orderlistwaiting', ['ordersWithDetails' => $ordersWithDetails]);
    }
    public function modal($id_order){
        $order = Order::find($id_order);
        $detailOrders = OrderDetail::where('id_order', $id_order)->get();
        $detail = DetailPesanan::where('id_order', $id_order)->get();
        $total = DetailPesanan::where('id_order', $id_order)->sum('subtotal');
      
        $jumlahMenu = OrderDetail::where('id_order', $id_order)->sum('jumlah');
        $orderDetails = [
            'waktu_order' => $order->waktu_order,
            'nama_pelanggan' => $order->nama_pelanggan,
            'jlh_org' => $order->jlh_org,
            'id_meja' => $order->id_meja,
            'detailorder' => $detailOrders,
            'detail' => $detail,
            'jlh_menu' => $jumlahMenu,
            'total' => $total,
        ];
        foreach ($detail as $detailItem) {
            $detailItem->gambar_menu = asset('img/menu/' . $detailItem->gambar_menu);
        }
        // Kembalikan data dalam format JSON
        return response()->json($orderDetails);
    }
    public function indexreport(){
        // Ambil semua pesanan yang dibuat hari ini dan diurutkan berdasarkan waktu_order
        $orders = Order::whereDate('waktu_order', now()->toDateString())
                        ->orderBy('waktu_order')
                        ->get();
        $report = Pengeluaran::all();
        $detail = DetailPesanan::all();
        $totalIncome = 0;
        $totalOrders = $orders->count();
        $menuQuantities = [];

        // Loop melalui setiap pesanan
        foreach ($orders as $order) {
            // Ambil detail pesanan dan hitung subtotalnya
            $subtotal = $order->detailorder()->sum('subtotal');
            $totalIncome += $subtotal;

            // Ambil semua detail pesanan dari pesanan saat ini
            $orderDetails = $order->detailorder;

            // Loop melalui setiap detail pesanan dan tambahkan jumlah pesanan untuk setiap menu
            foreach ($orderDetails as $detail) {
                $menuId = $detail->id_menu;
                if (!isset($menuQuantities[$menuId])) {
                    $menuQuantities[$menuId] = 0;
                }
                $menuQuantities[$menuId] += $detail->jumlah;
            }
        }

        arsort($menuQuantities);

        // Ambil nama menu berdasarkan ID menu
        $menuNames = Menu::whereIn('id_menu', array_keys($menuQuantities))->pluck('nama_menu', 'id_menu');


        return view('report', [
            'totalIncome' => $totalIncome,
            'totalOrders' => $totalOrders,
            'menuNames' => $menuNames,
            // 'orderDetails' => $orderDetails,
            'menuQuantities' => $menuQuantities,
            'report' => $report
        ]);
    }
    public function storepengeluaran(Request $request)
    {
        $report = new Pengeluaran();
        $report->nama_pengeluaran = $request->input('nama_pengeluaran');
        $report->waktu_pengeluaran = $request->input('waktu_pengeluaran');
        $report->pengeluaran = $request->input('pengeluaran');
        $report->save();

        return back()->with('success', 'Pengeluaran berhasil ditambahkan!');
    }

    public function print(){

        return view('invoice');
    }
    public function orderdone(){
        return view('orderlistdone');
    }
    public function laporan(){
        return view('laporan');
    }
}
