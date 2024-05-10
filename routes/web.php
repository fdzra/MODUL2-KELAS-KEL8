<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\UserAkses;



Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
    Route::get('/register', [SesiController::class, 'register']);
    Route::post('/create', [SesiController::class, 'create']);
});

Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/pelanggan', [AdminController::class, 'pelanggan'])->middleware(UserAkses::class . ':pelanggan');
    Route::get('/admin/kasir', [AdminController::class, 'kasir'])->middleware(UserAkses::class . ':kasir');
    Route::get('/admin/petugas', [AdminController::class, 'petugas'])->middleware(UserAkses::class . ':petugas');
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware(UserAkses::class . ':admin');
    Route::get('/logout', [SesiController::class, 'logout']);
});


Route::get('/admin/petugas/kelolaPerangkat', [PetugasController::class, 'index']);
Route::get('/admin/petugas/detailPerangkat', [PetugasController::class, 'detailPerangkat']);
Route::get('/admin/petugas/formRequestLokasi', [PetugasController::class, 'formRequestLokasi']);
Route::get('/admin/petugas/formRequestPemasangan', [PetugasController::class, 'formRequestPemasangan']);
Route::get('/admin/petugas/formRequestIntegrasi', [PetugasController::class, 'formRequestIntegrasi']);
Route::get('/admin/petugas/formRequestKonfirmasi', [PetugasController::class, 'formRequestKonfirmasi']);
Route::get('/admin/petugas/laporanPengaduan', [PetugasController::class, 'laporanPengaduan']);
Route::get('/admin/petugas/detailPengaduan', [PetugasController::class, 'detailPengaduan']);