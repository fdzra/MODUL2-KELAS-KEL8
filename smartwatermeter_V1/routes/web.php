<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [TransaksiController::class, 'getDataTransaksi'])->name('data-transaksi');
