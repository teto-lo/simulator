<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-blue-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '広告予算シミュレーター | Web広告の費用対効果を即座に試算';
        $description = 'Google、Yahoo!、SNS広告の予算編成に。月間予算・クリック単価（CPC）・成約率（CVR）から、獲得件数、売上、ROAS、利益を自動計算。目標CV数からの逆算も可能。';
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
                    'name' => '広告予算シミュレーター',
                    'description' => 'Web広告の予算編成に必要な獲得件数、CPA、ROAS、利益を自動計算。Google広告、Yahoo!広告、SNS広告の費用対効果を即座に試算できる無料ツール。',
                    'url' => url()->current(),
                    'applicationCategory' => 'BusinessApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '月間予算からCV数・CPA・ROASを自動計算',
                        '目標CV数から必要予算を逆算',
                        '広告媒体別のCPC・CVR目安を表示',
                        '利益シミュレーション機能'
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
                            'name' => '広告予算シミュレーター'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'シミュレーションで「赤字」と出ました。どうすればいいですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'まずは「CVR（成約率）」を上げるか、「CPC（クリック単価）」を下げるための施策を考えます。あるいは「商品単価（LTV）」を上げる工夫（セット販売、定期購入への誘導など）も有効です。広告だけで黒字化が難しい場合、フロントエンド商品での集客と割り切る戦略もあります。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '「逆算」で出た必要予算が大きすぎます。減らす方法は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '必要予算を減らすには、CVRの向上が最も効果的です。LPの改善によってCVRが1%から2%に倍増すれば、同じ獲得件数を得るための必要予算は半分で済みます。また、入札戦略を見直し、より関連性の高いキーワードに絞ることで不必要なクリックを減らす（CPCを実効的に下げる）ことも有効です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '代理店手数料は計算に含まれていますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '本シミュレーターには代理店手数料（一般的には媒体費の20%程度）は含まれていません。代理店に依頼する場合は、算出された「必要予算」に1.2を掛けるか、予算入力時に手数料分を差し引いてシミュレーションしてください。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'ROASとROI、どちらを重視すべきですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'ROASは「売上」に対する広告効率を見るため、現場の運用指標に向いています。一方、ROIは利益ベースで考えるため、経営的な判断に向いています。広告予算シミュレーターでは、まずROASで配信効率の健全性をチェックすることをお勧めします。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'CPA（獲得単価）の目安はどう決めればいいですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '一般的には「商品利益（売上 - 原価）」を超えないように設定します。例えば利益5,000円の商品なら、CPA3,000円であれば1件あたり2,000円の利益が残る計算になります。リピート購入がある商材（LTVが高い）なら、初回購入CPAが赤字でも許容される場合があります。'
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
                    <a href="/" class="hover:text-indigo-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">広告予算シミュレーター</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    広告予算シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-blue-100 text-center md:text-left max-w-2xl">
                    予算内で何件獲得できるか、今すぐ試算。データに基づいた論理的な予算策定を。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-blue-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-blue-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '「月10万円で何件獲得できる?」を即座に可視化したいとき',
                        '上司やクライアントへの予算提案で、論理的な根拠が必要なとき',
                        'GoogleリスティングかSNS広告、どちらが効率的か比較したいとき',
                        '目標CV件数から、逆算して「いくらの予算を確保すべきか」知りたいとき',
                        'CPC（クリック単価）が上がった際、利益がどれだけ削られるかの試算',
                        'LP改善でCVRが1%向上した場合の、インパクト額を算出したいとき'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-blue-50/50 p-4 rounded-xl border border-blue-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- モード切替タブ --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-t-3xl shadow-lg overflow-hidden border-b border-gray-100">
            <div class="grid grid-cols-2 gap-0 font-sans">
                <button wire:click="$set('mode', 'plan')"
                    class="relative py-6 px-4 text-center font-bold transition-all duration-300 group
                        {{ $mode === 'plan' ? 'bg-white text-blue-600' : 'bg-gray-50/50 text-gray-400 hover:bg-gray-100/50' }}">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm md:text-base tracking-tight">予算から「成果」を試算</span>
                    </div>
                </button>

                <button wire:click="$set('mode', 'reverse')"
                    class="relative py-6 px-4 text-center font-bold transition-all duration-300 group
                        {{ $mode === 'reverse' ? 'bg-white text-indigo-600' : 'bg-gray-50/50 text-gray-400 hover:bg-gray-100/50' }}">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                        </svg>
                        <span class="text-sm md:text-base tracking-tight">目標から「必要予算」を逆算</span>
                    </div>
                </button>
            </div>
        </div>

        {{-- フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-b-3xl shadow-2xl p-6 md:p-10 mb-12 border border-blue-50">
            @if ($mode === 'plan')
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">月間広告予算</label>
                        <div class="relative">
                            <input type="number" wire:model.live="budget" placeholder="300000"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CPC (クリック単価)</label>
                        <div class="relative">
                            <input type="number" wire:model.live="cpc" placeholder="120"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CVR (成約率)</label>
                        <div class="relative">
                            <input type="number" step="0.1" wire:model.live="cvr" placeholder="2.0"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">%</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">商品単価</label>
                        <div class="relative">
                            <input type="number" wire:model.live="unitPrice" placeholder="15000"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 border-2 border-blue-100 shadow-inner">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        試算結果
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all flex flex-col justify-center">
                            <p class="text-xs text-blue-100 mb-2 font-bold tracking-widest uppercase">Expected Conversions</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-6xl font-extrabold">{{ number_format($conversions, 1) }}</span>
                                <span class="text-xl font-bold opacity-80 pl-2">件</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">CPA (獲得単価)</p>
                            <p class="text-3xl font-bold text-gray-800">¥{{ $conversions > 0 ? number_format($budget / $conversions) : 0 }}</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center border-b-emerald-400 border-b-4">
                            <p class="text-xs text-emerald-500 mb-1 font-bold">ROAS (広告費回収率)</p>
                            <p class="text-3xl font-bold text-emerald-600">{{ $budget > 0 ? number_format(($revenue / $budget) * 100, 0) : 0 }}%</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">クリック数</p>
                            <p class="text-lg font-bold text-gray-700">{{ number_format($clicks) }}回</p>
                        </div>
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">想定売上</p>
                            <p class="text-lg font-bold text-gray-700">¥{{ number_format($revenue) }}</p>
                        </div>
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">営業利益</p>
                            <p class="text-lg font-bold {{ $profit >= 0 ? 'text-green-600' : 'text-red-500' }}">¥{{ number_format($profit) }}</p>
                        </div>
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">リーチ損益分岐点</p>
                            <p class="text-lg font-bold text-gray-700">{{ $unitPrice > 0 ? number_format($budget / ($unitPrice * ($cvr / 100))) : 0 }}回</p>
                        </div>
                    </div>
                </div>
            @else
                {{-- 逆算モード --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">目標CV件数</label>
                        <div class="relative">
                            <input type="number" wire:model.live="targetConversions" placeholder="50"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">件</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CVR (%)</label>
                        <div class="relative">
                            <input type="number" step="0.1" wire:model.live="reverseCvr" placeholder="2.0"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">%</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CPC (円)</label>
                        <div class="relative">
                            <input type="number" wire:model.live="reverseCpc" placeholder="100"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">商品単価</label>
                        <div class="relative">
                            <input type="number" wire:model.live="reverseUnitPrice" placeholder="10000"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-50 to-indigo-50 rounded-3xl p-8 border-2 border-indigo-100 shadow-inner">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                         <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        逆算結果: 必要予算
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all flex flex-col justify-center">
                            <p class="text-xs text-indigo-100 mb-2 font-bold tracking-widest uppercase">Required Monthly Budget</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-lg opacity-80 font-bold">¥</span>
                                <span class="text-6xl font-extrabold">{{ number_format($requiredBudget) }}</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">必要クリック数</p>
                            <p class="text-3xl font-bold text-gray-800">{{ number_format($requiredClicks) }}回</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">見込み総売上</p>
                            <p class="text-3xl font-bold text-blue-600">¥{{ number_format($expectedRevenue) }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-blue-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">配信モードを選択</p>
                            <p class="text-sm text-gray-600">「手元の予算でどれくらい獲得できるか」を知りたい場合は通常モード、「獲得したい件数のためにいくら必要か」を知りたい場合は逆算モードを選びます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">業界平均値を参考に数値を入力</p>
                            <p class="text-sm text-gray-600">CPC（クリック単価）やCVR（成約率）は商材によります。不明な場合は、右側の「広告指標の目安表」を参考に仮数値を入力してください。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">採算性をチェック</p>
                            <p class="text-sm text-gray-600">算出されたCPA（獲得単価）やROASが、自社の許容範囲内にあるか確認します。赤字になる場合は、単価アップやCVR改善の施策を検討しましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-indigo-500 rounded-full"></span>
                    主要プラットフォームの指標目安
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-3 px-2 text-left font-bold text-gray-700">媒体</th>
                                <th class="py-3 px-2 text-left font-bold text-gray-700">特徴</th>
                                <th class="py-3 px-2 text-right font-bold text-gray-700">想定CPC</th>
                                <th class="py-3 px-2 text-right font-bold text-gray-700">想定CVR</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">Google検索</td>
                                <td class="py-3 px-2 text-left text-gray-500">成約に近いユーザー</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥100~¥500</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">2.0~5.0%</td>
                            </tr>
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">Meta (Instagram)</td>
                                <td class="py-3 px-2 text-left text-gray-500">ビジュアル重視</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥30~¥150</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">0.5~2.0%</td>
                            </tr>
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">YouTube</td>
                                <td class="py-3 px-2 text-left text-gray-500">認知・動画広告</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥10~¥50</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">0.1~0.5%</td>
                            </tr>
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">Yahoo!/GDN</td>
                                <td class="py-3 px-2 text-left text-gray-500">幅広い認知獲得</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥20~¥100</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">0.3~1.0%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">※上記は一般的な業界平均値です。競合状況、クリエイティブ、飛び先(LP)の質によって大きく変動します。</p>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section 
            title="広告予算シミュレーターとは？" 
            icon="info"
            category-color="blue">
            
            <p class="text-gray-600 leading-relaxed mb-4">
                広告予算シミュレーターは、デジタルマーケティングにおける最も重要な意思決定「予算配分」を、
                データに基づいて科学的に計算するための無料ツールです。月間予算、CPC（クリック単価）、
                CVR（成約率）の3つの指標を入力するだけで、獲得件数、CPA、ROAS、利益を瞬時に試算できます。
            </p>
            
            <h3 class="text-xl font-bold text-gray-800 mb-3 mt-6">なぜ広告予算の事前試算が重要なのか</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Web広告運用において「予算をいくら使えば、何件獲得できるか」を事前に把握することは、
                成功の鍵を握ります。根拠のない予算設定は、広告費の無駄遣いや機会損失につながり、
                最悪の場合、事業の収益性を大きく損なう可能性があります。
            </p>
            
            <div class="grid md:grid-cols-2 gap-6 my-6">
                <x-info-card title="予算不足のリスク" category-color="blue">
                    <p>十分なクリック数を獲得できず、統計的に有意なデータが集まりません。
                    結果として、広告の最適化が進まず、CPAが高止まりする悪循環に陥ります。</p>
                </x-info-card>
                
                <x-info-card title="予算過多のリスク" category-color="blue">
                    <p>獲得効率の低いキーワードにまで配信が広がり、無駄なクリックが増加。
                    CPAが悪化し、広告費対効果（ROAS）が低下します。</p>
                </x-info-card>
            </div>
            
            <p class="text-gray-600 leading-relaxed">
                本ツールを使用することで、これらのリスクを回避し、最適な予算配分を実現できます。
            </p>
            
        </x-content-section>

        {{-- 用語解説セクション --}}
        <x-content-section 
            title="広告運用の重要指標を理解する" 
            icon="book"
            category-color="blue">
            
            <p class="text-gray-600 mb-6">
                広告運用では、以下の指標を正しく理解し、適切にコントロールすることが重要です。
            </p>
            
            <div class="space-y-4">
                <x-term-definition term="CPC（クリック単価 / Cost Per Click）" category-color="blue">
                    <p>広告が1回クリックされるごとに発生する費用。検索広告では、入札価格と品質スコアによって決定されます。
                    競合が多いキーワードほどCPCは高くなる傾向にあります。業界平均は50円〜500円程度ですが、
                    BtoB商材や高単価商品では1,000円を超えることもあります。</p>
                </x-term-definition>
                
                <x-term-definition term="CVR（コンバージョン率 / Conversion Rate）" category-color="blue">
                    <p>広告をクリックしたユーザーのうち、実際に成約（購入、問い合わせ、資料請求など）に至った割合。
                    CVR = CV数 ÷ クリック数 × 100 で計算されます。LPの質、オファーの魅力度、ターゲティングの精度に
                    大きく影響されます。一般的には1%〜5%が目安ですが、商材によって大きく異なります。</p>
                </x-term-definition>
                
                <x-term-definition term="CPA（獲得単価 / Cost Per Acquisition）" category-color="blue">
                    <p>1件のコンバージョンを獲得するためにかかった広告費用。CPA = 広告費 ÷ CV数 で計算されます。
                    CPAが商品の利益（売上 - 原価）を下回れば、広告運用は黒字となります。
                    許容CPAを事前に設定し、それを超えないように運用することが重要です。</p>
                </x-term-definition>
                
                <x-term-definition term="ROAS（広告費回収率 / Return On Ad Spend）" category-color="blue">
                    <p>広告費に対する売上の割合。ROAS = 売上 ÷ 広告費 × 100 で計算されます。
                    例えばROAS 300%なら、10万円の広告費で30万円の売上が得られたことを意味します。
                    一般的には、ROAS 200%以上が健全な運用の目安とされています。</p>
                </x-term-definition>
                
                <x-term-definition term="ROI（投資対効果 / Return On Investment）" category-color="blue">
                    <p>広告費に対する利益の割合。ROI = (売上 - 広告費 - 原価) ÷ 広告費 × 100 で計算されます。
                    ROASが売上ベースであるのに対し、ROIは利益ベースで評価するため、
                    経営判断にはROIを重視すべきです。</p>
                </x-term-definition>
                
                <x-term-definition term="LTV（顧客生涯価値 / Life Time Value）" category-color="blue">
                    <p>1人の顧客が生涯にわたってもたらす利益の総額。サブスクリプションやリピート購入が見込める商材では、
                    初回購入のCPAが赤字でも、LTVで回収できれば問題ありません。例えば月額1,000円のサービスで平均継続期間が12ヶ月なら、
                    LTVは12,000円となり、初回獲得CPAが10,000円でも長期的には黒字化します。</p>
                </x-term-definition>
                
                <x-term-definition term="インプレッション（表示回数）" category-color="blue">
                    <p>広告が画面に表示された回数。クリック数 ÷ インプレッション数 = CTR（クリック率）となります。
                    インプレッション数が少ない場合、入札価格が低すぎるか、品質スコアが低い可能性があります。
                    逆にインプレッションは多いのにクリックが少ない場合は、広告文やクリエイティブの改善が必要です。</p>
                </x-term-definition>
                
                <x-term-definition term="品質スコア（Quality Score）" category-color="blue">
                    <p>Google広告が広告の品質を1〜10の数値で評価する指標。広告の関連性、LPの品質、予想CTRの3要素で決まります。
                    品質スコアが高いほど、同じ入札価格でも上位に表示されやすくなり、実質的なCPCが下がります。
                    品質スコア7以上を目指すことで、広告費を抑えながら効果的な運用が可能になります。</p>
                </x-term-definition>
            </div>
            
        </x-content-section>

        {{-- ケーススタディセクション --}}
        <x-content-section 
            title="実際の活用事例" 
            icon="chart"
            category-color="blue">
            
            <p class="text-gray-600 mb-6">
                実際に広告予算シミュレーターを活用して成果を上げた事例をご紹介します。
            </p>
            
            <x-case-study 
                title="ケース1: ECサイトの広告運用改善"
                category-color="blue">
                
                <p class="text-gray-600 mb-4">
                    健康食品を販売するECサイトが、Google検索広告の予算配分を見直した事例です。
                </p>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white/50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-800 mb-3">Before（改善前）</h4>
                        <dl class="space-y-2 text-sm">
                            <div class="flex justify-between"><dt>月間予算:</dt><dd class="font-bold">30万円</dd></div>
                            <div class="flex justify-between"><dt>CPC:</dt><dd class="font-bold">200円</dd></div>
                            <div class="flex justify-between"><dt>CVR:</dt><dd class="font-bold">1.5%</dd></div>
                            <div class="flex justify-between border-t pt-2"><dt>CV数:</dt><dd class="font-bold text-lg">22件</dd></div>
                            <div class="flex justify-between"><dt>CPA:</dt><dd class="font-bold text-red-600">13,636円</dd></div>
                        </dl>
                    </div>
                    
                    <div class="bg-white/50 p-6 rounded-xl border-2 border-emerald-200">
                        <h4 class="font-bold text-emerald-600 mb-3">After（改善後）</h4>
                        <dl class="space-y-2 text-sm">
                            <div class="flex justify-between"><dt>月間予算:</dt><dd class="font-bold">30万円</dd></div>
                            <div class="flex justify-between"><dt>CPC:</dt><dd class="font-bold">150円 <span class="text-xs text-emerald-600">(↓25%)</span></dd></div>
                            <div class="flex justify-between"><dt>CVR:</dt><dd class="font-bold">2.5% <span class="text-xs text-emerald-600">(↑67%)</span></dd></div>
                            <div class="flex justify-between border-t pt-2"><dt>CV数:</dt><dd class="font-bold text-lg text-emerald-600">50件</dd></div>
                            <div class="flex justify-between"><dt>CPA:</dt><dd class="font-bold text-emerald-600">6,000円</dd></div>
                        </dl>
                    </div>
                </div>
                
                <div class="mt-6 p-4 bg-blue-50 rounded-xl border-l-4 border-blue-500">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        <strong class="text-blue-700">改善のポイント:</strong>
                        LPの改善によってCVRを1.5%から2.5%に向上させ、同時に不要なキーワードを除外してCPCを削減。
                        同じ予算で獲得件数を2.3倍に増やすことに成功しました。
                        CPAも13,636円から6,000円へと半分以下に改善し、広告運用の収益性が大幅に向上しています。
                    </p>
                </div>
            </x-case-study>
            
            <x-case-study 
                title="ケース2: BtoB SaaS企業の予算最適化"
                category-color="blue">
                
                <p class="text-gray-600 mb-4">
                    月額5万円のSaaSサービスを提供する企業が、逆算モードを活用して必要予算を算出した事例です。
                </p>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white/50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-800 mb-3">Before（予算不明確）</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 mt-1">✗</span>
                                <span>「とりあえず月50万円」という根拠のない予算設定</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 mt-1">✗</span>
                                <span>目標CV数が不明確で、成果の良し悪しが判断できない</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 mt-1">✗</span>
                                <span>予算消化が目的化し、効率が悪化</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white/50 p-6 rounded-xl border-2 border-emerald-200">
                        <h4 class="font-bold text-emerald-600 mb-3">After（逆算で明確化）</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-500 mt-1">✓</span>
                                <span>目標CV数20件から逆算して必要予算120万円を算出</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-500 mt-1">✓</span>
                                <span>CPC 500円、CVR 3%という現実的な数値で試算</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-500 mt-1">✓</span>
                                <span>経営陣に根拠を示して予算承認を獲得</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="mt-6 p-4 bg-blue-50 rounded-xl border-l-4 border-blue-500">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        <strong class="text-blue-700">改善のポイント:</strong>
                        逆算モードで「目標20件獲得に必要な予算は120万円」と明確化。
                        経営陣に対して、LTV（顧客生涯価値）60万円 × 20件 = 1,200万円の売上見込みを提示し、
                        広告費120万円の投資対効果を論理的に説明。予算承認をスムーズに獲得できました。
                    </p>
                </div>
            </x-case-study>
            
            <x-case-study 
                title="ケース3: 地方の工務店の広告費削減"
                category-color="blue">
                
                <p class="text-gray-600 mb-4">
                    過剰な広告費を使っていた地方工務店が、適正予算を見極めて無駄を削減した事例です。
                </p>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white/50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-800 mb-3">Before（予算過多）</h4>
                        <dl class="space-y-2 text-sm">
                            <div class="flex justify-between"><dt>月間予算:</dt><dd class="font-bold">100万円</dd></div>
                            <div class="flex justify-between"><dt>CPC:</dt><dd class="font-bold">300円</dd></div>
                            <div class="flex justify-between"><dt>CVR:</dt><dd class="font-bold">5%</dd></div>
                            <div class="flex justify-between border-t pt-2"><dt>CV数:</dt><dd class="font-bold text-lg">166件</dd></div>
                            <div class="flex justify-between"><dt>問題:</dt><dd class="font-bold text-red-600">対応しきれず機会損失</dd></div>
                        </dl>
                    </div>
                    
                    <div class="bg-white/50 p-6 rounded-xl border-2 border-emerald-200">
                        <h4 class="font-bold text-emerald-600 mb-3">After（適正化）</h4>
                        <dl class="space-y-2 text-sm">
                            <div class="flex justify-between"><dt>月間予算:</dt><dd class="font-bold">40万円 <span class="text-xs text-emerald-600">(↓60%)</span></dd></div>
                            <div class="flex justify-between"><dt>CPC:</dt><dd class="font-bold">300円</dd></div>
                            <div class="flex justify-between"><dt>CVR:</dt><dd class="font-bold">5%</dd></div>
                            <div class="flex justify-between border-t pt-2"><dt>CV数:</dt><dd class="font-bold text-lg text-emerald-600">66件</dd></div>
                            <div class="flex justify-between"><dt>効果:</dt><dd class="font-bold text-emerald-600">対応可能な範囲に調整</dd></div>
                        </dl>
                    </div>
                </div>
                
                <div class="mt-6 p-4 bg-blue-50 rounded-xl border-l-4 border-blue-500">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        <strong class="text-blue-700">改善のポイント:</strong>
                        月間対応可能な見込み客数を60件と設定し、逆算して必要予算を40万円に削減。
                        余剰の60万円は他のマーケティング施策（SEO対策、SNS運用）に振り分け、
                        総合的なマーケティング効率が向上しました。「多ければ良い」ではなく「適正な量」を見極めることが重要です。
                    </p>
                </div>
            </x-case-study>
            
        </x-content-section>

        {{-- 関連ツールセクション --}}
        @php
            $relatedTools = [
                [
                    'name' => 'ROI計算ツール',
                    'url' => '/roi-calculator',
                    'description' => '投資対効果を計算して、広告施策の収益性を評価',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => '損益分岐点計算',
                    'url' => '/break-even',
                    'description' => '固定費・変動費から損益分岐点を算出',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
                ],
                [
                    'name' => '複利計算ツール',
                    'url' => '/compound-interest',
                    'description' => '広告で得た利益を再投資した場合の成長を予測',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>',
                ],
            ];
        @endphp

        <x-related-tools :tools="$relatedTools" category-color="blue" />

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
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. シミュレーションで「赤字」と出ました。どうすればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">まずは「CVR（成約率）」を上げるか、「CPC（クリック単価）」を下げるための施策を考えます。あるいは「商品単価（LTV）」を上げる工夫（セット販売、定期購入への誘導など）も有効です。広告だけで黒字化が難しい場合、フロントエンド商品での集客と割り切る戦略もあります。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「逆算」で出た必要予算が大きすぎます。減らす方法は？</h3>
                    <p class="text-gray-600 leading-relaxed">必要予算を減らすには、CVRの向上が最も効果的です。LPの改善によってCVRが1%から2%に倍増すれば、同じ獲得件数を得るための必要予算は半分で済みます。また、入札戦略を見直し、より関連性の高いキーワードに絞ることで不必要なクリックを減らす（CPCを実効的に下げる）ことも有効です。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 代理店手数料は計算に含まれていますか？</h3>
                    <p class="text-gray-600 leading-relaxed">本シミュレーターには代理店手数料（一般的には媒体費の20%程度）は含まれていません。代理店に依頼する場合は、算出された「必要予算」に1.2を掛けるか、予算入力時に手数料分を差し引いてシミュレーションしてください。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ROASとROI、どちらを重視すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">ROASは「売上」に対する広告効率を見るため、現場の運用指標に向いています。一方、ROIは利益ベースで考えるため、経営的な判断に向いています。広告予算シミュレーターでは、まずROASで配信効率の健全性をチェックすることをお勧めします。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. CPCを高めに設定するメリットはありますか？</h3>
                    <p class="text-gray-600 leading-relaxed">上限クリック単価（CPC）を高めることで、検索結果のより上位に表示されやすくなり、クリック数（リーチ）を短期間で稼ぐことができます。コンバージョンが十分取れている場合は、CPCを上げてボリュームを追求するフェーズになります。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. CPA（獲得単価）の目安はどう決めればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的には「商品利益（売上 - 原価）」を超えないように設定します。例えば利益5,000円の商品なら、CPA3,000円であれば1件あたり2,000円の利益が残る計算になります。リピート購入がある商材（LTVが高い）なら、初回購入CPAが赤字でも許容される場合があります。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 広告予算は月初に一括投入すべきですか、それとも分散すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">基本的には「均等配分」が推奨されます。Google広告やMeta広告の機械学習は、安定したデータ蓄積によって最適化されるため、急激な予算変動は学習を妨げます。ただし、セール期間やイベント時は一時的に予算を増やす「メリハリ配分」も有効です。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. CVRを改善するには何から手をつけるべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">最も効果が高いのは「LPのファーストビュー改善」です。ユーザーの約70%は3秒以内に離脱するため、ファーストビューで価値を伝えられないとCVRは上がりません。次に「CTA（行動喚起ボタン）の最適化」、「フォーム項目の削減」が効果的です。ABテストを繰り返して改善しましょう。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 競合他社の広告予算はどうやって推測できますか？</h3>
                    <p class="text-gray-600 leading-relaxed">完全に正確な数値は把握できませんが、「SimilarWeb」や「SEMrush」などのツールで競合のトラフィック推定値を確認できます。また、Google広告の「オークション分析」機能を使えば、同じキーワードで競合している広告主の表示頻度やランクを確認でき、相対的な予算規模を推測できます。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 広告費が少ない場合、どの媒体から始めるべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">予算が月10万円以下の場合、「Google検索広告」から始めることを推奨します。検索広告は顕在層（今すぐ欲しい人）にリーチできるため、少額でもCVが出やすいです。予算が増えてきたら、Meta広告（Facebook/Instagram）で潜在層にもアプローチする戦略が効果的です。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. シミュレーション結果と実際の成果が大きく異なる場合、何が原因ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">最も多い原因は「CVRの見積もりミス」です。過去データがない場合、業界平均値を使いますが、実際のLPの質やオファーの魅力度によって大きく変動します。また、「季節変動」「競合の参入」「広告疲れ（クリエイティブの劣化）」なども影響します。定期的に実績データでシミュレーションを更新しましょう。</p>
                </div>
            </div>
        </div>
    </div>
</div>
