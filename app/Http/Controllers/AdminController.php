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
    public function storeuser(Request $request){
        $foto = $request->file('foto');
        $fileName = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        $foto->move(public_path('/img'), $foto->getClientOriginalName());

        $user = new User();
        $user->id_user = (string) Str::uuid();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->password);
        $user->level_user = $request->input('level_user');
        $user->save();

        $karyawan = new Karyawan();
        $karyawan->id_user = $user->id_user;
        $karyawan->nama = $request->input('nama_lengkap');
        $karyawan->tgl_lahir = $request->input('tgl_lahir');
        $karyawan->alamat = $request->input('alamat');
        $karyawan->no_hp = $request->input('no_hp');
        $karyawan->gaji = $request->input('gaji');
        $karyawan->foto = $fileName . '.' . $foto->getClientOriginalExtension();
        $karyawan->save();

        return redirect()->route('user');
    }
    public function menu(){
        $menus = Menu::all();
        return view('admin.menu',[
            'menus' => $menus
        ]);
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
    public function destroymenu($id_menu){
        $menu = Menu::find($id_menu);
        $gambar_menu_path = public_path('img/menu/') . $menu->gambar_menu;
        if (file_exists($gambar_menu_path)) {
            unlink($gambar_menu_path);
        }
        $menu->delete();

        return back()->with('success', 'Menu berhasil dihapus.');
    }
    public function destroyuser($id_user){
        $user = User::find($id_user);
        $user->delete();

        if ($user->karyawan) {
            $user->karyawan->delete();
        }

        return back()->with('success', 'Menu berhasil dihapus.');
    }
}
