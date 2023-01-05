<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as RoutingController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', 'HomepageController@index');
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);
Route::get('/kategori/{slug}', [HomepageController::class, 'kategori.index']);
Route::get('/produk/{slug}', [HomepageController::class, 'produkdetail']);
Route::get('/admin', [DashboardController::class, 'index']);

// Route::prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('kategori', KategoriController::class);
// });

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index');
});

// Route group admin
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    //Route::group parent kategori
    Route::group(['prefix' => '/kategori'], function () {
        Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');
        Route::get('/edit', [KategoriController::class, 'edit'])->name('edit.kategori');
    });
    //Route::group parent produk
    Route::group(['prefix' => '/produk'], function () {
        Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
        Route::get('/create', [ProdukController::class, 'create'])->name('create.produk');
        Route::get('/show', [ProdukController::class, 'show'])->name('show.produk');
        Route::get('/edit', [ProdukController::class, 'edit'])->name('edit.produk');
    });

    //Route::group parent customer
    Route::group(['prefix' => '/customer'], function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    });

    //Route::group parent transaksi
    Route::group(['prefix' => '/transaksi'], function () {
        Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
        Route::get('/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
        Route::get('/show', [TransaksiController::class, 'show'])->name('transaksi.show');
    });

    //Route::group parent profil
    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/setting', [UserController::class, 'setting'])->name('user.setting');
    });



    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
});

// --- ROUTE GROUP ADMIN ---
// Route::group(['prefix' => '/admin'], function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');
//     Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');

//     /// --- ROUTE GROUP PARENT KATEGORI ---

//     Route::group(['prefix' => '/kategori'], function () {
//         Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
//         Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');
//     });


//     Route::group(['prefix' => '/transaksi'], function () {
//         Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
//         Route::get('/create', [TransaksiController::class, 'create'])->name('create.transaksi');
//     });

//     Route::group(['prefix' => '/laporan'], function () {
//         Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
//         Route::get('/create', [LaporanController::class, 'create'])->name('create.laporan');
//     });

//     Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
//     Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
// });


// UAS 5 JANUARI 2023

// Route::get('/dosen', function () {
//     return view('dosen/index');
// });
// Route::group(['prefix' => '/dosen', 'as' => 'dosen.'], function () {
//     Route::get('/profil', function () {
//         return view('dosen.v_profil');
//     })->name('profil');
//     Route::get('/data_pengampu', function () {
//         return view('dosen.v_ampu');
//     })->name('ampu');
//     // Route::resource('profil', DosenController::class);
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::prefix('dosen')->group(function () {
//     Route::get('profil', [DosenController::class, 'profil']);
//     Route::get('data_pengampu', [DosenController::class, 'data_pengampu']);
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
