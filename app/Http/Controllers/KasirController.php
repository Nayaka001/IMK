<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
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
        $customerName = Session::get('nama_pelanggan');
        $customerMeja = Session::get('nomor_meja');
        $customerId = Session::get('order_id');
        $customerJumlah = Session::get('jumlah_orang');
        // $total = array_reduce($validated['items'], function ($carry, $item) {
        //     return $carry + ($item['price'] * $item['quantity']);
        // }, 0);

        $order = new Order();
        $order->id_order = $customerId;
        $order->tipe_order = $request->input('tipe_order');
        $order->nama_pelanggan = $customerName;
        $order->jlh_org = $customerJumlah;
        $order->id_meja = $customerMeja;
        $order->save();

        foreach ($validated['items'] as $item) {
                $orderDetail = new OrderDetail();
                $orderDetail->id_order = $customerId; // Menggunakan ID Order yang baru saja disimpan
                $orderDetail->id_menu = $item['menu_id'];
                $orderDetail->note = $item['note'] ?? null;
                $orderDetail->jumlah = $item['quantity'];
                $orderDetail->subtotal = $item['price'];
                $orderDetail->progress = $request->input('progress');
                $orderDetail->save();
        }
        // dd($request->all());
        return redirect()->route('kasir.neworder');

    }
    public function neworder(){
        return view('formnewdine');
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
    public function neworderres(Request $request){

        Session::put('nama_pelanggan', $request->nama_pelanggan);
        // dd(Session::all());
        return redirect()->route('kasir.addnewdine');
    }
    public function newordertake(Request $request){

        Session::put('nama_pelanggan', $request->nama_pelanggan);
        Session::put('nomor_hp', $request->nomor_hp);
        Session::put('jumlah_orang', $request->jumlah_orang);
        Session::put('tangga_datang', $request->tangga_datang);
        Session::put('waktu_datang', $request->waktu_datang);
        Session::put('nomor_meja', $request->nomor_meja);
        // dd(Session::all());
        return redirect()->route('kasir.addnewdine');
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
    public function addnewres(){

        return view('neworder');
    }
    public function addnewtake(){

        return view('neworder');
    }
    public function laporan(){
        return view('laporan');
    }
    public function daftar(){
        return view('daftar');
    }
}
