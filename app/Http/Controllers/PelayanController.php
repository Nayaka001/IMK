<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use App\Models\Meja;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PelayanController extends Controller
{
    public function index(){
        return view('pelayan.orderlistdone');
    }
    public function pelayanupdate($id_order){

            
        $order = Order::find($id_order);
        foreach ($order->detailorder as $detailOrder) {
            $detailOrder->progress = 'Selesai';
            $detailOrder->save();
        }
        
        return back();
    }
    public function pelayandone($id_meja){

        $meja = Meja::find($id_meja);
        $meja->status = 'Tersedia';
        $meja->save();
            

        
        return back();
    }
    public function orderdone(){
        $today = Carbon::today();

        $orders = Order::whereDate('waktu_order', $today)->get();
        $detail = Order::with('detailorder')->get();
        $meja = Order::with('meja')->get();

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
                'meja' => $meja
            ];
        }

        // Mengirim hasil ke view
        return view('pelayan.orderlistdone', ['ordersWithDetails' => $ordersWithDetails]);
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
        return view('pelayan.orderlistwaiting', ['ordersWithDetails' => $ordersWithDetails]);
    }
    public function modalp($id_order){
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
}
