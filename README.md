# Web Dev Project

様々なWebサイトとアプリケーションを構築するためのプロジェクト

## 特徴

- **GitHub Pages対応**: 簡単にデプロイ可能
- **Claudeのフロントエンドデザインスキル活用**: 
  - 個性的なタイポグラフィ
  - カスタムテーマシステム
  - モーションデザイン
  - 視覚的な深みのある背景

## セットアップ

```bash
# 依存関係のインストール
npm install

# 開発サーバーの起動
npm run dev

# プロダクションビルド
npm run build

# GitHub Pagesへのデプロイ
npm run deploy
```

## プロジェクト構造

```
web-dev-project/
├── src/
│   ├── components/    # 再利用可能なコンポーネント
│   ├── pages/        # 個別ページ
│   ├── templates/    # ページテンプレート
│   ├── utils/        # ユーティリティ関数
│   ├── design-system.css  # デザインシステム
│   ├── style.css     # メインスタイル
│   └── main.js       # メインJavaScript
├── public/           # 静的アセット
├── assets/          # 画像等のリソース
└── index.html       # エントリーポイント
```

## GitHub Pagesでのホスティング

1. GitHubでリポジトリを作成
2. このプロジェクトをプッシュ
3. `npm run deploy` を実行
4. リポジトリ設定でGitHub Pagesを有効化（gh-pagesブランチを選択）

## ページタイプ

作成可能なページタイプ:
- ランディングページ（LP）
- コーポレートサイト
- ポートフォリオ
- ブログ
- Eコマースページ
- イベントページ
- SaaSプロダクトページ

## デザインシステム

`src/design-system.css` には以下が含まれます:
- プロフェッショナルなフォントペアリング
- カラーパレット（ライト/ダークテーマ対応）
- アニメーション
- グラデーション
- シャドウシステム