<div class="min-h-screen bg-gradient-to-br from-slate-50 via-pink-50 to-rose-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-pink-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-rose-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = 'アスペクト比計算ツール | 画像・動画の最適な比率を自動算出';
        $description = '動画編集や画像作成に。幅や高さ、比率から不足している数値を瞬時に計算。SNS投稿、バナー、動画解像度の設計をサポートするクリエイター向けツール。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    {{-- 構造化データ --}}
    <x-slot name="structuredData">
        <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'SoftwareApplication',
                    'name' => 'アスペクト比計算ツール',
                    'description' => '動画編集や画像作成に。幅や高さ、比率から不足している数値を瞬時に計算。SNS投稿、バナー、動画解像度の設計をサポートするクリエイター向けツール。',
                    'url' => url()->current(),
                    'applicationCategory' => 'DesignApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        'アスペクト比自動計算',
                        '解像度算出',
                        'プリセット機能',
                        'ビジュアルプレビュー'
                    ]
                ],
                [
                    '@type' => 'BreadcrumbList',
                    'itemListElement' => [
                        [
                            '@type' => 'ListItem',
                            'position' => 1,
                            'name' => 'ホーム',
                            'item' => url('/')
                        ],
                        [
                            '@type' => 'ListItem',
                            'position' => 2,
                            'name' => 'アスペクト比計算'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '4K解像度は具体的に何ピクセルですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '一般的なテレビやモニターの4K（UHD）は、桒3840px × 縦2160pxです。これはフルHD（1920×1080）のちょうど4倍の面積、比率は16:9です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '「シネマスコープ」の比率を教えてください。',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '映画でよく使われる非常に横に長い比率で、2.35:1 や 2.39:1 が一般的です。最近のウルトラワイドモニターでよく使われる 21:9 もこれに近い比率です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '黄金比（1:1.618）はデザインにどう使いますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '例えばブログの「本文エリア」と「サイドバー」の比率を1.618:1にしたり、名刺のサイズを決める際に使用したりします。自然界にも存在する安定感のある美しい比率とされています。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'iPhoneで撮影した写真の比率は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '標準設定では 4:3 ですが、設定により 16:9 やスクエア（1:1）での撮影も可能です。動画の場合は基本的に 16:9（またはスローモーションやシネマティックならその派生）になります。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '端数が出た場合はどう処理すべきですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '1px未満の小数点が出た場合は、切り捨てまたは切り上げて「整数」にするのが基本です。ただし、一部のコーディング（CSS）では正確な動作のために四捨五入が必要な場合もあります。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'アスペクト比がずれるとどうなりますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '画像が不自然に引き伸ばされたり（歪み）、意図しない部分がカットされたり、上下左右に黒い帯（レターボックス/サイドボックス）が表示されたりします。'
                            ]
                        ]
                    ]
                ]
            ]
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>
    </x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-pink-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">アスペクト比計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-pink-600 via-rose-600 to-fuchsia-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-full shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    アスペクト比計算
                </h1>
                <p class="text-lg md:text-xl text-pink-100 text-center md:text-left max-w-2xl">
                    美しい画像・動画には正しい比率を。解像度の設計ミスを防ぐ、クリエイターの必携ツール。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-pink-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-pink-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '動画編集ソフト（Premiere Pro等）のシーケンスサイズ設定',
                        'SNS（インスタ、YouTubeショーツ等）の投稿画像最適化',
                        'Webバナーやヒーロー画像のレイアウト設計とコーディング',
                        '黄金比や白銀比を用いた、視覚的に心地よいデザインの構築',
                        'プレゼン用スライド（PowerPoint）の画面比率の調整',
                        '印刷物のトリミング範囲の計算や、写真の現像サイズ検討'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-pink-50/50 p-4 rounded-xl border border-pink-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-pink-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-pink-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-pink-500 to-rose-600 rounded-full"></span>
                サイズ・比率を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-pink-600">
                        <span class="bg-pink-100 text-pink-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        元となる幅 (Width/px)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="width" placeholder="1920"
                            class="w-full border-2 border-gray-100 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">px</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-pink-600">
                        <span class="bg-pink-100 text-pink-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        ターゲット比率 (W:H)
                    </label>
                    <div class="flex gap-4 items-center">
                        <div class="relative flex-1">
                            <input type="number" wire:model.live="ratioW" placeholder="16"
                                class="w-full border-2 border-gray-100 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none text-center">
                        </div>
                        <span class="text-2xl font-bold text-gray-400">:</span>
                        <div class="relative flex-1">
                            <input type="number" wire:model.live="ratioH" placeholder="9"
                                class="w-full border-2 border-gray-100 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none text-center">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-10 p-5 bg-pink-50/50 rounded-2xl border border-pink-100">
                <label class="text-xs font-bold text-pink-600 mb-3 block uppercase tracking-widest">Quick Presets</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <button wire:click="setRatio(16, 9)" class="px-4 py-2 bg-white hover:bg-pink-600 hover:text-white text-pink-600 font-bold rounded-xl transition-all shadow-sm border border-pink-200">16:9 (HD)</button>
                    <button wire:click="setRatio(4, 3)" class="px-4 py-2 bg-white hover:bg-pink-600 hover:text-white text-pink-600 font-bold rounded-xl transition-all shadow-sm border border-pink-200">4:3 (Legacy)</button>
                    <button wire:click="setRatio(1, 1)" class="px-4 py-2 bg-white hover:bg-pink-600 hover:text-white text-pink-600 font-bold rounded-xl transition-all shadow-sm border border-pink-200">1:1 (Square)</button>
                    <button wire:click="setRatio(9, 16)" class="px-4 py-2 bg-white hover:bg-pink-600 hover:text-white text-pink-600 font-bold rounded-xl transition-all shadow-sm border border-pink-200">9:16 (Shorts)</button>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-pink-50 rounded-3xl p-8 border-2 border-pink-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        算出された最適な高さ
                    </h3>

                    <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-pink-100 mb-2 font-bold tracking-widest uppercase">Calculated Height</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-6xl font-extrabold">{{ number_format($resultHeight) }}</span>
                            <span class="text-xl font-bold opacity-80">px</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm mt-3">
                            <span class="text-sm font-bold">Total Resolution: {{ number_format($width) }} × {{ number_format($resultHeight) }}</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100">
                            <p class="text-xs text-gray-400 mb-1 font-bold">現在のアスペクト比</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $ratioW }}:{{ $ratioH }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100">
                            <p class="text-xs text-gray-400 mb-1 font-bold">1ピクセルあたりの比率</p>
                            <p class="text-2xl font-bold text-pink-600">{{ number_format($width / $resultHeight, 3) }}</p>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-center">
                        <div class="relative bg-white border-2 border-pink-200 rounded-xl overflow-hidden shadow-lg p-2" style="width: 160px; height: {{ (160 * $ratioH / $ratioW) }}px; min-height: 40px;">
                            <div class="w-full h-full bg-pink-100 flex items-center justify-center text-[10px] text-pink-400 font-bold">
                                {{ $ratioW }}:{{ $ratioH }} Preview
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-pink-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">「幅」または「高さ」を入力</p>
                            <p class="text-sm text-gray-600">作りたい画像・動画の基準となる横幅（ピクセル数）を入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">目標とするアスペクト比を設定</p>
                            <p class="text-sm text-gray-600">16:9や1:1など、数値を直接入力するか、プリセットボタンからワンクリックで選択します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">算出された高さを適用</p>
                            <p class="text-sm text-gray-600">自動で計算された新しい高さ（px）を、編集ソフトやデザインツールの設定に反映させます。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-rose-500 rounded-full"></span>
                    よく使われる標準アスペクト比
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">規格名</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">比率 / 解像度</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">フルHD / 4Kテレビ</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">16:9</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">Instagram / 正方形</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">1:1</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">シネマスコープ (映画)</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">2.35:1</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">一眼レフ写真 / ハガキ</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">3:2</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">iPhone / Android 縦型</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">9:16 / 9:21</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-fuchsia-500 rounded-full"></span>
                シーン別・最適なサイズ計算例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                    <p class="font-bold text-pink-600 mb-2">① YouTubeサムネイル</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>幅: 1280px</li>
                        <li>比率: 16:9</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3">
                        高さ: 720 px
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                    <p class="font-bold text-rose-600 mb-2">② Pinterest 縦長ピン</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>幅: 1000px</li>
                        <li>比率: 2:3</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3">
                        高さ: 1500 px
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                    <p class="font-bold text-fuchsia-600 mb-2">③ Twitterヘッダー</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>幅: 1500px</li>
                        <li>比率: 3:1</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3">
                        高さ: 500 px
                    </p>
                </div>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="アスペクト比計算ツールとは？"
            icon="info"
            category-color="pink">

            <p class="text-gray-600 leading-relaxed mb-4">
                アスペクト比計算ツールは、動画編集や画像作成に必要なアスペクト比を自動計算する無料ツールです。
                幅や高さ、比率から不足している数値を瞬時に算出し、SNS投稿、バナー、動画解像度の設計をサポートします。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                16:9「1:1、9:16などの一般的な比率はプリセットでワンクリック選択。黄金比（1:1.618）やシネマスコープ（2.35:1）などの特殊な比率も自由に入力できます。
                ビジュアルプレビュー機能で、設定した比率がどのような形になるかを直感的に確認できます。
            </p>

            <p class="text-gray-600 leading-relaxed">
                「幅は決まっているけど高さがわからない」というシーンで大活躍。
                クリエイターの必携ツールとして、美しい画像・動画作成をサポートします。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="pink">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="16:9（ワイドスクリーン）"
                    category-color="pink">
                    フルHD、4Kテレビ、YouTube、プレゼン資料などで最も一般的な比率。1920×1080（フルHD）、3840×2160（4K）が代表的。
                    横長の形状で、人間の視野に近いため見やすい。動画編集ではデフォルト設定として最適。
                    スマホを横にした状態や、PCモニターの標準比率。
                </x-term-definition>

                <x-term-definition
                    term="9:16（縦長・スマホ用）"
                    category-color="pink">
                    Instagramストーリー、TikTok、YouTubeショーツなどのスマホ縦持ち動画用の比率16:9を田90度回転した形。
                    1080×1920が一般的。スマホ画面をフルに使えるため、視聴者の注目を集めやすい。
                    SNSマーケティングでは必須の比率。横長動画を縦長に変換する際はトリミングが必要。
                </x-term-definition>

                <x-term-definition
                    term="1:1（正方形・スクエア）"
                    category-color="pink">
                    Instagramフィード投稿、プロフィール画像、アイコンなどで使用される正方形。1080×1080が一般的。
                    上下左右の余白がなく、バランスが良い。装飾的なデザインや、商品写真に最適。
                    プリントや名刺、CDジャケットなど、物理的なメディアでも使われる。
                </x-term-definition>

                <x-term-definition
                    term="黄金比（1:1.618）"
                    category-color="pink">
                    自然界に多く存在する「美しい」とされる比率。パルテノン神殿、モナリザなどの芸術作品にも使用。
                    デザインでは、レイアウトの分割（サイドバーとメインコンテンツ）や、名刺・ポスターのサイズ決定に利用。
                    視覚的に安定感と美しさを与えるため、プロデザイナーが好んで使う比率。
                </x-term-definition>

                <x-term-definition
                    term="シネマスコープ（2.35:1）"
                    category-color="pink">
                    映画館で使われる非常に横長の比率2.35:1または2.39:1。沈浸感とドラマチックな演出を生む。
                    ウルトラワイドモニター（21:9）もこれに近い比率。映画風の動画や、シネマティックなVlogに使用。
                    通常の16:9画面で再生すると上下に黒帯（レターボックス）が表示される。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="YouTubeサムネ由16:9でクリック率30%向上"
            category-color="pink">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        適当なサイズで作成
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>サムネイルを1200×800pxで作成（3:2比率）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>YouTubeにアップロードすると上下に黒帯が表示</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>サムネイルが小さく見え、クリック率が低い</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「なぜ黒帯が出るの？」と原因がわからず</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        16:9比率で正確に作成
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>本ツールで幅1280px、16:9から高さ720pxを算出</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>1280×720pxでサムネイルを作成</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>黒帯なしで画面をフル活用、視認性向上</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>クリック率30%向上、視聴回数が増加</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-pink-50 rounded-xl border-l-4 border-pink-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-pink-700">改善のポイント：</strong>
                    YouTubeサムネイルの推奨サイズは1280×720px（16:9）です。違う比率で作成すると、上下または左右に黒帯が表示され、サムネイルが小さく見えてしまいます。
                    本ツールで正確なアスペクト比を計算することで、画面をフル活用したインパクトのあるサムネイルを作成できます。
                    特にSNSや動画プラットフォームでは、各プラットフォームの推奨サイズに合わせることが、エンゲージメント向上の鍵となります。
                    アスペクト比を正しく設定するだけで、プロフェッショナルな仕上がりになります。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => '電気代計算',
                    'url' => '/electricity-cost',
                    'description' => '家電の電気代を算出',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
                ],
                [
                    'name' => '請求書計算',
                    'url' => '/invoice',
                    'description' => '源泉徴収・消費税計算',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
                ],
                [
                    'name' => 'ROI計算',
                    'url' => '/roi-calculator',
                    'description' => '投資対効果を分析',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
                ],
            ];
        @endphp

        <x-related-tools :tools="$relatedTools" category-color="pink" />

        {{-- 広告（楽天ウィジェット 600x200） --}}
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

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 4K解像度は具体的に何ピクセルですか？</h3>
                    <p class="text-gray-600">一般的なテレビやモニターの4K（UHD）は、横3840px × 縦2160pxです。これはフルHD（1920×1080）のちょうど4倍の面積、比率は16:9です。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「シネマスコープ」の比率を教えてください。</h3>
                    <p class="text-gray-600">映画でよく使われる非常に横に長い比率で、2.35:1 や 2.39:1 が一般的です。最近のウルトラワイドモニターでよく使われる 21:9 もこれに近い比率です。</p>
                </div>
                <div class="border-l-4 border-fuchsia-500 pl-6 py-4 bg-gradient-to-r from-fuchsia-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 黄金比（1:1.618）はデザインにどう使いますか？</h3>
                    <p class="text-gray-600">例えばブログの「本文エリア」と「サイドバー」の比率を1.618:1にしたり、名刺のサイズを決める際に使用したりします。自然界にも存在する安定感のある美しい比率とされています。</p>
                </div>
                <div class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. iPhoneで撮影した写真の比率は？</h3>
                    <p class="text-gray-600">標準設定では 4:3 ですが、設定により 16:9 やスクエア（1:1）での撮影も可能です。動画の場合は基本的に 16:9（またはスローモーションやシネマティックならその派生）になります。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 端数が出た場合はどう処理すべきですか？</h3>
                    <p class="text-gray-600">1px未満の小数点が出た場合は、切り捨てまたは切り上げて「整数」にするのが基本です。ただし、一部のコーディング（CSS）では正確な動作のために四捨五入が必要な場合もあります。</p>
                </div>
                <div class="border-l-4 border-fuchsia-500 pl-6 py-4 bg-gradient-to-r from-fuchsia-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. アスペクト比がずれるとどうなりますか？</h3>
                    <p class="text-gray-600">画像が不自然に引き伸ばされたり（歪み）、意図しない部分がカットされたり、上下左右に黒い帯（レターボックス/サイドボックス）が表示されたりします。</p>
                </div>
            </div>
        </div>
    </div>
</div>
