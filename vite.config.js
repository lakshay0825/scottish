import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/custom.js',
                'resources/js/smooth-scrollbar.min.js',
                'resources/js/perfect-scrollbar.min.js',
                'resources/js/material-dashboard.min.js'
            ],
            refresh: true,
        }),
    ],
});
