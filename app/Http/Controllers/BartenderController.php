<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BartenderController extends Controller
{
    public function index(){
        return view('bartender');
    }
}
