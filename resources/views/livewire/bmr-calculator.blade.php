<div class="min-h-screen bg-gradient-to-br from-slate-50 via-green-50 to-emerald-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-green-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '基礎代謝・消費カロリー計算ツール | 理想の体型への最短ルート';
        $description = 'あなたの年齢、性別、身長、体重から「基礎代謝量（BMR）」と「1日の総消費カロリー（TDEE）」を精密に算出。ダイエット、増量、現状維持に必要な摂取カロリー目安を即座に把握。';
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
                    'name' => '基礎代謝・消費カロリー計算ツール',
                    'description' => '年齢、性別、身長、体重から「基礎代謝量（BMR）」と「1日の総消費カロリー（TDEE）」を精密に算出。ダイエット、増量、現状維持に必要な摂取カロリー目安を即座に把握。',
                    'url' => url()->current(),
                    'applicationCategory' => 'HealthApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '基礎代謝量（BMR）計算',
                        '総消費カロリー（TDEE）算出',
                        '目的別摂取カロリー提示',
                        '活動レベル別試算'
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
                            'name' => '基礎代謝・消費カロリー計算'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '「基礎代謝（BMR）」とは何ですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '基礎代謝とは、24時間じっと横になっていても、生命を維持するために自動的に消費されるエネルギー量のことです。心臓を動かす、体温を保つ、呼吸をするといった活動に使われ、1日の総消費エネルギーの約60〜70％を占めています。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '計算で出たカロリーを食べていれば、必ず痩せますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '基本的には「消費カロリー ＞ 摂取カロリー」の状態（アンダーカロリー）になれば体重は落ちます。ただし、計算式は統計的な予測値であるため、個人の筋肉量やホルモンバランスによって誤差が生じます。まずは試算値を2週間試し、体重の増減を見て微調整するのが王道です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '基礎代謝量（BMR）以下しか食べていないのに痩せないのはなぜ？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '極端な低カロリー（BMR未満）を続けると、体が飢餓状態と判断し、エネルギー消費を極限まで抑える「省エネモード」に入ることがあります。また、代謝機能そのものが低下し、リバウンドしやすい体になってしまいます。最低でも「基礎代謝量」分は摂取し、運動で消費を稼ぐのが健康的です。'
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
                    <a href="/" class="hover:text-green-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">基礎代謝・消費カロリー計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-green-600 via-emerald-600 to-teal-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    基礎代謝・消費カロリー計算
                </h1>
                <p class="text-lg md:text-xl text-green-100 text-center md:text-left max-w-2xl">
                    身体を知ることは、変化への第一歩。科学的な指標で「理想の自分」への計画を。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-green-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-green-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        'ダイエットを始める際、1日に「何kcalまで食べて良いか」の基準を知りたい',
                        '筋トレの効果を最大化するために、増量に必要な摂取カロリーを算出したい',
                        '年齢とともに痩せにくくなったと感じ、最新の基礎代謝量を確認したい',
                        'デスクワークから立ち仕事へ転職した際、必要な食事量の変化を把握したい',
                        '「食べていないのに太る」原因を、消費カロリーの視点から客観的に分析',
                        'リバウンドを防ぐために、筋肉量を維持できる「維持期」のカロリーを計画'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-green-50/50 p-4 rounded-xl border border-green-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-green-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-green-500 to-emerald-600 rounded-full"></span>
                身体データを入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">性別</label>
                    <div class="flex gap-4">
                        <label class="flex-1 flex items-center justify-center cursor-pointer group/sex">
                            <input type="radio" wire:model.live="gender" value="male" class="hidden">
                            <span class="w-full py-3 rounded-2xl border-2 transition-all font-bold text-center {{ $gender === 'male' ? 'bg-green-100 border-green-500 text-green-700 shadow-md' : 'bg-white border-gray-100 text-gray-400' }}">
                                男性
                            </span>
                        </label>
                        <label class="flex-1 flex items-center justify-center cursor-pointer group/sex">
                            <input type="radio" wire:model.live="gender" value="female" class="hidden">
                            <span class="w-full py-3 rounded-2xl border-2 transition-all font-bold text-center {{ $gender === 'female' ? 'bg-green-100 border-green-500 text-green-700 shadow-md' : 'bg-white border-gray-100 text-gray-400' }}">
                                女性
                            </span>
                        </label>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">年齢</label>
                    <div class="relative">
                        <input type="number" wire:model.live="age" placeholder="30"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">身長</label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="height" placeholder="170"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">cm</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">体重</label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="weight" placeholder="65"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">kg</span>
                    </div>
                </div>
            </div>

            <div class="mb-10">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 block text-center">日常生活の活動レベル</label>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
                    @foreach([
                        ['id' => 'sedentary', 'label' => 'ほぼ運動なし', 'sub' => 'デスクワーク中心'],
                        ['id' => 'light', 'label' => '軽い活動', 'sub' => '週1〜3回の運動'],
                        ['id' => 'moderate', 'label' => '中程度の活動', 'sub' => '週3〜5回の運動'],
                        ['id' => 'active', 'label' => '活発な活動', 'sub' => '週6〜7回の激しい運動'],
                        ['id' => 'very_active', 'label' => '非常に活発', 'sub' => '1日2回の激しい運動']
                    ] as $level)
                        <label class="cursor-pointer group">
                            <input type="radio" wire:model.live="activityLevel" value="{{ $level['id'] }}" class="hidden">
                            <div class="h-full px-3 py-4 rounded-2xl border-2 transition-all text-center flex flex-col justify-center {{ $activityLevel === $level['id'] ? 'bg-green-50 border-green-500 shadow-md ring-4 ring-green-50' : 'bg-white border-gray-50 text-gray-400 opacity-60' }}">
                                <p class="text-sm font-bold {{ $activityLevel === $level['id'] ? 'text-green-800' : '' }}">{{ $level['label'] }}</p>
                                <p class="text-[10px] mt-1">{{ $level['sub'] }}</p>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-green-50 rounded-3xl p-8 border-2 border-green-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        代謝・消費カロリー試算結果
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                            <p class="text-xs text-green-100 mb-2 font-bold tracking-widest uppercase">Basal Metabolic Rate (BMR)</p>
                            <div class="flex items-baseline justify-center gap-1 mb-2">
                                <span class="text-6xl font-extrabold">{{ number_format($bmr) }}</span>
                                <span class="text-xl font-bold opacity-80 pl-2">kcal</span>
                            </div>
                            <div class="inline-flex items-center bg-white/20 px-4 py-1 rounded-full backdrop-blur-sm mt-2">
                                <span class="text-xs font-bold">1日の生命維持に必要な最低カロリー</span>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-indigo-500 to-blue-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                            <p class="text-xs text-indigo-100 mb-2 font-bold tracking-widest uppercase">Total Daily Energy Expenditure</p>
                            <div class="flex items-baseline justify-center gap-1 mb-2">
                                <span class="text-6xl font-extrabold">{{ number_format($tdee) }}</span>
                                <span class="text-xl font-bold opacity-80 pl-2">kcal</span>
                            </div>
                            <div class="inline-flex items-center bg-white/20 px-4 py-1 rounded-full backdrop-blur-sm mt-2">
                                <span class="text-xs font-bold">活動量を含めた「太りも痩せもしない」量</span>
                            </div>
                        </div>
                    </div>

                    {{-- 目的別カロリー目安 --}}
                    <div class="bg-white rounded-3xl p-8 border border-green-100 shadow-md">
                        <h4 class="font-bold text-gray-800 mb-6 flex items-center gap-2">
                             <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path></svg>
                             目的別：1日の推奨摂取カロリー目安
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="p-6 rounded-2xl bg-rose-50 border border-rose-100 text-center group hover:bg-rose-100 transition-colors">
                                <p class="text-xs text-rose-500 font-bold mb-2">ダイエット (減量期)</p>
                                <p class="text-3xl font-black text-rose-600">{{ number_format($targetCalories['loss']) }} <span class="text-sm font-bold">kcal</span></p>
                                <p class="text-[10px] text-rose-400 mt-2">体脂肪を効率よく燃焼</p>
                            </div>
                            <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-100 text-center group hover:bg-emerald-100 transition-colors">
                                <p class="text-xs text-emerald-500 font-bold mb-2">現状維持 (維持期)</p>
                                <p class="text-3xl font-black text-emerald-600">{{ number_format($targetCalories['maintain']) }} <span class="text-sm font-bold">kcal</span></p>
                                <p class="text-[10px] text-emerald-400 mt-2">現在の体型をキープ</p>
                            </div>
                            <div class="p-6 rounded-2xl bg-blue-50 border border-blue-100 text-center group hover:bg-blue-100 transition-colors">
                                <p class="text-xs text-blue-500 font-bold mb-2">バルクアップ (増量期)</p>
                                <p class="text-3xl font-black text-blue-600">{{ number_format($targetCalories['gain']) }} <span class="text-sm font-bold">kcal</span></p>
                                <p class="text-[10px] text-blue-400 mt-2">筋肉量を増やすための栄養確保</p>
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
                    <span class="w-2 h-7 bg-green-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">身体情報の入力</p>
                            <p class="text-sm text-gray-600">正確な性別、年齢、身長、現在の体重を入力します。基礎代謝は筋肉量にも左右されますが、この計算式は統計的な平均値をベースに算出します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">活動レベルを正直に選ぶ</p>
                            <p class="text-sm text-gray-600">自身のライフスタイルに最も近い活動環境を選択してください。ここでの選択が1日の総消費カロリー（TDEE）を大きく決定づけます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">目的に合わせて摂取量を管理</p>
                            <p class="text-sm text-gray-600">算出された「ダイエット用」または「増量用」のカロリーを基準に、日々の食事記録（あすけん等）を組み合わせて管理を行いましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    1日の総エネルギー消費(TDEE)の内訳
                </h2>
                <div class="flex flex-col items-center justify-center h-48 mb-4">
                    <div class="w-full max-w-xs bg-gray-100 rounded-full h-12 overflow-hidden flex relative ring-2 ring-emerald-100">
                        <div class="bg-emerald-500 h-full flex items-center justify-center text-[10px] text-white font-bold" style="width: 60%">基礎代謝 (60%)</div>
                        <div class="bg-blue-400 h-full flex items-center justify-center text-[10px] text-white font-bold" style="width: 30%">身体活動 (30%)</div>
                        <div class="bg-orange-400 h-full flex items-center justify-center text-[10px] text-white font-bold" style="width: 10%">食事誘発 (10%)</div>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-6 py-6 border-t border-gray-100">
                    <div class="text-left bg-gray-50 rounded-xl p-4">
                        <p class="text-sm font-bold text-emerald-600 uppercase mb-2">BMR (基礎代謝)</p>
                        <p class="text-xs text-gray-600 leading-relaxed">心拍や呼吸、体温維持など生命維持のための最小消費。</p>
                    </div>
                    <div class="text-left bg-gray-50 rounded-xl p-4">
                        <p class="text-sm font-bold text-blue-500 uppercase mb-2">Activity (活動)</p>
                        <p class="text-xs text-gray-600 leading-relaxed">歩行、運動、家事など筋肉を動かすことによる消費。</p>
                    </div>
                    <div class="text-left bg-gray-50 rounded-xl p-4">
                        <p class="text-sm font-bold text-orange-500 uppercase mb-2">TEF (食事誘発)</p>
                        <p class="text-xs text-gray-600 leading-relaxed">食後、消化吸収のために体が熱を出すことによる消費。</p>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-2">※消費カロリーの約6割は基礎代謝が占めています。運動だけでなく基礎代謝を落とさないことが重要です。</p>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="基礎代謝・消費カロリー計算ツールとは？"
            icon="info"
            category-color="green">

            <p class="text-gray-600 leading-relaxed mb-4">
                基礎代謝・消費カロリー計算ツールは、あなたの年齢、性別、身長、体重から、「基礎代謝量（BMR）」と「1日の総消費カロリー（TDEE）」を精密に算出する無料ツールです。
                ダイエット、増量、現状維持など、目的別に必要な摂取カロリー目安を即座に把握できます。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                基礎代謝（BMR）は、何もせずじっとしていても消費されるカロリー。心臓、呼吸、体温維持など生命活動に必要なエネルギーで、1日の総消費カロリーの約60%を占めます。
                総消費カロリー（TDEE）は、基礎代謝に日常の活動量を加えた、「太りも痩せもしない」カロリーです。
            </p>

            <p class="text-gray-600 leading-relaxed">
                「食べていないのに痩せない」「何をどれだけ食べていいかわからない」そんな悩みを解決する第一歩。
                身体を知ることが、理想の体型への最短ルートです。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="基礎代謝（BMR）"
                    category-color="green">
                    Basal Metabolic Rateの略。24時間安静にしていても生命維持のために消費されるエネルギー量。
                    心臓、呼吸、体温維持などに使われ、1日の総消費カロリーの60〜70%を占める。
                    筋肉量が多いほど基礎代謝が高く、痩せやすい体質になる。
                </x-term-definition>

                <x-term-definition
                    term="総消費カロリー（TDEE）"
                    category-color="green">
                    Total Daily Energy Expenditureの略。基礎代謝に日常の活動量を加えた、1日の総消費エネルギー。
                    この数値と同じカロリーを摂取すれば体重は維持され、下回れば痩せ、上回れば太る。
                    ダイエットや増量の計画を立てる際の基準値。
                </x-term-definition>

                <x-term-definition
                    term="アンダーカロリー"
                    category-color="green">
                    消費カロリーよりも摂取カロリーが少ない状態。体重が減少するための必須条件。
                    例：TDEEが2,000kcalの人が1,700kcal摂取すれば、毎日300kcalのアンダーカロリー。
                    極端なアンダーカロリーは代謝低下を招くため、適度な設定が重要。
                </x-term-definition>

                <x-term-definition
                    term="オーバーカロリー"
                    category-color="green">
                    消費カロリーよりも摂取カロリーが多い状態。筋肉を増やす「増量期」に必要。
                    筋トレと組み合わせることで、筋肉量を効率よく増やせる。運動なしでは脂肪が増えるだけ。
                    一般的にはTDEE+200〜500kcal程度が目安。
                </x-term-definition>

                <x-term-definition
                    term="ハリス・ベネディクト方程式"
                    category-color="green">
                    基礎代謝を算出する最も一般的な計算式。1918年に発表され、1984年に改訂。
                    男性：13.397×体重+4.799×身長-5.677×年齢+88.362。
                    女性：9.247×体重+3.098×身長-4.330×年齢+447.593。
                    統計的な平均値のため、個人差がある。
                </x-term-definition>
                
                <x-term-definition
                    term="PFCバランス"
                    category-color="green">
                    Protein（タンパク質）、Fat（脂質）、Carbohydrate（炭水化物）の摂取バランス。
                    ダイエット時はタンパク質を高めに設定し、筋肉維持を重視。一般的な目安はP:F:C = 3:2:5。
                    カロリーだけでなく、「何を食べるか」も重要。
                </x-term-definition>
                
                <x-term-definition
                    term="リバウンド"
                    category-color="green">
                    ダイエット後に体重が元に戻る、または以前より増える現象。極端な食事制限で代謝が低下することが主原因。
                    防ぐには、基礎代謝以上のカロリーを摂取し、筋トレで筋肉を維持することが重要。
                    「食べない」ではなく「計算して食べる」ことが防止策。
                </x-term-definition>
                
                <x-term-definition
                    term="筋肉量と代謝の関係"
                    category-color="green">
                    筋肉は安静時でもエネルギーを消費するため、筋肉量が多いほど基礎代謝が高くなる。
                    筋肉1kgあたりの消費カロリーは1日約13kcal。筋トレで筋肉を5kg増やせば、基礎代謝が約65kcal/日向上。
                    「痩せやすい体質」を作るには、筋肉を増やすことが最も効果的。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="TDEEを基準にした計画的ダイエットで3ヶ月で5kg減量"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        感覚だけで食事制限
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「食べない」だけの極端な食事制限</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>基礎代謝以下の摂取で1,000kcal/日</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>最初は2kg痩せたが、その後停滞</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>食欲が爆発してリバウンド（+3kg）</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        TDEEを基準に計画的に管理
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>TDEE 1,800kcalを計算で把握</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>目標：1,500kcal/日（-300kcal）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>タンパク質を確保して筋肉維持</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>3ヶ月で-5kg達成、リバウンドなし</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-green-700">改善のポイント：</strong>
                    感覚だけの極端な食事制限は、代謝低下とリバウンドを招きます。
                    TDEEを正確に把握し、適度なアンダーカロリー（-200〜-500kcal）を設定することで、
                    筋肉を維持しながら健康的に体脂肪を減らせます。
                    「食べない」ではなく「計算して食べる」ことが、成功への鍵です。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース2: 筋トレで基礎代謝を上げて痩せやすい体質に"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        有酸素運動のみでダイエット
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>ジョギングだけで筋トレなし</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>基礎代謝：1,200kcal/日</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>体重は減ったが筋肉も減少</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>リバウンドしやすい体質に</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        筋トレを追加して筋肉維持
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>週3回の筋トレを開始</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>筋肉量+3kg、基礎代謝：1,240kcal/日</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>体脂肪率が下がり引き締まった体型に</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>リバウンドしにくい体質に変化</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-green-700">改善のポイント：</strong>
                    筋トレで筋肉を3kg増やしたことで、基礎代謝が1日約40kcal向上。年間で約14,600kcal（体脂肪約2kg分）の消費増加になります。
                    筋肉は「何もしなくてもカロリーを消費する資産」。有酸素運動だけでなく、筋トレを組み合わせることで、
                    「痩せやすい体質」を作ることができます。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース3: 増量期でオーバーカロリー、筋肉を効率よく増やす"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        筋トレしても筋肉が増えない
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>週3回のハードな筋トレ</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>摂取カロリー：TDEEと同じ</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>半年経っても筋肉がほとんど増えず</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        TDEE+300kcalで増量期
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>週3回のハードな筋トレ（同じ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>摂取カロリー：TDEE+300kcal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>3ヶ月で筋肉+2kg、体脂肪+1kg</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>効率よく筋肉を増量！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-green-700">改善のポイント：</strong>
                    筋肉を増やすには「オーバーカロリー」（消費より多く摂取）が必要です。TDEE+200～500kcalを目安に、筋トレと組み合わせることで、
                    筋肉を効率よく増やせます。「食べないと筋肉は増えない」という原則を理解し、
                    計画的にカロリーを管理することが、ボディメイク成功の鍵です。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => 'BMI計算機',
                    'url' => '/bmi-calculator',
                    'description' => '適正体重を判定',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
                ],
                [
                    'name' => 'カロリー消費計算',
                    'url' => '/calorie-burn',
                    'description' => '運動別の消費カロリーを試算',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
                ],
                [
                    'name' => '退職金計算',
                    'url' => '/retirement-planning',
                    'description' => '老後資金をシミュレーション',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
            ];
        @endphp

        <x-related-tools :tools="$relatedTools" category-color="green" />

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
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「基礎代謝（BMR）」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">基礎代謝とは、24時間じっと横になっていても、生命を維持するために自動的に消費されるエネルギー量のことです。心臓を動かす、体温を保つ、呼吸をするといった活動に使われ、1日の総消費エネルギーの約60〜70％を占めています。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 計算で出たカロリーを食べていれば、必ず痩せますか？</h3>
                    <p class="text-gray-600 leading-relaxed">基本的には「消費カロリー ＞ 摂取カロリー」の状態（アンダーカロリー）になれば体重は落ちます。ただし、計算式は統計的な予測値であるため、個人の筋肉量やホルモンバランスによって誤差が生じます。まずは試算値を2週間試し、体重の増減を見て微調整するのが王道です。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 基礎代謝量（BMR）以下しか食べていないのに痩せないのはなぜ？</h3>
                    <p class="text-gray-600 leading-relaxed">極端な低カロリー（BMR未満）を続けると、体が飢餓状態と判断し、エネルギー消費を極限まで抑える「省エネモード」に入ることがあります。また、代謝機能そのものが低下し、リバウンドしやすい体になってしまいます。最低でも「基礎代謝量」分は摂取し、運動で消費を稼ぐのが健康的です。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 年齢とともに基礎代謝が下がるのは本当ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">事実です。一般的に10代をピークに衰え始め、加齢による筋肉量の減少や、細胞の活性低下、ホルモンバランスの変化が要因となります。しかし、適切な筋力トレーニングとタンパク質の摂取により、低下のスピードを緩めたり、代謝を高い状態で維持することは十分に可能です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 1kgの体脂肪を減らすには、何kcalのマイナスが必要ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">体脂肪1kgを燃焼させるには、約7,200kcalのエネルギー消費が必要です。例えば1ヶ月で1kg痩せたい場合は、「7,200kcal ÷ 30日 ＝ 240kcal」。つまり、1日あたり消費より240kcal少なく摂取すれば、理論上1ヶ月で1kgの脂肪が落ちる計算になります。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「活動レベル」はどう判断すればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">迷う場合は一つ低いレベルで見積もることをお勧めします。例えば「毎日歩いているが激しい運動はしていない」なら「軽い活動」を選びます。現代人は活動量を多く見積もりすぎる傾向があるため、少し厳しめに設定する方が、ダイエットの計画としては失敗が少なくなります。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 筋トレをすれば基礎代謝は上がりますか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、筋肉量が増えれば基礎代謝が上がります。筋肉1kgあたり、1日約13kcalのエネルギーを消費します。例えば筋トレで筋肉を3kg増やせば、1日約39kcal、年間で約14,235kcal（体脂肪約2kg分）の消費増加になります。「痩せやすい体質」を作るには、筋肉を増やすことが最も効果的です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「PFCバランス」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">Protein（タンパク質）、Fat（脂質）、Carbohydrate（炭水化物）の摂取バランスのことです。ダイエット時はタンパク質を高めに設定し、筋肉維持を重視します。一般的な目安はP:F:C = 3:2:5。カロリーだけでなく、「何を食べるか」も重要です。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. リバウンドを防ぐにはどうすればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">リバウンドの主原因は「極端な食事制限による代謝低下」です。防ぐには、①基礎代謝以上のカロリーを摂取する、②筋トレで筋肉を維持する、③急激な減量を避ける（月1kg以内）、ことが重要です。「食べない」ではなく「計算して食べる」ことが防止策です。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 男性と女性で基礎代謝は違いますか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、男性の方が基礎代謝が高い傾向があります。理由は、男性の方が筋肉量が多く、体脂肪率が低いためです。同じ体重・身長・年齢でも、男性の方が約200～300kcal/日高いことが多いです。そのため、男女別々の計算式を使うことが重要です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「オーバーカロリー」で筋肉を増やすには？</h3>
                    <p class="text-gray-600 leading-relaxed">筋肉を増やすには、TDEEより多くカロリーを摂取する「オーバーカロリー」が必要です。目安はTDEE+200～500kcal。筋トレと組み合わせることで、筋肉を効率よく増やせます。運動なしでオーバーカロリーにすると、脂肪が増えるだけなので注意が必要です。</p>
                </div>
            </div>
        </div>
    </div>
</div>