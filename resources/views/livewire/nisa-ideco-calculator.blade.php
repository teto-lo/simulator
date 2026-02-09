<div class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-teal-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = 'NISA・iDeCoシミュレーター | 将来資産と節税効果を最大化';
        $description = '新NISAとiDeCoのダブルシミュレーション。月々の積立額から、将来の運用資産、さらにはiDeCoによる所得税・住民税の節税額まで一括算出します。';
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
                    'name' => 'NISA・iDeCoシミュレーター',
                    'description' => '新NISAとiDeCoのダブルシミュレーション。月々の積立額から、将来の運用資産、さらにはiDeCoによる所得税・住民税の節税額まで一括算出します。',
                    'url' => url()->current(),
                    'applicationCategory' => 'BusinessApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '新NISAとiDeCoの同時シミュレーション',
                        '複利効果の可視化',
                        'iDeCo所得控除による節税額計算',
                        '職業別の拠出限度額対応'
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
                            'name' => 'NISA・iDeCoシミュレーター'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'NISAとiDeCo、どちらから先に始めたらいいですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '所得税を払っている会社員の方であれば、掛金が全額所得控除になる「iDeCo」の方が、始めた瞬間から（税金還付として）メリットを享受できます。ただし、iDeCoは60歳までお金を引き出すことができません。結婚や出産、住宅購入などの予定がある場合は、いつでも引き出せる「NISA」を優先するのが安心です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '「新NISA」になって何が変わったのですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '2024年からの新NISAでは、(1)非課税期間が無期限になった、(2)年間投資枠が最大360万円まで大幅に拡大された、(3)生涯投資枠が1,800万円に設定された、という3点が大きな改善です。かつての「つみたてNISA」か「一般NISA」かを選ぶ必要もなくなり、非常に使いやすい制度になりました。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'iDeCoの所得控除で、税金は具体的にいつ戻ってきますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '会社員の方であれば、年末調整で書類を提出することで、12月や1月の給与と一緒に戻ってくる（または所得税が相殺される）のが一般的です。自営業の方などの場合は、確定申告を行うことで還付されます。また、翌年度の住民税も安くなるため、毎月の手残り額が実質的に増えることになります。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '投資リターンを何％に設定してシミュレーションすべきですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '過去20〜30年の全世界株式や米国株式（S&P500等）の平均リターンは年率7〜10%程度ありましたが、将来も同じとは限りません。保守的なプランを立てるなら「3%」、平均的な期待値なら「5%」、強気の成長を信じるなら「7%」程度で算出するのが一般的です。まずは現実的な5%程度で見ておくのがバランスが良いでしょう。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '元本割れするのが怖いです。絶対損しない方法はありますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '投資に「絶対」はありませんが、15年、20年といった「長期」でインデックス投資を継続し、かつ「分散」投資（全世界など）を行うことで、元本割れする確率は統計的に極めて低くなると言われています。一喜一憂せず、決まった額を機械的に積み立て続けるのが、リスクを抑える最大のコツです。'
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
                <li class="text-gray-900 font-semibold">NISA・iDeCo最適化シミュレーション</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
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
                    NISA・iDeCo最適化ツール
                </h1>
                <p class="text-lg md:text-xl text-emerald-100 text-center md:text-left max-w-2xl">
                    新NISAの非課税とiDeCoの所得控除。二つの武器を組み合わせて「攻め」と「守り」の資産形成を。
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
                        '「2000万円問題」に向けて、今のペースで将来いくら貯まるか確認したいとき',
                        'iDeCoを始めることで、給料から引かれる税金がどれくらい減るか知りたい',
                        'NISAとiDeCo、どちらにどれくらい配分するのが自分にとって最適か悩んでいる',
                        '「複利の力」を実感して、長期投資のモチベーションを維持したいとき',
                        '会社員、公務員、自営業など、自分の属性に合ったiDeCoの限度額を知りたい',
                        '老後資金以外にも（住宅資金など）必要な資産をどう作るか計画を立てたい'
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

        {{-- 広告配置 (こんなときに便利の下) --}}
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

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-emerald-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                シミュレーション設定
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                {{-- 基本情報 --}}
                <div class="space-y-6">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-4 h-4 bg-gray-200 rounded-full"></span> 基本データ
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-3 group">
                            <label class="text-xs font-bold text-gray-400 block">現在の年齢</label>
                            <div class="relative">
                                <input type="number" wire:model.live="age" min="20" max="65"
                                    class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                            </div>
                        </div>
                        <div class="space-y-3 group">
                            <label class="text-xs font-bold text-gray-400 block">運用期間</label>
                            <div class="relative">
                                <input type="number" wire:model.live="investmentYears" min="1" max="45"
                                    class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">年</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-400 block">期待リターン (年利)</label>
                        <div class="relative px-2">
                            <input type="range" wire:model.live="expectedReturn" min="1" max="10" step="0.1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-emerald-500">
                            <div class="flex justify-between mt-2">
                                <span class="text-[10px] font-bold text-gray-400 italic">保守的 (1%)</span>
                                <span class="text-sm font-black text-emerald-600 italic">{{ $expectedReturn }}%</span>
                                <span class="text-[10px] font-bold text-gray-400 italic">積極的 (10%)</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-400 block italic">推定年収 (節税額計算用)</label>
                        <div class="relative">
                            <input type="number" wire:model.live="annualIncome"
                                class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                        </div>
                    </div>
                </div>

                {{-- 制度設定 --}}
                <div class="space-y-6">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-4 h-4 bg-gray-200 rounded-full"></span> 制度別積立設定
                    </h3>
                    
                    {{-- NISA --}}
                    <div class="p-4 rounded-2xl border-2 {{ $useNisa ? 'bg-teal-50 border-teal-200 shadow-sm' : 'bg-white border-gray-100' }} transition-all">
                        <label class="flex items-center justify-between mb-3 cursor-pointer">
                            <span class="font-bold flex items-center gap-2 {{ $useNisa ? 'text-teal-800' : 'text-gray-400' }}">新NISAをシミュレーション</span>
                            <div class="relative inline-block w-12 h-6 transition duration-200 ease-in-out bg-gray-200 rounded-full">
                                <input type="checkbox" wire:model.live="useNisa" class="absolute w-6 h-6 bg-white border-2 rounded-full appearance-none cursor-pointer checked:right-0 right-6 checked:bg-teal-500 transition-all">
                            </div>
                        </label>
                        @if($useNisa)
                            <div class="relative">
                                <input type="number" wire:model.live="nisaMonthly"
                                    class="w-full bg-white border-2 border-teal-100 focus:border-teal-500 rounded-xl p-3 text-lg font-bold outline-none pr-16">
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-teal-400 font-bold pointer-events-none">円/月</span>
                            </div>
                        @endif
                    </div>

                    {{-- iDeCo --}}
                    <div class="p-4 rounded-2xl border-2 {{ $useIdeco ? 'bg-emerald-50 border-emerald-200 shadow-sm' : 'bg-white border-gray-100' }} transition-all">
                        <label class="flex items-center justify-between mb-3 cursor-pointer">
                            <span class="font-bold flex items-center gap-2 {{ $useIdeco ? 'text-emerald-800' : 'text-gray-400' }}">iDeCoをシミュレーション</span>
                            <div class="relative inline-block w-12 h-6 transition duration-200 ease-in-out bg-gray-200 rounded-full">
                                <input type="checkbox" wire:model.live="useIdeco" class="absolute w-6 h-6 bg-white border-2 rounded-full appearance-none cursor-pointer checked:right-0 right-6 checked:bg-emerald-500 transition-all">
                            </div>
                        </label>
                        @if($useIdeco)
                            <div class="space-y-3">
                                <select wire:model.live="employeeType" class="w-full bg-white border-2 border-emerald-100 rounded-xl p-2 text-sm font-bold outline-none">
                                    @foreach($idecoLimits as $key => $limit)
                                        <option value="{{ $key }}">{{ $limit['name'] }}</option>
                                    @endforeach
                                </select>
                                <div class="relative">
                                    <input type="number" wire:model.live="idecoMonthly"
                                        class="w-full bg-white border-2 border-emerald-100 focus:border-emerald-500 rounded-xl p-3 text-lg font-bold outline-none pr-16">
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-emerald-400 font-bold pointer-events-none">円/月</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-emerald-50 rounded-3xl p-8 border-2 border-emerald-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                        投資収益・節税レポート
                    </h3>

                    <div class="bg-gradient-to-br from-emerald-500 to-green-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.01] transition-all">
                        <p class="text-xs text-emerald-100 mb-2 font-bold tracking-widest uppercase">{{ $investmentYears }}年後の推定総資産 ({{ $age + $investmentYears }}歳時点)</p>
                        <div class="flex items-baseline justify-center gap-1">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($finalAmount) }}</span>
                        </div>
                        <div class="flex justify-center gap-4 mt-6">
                            <div class="bg-white/10 px-4 py-2 rounded-xl backdrop-blur-sm">
                                <p class="text-[10px] text-emerald-100 uppercase">投資元本</p>
                                <p class="text-lg font-bold">¥{{ number_format($totalInvestment) }}</p>
                            </div>
                            <div class="bg-white/10 px-4 py-2 rounded-xl backdrop-blur-sm">
                                <p class="text-[10px] text-emerald-100 uppercase">運用収益</p>
                                <p class="text-lg font-bold">¥{{ number_format($totalReturn) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @if($useNisa)
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-teal-100 border-b-teal-500 border-b-4">
                            <h4 class="text-sm font-bold text-teal-600 mb-4 flex items-center justify-between">
                                <span>新NISA運用合計</span>
                                <span class="bg-teal-50 px-2 py-0.5 rounded text-[10px]">非課税メリット</span>
                            </h4>
                            <p class="text-3xl font-black text-gray-800 mb-1">¥{{ number_format($nisaFinalAmount) }}</p>
                            <div class="flex justify-between items-end mt-4 text-[10px]">
                                <span class="text-gray-400 font-bold">通常なら課税される約20%をまるごと利益に。</span>
                                <span class="text-green-600 font-bold">+¥{{ number_format($nisaTaxSavings) }} 得</span>
                            </div>
                        </div>
                        @endif

                        @if($useIdeco)
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-emerald-100 border-b-emerald-500 border-b-4">
                            <h4 class="text-sm font-bold text-emerald-600 mb-4 flex items-center justify-between">
                                <span>iDeCo運用合計</span>
                                <span class="bg-emerald-50 px-2 py-0.5 rounded text-[10px]">所得控除＋非課税</span>
                            </h4>
                            <p class="text-3xl font-black text-gray-800 mb-1">¥{{ number_format($idecoFinalAmount) }}</p>
                            <div class="flex justify-between items-end mt-4 text-[10px]">
                                <span class="text-gray-400 font-bold">掛金全額が所得から引かれ、毎年の税金が安くなります。</span>
                                <span class="text-green-600 font-bold">+¥{{ number_format($idecoTaxSavings) }} 得</span>
                            </div>
                        </div>
                        @endif
                    </div>

                    {{-- 総節税メリット --}}
                    <div class="mt-8 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl p-6 text-white shadow-lg overflow-hidden relative group">
                        <div class="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-white/10 rounded-full"></div>
                        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-4">
                            <div>
                                <h4 class="text-sm font-bold text-green-100 uppercase tracking-widest mb-1">Total Tax Benefit</h4>
                                <p class="text-lg leading-tight">運用期間中の「節税額」の合計目安</p>
                            </div>
                            <div class="text-center md:text-right">
                                <p class="text-4xl font-black">¥{{ number_format($totalTaxSavings) }}</p>
                                <p class="text-[10px] text-green-100 font-bold">※運用益非課税分 ＋ iDeCo所得控除分の年数累計</p>
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
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">基本条件の設定</p>
                            <p class="text-sm text-gray-600">現在の年齢と、いつまで積立を続けたいか（運用期間）を入力します。期待リターンは、全世界株式等のインデックス投資であれば「5%前後」を一つの基準として考えるのが一般的です。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">属性と積立額の入力</p>
                            <p class="text-sm text-gray-600">iDeCoは職業によって拠出限度額が異なります。会社員、公務員、自営業などから適切なものを選んでください。年収を入力すると、iDeCoによる「税金の戻り（節税額）」がより正確に算出されます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">「複利」と「節税」の効果を確認</p>
                            <p class="text-sm text-gray-600">画面下のレポートで、将来の金額だけでなく「どれだけ税金で得をしたか」を確認してください。投資はリスクを伴いますが、制度による節税は「確実な利益」に近いメリットです。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    各制度の早見比較
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-2 font-bold text-gray-400 italic">特徴</th>
                                <th class="py-2 font-bold text-teal-600 italic">新NISA</th>
                                <th class="py-2 font-bold text-emerald-600 italic">iDeCo</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 leading-relaxed font-bold">
                            <tr>
                                <td class="py-3 text-gray-500 italic">最大の利点</td>
                                <td class="py-3 text-teal-700 italic">いつでも引出可能 / 枠が大きい</td>
                                <td class="py-3 text-emerald-700 italic">掛金が全額所得控除</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-gray-500 italic">節税タイミング</td>
                                <td class="py-3 text-teal-700 italic">売却・配当時のみ</td>
                                <td class="py-3 text-emerald-700 italic">毎年(積立時) ＋ 非課税</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-gray-500 italic">デメリット</td>
                                <td class="py-3 text-teal-700 italic">特になし (元本割れリスクのみ)</td>
                                <td class="py-3 text-emerald-700 italic">60歳まで引出不可 / 手数料有</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-gray-500 italic">おすすめの人</td>
                                <td class="py-3 text-teal-700 italic">万一の備えも兼ねたい人</td>
                                <td class="py-3 text-emerald-700 italic">所得税の高い会社員・自営業</td>
                            </tr>
                        </tbody>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="NISA・iDeCoシミュレーターとは？"
            icon="info"
            category-color="emerald">

            <p class="text-gray-600 leading-relaxed mb-4">
                NISA・iDeCoシミュレーターは、日本の代表的な税制優遇制度である「新NISA」と「iDeCo（個人型確定拠出年金）」を同時にシミュレーションできる無料ツールです。
                毎月の積立額、運用期間、期待リターンを入力するだけで、将来の資産額、運用益、そしてiDeCoによる所得税・住民税の節税額まで一括で試算できます。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                2024年から始まった新NISAは、年間投資枠360万円、生涯投資枠1,800万円という大幅な拡充により、
                「老後2,000万円問題」への現実的な解決策として注目されています。一方、iDeCoは掛金が全額所得控除になるため、
                年収が高い方ほど節税メリットが大きく、「攻めのNISA」と「守りのiDeCo」を組み合わせることで、
                効率的な資産形成が可能になります。
            </p>

            <p class="text-gray-600 leading-relaxed">
                このツールを使えば、「今の積立ペースで老後資金は足りるのか？」「iDeCoを始めると年間いくら税金が戻ってくるのか？」
                といった疑問に、数値で明確に答えることができます。将来のライフプランを立てる第一歩として、ぜひご活用ください。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="新NISA（少額投資非課税制度）"
                    category-color="emerald">
                    2024年から始まった新しいNISA制度。年間投資枠360万円、生涯投資枠1,800万円まで非課税で運用可能。
                    つみたて投資枠（年120万円）と成長投資枠（年240万円）を併用でき、非課税期間は無期限。
                    いつでも引き出し可能なため、老後資金だけでなく教育資金や住宅資金にも活用できる柔軟性が魅力。
                </x-term-definition>

                <x-term-definition
                    term="iDeCo（個人型確定拠出年金）"
                    category-color="emerald">
                    掛金が全額所得控除になる私的年金制度。会社員は月23,000円、自営業は月68,000円まで拠出可能。
                    所得税・住民税が軽減されるため、年収400万円の会社員が満額拠出すると年間約5.5万円の節税効果。
                    ただし60歳まで引き出せないため、老後資金専用として割り切る必要がある。
                </x-term-definition>

                <x-term-definition
                    term="複利効果"
                    category-color="emerald">
                    運用で得た利益を再投資することで、「利益が利益を生む」雪だるま式の成長効果。
                    例えば年利5%で毎月3万円を20年積み立てると、元本720万円が約1,233万円に成長。
                    長期投資において最も重要な概念で、「時間を味方につける」ことが資産形成の鍵となる。
                </x-term-definition>

                <x-term-definition
                    term="所得控除"
                    category-color="emerald">
                    課税対象となる所得から一定額を差し引く仕組み。iDeCoの掛金は全額が所得控除の対象となり、
                    その分だけ所得税・住民税が軽減される。例えば年収500万円の会社員が月2万円拠出すると、
                    年間約4.8万円の税金が還付される計算になる。
                </x-term-definition>

                <x-term-definition
                    term="インデックス投資"
                    category-color="emerald">
                    日経平均やS&P500などの市場指数（インデックス）に連動する投資信託を購入する投資手法。
                    個別株を選ぶ必要がなく、低コストで分散投資ができるため、NISA・iDeCoの王道戦略とされる。
                    過去データでは、全世界株式インデックスは年平均5〜7%程度のリターンを記録している。
                </x-term-definition>
                
                <x-term-definition
                    term="ドルコスト平均法"
                    category-color="emerald">
                    毎月一定額を積み立てることで、価格が高い時は少なく、低い時は多く購入できる仕組み。
                    結果的に平均取得単価を下げる効果があり、「いつ買うか」を考えなくても良いため、
                    初心者に最適な投資手法。NISA・ｉDeCoとの相性が非常に良い。
                </x-term-definition>
                
                <x-term-definition
                    term="拠出限度額"
                    category-color="emerald">
                    iDeCoで毎月積み立てられる上限額。会社員（企業年金あり）は月12,000～20,000円、
                    会社員（企業年金なし）は月23,000円、公務員は月12,000円、自営業は月68,000円。
                    限度額いっぱいまで拠出すると節税効果が最大化されるが、60歳まで引き出せない点に注意。
                </x-term-definition>
                
                <x-term-definition
                    term="リバランス"
                    category-color="emerald">
                    資産配分のバランスを定期的に調整すること。例えば「株式60%・債券40%」と決めた場合、
                    株式が上昇して株式70%になったら、一部を売却して債券を購入し「60:40」に戻す。
                    これにより「高く売って安く買う」が自動的に実現され、リスク管理にもなる。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="30歳会社員が新NISA＋iDeCoで老後資金2,000万円を達成"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        制度を知らず、普通預金のみ
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>毎月3万円を銀行預金（金利0.001%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>30年後の資産：約1,080万円（ほぼ元本のみ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>老後2,000万円問題に対して約920万円不足</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>税制優遇なし、節税効果ゼロ</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        新NISA月2万円＋iDeCo月1万円
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>年利5%で運用（全世界株式インデックス想定）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>30年後の資産：約2,497万円（複利効果）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>老後2,000万円を達成、さらに約500万円の余裕</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>iDeCoの所得控除で年間約2.4万円の節税（30年で約72万円）</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    同じ月3万円の積立でも、「制度を活用するかしないか」で将来資産に約1,400万円以上の差が生まれました。
                    特にiDeCoは掛金が全額所得控除になるため、「節税しながら資産形成できる」二重のメリットがあります。
                    NISAは流動性が高く、iDeCoは節税効果が大きい。両制度を組み合わせることで、
                    リスクを抑えながら効率的に老後資金を準備できます。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース2: 40代自営業がiDeCoで大幅節税"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        節税対策なし
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>年収600万円の自営業、所得税・住民税が高い</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>節税対策を知らず、普通に納税</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>年間約120万円の税金を支払い</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        iDeCo満額拠出（月68,000円）
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>年顀81.6万円の拠出が全額所得控除</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>所得税・住民税が年間約24.5万円軽減</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>30年続けると約735万円の節税！</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    自営業はiDeCoの拠出限度額が最大（月68,000円）のため、節税効果が非常に大きいです。
                    年顀81.6万円の拠出で、年間約24.5万円の税金が戻ってくるため、実質的な自己負担は年顈57.1万円。
                    「税金で消えるくらいなら、自分の老後資金に回そう」という発想で、賂明な節税と資産形成を同時達成できます。
                </p>
            </div>
        </x-case-study>
        
        <x-case-study
            title="ケース3: 50代夫婦が新NISAで子供の教育資金を確保"
            category-color="emerald">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        定期預金のみ
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>子供の大学資金を定期預金で積立（金利0.01%）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>夫婦で月10万円×10年 = 1,200万円（ほぼ元本のみ）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>インフレで実質的な購買力が低下</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        夫婦で新NISA活用
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>夫婦で月10万円を新NISAで運用（年利5%想定）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>10年後：約1,552万円（複利効果で352万円増）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>運用益352万円が非課税（通常は約71万円課税）</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-emerald-700">改善のポイント：</strong>
                    新NISAは「いつでも引き出せる」ため、教育資金のような中期的な目標にも最適。
                    夫婦でそれぞれ年間120万円まで非課税で運用できるため、合計で年間240万円の投資枚を活用できます。
                    定期預金と違い、インフレに強い資産（株式）で運用することで、実質的な購買力を守りながら資産を増やせます。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => '複利計算ツール',
                    'url' => '/compound-interest',
                    'description' => '積立投資の複利効果を詳細にシミュレーション',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>',
                ],
                [
                    'name' => '広告予算シミュレーター',
                    'url' => '/ad-cost',
                    'description' => 'ビジネス収益を最大化して投資資金を増やす',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => 'ROI計算ツール',
                    'url' => '/roi-calculator',
                    'description' => '投資対効果を正確に測定',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
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
                    <h3 class="font-bold text-gray-800 mb-2">Q. NISAとiDeCo、どちらから先に始めたらいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">所得税を払っている会社員の方であれば、掛金が全額所得控除になる「iDeCo」の方が、始めた瞬間から（税金還付として）メリットを享受できます。ただし、iDeCoは60歳までお金を引き出すことができません。結婚や出産、住宅購入などの予定がある場合は、いつでも引き出せる「NISA」を優先するのが安心です。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「新NISA」になって何が変わったのですか？</h3>
                    <p class="text-gray-600 leading-relaxed">2024年からの新NISAでは、(1)非課税期間が無期限になった、(2)年間投資枠が最大360万円まで大幅に拡大された、(3)生涯投資枠が1,800万円に設定された、という3点が大きな改善です。かつての「つみたてNISA」か「一般NISA」かを選ぶ必要もなくなり、非常に使いやすい制度になりました。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. iDeCoの所得控除で、税金は具体的にいつ戻ってきますか？</h3>
                    <p class="text-gray-600 leading-relaxed">会社員の方であれば、年末調整で書類を提出することで、12月や1月の給与と一緒に戻ってくる（または所得税が相殺される）のが一般的です。自営業の方などの場合は、確定申告を行うことで還付されます。また、翌年度の住民税も安くなるため、毎月の手残り額が実質的に増えることになります。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 投資リターンを何％に設定してシミュレーションすべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">過去20〜30年の全世界株式や米国株式（S&P500等）の平均リターンは年率7〜10%程度ありましたが、将来も同じとは限りません。保守的なプランを立てるなら「3%」、平均的な期待値なら「5%」、強気の成長を信じるなら「7%」程度で算出するのが一般的です。まずは現実的な5%程度で見ておくのがバランスが良いでしょう。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 元本割れするのが怖いです。絶対損しない方法はありますか？</h3>
                    <p class="text-gray-600 leading-relaxed">投資に「絶対」はありませんが、15年、20年といった「長期」でインデックス投資を継続し、かつ「分散」投資（全世界など）を行うことで、元本割れする確率は統計的に極めて低くなると言われています。一喜一憂せず、決まった額を機械的に積み立て続けるのが、リスクを抑える最大のコツです。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. iDeCoの手数料がかかると聞きました。損になりませんか？</h3>
                    <p class="text-gray-600 leading-relaxed">iDeCoは加入時や毎月の口座管理に数百円の手数料がかかります。しかし、年収300万円以上の方であれば、所得控除による節税額（年間数万円～）の方が、手数料総額（年間数千円）を大きく上回るため、実質的には得になるケースがほとんどです。ネット証券などの運営管理手数料が無料な窓口を選ぶのが鉄則です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 新NISAで「つみたて投資枚」と「成長投資枚」はどう使い分ければいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">「つみたて投資枚」は毎月コツコツ積立てるインデックス投資に、「成長投資枚」は個別株やアクティブ型投信に向いています。初心者はまず「つみたて投資枚」で全世界株式インデックスを積み立て、余裕があれば「成長投資枚」で高配当株や個別株に挑戦するのがおすすめです。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. iDeCoは60歳まで引き出せないと聞いて不安です。本当に始めて大丈夫ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">確かにiDeCoは流動性が低いため、「絶対に使わない老後資金」として割り切る必要があります。まずは新NISAで流動性を確保し、余裕資金でiDeCoを始めるのが安全です。ただし、節税効果は「確実な利益」なので、少額でも始める価値は十分あります。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 既に40代ですが、今から始めても間に合いますか？</h3>
                    <p class="text-gray-600 leading-relaxed">十分間に合います！40歳から60歳までの20年間、月10万円を年利5%で運用すれば4,110万円になります（元本2,400万円）。「思い立ったが吉日」で、今すぐ始めることが最も重要です。また、iDeCoは60歳まで加入できるため、50代からでも節税メリットを享受できます。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 新NISAで購入した商品を売却したら、その枚は復活しますか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、復活します。新NISAは「翌年以降」に売却した分の枚が復活する仕組みです。例えば今年100万円分購入して、来年それを全部売却した場合、その翌年（来年から見て翌年）には再び100万円分の枚が使えるようになります。ただし、同一年内に売却しても枚は復活しない点に注意。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 会社員ですが、企業年金があるiDeCoの限度額が低いです。どうすれば？</h3>
                    <p class="text-gray-600 leading-relaxed">企業年金（確定給付型・DB）がある場合、iDeCoの限度額は月12,000円まで下がりますが、それでも節税効果はあります。余裕資金は新NISA（年間360万円）に振り分けるのが賢明です。企業年金とiDeCoと新NISAを組み合わせることで、十分な老後資金を準備できます。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 新NISAとiDeCo、両方やる余裕がない場合、どちらを優先すべき？</h3>
                    <p class="text-gray-600 leading-relaxed">「流動性」を重視するなら新NISA、「節税」を重視するならiDeCoです。一般的には、30代以下で結婚・住宅購入の予定がある方は新NISA優先、40代以上で年収が高い方はiDeCo優先がおすすめです。理想は両方を少額ずつでも始めることですが、迫られたらまず新NISAからスタートしましょう。</p>
                </div>
            </div>
        </div>
    </div>
</div>