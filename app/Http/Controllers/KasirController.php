<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index(){
        return view('mainmenu');
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
