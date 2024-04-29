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
Route::post('/login', [LoginController::class, 'login'])->name('login.login');

//Bagian Kitchen
Route::get('/kitchen', [KitchenController::class, 'index'])->name('index.kitchen');

//Bagian Kasir
Route::get('/kasir', [KasirController::class, 'index'])->name('index.kasir');

//Bagian Admin
Route::get('/admin', [AdminController::class, 'index'])->name('index.admin');

//Bagian Bartender
Route::get('/bartender', [BartenderController::class, 'index'])->name('index.bartender');
