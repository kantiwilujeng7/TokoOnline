<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as RoutingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home', ['nama' => 'Kanti Wilujeng']);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', function () {
    return view('Homepage.index');
});


Route::get('/latihan', [LatihanController::class, 'index']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);
Route::get('/admin', [DashboardController::class, 'index']);

// Route::prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('kategori', KategoriController::class);
// });

// --- ROUTE GROUP ADMIN ---
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');

    /// --- ROUTE GROUP PARENT KATEGORI ---

    Route::group(['prefix' => '/kategori'], function () {
        Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');
    });


    Route::group(['prefix' => '/transaksi'], function () {
        Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
        Route::get('/create', [TransaksiController::class, 'create'])->name('create.transaksi');
    });

    Route::group(['prefix' => '/laporan'], function () {
        Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/create', [LaporanController::class, 'create'])->name('create.laporan');
    });

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
});


// --- UTS ROUTE GROUP ---


// Route::prefix('mahasiswa')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('pendaftaran', KategoriController::class);
// });

// Route::prefix('mahasiswa')->group(function () {
//     Route::get('pendaftaran', function () {
//         return "Halaman pendaftaran";
//     })->name('pendaftaran');
//     Route::get('ujian', function () {
//         return "Halaman ujian";
//     })->name('ujian');
//     Route::get('nilai', function () {
//         return "Halaman nilai";
//     })->name('nilai');
// });

// Route::group(['prefix' => '/mahasiswa', 'as' => mahasiswa function() {
// Route::group(['prefix' => 'mahasiswa'], function () {

// Route::prefix('/mahasiswa')->group(function () {
//     Route::get('pendaftaran', function () {
//         $title = 'Pendaftaran';
//         $text = ' Ini Halaman Pendaftaran';
//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('ujian', function () {
//         $title = 'ujian';
//         $text = 'Ini Halaman Ujian';
//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('nilai', function () {
//         $title = 'nilai';
//         $text = 'Ini Halaman Nilai';
//         return view('mahasiswa.index', compact('title', 'text'));
//     });
// });
// });
