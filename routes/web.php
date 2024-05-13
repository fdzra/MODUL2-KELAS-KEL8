<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LaporanPengaduanController;
use App\Http\Controllers\RequestPemasanganController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TargetPenggunaanAirController;
use App\Http\Controllers\PenggunaanAirController;



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

# ini routing buat localhost:8000/
// Route::get('/', [TransaksiController::class, 'getDataTransaksi'])->name('data-transaksi');
// Route::get('/', [PelangganController::class, 'index']);
Route::get('/', function () {
    return redirect('/penggunaan_air');
});
Route::get('/laporanpengaduan',function () {
    return view ('laporanpengaduan.index');
});
Route::get('/requestpemasangan',function () {
    return view ('requestpemasangan.index');
});
Route::resource('/tagihan', \App\Http\Controllers\TagihanController::class);
Route::resource('laporan-pengaduan', \App\Http\Controllers\LaporanPengaduanController::class);
Route::get('/laporan-pengaduan/show/{laporan-pengaduan}', [\App\Http\Controllers\LaporanPengaduanController::class, 'show']);
Route::resource('laporan-pengaduan', LaporanPengaduanController::class);
Route::put('laporan-pengaduan/{laporan_pengaduan}/update-status', [LaporanPengaduanController::class, 'updateStatus'])->name('laporan-pengaduan.update-status');
Route::get('/request-pemasangan', [RequestPemasanganController::class, 'index'])->name('request-pemasangan.index');
Route::get('/request-pemasangan/create', [RequestPemasanganController::class, 'create'])->name('request-pemasangan.create');
Route::post('/request-pemasangan/store', [RequestPemasanganController::class, 'store'])->name('request-pemasangan.store');
Route::get('/request-pemasangan/show/{id}', [RequestPemasanganController::class, 'show'])->name('request-pemasangan.show');
Route::get('/request-pemasangan/edit/{id}', [RequestPemasanganController::class, 'edit'])->name('request-pemasangan.edit');
Route::put('/request-pemasangan/update/{id}', [RequestPemasanganController::class, 'update'])->name('request-pemasangan.update');
Route::delete('/request-pemasangan/destroy/{id}', [RequestPemasanganController::class, 'destroy'])->name('request-pemasangan.destroy');




Route::get('/target_penggunaan_air', [TargetPenggunaanAirController::class, 'index']);
Route::post('/target_penggunaan_air', [TargetPenggunaanAirController::class, 'update']);

Route::get('/penggunaan_air', [PenggunaanAirController::class, 'index']);
