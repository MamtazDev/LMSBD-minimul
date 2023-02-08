import { defineConfig } from 'vite';
<<<<<<< HEAD
import laravel, { refreshPaths } from 'laravel-vite-plugin';
=======
import laravel from 'laravel-vite-plugin';
>>>>>>> zerin

export default defineConfig({
    plugins: [
        laravel({
            input: [
<<<<<<< HEAD
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
=======
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
>>>>>>> zerin
        }),
    ],
});
