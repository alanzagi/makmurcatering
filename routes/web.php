<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['activePage' => 'index']);
})->name('index');

Route::get('/layanan', function () {
    return view('layanan', ['activePage' => 'layanan']);
})->name('layanan');

Route::get('/pemesanan', function () {
    return view('pemesanan', ['activePage' => 'pemesanan']);
})->name('pemesanan');

Route::get('/kontak', function () {
    return view('kontak', ['activePage' => 'kontak']);
})->name('kontak');
