<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
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
    public function show(){
        

    }
    public function neworder(){
        return view('formnewdine');
    }
    public function neworderdine(Request $request){
        $lastOrderId = Session::get('lastOrderId', 0);

    // Tambahkan 1 ke ID order terakhir untuk membuat ID order baru
        $newOrderId = $lastOrderId + 1;

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
