<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BartenderController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Bagian Halaman Awal
Route::get('/', [LoginController::class, 'index'])->name('index.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Bagian Kitchen
Route::get('/kitchen', [KitchenController::class, 'index'])->name('index.kitchen');

//Bagian Kasir
Route::middleware(['auth', 'role:Kasir'])->group(function () {
    Route::get('/menu', [KasirController::class, 'index'])->name('index.menu');
    Route::get('/kasir/neworder', [KasirController::class, 'neworder'])->name('kasir.neworder');
    Route::post('/kasir/neworder/newdine', [KasirController::class, 'neworderdine'])->name('kasir.newdine');
    Route::post('/kasir/neworder/newres', [KasirController::class, 'neworderres'])->name('kasir.newres');
    Route::post('/kasir/neworder/newtake', [KasirController::class, 'newordertake'])->name('kasir.newtake');
    
    Route::get('/kasir/addmenu/newdine', [KasirController::class, 'addnewdine'])->name('kasir.addnewdine');
    Route::get('/kasir/addmenu/newres', [KasirController::class, 'addnewres'])->name('kasir.addnewres');
    Route::get('/kasir/addmenu/newtake', [KasirController::class, 'addnewtake'])->name('kasir.addnewtake');
    Route::get('/kasir/laporan', [KasirController::class, 'laporan'])->name('index.laporan');
    Route::get('/kasir/daftar', [KasirController::class, 'daftar'])->name('index.daftar');
});

//Bagian Admin
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('index.admin');
    Route::get('/admin/user', [AdminController::class, 'user'])->name('user');
    Route::get('/admin/user/pelayan', function () {
        return view('admin.pelayan');
    })->name('user.pelayan');
    Route::get('/admin/user/kitchen', function () {
        return view('admin.kitchen');
    })->name('user-kitchen');
    Route::get('/admin/user/bartender', function () {
        return view('admin.bartender');
    })->name('user-bartender');
    Route::get('/admin/user/kasir', function () {
        return view('admin.kasir');
    })->name('user-kasir');
});

//Bagian Bartender
Route::middleware(['auth', 'role:Bartender'])->group(function () {
    Route::get('/bartender', [BartenderController::class, 'index'])->name('index.bartender');



});

Route::get('/form-dine-in', function () {
    return view('formnewdine');
});
Route::get('/form-take-away', function () {
    return view('formnewtake');
});
Route::get('/form-reserve', function () {
    return view('formnewres');
});

Route::get('/new-order', function () {
    return view('neworder');
})->name('new-order');

Route::get('/order-list', function () {
    return view('orderlist');
})->name('order-list');

// Route::get('/menu', function () {
//     return view('menu');
// })->name('menu');

Route::get('/menu/kids', function () {
    return view('menukids');
});

Route::get('/menu/sayuran', function () {
    return view('menusayuran');
});

Route::get('/menu/steak', function () {
    return view('menusteak');
});

Route::get('/menu/steak', function () {
    return view('menusteak');
});

Route::get('menu/rice', function () {
    return view('menurice');
});

Route::get('/menu/geprek', function () {
    return view('menugeprek');
});

Route::get('/menu/cemilan', function () {
    return view('menucemilan');
});

Route::get('/menu/minuman', function () {
    return view('menuminuman');
});

Route::get('/report', function () {
    return view('report');
})->name('report');


// tes (nnt dihapus)
Route::get('/new-order', function () {
    return view('formnewdine');
})->name('new-order');

// Route::get('/new-order/addmenu', function () {
//     return view('neworder');
// })->name('new-order');

//kitchen
Route::get('/kitchen-main', function () {
    return view('kitchen.mainmenu');
});
Route::get('/kitchen-detail', function () {
    return view('kitchen.detail');
});
