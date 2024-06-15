<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BartenderController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelayanController;
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
Route::middleware(['auth', 'role:Kitchen'])->group(function () {
Route::get('/kitchen-main', [KitchenController::class, 'index'])->name('index.kitchen');
Route::get('/kitchenmenu', [KitchenController::class, 'menu'])->name('menu.kitchen');
Route::PUT('/kitchenmenu/update/{id_menu}', [KitchenController::class, 'menuupdate'])->name('menu.update');
Route::get('/kcooking', [KitchenController::class, 'cooking'])->name('index.cooking');
Route::get('/kready', [KitchenController::class, 'ready'])->name('index.ready');
Route::get('/kdone', [KitchenController::class, 'done'])->name('index.done');
Route::get('/kreser', [BartenderController::class, 'reser'])->name('index.reser');
// Route::get('/kitchen-cooking', [KitchenController::class, 'cooking'])->name('index.cooking');
Route::get('/kitchen-detail/{id_order}',  [KitchenController::class, 'detail'])->name('kitchen.detail');

// Route::get('/kitchen-detail/{id_order}/{id_order_details}',  [KitchenController::class, 'modal'])->name('kitchen.detailmodal');
Route::put('/kitchen-update/{id_order}/{id_order_details}',  [KitchenController::class, 'update'])->name('kitchen.update');
});

//Bagian Kasir
Route::middleware(['auth', 'role:Kasir'])->group(function () {
    Route::get('/menu', [KasirController::class, 'index'])->name('index.menu');
    Route::get('/kasir/neworder', [KasirController::class, 'neworder'])->name('kasir.neworder');
    Route::post('/kasir/neworder/newdine', [KasirController::class, 'neworderdine'])->name('kasir.newdine');
    Route::post('/kasir/neworder/newres', [KasirController::class, 'neworderres'])->name('kasir.newres');
    Route::post('/kasir/neworder/newtake', [KasirController::class, 'newordertake'])->name('kasir.newtake');
    
    Route::get('/kasir/addmenu/newdine', [KasirController::class, 'addnewdine'])->name('kasir.addnewdine');
    Route::post('/kasir/neworder/newdine/action', [KasirController::class, 'store'])->name('kasir.newdine.action');
    Route::get('/kasir/addmenu/newres', [KasirController::class, 'addnewres'])->name('kasir.addnewres');
    Route::get('/kasir/addmenu/newtake', [KasirController::class, 'addnewtake'])->name('kasir.addnewtake');
    Route::get('/invoice', [KasirController::class, 'print'])->name('print');

    Route::get('/order-list', [KasirController::class, 'orderwait'])->name('index.orderwait');
    
    Route::get('/order-list/done', [KasirController::class, 'orderdone'])->name('index.orderdone');
    Route::get('/ordersdone/{id_order}', [KasirController::class, 'modaldone'])->name('modaldone');
    Route::get('/kasir/laporan', [KasirController::class, 'laporan'])->name('index.laporan');
    Route::post('/kasir/laporan/pengeluaran', [KasirController::class, 'storepengeluaran'])->name('store.pengeluaran');

    Route::get('/report',  [KasirController::class, 'indexreport'])->name('report');
    Route::get('/report/{id_order}',  [KasirController::class, 'report'])->name('modal.report');
});

//Bagian Admin
Route::middleware(['auth', 'role:Admin'])->group(function () {
    // session()->now('success', 'Pendaftaran Berhasil!');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('index.admin');
    Route::get('/admin/user', [AdminController::class, 'user'])->name('user');
    Route::get('/admin/form-daftar-akun', [AdminController::class, 'daftar'])->name('daftar-akun');
    Route::post('/admin/store-daftar', [AdminController::class, 'storeuser'])->name('store.user');
    Route::get('/admin/menu', [AdminController::class, 'menu'])->name('menu');
    Route::get('/admin/menu/kategori', [AdminController::class, 'kategori'])->name('kategori');
    Route::post('/admin/menu/subkategori', [AdminController::class, 'subkategori'])->name('subkategori');
    Route::post('/admin/storemenu', [AdminController::class, 'storemenu'])->name('storemenu');
    Route::delete('/admin/destroymenu/{id_menu}', [AdminController::class, 'destroymenu'])->name('destroymenu');
    Route::put('/admin/updatemenu/{id_menu}', [AdminController::class, 'updatemenu'])->name('updatemenu');
    Route::delete('/admin/destroyuser/{id_user}', [AdminController::class, 'destroyuser'])->name('destroyuser');
    Route::put('/admin/updateuser/{id_user}', [AdminController::class, 'updateuser'])->name('updateuser');
    Route::get('/admin/laporan-penjualan', [AdminController::class, 'laporan'])->name('laporan-penjualan');
    Route::get('/admin/meja', [AdminController::class, 'meja'])->name('meja');
    Route::put('/admin/meja/update/{id_meja}', [AdminController::class, 'updatemeja'])->name('update.meja');
    Route::delete('/admin/meja/delete/{id_meja}', [AdminController::class, 'deletemeja'])->name('delete.meja');
    Route::post('/admin/meja/tambah', [AdminController::class, 'tambahmeja'])->name('tambah.meja');
    Route::get('/cetak-laporan-penjualan', [AdminController::class, 'cetakLaporanPenjualan'])->name('cetak-laporan-penjualan');
    Route::get('/cetak-laporan-pengeluaran', [AdminController::class, 'cetakLaporanPengeluaran'])->name('cetak-laporan-pengeluaran');

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
    Route::get('/admin/profile', function () {
        return view('admin.profile');
    })->name('profile');



    Route::get('/admin/laporan-pendapatan', function () {
        return view('admin.laporan-pendapatan');
    })->name('laporan-pendapatan');
});

