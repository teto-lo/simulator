<div class="min-h-screen bg-gradient-to-br from-slate-50 via-purple-50 to-violet-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-purple-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-violet-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '損益分岐点計算シミュレーター | ビジネスの採算性を最短算出';
        $description = '固定費、変動費、販売価格から損益分岐点を自動計算。新規事業の売上目標設定や、コスト削減の効果試算、価格改定の判断に。貢献利益率も合わせて算出します。';
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
                    'name' => '損益分岐点計算シミュレーター',
                    'description' => '固定費、変動費、販売価格から損益分岐点を自動計算。新規事業の売上目標設定や、コスト削減の効果試算、価格改定の判断に。貢献利益率も合わせて算出します。',
                    'url' => url()->current(),
                    'applicationCategory' => 'BusinessApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '損益分岐点計算',
                        '貢献利益率表示',
                        '必要販売数算出',
                        '採算性判断'
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
                            'name' => '損益分岐点計算シミュレーター'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '「損益分岐点（そんえきぶんきてん）」とは何ですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '損益分岐点とは、売上高と費用の総額がちょうど等しくなり、利益が「ゼロ」になるポイントのことです。このラインを超えれば「黒字（利益）」、下回れば「赤字」となります。安全な経営のためには、実際の売上がこの損益分岐点をどれだけ上回っているか（安全余裕率）が重要です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '固定費と変動費、どちらを下げるほうが効果的ですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '状況によりますが、「固定費」を下げるとリスク耐性が強くなります。売上がゼロでも発生する費用が減るため、損益分岐点の位置そのものが大きく下がります。一方、「変動費」を下げると利益率（貢献利益率）が向上し、1個売るあたりの「黒字化への歩幅」が大きくなります。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '複数の商品を販売している場合の計算方法は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '複数の商品がある場合は、全商品の平均的な単価と、平均的な原価（変動費）を使って計算するのが一般的です。より精密に算出したい場合は、売上構成比に基づいた「加重平均貢献利益率」を算出し、それを使って固定費を割る手法を取ります。'
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
                    <a href="/" class="hover:text-purple-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">損益分岐点計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-purple-600 via-violet-600 to-purple-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
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
                    損益分岐点計算
                </h1>
                <p class="text-lg md:text-xl text-purple-100 text-center md:text-left max-w-2xl">
                    「いくら売れば赤字を脱出できるか?」を明確に数値化。ビジネスの健全性を診断。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-purple-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-purple-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '店舗の新規開店にあたって、月間の「最低売上目標」を算出するとき',
                        '商品価格を値下げ・値上げした際、利益にどう影響するか確認するとき',
                        '固定費（家賃や人件費）を削減した場合の、採算ラインの変化をシミュレート',
                        '広告費を「固定費」として追加した際、何件の成約増が必要か判断するとき',
                        '副業や新しいプロジェクトが「いつ黒字化するか」の見通しを立てるとき',
                        '現在の売上のうち、どれくらいの「余力（安全余裕）」があるか知りたいとき'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-purple-50/50 p-4 rounded-xl border border-purple-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-purple-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-purple-500 to-violet-600 rounded-full"></span>
                収支データを入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-purple-600">
                        <span class="bg-purple-100 text-purple-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        固定費 (月/円)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="fixedCost" placeholder="1000000"
                            class="w-full border-2 border-gray-100 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                    <p class="text-[10px] text-gray-400 pl-2">家賃・給与・月額システム利用料など</p>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-purple-600">
                        <span class="bg-purple-100 text-purple-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        変動費 (1個あたり)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="variableCostPerUnit" placeholder="500"
                            class="w-full border-2 border-gray-100 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                    <p class="text-[10px] text-gray-400 pl-2">商品の原価・送料・決済手数料など</p>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-purple-600">
                        <span class="bg-purple-100 text-purple-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">3</span>
                        販売価格 (1個あたり)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="sellingPrice" placeholder="1000"
                            class="w-full border-2 border-gray-100 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                    <p class="text-[10px] text-gray-400 pl-2">顧客への販売価格（税込・税別は任意）</p>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 border-2 border-purple-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        損益分岐点分析
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                            <p class="text-xs text-purple-100 mb-2 font-bold tracking-widest uppercase">Break-even Volume</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-6xl font-extrabold">{{ number_format($breakEvenUnits, 0) }}</span>
                                <span class="text-xl font-bold opacity-80 pl-2 text-purple-100">個 / 月</span>
                            </div>
                            <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm mt-4">
                                <span class="text-sm font-bold">月の売上高目安: ¥{{ number_format($breakEvenRevenue) }}</span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 flex items-center justify-between">
                                <div class="text-left">
                                    <p class="text-xs text-gray-400 mb-1 font-bold">貢献利益 (粗利 / 個)</p>
                                    <p class="text-3xl font-bold text-gray-800">¥{{ number_format($contributionMargin) }}</p>
                                </div>
                                <div class="text-right">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">利益率 {{ number_format($contributionMarginRatio, 1) }}%</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                                <h4 class="text-xs text-gray-400 mb-3 font-bold uppercase tracking-wider">採算診断メニュー</h4>
                                <ul class="text-xs space-y-2 text-gray-600 font-medium">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        固定費の回収に必要な売上件数
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        価格変更時の必要件数の変動を可視化
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-white border border-blue-200">
                        <p class="text-sm font-bold text-blue-800 flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            分析アドバイス
                        </p>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            月{{ number_format($breakEvenUnits, 0) }}個の販売で、コストと売上が均衡し「収支ゼロ」となります。利益を月20万円確保したい場合は、月間の貢献利益に20万円を足した上で計算し直すと、必要な販売目標数が明確になります。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-purple-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">固定費を入力</p>
                            <p class="text-sm text-gray-600">売上の増減にかかわらず発生する費用（家賃、正規社員の給与、サーバー代など）の月間合計額を入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">1個あたりの変動費と価格を設定</p>
                            <p class="text-sm text-gray-600">商品1件が売れるごとに発生するコスト（仕入れ原価、決済手数料、梱包費、送料など）と、その商品の単価を設定します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">採算ラインを確認</p>
                            <p class="text-sm text-gray-600">算出された「数量」が、自身の集客力で見込みが立つ範囲であれば、ビジネスプランの現実性が高いと判断できます。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-indigo-500 rounded-full"></span>
                    費用の分類ガイドライン
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-3 px-2 text-left font-bold text-gray-700">分類</th>
                                <th class="py-3 px-2 text-left font-bold text-gray-700">具体例</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 uppercase tracking-tighter">
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold text-purple-600">固定費</td>
                                <td class="py-3 px-2 text-left text-gray-600">店舗家賃、管理職の給与、リース代、固定資産税、月額ドメイン代、広告費(月定額の場合)</td>
                            </tr>
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold text-indigo-600">変動費</td>
                                <td class="py-3 px-2 text-left text-gray-600">商品仕入原価、原材料費、外注梱包費、送料、決済システム手数料(3~5%)、販売インセンティブ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">※費用をどちらに入れるか迷う場合は、「売上がゼロでも発生するかどうか」で判断するのが一般的です。</p>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                典型的なビジネス別シミュレーション例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-blue-400 border-t-4">
                    <p class="font-bold text-purple-600 mb-3 text-sm">① 飲食店 (カフェ)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>固定費: 120万円/月</li>
                        <li>平均原価: 300円/杯</li>
                        <li>平均客単価: 800円</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-3">
                         2,400 <span class="text-xs font-normal">個/月で損益分岐</span>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-indigo-400 border-t-4">
                    <p class="font-bold text-indigo-600 mb-3 text-sm">② ネットショップ (物販)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>固定費: 15万円/月</li>
                        <li>平均仕入+送料: 2,500円</li>
                        <li>販売価格: 5,000円</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-3">
                         60 <span class="text-xs font-normal">個/月で損益分岐</span>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-purple-400 border-t-4">
                    <p class="font-bold text-purple-600 mb-3 text-sm">③ フリーランス (制作)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>私生活含む固定費: 30万円</li>
                        <li>機材・外注費: 5,000円</li>
                        <li>案件単価: 100,000円</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-3">
                         3.16 <span class="text-xs font-normal">件/月で損益分岐</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="損益分岐点計算シミュレーターとは？"
            icon="info"
            category-color="purple">

            <p class="text-gray-600 leading-relaxed mb-4">
                損益分岐点計算シミュレーターは、固定費、変動費、販売価格から、「いくら売れば黒字化するか」を精密に算出する無料ツールです。
                損益分岐点とは、売上と費用がちょうど釣り合うポイント。このラインを超えれば利益、下回れば赤字となります。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                計算式は「固定費 ÷ (販売価格 - 変動費)」。例えば、固定費100万円、商品価格1,000円、原価500円なら、
                月間で2,000個販売で損益分岐点に達します。この数値が現実的かどうかで、ビジネスの採算性を判断できます。
            </p>

            <p class="text-gray-600 leading-relaxed">
                新規開業、店舗出店、新商品発売、価格改定、コスト削減など、あらゆるビジネス意思決定の基礎となる指標です。
                「いくら売れば赤字を脱出できるか？」を明確に数値化し、ビジネスの健全性を診断します。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="purple">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="固定費（Fixed Cost）"
                    category-color="purple">
                    売上の増減に関わらず、一定期間必ず発生する費用。家賃、正社員の給与、リース代、保険料など。
                    売上がゼロでも支払う必要があるため、固定費が高いほど経営リスクが大きい。
                    損益分岐点を下げるには、固定費の削減が最も効果的。
                </x-term-definition>

                <x-term-definition
                    term="変動費（Variable Cost）"
                    category-color="purple">
                    売上に比例して増減する費用。商品の仕入原価、材料費、送料、決済手数料など。
                    1個売れるごとに発生するコスト。変動費を下げると、貢献利益率が向上し、少ない販売数でも黒字化できる。
                    仕入れ先の見直しや業務効率化で削減可能。
                </x-term-definition>

                <x-term-definition
                    term="貢献利益（Contribution Margin）"
                    category-color="purple">
                    売上から変動費だけを引いた利益。「売上 - 変動費」で算出。粗利に近い概念。
                    この利益が積み重なって固定費を回収し、固定費を超えた分が純利益になる。
                    貢献利益率（貢献利益÷売上）が高いほど、少ない販売数で黒字化できる。
                </x-term-definition>

                <x-term-definition
                    term="安全余裕率"
                    category-color="purple">
                    現在の売上が損益分岐点をどれだけ上回っているかを示す指標。計算式は「(売上 - 損益分岐点売上) ÷ 売上 × 100」。
                    安全余裕率が高いほど、景気変動や予期せぬコスト増加に対する耐性が強い。
                    一般的に20%以上あれば安全、10%以下は危険水域とされる。
                </x-term-definition>

                <x-term-definition
                    term="損益分岐点比率"
                    category-color="purple">
                    売上高に対する損益分岐点売上高の割合。計算式は「損益分岐点売上 ÷ 売上 × 100」。
                    80%以下で優良企業、90%以上で危険水域と言われる。比率が低いほど経営が安定。
                    固定費削減や利益率向上で、この比率を下げることが経営改善の目標。
                </x-term-definition>
                
                <x-term-definition
                    term="限界利益率"
                    category-color="purple">
                    販売価格から変動費を引いた「貢献利益」の、販売価格に対する割合。計算式は「(販売価格 - 変動費) ÷ 販売価格 × 100」。
                    例えば価格1,000円、原価600円なら限界利益率は40%。この比率が高いほど、少ない販売数で固定費を回収できる。
                    値下げや原価上昇で低下するため、常に監視が必要。
                </x-term-definition>
                
                <x-term-definition
                    term="粗利益（粗利）"
                    category-color="purple">
                    売上高から売上原価を引いた利益。貢献利益とほぼ同じ意味だが、会計用語としては粗利益、
                    管理会計用語としては貢献利益と呼ばれることが多い。粗利率が高いほど、少ない販売数で固定費をカバーできる。
                    小売業では30～40%、飲食店は60～70%が目安とされる。
                </x-term-definition>
                
                <x-term-definition
                    term="キャッシュフロー計算書"
                    category-color="purple">
                    現金の入りと出を記録した資料。損益計算書は「利益」を計算するが、キャッシュフロー計算書は「現金」を追跡。
                    損益分岐点を超えても、売上代金の回収が遅れれば資金ショートになるリスクがある。
                    「黒字でも現金がない」状態を防ぐため、損益とキャッシュフロー両方を管理することが重要。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="固定費削減で損益分岐点が40%減少、経営安定化"
            category-color="purple">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        高額な固定費で経営圧迫
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>固定費：月150万円（家賃》人件費）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>商品単価：5,000円、原価：2,000円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>損益分岐点：500個/月（売上250万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>実際売上：450個/月で毎月50個不足（赤字）</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        オフィス移転で固定費削減
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>固定費：月90万円（家賃40%削減）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>商品単価：5,000円、原価：2,000円（同じ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>損益分岐点：300個/月（売上150万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>実際売上：450個/月で150個の余裕（黒字）</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-purple-50 rounded-xl border-l-4 border-purple-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-purple-700">改善のポイント：</strong>
                    固定費を月60万円削減したことで、損益分岐点が500個から300個に低下（40%減）。
                    同じ売上でも赤字から黒字に転換しました。オフィスを郊外の安い物件に移転し、家賃を大幅に削減。
                    固定費は「売上がゼロでも発生する」ため、削減すると経営リスクが大幅に低下します。
                    損益分岐点計算で「固定費削減のインパクト」を可視化し、経営判断に活用しましょう。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース2: 価格引き上げで販売数目標が30%減"
            category-color="purple">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        低価格で販売数目標が高すぎ
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>固定費：月80万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>販売価格：3,000円、原価：1,500円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>損益分岐点：533個/月</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>目標達成が困難で売り急ぎ、在庫圧迫</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        適正価格で目標を現実的に
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>固定費：月80万円（同じ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>販売価格：4,000円、原価：1,500円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>損益分岐点：320個/月（40%減）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>現実的な目標で無理なく達成！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-purple-50 rounded-xl border-l-4 border-purple-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-purple-700">改善のポイント：</strong>
                    価格を1,000円引き上げたことで、貢献利益が1,500円から2,500円に増加。その結果、損益分岐点が533個から320個に低下（40%減）。
                    「安く売って数を稼ぐ」より、「適正価格で少ない数を売る」方が、経営が安定します。
                    損益分岐点計算で「価格戦略のインパクト」を可視化しましょう。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース3: 変動費削減で利益率向上、黒字化加速"
            category-color="purple">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        高い仕入れ原価で苦戦
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>固定費：月100万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>販売価格：10,000円、原価：7,000円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>貢献利益：3,000円/個（利益率30%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>損益分岐点：333個/月</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        仕入れ先変更で原価削減
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>固定費：月100万円（同じ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>販売価格：10,000円、原価：5,500円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>貢献利益：4,500円/個（利益率45%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>損益分岐点：222個/月（33%減）</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-purple-50 rounded-xl border-l-4 border-purple-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-purple-700">改善のポイント：</strong>
                    仕入れ先を見直し、原価を7,000円から5,500円に削減。1個あたりの貢献利益が3,000円から4,500円に増加し、
                    損益分岐点が333個から222個に低下（33%減）。変動費削減は「1個売るごとの利益」を増やすため、
                    黒字化へのスピードが加速します。仕入れ先の相見積もりや業務効率化で、変動費削減に取り組みましょう。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => 'ROI計算シミュレーター',
                    'url' => '/roi-calculator',
                    'description' => '投資対効果を数値化',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => '広告予算シミュレーター',
                    'url' => '/ad-cost',
                    'description' => '広告費の費用対効果を試算',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => 'ローン返済計算',
                    'url' => '/loan-repayment',
                    'description' => '返済計画をシミュレーション',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
                ],
            ];
        @endphp

        <x-related-tools :tools="$relatedTools" category-color="purple" />

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
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「損益分岐点（そんえきぶんきてん）」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">損益分岐点とは、売上高と費用の総額がちょうど等しくなり、利益が「ゼロ」になるポイントのことです。このラインを超えれば「黒字（利益）」、下回れば「赤字」となります。安全な経営のためには、実際の売上がこの損益分岐点をどれだけ上回っているか（安全余裕率）が重要です。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 固定費と変動費、どちらを下げるほうが効果的ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">状況によりますが、「固定費」を下げるとリスク耐性が強くなります。売上がゼロでも発生する費用が減るため、損益分岐点の位置そのものが大きく下がります。一方、「変動費」を下げると利益率（貢献利益率）が向上し、1個売るあたりの「黒字化への歩幅」が大きくなります。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 複数の商品を販売している場合の計算方法は？</h3>
                    <p class="text-gray-600 leading-relaxed">複数の商品がある場合は、全商品の平均的な単価と、平均的な原価（変動費）を使って計算するのが一般的です。より精密に算出したい場合は、売上構成比に基づいた「加重平均貢献利益率」を算出し、それを使って固定費を割る手法を取ります。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「貢献利益（こうけんりえき）」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">売上から変動費だけを引いた利益のことです（いわゆる粗利に近い概念）。なぜ「貢献」かと言うと、この利益が積み重なることで、まず「固定費の支払いに貢献」し、固定費を全額返し終わった後はそのまま「会社の純粋な利益に貢献」するからです。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 値下げを検討中ですが、損益分岐点計算はどう役立ちますか？</h3>
                    <p class="text-gray-600 leading-relaxed">値下げをすると、1個あたりの貢献利益が減るため、固定費を回収するために「より多くの販売数」が必要になります。本シミュレーターで「値下げ後の価格」を入力し、以前の数量よりどれだけ増やす必要があるか（目標販売数の増加分）を事前にシミュレーションし、達成可能かを判断してください。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 損益分岐点比率はどれくらいを目指すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的に、現役の売上高に対する損益分岐点売上高の比率（損益分岐点比率）が80%以下であれば優良企業、90%を超えると危険水域と言われます。景気変動への耐性をつけるために、まずは比率を下げ、安全余裕（100% - 比率）を広げることを目指しましょう。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「安全余裕率」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">現在の売上が損益分岐点をどれだけ上回っているかを示す指標です。計算式は「(売上 - 損益分岐点売上) ÷ 売上 × 100」。例えば売上1,000万円、損益分岐点800万円なら安全余裕率20%。この比率が高いほど、景気変動や予期せぬコスト増加に対する耐性が強いです。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. サブスクリプションビジネスの損益分岐点は？</h3>
                    <p class="text-gray-600 leading-relaxed">サブスクリプションビジネスの場合、「月額料金 - 顧客あたりの変動費」を貢献利益とし、固定費をそれで割ることで「必要顧客数」が算出されます。ただし、解約率（チャーンレート）を考慮し、「毎月何人の新規顧客が必要か」も合わせて計算する必要があります。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 損益分岐点を下げるための優先順位は？</h3>
                    <p class="text-gray-600 leading-relaxed">優先順位は「①固定費削減」「②変動費削減」「③価格引き上げ」です。固定費削減はリスク耐性を直接高め、変動費削減は利益率を向上させます。価格引き上げは効果的ですが、顧客離れのリスクがあるため最後の手段とします。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「限界利益率」と「粗利率」の違いは？</h3>
                    <p class="text-gray-600 leading-relaxed">ほぼ同じ意味です。限界利益率は管理会計用語、粗利率は会計用語として使われます。どちらも「販売価格 - 変動費」を販売価格で割った値で、「1個売るごとに固定費回収に貢献できる割合」を示します。この比率が高いほど、少ない販売数で黒字化できます。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. キャッシュフローと損益分岐点の関係は？</h3>
                    <p class="text-gray-600 leading-relaxed">損益分岐点を超えても、売上代金の回収が遅れれば現金不足になります。「黒字でも現金がない」状態を防ぐため、損益計算とキャッシュフロー計算の両方を管理することが重要です。特にBtoBビジネスでは、支払サイトが長いため注意が必要です。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 新規事業で損益分岐点を使うタイミングは？</h3>
                    <p class="text-gray-600 leading-relaxed">事業計画の段階で必ず計算しましょう。「月間何個売れば黒字になるか」を事前に把握し、その数字が現実的かどうかで事業の採算性を判断します。「月間1,000個必要」とわかれば、それが達成可能かを検討できます。不可能なら、事業計画を見直す必要があります。</p>
                </div>
            </div>
        </div>
    </div>
</div>