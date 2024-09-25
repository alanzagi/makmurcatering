<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Mengembalikan data umum yang akan digunakan dalam view.
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
     * Menampilkan halaman pemesanan dengan semua menu items.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil hanya kolom yang diperlukan
        $menuItems = MenuItem::select('name', 'slug', 'price', 'photo')->get();

        // Mengirim data ke view
        return view('pemesanan')->with($this->viewData('Pemesanan - Makmur Catering', 'pemesanan', $menuItems));
    }

    /**
     * Menampilkan detail sebuah menu berdasarkan slug.
     * 
     * @param string $slug Slug dari menu item
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Mengambil data berdasarkan slug
        $menuItem = MenuItem::where('slug', $slug)->firstOrFail();

        // Mengambil menu items lain kecuali yang sedang ditampilkan
        $menuItems = Cache::remember('menuItems_except_' . $menuItem->id, 60 * 60, function () {
            return MenuItem::select('name', 'slug', 'price', 'photo')->get();
        });

        // Mengirim data ke view detail
        return view('detail')->with($this->viewData(
            'Detail Menu - Makmur Catering',
            'pemesanan',
            $menuItems,
            $menuItem
        ));
    }

    /**
     * Menangani pengiriman data dari form pemesanan.
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'count' => 'required|integer|min:1',
            'slug' => 'required|string',
        ]);

        // Ambil data dari permintaan
        $count = $request->input('count');
        $menuItem = MenuItem::where('slug', $request->input('slug'))->firstOrFail();

        // Simpan data ke dalam session
        session([
            'menu_item' => $menuItem,
            'count' => $count,
        ]);

        // Redirect ke halaman pengiriman
        return redirect()->route('pengiriman');
    }

    /**
     * Menampilkan halaman pengiriman.
     * 
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function pengiriman()
    {
        // Ambil data dari session
        $menuItem = session('menu_item');
        $count = session('count');

        // Redirect jika data tidak ada
        if (is_null($menuItem) || is_null($count)) {
            return redirect()->route('pemesanan');
        }

        // Menyediakan data untuk view pengiriman
        return view('pengiriman')->with($this->viewData(
            'Pengiriman - Makmur Catering',
            'pemesanan',
            null,
            $menuItem
        ))->with('count', $count);
    }

    /**
     * Mengalihkan akses dari /toko ke halaman pemesanan
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToPemesanan()
    {
        // Mengarahkan ke halaman pemesanan
        return redirect()->route('pemesanan');
    }
}
