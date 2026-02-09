<div class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-teal-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '複利計算シミュレーター | 新NISA・iDeCoの将来価値を試算';
        $description = '「複利は人類最大の発明」。元本・積立額・利率・期間から将来の資産額を精密にシミュレーション。長期投資の効果をビジュアルで把握し、ライフプランニングを具体化。';
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
                    'name' => '複利計算シミュレーター',
                    'description' => '「複利は人類最大の発明」。元本・積立額・利率・期間から将来の資産額を精密にシミュレーション。長期投資の効果をビジュアルで把握し、ライフプランニングを具体化。',
                    'url' => url()->current(),
                    'applicationCategory' => 'FinanceApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '複利効果の可視化',
                        '年次資産推移表示',
                        '積立投資シミュレーション',
                        '72の法則表示'
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
                            'name' => '複利計算シミュレーター'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '「複利（ふくり）」とは具体的に何ですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '複利とは、運用で得た利息や配当金を、さらに元本に組み入れて運用し続けることを指します。最初は小さな利益ですが、雪だるま式に利息が利息を生んでいくため、時間が経つほど資産の増加スピードが跳ね上がります。アインシュタインが「人類最大の発明」と呼んだことでも有名です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '年利5%というのはどの程度のレベルですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '株式インデックス投資（全世界株式や全米株式 S&P500など）の過去数十年の平均リターンが年5〜7%程度とされています。もちろん年によってマイナスになるリスクもありますが、15年以上の長期保有を前提とした場合の現実的な目安としてよく使われる数値です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '新NISAのシミュレートで注意すべき点は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '新NISAでは「配当金や売却益にかかる税金(約20%)」が非課税になります。本シミュレーターの計算結果をほぼそのまま手取りとして受け取れるイメージになります。ただし、投資信託の信託報酬（手数料）などは差し引かれるため、それを考慮して年利0.1〜0.2%低めに見積もるとより正確です。'
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
                    <a href="/" class="hover:text-emerald-200 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">複利計算シミュレーター</li>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    複利計算シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-emerald-100 text-center md:text-left max-w-2xl">
                    複利の力を味方につける。あなたの資産が時間と共にどう育つか、詳細に予測。
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
                        '新NISA（つみたて投資枠）での30年後の資産額予測',
                        'iDeCo（個人型確定拠出年金）による老後資金の積立シミュレーション',
                        'お子様の大学入学時に必要な「学資資金」の必要積立額の検討',
                        '「単利」と「複利」でどれくらい大きな差が出るかの視覚的な比較',
                        '早期リタイア（FIRE）達成に向けた、目標資産への到達時期予測',
                        '銀行の定期預金と投資信託での運用益の決定的な違いの確認'
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
                条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">初期投資 (元本)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="principal" placeholder="1000000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">毎月の積立額</label>
                    <div class="relative">
                        <input type="number" wire:model.live="monthlyDeposit" placeholder="30000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定年利 (%)</label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="annualRate" placeholder="5"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">%</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">運用期間</label>
                    <div class="relative">
                        <input type="number" wire:model.live="years" placeholder="20"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">年</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-emerald-50 rounded-3xl p-8 border-2 border-emerald-100 shadow-inner">
                <div class="relative z-10 font-sans">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        将来価格シミュレーション
                    </h3>

                    <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-emerald-100 mb-2 font-bold tracking-widest uppercase">Total Future Value</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($futureValue) }}</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm">
                            <span class="text-sm font-bold">{{ $years }}年後の予測資産合計</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">積立元本 合計</p>
                            <p class="text-2xl font-bold text-gray-800">¥{{ number_format($totalDeposit) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center border-b-emerald-400 border-b-4">
                            <p class="text-xs text-emerald-500 mb-1 font-bold">合計運用益 (複利効果)</p>
                            <p class="text-2xl font-bold text-emerald-600">¥{{ number_format($totalInterest) }}</p>
                        </div>
                    </div>

                    @if (count($yearlyData) > 0)
                        <div class="bg-white/80 rounded-2xl p-6 shadow-inner border border-emerald-100 overflow-hidden">
                            <h4 class="font-bold text-gray-800 mb-4 flex items-center justify-between">
                                <span>資産の推移表</span>
                                <span class="text-xs font-normal text-gray-400 tabular-nums">単位: 円</span>
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm tabular-nums">
                                    <thead class="bg-emerald-50">
                                        <tr>
                                            <th class="py-3 px-4 text-left font-bold text-gray-600">経過年</th>
                                            <th class="py-3 px-4 text-right font-bold text-gray-600">資産合計</th>
                                            <th class="py-3 px-4 text-right font-bold text-gray-600">運用益</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        @foreach ($yearlyData as $data)
                                            <tr class="hover:bg-emerald-50/50 transition-colors">
                                                <td class="py-3 px-4 font-bold text-gray-500">{{ $data['year'] }}年後</td>
                                                <td class="py-3 px-4 text-right font-bold text-gray-800">¥{{ number_format($data['value']) }}</td>
                                                <td class="py-3 px-4 text-right font-medium text-emerald-600">+¥{{ number_format($data['interest']) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
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
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">現状の元本と利率を設定</p>
                            <p class="text-sm text-gray-600">手元にある資金と、投資信託や株式等の「想定リターン」を入力します。全世界株式なら年4〜6%程度が目安です。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">月々の積立継続力を加味する</p>
                            <p class="text-sm text-gray-600">毎月「いくらなら無理なく投資に回せるか」を設定。時間の経過とともに積立金にも複利がかかります。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">長期スパンでの成長を可視化</p>
                            <p class="text-sm text-gray-600">「10年ならこれくらい、30年ならこれほど増える」という推移を確認し、投資を継続するモチベーションにしましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    72の法則 (資産を2倍にする期間)
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">年利率</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">2倍にかかる年数</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 uppercase font-mono">
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">1.0 %</td>
                                <td class="py-3 px-2 text-right">72 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">3.0 %</td>
                                <td class="py-3 px-2 text-right">24 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50 bg-emerald-50/30 transition-colors">
                                <td class="py-3 px-2 font-extrabold text-emerald-600">5.0 %</td>
                                <td class="py-3 px-2 text-right font-extrabold text-emerald-600">約 14.4 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">7.0 %</td>
                                <td class="py-3 px-2 text-right">約 10.3 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">10.0 %</td>
                                <td class="py-3 px-2 text-right">7.2 年</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4">72を利率（%）で割ることで、複利によって元本を2倍にするために必要な年数を知ることができます。</p>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                よくある投資信託・FIREシミュレーション例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-emerald-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-emerald-600 mb-3">① 老後2,000万円形成</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>毎月積立: 3万円</li>
                        <li>期待利回り: 5%</li>
                        <li>期間: 30年</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        将来合計: ¥25,000,000+
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-orange-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-teal-600 mb-3">② ジュニアNISA/学資代わり</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>一括元本: 100万円</li>
                        <li>毎月積立: 1万円</li>
                        <li>期待利回り: 4% (15年)</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        将来合計: ¥4,200,000+
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-red-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-red-600 mb-3">③ 積極運用によるFIRE準備</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>一括元本: 500万円</li>
                        <li>毎月積立: 10万円</li>
                        <li>期待利回り: 7% (15年)</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        将来合計: ¥45,000,000+
                    </div>
                </div>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="複利計算シミュレーターとは？"
            icon="info"
            category-color="emerald">

            <p class="text-gray-600 leading-relaxed mb-4">
                複利計算シミュレーターは、元本、毎月の積立額、想定年利、運用期間から、将来の資産額を精密に試算する無料ツールです。
                「複利は人類最大の発明」とアインシュタインが評したとされる、時間を味方につける資産形成の最強武器です。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                複利とは、運用で得た利益を元本に組み入れ、その元本にさらに利息がつく仕組み。「利息が利息を生む」雪だるま式の効果で、
                時間が経つほど資産の増加スピードが加速します。例えば、毎月3万円を5%で30年積み立てると、
                元本1,080万円が約2,500万円に成長します。
            </p>

            <p class="text-gray-600 leading-relaxed">
                このツールでは、新NISA、iDeCo、学資資金、老後資金など、あらゆる長期投資のシミュレーションが可能です。
                年次の資産推移表で複利の効果を可視化し、「今の積立ペースで目標に届くか？」を数値で把握できます。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="複利（Compound Interest）"
                    category-color="emerald">
                    運用で得た利益を元本に加えて再投資することで、「利息が利息を生む」効果。
                    時間が経つほど資産の増加スピードが加速するため、長期投資において最も重要な概念。
                    単利（元本のみに利息）と比べると、30年後の資産に数百万円の差が生まれる。
                </x-term-definition>

                <x-term-definition
                    term="72の法則"
                    category-color="emerald">
                    資産を2倍にするのに必要な年数を簡単に計算する公式「72 ÷ 年利率（%）」。
                    例えば年劗5%なら72÷5=14.4年で資産が2倍になる計算。
                    複利のパワーを直感的に理解するための便利な指標。高利率ほど2倍になるスピードが速い。
                </x-term-definition>

                <x-term-definition
                    term="元本（Principal）"
                    category-color="emerald">
                    投資の基礎となる最初の資金。積立投資の場合は、毎月の積立額も元本に加わり、それぞれに複利がかかる。
                    元本が大きいほど、また積立期間が長いほど、複利の効果が大きくなる。
                    「早く始めること」が複利運用の鉄則とされる理由。
                </x-term-definition>

                <x-term-definition
                    term="想定年利（期待リターン）"
                    category-color="emerald">
                    投資から1年間で得られると予想される利益率。全世界株式インデックスの過去平均は年5〜7%程度。
                    高いリターンを設定するほど将来資産は大きくなるが、リスクも高まる。
                    保守的なシミュレーションなら3〜4%、現実的な目標なら5%程度が目安。
                </x-term-definition>

                <x-term-definition
                    term="インデックス投資"
                    category-color="emerald">
                    日経平均やS&P500などの市場指数に連動する投資信託を購入する投資手法。
                    個別株を選ぶ必要がなく、低コストで分散投資ができるため、複利運用の王道戦略。
                    新NISAのつみたて投資枠では、インデックスファンドが主力商品となっている。
                </x-term-definition>
                
                <x-term-definition
                    term="単利（Simple Interest）"
                    category-color="emerald">
                    元本にのみ利息がつく仕組み。複利と違い、利息は再投資されないため、資産の増加は直線的。
                    例えば100万円を年利5%の単利で30年運用すると250万円だが、複利なら432万円になる。
                    銀行の普通預金は実質的に単利に近いため、複利運用との差が長期で大きく開く。
                </x-term-definition>
                
                <x-term-definition
                    term="運用益（Investment Gain）"
                    category-color="emerald">
                    投資によって得られた利益の総額。「将来資産 - 元本総額」で算出される。
                    例えば元本1,080万円が2,500万円になった場合、運用益は1,420万円。
                    新NISAではこの運用益に税金（通常約20%）がかからないため、複利効果を最大限に活用できる。
                </x-term-definition>
                
                <x-term-definition
                    term="ドルコスト平均法"
                    category-color="emerald">
                    毎月一定額を積み立てることで、価格変動リスクを平準化する投資手法。
                    価格が高い時は少なく、低い時は多く購入できるため、平均取得単価が下がる。
                    複利運用と組み合わせることで、「時間を味方につける」資産形成が可能になる。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="25歳から毎月30年積立てで老後資金2,500万円達成"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        銀行預金のみ（年劗0.001%）
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>毎月3万円を2年間積立（元本1,080万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>30年後の資産：約1,080万円（ほぼ元本のみ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>運用益：約0.3万円（利息ほぼゼロ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>老後2,000万円問題に対して約920万円不足</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        新NISAで全世界株式投資（年5%）
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>毎月3万円を2年間積立（元本1,080万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>30年後の資産：約2,497万円（複利効果）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>運用益：約1,417万円（元本の1.3倍）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>老後2,000万円を達成、さらに500万円の余裕</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    同じ月月3万円の積立でも、「銀行預金」と「投資信託（複利運用）」では30年後に約1,400万円以上の差が生まれました。
                    複利の効果は時間軸の後半で急激に現れるため、「早く始めること」が最大のポイント。
                    25歳から始めれば、55歳で老後資金を達成できます。新NISAなら運用益に税金がかからないため、
                    この試算をほぼそのまま手取りとして受け取れるのも大きなメリットです。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース2: 40代からの遅いスタートでも複利で巻き返す"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        40歳からの開始で不安
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「もう遅いから」と諦めていた</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>銀行預金のみ（金利0.001%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>60歳まで月20年、月20年間、月月5万円積立 = 1,200万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>老後資金が大幅に不足</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        40歳から月20年間複利運用
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>「今からでも間に合う」と決意</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>新NISAで月20年間、月20年間、月月5万円積立（年劗5%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>60歳時点で約2,055万円（運用益855万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>老後2,000万円を達成！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    「40歳からでは遅い」と諦める必要はありません。60歳までの20年間でも、複利効果で元本の1.7倍以上に増やせます。
                    「思い立ったが吉日」で、今すぐ始めることが最も重要。また、新NISAなら運用益が非課税なので、
                    通常の課税口座よりもさらに有利です。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース3: 子供の大学資金を複利で準備"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        定期預金で積立
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>子供誕生時に一括100万円預入</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>毎月1万円を定期預金で積立（金利0.01%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>18年後：約316万円（ほぼ元本のみ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>大学資金が不足</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        新NISAで複利運用
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>子供誕生時に一括100万円投資</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>毎月1万円を新NISAで積立（年劗5%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>18年後：約450万円（運用益134万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>大学資金を余裕を持って確保！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    定期預金と複利運用では、18年後に約134万円の差が生まれます。新NISAなら運用益が非課税なので、
                    この134万円をまるごと受け取れます。「いつでも引き出せる」新NISAの流動性の高さも、
                    教育資金のような中期目標に最適です。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => 'NISA・iDeCoシミュレーター',
                    'url' => '/nisa-ideco',
                    'description' => '新NISAとiDeCoの同時シミュレーション',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>',
                ],
                [
                    'name' => '退職金計算',
                    'url' => '/retirement-planning',
                    'description' => '老後資金の必要額を詳細に試算',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => 'ローン返済計算',
                    'url' => '/loan-repayment',
                    'description' => '住宅ローンの返済プランをシミュレーション',
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
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「複利（ふくり）」とは具体的に何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">複利とは、運用で得た利息や配当金を、さらに元本に組み入れて運用し続けることを指します。最初は小さな利益ですが、雪だるま式に利息が利息を生んでいくため、時間が経つほど資産の増加スピードが跳ね上がります。アインシュタインが「人類最大の発明」と呼んだことでも有名です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 年利5%というのはどの程度のレベルですか？</h3>
                    <p class="text-gray-600 leading-relaxed">株式インデックス投資（全世界株式や全米株式 S&P500など）の過去数十年の平均リターンが年5〜7%程度とされています。もちろん年によってマイナスになるリスクもありますが、15年以上の長期保有を前提とした場合の現実的な目安としてよく使われる数値です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 新NISAのシミュレートで注意すべき点は？</h3>
                    <p class="text-gray-600 leading-relaxed">新NISAでは「配当金や売却益にかかる税金(約20%)」が非課税になります。本シミュレーターの計算結果をほぼそのまま手取りとして受け取れるイメージになります。ただし、投資信託の信託報酬（手数料）などは差し引かれるため、それを考慮して年利を0.1〜0.2%低めに見積もるとより正確です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 下落した時（暴落時）はどう考えればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">シミュレーションは右肩上がりを前提としていますが、現実はジグザグに進みます。大切なのは、複利の恩恵を最大化するために「暴落時も積立を止めない」ことです。むしろ安く多く買えるチャンスと捉え、長期的な合計資産額を追う姿勢が、シミュレーション通りの結果に近づく秘訣です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 複利計算の頻度（年次・月次）で差は出ますか？</h3>
                    <p class="text-gray-600 leading-relaxed">結論、頻度が多い（月次）ほうが、わずかに資産は増えます。なぜなら、利息を再投資するタイミングが早くなるからです。本シミュレーターでは、実際の積立投資に近い「月次複利」での計算にも対応しています。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 複利運用の成果を最大にする一番のコツは？</h3>
                    <p class="text-gray-600 leading-relaxed">「とにかく早く始めること」と「長く続けること」です。複利の効果は時間軸の後半で急激に現れます。たとえ少額でも、複利の恩恵を受ける期間（運用年数）を1年でも長く確保することが、投資金額そのもの以上に大きな成果をもたらします。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「単利」と「複利」で、実際どれくらい差が出ますか？</h3>
                    <p class="text-gray-600 leading-relaxed">100万円を年劗5%で30年運用した場合、単利なら250万円、複利なら432万円になります。差額は182万円。これが「利息が利息を生む」複利のパワーです。長期投資では、複利一択です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 毎月の積立額を増やすべきか、運用年数を延ばすべきか？</h3>
                    <p class="text-gray-600 leading-relaxed">複利効果を最大化するには「運用年数を延ばす」方が効果的です。例えば月3万円を20年積立より、月2万円を30年積立の方が将来資産は大きくなります。「時間」こそが複利の最大の味方です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 複利効果が「雪だるま式」になるのはいつ頃からですか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的に「15～20年目以降」から加速度的に増え始めます。72の法則で言うと、年劗5%なら14.4年で資産が2倍になり、その後はさらに加速します。「最初の10年は地味、後半で爆発」が複利の特徴です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 新NISAと複利運用の相性が良い理由は？</h3>
                    <p class="text-gray-600 leading-relaxed">新NISAは「運用益が非課税」なので、複利効果が減らされません。通常の課税口座では、利益に約20%の税金がかかるため、再投資される元本が減り、複利効果が低下します。新NISAなら、シミュレーション通りの複利効果をフルで享受できます。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 複利計算で「インフレ」は考慮すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、考慮すべきです。例えばインフレ率が年2%なら、実質的なリターンは「名目リターン - インフレ率」で計算します。年劗5%の運用でも、インフレ2%を引けば実質リターンは3%。銀行預金（ほぼ0%）ではインフレ負けして、実質的に資産が減ります。</p>
                </div>
            </div>
        </div>
    </div>
</div>