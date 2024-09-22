<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel menu_items
        $menuItems = DB::table('menu_items')->get();

        // Mengirim data ke view
        return view('pemesanan', [
            'menuItems' => $menuItems,
            'activePage' => 'pemesanan',
            'title' => 'Pemesanan - Makmur Catering'
        ]);
    }


    public function show($id)
    {
        // Mengambil data berdasarkan ID
        $menuItem = DB::table('menu_items')->where('id', $id)->firstOrFail();

        // Mengirim data ke view detail
        return view('detail', [
            'menuItem' => $menuItem,
            'activePage' => 'pemesanan',
            'title' => 'Detail Menu - Makmur Catering'
        ]);
    }
}
