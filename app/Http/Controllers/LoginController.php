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
    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();
            
            if ($user->level_user === 'Kasir') {
                return redirect()->route('index.menu')->with('notification', 'Login Berhasil sebagai Kasir');
            } elseif ($user->level_user === 'Kitchen') {
                return redirect()->route('index.kasir')->with('notification', 'Login Berhasil sebagai Kasir');
            } elseif ($user->level_user === 'Bartender') {
                return redirect()->route('index.bartender')->with('notification', 'Login Berhasil sebagai Kasir');
            } elseif ($user->level_user === 'Admin') {
                return redirect()->route('index.admin')->with('notification', 'Halo, selamat datang admin.');
            }
        }
        
        return back()->with('loginerror', 'Login Gagal, Input yang anda masukkan tidak tersedia');
    }
    public function logout(){
        Auth::logout();
     
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/');
        }
}
