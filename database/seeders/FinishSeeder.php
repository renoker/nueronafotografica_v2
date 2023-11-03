<?php

namespace Database\Seeders;

use App\Models\Finish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Finish::create([
            'finish' => "Barnizado",
        ]);

        Finish::create([
            'finish' => "Troquelado",
        ]);

        Finish::create([
            'finish' => "Relieve y grabado en seco",
        ]);

        Finish::create([
            'finish' => "Impresión por calor",
        ]);

        Finish::create([
            'finish' => "Plegados",
        ]);

        Finish::create([
            'finish' => "Barbas",
        ]);

        Finish::create([
            'finish' => "Decoración de cortes",
        ]);

        Finish::create([
            'finish' => "Perforado",
        ]);
    }
}
