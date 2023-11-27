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
                'resources/js/acerca_de.js',
                'resources/js/construccion.js',
                'resources/js/contacto.js',
                'resources/js/corporativa.js',
                'resources/js/publicitaria.js',
                'resources/js/arquitectura.js',
                'resources/js/cotizador.js',
            ],
            refresh: true,
        }),
    ],
});
