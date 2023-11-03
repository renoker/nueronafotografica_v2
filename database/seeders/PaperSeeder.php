<?php

namespace Database\Seeders;

use App\Models\Paper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paper::create([
            'paper' => "Papel recliclado",
        ]);

        Paper::create([
            'paper' => "Papel couché, satinado o estucado",
        ]);

        Paper::create([
            'paper' => "Papel Offset",
        ]);

        Paper::create([
            'paper' => "Papel plantable o papel con semillas",
        ]);

        Paper::create([
            'paper' => "Papel Kraft",
        ]);

        Paper::create([
            'paper' => "Papel de hierba",
        ]);

        Paper::create([
            'paper' => "Papel de piedra",
        ]);
    }
}