//Bagian Bartender
Route::middleware(['auth', 'role:Bartender'])->group(function () {
    Route::get('/bartender', [BartenderController::class, 'index'])->name('index.bartender');
    Route::get('/bprocess', [BartenderController::class, 'process'])->name('index.process');
    Route::get('/bready', [BartenderController::class, 'ready'])->name('index.bready');
    Route::get('/bdone', [BartenderController::class, 'done'])->name('index.bdone');
    Route::get('/breser', [BartenderController::class, 'reser'])->name('index.breser');
    Route::get('/bartender-detail/{id_order}',  [BartenderController::class, 'detail'])->name('bartender.detail');
    
    // Route::get('/kitchen-detail/{id_order}/{id_order_details}',  [KitchenController::class, 'modal'])->name('kitchen.detailmodal');
    Route::put('/bartender-update/{id_order}/{id_order_details}',  [BartenderController::class, 'update'])->name('bartender.update');
    


});

Route::get('/orders/{id_order}', [KasirController::class, 'modal'])->name('modal');
Route::get('/pelayan/{id_order}', [KasirController::class, 'modalp'])->name('modalp');

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

// Route::get('/order-list', function () {
//     return view('orderlist');
// })->name('order-list');

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




// tes (nnt dihapus)
Route::get('/new-order', function () {
    return view('formnewdine');
})->name('new-order');



// Route::get('/order-list/done', function () {
//     return view('orderlistdone');
// })->name('order-list');


// Route::get('/new-order/addmenu', function () {
//     return view('neworder');
// })->name('new-order');

//kitchen

Route::get('/kitchen-cooking', function () {
    return view('kitchen.cooking');
});
Route::get('/kitchen-ready', function () {
    return view('kitchen.ready');
});
Route::get('/kitchen-done', function () {
    return view('kitchen.done');
});
Route::get('/kitchen-reserve', function () {
    return view('kitchen.reserve');
});

Route::get('/kitchen-menu', function () {
    return view('kitchen.menu');
});
Route::get('/kitchen-menu/cemilan', function () {
    return view('kitchen.menucemilan');
});
Route::get('/kitchen-menu/geprek', function () {
    return view('kitchen.menugeprek');
});
Route::get('/kitchen-menu/kids', function () {
    return view('kitchen.menukids');
});
Route::get('/kitchen-menu/minuman', function () {
    return view('kitchen.menuminuman');
});
Route::get('/kitchen-menu/rice', function () {
    return view('kitchen.menurice');
});
Route::get('/kitchen-menu/sayuran', function () {
    return view('kitchen.menusayuran');
});
Route::get('/kitchen-menu/steak', function () {
    return view('kitchen.menusteak');
});


//bartender
Route::get('/bartender-main', function () {
    return view('bartender.mainmenu');
});
Route::get('/bartender-process', function () {
    return view('bartender.process');
});
Route::get('/bartender-done', function () {
    return view('bartender.done');
});
Route::get('/bartender-ready', function () {
    return view('bartender.ready');
});
Route::get('/bartender-detail', function () {
    return view('bartender.detail');
});
Route::get('/bartender-menu', function () {
    return view('bartender.menu');
});
Route::get('/bartender-reserve', function () {
    return view('bartender.reserve');
});

//pelayan
Route::get('/pelayan-list', [PelayanController::class, 'orderwait'])->name('pelayan.main');
Route::get('/pelayan-list/done', [PelayanController::class, 'orderdone'])->name('pelayan.done');
// Route::get('/pelayan-list/done', function () {
//     return view('pelayan.orderlistdone');
// });
// Route::get('/pelayan-list', function () {
//     return view('pelayan.orderlistwaiting');
// })->name('pelayan.main');

