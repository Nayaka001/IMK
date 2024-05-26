<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    public function daftar(){
        
        return view('admin.form-daftar-akun');
    }
    public function storedaftar(Request $request){
        $user = User::create([
            'id_user' => (string) Str::uuid(),
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level_user' => $request->level_user
        ]);
        Karyawan::create([
            'id_user' => $user->id_user,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'gaji' => $request->gaji,
            'foto' => $request->foto,
        ]);
        return redirect()->route('user');
    }
    public function menu(){
        $menus = Menu::all();
        return view('admin.menu',[
            'menus' => $menus
        ]);
    }
    public function destroymenu($id_menu){
        $menu = Menu::find($id_menu);
        $gambar_menu_path = public_path('img/menu/') . $menu->gambar_menu;
        if (file_exists($gambar_menu_path)) {
            unlink($gambar_menu_path);
        }
        $menu->delete();

        return back()->with('success', 'Menu berhasil dihapus.');
    }
    public function storemenu(Request $request){
        $foto = $request->file('foto');
        $fileName = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        $foto->move(public_path('img/menu'), $foto->getClientOriginalName());

        $subkategori = $request->input('subkategori');
        $kategori = Kategori::where('subkategori', $subkategori)->first();
        $id_kategori = $kategori->id_ktgmenu;

        $menu = new Menu();
        $menu->nama_menu = $request->input('nama');
        $menu->harga = $request->input('harga');
        $menu->keterangan = $request->input('keterangan');
        $menu->id_ktgmenu = $id_kategori;
        $menu->gambar_menu = $fileName . '.' . $foto->getClientOriginalExtension();
        $menu->save();

        return back();
    }
}
