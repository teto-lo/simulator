<div class="min-h-screen bg-gradient-to-br from-slate-50 via-green-50 to-emerald-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-green-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '運動消費カロリー計算ツール | 効率的なダイエット計画に';
        $description = 'ジョギング、水泳、掃除など、様々な活動の消費カロリーをMETs値を用いて精密計算。体重と運動時間から、脂肪燃焼量や食品への換算も自動算出。';
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
                    'name' => '運動消費カロリー計算ツール',
                    'description' => 'ジョギング、水泳、掃除など、様々な活動の消費カロリーをMETs値を用いて精密計算。体重と運動時間から、脂肪燃焼量や食品への換算も自動算出。',
                    'url' => url()->current(),
                    'applicationCategory' => 'HealthApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        'METs値による消費カロリー計算',
                        '脂肪燃焼量算出',
                        '食品換算表示',
                        '多種類の運動対応'
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
                            'name' => '運動消費カロリー計算'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '「METs（メッツ）」とは何ですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'METs（Metabolic Equivalents）は、運動の強度を表す単位です。何もせず安静にしている状態を「1」とし、その運動が何倍のエネルギーを消費するかを示します。例えば3メッツの運動は安静時の3倍のエネルギーを消費します。厚生労働省の健康指針でも、この数値をベースにした活動が推奨されています。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'スマートウォッチの数値とズレがあるのはなぜですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'スマートウォッチは心拍数や加速度センサーを組み合わせて、「個人差（心肺能力）」を加味して算出します。一方、本ツールの計算式は厚生労働省が定義する標準的なMETsに基づいた統計的な予測値です。どちらかが間違っているわけではなく、あくまで目安として捉えてください。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '脂肪を燃やすのに「20分以上の運動」が必要って本当？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'かつてはそう言われていましたが、現在は「10分の運動を2回行っても、連続で20分行ったのと同様の脂肪燃焼効果がある」ことがわかっています。合計の消費カロリーが重要。小まめに動くこともダイエットには非常に有効です。'
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
                <li class="text-gray-900 font-semibold">運動消費カロリー計算</li>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    運動消費カロリー計算
                </h1>
                <p class="text-lg md:text-xl text-green-100 text-center md:text-left max-w-2xl">
                    「あの運動でどれくらい痩せる?」を数値化。日常生活も立派なエクササイズ。
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
                        '今日のウォーキングで「おにぎり何個分」消費したか知りたいとき',
                        '週末の登山やランニングが、ダイエットにどれだけ貢献したか算出したい',
                        '「掃除や通勤」などの家事・移動を、運動として捉えてモチベーションを上げたい',
                        '1kg痩せるために、毎日あと何分のジョギングが必要か計画を立てるとき',
                        '水泳やHIITなど、強度の高い運動の凄さを具体的な数値で実感したい',
                        'スマートウォッチを持っていないとき、大まかな消費カロリーを把握したい'
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
                活動データを入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">体重 (kg)</label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="weight" placeholder="65"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">kg</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">運動の種類</label>
                    <div class="relative">
                        <select wire:model.live="exercise"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none appearance-none">
                            @foreach($metValues as $key => $value)
                                <option value="{{ $key }}">{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="space-y-3 group text-center">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">実施時間 (分)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="duration" placeholder="30"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">分</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-green-50 rounded-3xl p-8 border-2 border-green-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        消費カロリー計算結果
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all flex flex-col justify-center">
                            <p class="text-xs text-green-100 mb-2 font-bold tracking-widest uppercase">Calories Burned</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-6xl font-extrabold">{{ number_format($caloriesBurned, 0) }}</span>
                                <span class="text-xl font-bold opacity-80 pl-2">kcal</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center border-b-orange-400 border-b-4">
                            <p class="text-xs text-orange-500 mb-1 font-bold">脂肪燃焼量</p>
                            <p class="text-3xl font-bold text-gray-800">{{ number_format($fatBurned, 1) }} <span class="text-sm font-bold text-gray-400 pl-1">g</span></p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center border-b-blue-400 border-b-4">
                            <p class="text-xs text-blue-500 mb-1 font-bold">徒歩換算</p>
                            <p class="text-3xl font-bold text-gray-800">{{ number_format($dailyWalkEquivalent, 0) }} <span class="text-sm font-bold text-gray-400 pl-1">分</span></p>
                        </div>
                    </div>

                    {{-- 食品換算 --}}
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                        <h4 class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-4">この消費量は「食品」で例えると？</h4>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍚</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">ご飯 (1杯)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 250, 1) }} 杯分</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍫</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">チョコ (1枚)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 500, 1) }} 枚分</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍺</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">ビール (中ジョッキ)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 200, 1) }} 杯分</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍩</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">ドーナツ (1個)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 300, 1) }} 個分</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-4 rounded-xl bg-green-100/50 text-green-800 text-xs font-medium leading-relaxed">
                        <p>※1kgの脂肪を燃焼させるには約7,200kcalが必要です。本日の運動を毎日{{ 7200 / ($caloriesBurned > 0 ? $caloriesBurned : 1) < 365 ? number_format(7200 / ($caloriesBurned > 0 ? $caloriesBurned : 1), 0) . '日間' : '数年間' }}続けると、脂肪が1kg減る計算になります。</p>
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
                            <p class="font-bold text-gray-800">体重を入力</p>
                            <p class="text-sm text-gray-600">消費カロリーは体重に比例します。重いほど、筋肉を動かしたり体を運んだりするのに多くのエネルギーを消費するため、正確な現在の体重を入力してください。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">活動の種類（METs）を選択</p>
                            <p class="text-sm text-gray-600">リストから該当する運動を選んでください。ここには国立健康・栄養研究所が公開している「METs（メッツ）」と呼ばれる指標が設定されています。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">実施時間を入力して結果を確認</p>
                            <p class="text-sm text-gray-600">実際に動いた時間を入力すると、自動的に計算されます。食べ物の誘惑に負けそうなときは、この数値を思い出して「おにぎり何個分か」考えてみましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    主な活動の運動強度 (METs)
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-3 px-2 text-left font-bold text-gray-700">活動内容</th>
                                <th class="py-3 px-2 text-center font-bold text-gray-700">METs</th>
                                <th class="py-3 px-2 text-left font-bold text-gray-700">強度の例え</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 uppercase tracking-tighter">
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">掃除・家事</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">3.0~3.5</td>
                                <td class="py-3 px-2 text-left text-gray-500">通常の歩行と同等</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">早歩き (6.4km/h)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">5.0</td>
                                <td class="py-3 px-2 text-left text-gray-500">かなりの息切れ</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">ジョギング (8km/h)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">8.3</td>
                                <td class="py-3 px-2 text-left text-gray-500">全身運動</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">ランニング (12km/h)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">11.5</td>
                                <td class="py-3 px-2 text-left text-gray-500">激しい追い込み</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">水泳 (クロール)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">10.0</td>
                                <td class="py-3 px-2 text-left text-gray-500">水圧負荷あり</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">METs(メッツ)は、安静時を1としたとき、その運動が何倍のカロリーを消費するかを示す活動強度の指数です。</p>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="運動消費カロリー計算ツールとは？"
            icon="info"
            category-color="green">

            <p class="text-gray-600 leading-relaxed mb-4">
                運動消費カロリー計算ツールは、ジョギング、水泳、掃除など、様々な活動の消費カロリーをMETs（メッツ）値を用いて精密に計算する無料ツールです。
                体重と運動時間を入力するだけで、脂肪燃焼量や食品への換算も自動算出します。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                METs（Metabolic Equivalents）は、厚生労働省が推奨する運動強度の指標。安静時を1としたとき、その活動が何倍のエネルギーを消費するかを表します。
                例えば、ジョギングは8.3METs、水泳は10METs。数値が大きいほど、短時間で多くのカロリーを消費できます。
            </p>

            <p class="text-gray-600 leading-relaxed">
                「あの運動でどれくらい痩せる？」「おにぎり何個分？」を数値化。日常生活も立派なエクササイズです。
                運動のモチベーション維持や、食事管理の参考にご活用ください。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="METs（メッツ）"
                    category-color="green">
                    Metabolic Equivalentsの略。運動強度を表す単位で、安静時を1としたときのエネルギー消費倍率。
                    歩行は3METs、ジョギングは8METs、水泳は10METsなど。数値が大きいほど高強度。
                    厚生労働省の健康指針でも採用されている国際的な指標。
                </x-term-definition>

                <x-term-definition
                    term="消費カロリー計算式"
                    category-color="green">
                    消費カロリー（kcal）= METs × 体重（kg）× 時間（h）× 1.05。
                    1.05は、酸素消費量からカロリーへの換算係数。体重が重いほど、同じ運動でも消費カロリーが大きい。
                    例：体重60kgの人が30分ジョギング（8.3METs）すると、約261kcal消費。
                </x-term-definition>

                <x-term-definition
                    term="脂肪1kgの燃焼に必要なカロリー"
                    category-color="green">
                    体脂肪1kgを燃焼させるには、約7,200kcalのエネルギー消費が必要。
                    1ヶ月で1kg痩せたい場合、毎日240kcalのアンダーカロリー（消費＞摂取）が必要。
                    運動だけでなく、食事管理と組み合わせることが効果的。
                </x-term-definition>

                <x-term-definition
                    term="NEAT（非運動性熱産生）"
                    category-color="green">
                    Non-Exercise Activity Thermogenesisの略。ジムやスポーツ以外の日常活動で消費されるエネルギー。
                    掃除、通勤、立ち仕事、階段の昇降などが該当。積み重なると莫大な消費量になる。
                    ダイエットでは「意識的にNEATを増やす」ことが重要。
                </x-term-definition>

                <x-term-definition
                    term="有酸素運動と無酸素運動"
                    category-color="green">
                    有酸素運動は、酸素を使って脂肪を燃焼する持久的な運動。ジョギング、水泳、サイクリングなど。
                    無酸素運動は、短時間の高強度運動で、筋肉内の糖をエネルギー源とする。筋トレ、短距離走など。
                    ダイエットには両方を組み合わせることが最も効果的。
                </x-term-definition>
                
                <x-term-definition
                    term="アフターバーン効果（EPOC）"
                    category-color="green">
                    Excess Post-exercise Oxygen Consumptionの略。運動後も代謝が高い状態が続き、カロリーを消費し続ける現象。
                    特に高強度インターバルトレーニング（HIIT）で顕著。運動後24時間は代謝が向上する。
                    「運動中だけでなく、運動後もカロリーを消費する」ため、効率的なダイエット手法として注目されている。
                </x-term-definition>
                
                <x-term-definition
                    term="心拍数と脂肪燃焼ゾーン"
                    category-color="green">
                    最大心拍数の60～70%の範囲が「脂肪燃焼ゾーン」と呼ばれ、脂肪をエネルギー源として使う割合が高い。
                    最大心拍数は「220 - 年齢」で概算。例えば30歳なら最大190、脂肪燃焼ゾーンは114～133拍/分。
                    ただし、総消費カロリーが重要なため、高強度運動も脂肪減少には効果的。
                </x-term-definition>
                
                <x-term-definition
                    term="歩数と消費カロリーの関係"
                    category-color="green">
                    一般的に、1万歩で約300～400kcal消費すると言われる（体重60kgの場合）。1歩あたり約0.03～0.04kcal。
                    厚生労働省は1日8,000歩以上を推奨。通勤や買い物などで意識的に歩数を増やすことが、NEATの向上につながる。
                    スマートフォンやスマートウォッチで歩数を記録し、モチベーション維持に活用するのが効果的。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="日常の活動量を可視化して1ヶ月で2kg減量成功"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        運動を「ジムだけ」と考えていた
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「ジムに行かないと痩せない」と思い込んでいた</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>忍しい日はエレベーター、車移動</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>掃除や通勤を「運動」と考えていなかった</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>月の総消費カロリー：不明</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        全ての活動を「運動」として記録
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>通勤徒歩（20分）：毎日70kcal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>階段昇降（10分）：毎日50kcal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>掃除・洗濯（30分）：毎日90kcal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>月の総消費：約6,300kcal追加（脂肪0.9kg分）</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-green-700">改善のポイント：</strong>
                    「ジムだけが運動」という固定観念を捨て、日常のあらゆる活動を「運動」として記録。
                    通勤、階段、掃除などのNEAT（非運動性熱産生）を可視化したことで、モチベーションが大幅に向上。
                    「これだけ動いたのだから、お菓子は我慢しよう」という意識が生まれ、食事管理も改善。
                    結果、1ヶ月で2kgの減量に成功しました。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース2: HIITでアフターバーン効果を活用"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        長時間の有酸素運動のみ
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>1時間のジョギング（週3回）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>運動中の消費：約500kcal/回</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>時間がかかり、継続が困難</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        20分30秒のHIIT（週3回）
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>20分のHIIT（高強度インターバル）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>運動中：約250kcal + 運動後24時間：約150kcal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>短時間で効率的、継続しやすい！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-green-700">改善のポイント：</strong>
                    HIIT（高強度インターバルトレーニング）は、運動後24時間代謝が高い状態が続く「アフターバーン効果」が得られます。
                    20分の運動で、1時間のジョギングと同等以上の効果。「時間がない」人にこそHIITがおすすめです。
                    ただし負荷が高いため、初心者は段階的に強度を上げることが重要です。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース3: 歩数記録でモチベーション維持"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        漠然と歩くだけ
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>歩数を記録していない</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「どれくらい歩いたか」不明</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>モチベーションが続かず、運動が続かない</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        スマートウォッチで歩数記録
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>毎日の歩数を自動記録</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>目標：1日1万歩（約350kcal）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>達成感でモチベーション維持、ダイエット成功！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-green-700">改善のポイント：</strong>
                    歩数を記録することで、「今日はあと1,000歩」という具体的な目標が生まれ、モチベーションが大幅に向上。
                    1万歩達成で約350kcal消費（体重60kg）。毎日続ければ、1ヶ月で約1.5kgの脂肪減少につながります。
                    「可視化」が継続の鍵。スマートフォンやスマートウォッチを活用しましょう。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => '基礎代謝計算',
                    'url' => '/bmr-calculator',
                    'description' => '1日の総消費カロリーを算出',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>',
                ],
                [
                    'name' => 'BMI計算機',
                    'url' => '/bmi-calculator',
                    'description' => '適正体重を判定',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
                ],
                [
                    'name' => 'NISA・iDeCo計算',
                    'url' => '/nisa-ideco',
                    'description' => '資産形成をシミュレーション',
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
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「METs（メッツ）」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">METs（Metabolic Equivalents）は、運動の強度を表す単位です。何もせず安静にしている状態を「1」とし、その運動が何倍のエネルギーを消費するかを示します。例えば、3メッツの運動は安静時の3倍のエネルギーを消費します。厚生労働省の健康指針でも、この数値をベースにした活動が推奨されています。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. スマートウォッチの数値とズレがあるのはなぜですか？</h3>
                    <p class="text-gray-600 leading-relaxed">スマートウォッチは心拍数や加速度センサーを組み合わせて、「個人差（心肺能力）」を加味して算出します。一方、本ツールの計算式は厚生労働省が定義する標準的なMETsに基づいた統計的な予測値です。どちらかが間違っているわけではなく、あくまで目安として捉えてください。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 脂肪を燃やすのに「20分以上の運動」が必要って本当？</h3>
                    <p class="text-gray-600 leading-relaxed">かつてはそう言われていましたが、現在は「10分の運動を2回行っても、連続で20分行ったのと同様の脂肪燃焼効果がある」ことがわかっています。合計の消費カロリーが重要。小まめに動くこともダイエットには非常に有効です。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 運動後に体重が減っているのは、脂肪が燃えたから？</h3>
                    <p class="text-gray-600 leading-relaxed">運動直後の大幅な体重減少のほとんどは「水分の排出（汗）」によるものです。脂肪1kgを燃やすには7,200kcal必要ですから、一度の運動で数百グラム以上の「脂肪そのもの」が消えることはありません。短期的な変化に一喜一憂せず、長期的に消費カロリーを積み重ねることが成功の鍵です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 掃除などの「家事」での消費カロリーも計算すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、ぜひ計算すべきです！「NEAT（非運動性熱産生）」と呼ばれ、日々の家事や立ち仕事による消費エネルギーは蓄積すると莫大な量になります。ジムに行く時間がないときほど、意識的に家事の強度を上げたり（アクティブ家事）、階段を使うことで消費を稼ぐことができます。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 食事の直後の運動は、脂肪燃焼に効果的ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">食後1時間程度は消化器に血液が集中しているため、激しい運動は避けるべきです。一方で、食後30分～1時間後くらいの軽い運動（散歩など）は、血糖値の急上昇を抑え、脂肪を蓄えにくくする（インスリンの過剰分泌を抑える）効果があるため、ダイエットには推奨されています。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「アフターバーン効果」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">運動後も代謝が高い状態が続き、カロリーを消費し続ける現象です（EPOC：Excess Post-exercise Oxygen Consumption）。特に高強度インターバルトレーニング（HIIT）で顕著で、運動後24時間は代謝が向上します。「運動中だけでなく、運動後もカロリーを消費する」ため、効率的なダイエット手法として注目されています。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「脂肪燃焼ゾーン」で運動すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">最大心拍数の60～70%の範囲が「脂肪燃焼ゾーン」と呼ばれ、脂肪をエネルギー源として使う割合が高いです。ただし、総消費カロリーが重要なため、高強度運動で総消費を増やすことも脂肪減少には効果的です。「脂肪燃焼ゾーンにこだわりすぎる必要はない」というのが現在の定説です。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 1万歩歩くとどれくらいカロリーを消費しますか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的に、1万歩で約300～400kcal消費すると言われます（体重60kgの場合）。1歩あたり約0.03～0.04kcal。厚生労働省は1日8,000歩以上を推奨しています。通勤や買い物などで意識的に歩数を増やすことが、NEAT（非運動性熱産生）の向上につながります。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 筋トレと有酸素運動、どちらを先にすべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的には「筋トレ→有酸素運動」の順番が推奨されます。筋トレで糖を消費し、成長ホルモンが分泌された状態で有酸素運動を行うことで、脂肪燃焼効率が高まります。また、筋トレ後に有酸素運動をすることで、疲労回復も促進されます。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「NEAT」を増やす具体的な方法は？</h3>
                    <p class="text-gray-600 leading-relaxed">NEAT（非運動性熱産生）を増やすには、①エレベーターではなく階段を使う、②通勤で一駅手前で降りて歩く、③デスクワーク中に1時間に1回立ち上がる、④掃除や洗濯をアクティブに行う、などが効果的です。小さな積み重ねが、大きな消費カロリーにつながります。</p>
                </div>
            </div>
        </div>
    </div>
</div>