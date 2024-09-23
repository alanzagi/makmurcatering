<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $table = 'menu_items'; // Pastikan nama tabel sesuai

    protected $fillable = [
        'name',
        'price',
        'description',
        'photo',
        'menu_number',
        'type',
        'stock',
        'slug',
    ];
}
