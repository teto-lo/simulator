<div class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-teal-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '老後資金計算シミュレーター | 2000万円問題に備えるライフプラン';
        $description = '現在の年齢、年金額、理想の生活費から、老後に必要な総資金と毎月の必要積立額をシミュレーション。資産運用による「複利の効果」も含めて精密に試算します。';
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
                    'name' => '老後資金計算シミュレーター',
                    'description' => '現在の年齢、年金額、理想の生活費から、老後に必要な総資金と毎月の必要積立額をシミュレーション。資産運用による「複利の効果」も含めて精密に試算します。',
                    'url' => url()->current(),
                    'applicationCategory' => 'FinanceApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '老後必要資金計算',
                        '年金不足額算出',
                        '複利効果試算',
                        '毎月積立額提示'
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
                            'name' => '老後資金計算'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '「老後2000万円問題」は今でも有効な数字ですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '2000万円という数字は「夫65歳以上、妻60歳以上の無職世帯の平均的な不足額」に基づいたものです。住宅ローンの有無、住む地域（賃貸か持ち家か）、健康状態によって、必要な額は500万円で済む人もいれば5000万円必要な人もいます。このシミュレーターで「自分だけの不足額」を出すことが重要です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '年金受給額がいくらになるか分かりません。',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'まずは「ねんきん定期便」を確認するのが確実です。ざっくりとした目安としては、年収500万円程度の会社員（厚生年金）であれば月15〜18万円程度、自営業者（国民年金のみ）であれば月6〜7万円程度と言われています。iDeCoや企業型DCの上乗せ分も忘れないように入力してください。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '資産運用のリターン（％）はどれくらいで設定すべきですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'インデックス投資中心であれば「3％〜5％」程度でシミュレーションするのが現実的かつ健全です。期待しすぎてハイリスクな商品に手を出すのは老後資金形成においては危険です。逆に、銀行預金のみであれば「0％」に近い数値に設定し、どれくらいのスピードでお金が減るかを確認しましょう。'
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
                    <a href="/" class="hover:text-emerald-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">老後資金計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-emerald-600 via-teal-600 to-emerald-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    老後資金計算
                </h1>
                <p class="text-lg md:text-xl text-emerald-100 text-center md:text-left max-w-2xl">
                    「2000万円で足りるか？」に、あなただけの答えを。将来を可視化して、今を安心して生きよう。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-emerald-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-emerald-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '「老後2000万円不足」と言われるが、自分の場合はいくら必要なのか知りたい',
                        '現在の生活レベルを老後も維持するために、毎月いくら積み立てるべきか算出',
                        '退職年齢を早める（FIRE）には、どれだけの資産を形成する必要があるか確認',
                        '年金の受給額を予測し、貯金だけで乗り切れる期間がどれくらいか把握したい',
                        '「資産運用（新NISA/iDeCo）」を組み入れた際、将来資産がどう変わるか試算',
                        '平均寿命を超えて長生きした場合の「もしも」の資金不足リスクを診断'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-emerald-50/50 p-4 rounded-xl border border-emerald-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-emerald-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-emerald-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                ライフプランの設定
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">現在の年齢</label>
                    <div class="relative">
                        <input type="number" wire:model.live="currentAge" placeholder="30"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">退職予定年齢</label>
                    <div class="relative">
                        <input type="number" wire:model.live="retirementAge" placeholder="65"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">寿命の想定 (90〜100推奨)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="lifeExpectancy" placeholder="90"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">老後の月間生活費</label>
                    <div class="relative">
                        <input type="number" wire:model.live="monthlyExpense" placeholder="250000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">受給予定の年金 (月)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="pension" placeholder="150000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">現在の貯蓄額</label>
                    <div class="relative">
                        <input type="number" wire:model.live="currentSavings" placeholder="0"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">追加の月間積立額</label>
                    <div class="relative">
                        <input type="number" wire:model.live="monthlyContribution" placeholder="50000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
            </div>

            <div class="mb-10 text-center">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 block">運用期待リターン (年利)</label>
                <div class="flex items-center gap-4 max-w-xl mx-auto">
                    <span class="text-xs font-bold text-gray-400 italic">0%</span>
                    <input type="range" wire:model.live="expectedReturn" min="0" max="10" step="0.1" class="w-full h-2 bg-gray-100 rounded-lg appearance-none cursor-pointer accent-emerald-500">
                    <span class="text-xs font-bold text-gray-400 italic">10%</span>
                </div>
                <p class="text-emerald-600 font-black text-xl italic mt-2">{{ $expectedReturn }}%</p>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-emerald-50 rounded-3xl p-8 border-2 border-emerald-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                        ライフプラン試算レポート
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        {{-- 支出の部 --}}
                        <div class="bg-gradient-to-br from-rose-500 to-red-600 rounded-3xl p-8 shadow-xl text-white transform hover:scale-[1.02] transition-all relative overflow-hidden group">
                            <div class="absolute right-0 bottom-0 opacity-10 -mr-6 -mb-6 group-hover:scale-125 transition-transform duration-700">
                                <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            </div>
                            <p class="text-xs text-rose-100 mb-2 font-bold tracking-widest uppercase">Required Post-Retirement Funds</p>
                            <h4 class="text-sm font-bold mb-4">老後にかかる総費用 ({{ $yearsInRetirement }}年間)</h4>
                            <div class="flex items-baseline gap-1">
                                <span class="text-lg opacity-80 font-bold">¥</span>
                                <span class="text-5xl font-extrabold">{{ number_format($totalNeeded) }}</span>
                            </div>
                            <div class="mt-4 pt-4 border-t border-white/20 flex flex-col gap-1 text-xs">
                                <div class="flex justify-between"><span class="opacity-70">月間生活費:</span><span>¥{{ number_format($monthlyExpense) }}</span></div>
                                <div class="flex justify-between font-bold"><span>年金総受給額:</span><span>- ¥{{ number_format($pensionTotal) }}</span></div>
                            </div>
                        </div>

                        {{-- 資産の部 --}}
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-8 shadow-xl text-white transform hover:scale-[1.02] transition-all relative overflow-hidden group">
                            <div class="absolute right-0 bottom-0 opacity-10 -mr-6 -mb-6 group-hover:scale-125 transition-transform duration-700">
                                <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                            </div>
                            <p class="text-xs text-green-100 mb-2 font-bold tracking-widest uppercase">Projected Savings at Retirement</p>
                            <h4 class="text-sm font-bold mb-4">退職時点の予測資産総額 ({{ $yearsToRetirement }}年後)</h4>
                            <div class="flex items-baseline gap-1">
                                <span class="text-lg opacity-80 font-bold">¥</span>
                                <span class="text-5xl font-extrabold">{{ number_format($projectedSavings) }}</span>
                            </div>
                            <div class="mt-4 pt-4 border-t border-white/20 flex flex-col gap-1 text-xs">
                                <div class="flex justify-between"><span class="opacity-70">現在貯蓄 ＋ 元本合計:</span><span>¥{{ number_format($currentSavings + ($monthlyContribution * 12 * $yearsToRetirement)) }}</span></div>
                                <div class="flex justify-between font-bold text-yellow-200"><span>運用益 (複利効果):</span><span>+ ¥{{ number_format($projectedSavings - ($currentSavings + ($monthlyContribution * 12 * $yearsToRetirement))) }}</span></div>
                            </div>
                        </div>
                    </div>

                    {{-- 最終結果 --}}
                    <div class="bg-white rounded-3xl p-8 shadow-md border-2 {{ $gap >= 0 ? 'border-emerald-200' : 'border-rose-200' }} relative overflow-hidden">
                        @if($gap >= 0)
                            <div class="absolute top-0 right-0 p-4 opacity-10 text-emerald-600">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-emerald-800 mb-2">試算結果：老後資金の不安は「なし」といえます！</h4>
                            <p class="text-xs text-gray-500 mb-4">現在の計画を維持できれば、想定される老後期間をカバーしてもなお余剰金が発生する計算です。</p>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">余剰額目安</span>
                                <span class="text-4xl font-black text-emerald-600">¥{{ number_format($gap) }}</span>
                            </div>
                        @else
                            <div class="absolute top-0 right-0 p-4 opacity-10 text-rose-600">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-rose-800 mb-2">試算結果：対策が必要な「不足」の状態です</h4>
                            <p class="text-xs text-gray-500 mb-4">このままのペースでは、想定される老後生活のどこかで資金が底をつく可能性があります。</p>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">不足額目安</span>
                                <span class="text-4xl font-black text-rose-600">¥{{ number_format(abs($gap)) }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">現状と未来の期間を設定</p>
                            <p class="text-sm text-gray-600">今の年齢と、引退したい年齢、そして「いつまでお金が必要か（寿命の想定）」を入力します。人生100年時代を見据え、90〜100歳程度に設定するのがリスク管理上のおすすめです。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">収支のバランスを入力</p>
                            <p class="text-sm text-gray-600">老後に送りたい生活のレベル（月額費用）と、受け取れる年金額を入力します。今の生活費から、住居費（住宅ローン完済後）や交際費の変化を考慮して見積もりましょう。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">積立と運用のシミュレーション</p>
                            <p class="text-sm text-gray-600">今の貯金に加え、退職までに毎月いくら貯められるかと、それを何％で運用できるかを入力します。不足が出る場合は、積立額を上げたり、運用利回りの設定を変えて微調整してみましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-teal-500 rounded-full"></span>
                    よく計算で使われる「物価・生活費」
                </h2>
                <div class="overflow-x-auto text-[10px]">
                    <table class="w-full text-left uppercase tracking-tighter">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-2 font-bold text-gray-400 italic">ライフスタイル</th>
                                <th class="py-2 font-bold text-amber-600 italic">月間生活費（夫婦）</th>
                                <th class="py-2 font-bold text-gray-400 italic">イメージ</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 leading-relaxed font-bold">
                            <tr>
                                <td class="py-3 text-gray-500 italic">最低限の生活</td>
                                <td class="py-3 text-gray-800 italic">約 22万円</td>
                                <td class="py-3 text-gray-400 italic">節約意識が高い、公営住宅等</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-gray-500 italic">平均的な生活</td>
                                <td class="py-3 text-gray-800 italic">約 27万円</td>
                                <td class="py-3 text-gray-400 italic">標準的な夫婦二人のゆとり</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-gray-500 italic">ゆとりある生活</td>
                                <td class="py-3 text-gray-800 italic">約 36万円</td>
                                <td class="py-3 text-gray-400 italic">旅行、レジャー、外食を定期的に</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 p-4 rounded-xl bg-orange-50 border border-teal-100 text-left">
                    <p class="text-[10px] font-bold text-teal-600 mb-1">💡 寿命（長生き）のリスク</p>
                    <p class="text-[9px] text-gray-600 leading-tight">想定寿命を1年延ばすごとに、必要資金は「（月間生活費 - 年金額）× 12ヶ月」分だけ増大します。特に女性は平均寿命が長いため、100歳まで考慮したプランが推奨されます。</p>
                </div>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="老後資金計算シミュレーターとは？"
            icon="info"
            category-color="emerald">

            <p class="text-gray-600 leading-relaxed mb-4">
                老後資金計算シミュレーターは、現在の年齢、年金額、理想の生活費から、老後に必要な総資金と毎月の必要積立額を精密に算出する無料ツールです。
                「老後2000万円問題」はあくまで平均値。あなただけの答えを見つけましょう。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                計算では、退職後の生活費から年金受給額を差し引いた「毎月の不足額」を算出。それを退職後の年数分積み上げて、必要総額を導き出します。
                さらに、現在の資産と毎月の積立を複利運用した場合の将来価値も試算します。
            </p>

            <p class="text-gray-600 leading-relaxed">
                「2000万円で足りるか？」に、あなただけの答えを。将来を可視化して、今を安心して生きよう。
                人生100年時代、早めの準備が安心を生みます。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="老後2000万円問題"
                    category-color="emerald">
                    2019年に金融庁が発表した報告書で、夫婦の老後30年間で約2000万円が不足すると試算された。
                    あくまで平均的なモデルケースであり、個人の状況によって大きく異なる。
                    持ち家か賃貸か、健康状態、地域などで必要額は大きく変わる。
                </x-term-definition>

                <x-term-definition
                    term="公的年金（国民・厚生）"
                    category-color="emerald">
                    国民年金は全国民共通の基礎年金で、満額で月6.5万円/月。厚生年金は会社員が加入する2階部分。
                    厚生年金加入者は、国民年金+厚生年金の2階建てで受給。平均で15〜18万円/月程度。
                    自営業者は国民年金のみのため、iDeCoや付加年金で上乗せが重要。
                </x-term-definition>

                <x-term-definition
                    term="FIRE（経済的独立・早期退職）"
                    category-color="emerald">
                    Financial Independence, Retire Earlyの略。40〜50代でリタイアするライフスタイル。
                    一般的には「年間生活費の25倍の資産」を築くことが目標。（4%ルール）
                    早期リタイアには、徹底した節約と資産運用が不可欠。年金受給までの空白期間をどう埋めるかが課題。
                </x-term-definition>

                <x-term-definition
                    term="4%ルール"
                    category-color="emerald">
                    資産を年率4%ずつ取り崩しても、30年以上資産が減らないという統計的な指標。
                    例：5000万円の資産があれば、年間200万円（月16.7万円）を生活費に充てられる。
                    インデックス投資で平均5〜7%のリターンを前提とした理論。実際には市場変動リスクあり。
                </x-term-definition>

                <x-term-definition
                    term="長生リスク"
                    category-color="emerald">
                    予想よりも長生きすることで、老後資金が不足するリスク。人生100年時代の現代では重要な考慮事項。
                    女性は男性より平均寿命が長いため、特に注意が必要。100歳までの計画が推奨される。
                    寿命を1年延ばすごとに、（月間生活費-年金）×12ヶ月分の追加資金が必要。
                </x-term-definition>
                
                <x-term-definition
                    term="マッチング拠出（企業型DC）"
                    category-color="emerald">
                    会社が社員のiDeCo拠出に上乗せして拠出する制度。例えば社員が月1万円拠出すれば、会社も5,000円上乗せするなど。
                    実質的に「給与の増加」と同じ効果があり、非常にお得な制度。会社に確認し、活用できる場合は積極的に利用すべき。
                    企業型DCの拠出分も、老後資金計算に必ず含めましょう。
                </x-term-definition>
                
                <x-term-definition
                    term="インフレリスク"
                    category-color="emerald">
                    物価上昇によって、同じ金額で購入できるものが減るリスク。例えば年率インフレ2%が30年続けば、現在の100万円は実質的に55万円の価値になる。
                    銀行預金（ほぼ0%）ではインフレ負けするため、老後資金は「運用」が不可欠。
                    インデックス投資なら、インフレを上回るリターンが期待できる。
                </x-term-definition>
                
                <x-term-definition
                    term="リバースモーゲージ"
                    category-color="emerald">
                    持ち家を担保に、毎月一定額を受け取るローン商品。60歳以上が対象で、死亡時に自宅を売却して返済する仕組み。
                    老後資金不足を補う手段の一つだが、子供に家を残せない、金利が高いなどのデメリットもある。
                    最後の手段として検討すべきで、まずは新NISAやiDeCoでの資産形成を優先すべき。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="新NISA活用で老後資金不足を1500万円解消"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        銀行預金のみで積立
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>現在：35歳、資産100万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>月　5万円積立（運用利回り0%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>65歳時点の資産：1,900万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>老後必要額：3,400万円 → 1,500万円不足</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        新NISAで年利5%運用
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>現在：35歳、資産100万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>月　5万円積立（運用利回り5%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>65歳時点の資産：3,550万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>老後必要額：3,400万円 → 150万円余裕</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    同じ月　5万円の積立でも、新NISAで年利5%運用することで、複利効果により30年後の資産が1,650万円増加。
                    銀行預金では1,500万円不足だったのが、運用するだけで150万円の余裕が生まれました。
                    「複利の力」を活用することで、同じ積立額でも大きな差が生まれます。
                    早めに始めるほど、複利効果は大きくなります。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース2: FIRE達成のために40代で資産5,000万円築く"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        通常のペースで貴重な時間を消費
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>現在：30歳、資産200万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>月　5万円積立（運用0%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>50歳時点の資産：1,400万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>FIRE目標（5,000万円）に全く届かず</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        新NISAで年劗7%運用
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>現在：30歳、資産200万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>月　10万円積立（運用7%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>50歳時点の資産：約5,200万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>FIRE達成！50歳でリタイア！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    月　10万円を新NISAで年劗7%運用することで、20年間で資産が5,200万円に到達。「4%ルール」で年間208万円（月約17万円）を取り崩せるため、
                    50歳でFIRE達成。節約と複利運用の組み合わせで、早期リタイアが現実的になります。
                    「時間を味方につける」ことが、FIRE達成の鍵です。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース3: 自営業者がiDeCoで国民年金を上乗せ"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        国民年金のみで老後不安
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>現在：40歳、資産300万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>年金：月月6.5万円（国民年金のみ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>生活費：月　20万円 → 月　13.5万円不足</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>90歳までの不足額：約4,050万円</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        iDeCoで月月6.8万円拠出
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>現在：40歳、資産300万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>iDeCoに月月6.8万円、25年間拠出（5%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>65歳時点のiDeCo資産：約4,300万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>老後不足をほぼ解消！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    自営業者は国民年金のみのため、厚生年金加入者より老後資金不足が大きいです。iDeCoに月月6.8万円（上限額）を拠出することで、
                    25年間で約4,300万円の資産を築き、老後不足をほぼ解消。さらにiDeCoは所得控除で税金が戻るため、
                    実質的な負担はさらに軽くなります。自営業者こそ、iDeCoをフル活用すべきです。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => '複利計算シミュレーター',
                    'url' => '/compound-interest',
                    'description' => '資産運用の複利効果を試算',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>',
                ],
                [
                    'name' => 'NISA・iDeCo計算',
                    'url' => '/nisa-ideco',
                    'description' => '税優遇制度を活用した資産形成',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => 'ローン返済計算',
                    'url' => '/loan-repayment',
                    'description' => '住宅ローン返済計画',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
                ],
            ];
        @endphp

        <x-related-tools :tools="$relatedTools" category-color="emerald" />

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
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「老後2000万円問題」は今でも有効な数字ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">2000万円という数字は「夫65歳以上、妻60歳以上の無職世帯の平均的な不足額」に基づいたものです。住宅ローンの有無、住む地域（賃貸か持ち家か）、健康状態によって、必要な額は500万円で済む人もいれば、5000万円必要な人もいます。このシミュレーターで「自分だけの不足額」を出すことが重要です。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 年金受給額がいくらになるか分かりません。</h3>
                    <p class="text-gray-600 leading-relaxed">まずは「ねんきん定期便」を確認するのが確実です。ざっくりとした目安としては、年収500万円程度の会社員（厚生年金）であれば月15〜18万円程度、自営業者（国民年金のみ）であれば月6〜7万円程度と言われています。iDeCoや企業型DCの上乗せ分も忘れないように入力してください。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 資産運用のリターン（％）はどれくらいで設定すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">インデックス投資中心であれば「3％〜5％」程度でシミュレーションするのが現実的かつ健全です。期待しすぎてハイリスクな商品に手を出すのは老後資金形成においては危険です。逆に、銀行預金のみであれば「0％」に近い数値に設定し、どれくらいのスピードでお金が減るかを確認しましょう。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 不足額が大きすぎて、何から手をつけていいか分かりません。</h3>
                    <p class="text-gray-600 leading-relaxed">魔法のような回答はありませんが、打てる手は3つです。(1)リタイア年齢を遅らせて受給までの空白を縮める、(2)新NISA等を活用して「複利」の恩恵を最大限受ける、(3)老後の生活レベルを工夫し、月数万円でも支出を減らす。この3つを少しずつ組み合わせることで、不足額は劇的に縮小します。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 介護費用やインフレ（物価上昇）は考慮されていますか？</h3>
                    <p class="text-gray-600 leading-relaxed">本シミュレーターは現在の物価での簡易的な収支計算をベースにしています。実際の老後には、これに加えて予備費（医療・介護費として一人500万円程度、住宅修繕費など）を「現在の貯蓄額」から差し引いて考えるのが、より保守的で安全な計画になります。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 持ち家の場合、家賃がかからないので有利ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">退職時にローンが完済されていれば、月々の支出を劇的に抑えられます。ただし、固定資産税やメンテナンス費用（外壁塗装や設備の更新）が発生するため、月々の生活費にはそれらの「積み立て分」を数万円上乗せして設定することをお勧めします。賃貸の場合は、生涯家賃がかかる前提での生活費設定が必要です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. FIRE（早期リタイア）を目指す場合の目標資産は？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的に「年間生活費の25倍」が目標とされます（4%ルール）。例えば年間240万円（月20万円）で生活するなら、6,000万円の資産が必要です。ただし、年金受給までの空白期間をどう埋めるか、医療費の増加など、リスクも考慮して余裕を持たせることが重要です。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「長生riスク」を避けるための対策は？</h3>
                    <p class="text-gray-600 leading-relaxed">予想より長生きすることで資金が不足するリスクです。対策は、①100歳までの計画を立てる、②資産を運用しながら取り崩す（4%ルール）、③公的年金の繰り下げ受給（70歳まで遅らせると月額が42%増）を検討する、などがあります。特に女性は男性より平均寿命が長いため注意が必要です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. インフレ（物価上昇）は老後資金にどう影響しますか？</h3>
                    <p class="text-gray-600 leading-relaxed">例えば年率2%のインフレが30年続けば、現在の100万円は実質的に55万円の価値になります。銀行預金（ほぼ0%）ではインフレ負けするため、老後資金は「運用」が不可欠。インデックス投資（年劗5～7%）なら、インフレを上回るリターンが期待できます。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 自営業者は会社員より老後資金が必要ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、自営業者は国民年金のみ（月約6.5万円）のため、厚生年金加入者（月約15～18万円）より大幅に不足します。そのため、iDeCo（月月6.8万円まで）や付加年金、国民年金基金を活用して、自分で年金を上乗せすることが不可欠です。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「リバースモーゲージ」は老後資金対策になりますか？</h3>
                    <p class="text-gray-600 leading-relaxed">持ち家を担保に毎月一定額を受け取るローン商品です。老後資金不足を補う手段の一つですが、子供に家を残せない、金利が高いなどのデメリットがあります。最後の手段として検討すべきで、まずは新NISAやiDeCoでの資産形成を優先すべきです。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 年金受給を繰り下げるとどれくらい増えますか？</h3>
                    <p class="text-gray-600 leading-relaxed">公的年金は、65歳から75歳の間で受給開始時期を選べます、66歳以降に繰り下げると1ヶ月あたり0.7%増額。例えづ70歳まで遅らせると、65歳時点より42%増額します。長生riスク対策として有効ですが、受給開始までの生活費をどう賔うかが課題です。</p>
                </div>
            </div>
        </div>
    </div>
</div>