<?php
/**
 * Plugin Name: すこやか整形外科医院 採用ページ
 * Description: 採用情報ページを表示するショートコードプラグイン
 * Version: 1.0
 * Author: すこやか整形外科医院
 */

// ショートコード登録
add_shortcode('sukoyaka_recruitment', 'sukoyaka_recruitment_shortcode');

function sukoyaka_recruitment_shortcode($atts) {
    // パラメータ設定
    $atts = shortcode_atts(array(
        'section' => 'all' // all, hero, positions, benefits, contact
    ), $atts);
    
    ob_start();
    ?>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
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
    </script>
    
    <div class="sukoyaka-recruitment-container">
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'hero'): ?>
        <!-- ヒーローセクション -->
        <section class="py-12 md:py-20 bg-gradient-to-br from-blue-50 via-white to-green-50">
            <div class="max-w-6xl mx-auto px-4">
                <div class="text-center mb-8">
                    <span class="inline-block bg-medical-blue/10 text-medical-blue px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        2026年春 新規開業予定
                    </span>
                    <h1 class="text-3xl md:text-5xl font-bold mb-4">
                        共にあゆみ、共につくる<br>
                        <span class="text-medical-blue">能登の地域医療</span>
                    </h1>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'positions'): ?>
        <!-- 募集職種セクション -->
        <section class="py-12 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-8">募集職種</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- 看護師 -->
                    <div class="bg-white border rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-bold mb-3">看護師</h3>
                        <p class="text-gray-600 mb-4">診療補助、処置、患者様のケアなど、医師と連携して医療を提供します。</p>
                        <div class="space-y-2 text-sm">
                            <p><span class="font-medium">給与:</span> 月給 23-30万円</p>
                            <p><span class="font-medium">勤務時間:</span> 8:30〜17:30</p>
                        </div>
                    </div>
                    
                    <!-- 医療事務 -->
                    <div class="bg-white border rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-bold mb-3">医療事務</h3>
                        <p class="text-gray-600 mb-4">受付業務、レセプト業務、患者様対応など、クリニック運営の要となるポジションです。</p>
                        <div class="space-y-2 text-sm">
                            <p><span class="font-medium">給与:</span> 月給 20-25万円</p>
                            <p><span class="font-medium">勤務時間:</span> 8:30〜17:30</p>
                        </div>
                    </div>
                    
                    <!-- 理学療法士 -->
                    <div class="bg-white border rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-bold mb-3">理学療法士</h3>
                        <p class="text-gray-600 mb-4">リハビリテーション業務全般。患者様の機能回復を支援する専門職です。</p>
                        <div class="space-y-2 text-sm">
                            <p><span class="font-medium">給与:</span> 月給 25-35万円</p>
                            <p><span class="font-medium">勤務時間:</span> 8:30〜17:30</p>
                        </div>
                    </div>
                    
                    <!-- 診療放射線技師 -->
                    <div class="bg-white border rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-bold mb-3">診療放射線技師</h3>
                        <p class="text-gray-600 mb-4">MRI・レントゲン等の画像診断業務。最新機器を用いた専門的な検査を担当します。</p>
                        <div class="space-y-2 text-sm">
                            <p><span class="font-medium">給与:</span> 月給 26-36万円</p>
                            <p><span class="font-medium">勤務時間:</span> 8:30〜17:30</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'contact'): ?>
        <!-- お問い合わせ -->
        <section class="py-12 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-2xl md:text-3xl font-bold mb-6">エントリー・お問い合わせ</h2>
                <p class="mb-8 text-gray-600">
                    ご興味をお持ちいただけましたら、お気軽にお問い合わせください。<br>
                    見学のご希望も承っております。
                </p>
                <a href="mailto:recruit@sukoyaka-clinic.jp" class="inline-block bg-medical-blue text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-600 transition-colors">
                    メールで応募・問い合わせ<br>
                    <span class="text-sm">recruit@sukoyaka-clinic.jp</span>
                </a>
            </div>
        </section>
        <?php endif; ?>
    </div>
    
    <?php
    return ob_get_clean();
}

// CSSを追加
add_action('wp_head', 'sukoyaka_recruitment_styles');
function sukoyaka_recruitment_styles() {
    ?>
    <style>
        .sukoyaka-recruitment-container {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
    </style>
    <?php
}