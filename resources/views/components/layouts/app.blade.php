<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- 動的SEO --}}
    <title>{{ $title ?? '計算ラボ | 完全無料のオンライン計算・シミュレーター' }}</title>
    <meta name="description" content="{{ $description ?? '「計算ラボ」は、ビジネス、健康、金融、日常生活など、あらゆる計算をプロフェッショナルかつシンプルに解決する無料オンラインツール集です。登録不要で今すぐ使えます。' }}">
    <meta name="keywords" content="{{ $keywords ?? 'シミュレーター,計算ツール,無料,ビジネス,投資,健康' }}">

    {{-- OGP --}}
    <meta property="og:title" content="{{ $ogTitle ?? ($title ?? '計算ラボ') }}">
    <meta property="og:description" content="{{ $ogDescription ?? ($description ?? 'あらゆる計算を瞬時に実行') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta property="og:site_name" content="計算ラボ">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle ?? ($title ?? '計算ラボ') }}">
    <meta name="twitter:description" content="{{ $ogDescription ?? ($description ?? 'あらゆる計算を瞬時に実行') }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">

    {{-- Google Analytics 4 --}}
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-36WXWBMFG4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-36WXWBMFG4');
    </script>

    {{-- AdSense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7657771466735779"
        crossorigin="anonymous"></script>

    {{-- 構造化データ --}}
    @if (isset($structuredData))
        {!! $structuredData !!}
    @else
        <script type="application/ld+json">
                    {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebApplication',
            'name' => '計算ラボ',
            'description' => 'ビジネス、健康、金融など、あらゆる計算をプロフェッショナルに解決する無料ツール集。',
            'url' => url()->current(),
            'applicationCategory' => 'BusinessApplication',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'JPY',
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
                    </script>
    @endif

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* SP固定バー用のスタイル */
        .sp-fixed-ad {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            transform: translateY(100%);
            transition: transform 0.3s ease-in-out;
        }

        .sp-fixed-ad.show {
            transform: translateY(0);
        }

        /* PC等では強制非表示（lg breakpoint） */
        @media (min-width: 1024px) {
            .sp-fixed-ad, .sp-fixed-ad.show {
                display: none !important;
                visibility: hidden !important;
                pointer-events: none !important;
            }
        }

        /* モーダル用のスタイル */
        .ad-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 10000;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .ad-modal.show {
            display: flex;
        }

        .ad-modal-content {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            max-width: 500px;
            width: 100%;
            position: relative;
            animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 text-gray-900">

    {{-- ヘッダー --}}
    <header class="bg-white shadow-md border-b-4 border-purple-500 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center gap-3 group">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2" />
                            <path d="M13 3L8 13H12L11 21L19 11H14L16 3H13Z" fill="currentColor" />
                        </svg>
                    </div>
                    <h1
                        class="text-xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent group-hover:from-purple-700 group-hover:to-pink-700 transition-all">
                        計算ラボ
                    </h1>
                </a>

                {{-- ナビゲーション --}}
                <nav class="hidden md:flex items-center gap-6">
                    <a href="{{ route('home') }}"
                        class="text-gray-600 hover:text-purple-600 font-medium transition-colors">
                        ホーム
                    </a>
                    <a href="/ad-cost"
                        class="text-gray-600 hover:text-purple-600 font-medium transition-colors">
                        ツール一覧
                    </a>
                    <a href="/about"
                        class="text-gray-600 hover:text-purple-600 font-medium transition-colors">
                        使い方
                    </a>
                    <a href="/contact"
                        class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-6 py-2.5 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all hover:scale-105">
                        お問い合わせ
                    </a>
                </nav>
            </div>
        </div>
    </header>

    {{-- メインコンテナ（PC時は3カラムレイアウト） --}}
    <div class="max-w-[1920px] mx-auto">
        <div class="flex flex-col lg:flex-row gap-6 p-4 lg:p-6">

            {{-- 左サイドバー広告（PC時のみ表示） --}}
            <aside class="hidden lg:block w-[160px] flex-shrink-0">
                <div class="sticky top-24 space-y-6">
                    {{-- サイドバー広告1（楽天ウィジェット 148x600） --}}
                    <div class="bg-white rounded-xl shadow-lg p-2 border-2 border-purple-100">
                        <div class="flex justify-center">
                            <script type="text/javascript">
                                rakuten_design = "slide";
                                rakuten_affiliateId = "50456315.a7115187.50456316.6028b4a0";
                                rakuten_items = "ranking";
                                rakuten_genreId = "0";
                                rakuten_size = "148x600";
                                rakuten_target = "_blank";
                                rakuten_theme = "gray";
                                rakuten_border = "off";
                                rakuten_auto_mode = "on";
                                rakuten_genre_title = "off";
                                rakuten_recommend = "on";
                                rakuten_ts = "1769352537390";
                            </script>
                            <script type="text/javascript"
                                src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js?20230106"></script>
                        </div>
                    </div>

                    {{-- クイックリンク --}}
                    <div class="bg-white rounded-xl shadow-lg p-6 border-2 border-purple-100">
                        <h3 class="text-xs font-bold text-gray-700 mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            人気ツール
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="/ad-cost"
                                    class="text-xs text-gray-600 hover:text-purple-600 flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 bg-purple-400 rounded-full group-hover:bg-purple-600"></span>
                                    広告予算シミュレーター
                                </a>
                            </li>
                            <li>
                                <a href="/nisa-ideco"
                                    class="text-xs text-gray-600 hover:text-purple-600 flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 bg-purple-400 rounded-full group-hover:bg-purple-600"></span>
                                    NISA・iDeCo計算
                                </a>
                            </li>
                            <li>
                                <a href="/moving-cost"
                                    class="text-xs text-gray-600 hover:text-purple-600 flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 bg-purple-400 rounded-full group-hover:bg-purple-600"></span>
                                    引越し費用計算
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>

            {{-- メインコンテンツエリア --}}
            <main class="flex-1 min-w-0 mb-20 lg:mb-0">
                {{-- パンくずリスト --}}
                @if (!isset($hideBreadcrumbs) || !$hideBreadcrumbs)
                <nav class="flex mb-8 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center text-gray-700 hover:text-purple-600">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                ホーム
                            </a>
                        </li>
                        @if (isset($breadcrumbs))
                            @foreach ($breadcrumbs as $breadcrumb)
                                <li>
                                    <div class="flex items-center">
                                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        @if ($breadcrumb['url'])
                                            <a href="{{ $breadcrumb['url'] }}"
                                                class="ms-1 text-gray-700 hover:text-purple-600 md:ms-2">{{ $breadcrumb['name'] }}</a>
                                        @else
                                            <span
                                                class="ms-1 text-gray-500 md:ms-2 dark:text-gray-400">{{ $breadcrumb['name'] }}</span>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ol>
                </nav>
                @endif

                {{-- 上部広告（楽天ウィジェット 600x200） --}}
                @if (!isset($hideTopAd) || !$hideTopAd)
                    <div class="mb-8 flex justify-center opacity-80 hover:opacity-100 transition-opacity">
                        <div class="max-w-full overflow-hidden">
                            <script type="text/javascript">
                                rakuten_design = "slide";
                                rakuten_affiliateId = "50456315.a7115187.50456316.6028b4a0";
                                rakuten_items = "ranking";
                                rakuten_genreId = "0";
                                rakuten_size = "600x200";
                                rakuten_target = "_blank";
                                rakuten_theme = "gray";
                                rakuten_border = "off";
                                rakuten_auto_mode = "on";
                                rakuten_genre_title = "off";
                                rakuten_recommend = "on";
                                rakuten_ts = "1769353251239";
                            </script>
                            <script type="text/javascript"
                                src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js?20230106"></script>
                        </div>
                    </div>
                @endif

                {{-- ページコンテンツ --}}
                {{ $slot }}

                {{-- 下部広告（楽天ウィジェット 600x200） --}}
                @if (!isset($hideBottomAd) || !$hideBottomAd)
                    <div class="mt-12 flex justify-center opacity-80 hover:opacity-100 transition-opacity">
                        <div class="max-w-full overflow-hidden">
                            <script type="text/javascript">
                                rakuten_design = "slide";
                                rakuten_affiliateId = "50456315.a7115187.50456316.6028b4a0";
                                rakuten_items = "ranking";
                                rakuten_genreId = "0";
                                rakuten_size = "600x200";
                                rakuten_target = "_blank";
                                rakuten_theme = "gray";
                                rakuten_border = "off";
                                rakuten_auto_mode = "on";
                                rakuten_genre_title = "off";
                                rakuten_recommend = "on";
                                rakuten_ts = "1769353251239";
                            </script>
                            <script type="text/javascript"
                                src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js?20230106"></script>
                        </div>
                    </div>
                @endif
            </main>

            {{-- 右サイドバー広告（PC時のみ表示） --}}
            <aside class="hidden lg:block w-[160px] flex-shrink-0">
                <div class="sticky top-24 space-y-6">
                    {{-- サイドバー広告2（楽天ウィジェット 148x600） --}}
                    <div class="bg-white rounded-xl shadow-lg p-2 border-2 border-purple-100">
                        <div class="flex justify-center">
                            <script type="text/javascript">
                                rakuten_design = "slide";
                                rakuten_affiliateId = "50456315.a7115187.50456316.6028b4a0";
                                rakuten_items = "ranking";
                                rakuten_genreId = "0";
                                rakuten_size = "148x600";
                                rakuten_target = "_blank";
                                rakuten_theme = "gray";
                                rakuten_border = "off";
                                rakuten_auto_mode = "on";
                                rakuten_genre_title = "off";
                                rakuten_recommend = "on";
                                rakuten_ts = "1769352537390";
                            </script>
                            <script type="text/javascript"
                                src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js?20230106"></script>
                        </div>
                    </div>

                    {{-- お知らせ --}}
                    <div
                        class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl shadow-lg p-6 border-2 border-purple-200">
                        <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                            お知らせ
                        </h3>
                        <ul class="space-y-3">
                            <li class="text-xs text-gray-600 pb-3 border-b border-purple-200">
                                <span
                                    class="inline-block px-2 py-0.5 bg-purple-200 text-purple-700 rounded text-[10px] font-bold mb-1">NEW</span>
                                <p>NISA・iDeCo計算ツール公開</p>
                            </li>
                            <li class="text-xs text-gray-600">
                                <span
                                    class="inline-block px-2 py-0.5 bg-gray-200 text-gray-600 rounded text-[10px] font-bold mb-1">予定</span>
                                <p>健康・フィットネスツール追加予定</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    {{-- SP固定広告バー（モバイルのみ表示・元の画像バナー） --}}
    <div class="sp-fixed-ad lg:hidden" id="spFixedAd">
        <div class="bg-white border-t-2 border-purple-500 shadow-2xl">
            <div class="flex items-center justify-between px-3 py-2">
                <div class="flex-1">
                    <a href="https://hb.afl.rakuten.co.jp/hsc/505dfd93.d186c2e5.505dfd94.bc3c8d86/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiI5NSIsImJhbiI6MjA1MTk0MiwiYW1wIjpmYWxzZX0%3D"
                        target="_blank" rel="nofollow sponsored noopener" class="block">
                        <img src="https://hbb.afl.rakuten.co.jp/hsb/505dfd93.d186c2e5.505dfd94.bc3c8d86/?me_id=1&me_adv_id=2051942&t=pict"
                            border="0" alt="楽天広告" title="" class="w-full h-auto max-h-16 object-contain">
                    </a>
                </div>
                <button onclick="closeSPAd()" class="ml-3 p-2 text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- 広告モーダル（オプション：ページ読み込み時に表示） --}}
    <div class="ad-modal" id="adModal">
        <div class="ad-modal-content">
            <button onclick="closeAdModal()"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="text-center mb-4">
                <h3 class="text-xl font-bold text-gray-800 mb-2">🎁 特別なお知らせ</h3>
                <p class="text-sm text-gray-600">このサイトは広告により運営されています</p>
            </div>

            <div class="mb-4">
                <a href="https://hb.afl.rakuten.co.jp/hsc/505dfd93.d186c2e5.505dfd94.bc3c8d86/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiI5NSIsImJhbiI6MjA1MTk0MiwiYW1wIjpmYWxzZX0%3D"
                    target="_blank" rel="nofollow sponsored noopener" class="block">
                    <img src="https://hbb.afl.rakuten.co.jp/hsb/505dfd93.d186c2e5.505dfd94.bc3c8d86/?me_id=1&me_adv_id=2051942&t=pict"
                        border="0" alt="楽天広告" title="" class="w-full h-auto rounded-lg">
                </a>
            </div>

            <button onclick="closeAdModal()"
                class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold py-3 rounded-lg hover:from-purple-700 hover:to-pink-700 transition-all">
                閉じる
            </button>
        </div>
    </div>

    {{-- フッター --}}
    <footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-lg flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor"
                                    stroke-width="2" />
                                <path d="M13 3L8 13H12L11 21L19 11H14L16 3H13Z" fill="currentColor" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold">Calculator Labs</h3>
                    </div>
                    <p class="text-gray-400 text-xs leading-relaxed">
                        ビジネスから日常まで、あらゆる計算を瞬時に実行。完全無料・登録不要でご利用いただけます。
                    </p>
                </div>

                <div>
                    <h4 class="text-xs font-bold mb-4 text-purple-400">サイト情報</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('privacy') }}"
                                class="text-gray-400 hover:text-white text-xs transition-colors">プライバシーポリシー</a></li>
                        <li><a href="{{ route('terms') }}"
                                class="text-gray-400 hover:text-white text-xs transition-colors">利用規約</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 text-center">
                <p class="text-xs text-gray-400">
                    &copy; 2026 Calculator Labs. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // SP固定広告バーの制御
        let spAdClosed = false;

        window.addEventListener('scroll', function () {
            // PCサイズでは処理しない
            if (window.innerWidth >= 1024) return;

            const spAd = document.getElementById('spFixedAd');
            if (!spAd || spAdClosed) return;

            // スクロール量が300px以上で表示
            if (window.scrollY > 300) {
                spAd.classList.add('show');
            } else {
                spAd.classList.remove('show');
            }
        });

        function closeSPAd() {
            const spAd = document.getElementById('spFixedAd');
            spAd.classList.remove('show');
            spAdClosed = true;

            // セッションストレージに保存（ページ遷移でリセット）
            sessionStorage.setItem('spAdClosed', 'true');
        }

        // ページ読み込み時にセッションストレージをチェック
        if (sessionStorage.getItem('spAdClosed') === 'true') {
            spAdClosed = true;
        }

        // 広告モーダルの制御（オプション：初回訪問時のみ表示）
        function showAdModal() {
            const modal = document.getElementById('adModal');
            // 1日1回のみ表示（localStorageを使用）
            const lastShown = localStorage.getItem('adModalLastShown');
            const now = new Date().getTime();
            const oneDay = 24 * 60 * 60 * 1000;

            if (!lastShown || (now - parseInt(lastShown)) > oneDay) {
                setTimeout(() => {
                    modal.classList.add('show');
                    localStorage.setItem('adModalLastShown', now.toString());
                }, 3000); // 3秒後に表示
            }
        }

        function closeAdModal() {
            const modal = document.getElementById('adModal');
            modal.classList.remove('show');
        }

        // モーダル外クリックで閉じる
        document.getElementById('adModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeAdModal();
            }
        });

        // 初回訪問時のモーダル表示（コメントアウトで無効化可能）
        // showAdModal();
    </script>

    @livewireScripts
    @stack('scripts')
</body>

</html>