<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PtController;
use App\Http\Controllers\TipeController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// pt

Route::get('/login', [LoginController::class, 'pt']);
Route::post('/login', [LoginController::class, 'check_pt'])->name('pt_login');

Route::group(['middleware'=>['pts']], function (){
    Route::get('/', [PtController::class, 'pt_dashboard'])->name('pt_dashboard');

    Route::get('/logout', [LoginController::class, 'logout_pt'])->name('pt_logout');

    Route::get('/form', [FormController::class, 'index'])->name('pt_form');

    Route::post('/hasil', [FormController::class, 'result'])->name('pt_hasil');

    Route::get('/pt/edit/{id}', [PtController::class, 'pt_edit'])->name('pt_edit');
    Route::post('/pt/update', [PtController::class, 'pt_update']);

});

// admin
Route::get('/admin/login', [LoginController::class, 'admin'])->name('admin_login');
Route::post('/admin/login', [LoginController::class, 'check_admin']);

Route::group(['middleware'=>['admin']], function (){
    Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');

    Route::get('/admin/logout', [LoginController::class, 'logout_admin'])->name('admin_logout');

    Route::get('/pertanyaan', [PertanyaanController::class, 'index'])->name('pertanyaan');

    Route::get('/pertanyaan/tambah', [PertanyaanController::class, 'add'])->name('pertanyaan_tambah');
    Route::post('/pertanyaan/store', [PertanyaanController::class, 'store']);
    Route::get('/pertanyaan/edit/{id}', [PertanyaanController::class, 'edit'])->name('pertanyaan_edit');
    Route::post('/pertanyaan/update', [PertanyaanController::class, 'update']);
    Route::get('/pertanyaan/hapus/{id}', [PertanyaanController::class, 'hapus']);

    Route::get('/pertanyaan/kategori', [KategoriController::class, 'index'])->name('pertanyaan_kategori');

    Route::get('/pertanyaan/kategori/tambah', [KategoriController::class, 'add'])->name('kategori_tambah');
    Route::post('/pertanyaan/kategori/store', [KategoriController::class, 'store']);
    Route::get('/pertanyaan/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori_edit');
    Route::post('/pertanyaan/kategori/update', [KategoriController::class, 'update']);
    Route::get('/pertanyaan/kategori/hapus/{id}', [KategoriController::class, 'hapus']);

    Route::get('/pertanyaan/tipe', [TipeController::class, 'index'])->name('pertanyaan_tipe');

    Route::get('/pertanyaan/tipe/tambah', [TipeController::class, 'add'])->name('tipe_tambah');
    Route::post('/pertanyaan/tipe/store', [TipeController::class, 'store']);
    Route::get('/pertanyaan/tipe/edit/{id}', [TipeController::class, 'edit'])->name('tipe_edit');
    Route::post('/pertanyaan/tipe/update', [TipeController::class, 'update']);
    Route::get('/pertanyaan/tipe/hapus/{id}', [TipeController::class, 'hapus']);

    Route::get('/jawaban', [JawabanController::class, 'index'])->name('jawaban');

    Route::get('/jawaban/tambah', [JawabanController::class, 'add'])->name('jawaban_tambah');
    Route::post('/jawaban/store', [JawabanController::class, 'store']);
    Route::get('/jawaban/edit/{id}', [JawabanController::class, 'edit'])->name('jawaban_edit');
    Route::post('/jawaban/update', [JawabanController::class, 'update']);
    Route::get('/jawaban/hapus/{id}', [JawabanController::class, 'hapus']);

    Route::get('/perguruantinggi', [PtController::class, 'index'])->name('perguruan_tinggi');

    Route::get('/perguruantinggi/tambah', [PtController::class, 'add'])->name('admin_pt_tambah');
    Route::post('/perguruantinggi/store', [PtController::class, 'store']);
    Route::get('/perguruantinggi/edit/{id}', [PtController::class, 'admin_edit'])->name('admin_pt_edit');
    Route::post('/perguruantinggi/update', [PtController::class, 'update']);
    Route::get('/perguruantinggi/hapus/{id}', [PtController::class, 'hapus']);

    Route::get('/riwayatjawaban', [FormController::class, 'all'])->name('riwayat_jawaban');
});