import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import path from 'path'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
  build: {
    // Build into the theme's admin/js folder
    outDir: '../js/admin',
    emptyOutDir: false, // Don't delete other files in js/admin
    rollupOptions: {
      input: 'src/main.jsx',
      output: {
        entryFileNames: 'navigation-builder.js',
        assetFileNames: 'navigation-builder.[ext]', // for css
        // Ensure we don't code-split excessively for this single-file usage if possible,
        // or just accept standard chunking. For Grav admin, a single entry point is easier.
        manualChunks: undefined,
      },
    },
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
    },
  },
})
