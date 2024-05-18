<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\User;
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

        return view('neworder');
    }
    public function newdine(){

        return view('formnewdine');
    }
    public function newres(){

        return view('formnewres');
    }
    public function newtake(){

        return view('formnewtake');
    }
    public function laporan(){
        return view('laporan');
    }
    public function daftar(){
        return view('daftar');
    }
}
