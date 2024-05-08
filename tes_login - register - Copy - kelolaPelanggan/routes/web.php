<?php

use \App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\kelolaPelangganController;
use App\Http\Controllers\ProfileController;



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
    // start of routing kelola pelanggan
    Route::get('/admin/admin/kelolaPelanggan', [kelolaPelangganController::class, 'read'])->middleware(UserAkses::class . ':admin');

    Route::get('/admin/admin/kelolaPelanggan/tambah_pelanggan', [kelolaPelangganController::class, 'create'])->middleware(UserAkses::class . ':admin');

    Route::post('/admin/admin/kelolaPelanggan/pelanggan_store', [kelolaPelangganController::class, 'store'])->middleware(UserAkses::class . ':admin');

    Route::get('/admin/admin/kelolaPelanggan/edit_pelanggan/{id}', [kelolaPelangganController::class, 'edit'])->middleware(UserAkses::class . ':admin');

    Route::put('/admin/admin/kelolaPelanggan/{id}', [kelolaPelangganController::class, 'update'])->middleware(UserAkses::class . ':admin');

    Route::delete('/admin/admin/kelolaPelanggan/delete/{id}', [kelolaPelangganController::class, 'delete'])->middleware(UserAkses::class . ':admin');

    // end of kelola pelanggan
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/photo', [ProfileController::class, 'photo'])->name('profile.photo');
});


