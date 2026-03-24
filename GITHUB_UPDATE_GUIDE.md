# GitHub Pages 更新手順ガイド

## 概要
このドキュメントは、すこやかクリニックの求人サイト（recruitment）を更新する際の手順をまとめたものです。

## リポジトリ情報
- **リポジトリURL**: https://github.com/sukoyaka-clinic/recruitment
- **公開URL**: https://sukoyaka-clinic.github.io/recruitment/
- **ローカルパス**: `/Users/asaitoshikatsu/claude-projects/web-dev-project/recruitment`

## 更新手順

### 1. Claudeが実行する部分

#### Step 1: index.htmlの編集
```bash
# web-dev-projectディレクトリでindex.htmlを編集
cd /Users/asaitoshikatsu/claude-projects/web-dev-project
# ここでindex.htmlを編集（Edit/Write/MultiEditツールを使用）
```

#### Step 2: ファイルのコピー
```bash
# 編集したindex.htmlをrecruitmentフォルダにコピー
cp /Users/asaitoshikatsu/claude-projects/web-dev-project/index.html /Users/asaitoshikatsu/claude-projects/web-dev-project/recruitment/index.html

# assetsフォルダも必要な場合はコピー
cp -r /Users/asaitoshikatsu/claude-projects/web-dev-project/assets /Users/asaitoshikatsu/claude-projects/web-dev-project/recruitment/
```

#### Step 3: Git操作（コミットまで）
```bash
# recruitmentディレクトリに移動
cd /Users/asaitoshikatsu/claude-projects/web-dev-project/recruitment

# 変更状況を確認
git status

# 変更をステージング
git add .

# コミット（適切なメッセージを付けて）
git commit -m "Update: [変更内容の説明]"
```

### 2. ユーザーが実行する部分

#### Step 4: GitHubへプッシュ
```bash
# オプション1: 通常のpush（認証が必要）
git push origin main

# オプション2: トークンを使用したpush
git push https://YOUR_USERNAME:ghp_YOUR_TOKEN@github.com/sukoyaka-clinic/recruitment.git main
```

**認証について**：
- Username: GitHubのユーザー名
- Password: Personal Access Token（`ghp_`で始まるトークン）
- ⚠️ パスワードではなくトークンを使用すること

## よくある更新内容

### 募集職種の追加
1. index.htmlの`<!-- Position Card -->`セクションに新しいカードを追加
2. 適切な色（bg-色-100, text-色-700）を設定
3. 給与、勤務時間、休日情報を記入

### 給与・待遇の変更
1. 該当するPosition Cardを検索
2. 給与欄の金額を更新
3. 必要に応じて福利厚生セクションも更新

### 診療時間の変更
1. 診療時間テーブルを検索
2. 時間帯や休診日を更新

## トラブルシューティング

### git pushで認証エラーが出る場合
- GitHubは2021年8月からパスワード認証を廃止
- Personal Access Tokenを使用する必要がある
- トークンの作成方法：
  1. GitHub.com → Settings → Developer settings
  2. Personal access tokens → Tokens (classic)
  3. Generate new token (classic)
  4. `repo`権限にチェック
  5. Generate tokenをクリック

### ファイルが更新されない場合
```bash
# キャッシュをクリア
git rm -r --cached .
git add .
git commit -m "Clear cache and update"
```

### GitHub Pagesが更新されない場合
- 通常、pushから数分で自動的に更新される
- 10分以上待っても更新されない場合：
  - GitHub リポジトリ → Settings → Pages を確認
  - Build and deploymentのステータスを確認

## Claudeへの指示例

「すこやかクリニックの求人ページを更新して。〇〇を変更してgit commitまで実行して。最後のpushは私がやるから。」

この指示により、Claudeは：
1. index.htmlを編集
2. recruitmentフォルダにコピー
3. git add と git commit を実行
4. pushコマンドを提示（ユーザー実行用）

## 注意事項

- **重要**: Claudeはセキュリティ上の理由からGitHubトークンを扱えません
- pushは必ずユーザーが実行する必要があります
- ファイルのバックアップを定期的に取ることを推奨

## 関連ファイル

- `/Users/asaitoshikatsu/claude-projects/web-dev-project/index.html` - メインの編集ファイル
- `/Users/asaitoshikatsu/claude-projects/web-dev-project/recruitment/` - GitHubリポジトリのローカルコピー
- `/Users/asaitoshikatsu/claude-projects/web-dev-project/assets/` - 画像などのリソース

---
最終更新: 2024年12月24日