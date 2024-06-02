<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index(){
        $orders = Order::with('detailorder')->get();
        return view('kitchen.mainmenu', [
            'orders' => $orders
        ]);
    }
    public function detail($id_order){
        $details = OrderDetail::where('id_order', $id_order)->get();
        $order = Order::where('id_order', $id_order)->first();
        return view('kitchen.detail', [
            'details' => $details,
            'order' => $order
        ]);
    }
    public function modal($id_order, $id_order_details){
        $order = OrderDetail::where('id_order', $id_order)
                        ->where('id_order_details', $id_order_details)
                        ->first();
    
    if ($order) {
        $detail = [
            // 'nama_menu' => $order->menu->nama_menu,
            'note' => $order->note,
            // 'jumlah' => $order->jumlah,
            // 'gambar_menu' => $order->menu->gambar_menu
        ];
        return response()->json($detail);
    } else {
        return response()->json(['error' => 'Order detail not found'], 404);
    }
    }
}
