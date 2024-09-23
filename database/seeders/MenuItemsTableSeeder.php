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
            'name' => 'Ayam Bakar',
            'price' => 25000,
            'description' => 'Ayam bakar dengan bumbu rempah khas, disajikan dengan nasi putih hangat dan sambal terasi.',
            'photo' => 'cateringayam1.jpg',
            'menu_number' => '2',
            'type' => 'Makanan',
            'stock' => 5,
            'slug' => Str::slug('Ayam Bakar'),
        ]);

        MenuItem::create([
            'name' => 'Es Teh Manis',
            'price' => 5000,
            'description' => 'Es teh manis segar, cocok untuk menemani makanan berat Anda.',
            'photo' => 'cateringbackground.jpg',
            'menu_number' => '3',
            'type' => 'Minuman',
            'stock' => 10,
            'slug' => Str::slug('Es Teh Manis'),
        ]);

        MenuItem::create([
            'name' => 'Soto Ayam',
            'price' => 22000,
            'description' => 'Soto ayam dengan kuah bening, lengkap dengan suun, telur, dan potongan ayam suwir.',
            'photo' => 'cateringphoto.jpg',
            'menu_number' => '4',
            'type' => 'Makanan',
            'stock' => 3,
            'slug' => Str::slug('Soto Ayam'),
        ]);
    }
}
