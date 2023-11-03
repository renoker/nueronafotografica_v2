<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'category_id'  => 1,
            'size_id'       => 1,
            'finish_id'     => 1,
            'paper_id'      => 1,
            'image'         => 'assets/galeria/img1.jpeg',
            'name'          => 'Estudio',
            'order'         => 1
        ]);

        Gallery::create([
            'category_id'  => 2,
            'size_id'       => 1,
            'finish_id'     => 1,
            'paper_id'      => 1,
            'image'         => 'assets/galeria/img2.jpeg',
            'name'          => 'Obra',
            'order'         => 2
        ]);

        Gallery::create([
            'category_id'  => 3,
            'size_id'       => 1,
            'finish_id'     => 1,
            'paper_id'      => 1,
            'image'         => 'assets/galeria/img3.jpeg',
            'name'          => 'Mujer',
            'order'         => 3
        ]);

        Gallery::create([
            'category_id'  => 4,
            'size_id'       => 1,
            'finish_id'     => 1,
            'paper_id'      => 1,
            'image'         => 'assets/galeria/img4.jpeg',
            'name'          => 'Mujer',
            'order'         => 4
        ]);

        Gallery::create([
            'category_id'  => 5,
            'size_id'       => 1,
            'finish_id'     => 1,
            'paper_id'      => 1,
            'image'         => 'assets/galeria/img5.jpeg',
            'name'          => 'Mujer',
            'order'         => 5
        ]);

        Gallery::create([
            'category_id'  => 6,
            'size_id'       => 1,
            'finish_id'     => 1,
            'paper_id'      => 1,
            'image'         => 'assets/galeria/img6.jpeg',
            'name'          => 'Reloj',
            'order'         => 6
        ]);

        Gallery::create([
            'category_id'  => 7,
            'size_id'       => 1,
            'finish_id'     => 1,
            'paper_id'      => 1,
            'image'         => 'assets/galeria/img7.jpeg',
            'name'          => 'Escaleras',
            'order'         => 7
        ]);
    }
}
