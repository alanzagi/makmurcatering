<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak', [
            'activePage' => 'kontak',
            'title' => 'Kontak - Makmur Catering'
        ]);
    }
}
