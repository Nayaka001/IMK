<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index(){
        $today = Carbon::today();
        $orders = Order::with('detailorder')->whereDate('waktu_order', $today)->get();
        return view('kitchen.mainmenu', [
            'orders' => $orders,
        ]);
    }
    public function menu(Request $request){
        if ($request->has('search')) {
            $kategori = Kategori::all();
            $menu = Menu::where('nama_menu', 'LIKE', '%' . $request->search . '%')->get();

        } else {
            $kategori = Kategori::all();
            $menu = Menu::all();
        }
        
        return view('kitchen.menu', [
            'kategori' => $kategori,
            'menu' => $menu
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
    public function menuupdate(Request $request, $id_menu){
        $menu = Menu::find($id_menu);
        
        $menu->status = $request->input('status');
        $menu->save();

        return back()->with('succes', 'Berhasil merubah menjadi habis');
    }
    public function cooking(){
        $today = Carbon::today();
        $orders = Order::with('detailorder')->whereDate('waktu_order', $today)->get();
        return view('kitchen.cooking', [
            'orders' => $orders
        ]);
    }
    public function ready(){
        $today = Carbon::today();
        $orders = Order::with('detailorder')->whereDate('waktu_order', $today)->get();
        return view('kitchen.ready', [
            'orders' => $orders
        ]);
    }
    public function done(){
        $today = Carbon::today();
        $orders = Order::with('detailorder')->whereDate('waktu_order', $today)->get();
        return view('kitchen.done', [
            'orders' => $orders
        ]);
    }
    public function reser(){
        $today = Carbon::today();
        $orders = Order::with('detailorder')->whereDate('waktu_order', $today)->get();
        return view('kitchen.reserve', [
            'orders' => $orders
        ]);
    }
    
    public function update(Request $request, $id_order, $id_order_details){
        $order = OrderDetail::where('id_order', $id_order)->where('id_order_details', $id_order_details)->first();
        if ($order) {
            // Perbarui status pesanan
            $order->progress = $request->input('progress');
            $order->save();
        }
    
        return back()->with('succes', 'Status pesanan berhasil menjadi siap disajikan');
    }
    // public function modal($id_order, $id_order_details){
    //     $order = OrderDetail::where('id_order', $id_order)
    //                     ->where('id_order_details', $id_order_details)
    //                     ->first();
    
    // if ($order) {
    //     $detail = [
    //         // 'nama_menu' => $order->menu->nama_menu,
    //         'note' => $order->note,
    //         // 'jumlah' => $order->jumlah,
    //         // 'gambar_menu' => $order->menu->gambar_menu
    //     ];
    //     return response()->json($detail);
    // } else {
    //     return response()->json(['error' => 'Order detail not found'], 404);
    // }

    // }
}
