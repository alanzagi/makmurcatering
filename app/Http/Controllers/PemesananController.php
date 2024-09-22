<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;

class PemesananController extends Controller
{
    protected function viewData($title, $activePage, $menuItems = null)
    {
        return [
            'activePage' => $activePage,
            'title' => $title,
            'menuItems' => $menuItems,
        ];
    }

    public function index()
    {
        // Mengambil semua data dari model MenuItem
        $menuItems = MenuItem::all();

        // Mengirim data ke view
        return view('pemesanan', $this->viewData('Pemesanan - Makmur Catering', 'pemesanan', $menuItems));
    }

    public function show($slug)
    {
        // Mengambil data berdasarkan slug menggunakan model
        $menuItem = MenuItem::where('slug', $slug)->firstOrFail();

        // Mengirim data ke view detail
        return view('detail', [
            'activePage' => 'pemesanan',
            'title' => 'Detail Menu - Makmur Catering',
            'menuItem' => $menuItem,
        ]);
    }
}
