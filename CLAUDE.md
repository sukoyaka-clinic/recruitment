# すこやか整形外科医院 Webサイトプロジェクト

## 概要
石川県能登地区に2026年春開院予定の「すこやか整形外科医院」のホームページおよび採用ページ。

## 本番URL
- ホームページ: https://sukoyaka-ortho-clinic.com/sukoyaka-homepage-green.html
- 採用ページ: https://sukoyaka-ortho-clinic.com/ (index.html)

## 技術スタック
- **フロントエンド**: HTML5 + Tailwind CSS (CDN版)
- **フォント**: Noto Sans JP, Zen Maru Gothic, Josefin Sans
- **ホスティング**: GitHub Pages (カスタムドメイン: sukoyaka-ortho-clinic.com)
- **ビルドツール**: Vite (開発時のみ)
- **WordPressプラグイン**: 採用ページ用ショートコードプラグイン (PHP)

## ファイル構成

### 本番使用ファイル
| ファイル | 用途 |
|---------|------|
| `sukoyaka-homepage-green.html` | メインホームページ（緑テーマ） |
| `index.html` | 採用ページ |
| `about.html` | 当院について詳細ページ |
| `assets/` | 画像素材（医師写真、MRI、リハビリ室等） |

### デザインバリエーション（参考用）
- `sukoyaka-homepage.html` - オレンジテーマ版
- `sukoyaka-sample-brown.html` - ブラウンテーマ版
- `sukoyaka-sample-orange.html` - オレンジサンプル版
- `recruitment-*.html` - 採用ページの各種デザイン案

### WordPressプラグイン
- `sukoyaka-recruitment/sukoyaka-recruitment.php` - ショートコード `[sukoyaka_recruitment]`
- `wordpress/` - WordPress関連ファイル

## デザインシステム

### カラーパレット（緑テーマ）
```
warm-orange: #7BA07A (実際は緑、変数名は歴史的経緯)
warm-green: #7BA07A
warm-beige: #FDF6F0
warm-cream: #FFFAF5
warm-brown: #8B6F5C
warm-brown-dark: #5C4A3D
text-dark: #4A4037
text-gray: #7A7067
```

### フォント
- 見出し: Zen Maru Gothic (丸ゴシック、親しみやすさ)
- 本文: Noto Sans JP
- 英字装飾: Josefin Sans

## コマンド
```bash
# 開発サーバー起動
npm run dev

# プロダクションビルド
npm run build

# GitHub Pagesへデプロイ
npm run deploy
```

## 診療所情報

### 基本情報
- 院名: すこやか整形外科医院
- 院長: 中村健一（日本整形外科学会専門医）
- 開院予定: 2026年春
- 所在地: 石川県能登地区（詳細住所は決定次第公開）

### 診療時間
| | 月 | 火 | 水 | 木 | 金 | 土 | 日祝 |
|--|--|--|--|--|--|--|--|
| 午前 9:00-12:30 | ● | ● | ● | - | ● | ● | - |
| 午後 14:30-18:00 | ● | ● | ● | - | ● | - | - |

### 募集職種（採用ページ）
- 看護師: 月給23-30万円
- 医療事務: 月給20-25万円
- 理学療法士: 月給25-35万円
- 診療放射線技師: 月給26-36万円

## 注意事項
- 画像はイメージ素材を使用（実際の写真は開院後に差し替え予定）
- 電話番号・住所は仮のプレースホルダー（0768-XX-XXXX）
- WEB予約システムは開院時に実装予定
