import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'public/assets/css/style.css',
                'public/assets/css/responsive.css',
                'public/assets/js/script.js',
                'resources/views/**/*.blade.php',
            ]
        })
    ],
});
