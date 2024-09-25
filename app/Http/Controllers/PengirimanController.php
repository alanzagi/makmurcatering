<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index()
    {
        return view('pengiriman', [
            'activePage' => 'pemesanan',
            'title' => 'Pengiriman - Makmur Catering'
        ]);
    }
}
