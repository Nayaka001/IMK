<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Models\DetailPesanan;
use App\Models\Faktur;
use App\Models\Kategori;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Pengeluaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // dd($request->all());
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

        if ($tipe === 'Makan di Tempat') {
            $customerName = Session::get('nama_pelanggan');
            $customerMeja = Session::get('nomor_meja');
            
            $customerId = Session::get('order_id');
            $customerJumlah = Session::get('jumlah_orang');
            $tipe_order = Session::get('tipe_order');
    
            $order = new Order();
            $order->id_order = $customerId;
            $order->tipe_order = $tipe_order;
            $order->id_user = $request->input('id_user');
            $order->tipe_pembayaran = $request->input('job');
            $order->nama_pelanggan = $customerName;
            $order->jlh_org = $customerJumlah;
            $order->id_meja = $customerMeja;
            
            $order->save();

            $meja = Meja::find($customerMeja);
            if ($customerMeja) {
                $meja->status = 'Digunakan'; // Contoh status jika meja diisi
            }
            $meja->save();
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
            $faktur = new Faktur();
            $faktur->id_order = $customerId;
            if ($request->input('job') === 'Tunai') {
                $faktur->total_uang = $request->total_uang;
            } else {
                $total_subtotal = OrderDetail::where('id_order', $customerId)->sum('subtotal');
                $faktur->total_uang = $total_subtotal;
            }
            $faktur->kembalian = $request->kembalian;
            $faktur->save();
        }
        else if($tipe === 'Bawa Pulang'){
            $customerName = Session::get('nama_pelanggan');
            $customerId = Session::get('order_id');
            $tipe_order = Session::get('tipe_order');
    
            $order = new Order();
            $order->id_order = $customerId;
            $order->tipe_order = $tipe_order;
            $order->id_user = $request->input('id_user');
            $order->tipe_pembayaran = $request->input('job');
            $order->nama_pelanggan = $customerName;
            $order->save();
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
            $faktur = new Faktur();
            $faktur->id_order = $customerId;
            if ($request->input('job') === 'Tunai') {
                $faktur->total_uang = $request->total_uang;
            } else {
                $total_subtotal = OrderDetail::where('id_order', $customerId)->sum('subtotal');
                $faktur->total_uang = $total_subtotal;
            }
            
            $faktur->kembalian = $request->kembalian;
            $faktur->save();
        }
        else if($tipe === 'Reservasi'){
            $customerName = Session::get('nama_pelanggan');
            $customerId = Session::get('order_id');
            $tipe_order = Session::get('tipe_order');
            $customerJumlah = Session::get('jumlah_orang');
            $customerMeja = Session::get('nomor_meja');
            $waktu = Session::get('waktu_datang');
            $hp = Session::get('no_hp');

            $order = new Order();
            $order->id_order = $customerId;
            $order->tipe_order = $tipe_order;
            $order->tipe_pembayaran = $request->input('job');
            $order->id_user = $request->input('id_user');
            $order->nama_pelanggan = $customerName;
            $order->jlh_org = $customerJumlah;
            $order->id_meja = $customerMeja;
            $order->no_hp = $hp;
            $order->kedatangan = $waktu;
            $order->save();

            $meja = Meja::find($customerMeja);
            if ($customerMeja) {
                $meja->status = 'Dipesan'; // Contoh status jika meja diisi
            }
            $meja->save();
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
            $faktur = new Faktur();
            $faktur->id_order = $customerId;
            if ($request->input('job') === 'Tunai') {
                $faktur->total_uang = $request->total_uang;
            } else {
                $total_subtotal = OrderDetail::where('id_order', $customerId)->sum('subtotal');
                $faktur->total_uang = $total_subtotal;
            }
            $faktur->kembalian = $request->kembalian;
            $faktur->save();
        }
        
        // dd($request->all());
        $id_order = Session::get('order_id');
        event(new OrderCreated($id_order));
        return redirect()->route('kasir.neworder')->with('redirectDelay', true);

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
        $lastOrderId = Order::max('id_order');

        if (is_null($lastOrderId)) {
            $newOrderId = 1; // Atur nilai awal jika tidak ada data order
        } else {
            $newOrderId = $lastOrderId + 1; // Jika ada data order, tambahkan 1
        }
        Session::put('tipe_order', $request->tipe_order);
        Session::put('nama_pelanggan', $request->nama_pelanggan);
        Session::put('no_hp', $request->no_hp);
        Session::put('jumlah_orang', $request->jumlah_orang);
        Session::put('waktu_datang', $request->waktu_datang);
        Session::put('nomor_meja', $request->nomor_meja);
        Session::put('order_id', $newOrderId);
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
        $today = Carbon::today();

        $orders = Order::whereDate('waktu_order', $today)->get();
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
    public function modaldone($id_order){
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
        // $pesan = DetailPesanan::whereDate('waktu_order', now()->toDateString())
        //                 ->orderBy('waktu_order')
        //                 ->get();
        
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
            'orders' => $orders,
            // 'orderDetails' => $orderDetails,
            'menuQuantities' => $menuQuantities,
            'report' => $report
        ]);
    }
    public function report($id_order){
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
    public function storepengeluaran(Request $request)
    {
        $report = new Pengeluaran();
        $report->nama_pengeluaran = $request->input('nama_pengeluaran');
        $report->waktu_pengeluaran = $request->input('waktu_pengeluaran');
        $report->pengeluaran = $request->input('pengeluaran');
        $report->id_user = $request->input('user');
        $report->save();

        return back()->with('success', 'Pengeluaran berhasil ditambahkan!');
    }

    public function print(){
        $latestOrder = Order::latest('id_order')->first();
        $latestOrderId = $latestOrder ? $latestOrder->id_order : null;
        $latestWaktu = Order::latest('id_order')->first();
        $latestWaktuId = $latestWaktu->waktu_order;
        $latesttipe = Order::latest('id_order')->first();
        $latesttipeId = $latesttipe->tipe_pembayaran;
        $pelanggan = Order::latest('id_order')->first();
        $pelangganid = $pelanggan->nama_pelanggan;
        $tipe = Order::latest('id_order')->first();
        $tipeid = $tipe->tipe_order;
        $bayar = Faktur::latest('id_order')->first();
        $bayarid = $bayar->total_uang;
        $kembali = Faktur::latest('id_order')->first();
        $kembaliid = $kembali->kembalian;

        $order = Order::where('id_order', $latestOrderId)->get();
        $order_detail = OrderDetail::where('id_order', $latestOrderId)->get();
        $total_harga = OrderDetail::where('id_order', $latestOrderId)
                        ->get()
                        ->sum(function ($orderDetail) {
                            return $orderDetail->subtotal * $orderDetail->jumlah;
                        });
        $bayar = Faktur::where('id_order', $latestOrderId)->get();
        
        return view('invoice', [
            'latestOrderId' => $latestOrderId,
            'latestWaktuId' => $latestWaktuId,
            'latesttipeId' => $latesttipeId,
            'pelangganid' => $pelangganid,
            'total_harga' => $total_harga,
            'tipeid' => $tipeid,
            'order' => $order,
            'order_detail' => $order_detail,
            'bayarid' => $bayarid,
            'kembaliid' => $kembaliid
        ]);

    }
    public function orderdone(){
        $today = Carbon::today();

        $orders = Order::whereDate('waktu_order', $today)->get();
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
        return view('orderlistdone', ['ordersWithDetails' => $ordersWithDetails]);
    }
    public function laporan(){
        return view('laporan');
    }
}
