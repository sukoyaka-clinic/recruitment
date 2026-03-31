# すこやか整形外科医院 環境構築手順

## 前提条件

- Node.js 18以上
- npm 9以上
- Git

## 1. リポジトリのクローン

```bash
git clone https://github.com/YOUR_USERNAME/recruitment.git
cd recruitment
```

## 2. 依存パッケージのインストール

```bash
npm install
```

## 3. 開発サーバーの起動

```bash
npm run dev
```

ブラウザで http://localhost:5173 を開く

## 4. 本番ビルド

```bash
npm run build
```

## 5. デプロイ

### GitHub Pagesへのデプロイ

```bash
npm run deploy
```

### 手動デプロイ

1. `gh-pages` ブランチにHTMLファイルをプッシュ
2. リポジトリ設定 > Pages > Source: gh-pages branch

## ローカルでの確認

### 静的ファイルとして確認

開発サーバーを使わずに直接HTMLを確認する場合：

```bash
# macOS
open sukoyaka-homepage-green.html

# または任意のHTTPサーバー
npx serve .
```

### 画像の確認

assets/フォルダ内の画像がHTMLから正しく参照されているか確認：

```bash
ls -la assets/
```

## カスタムドメイン設定

### CNAMEファイル

`CNAME` ファイルにカスタムドメインが設定済み：

```
sukoyaka-ortho-clinic.com
```

### DNS設定（ドメインレジストラ側）

GitHub PagesのIPアドレスをAレコードに設定：

```
185.199.108.153
185.199.109.153
185.199.110.153
185.199.111.153
```

## トラブルシューティング

### 画像が表示されない

1. assets/フォルダに画像があるか確認
2. HTMLの画像パスが正しいか確認（`assets/filename.png`）
3. ファイル名の大文字小文字が一致しているか確認

### デプロイ後に更新されない

1. ブラウザキャッシュをクリア (Cmd+Shift+R / Ctrl+Shift+R)
2. GitHub Pagesの反映に数分かかる場合あり
3. gh-pagesブランチに正しくプッシュされているか確認

### Tailwind CSSが適用されない

CDN版を使用しているため、インターネット接続が必要。オフラインで確認する場合はローカルビルドが必要。

## npm scripts

| コマンド | 説明 |
|---------|------|
| `npm run dev` | 開発サーバー起動 |
| `npm run build` | プロダクションビルド |
| `npm run preview` | ビルド結果のプレビュー |
| `npm run deploy` | GitHub Pagesへデプロイ |

## 開発ツール推奨

- **エディタ**: VS Code
- **拡張機能**:
  - Tailwind CSS IntelliSense
  - Live Server
  - Prettier

## 参考リンク

- [Tailwind CSS ドキュメント](https://tailwindcss.com/docs)
- [GitHub Pages ドキュメント](https://docs.github.com/ja/pages)
- [Vite ドキュメント](https://ja.vitejs.dev/)
