<div class="min-h-screen bg-gradient-to-br from-slate-50 via-green-50 to-emerald-100 py-8 relative overflow-hidden">
    @php
        $title = 'BMI計算機 | 適正体重と肥満度を即座に判定';
        $description = '身長と体重からBMI（体格指数）を自動計算。適正体重、肥満度判定、健康アドバイスを表示。ダイエットや健康管理の第一歩に。';
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
                    'name' => 'BMI計算機',
                    'description' => '身長と体重からBMI（体格指数）を自動計算。適正体重、肥満度判定、健康アドバイスを表示。ダイエットや健康管理の第一歩に。',
                    'url' => url()->current(),
                    'applicationCategory' => 'HealthApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        'BMI自動計算',
                        '適正体重表示',
                        '肥満度判定',
                        '健康アドバイス提供'
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
                            'name' => 'BMI計算機'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'BMI 22が最も健康的なのはなぜ？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '日本肥満学会などの統計により、BMI 22前後が糖尿病、高血圧、脂質異常症などの生活習慣病に最もかかりにくいとされているためです。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '筋肉量が多いとBMIはどうなりますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '筋肉は脂肪よりも重いため、ボディービルダーやスポーツ選手などは体脂肪が少なくてもBMIが高くなり「肥満」と判定されることがあります。その場合は体脂肪率を重視しましょう。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '高齢者のBMIの考え方は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '高齢者の場合、少し高めのBMI（22〜25程度）の方がフレイル（虚弱）や身体機能低下を防ぎ、長生きするという研究結果もあります。痩せすぎには特に注意が必要です。'
                            ]
                        ]
                    ]
                ]
            ]
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>
    </x-slot>

    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-green-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px]"></div>
    </div>

    {{-- Breadcrumb --}}
    <div class="max-w-6xl mx-auto px-4 mb-6">
        <nav class="text-sm text-gray-600" aria-label="Breadcrumb">
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
                <li class="text-gray-900 font-semibold">BMI・適正体重計算</li>
            </ol>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto px-4">

        {{-- Hero Section --}}
        <div
            class="relative overflow-hidden bg-gradient-to-br from-green-600 via-emerald-600 to-teal-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div
                        class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    BMI・適正体重計算
                </h1>
                <p class="text-lg md:text-xl text-green-100 text-center md:text-left max-w-2xl">
                    身長と体重からBMI値を算出。肥満度判定と健康アドバイス付き。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-green-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-green-500 rounded-full"></span>
                💡 健康管理の第一歩
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '現在の体重が「肥満」「普通」「低体重」のどこに該当するか確認',
                        '最も病気になりにくいとされる「適正体重（BMI 22）」の把握',
                        'ダイエットや増量の際の具体的な目標数値（kg）の設定',
                        '家族や友人の健康状態を簡易的にチェックする際のツールに',
                        '健康診断の結果を受けた後の生活習慣改善の動機付け',
                        'アスリートや筋トレ愛愛好家の体格指数管理（参考値として）'
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

        {{-- フォーム・結果表示 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">

            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-green-500 to-emerald-600 rounded-full"></span>
                    身体データを入力
                </h2>
                <p class="text-sm text-gray-500 ml-4">現在の身長と体重を入力してください</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        身長(cm)
                    </label>
                    <input type="number" step="0.1" wire:model.live="height"
                        class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="170">
                    <p class="text-xs text-gray-500 ml-1">例: 170.5cm</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        体重(kg)
                    </label>
                    <input type="number" step="0.1" wire:model.live="weight"
                        class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="65">
                    <p class="text-xs text-gray-500 ml-1">例: 65.5kg</p>
                </div>
            </div>

            {{-- 結果表示 --}}
            <div
                class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-green-50 rounded-2xl p-8 border-2 border-green-100 shadow-inner">
                <div
                    class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-red-400/10 to-pink-600/10 rounded-full -mr-20 -mt-20">
                </div>

                <div class="relative">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                        あなたのBMI判定
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div
                            class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                            <p class="text-xs text-green-100 mb-2 font-semibold">あなたのBMI</p>
                            <p class="text-5xl font-bold text-white mb-1">{{ number_format($bmi, 1) }}</p>
                            <p class="text-xs text-green-200">Body Mass Index</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <p class="text-xs text-gray-500 mb-2 font-semibold">適正体重(BMI22)</p>
                            <p class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($standardWeight, 1) }}kg
                            </p>
                            <p class="text-xs text-gray-400">
                                @if ($weight > $standardWeight)
                                    <span class="text-orange-600">-{{ number_format($weight - $standardWeight, 1) }}kg</span>
                                @elseif($weight < $standardWeight)
                                    <span class="text-blue-600">+{{ number_format($standardWeight - $weight, 1) }}kg</span>
                                @else
                                    <span class="text-green-600">理想的!</span>
                                @endif
                            </p>
                        </div>

                        <div
                            class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border-2 border-{{ $categoryColor }}-400">
                            <p class="text-xs text-gray-500 mb-2 font-semibold">判定</p>
                            <p class="text-2xl font-bold text-{{ $categoryColor }}-600 mb-1">{{ $category }}</p>
                            <p class="text-xs text-gray-400">体型分類</p>
                        </div>
                    </div>

                    {{-- BMIスケール --}}
                    <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                        <h4 class="font-bold text-gray-800 mb-4 text-sm">BMI基準値</h4>
                        <div class="relative h-10 bg-gradient-to-r from-blue-300 via-green-400 via-yellow-400 via-orange-400 to-red-500 rounded-full overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-between px-4 text-xs font-bold text-white">
                                <span>18.5</span>
                                <span>25</span>
                                <span>30</span>
                                <span>35</span>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2 text-xs text-gray-600">
                            <span>低体重</span>
                            <span>普通</span>
                            <span>肥満1</span>
                            <span>肥満2</span>
                            <span>肥満3</span>
                        </div>
                    </div>

                    {{-- アドバイス --}}
                    <div
                        class="p-5 rounded-xl bg-gradient-to-r from-{{ $categoryColor }}-50 to-{{ $categoryColor }}-50 border-2 border-{{ $categoryColor }}-200">
                        <p class="text-sm font-bold text-{{ $categoryColor }}-800 flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            健康アドバイス
                        </p>
                        <p class="text-sm text-{{ $categoryColor }}-700 leading-relaxed">
                            {{ $advice }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="BMI計算機とは？"
            icon="info"
            category-color="green">

            <p class="text-gray-600 leading-relaxed mb-4">
                BMI計算機は、身長と体重から「BMI（Body Mass Index：体格指数）」を自動計算し、肥満度を判定する無料ツールです。
                BMIは世界保健機関（WHO）が定めた国際的な肥満判定基準で、身長の二乗に対する体重の比率を数値化したものです。
                計算式は「体重(kg) ÷ 身長(m)²」で、例えば身長170cm・体重65kgの場合、BMIは約22.5となります。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                日本肥満学会では、BMI 18.5未満を「低体重」、18.5以上25未満を「普通体重」、25以上を「肥満」と分類しています。
                特にBMI 22は統計的に最も病気になりにくい「適正体重」とされ、生活習慣病のリスクが最小になるとされています。
                このツールでは、現在のBMI値だけでなく、適正体重（BMI 22）までの増減量も表示するため、
                ダイエットや増量の具体的な目標設定に役立ちます。
            </p>

            <p class="text-gray-600 leading-relaxed">
                ただし、BMIは筋肉量や体脂肪率を考慮しないため、筋肉質な方は「肥満」と判定されることがあります。
                あくまで簡易的な健康指標として活用し、より詳細な健康状態は医師や栄養士に相談することをお勧めします。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="BMI（Body Mass Index）"
                    category-color="green">
                    体重と身長から算出される肥満度を表す体格指数。計算式は「体重(kg) ÷ 身長(m)²」。
                    WHOや日本肥満学会が採用する国際基準で、18.5未満が低体重、18.5〜25が普通体重、25以上が肥満とされる。
                    簡便で客観的な指標だが、筋肉量や体脂肪率は反映されないため、アスリートなどは注意が必要。
                </x-term-definition>

                <x-term-definition
                    term="適正体重（標準体重）"
                    category-color="green">
                    BMI 22となる体重のこと。統計的に最も病気にかかりにくく、健康的とされる体重。
                    計算式は「身長(m)² × 22」。例えば身長170cmの場合、適正体重は約63.6kg。
                    ダイエットや増量の目標値として広く活用されている。
                </x-term-definition>

                <x-term-definition
                    term="肥満度（％）"
                    category-color="green">
                    適正体重に対して現在の体重がどれだけ多いか（または少ないか）を示す指標。
                    計算式は「(実測体重 - 適正体重) ÷ 適正体重 × 100」。
                    +20%以上で軽度肥満、+50%以上で高度肥満とされる。子供の肥満判定にも用いられる。
                </x-term-definition>

                <x-term-definition
                    term="メタボリックシンドローム"
                    category-color="green">
                    内臓脂肪型肥満に加え、高血圧・高血糖・脂質異常のうち2つ以上を併せ持つ状態。
                    BMIが25以上かつ腹囲が男性85cm以上、女性90cm以上が診断基準の一つ。
                    心筋梗塞や脳卒中のリスクが高まるため、早期の生活習慣改善が重要。
                </x-term-definition>

                <x-term-definition
                    term="体脂肪率"
                    category-color="green">
                    体重に占める脂肪の割合（％）。BMIでは筋肉と脂肪を区別できないため、
                    体脂肪率を併用することでより正確な肥満判定が可能になる。
                    男性は15〜20%、女性は20〜25%が標準とされる。体組成計で測定できる。
                </x-term-definition>
                
                <x-term-definition
                    term="内臓脂肪型肥満と皮下脂肪型肥満"
                    category-color="green">
                    内臓脂肪型は腹部に脂肪が蓄積するタイプで、メタボリックシンドロームのリスクが高い。男性に多い「りんご型」。
                    皮下脂肪型は臀部や太ももに脂肪がつくタイプで、女性に多い「洋なし型」。健康リスクは内臓脂肪型より低い。
                    腹囲を測定することで、内臓脂肪の蓄積をチェックできる。
                </x-term-definition>
                
                <x-term-definition
                    term="フレイル（老年病弱）"
                    category-color="green">
                    加齢により筋力や心身の活力が低下し、健康障害を起こしやすくなった状態。痩せすぎがリスクを高める。
                    高齢者の場合、BMIが18.5未満の低体重はフレイルのリスクが高まるため、適度な体重維持が重要。
                    筋力トレーニングとタンパク質摂取で予防できる。
                </x-term-definition>
                
                <x-term-definition
                    term="ローレル指数（学童用）"
                    category-color="green">
                    学童（小中学生）の肥満度を判定する指標。計算式は「体重（kg）÷ 身長（cm）³ × 10^7」。
                    学童は成長期のため、大人と同じBMI基準では判定できない。ローレル指数の標準値は115～145程度。
                    学校の健康診断でも使われる指標。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="BMI 28の会社員が3ヶ月で適正体重を達成"
            category-color="green">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        不規則な生活で肥満1度判定
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>身長170cm、体重81kg、BMI 28.0（肥満1度）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>適正体重まで約17kg減量が必要</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>健康診断で血圧・血糖値に異常値</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>階段で息切れ、慢性的な疲労感</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        食事改善＋運動習慣で健康体重に
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>3ヶ月後：体重65kg、BMI 22.5（普通体重）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>適正体重を達成、16kg減量成功</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>血圧・血糖値が正常範囲に改善</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>体力向上、疲れにくい体質に変化</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-green-700">改善のポイント：</strong>
                    BMI計算機で現状を数値化したことで、「なんとなく太っている」から「17kg減らす」という具体的な目標に変わりました。
                    食事は糖質を適度に制限し、タンパク質と野菜を増やす方法を採用。運動は週3回の30分ウォーキングと軽い筋トレを継続。
                    無理な食事制限ではなく、1ヶ月あたり5kg程度のペースで健康的に減量したことで、リバウンドせず体重を維持できています。
                    BMIを定期的に測定することで、モチベーションを保ちながら目標達成できました。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => 'NISA・iDeCoシミュレーター',
                    'url' => '/nisa-ideco',
                    'description' => '健康的な体を維持しながら資産形成',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>',
                ],
                [
                    'name' => '基礎代謝計算',
                    'url' => '/basal-metabolic-rate',
                    'description' => '1日に必要なカロリーを計算',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
                ],
                [
                    'name' => 'カロリー計算ツール',
                    'url' => '/calorie-calculator',
                    'description' => '食事のカロリーを簡単に計算',
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

        {{-- FAQ Section --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">よくある質問</h2>
                <p class="text-gray-600">BMIについての疑問にお答えします</p>
            </div>

            <div class="space-y-6">
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/50 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. BMI 22が最も健康的なのはなぜ？</h3>
                    <p class="text-gray-600">日本肥満学会などの統計により、BMI 22前後が糖尿病、高血圧、脂質異常症などの生活習慣病に最もかかりにくいとされているためです。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/50 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 筋肉量が多いとBMIはどうなりますか？</h3>
                    <p class="text-gray-600">筋肉は脂肪よりも重いため、ボディービルダーやスポーツ選手などは体脂肪が少なくてもBMIが高くなり「肥満」と判定されることがあります。その場合は体脂肪率を重視しましょう。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/50 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 高齢者のBMIの考え方は？</h3>
                    <p class="text-gray-600">高齢者の場合、少し高めのBMI（22〜25程度）の方がフレイル（虚弱）や身体機能低下を防ぎ、長生きするという研究結果もあります。痩せすぎには特に注意が必要です。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/50 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 子供の肥満判定にもBMIを使えますか？</h3>
                    <p class="text-gray-600">子供（幼児・学童）の場合は、BMIではなく「カウプ指数」や「ローレル指数」、または肥満度（％）という指標を用いるのが一般的です。大人と同じ基準では判定できません。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/50 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. BMIを減らすために最も効果的なことは？</h3>
                    <p class="text-gray-600">基本は「消費カロリー ＞ 摂取カロリー」にすることです。無理な食事制限ではなく、バランスの良い食事と適度な有酸素運動・筋トレを組み合わせるのが健康的な減量のコツです。</p>
                </div>
            </div>
        </div>

    </div>
</div>