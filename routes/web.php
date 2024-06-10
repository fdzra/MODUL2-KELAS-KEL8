<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\kelolaPelangganController;
use App\Http\Controllers\KelolaKasirController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\kelolaPetugasController;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\UserAkses;



Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
    Route::get('/register', [SesiController::class, 'register']);
    Route::post('/create', [SesiController::class, 'create']);
});

Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    // INI BAGIAN AWALAN
    Route::get('/admin', [AdminController::class, 'index']);

    // INI BAGIAN PELANGGAN
    Route::get('/admin/pelanggan', [AdminController::class, 'pelanggan'])->middleware(UserAkses::class . ':pelanggan');

    // INI BAGIAN KASIR
    Route::get('/admin/kasir', [AdminController::class, 'kasir'])->middleware(UserAkses::class . ':kasir');
    Route::get('/admin/kasir/dashboard', [KasirController::class, 'dashboard'])->middleware(UserAkses::class . ':kasir');
    // Route::get('/admin/kasir/dashboard', function(){
    //     return view('Kasir.kasirdashboard');
    // });

    // INI BAGIAN PETUGAS
    Route::get('/admin/petugas', [AdminController::class, 'petugas'])->middleware(UserAkses::class . ':petugas');

    // INI BAGIAN ADMIN
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware(UserAkses::class . ':admin');

    Route::get('/logout', [SesiController::class, 'logout']);
});

//Petugas
Route::get('/admin/petugas/kelolaPerangkat', [PetugasController::class, 'index']);
Route::get('/admin/petugas/detailPerangkat', [PetugasController::class, 'detailPerangkat']);
Route::get('/admin/petugas/formRequestLokasi', [PetugasController::class, 'formRequestLokasi']);
Route::get('/admin/petugas/formRequestPemasangan', [PetugasController::class, 'formRequestPemasangan']);
Route::get('/admin/petugas/formRequestIntegrasi', [PetugasController::class, 'formRequestIntegrasi']);
Route::get('/admin/petugas/formRequestKonfirmasi', [PetugasController::class, 'formRequestKonfirmasi']);
Route::get('/admin/petugas/laporanPengaduan', [PetugasController::class, 'laporanPengaduan']);
Route::get('/admin/petugas/detailPengaduan', [PetugasController::class, 'detailPengaduan']);

//Admin
Route::get('/admin/admin/kelolaPelanggan', [kelolaPelangganController::class, 'index'])->middleware(UserAkses::class . ':admin');

Route::get('/admin/admin/kelolaPelanggan_create', [kelolaPelangganController::class, 'create'])->middleware(UserAkses::class . ':admin');

//Admin (kelola petugas)
Route::get('/admin/admin/kelolaPetugas', [kelolaPetugasController::class, 'index'])->middleware(UserAkses::class . ':admin');

Route::get('/admin/admin/addkelolaPetugas', [kelolaPetugasController::class, 'create'])->middleware(UserAkses::class . ':admin');

Route::post('/admin/admin/insertkelolaPetugas', [kelolaPetugasController::class, 'insert'])->middleware(UserAkses::class . ':admin');

Route::get('/admin/admin/editkelolaPetugas/{petugas_id}',[kelolaPetugasController::class, 'edit'])->middleware(UserAkses::class . ':admin');

Route::post('/admin/admin/updatekelolaPetugas/{petugas_id}',[kelolaPetugasController::class, 'update'])->middleware(UserAkses::class . ':admin');

Route::get('/admin/admin/deletekelolaPetugas/{petugas_id}',[kelolaPetugasController::class, 'delete'])->middleware(UserAkses::class . ':admin');

//Admin (kelola kasir)
Route::get('/admin/admin/kelolaKasir', [KelolaKasirController::class, 'index'])->middleware(UserAkses::class . ':admin');

Route::get('/admin/admin/addkelolaKasir', [KelolaKasirController::class, 'create'])->middleware(UserAkses::class . ':admin');

Route::post('/admin/admin/insertkelolaKasir', [KelolaKasirController::class, 'insert'])->middleware(UserAkses::class . ':admin');

Route::get('/admin/admin/editkelolaKasir/{kasir_id}',[KelolaKasirController::class, 'edit'])->middleware(UserAkses::class . ':admin');

Route::post('/admin/admin/updateKelolaKasir/{kasir_id}',[KelolaKasirController::class, 'update'])->middleware(UserAkses::class . ':admin');

Route::get('/admin/admin/deletekelolaKasir/{kasir_id}',[KelolaKasirController::class, 'delete'])->middleware(UserAkses::class . ':admin');