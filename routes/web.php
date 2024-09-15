<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/kontak', function () {
    return view('kontak');
});
