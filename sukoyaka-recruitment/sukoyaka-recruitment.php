<?php
/**
 * Plugin Name: すこやか整形外科医院 採用ページ（インライン版）
 * Description: 採用情報ページを表示するショートコードプラグイン（スタイル内蔵版）
 * Version: 3.0
 * Author: すこやか整形外科医院
 */

// ショートコード登録
add_shortcode('sukoyaka_recruitment', 'sukoyaka_recruitment_shortcode');

function sukoyaka_recruitment_shortcode($atts) {
    // パラメータ設定
    $atts = shortcode_atts(array(
        'section' => 'all' // all, hero, positions, contact
    ), $atts);
    
    ob_start();
    ?>
    
    <style>
        .sukoyaka-container {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.5;
            color: #2C3E50;
        }
        .sukoyaka-container * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        /* ヒーローセクション */
        .sukoyaka-hero {
            padding: 80px 20px;
            background: linear-gradient(135deg, #E6F3FF 0%, #FFFFFF 50%, #E8FFF9 100%);
            text-align: center;
        }
        .sukoyaka-hero-inner {
            max-width: 1000px;
            margin: 0 auto;
        }
        .sukoyaka-badge {
            display: inline-block;
            background: rgba(74, 144, 226, 0.1);
            color: #4A90E2;
            padding: 8px 24px;
            border-radius: 24px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 24px;
            border: 1px solid rgba(74, 144, 226, 0.2);
        }
        .sukoyaka-hero h1 {
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 24px;
            color: #2C3E50;
        }
        .sukoyaka-hero .gradient-text {
            background: linear-gradient(135deg, #4A90E2 0%, #26D0CE 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .sukoyaka-hero p {
            font-size: 20px;
            color: #6B7280;
            line-height: 1.8;
            margin-bottom: 32px;
        }
        
        /* 募集職種セクション */
        .sukoyaka-positions {
            padding: 60px 20px;
            background: #FFFFFF;
        }
        .sukoyaka-positions-inner {
            max-width: 1000px;
            margin: 0 auto;
        }
        .sukoyaka-positions h2 {
            font-size: 36px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 16px;
            color: #2C3E50;
        }
        .sukoyaka-positions .subtitle {
            text-align: center;
            font-size: 18px;
            color: #6B7280;
            margin-bottom: 48px;
        }
        .sukoyaka-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 32px;
        }
        
        /* カード */
        .sukoyaka-card {
            background: #FFFFFF;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid #E5E7EB;
            transition: all 0.3s ease;
        }
        .sukoyaka-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        .sukoyaka-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }
        .sukoyaka-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
        }
        .sukoyaka-icon-blue {
            background: rgba(74, 144, 226, 0.1);
        }
        .sukoyaka-icon-mint {
            background: rgba(38, 208, 206, 0.1);
        }
        .sukoyaka-icon-green {
            background: rgba(16, 185, 129, 0.1);
        }
        .sukoyaka-icon-purple {
            background: rgba(139, 92, 246, 0.1);
        }
        .sukoyaka-card h3 {
            font-size: 24px;
            font-weight: 700;
            color: #2C3E50;
        }
        .sukoyaka-card-description {
            color: #6B7280;
            margin-bottom: 24px;
            line-height: 1.8;
        }
        .sukoyaka-card-details {
            border-top: 1px solid #E5E7EB;
            padding-top: 16px;
        }
        .sukoyaka-detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #4B5563;
        }
        .sukoyaka-detail-icon {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            color: #10B981;
        }
        .sukoyaka-detail-item strong {
            font-weight: 600;
            margin-right: 8px;
        }
        
        /* お問い合わせセクション */
        .sukoyaka-contact {
            padding: 60px 20px;
            background: linear-gradient(135deg, #E6F3FF 0%, #E8FFF9 100%);
            text-align: center;
        }
        .sukoyaka-contact-inner {
            max-width: 800px;
            margin: 0 auto;
        }
        .sukoyaka-contact h2 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 16px;
            color: #2C3E50;
        }
        .sukoyaka-contact p {
            font-size: 18px;
            color: #6B7280;
            line-height: 1.8;
            margin-bottom: 40px;
        }
        .sukoyaka-button {
            display: inline-block;
            background: linear-gradient(135deg, #4A90E2 0%, #26D0CE 100%);
            color: #FFFFFF;
            padding: 16px 40px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
        }
        .sukoyaka-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(74, 144, 226, 0.4);
        }
        .sukoyaka-button-email {
            display: block;
            font-size: 14px;
            font-weight: 400;
            margin-top: 4px;
            opacity: 0.9;
        }
        
        /* レスポンシブ */
        @media (max-width: 768px) {
            .sukoyaka-hero h1 {
                font-size: 32px;
            }
            .sukoyaka-hero p {
                font-size: 16px;
            }
            .sukoyaka-positions h2,
            .sukoyaka-contact h2 {
                font-size: 28px;
            }
            .sukoyaka-grid {
                grid-template-columns: 1fr;
            }
            .sukoyaka-card {
                padding: 24px;
            }
        }
    </style>
    
    <div class="sukoyaka-container">
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'hero'): ?>
        <!-- ヒーローセクション -->
        <section class="sukoyaka-hero">
            <div class="sukoyaka-hero-inner">
                <span class="sukoyaka-badge">2026年春 新規開業予定</span>
                <h1>
                    共にあゆみ、共につくる<br>
                    <span class="gradient-text">能登の地域医療</span>
                </h1>
                <p>
                    20年以上能登の地域医療を支えてきた中村健一医師とともに<br>
                    新しい整形外科医院を創造する仲間を募集しています
                </p>
            </div>
        </section>
        <?php endif; ?>
        
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'positions'): ?>
        <!-- 募集職種セクション -->
        <section class="sukoyaka-positions">
            <div class="sukoyaka-positions-inner">
                <h2>募集職種</h2>
                <p class="subtitle">あなたの専門性を活かして、地域医療に貢献しませんか</p>
                
                <div class="sukoyaka-grid">
                    <!-- 看護師 -->
                    <div class="sukoyaka-card">
                        <div class="sukoyaka-card-header">
                            <div class="sukoyaka-icon sukoyaka-icon-blue">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4A90E2" stroke-width="2">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <h3>看護師</h3>
                        </div>
                        <p class="sukoyaka-card-description">
                            診療補助、処置、患者様のケアなど、医師と連携して医療を提供します。
                        </p>
                        <div class="sukoyaka-card-details">
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>給与:</strong> 月給 23-30万円</span>
                            </div>
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>勤務時間:</strong> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 医療事務 -->
                    <div class="sukoyaka-card">
                        <div class="sukoyaka-card-header">
                            <div class="sukoyaka-icon sukoyaka-icon-mint">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#26D0CE" stroke-width="2">
                                    <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <h3>医療事務</h3>
                        </div>
                        <p class="sukoyaka-card-description">
                            受付業務、レセプト業務、患者様対応など、クリニック運営の要となるポジションです。
                        </p>
                        <div class="sukoyaka-card-details">
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>給与:</strong> 月給 20-25万円</span>
                            </div>
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>勤務時間:</strong> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 理学療法士 -->
                    <div class="sukoyaka-card">
                        <div class="sukoyaka-card-header">
                            <div class="sukoyaka-icon sukoyaka-icon-green">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2">
                                    <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h3>理学療法士</h3>
                        </div>
                        <p class="sukoyaka-card-description">
                            リハビリテーション業務全般。患者様の機能回復を支援する専門職です。
                        </p>
                        <div class="sukoyaka-card-details">
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>給与:</strong> 月給 25-35万円</span>
                            </div>
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>勤務時間:</strong> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 診療放射線技師 -->
                    <div class="sukoyaka-card">
                        <div class="sukoyaka-card-header">
                            <div class="sukoyaka-icon sukoyaka-icon-purple">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2">
                                    <path d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                </svg>
                            </div>
                            <h3>診療放射線技師</h3>
                        </div>
                        <p class="sukoyaka-card-description">
                            MRI・レントゲン等の画像診断業務。最新機器を用いた専門的な検査を担当します。
                        </p>
                        <div class="sukoyaka-card-details">
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>給与:</strong> 月給 26-36万円</span>
                            </div>
                            <div class="sukoyaka-detail-item">
                                <svg class="sukoyaka-detail-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong>勤務時間:</strong> 8:30〜17:30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <?php if ($atts['section'] == 'all' || $atts['section'] == 'contact'): ?>
        <!-- お問い合わせセクション -->
        <section class="sukoyaka-contact">
            <div class="sukoyaka-contact-inner">
                <h2>エントリー・お問い合わせ</h2>
                <p>
                    ご興味をお持ちいただけましたら、お気軽にお問い合わせください。<br>
                    見学のご希望も承っております。
                </p>
                <a href="mailto:recruit@sukoyaka-clinic.jp" class="sukoyaka-button">
                    メールで応募・問い合わせ
                    <span class="sukoyaka-button-email">recruit@sukoyaka-clinic.jp</span>
                </a>
            </div>
        </section>
        <?php endif; ?>
    </div>
    
    <?php
    return ob_get_clean();
}