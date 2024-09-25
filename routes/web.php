<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PengirimanController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/pemesanan/{slug}', [PemesananController::class, 'show'])->name('menu.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/toko/pengiriman', [PengirimanController::class, 'index'])->name('pengiriman');
