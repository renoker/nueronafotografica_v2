<?php

namespace Database\Seeders;

use App\Models\AdminHomePartners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminHomePartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminHomePartners::create([
            'image' => "assets/home/partners/prudental.png",
            'order' => 1,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/dhl.png",
            'order' => 2,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/bonjur.png",
            'order' => 3,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/vim.png",
            'order' => 4,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/peonia.png",
            'order' => 5,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/sobremesa.png",
            'order' => 6,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/kw.png",
            'order' => 7,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/usa.png",
            'order' => 8,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/apotext.png",
            'order' => 9,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/tiny.png",
            'order' => 10,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/core.png",
            'order' => 11,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/vape.png",
            'order' => 12,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/craft.png",
            'order' => 13,
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/andaz.png",
            'order' => 14,
        ]);
    }
}
