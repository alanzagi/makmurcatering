<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('menu_items')->truncate();

        MenuItem::create([
            'name' => 'Paket Ayam Bakar',
            'price' => 25000,
            'description' => 'Sudah termasuk dengan: Nasi; Lalapan; Sambal Tempe; Sepotong Dada Ayam; Capcay Kuah; Satu Buah Pisang; Satu Mineral Gelas; Permen; Sendok; Tisu; dan Tusuk Gigi.',
            'photo' => 'cateringayambakar.jpg',
            'menu_number' => '1',
            'type' => 'Makanan',
            'stock' => 5,
            'slug' => Str::slug('Paket Ayam Bakar'),
        ]);

        MenuItem::create([
            'name' => 'Paket Ayam Goreng',
            'price' => 20000,
            'description' => 'Sudah termasuk dengan: Nasi; Lalapan; Sambal Tempe; Sepotong Dada Ayam; Capcay Kuah; Satu Buah Pisang; Satu Mineral Gelas; Permen; Sendok; Tisu; dan Tusuk Gigi.',
            'photo' => 'cateringayam1.jpg',
            'menu_number' => '2',
            'type' => 'Makanan',
            'stock' => 10,
            'slug' => Str::slug('Paket Ayam Goreng'),
        ]);

        MenuItem::create([
            'name' => 'Paket Ayam Gulai',
            'price' => 22000,
            'description' => 'Sudah termasuk dengan: Nasi; Lalapan; Sambal Tempe; Sepotong Dada Ayam; Capcay Kuah; Satu Buah Pisang; Satu Mineral Gelas; Permen; Sendok; Tisu; dan Tusuk Gigi.',
            'photo' => 'cateringayamgulai.jpg',
            'menu_number' => '3',
            'type' => 'Makanan',
            'stock' => 12,
            'slug' => Str::slug('Paket Ayam Gulai'),
        ]);
    }
}
