import { defineConfig } from 'vite';

export default defineConfig({
  // GitHub Pagesでホスティングする場合は、リポジトリ名をbaseに設定
  // 例: https://username.github.io/repository-name/
  // base: '/repository-name/',
  base: './', // 相対パスを使用（どのリポジトリでも動作）
  root: './',
  build: {
    outDir: 'dist',
  },
  server: {
    port: 3000,
    open: true,
  },
});