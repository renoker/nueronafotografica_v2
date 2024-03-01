<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'image'  => 'assets/poster/image.png',
            'url'    => 'IcDaI015btY',
            'name'     => 'Da un recorrido por la Escuela Anne Sullivan / Visit the Anne Sullivan school facilities',
            'order'         => 1
        ]);

        Video::create([
            'image'  => 'assets/poster/image.png',
            'url'    => 'IcDaI015btY',
            'name'     => 'Da un recorrido por la Escuela Anne Sullivan / Visit the Anne Sullivan school facilities',
            'order'         => 1
        ]);

        Video::create([
            'image'  => 'assets/poster/image.png',
            'url'    => 'IcDaI015btY',
            'name'     => 'Da un recorrido por la Escuela Anne Sullivan / Visit the Anne Sullivan school facilities',
            'order'         => 1
        ]);
    }
}
