import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import {bunny} from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';
import inertia from '@inertiajs/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Cormorant Garamond', {
                    weights: [600],
                    subsets: ["latin", "latin-ext"]
                }),
                bunny('Source Sans 3', {
                    weights: [400,600],
                    subsets: ["latin", "latin-ext"]
                }),
            ],
        }),
        tailwindcss(),
        vue(),
        inertia(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
