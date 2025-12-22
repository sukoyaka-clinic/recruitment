// テーマ切り替えシステム
class ThemeSwitcher {
    constructor() {
        this.themes = [
            { id: 'medical', name: '医療系プロフェッショナル', file: 'medical-recruitment.css' },
            { id: 'modern', name: 'モダン・ミニマリスト', file: 'theme-modern.css' },
            { id: 'warm', name: '温かみ・親しみやすい', file: 'theme-warm.css' },
            { id: 'premium', name: 'プレミアム・信頼感', file: 'theme-premium.css' }
        ];
        
        this.currentTheme = this.loadSavedTheme() || 'medical';
        this.init();
    }

    init() {
        this.createSwitcherUI();
        this.loadTheme(this.currentTheme);
        this.attachEventListeners();
    }

    createSwitcherUI() {
        // テーマ切り替えパネルを作成
        const panel = document.createElement('div');
        panel.id = 'theme-switcher-panel';
        panel.innerHTML = `
            <div class="theme-switcher-header">
                <h3>デザインテーマ選択</h3>
                <button id="theme-panel-toggle">×</button>
            </div>
            <div class="theme-list">
                ${this.themes.map(theme => `
                    <button class="theme-btn" data-theme="${theme.id}">
                        <span class="theme-name">${theme.name}</span>
                        <span class="theme-check ${this.currentTheme === theme.id ? 'active' : ''}">✓</span>
                    </button>
                `).join('')}
            </div>
            <div class="theme-info">
                <p>レスポンシブ対応</p>
                <div class="device-preview">
                    <button data-device="desktop">PC</button>
                    <button data-device="tablet">タブレット</button>
                    <button data-device="mobile">スマホ</button>
                </div>
            </div>
        `;

        // 切り替えボタン（フローティング）
        const trigger = document.createElement('button');
        trigger.id = 'theme-switcher-trigger';
        trigger.innerHTML = '🎨 テーマ';
        
        document.body.appendChild(panel);
        document.body.appendChild(trigger);
    }

    loadTheme(themeId) {
        const theme = this.themes.find(t => t.id === themeId);
        if (!theme) return;

        // 既存のテーマCSSを削除
        const existingTheme = document.getElementById('theme-stylesheet');
        if (existingTheme) {
            existingTheme.remove();
        }

        // 新しいテーマCSSを読み込み
        const link = document.createElement('link');
        link.id = 'theme-stylesheet';
        link.rel = 'stylesheet';
        link.href = `/src/${theme.file}`;
        document.head.appendChild(link);

        // 現在のテーマを保存
        this.currentTheme = themeId;
        this.saveTheme(themeId);
        this.updateUI();
    }

    attachEventListeners() {
        // パネルの表示/非表示
        const trigger = document.getElementById('theme-switcher-trigger');
        const panel = document.getElementById('theme-switcher-panel');
        const closeBtn = document.getElementById('theme-panel-toggle');

        trigger.addEventListener('click', () => {
            panel.classList.toggle('active');
        });

        closeBtn.addEventListener('click', () => {
            panel.classList.remove('active');
        });

        // テーマ切り替え
        document.querySelectorAll('.theme-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const themeId = e.currentTarget.dataset.theme;
                this.loadTheme(themeId);
            });
        });

        // デバイスプレビュー
        document.querySelectorAll('[data-device]').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const device = e.currentTarget.dataset.device;
                this.setViewport(device);
            });
        });
    }

    setViewport(device) {
        const viewport = document.querySelector('meta[name="viewport"]');
        const body = document.body;
        
        // クラスをリセット
        body.classList.remove('preview-mobile', 'preview-tablet', 'preview-desktop');
        
        switch(device) {
            case 'mobile':
                body.classList.add('preview-mobile');
                break;
            case 'tablet':
                body.classList.add('preview-tablet');
                break;
            case 'desktop':
            default:
                body.classList.add('preview-desktop');
                break;
        }
    }

    updateUI() {
        document.querySelectorAll('.theme-check').forEach(check => {
            check.classList.remove('active');
        });
        
        const activeBtn = document.querySelector(`[data-theme="${this.currentTheme}"] .theme-check`);
        if (activeBtn) {
            activeBtn.classList.add('active');
        }
    }

    saveTheme(themeId) {
        localStorage.setItem('selected-theme', themeId);
    }

    loadSavedTheme() {
        return localStorage.getItem('selected-theme');
    }
}

// ページ読み込み時に初期化
document.addEventListener('DOMContentLoaded', () => {
    new ThemeSwitcher();
});