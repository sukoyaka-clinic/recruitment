<?php
/**
 * Template Name: 採用情報ページ
 * Description: すこやか整形外科医院の採用情報ページテンプレート
 */

// WordPressのヘッダーを読み込む場合
// get_header(); 

// ヘッダーを独自にする場合は以下のHTMLから開始
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>採用情報 | <?php bloginfo('name'); ?></title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- カスタムスタイル -->
    <style>
        /* Tailwind カスタム設定 */
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'medical-blue': '#4A90E2',
                        'medical-green': '#52C41A',
                        'medical-mint': '#36CFC9',
                        'bg-light': '#F8FAFB',
                        'text-dark': '#1F2937',
                    }
                }
            }
        }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ここから採用ページのコンテンツ -->
<!-- 以下のコンテンツはrecruitment-modern.htmlから抽出 -->

<?php
// WordPressのフッターを読み込む場合
// get_footer();
?>
</body>
</html>