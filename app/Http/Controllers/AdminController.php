<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalKitchenUsers = User::where('level_user', 'Kitchen')->count();
        $totalBartenderUsers = User::where('level_user', 'Bartender')->count();
        $totalKasirUsers = User::where('level_user', 'Kasir')->count();
        $totalPelayanUsers = User::where('level_user', 'Pelayan')->count();
        $totalMenu = Menu::count();

        return view('admin.dashboard',[
            'totalKitchenUsers' => $totalKitchenUsers,
            'totalBartenderUsers' => $totalBartenderUsers,
            'totalKasirUsers' => $totalKasirUsers,
            'totalPelayanUsers' => $totalPelayanUsers,
            'totalMenu' => $totalMenu
        ]);
    }
    public function user(){
        $user = User::all();
        $karyawan = Karyawan::all();
        return view('admin.user',[
            'user' => $user,
            'karyawan' => $karyawan
        ]);
    }
}
