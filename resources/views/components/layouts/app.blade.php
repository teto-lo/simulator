<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- 動的SEO (各ページから渡せる) --}}
    <title>{{ $title ?? 'シミュレーションツール集【無料】' }}</title>
    <meta name="description" content="{{ $description ?? 'ビジネスから日常まで、あらゆる計算を瞬時に実行。完全無料・登録不要のシミュレーションツール集。' }}">
    <meta name="keywords" content="{{ $keywords ?? 'シミュレーター,計算ツール,無料,ビジネス,投資,健康' }}">

    {{-- OGP --}}
    <meta property="og:title" content="{{ $ogTitle ?? ($title ?? 'シミュレーションツール集') }}">
    <meta property="og:description" content="{{ $ogDescription ?? ($description ?? 'あらゆる計算を瞬時に実行') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta property="og:site_name" content="シミュレーションツール集">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle ?? ($title ?? 'シミュレーションツール集') }}">
    <meta name="twitter:description" content="{{ $ogDescription ?? ($description ?? 'あらゆる計算を瞬時に実行') }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">

    {{-- 構造化データ (各ページから上書き可能) --}}
    @if (isset($structuredData))
        {!! $structuredData !!}
    @else
        <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebApplication',
            'name' => 'シミュレーションツール集',
            'description' => 'ビジネスから日常まで、あらゆる計算を瞬時に実行できる無料ツール',
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

    {{-- AdSense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXXXXXXXXXXX"
        crossorigin="anonymous"></script>

    {{-- Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>

    {{-- 追加のheadコンテンツ --}}
    @stack('head')
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 text-gray-900">

    {{-- ヘッダー --}}
    <header class="bg-white shadow-md border-b-4 border-purple-500 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center gap-3 group">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h1
                        class="text-xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent group-hover:from-purple-700 group-hover:to-pink-700 transition-all">
                        シミュレーションツール集
                    </h1>
                </a>

                {{-- ナビゲーション（将来の拡張用） --}}
                <nav class="hidden md:flex items-center gap-6">
                    <a href="/" class="text-gray-600 hover:text-purple-600 font-medium transition-colors">ホーム</a>
                    <a href="#tools" class="text-gray-600 hover:text-purple-600 font-medium transition-colors">ツール</a>
                    <a href="#about" class="text-gray-600 hover:text-purple-600 font-medium transition-colors">使い方</a>
                </nav>
            </div>
        </div>
    </header>

    {{-- メインコンテナ（PC時は3カラムレイアウト） --}}
    <div class="max-w-[1920px] mx-auto">
        <div class="flex flex-col lg:flex-row gap-6 p-4 lg:p-6">

            {{-- 左サイドバー広告（PC時のみ表示） --}}
            <aside class="hidden lg:block w-64 flex-shrink-0">
                <div class="sticky top-24 space-y-6">
                    {{-- サイドバー広告1 --}}
                    <div class="bg-white rounded-xl shadow-lg p-4 border-2 border-purple-100">
                        <p class="text-xs text-gray-500 text-center mb-2">スポンサー</p>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
                            data-ad-slot="1111111111" data-ad-format="vertical"
                            data-full-width-responsive="false"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>

                    {{-- クイックリンク --}}
                    <div class="bg-white rounded-xl shadow-lg p-6 border-2 border-purple-100">
                        <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            人気ツール
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="/ad-cost"
                                    class="text-sm text-gray-600 hover:text-purple-600 flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 bg-purple-400 rounded-full group-hover:bg-purple-600"></span>
                                    広告予算シミュレーター
                                </a>
                            </li>
                            <li class="text-sm text-gray-400 flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                                複利計算（準備中）
                            </li>
                            <li class="text-sm text-gray-400 flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                                BMI計算（準備中）
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>

            {{-- メインコンテンツエリア --}}
            <main class="flex-1 min-w-0">
                {{-- 上部広告 --}}
                @if (!isset($hideTopAd) || !$hideTopAd)
                    <div class="mb-8 bg-white rounded-xl shadow-lg p-4 border-2 border-purple-100">
                        <p class="text-xs text-gray-500 text-center mb-2">スポンサー</p>
                        <div class="flex justify-center">
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
                                data-ad-slot="1234567890" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                @endif

                {{-- ページコンテンツ --}}
                {{ $slot }}

                {{-- 下部広告 --}}
                @if (!isset($hideBottomAd) || !$hideBottomAd)
                    <div class="mt-12 bg-white rounded-xl shadow-lg p-4 border-2 border-purple-100">
                        <p class="text-xs text-gray-500 text-center mb-2">スポンサー</p>
                        <div class="flex justify-center">
                            <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                                data-ad-layout-key="-fb+5w+4e-db+86" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
                                data-ad-slot="9876543210"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                @endif
            </main>

            {{-- 右サイドバー広告（PC時のみ表示） --}}
            <aside class="hidden lg:block w-64 flex-shrink-0">
                <div class="sticky top-24 space-y-6">
                    {{-- サイドバー広告2 --}}
                    <div class="bg-white rounded-xl shadow-lg p-4 border-2 border-purple-100">
                        <p class="text-xs text-gray-500 text-center mb-2">スポンサー</p>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
                            data-ad-slot="2222222222" data-ad-format="vertical"
                            data-full-width-responsive="false"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>

                    {{-- お知らせ --}}
                    <div
                        class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl shadow-lg p-6 border-2 border-purple-200">
                        <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
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
                                <p>広告予算シミュレーター公開</p>
                            </li>
                            <li class="text-xs text-gray-600">
                                <span
                                    class="inline-block px-2 py-0.5 bg-gray-200 text-gray-600 rounded text-[10px] font-bold mb-1">予定</span>
                                <p>金融・健康カテゴリ追加予定</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    {{-- フッター --}}
    <footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            {{-- フッターコンテンツ --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                {{-- サイト情報 --}}
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div
                            class="w-8 h-8 bg-gradient-to-br from-purple-600 to-pink-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold">シミュレーションツール集</h3>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        ビジネスから日常まで、あらゆる計算を瞬時に実行。完全無料・登録不要でご利用いただけます。
                    </p>
                </div>

                {{-- リンク --}}
                <div>
                    <h4 class="text-sm font-bold mb-4 text-purple-400">カテゴリ</h4>
                    <ul class="space-y-2">
                        <li><a href="#marketing"
                                class="text-gray-400 hover:text-white text-sm transition-colors">マーケティング</a></li>
                        <li><a href="#finance"
                                class="text-gray-400 hover:text-white text-sm transition-colors">金融・投資</a></li>
                        <li><a href="#health"
                                class="text-gray-400 hover:text-white text-sm transition-colors">健康・フィットネス</a></li>
                    </ul>
                </div>

                {{-- 法的リンク --}}
                <div>
                    <h4 class="text-sm font-bold mb-4 text-purple-400">サイト情報</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('privacy') }}"
                                class="text-gray-400 hover:text-white text-sm transition-colors">プライバシーポリシー</a></li>
                        <li><a href="{{ route('terms') }}"
                                class="text-gray-400 hover:text-white text-sm transition-colors">利用規約</a></li>
                        <li><a href="#contact"
                                class="text-gray-400 hover:text-white text-sm transition-colors">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>

            {{-- コピーライト --}}
            <div class="border-t border-gray-700 pt-8 text-center">
                <p class="text-sm text-gray-400">
                    &copy; 2026 シミュレーションツール集. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    @livewireScripts
    @stack('scripts')
</body>

</html>
