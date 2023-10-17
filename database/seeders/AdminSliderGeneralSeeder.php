<?php

namespace Database\Seeders;

use App\Models\AdminSliderGeneral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSliderGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminSliderGeneral::create([
            'key'   => "home",
            'position'  => 1,
            'image' => 'assets/sliders_generales/vino.jpeg',
            'order' => 1
        ]);

        AdminSliderGeneral::create([
            'key'   => "home",
            'position'  => 1,
            'image' => 'assets/sliders_generales/vino.jpeg',
            'order' => 2
        ]);

        AdminSliderGeneral::create([
            'key'   => "home",
            'position'  => 2,
            'image' => 'assets/sliders_generales/mujer.png',
            'order' => 1
        ]);

        AdminSliderGeneral::create([
            'key'   => "home",
            'position'  => 2,
            'image' => 'assets/sliders_generales/mujer.png',
            'order' => 2
        ]);

        AdminSliderGeneral::create([
            'key'   => "home",
            'position'  => 3,
            'image' => 'assets/sliders_generales/reloj.png',
            'order' => 1
        ]);

        AdminSliderGeneral::create([
            'key'   => "home",
            'position'  => 3,
            'image' => 'assets/sliders_generales/reloj.png',
            'order' => 2
        ]);
    }
}
