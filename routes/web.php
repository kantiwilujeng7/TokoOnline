<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
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

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('kategori', KategoriController::class);
});

// Route::prefix('mahasiswa')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('pendaftaran', KategoriController::class);
// });


Route::prefix('mahasiswa')->group(function () {
    Route::get('pendaftaran', function () {
        return "Halaman pendaftaran";
    })->name('pendaftaran');
    Route::get('ujian', function () {
        return "Halaman ujian";
    })->name('ujian');
    Route::get('nilai', function () {
        return "Halaman nilai";
    })->name('nilai');
});
