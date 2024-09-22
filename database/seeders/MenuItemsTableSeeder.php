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
            'name' => 'Nasi Goreng',
            'price' => 20000,
            'description' => 'Nasi Goreng Spesial',
            'photo' => 'cateringayam1.jpg',
            'menu_number' => '1',
            'type' => 'Makanan',
            'stock' => 100,
            'slug' => Str::slug('Nasi Goreng'),
        ]);
    }
}
