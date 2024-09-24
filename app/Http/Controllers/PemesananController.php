<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;

class PemesananController extends Controller
{
    /**
     * Mengembalikan data umum yang akan digunakan dalam view
     * 
     * @param string $title Judul halaman
     * @param string $activePage Halaman aktif untuk navigasi
     * @param array|null $menuItems Daftar menu items (opsional)
     * @param array|null $menuItem Item menu spesifik (opsional)
     * @return array
     */
    protected function viewData($title, $activePage, $menuItems = null, $menuItem = null)
    {
        return [
            'activePage' => $activePage,
            'title' => $title,
            'menuItems' => $menuItems,
            'menuItem' => $menuItem,
        ];
    }

    /**
     * Menampilkan halaman pemesanan dengan semua menu items
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil hanya kolom yang diperlukan
        $menuItems = MenuItem::select('name', 'slug', 'price', 'photo')->get();

        // Mengirim data ke view dengan memanggil viewData() untuk konsistensi
        return view('pemesanan')->with($this->viewData('Pemesanan - Makmur Catering', 'pemesanan', $menuItems));
    }

    /**
     * Menampilkan detail sebuah menu berdasarkan slug
     * 
     * @param string $slug Slug dari menu item
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Mengambil data berdasarkan slug menggunakan model
        $menuItem = MenuItem::where('slug', $slug)->firstOrFail();

        // Mengambil menu items lain kecuali yang sedang ditampilkan dengan cache
        $menuItems = Cache::remember('menuItems_except_' . $menuItem->id, 60 * 60, function () use ($menuItem) {
            return MenuItem::where('id', '!=', $menuItem->id)
                ->select('name', 'slug', 'price', 'photo')
                ->get();
        });


        // Mengirim data ke view detail
        return view('detail')->with($this->viewData(
            'Detail Menu - Makmur Catering',
            'pemesanan',
            $menuItems,
            $menuItem
        ));
    }
}
