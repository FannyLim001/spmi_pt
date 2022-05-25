<?php

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
    Route::get('/', [LoginController::class, 'pt_dashboard']);

    Route::get('/logout', [LoginController::class, 'logout_pt'])->name('pt_logout');

    Route::get('/form', [LoginController::class, 'pt_form']);

    Route::post('/hasil', [LoginController::class, 'show']);

    Route::get('/pt/edit/{id}', [LoginController::class, 'pt_edit']);
    Route::post('/pt/update', [LoginController::class, 'pt_update']);

});

// admin
Route::get('/admin/login', [LoginController::class, 'admin']);
Route::post('/admin/login', [LoginController::class, 'check_admin'])->name('admin_login');

Route::group(['middleware'=>['admin']], function (){
    Route::get('/admin/dashboard', function () {
        return view('admin/dashboard_admin', [
            "title" => "Dashboard"
        ]);
    });

    Route::get('/admin/logout', [LoginController::class, 'logout_admin'])->name('admin_logout');

    Route::get('/pertanyaan', [PertanyaanController::class, 'index']);

    Route::get('/pertanyaan/tambah', [PertanyaanController::class, 'add']);
    Route::post('/pertanyaan/store', [PertanyaanController::class, 'store']);
    Route::get('/pertanyaan/edit/{id}', [PertanyaanController::class, 'edit']);
    Route::post('/pertanyaan/update', [PertanyaanController::class, 'update']);
    Route::get('/pertanyaan/hapus/{id}', [PertanyaanController::class, 'hapus']);

    Route::get('/pertanyaan/kategori', [KategoriController::class, 'index']);

    Route::get('/pertanyaan/kategori/tambah', [KategoriController::class, 'add']);
    Route::post('/pertanyaan/kategori/store', [KategoriController::class, 'store']);
    Route::get('/pertanyaan/kategori/edit/{id}', [KategoriController::class, 'edit']);
    Route::post('/pertanyaan/kategori/update', [KategoriController::class, 'update']);
    Route::get('/pertanyaan/kategori/hapus/{id}', [KategoriController::class, 'hapus']);

    Route::get('/pertanyaan/tipe', [TipeController::class, 'index']);

    Route::get('/pertanyaan/tipe/tambah', [TipeController::class, 'add']);
    Route::post('/pertanyaan/tipe/store', [TipeController::class, 'store']);
    Route::get('/pertanyaan/tipe/edit/{id}', [TipeController::class, 'edit']);
    Route::post('/pertanyaan/tipe/update', [TipeController::class, 'update']);
    Route::get('/pertanyaan/tipe/hapus/{id}', [TipeController::class, 'hapus']);

    Route::get('/jawaban', [JawabanController::class, 'index']);

    Route::get('/jawaban/tambah', [JawabanController::class, 'add']);
    Route::post('/jawaban/store', [JawabanController::class, 'store']);
    Route::get('/jawaban/edit/{id}', [JawabanController::class, 'edit']);
    Route::post('/jawaban/update', [JawabanController::class, 'update']);
    Route::get('/jawaban/hapus/{id}', [JawabanController::class, 'hapus']);

    Route::get('/perguruantinggi', [PtController::class, 'index']);

    Route::get('/perguruantinggi/tambah', [PtController::class, 'add']);
    Route::post('/perguruantinggi/store', [PtController::class, 'store']);
    Route::get('/perguruantinggi/edit/{id}', [PtController::class, 'admin_edit']);
    Route::post('/perguruantinggi/update', [PtController::class, 'update']);
    Route::get('/perguruantinggi/hapus/{id}', [PtController::class, 'hapus']);
});