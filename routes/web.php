<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('beranda');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/pemesanan/{id}', [PemesananController::class, 'show'])->name('menu.show');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
