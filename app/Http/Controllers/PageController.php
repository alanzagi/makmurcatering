<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index', [
            'activePage' => 'beranda',
            'title' => 'Beranda - Makmur Catering'
        ]);
    }

    public function layanan()
    {
        return view('layanan', [
            'activePage' => 'layanan',
            'title' => 'Layanan - Makmur Catering'
        ]);
    }

    public function kontak()
    {
        return view('kontak', [
            'activePage' => 'kontak',
            'title' => 'Kontak'
        ]);
    }
}
