<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $username = $request->input('username');
        $karyawan = Karyawan::where('username', $username)->first();
        if ($karyawan) {
            if (password_verify($request->input('password'), $karyawan->password)) {
                $request->session()->regenerate();

                
                // elseif ($karyawan->jobdesk === 2) {
                //     return redirect()->route('index.bartender');
                // } elseif ($karyawan->jobdesk === 3) {
                //     return redirect()->route('index.kitchen');
                // }
                
            }
        }
        if ($karyawan->jobdesk === 'kasir') {
            return redirect()->route('index.kasir');
            
        }
        else if($karyawan->jobdesk === 'kitchen') {
            return redirect()->route('index.kitchen');
            
        }
        else if($karyawan->jobdesk === 'bartender') {
            return redirect()->route('index.bartender');
            
        }
        return back()->with('loginerror', 'Login Gagal');
    }
}
