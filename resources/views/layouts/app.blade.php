<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- 基本SEO --}}
    <title>広告費シミュレーター【無料】| CPC・CVRから利益を即計算</title>
    <meta name="description" content="広告費・CPC・CVR・成約単価を入力するだけで、売上と利益を瞬時に計算。Google広告、SNS広告の収益シミュレーションに最適な無料ツール。黒字・赤字判定も一目でわかります。">
    <meta name="keywords" content="広告費シミュレーター,広告費計算,CPC計算,CVR計算,広告収益,ROI計算,Google広告,Facebook広告,Instagram広告,無料ツール">
    
    {{-- OGP (SNSシェア対策) --}}
    <meta property="og:title" content="広告費シミュレーター【無料】| 利益を即計算">
    <meta property="og:description" content="広告費から売上・利益を瞬時に計算できる無料ツール。Google広告やSNS広告の収益予測に最適。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">
    <meta property="og:site_name" content="広告費シミュレーター">
    
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="広告費シミュレーター【無料】">
    <meta name="twitter:description" content="広告費から売上・利益を瞬時に計算">
    <meta name="twitter:image" content="{{ asset('images/og-image.png') }}">
    
    {{-- Canonical URL (重複コンテンツ対策) --}}
    <link rel="canonical" href="{{ url()->current() }}">
    
{{-- 構造化データ (リッチリザルト対策) --}}
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => '広告費シミュレーター',
    'description' => '広告費・CPC・CVRから売上と利益を計算する無料ツール',
    'url' => url()->current(),
    'applicationCategory' => 'BusinessApplication',
    'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'JPY',
    ],
    'featureList' => [
        '広告費計算',
        'CPC計算',
        'CVR計算',
        '利益計算',
        'ROI計算',
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
    
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AdSense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXXXXXXXXXXX"
     crossorigin="anonymous"></script>
     
    {{-- Google Analytics (推奨) --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX');
    </script>
</head>
<body class="bg-gray-100 text-gray-900">

{{-- ヘッダー (ブランディング強化) --}}
<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4 py-4">
        <h1 class="text-xl font-bold text-gray-800">
            <a href="/" class="hover:text-indigo-600 transition-colors">
                📊 シミュレーター
            </a>
        </h1>
        <!-- <p class="text-xs text-gray-500 mt-1">可視化する無料ツール</p> -->
    </div>
</header>

<main class="max-w-6xl mx-auto p-4">

    {{-- AdSense ディスプレイ広告(上部) --}}
    <div class="my-6 flex justify-center">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
             data-ad-slot="1234567890"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    {{ $slot }}

    <!-- {{-- 関連コンテンツセクション (回遊率向上) --}}
    <section class="mt-12 bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-bold mb-4 text-gray-800">💡 関連する無料ツール</h2>
        <div class="grid md:grid-cols-3 gap-4">
            <a href="/ctr-calculator" class="p-4 border rounded hover:border-indigo-500 hover:shadow-md transition">
                <h3 class="font-bold text-indigo-600">CTR計算機</h3>
                <p class="text-sm text-gray-600 mt-1">クリック率を瞬時に計算</p>
            </a>
            <a href="/roas-calculator" class="p-4 border rounded hover:border-indigo-500 hover:shadow-md transition">
                <h3 class="font-bold text-indigo-600">ROAS計算機</h3>
                <p class="text-sm text-gray-600 mt-1">広告の費用対効果を算出</p>
            </a>
            <a href="/cpa-calculator" class="p-4 border rounded hover:border-indigo-500 hover:shadow-md transition">
                <h3 class="font-bold text-indigo-600">CPA計算機</h3>
                <p class="text-sm text-gray-600 mt-1">顧客獲得単価を分析</p>
            </a>
        </div>
    </section> -->



    {{-- AdSense インフィード広告(下部) --}}
    <div class="my-8 flex justify-center">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-format="fluid"
             data-ad-layout-key="-fb+5w+4e-db+86"
             data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
             data-ad-slot="9876543210"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

</main>

{{-- フッター (内部リンク強化) --}}
<footer class="bg-gray-800 text-white mt-16 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- <div class="grid md:grid-cols-3 gap-8 mb-6">
            <div>
                <h3 class="font-bold mb-3">シミュレーター</h3>
                <p class="text-sm text-gray-300">広告運用の収益性を簡単に計算できる無料ツールです。</p>
            </div>
            <div>
                <h3 class="font-bold mb-3">関連ツール</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/ctr-calculator" class="text-gray-300 hover:text-white">CTR計算機</a></li>
                    <li><a href="/roas-calculator" class="text-gray-300 hover:text-white">ROAS計算機</a></li>
                    <li><a href="/cpa-calculator" class="text-gray-300 hover:text-white">CPA計算機</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-3">お問い合わせ</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/contact" class="text-gray-300 hover:text-white">お問い合わせ</a></li>
                    <li><a href="/privacy" class="text-gray-300 hover:text-white">プライバシーポリシー</a></li>
                    <li><a href="/terms" class="text-gray-300 hover:text-white">利用規約</a></li>
                </ul>
            </div>
        </div> -->
        <div class="flex justify-center gap-4">
        <a href="/privacy" class="text-gray-300 hover:text-white">プライバシーポリシー</a>
        <a href="/terms" class="text-gray-300 hover:text-white">利用規約</a>
        </div>
        
        <div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
            <p>&copy; 2026 広告費シミュレーター. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>