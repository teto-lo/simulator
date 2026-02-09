<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-cyan-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-blue-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '電気代計算ツール | 家電の節約シミュレーター';
        $description = '家電のワット数と使用時間から電気代を自動計算。エアコン、冷蔵庫、PCなど、あらゆる家電の電気代を一瞬で可視化し、節約プランの策定をサポート。';
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
                    'name' => '電気代計算ツール',
                    'description' => '家電のワット数と使用時間から電気代を自動計算。エアコン、冷蔵庫、PCなど、あらゆる家電の電気代を一瞬で可視化し、節約プランの策定をサポート。',
                    'url' => url()->current(),
                    'applicationCategory' => 'UtilitiesApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '電気代自動計算',
                        '消費電力算出',
                        '節約アドバイス',
                        '月間・年間コスト表示'
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
                            'name' => '電気代計算'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '正確な電力単価がわかりません',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'お住まいの地域の電力会社や契約プランによって異なりますが、検針票の「基本料金（燃料調整額含む）÷ 使用量」で算出できます。不明な場合は新電力目安の「31円/kWh」をご利用ください。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '「W（ワット）」と「kWh（キロワットアワー）」の違いは？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Wは「瞬間のパワー」を表し、kWhは「そのパワーを1時間使い続けた電気の量」を表します。電気代はkWh（電気量）に対して課金されます。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '待機電力はどれくらい電気代に影響しますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '一般的な家庭では全消費電力の約5%程度が待機電力と言われています。塵も積もれば山となるため、長期間使用しない家電はプラグを抜くのが効果的です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'エアコンはこまめに消すより「つけっぱなし」が良い？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'エアコンは起動時に最も電力を消費します。30分程度の外出であれば「つけっぱなし」の方が安くなるケースが多いですが、2時間以上離れる場合は消した方がお得です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '節電のために最も有効な買い替え家電は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '一般的に「冷蔵庫」と「照明(LED化)」です。冷蔵庫は24時間稼働するため省エネ性能の差が大きく出ます。また照明も数が多いと大きな差になります。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'ソーラーパネル導入のメリット計算に使えますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'はい。購入電力をどれだけ削減できるかの目安を計算する際に、各家電の消費電力量を把握するツールとして役立ちます。'
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
                <li class="text-gray-900 font-semibold">電気代計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg text-white">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    電気代計算ツール
                </h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">
                    家電のワット数と使用時間から電気代を自動計算。家計の節約プランを具体的に見える化。
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
                        '家電個別の月間・年間電気代を正確に把握したい',
                        '最新の省エネ家電への買い替えメリットを試算したい',
                        '電力会社の乗り換えを検討する際の比較材料に',
                        '在宅勤務・テレワークでの光熱費増加分を算出したい',
                        'エアコンの「つけっぱなし」と「こまめに消す」の比較',
                        '待機電力（主電源を切る）による節約効果を可視化'
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
                家電・電気料金の設定
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-cyan-600">
                        <span class="bg-cyan-100 text-cyan-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        消費電力（W）
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="wattage" placeholder="1000"
                            class="w-full border-2 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">W</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">例: エアコン 500〜1000W、ドライヤー 1200W</p>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-cyan-600">
                        <span class="bg-cyan-100 text-cyan-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        1日の使用時間
                    </label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="hoursPerDay" placeholder="5"
                            class="w-full border-2 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">時間</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">0.5時間（30分）などの入力も可能です</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-cyan-100 text-cyan-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">3</span>
                        電力単価（円/kWh）
                    </label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="electricityRate" placeholder="31"
                            class="w-full border-2 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">目安: 31円/kWh（全国家庭電気製品公正取引協議会）</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-cyan-100 text-cyan-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">4</span>
                        使用日数（日/月）
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="daysPerMonth" placeholder="30"
                            class="w-full border-2 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">日</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-cyan-50 rounded-3xl p-8 border-2 border-cyan-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        シミュレーション結果
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-8 shadow-xl text-white transform hover:scale-105 transition-all">
                            <p class="text-xs text-cyan-100 mb-2 font-bold tracking-widest uppercase">Monthly Cost</p>
                            <div class="flex items-baseline gap-1">
                                <span class="text-5xl font-extrabold">{{ number_format($monthlyCost) }}</span>
                                <span class="text-xl font-bold opacity-80">円</span>
                            </div>
                            <p class="text-xs text-cyan-200 mt-2 font-semibold">月間消費: {{ number_format($kwh, 1) }} kWh</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                            <p class="text-xs text-gray-400 mb-2 font-bold uppercase">Daily Cost</p>
                            <div class="flex items-baseline gap-1">
                                <span class="text-3xl font-bold text-gray-800">{{ number_format($dailyCost) }}</span>
                                <span class="text-sm font-bold text-gray-500">円</span>
                            </div>
                            <p class="text-xs text-gray-400 mt-2">1日あたり</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                            <p class="text-xs text-gray-400 mb-2 font-bold uppercase">Yearly Cost</p>
                            <div class="flex items-baseline gap-1">
                                <span class="text-3xl font-bold text-blue-600">{{ number_format($yearlyCost) }}</span>
                                <span class="text-sm font-bold text-blue-400">円</span>
                            </div>
                            <p class="text-xs text-gray-400 mt-2">年間合計支出</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-gradient-to-r from-cyan-50 to-blue-50 border border-cyan-200">
                        <p class="text-sm font-bold text-cyan-800 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            節電アドバイス: この家電の消費電力を10%削減できれば、月間 {{ number_format($monthlyCost * 0.1) }} 円、年間 {{ number_format($yearlyCost * 0.1) }} 円の節約になります。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-cyan-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">家電の「消費電力(W)」をチェック</p>
                            <p class="text-sm text-gray-600">家電の本体ラベルや取扱説明書に記載されているW数を確認して入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">1日の平均使用時間・日数を入力</p>
                            <p class="text-sm text-gray-600">1日にどれくらいその家電を使うかと、1ヶ月に何日稼働させているかを入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">電気代目安を確認</p>
                            <p class="text-sm text-gray-600">自動的に1日・月間・年間の電気代が算出されます。節約目標の参考に！</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-blue-500 rounded-full"></span>
                    主な家電の消費電力目安
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">家電製品</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">平均消費電力</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">エアコン（冷房）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">500〜1,000 W</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">ドライヤー</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">1,200 W</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">洗濯機</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">300〜500 W</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">液晶テレビ（50型）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">150 W</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">デスクトップPC</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">100〜300 W</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-indigo-500 rounded-full"></span>
                計算例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-cyan-600 mb-2">① エアコンを毎日8時間使う</p>
                    <ul class="text-sm text-gray-600 space-y-1 mb-4">
                        <li>消費電力: 600W</li>
                        <li>使用時間: 8時間</li>
                        <li>使用日数: 30日</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-2">
                        月額: 約 {{ number_format(600 / 1000 * 8 * 30 * 31) }} 円
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-blue-600 mb-2">② ドライヤーを毎日10分使う</p>
                    <ul class="text-sm text-gray-600 space-y-1 mb-4">
                        <li>消費電力: 1200W</li>
                        <li>使用時間: 0.17時間</li>
                        <li>使用日数: 30日</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-2">
                        月額: 約 {{ number_format(1200 / 1000 * 0.17 * 30 * 31) }} 円
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-indigo-600 mb-2">③ PC(ノート)を24時間つけっぱなし</p>
                    <ul class="text-sm text-gray-600 space-y-1 mb-4">
                        <li>消費電力: 30W</li>
                        <li>使用時間: 24時間</li>
                        <li>使用日数: 30日</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-2">
                        月額: 約 {{ number_format(30 / 1000 * 24 * 30 * 31) }} 円
                    </p>
                </div>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="電気代計算ツールとは？"
            icon="info"
            category-color="cyan">

            <p class="text-gray-600 leading-relaxed mb-4">
                電気代計算ツールは、家電のワット数と使用時間から電気代を自動計算する無料ツールです。
                エアコン、冷蔵庫、PCなど、あらゆる家電の電気代を一瞬で可視化し、節約プランの策定をサポートします。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                消費電力（W）×使用時間（h）×電力単価（円/kWh）で電気代を算出。1日、月間、年間のコストを同時に表示し、長期的な節約効果を把握できます。
                節電アドバイス機能で、消費電力の10%削減でどれだけ節約できるかも表示します。
            </p>

            <p class="text-gray-600 leading-relaxed">
                「この家電、月にどれくらい電気代がかかってる？」という疑問を解決。
                省エネ家電への買い替え検討や、電力会社の乗り換え比較にも活用できます。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="cyan">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="消費電力（W）とkWh"
                    category-color="cyan">
                    W（ワット）は「瞬間のパワー」、kWh（キロワットアワー）は「電気の量」を表す。1000Wを1時間使うと1kWh。
                    電気代はkWh単位で課金されるため、「何Wの家電を何時間使うか」が重要。
                    例：100Wの電球を10時間使うと1kWhの電気を消費。電力単価31円/kWhなら31円の電気代。
                </x-term-definition>

                <x-term-definition
                    term="電力単価（円/kWh）"
                    category-color="cyan">
                    1kWhあたりの電気料金。地域や電力会社、契約プランによって異なるが、25～35円程度が一般的。
                    検針票の「使用量（kWh）」と「請求額」から算出可能。燃料調整額や再エネ賦課金も含む。
                    本ツールでは新電力目安の31円/kWhをデフォルトとしているが、実際の単価を入力するとより正確。
                </x-term-definition>

                <x-term-definition
                    term="待機電力"
                    category-color="cyan">
                    家電を使っていない時でも、コンセントに挿しっぱなしで消費される電力。テレビ、エアコン、電子レンジなどが対象。
                    一般家庭では全消費電力の約5%程度。年間で数千円の節約になるため、長期不使用の家電はプラグを抜くのが効果的。
                    省エネタップ付き電源タップを使うと、主電源を切るだけで待機電力をカットできる。
                </x-term-definition>

                <x-term-definition
                    term="エアコンの電気代"
                    category-color="cyan">
                    エアコンは家電の中で最も電気代がかかる機器の一つ。冷房時は500～1000W、暖房時は1000～2000W程度。
                    起動時に最も電力を消費するため、30分程度の外出なら「つけっぱなし」がお得。2時間以上なら消す方が節約に。
                    設定温度は夏28°C、冬20°Cが目安。1°C変えるだけで約10%の節電効果。フィルター清掃も重要。
                </x-term-definition>

                <x-term-definition
                    term="省エネ家電への買い替え"
                    category-color="cyan">
                    特に「冷蔵庫」と「LED照明」は買い替え効果が高い。10年前の冷蔵庫は最新機種の約2倍の電気代。
                    LED照明は白熱電球の約1/5の消費電力で、寿命も約10倍。初期費用は高いが、長期的には大幅な節約に。
                    本ツールで現在の家電と省エネ家電の電気代を比較し、買い替えのメリットを試算できる。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="古い冷蔵庫を買い替えて年間1万円節約！"
            category-color="cyan">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        10年前の冷蔵庫を使用
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>消費電力：年間500kWh（古い機種）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>電力単価：31円/kWh</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>年間電気代：500 × 31 = 15,500円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「冷蔵庫だけでこんなに？」と驚き</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        最新省エネ冷蔵庫に買い替え
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>消費電力：年間250kWh（最新機種）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>電力単価：31円/kWh</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>年間電気代：250 × 31 = 7,750円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>年間7,750円の節約！（10年で77,500円）</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-cyan-50 rounded-xl border-l-4 border-cyan-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-cyan-700">改善のポイント：</strong>
                    冷蔵庫は24時間365日稼働するため、省エネ性能の差が電気代に大きく影響します。10年前の機種と最新機種では、消費電力が約2倍違うことも。
                    本ツールで現在の冷蔵庫の電気代を計算し、最新機種のカタログ値と比較することで、買い替えのメリットを具体的に把握できます。
                    買い替え費用が10万円でも、年間1万円節約できれだ10年で元が取れる計算に。
                    特に15年以上使用している冷蔵庫は、早めの買い替えを検討する価値があります。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => 'アスペクト比計算',
                    'url' => '/aspect-ratio',
                    'description' => '画像・動画の比率算出',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>',
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
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 正確な電力単価がわかりません</h3>
                    <p class="text-gray-600">お住まいの地域の電力会社や契約プランによって異なりますが、検針票の「基本料金（燃料調整額含む）÷ 使用量」で算出できます。不明な場合は新電力目安の「31円/kWh」をご利用ください。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「W（ワット）」と「kWh（キロワットアワー）」の違いは？</h3>
                    <p class="text-gray-600">Wは「瞬間のパワー」を表し、kWhは「そのパワーを1時間使い続けた電気の量」を表します。電気代はkWh（電気量）に対して課金されます。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 待機電力はどれくらい電気代に影響しますか？</h3>
                    <p class="text-gray-600">一般的な家庭では全消費電力の約5%程度が待機電力と言われています。塵も積もれば山となるため、長期間使用しない家電はプラグを抜くのが効果的です。</p>
                </div>
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. エアコンはこまめに消すより「つけっぱなし」が良い？</h3>
                    <p class="text-gray-600">エアコンは起動時に最も電力を消費します。30分程度の外出であれば「つけっぱなし」の方が安くなるケースが多いですが、2時間以上離れる場合は消した方がお得です。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 節電のために最も有効な買い替え家電は？</h3>
                    <p class="text-gray-600">一般的に「冷蔵庫」と「照明(LED化)」です。冷蔵庫は24時間稼働するため省エネ性能の差が大きく出ます。また照明も数が多いと大きな差になります。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ソーラーパネル導入のメリット計算に使えますか？</h3>
                    <p class="text-gray-600">はい。購入電力をどれだけ削減できるかの目安を計算する際に、各家電の消費電力量を把握するツールとして役立ちます。</p>
                </div>
            </div>
        </div>
    </div>
</div>
