<?php
/**
 * Plugin Name: すこやか整形外科医院 採用ページ
 * Description: 採用情報ページを表示するショートコードプラグイン
 * Version: 2.0
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'Helvetica Neue', 'sans-serif'],
                    },
                    colors: {
                        'medical-blue': '#4A90E2',
                        'medical-mint': '#26D0CE',
                        'medical-green': '#10B981',
                        'text-dark': '#2C3E50',
                        'bg-light': '#F8F9FA',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .sukoyaka-glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sukoyaka-recruitment-container {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .sukoyaka-recruitment-container * {
            box-sizing: border-box;
        }
    </style>
    
    <div class="sukoyaka-recruitment-container">
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'hero'): ?>
        <!-- ヒーローセクション -->
        <section class="relative py-20 md:py-32 bg-gradient-to-br from-blue-50 via-white to-teal-50 overflow-hidden">
            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <span class="inline-block bg-medical-blue/10 text-medical-blue px-6 py-2 rounded-full text-sm font-semibold mb-6 backdrop-blur-sm border border-medical-blue/20">
                        2026年春 新規開業予定
                    </span>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        共にあゆみ、共につくる<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-medical-blue to-medical-mint">能登の地域医療</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        20年以上能登の地域医療を支えてきた中村健一医師とともに<br class="hidden md:block">
                        新しい整形外科医院を創造する仲間を募集しています
                    </p>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'positions'): ?>
        <!-- 募集職種セクション -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-text-dark">募集職種</h2>
                    <p class="text-gray-600 text-lg">あなたの専門性を活かして、地域医療に貢献しませんか</p>
                </div>
                <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    <!-- 看護師 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-medical-blue/10 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-medical-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-text-dark">看護師</h3>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            診療補助、処置、患者様のケアなど、医師と連携して医療を提供します。
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">給与:</span> 月給 23-30万円</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">勤務時間:</span> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 医療事務 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-medical-mint/10 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-medical-mint" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-text-dark">医療事務</h3>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            受付業務、レセプト業務、患者様対応など、クリニック運営の要となるポジションです。
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">給与:</span> 月給 20-25万円</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">勤務時間:</span> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 理学療法士 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-medical-green/10 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-medical-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-text-dark">理学療法士</h3>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            リハビリテーション業務全般。患者様の機能回復を支援する専門職です。
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">給与:</span> 月給 25-35万円</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">勤務時間:</span> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 診療放射線技師 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-text-dark">診療放射線技師</h3>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MRI・レントゲン等の画像診断業務。最新機器を用いた専門的な検査を担当します。
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">給与:</span> 月給 26-36万円</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-medical-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><span class="font-medium">勤務時間:</span> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'contact'): ?>
        <!-- お問い合わせ -->
        <section class="py-16 md:py-24 bg-gradient-to-br from-blue-50 to-teal-50">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-text-dark">エントリー・お問い合わせ</h2>
                    <p class="mb-10 text-gray-600 text-lg leading-relaxed">
                        ご興味をお持ちいただけましたら、お気軽にお問い合わせください。<br>
                        見学のご希望も承っております。
                    </p>
                    <a href="mailto:recruit@sukoyaka-clinic.jp" class="inline-flex flex-col items-center bg-gradient-to-r from-medical-blue to-medical-mint text-white px-10 py-4 rounded-xl font-medium hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <span class="text-lg">メールで応募・問い合わせ</span>
                        <span class="text-sm mt-1 opacity-90">recruit@sukoyaka-clinic.jp</span>
                    </a>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>
    
    <?php
    return ob_get_clean();
}