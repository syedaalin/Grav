import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import path from 'path'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
  build: {
    outDir: '../js/admin', // Output to theme's js/admin folder
    emptyOutDir: false, // Don't delete other files in that folder
    rollupOptions: {
      input: 'src/main.jsx', // Use main.jsx entry point directly
      output: {
        entryFileNames: 'footer-builder.js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name === 'main.css' || assetInfo.name?.endsWith('.css')) {
            return 'footer-builder.css';
          }
          return '[name][extname]';
        },
      },
    },
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
    },
  },
})
