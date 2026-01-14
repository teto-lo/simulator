<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- 動的SEO (各ページから渡せる) --}}
    <title>{{ $title ?? 'シミュレーターツール集【無料】' }}</title>
    <meta name="description" content="{{ $description ?? '広告費・ROI・CVRなど各種ビジネス指標を簡単計算できる無料ツール集' }}">
    <meta name="keywords" content="{{ $keywords ?? 'シミュレーター,計算ツール,広告費,ROI,CVR,無料' }}">

    {{-- OGP --}}
    <meta property="og:title" content="{{ $ogTitle ?? $title ?? 'シミュレーターツール集' }}">
    <meta property="og:description" content="{{ $ogDescription ?? $description ?? 'ビジネス指標を簡単計算' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta property="og:site_name" content="シミュレーターツール集">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle ?? $title ?? 'シミュレーターツール集' }}">
    <meta name="twitter:description" content="{{ $ogDescription ?? $description ?? 'ビジネス指標を簡単計算' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">

    {{-- 構造化データ (各ページから上書き可能) --}}
    @if(isset($structuredData))
        {!! $structuredData !!}
    @else
        <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebApplication',
            'name' => 'シミュレーターツール集',
            'description' => 'ビジネス指標を簡単に計算できる無料ツール',
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
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>

    {{-- 追加のheadコンテンツ --}}
    @stack('head')
</head>

<body class="bg-gray-100 text-gray-900">

    {{-- ヘッダー --}}
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <h1 class="text-xl font-bold text-gray-800">
                <a href="/" class="hover:text-indigo-600 transition-colors">
                    📊 シミュレーターツール集
                </a>
            </h1>
        </div>
    </header>

    <main class="max-w-6xl mx-auto p-4">

        {{-- 上部広告 --}}
        @if(!isset($hideTopAd) || !$hideTopAd)
        <div class="my-6 flex justify-center">
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
                data-ad-slot="1234567890" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        @endif

        {{-- メインコンテンツ --}}
        {{ $slot }}

        {{-- 下部広告 --}}
        @if(!isset($hideBottomAd) || !$hideBottomAd)
        <div class="my-8 flex justify-center">
            <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fb+5w+4e-db+86"
                data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="9876543210"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        @endif

    </main>

    {{-- フッター --}}
    <footer class="bg-gray-800 text-white mt-16 py-8">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-center gap-4 mb-4">
                <a href="/" class="text-gray-300 hover:text-white">ホーム</a>
                <a href="{{ route('privacy') }}" class="text-gray-300 hover:text-white">プライバシーポリシー</a>
                <a href="{{ route('terms') }}" class="text-gray-300 hover:text-white">利用規約</a>
            </div>

            <div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
                <p>&copy; 2026 シミュレーターツール集. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @livewireScripts
    @stack('scripts')
</body>

</html>