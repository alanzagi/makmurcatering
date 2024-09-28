<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/pemesanan/{slug}', [PemesananController::class, 'show'])->name('menu.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/toko/pengiriman', [PemesananController::class, 'kirim'])->name('menu.kirim');
Route::get('/pemesanan/{slug}', [PemesananController::class, 'show'])->name('menu.show');
Route::post('/pemesanan/kirim', [PemesananController::class, 'kirim'])->name('pemesanan.kirim');
Route::get('/toko/pengiriman', [PemesananController::class, 'pengiriman'])->name('pengiriman');
Route::get('/toko', [PemesananController::class, 'redirectToPemesanan'])->name('toko.redirect');
Route::match(['get', 'post'], '/toko/struk', [PemesananController::class, 'showStruk'])->name('struk');
