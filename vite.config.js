import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/blog.css', 'resources/js/blog.js'],
            refresh: true,
        }),
    ],
});
