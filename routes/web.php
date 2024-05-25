<?php

use \App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\kelolaPelangganController;



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
    // INI BAGIAN AWALAN
    Route::get('/admin', [AdminController::class, 'index']);

    // INI BAGIAN PELANGGAN
    Route::get('/admin/pelanggan', [AdminController::class, 'pelanggan'])->middleware(UserAkses::class . ':pelanggan');

    // INI BAGIAN KASIR
    Route::get('/admin/kasir', [AdminController::class, 'kasir'])->middleware(UserAkses::class . ':kasir');
    Route::get('/admin/kasir/dashboard', [KasirController::class, 'dashboard'])->middleware(UserAkses::class . ':kasir');
    Route::get('/admin/kasir/pembayaran', [KasirController::class, 'pembayaran'])->middleware(UserAkses::class . ':kasir');

    Route::post('place-order', [KasirController::class, 'store_pembayaran'])->middleware(UserAkses::class . ':kasir');

    // INI BAGIAN PETUGAS
    Route::get('/admin/petugas', [AdminController::class, 'petugas'])->name('petugas.dashboard')->middleware(UserAkses::class . ':petugas');
    Route::get('/admin/petugas/kelolaPerangkat', [PetugasController::class, 'index'])->middleware(UserAkses::class . ':petugas');
    Route::get('/admin/petugas/detailPerangkat/{id}', [PetugasController::class, 'detailPerangkat'])->name('perangkat.detail')->middleware(UserAkses::class . ':petugas');
    Route::get('/admin/petugas/formRequestLokasi/{id}', [PetugasController::class, 'formRequestLokasi'])->name('request.lokasi')->middleware(UserAkses::class . ':petugas');
    Route::match(['get', 'post'],'/admin/petugas/formRequestPemasangan/{id}', [PetugasController::class, 'formRequestPemasangan'])->name('request.pemasangan')->middleware(UserAkses::class . ':petugas');
    Route::match(['get', 'post'],'/admin/petugas/formRequestPemasangan/{id}/submit', [PetugasController::class, 'store_pemasangan'])->name('store.pemasangan')->middleware(UserAkses::class . ':petugas');
    Route::match(['get', 'post'],'/admin/petugas/formRequestKonfirmasi/{id}', [PetugasController::class, 'formRequestKonfirmasi'])->name('request.konfirmasi')->middleware(UserAkses::class . ':petugas');
    Route::post('/admin/petugas/formRequestLokasi/{id}/selesai', [PetugasController::class, 'submitSelesai'])->name('request.selesai')->middleware(UserAkses::class . ':petugas');
    Route::match(['get', 'post'],'/admin/petugas/laporanPengaduan', [PetugasController::class, 'laporanPengaduan'])->name('pengaduan.dashboard')->middleware(UserAkses::class . ':petugas');
    Route::match(['get', 'post'],'/admin/petugas/detailPengaduan/{id}', [PetugasController::class, 'detailPengaduan'])->name('pengaduan.detail')->middleware(UserAkses::class . ':petugas');
    Route::match(['get', 'post'], '/admin/petugas/detailPengaduan/{id}/selesaikan', [PetugasController::class, 'selesaikanPengaduan'])->name('pengaduan.selesaikan')->middleware(UserAkses::class . ':petugas');

    // INI BAGIAN ADMIN
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware(UserAkses::class . ':admin');
    Route::get('/admin/admin/kelolaPelanggan', [kelolaPelangganController::class, 'read'])->middleware(UserAkses::class . ':admin');

    Route::get('/admin/admin/kelolaPelanggan/tambah_pelanggan', [kelolaPelangganController::class, 'create'])->middleware(UserAkses::class . ':admin');

    Route::post('/admin/admin/kelolaPelanggan/pelanggan_store', [kelolaPelangganController::class, 'store'])->middleware(UserAkses::class . ':admin');

    Route::get('/admin/admin/kelolaPelanggan/edit_pelanggan/{id}', [kelolaPelangganController::class, 'edit'])->middleware(UserAkses::class . ':admin');

    Route::put('/admin/admin/kelolaPelanggan/{id}', [kelolaPelangganController::class, 'update'])->middleware(UserAkses::class . ':admin');

    Route::delete('/admin/admin/kelolaPelanggan/delete/{id}', [kelolaPelangganController::class, 'delete'])->middleware(UserAkses::class . ':admin');
    
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/photo', [ProfileController::class, 'photo'])->name('profile.photo');
});


