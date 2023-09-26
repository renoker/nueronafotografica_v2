<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Translation::create([
            'key'           => "menu",
            'language'      => "es",
            'translation'   => 'videos',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "en",
            'translation'   => 'videos',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "es",
            'translation'   => 'galería',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "en",
            'translation'   => 'gallery',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "es",
            'translation'   => 'servicios',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "en",
            'translation'   => 'services',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "es",
            'translation'   => 'acerca de',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "en",
            'translation'   => 'about',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "es",
            'translation'   => 'contacto',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "en",
            'translation'   => 'contact',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "es",
            'translation'   => 'blog',
        ]);

        Translation::create([
            'key'           => "menu",
            'language'      => "en",
            'translation'   => 'blog',
        ]);
    }
}
