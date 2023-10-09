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
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/dhl.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/bonjur.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/vim.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/peonia.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/sobremesa.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/kw.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/usa.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/apotext.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/tiny.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/core.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/vape.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/craft.png",
        ]);

        AdminHomePartners::create([
            'image' => "assets/home/partners/andaz.png",
        ]);
    }
}
