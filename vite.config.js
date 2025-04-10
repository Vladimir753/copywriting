import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy} from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/js/core.min.js',
                    dest: 'public/js',
                },
                {
                    src: 'resources/js/html5shiv.min.js',
                    dest: 'public/js',
                },
                {
                    src: 'resources/js/pointer-events.min.js',
                    dest: 'public/js',
                },
                {
                    src: 'resources/js/script.js',
                    dest: 'public/js',
                }
            ],
        }),
        laravel([
            'resources/css/app.css',
            'resources/css/bootstrap.css',
            'resources/css/fonts.css',
            'resources/css/style.css',
            'resources/css/panel.css',
            'resources/css/app.css',
            'resources/css/modal.css',
            'resources/css/variables.css',
            'resources/css/history.css',
            'resources/css/chat.css',
            'resources/css/payment-boxes.css',
            'resources/css/template.css',
            'resources/js/app.js',
            'resources/js/main.js',
            'resources/js/modal.js',
            'resources/js/payment-boxes.js',
        ])
    ],
    server: {
        host: 'localhost',
        port: 5173,
        cors: {
            origin: [
                'https://copy.com',
              'https://577f-213-130-79-91.ngrok-free.app',
            ],
            methods: ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
            allowedHeaders: ['Content-Type', 'Authorization'],
        },
        hmr: {
            host: process.env.VITE_HMR_HOST || 'localhost',
        },

    }
});
