import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: process.env.NODE_ENV === 'production' ? '/build/' : 'https://2422-27-72-104-107.ngrok-free.app/',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build',
        emptyOutDir: true,
        rollupOptions: {
            output: {
                entryFileNames: `[name].[hash].js`,
                chunkFileNames: `[name].[hash].js`,
                assetFileNames: `[name].[hash].[ext]`,
            },
        },
    },
    server: {
        hmr: {
            host: '2422-27-72-104-107.ngrok-free.app',
            protocol: 'wss'
        }
    }
});
