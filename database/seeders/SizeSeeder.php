<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::create([
            'size' => "841 x 594 mm",
        ]);

        Size::create([
            'size' => "594 x 420 mm",
        ]);

        Size::create([
            'size' => "420 x 297 mm",
        ]);

        Size::create([
            'size' => "297 x 210 mm",
        ]);
    }
}
