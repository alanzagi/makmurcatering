<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    // Daftar kolom yang bisa diisi secara massal (mass assignment)
    protected $fillable = [
        'name',        // Nama menu, disimpan sebagai string
        'price',       // Harga menu, disimpan dalam bentuk numerik
        'description', // Deskripsi menu untuk penjelasan lebih lanjut
        'photo',       // Nama file foto menu, disimpan sebagai string
        'menu_number', // Nomor identifikasi menu
        'type',        // Jenis atau kategori menu, seperti makanan atau minuman
        'stock',       // Jumlah stok yang tersedia
        'slug',        // Slug URL yang unik untuk menu ini
    ];

    // Nama tabel tidak perlu disebutkan jika menggunakan konvensi penamaan tabel Laravel.
}
