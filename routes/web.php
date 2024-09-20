<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'activePage' => 'beranda',
        'title' => 'Beranda - Makmur Catering'
    ]);
})->name('beranda');

Route::get('/layanan', function () {
    return view('layanan', [
        'activePage' => 'layanan',
        'title' => 'Layanan - Makmur Catering'
    ]);
})->name('layanan');

Route::get('/pemesanan', function () {
    return view('pemesanan', [
        'activePage' => 'pemesanan',
        'title' => 'Pemesanan - Makmur Catering'
    ]);
})->name('pemesanan');

Route::get('/kontak', function () {
    return view('kontak', [
        'activePage' => 'kontak',
        'title' => 'Kontak'
    ]);
})->name('kontak');
