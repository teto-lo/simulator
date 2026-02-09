<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-cyan-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-blue-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '引越し費用計算シミュレーター | 新生活の予算を秒速把握';
        $description = '移動距離、間取り、階数、エレベーターの有無、時期から引越し費用の概算を自動算出。繁忙期の割増料金や梱包サービスなどのオプション費用も網羅。';
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
                    'name' => '引越し費用計算シミュレーター',
                    'description' => '移動距離、間取り、階数、エレベーターの有無、時期から引越し費用の概算を自動算出。繁忙期の割増料金や梱包サービスなどのオプション費用も網羅。',
                    'url' => url()->current(),
                    'applicationCategory' => 'LifestyleApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '引越し費用概算',
                        '繁忙期割増計算',
                        'オプション費用算出',
                        '時期別料金比較'
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
                            'name' => '引越し費用計算'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '「繁忙期」と「通常期」でどれくらい金額が変わりますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '一般的に繁忙期（3月〜4月）は通常期（5月〜2月）に比べて、料金が1.5倍から2倍程度に跳ね上がります。特に土日の午前中などは予約が埋まりやすく、さらに高額になる傾向があります。費用を抑えたい場合は、4月中旬以降への延期や、3月初旬までの前倒しを検討してください。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'エレベーターがない建物の割増しは厳しいですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '階数が上がるごとに作業員の人数を増やしたり、階段運搬の手間（養生、安全性確保）が発生するため、2階以上で階段作業がある場合は数千円から1万円程度の加算が一般的です。5階建てのエレベーターなし物件などは、追加料金が膨らむ可能性が高いため注意が必要です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '一括見積もりサイトを使うメリットとデメリットは？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'メリットは、複数業者の価格を競わせることで確実に安くなる（相場より低くなる）ことです。デメリットは、登録直後から大量の電話がかかってくる点です。まずは本シミュレーターのようなツールで「自分の相場」を知った上で、特定の数社に絞って個別に連絡を取るのも一つの手です。'
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
                    <a href="/" class="hover:text-cyan-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">引越し費用計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    引越し費用計算
                </h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">
                    距離・荷物量・時期を入力するだけ。損をしない「適正価格」を知ろう。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-cyan-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-cyan-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '業者を呼ぶ前に、大まかな「相場観」を持って交渉を有利に進めたい',
                        '「3月の引越し」が、通常期と比べてどれだけ高くなるか現実を知りたい',
                        'エレベーターなしの5階…そんな過酷な条件でいくら加算されるか確認',
                        '「自分で行う荷造り」を業者に頼んだ際、追加でいくらかかるか知りたい',
                        '新居への移動距離が「150km」などの長距離になる場合の目安を把握',
                        '引越しに伴う総予算（敷金・礼金含む）の、引越し代パートを確定させたい'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-cyan-50/50 p-4 rounded-xl border border-cyan-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-cyan-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-cyan-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-cyan-500 to-blue-600 rounded-full"></span>
                引越し条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-6">
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">移動距離</label>
                        <div class="relative">
                            <input type="number" wire:model.live="distance" placeholder="15"
                                class="w-full border-2 border-gray-100 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">km</span>
                        </div>
                    </div>

                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">現在の間取り (荷物量目安)</label>
                        <select wire:model.live="roomSize"
                            class="w-full border-2 border-gray-100 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none appearance-none">
                            @foreach($baseRates as $key => $rate)
                                <option value="{{ $key }}">{{ $rate['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-3 group">
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">作業階数 (最高)</label>
                            <div class="relative">
                                <input type="number" wire:model.live="floor" min="1"
                                    class="w-full border-2 border-gray-100 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">階</span>
                            </div>
                        </div>
                        <div class="space-y-3 group">
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">エレベーター</label>
                            <div class="flex gap-2">
                                <button wire:click="$set('hasElevator', true)"
                                    class="flex-1 py-4 rounded-2xl border-2 transition-all font-bold {{ $hasElevator ? 'bg-amber-100 border-amber-500 text-amber-700' : 'bg-white border-gray-50 text-gray-400' }}">
                                    あり
                                </button>
                                <button wire:click="$set('hasElevator', false)"
                                    class="flex-1 py-4 rounded-2xl border-2 transition-all font-bold {{ !$hasElevator ? 'bg-amber-100 border-amber-500 text-amber-700' : 'bg-white border-gray-50 text-gray-400' }}">
                                    なし
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">引越しの時期</label>
                        <div class="flex gap-4">
                            <label class="flex-1 cursor-pointer group/radio">
                                <input type="radio" wire:model.live="season" value="normal" class="hidden">
                                <div class="p-4 rounded-2xl border-2 transition-all text-center {{ $season === 'normal' ? 'bg-amber-50 border-amber-500 shadow-sm' : 'bg-white border-gray-50 opacity-60' }}">
                                    <p class="font-bold text-sm {{ $season === 'normal' ? 'text-amber-800' : 'text-gray-400' }}">通常期</p>
                                    <p class="text-[10px] text-gray-400 mt-1">5月〜2月</p>
                                </div>
                            </label>
                            <label class="flex-1 cursor-pointer group/radio">
                                <input type="radio" wire:model.live="season" value="busy" class="hidden">
                                <div class="p-4 rounded-2xl border-2 transition-all text-center {{ $season === 'busy' ? 'bg-orange-50 border-orange-500 shadow-sm' : 'bg-white border-gray-50 opacity-60' }}">
                                    <p class="font-bold text-sm {{ $season === 'busy' ? 'text-orange-800' : 'text-gray-400' }}">繁忙期</p>
                                    <p class="text-[10px] text-gray-400 mt-1">3月〜4月</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">オプションサービス</label>
                        <div class="grid grid-cols-1 gap-2">
                            @foreach($serviceRates as $key => $service)
                                <label class="flex items-center justify-between p-3 rounded-xl border border-gray-100 hover:bg-amber-50 transition-colors cursor-pointer group">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" wire:model.live="additionalServices" value="{{ $key }}"
                                            class="w-5 h-5 rounded border-gray-300 text-amber-600 focus:ring-amber-500">
                                        <span class="text-sm font-bold text-gray-700">{{ $service['name'] }}</span>
                                    </div>
                                    <span class="text-xs font-bold text-amber-600">+¥{{ number_format($service['rate']) }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-amber-50 rounded-3xl p-8 border-2 border-amber-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        引越し費用分析
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all flex flex-col justify-center">
                            <p class="text-xs text-amber-100 mb-2 font-bold tracking-widest uppercase">Estimated Total Cost</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-lg opacity-80 font-bold">¥</span>
                                <span class="text-6xl font-extrabold">{{ number_format($totalCost) }}</span>
                            </div>
                            <div class="inline-flex items-center bg-white/20 px-4 py-1 rounded-full backdrop-blur-sm mt-4 text-[10px] font-bold">
                                ※あくまで概算です。荷物量により変動します。
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-2xl p-4 shadow-md border border-gray-50 flex flex-col justify-center">
                                <p class="text-[10px] text-gray-400 mb-1 font-bold">距離・階数加算</p>
                                <p class="text-lg font-bold text-gray-800">¥{{ number_format($distanceCost + $floorSurcharge) }}</p>
                            </div>
                            <div class="bg-white rounded-2xl p-4 shadow-md border border-gray-50 flex flex-col justify-center border-b-orange-400 border-b-4">
                                <p class="text-[10px] text-orange-500 mb-1 font-bold">時期割増（繁忙期）</p>
                                <p class="text-lg font-bold text-gray-800">¥{{ number_format($seasonalSurcharge) }}</p>
                            </div>
                            <div class="bg-white rounded-2xl p-4 shadow-md border border-gray-50 flex flex-col justify-center">
                                <p class="text-[10px] text-gray-400 mb-1 font-bold">オプション合計</p>
                                <p class="text-lg font-bold text-gray-800">¥{{ number_format($servicesCost) }}</p>
                            </div>
                            <div class="bg-white rounded-2xl p-4 shadow-md border border-gray-50 flex flex-col justify-center border-b-blue-400 border-b-4">
                                <p class="text-[10px] text-blue-500 mb-1 font-bold">想定作業時間</p>
                                <p class="text-lg font-bold text-gray-800">約 {{ number_format($estimatedTime / 60, 1) }}h</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-white border border-amber-200">
                        <p class="text-sm font-bold text-amber-800 flex items-center gap-2 mb-2">
                             <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                             安く抑えるための診断アドバイス
                        </p>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ $distance > 100 ? '100km超の長距離引越しは、混載便（他人の荷物と一緒に運ぶ）を利用することで最大30%程度安くなる可能性があります。' : '近距離の引越しの場合は、時間指定をしない「フリー便」を選ぶことで、料金が数万円単位で下がるケースが多いです。' }}
                            {{ $season === 'busy' ? '現在「繁忙期」が選択されています。可能であれば4月中旬以降にずらすことで、今の見積もりからさらに3〜5万円程度安くできる見込みがあります。' : '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-amber-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">移動距離と間取りを選択</p>
                            <p class="text-sm text-gray-600">Googleマップなどで新旧住所の距離を測り、入力をします。間取りは「荷物の量」を推定するために使用されます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">建物の条件を設定</p>
                            <p class="text-sm text-gray-600">階数が高いほど、またエレベーターがないほど作業員の負担が増えるため、割増料金として加算されるのが一般的です。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">時期とオプションを決定</p>
                            <p class="text-sm text-gray-600">3月・4月は「繁忙期」を選択してください。ピアノ運送や特殊な梱包代、不用品回収などは別途費用がかかります。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-orange-500 rounded-full"></span>
                    引越し料金の時期別指数 (目安)
                </h2>
                <div class="flex items-end justify-between h-32 gap-1 px-2 mb-4">
                    @foreach([1=>0.8, 2=>1.0, 3=>1.8, 4=>1.5, 5=>1.0, 6=>0.9, 7=>1.1, 8=>1.0, 9=>1.1, 10=>1.0, 11=>0.9, 12=>1.0] as $m => $val)
                        <div class="flex-1 flex flex-col items-center">
                            <div class="w-full rounded-t-sm {{ $m==3 || $m==4 ? 'bg-orange-500' : 'bg-amber-200' }}" style="height: {{ $val * 50 }}px"></div>
                            <span class="text-[8px] mt-1 font-bold text-gray-400">{{ $m }}月</span>
                        </div>
                    @endforeach
                </div>
                <div class="grid grid-cols-2 gap-4 py-4 border-t border-gray-100">
                    <div class="text-left">
                        <p class="text-[10px] font-bold text-orange-600 uppercase">Busy Season (3-4月)</p>
                        <p class="text-[9px] text-gray-500 leading-tight">進学・就職で最も高い時期。相場は1.5~2倍に跳ね上がることも。</p>
                    </div>
                    <div class="text-left border-l border-gray-100 pl-4">
                        <p class="text-[10px] font-bold text-amber-600 uppercase">Normal (5-2月)</p>
                        <p class="text-[9px] text-gray-500 leading-tight">比較的落ち着いており、平日の午後便などは交渉で安くなりやすい。</p>
                    </div>
                </div>
                <p class="text-[10px] text-gray-400 mt-2">※指数は1.0を通常期の平均とした場合の倍率イメージです。</p>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="引越し費用計算シミュレーターとは？"
            icon="info"
            category-color="cyan">

            <p class="text-gray-600 leading-relaxed mb-4">
                引越し費用計算シミュレーターは、移動距離、間取り、階数、エレベーターの有無、時期から引越し費用の概算を自動算出する無料ツールです。
                繁忙期の割増料金や梱包サービスなどのオプション費用も網羅し、適正価格を把握できます。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                引越し料金は「基本料金（距離・荷物量）」「時期による割増」「建物条件（階数・エレベーター）」「オプションサービス」の4要素で決まります。
                特に3月〜4月の繁忙期は通常期の1.5〜2倍に跳ね上がるため、時期選びが最も重要です。
            </p>

            <p class="text-gray-600 leading-relaxed">
                「業者を呼ぶ前に相場観を持つ」ことで、交渉を有利に進められます。
                損をしない「適正価格」を知って、新生活の予算を正確に把握しましょう。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="cyan">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="繁忙期と通常期"
                    category-color="cyan">
                    繁忙期は3月〜4月の進学・就職シーズン。引越し需要が集中し、料金は通常期の1.5〜2倍に跳ね上がる。
                    通常期は5月〜2月。比較的落ち着いており、平日の午後便などは交渉で安くなりやすい。
                    可能であれば4月中旬以降にずらすことで、数万円単位で節約できる可能性が高い。
                </x-term-definition>

                <x-term-definition
                    term="単身パック"
                    category-color="cyan">
                    専用のコンテナ（カゴ台車）に収まる分だけを運ぶ定額制サービス。コンテナ1本あたり◯万円と決まっている。
                    大型家具や家電がない単身者向け。荷物が少なければ通常の引越しより大幅に安くなる。
                    ただし、大型家具がある場合はカゴからはみ出し、結局高くなることもあるため事前確認が必要。
                </x-term-definition>

                <x-term-definition
                    term="混載便とチャーター便"
                    category-color="cyan">
                    混載便は他人の荷物と一緒にトラックに積んで運ぶ方式。長距離引越しで最大30%程度安くなる可能性。
                    チャーター便は自分専用のトラックで運ぶ方式。荷物が多い場合や近距離引越しで一般的。
                    荷物が少なく、日程に余裕がある場合は混載便を検討すると節約できる。
                </x-term-definition>

                <x-term-definition
                    term="フリー便（時間指定なし）"
                    category-color="cyan">
                    作業開始時間を業者に任せる代わりに、料金が安くなるプラン。午前便・午後便より数万円安い。
                    業者が他の作業の合間に来るため、開始時間が読めない（夕方になることも）。
                    時間に余裕がある人には、大幅な節約になるためおすすめ。
                </x-term-definition>

                <x-term-definition
                    term="養生（ようじょう）"
                    category-color="cyan">
                    引越し作業中に建物や家具を傷つけないよう、保護材で覆うこと。プロの技術が最も発揮される部分。
                    壁、床、エレベーター、階段などを専用シートで保護。これがないと傷や汚れのリスクが高まる。
                    自力引越しでは養生が不十分になりがちで、後から修繕費が発生するケースも。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="時期をずらして繁忙期料金15万円→通常期8万円に削減"
            category-color="cyan">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        3月末の繁忙期に引越し
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>3月末の土曜日に引越し予定</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>1K単身、距離50km</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>見積もり：15万円（繁忙期割増）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「高いけど仕方ない」と諦めていた</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        4月中旬の通常期に変更
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>4月中旬の平日に変更</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>同じ条件（1K単身、距離50km）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>見積もり：8万円（通常期料金）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>7万円の節約に成功</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-cyan-50 rounded-xl border-l-4 border-cyan-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-cyan-700">改善のポイント：</strong>
                    同じ条件でも、3月末の繁忙期と4月中旬の通常期では料金が約2倍の差。たった2週間ずらすだけで7万円の節約になりました。
                    さらに平日のフリー便（時間指定なし）を選んだことで、追加で1万円の値引きも獲得。
                    「時期選び」と「時間帯の柔軟性」が、引越し費用を大きく左右します。
                    可能であれば4月中旬以降、または3月初旬までに前倒しすることで、大幅な節約が可能です。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => '給与計算',
                    'url' => '/salary-calculator',
                    'description' => '手取り給与を算出',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => 'ローン返済計算',
                    'url' => '/loan-repayment',
                    'description' => '住宅ローン返済計画',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
                ],
                [
                    'name' => '退職金計算',
                    'url' => '/retirement-planning',
                    'description' => '老後資金をシミュレーション',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>',
                ],
            ];
        @endphp

        <x-related-tools :tools="$relatedTools" category-color="cyan" />

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
                <div class="border-l-4 border-amber-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「繁忙期」と「通常期」でどれくらい金額が変わりますか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的に繁忙期（3月〜4月）は通常期（5月〜2月）に比べて、料金が1.5倍から2倍程度に跳ね上がります。特に土日の午前中などは予約が埋まりやすく、さらに高額になる傾向があります。費用を抑えたい場合は、4月中旬以降への延期や、3月初旬までの前倒しを検討してください。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. エレベーターがない建物の割増しは厳しいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">階数が上がるごとに作業員の人数を増やしたり、階段運搬の手間（養生、安全性確保）が発生するため、2階以上で階段作業がある場合は数千円から1万円程度の加算が一般的です。5階建てのエレベーターなし物件などは、追加料金が膨らむ可能性が高いため注意が必要です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 一括見積もりサイトを使うメリットとデメリットは？</h3>
                    <p class="text-gray-600 leading-relaxed">メリットは、複数業者の価格を競わせることで確実に安くなる（相場より低くなる）ことです。デメリットは、登録直後から大量の電話がかかってくる点です。まずは本シミュレーターのようなツールで「自分の相場」を知った上で、特定の数社に絞って個別に連絡を取るのも一つの手です。</p>
                </div>
                <div class="border-l-4 border-amber-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「単身パック」とは何が違うのですか？</h3>
                    <p class="text-gray-600 leading-relaxed">単身パックは専用のコンテナ（カゴ台車）に収まる分だけを運ぶ定額制です。コンテナ1本あたり◯万円と決まっているため、本シミュレーターの「1K/単身」よりもさらに安くなる場合があります。ただし、大型家具や家電がある場合はカゴからはみ出し、結局高くなることもあるため事前確認が必要です。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 見積もり時には何を伝えるべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">「住所（新旧）」「引越し希望日」「間取り」「大きな荷物（冷蔵庫、洗濯機、ベッド等）の有無」「建物のエレベーター有無」「前面道路の広さ（トラックが停められるか）」の6点は必須です。これらが不透明だと、当日に追加料金を請求されるリスクが高まります。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 引越し業者に頼まず自力でするのと、どちらが安いですか？</h3>
                    <p class="text-gray-600 leading-relaxed">レンタカー代、ガソリン代、手伝ってくれた友人への謝礼、万が一の家財破損リスクを考えると、近距離かつ荷物が少ない場合以外は、業者に頼んだ方が「時間と安全」を安く買えることが多いです。特に大型家具がある場合は、プロの養生技術を頼ることをお勧めします。</p>
                </div>
            </div>
        </div>
    </div>
</div>