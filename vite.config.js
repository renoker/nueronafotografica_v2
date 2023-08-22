import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/main.scss', 
                'resources/js/home.js',
                'resources/js/global.js',
                'resources/js/campanias_externas.js',
            ],
            refresh: true,
        }),
    ],
});
