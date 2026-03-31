# すこやか整形外科医院 システムアーキテクチャ

## 概要
石川県能登地区の整形外科医院の公式Webサイト。静的HTMLサイトとしてGitHub Pagesでホスティング。

## システム構成図

```
┌─────────────────────────────────────────────────────────────┐
│                      ユーザー（患者・求職者）                 │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│              sukoyaka-ortho-clinic.com (カスタムドメイン)     │
│                      ↓ CNAME                                │
│              GitHub Pages (gh-pages ブランチ)                │
└─────────────────────────────────────────────────────────────┘
                              │
          ┌───────────────────┼───────────────────┐
          │                   │                   │
          ▼                   ▼                   ▼
┌─────────────────┐ ┌─────────────────┐ ┌─────────────────┐
│  ホームページ    │ │   採用ページ     │ │  静的アセット    │
│ sukoyaka-       │ │   index.html    │ │   assets/       │
│ homepage-       │ │                 │ │ - 医師写真      │
│ green.html      │ │                 │ │ - MRI画像       │
└─────────────────┘ └─────────────────┘ │ - リハビリ室    │
                                        └─────────────────┘
```

## デプロイフロー

```
┌──────────────┐    ┌──────────────┐    ┌──────────────┐
│   開発環境    │    │    GitHub    │    │ GitHub Pages │
│  (ローカル)   │───▶│   main branch │───▶│  gh-pages    │
│              │push │              │    │              │
│ npm run dev  │    │              │    │ 本番公開      │
└──────────────┘    └──────────────┘    └──────────────┘
       │                                       │
       │ npm run deploy                        │
       └───────────────────────────────────────┘
                    直接デプロイ
```

## 技術スタック

| 技術 | 用途 |
|------|------|
| HTML5 | ページ構造 |
| Tailwind CSS (CDN) | スタイリング |
| JavaScript (Vanilla) | モバイルメニュー、スムーススクロール |
| Vite | 開発サーバー・ビルド |
| GitHub Pages | ホスティング |
| PHP | WordPressプラグイン（別途WordPress環境用） |

## ディレクトリ構造

```
recruitment/
├── .git/                    # Gitリポジトリ
├── .github/                 # GitHub Actions設定
├── assets/                  # 画像素材
│   ├── doctor-new.png       # 院長写真
│   ├── mri-latest.png       # MRI設備画像
│   ├── rehab-final.png      # リハビリ室画像
│   └── u6935556256_*.png    # クリニック内観
├── src/                     # ソースファイル（開発用）
│   ├── components/          # 再利用コンポーネント
│   ├── pages/               # ページテンプレート
│   └── design-system.css    # デザインシステム
├── sukoyaka-recruitment/    # WordPressプラグイン
│   └── sukoyaka-recruitment.php
├── wordpress/               # WordPress関連ファイル
│
├── sukoyaka-homepage-green.html  # 本番: ホームページ
├── index.html                    # 本番: 採用ページ
├── about.html                    # 本番: 当院について
│
├── sukoyaka-homepage.html   # デザイン案: オレンジテーマ
├── sukoyaka-sample-*.html   # デザイン案: 各種サンプル
├── recruitment-*.html       # デザイン案: 採用ページ
│
├── CNAME                    # カスタムドメイン設定
├── package.json             # npm設定
├── tailwind.config.js       # Tailwind設定
├── vite.config.js           # Vite設定
├── CLAUDE.md                # プロジェクト仕様
├── ARCHITECTURE.md          # 本ファイル
├── SETUP.md                 # 環境構築手順
└── README.md                # ユーザー向け説明
```

## ページ構成

### ホームページ (sukoyaka-homepage-green.html)
```
├── ヘッダー（ロゴ、ナビゲーション）
├── ヒーローセクション（キャッチコピー、診療時間カード）
├── お知らせセクション
├── 当院についてセクション（3つの特徴）
├── 診療案内セクション（整形外科、リハビリ）
├── 院長紹介セクション
├── 設備紹介セクション（MRI、リハビリ室）
├── アクセス・診療時間セクション
├── フッター
└── モバイル固定バー（電話・WEB予約）
```

### 採用ページ (index.html)
```
├── ヘッダー
├── ヒーローセクション（採用メッセージ）
├── 募集職種カード（看護師、医療事務、PT、放射線技師）
├── 応募・問い合わせセクション
└── フッター
```

## 外部依存

| サービス | URL | 用途 |
|---------|-----|------|
| Tailwind CSS | cdn.tailwindcss.com | CSSフレームワーク |
| Google Fonts | fonts.googleapis.com | Webフォント |

## 環境変数

なし（静的サイトのため環境変数は使用しない）

## 実装ロードマップ

### 完了
- [x] ホームページ（緑テーマ）
- [x] 採用ページ
- [x] レスポンシブ対応
- [x] モバイルメニュー
- [x] GitHub Pagesデプロイ
- [x] カスタムドメイン設定

### 開院時に実装予定
- [ ] Googleマップ埋め込み（住所確定後）
- [ ] WEB予約システム連携
- [ ] 実際の写真への差し替え
- [ ] 電話番号・住所の更新

## バックアップ

保存先: ~/Desktop/メディベント/すこやか整形/

```bash
# バックアップコマンド
cp -r /Users/asaitoshikatsu/claude-projects/web-dev-project/recruitment ~/Desktop/メディベント/すこやか整形/recruitment-backup-$(date +%Y%m%d)
```
