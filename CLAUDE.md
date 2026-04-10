# すこやか整形外科医院 Webサイトプロジェクト

## 概要
石川県羽咋市に2026年5月1日開院予定の「すこやか整形外科医院」のホームページおよび採用ページ。

## 本番URL
- ホームページ: https://sukoyaka-ortho-clinic.com/sukoyaka-homepage-green.html
- 採用ページ: https://sukoyaka-ortho-clinic.com/ (index.html)
- スタッフ紹介: https://sukoyaka-ortho-clinic.com/staff.html
- お知らせ一覧: https://sukoyaka-ortho-clinic.com/news.html
- 院長挨拶: https://sukoyaka-ortho-clinic.com/doctor.html
- 当院について: https://sukoyaka-ortho-clinic.com/about.html

## 技術スタック
- **フロントエンド**: HTML5 + Tailwind CSS (CDN版)
- **フォント**: Noto Sans JP, Zen Maru Gothic, Josefin Sans
- **ホスティング**: GitHub Pages (カスタムドメイン: sukoyaka-ortho-clinic.com)
- **ビルドツール**: Vite (開発時のみ)

## ファイル構成

### 本番使用ファイル
| ファイル | 用途 |
|---------|------|
| `sukoyaka-homepage-green.html` | メインホームページ（緑テーマ） |
| `index.html` | 採用ページ |
| `about.html` | 当院について詳細ページ |
| `doctor.html` | 院長挨拶ページ |
| `staff.html` | スタッフ紹介ページ |
| `news.html` | お知らせ一覧ページ |
| `news-opening.html` | 開院・内覧会のお知らせ詳細 |
| `assets/images/` | クリニック写真（受付、待合室、リハビリ室、外観） |

### デザインバリエーション（参考用）
- `sukoyaka-homepage.html` - オレンジテーマ版
- `sukoyaka-sample-brown.html` - ブラウンテーマ版
- `sukoyaka-sample-orange.html` - オレンジサンプル版
- `recruitment-*.html` - 採用ページの各種デザイン案

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

### 職種アイコンの色分け
- **茶色 (warm-brown)**: 骨粗鬆症マネージャー、防災士
- **緑色 (warm-green)**: 看護師、理学療法士、診療放射線技師、医療事務

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
- 開院日: 2026年5月1日(金)
- 内覧会: 2026年4月29日(水・祝)

### 所在地・連絡先
- 住所: 〒925-0026 石川県羽咋市石野町イ61番1
- 電話番号: 0767-22-1123
- FAX番号: 0767-22-1124

### 診療時間
| | 月 | 火 | 水 | 木 | 金 | 土 | 日祝 |
|--|--|--|--|--|--|--|--|
| 午前 9:00-12:30 | ● | ● | ● | - | ● | ● | - |
| 午後 14:30-18:00 | ● | ● | ● | - | ● | - | - |

### スタッフ構成
- 骨粗鬆症マネージャー（二次性骨折予防継続管理料3 算定）
- 防災士（災害時でも継続できる医療を）
- 看護師
- 理学療法士
- 診療放射線技師
- 医療事務

### 募集職種（採用ページ）
- 看護師: 月給23-30万円
- 医療事務: 月給20-25万円
- 理学療法士: 月給25-35万円
- 診療放射線技師: 月給26-36万円

## 準備中の機能
- WEB予約システム（開院時に実装予定）
- 診療案内詳細ページ
- 設備紹介詳細ページ

## 更新履歴
### 2026.04.13
- スタッフ紹介ページ(staff.html)を新規作成
- お知らせ一覧ページ(news.html)を新規作成
- 開院・内覧会のお知らせページ(news-opening.html)を新規作成
- クリニック正式情報（住所・電話・FAX）を反映
- 実際のクリニック写真を追加
- トップページのスタッフセクションを写真付きカードデザインに変更
- WEB予約・詳しく見るボタンを「準備中」に変更
