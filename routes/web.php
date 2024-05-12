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
Route::get('/kasir/main', [KasirController::class, 'index'])->name('index.kasir');
Route::get('/kasir/neworder', [KasirController::class, 'neworder'])->name('kasir.neworder');
Route::get('/kasir/neworder/newdine', [KasirController::class, 'newdine'])->name('kasir.newdine');
Route::get('/kasir/neworder/newres', [KasirController::class, 'newres'])->name('kasir.newres');
Route::get('/kasir/neworder/newtake', [KasirController::class, 'newtake'])->name('kasir.newtake');
Route::get('/kasir/laporan', [KasirController::class, 'laporan'])->name('index.laporan');
Route::get('/kasir/daftar', [KasirController::class, 'daftar'])->name('index.daftar');

//Bagian Admin
Route::get('/admin', [AdminController::class, 'index'])->name('index.admin');

//Bagian Bartender
Route::get('/bartender', [BartenderController::class, 'index'])->name('index.bartender');


Route::get('/form-dine-in', function () {
    return view('formnewdine');
});
Route::get('/form-take-away', function () {
    return view('formnewtake');
});
Route::get('/form-reserve', function () {
    return view('formnewres');
});
