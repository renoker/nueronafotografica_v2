<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'      => "Arquitectura e Interiorismo",
            'is_active' => "1",
        ]);

        Category::create([
            'name'      => "Construcción",
            'is_active' => "1",
        ]);

        Category::create([
            'name'      => "Corporativo",
            'is_active' => "1",
        ]);

        Category::create([
            'name'      => "Lencería & Boudoir",
            'is_active' => "1",
        ]);

        Category::create([
            'name'      => "Moda",
            'is_active' => "1",
        ]);

        Category::create([
            'name'      => "Producto",
            'is_active' => "1",
        ]);

        Category::create([
            'name'      => "Real Estate",
            'is_active' => "1",
        ]);
    }
}
