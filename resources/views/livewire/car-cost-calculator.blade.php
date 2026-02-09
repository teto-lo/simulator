<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-cyan-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-blue-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '車購入・維持費計算シミュレーター | 総コストを完全可視化';
        $description = '購入費・ローン・税金・保険・燃料費を含めた車の総コストを簡単に試算。月々の実質負担と5年後の総額を確認して、無理のないカーライフを実現。';
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
                    'name' => '車購入・維持費計算シミュレーター',
                    'description' => '購入費・ローン・税金・保険・燃料費を含めた車の総コストを簡単に試算。月々の実質負担と5年後の総額を確認して、無理のないカーライフを実現。',
                    'url' => url()->current(),
                    'applicationCategory' => 'LifestyleApplication',
                    'operatingSystem' => 'Any',
                    'offers' => [
                        '@type' => 'Offer',
                        'price' => '0',
                        'priceCurrency' => 'JPY'
                    ],
                    'featureList' => [
                        '車両購入費計算',
                        'ローン総額試算',
                        '年間維持費算出',
                        '月額コスト表示'
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
                            'name' => '車購入・維持費計算'
                        ]
                    ]
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '車の維持費が安い車種は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '軽自動車が最も維持費が安い傾向があります。自動車税が年間10,800円（普通車は25,000円〜）、重量税も安く、燃費も良いため燃料費も抑えられます。また、タイヤやオイルなどの消耗品も普通車より安価です。ただし、高速道路を頻繁に使う場合や長距離移動が多い場合は、普通車の方がトータルで有利になることもあります。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'カーローンの年数は何年が適切ですか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '一般的に3〜7年が目安です。短いほど金利負担は減りますが、月々の支払額が高くなります。長いほど月々の負担は軽くなりますが、総支払額（金利負担）が増えます。また、車の価値は年々下がるため、ローン残高が車の価値を上回る「逆ザヤ」状態を避けるためにも、5年以内が推奨されることが多いです。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '車検費用はどれくらいかかりますか？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '軽自動車で5〜7万円、普通車で7〜10万円が目安です。内訳は法定費用（自賠責保険、重量税、印紙代）と整備費用（点検・整備・部品交換）です。法定費用は車種によってほぼ固定ですが、整備費用は車の状態や整備工場によって大きく変わります。ディーラーは高めですが、民間整備工場やカー用品店の車検は比較的安価です。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '残価設定ローン（残クレ）のメリット・デメリットは？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'メリットは月々の支払額が通常のローンより安くなること。デメリットは、最終的に車を返却する場合、走行距離制限や傷・汚れの査定があり、追加費用が発生する可能性があること。また、買い取る場合は残価分を一括または再ローンで支払う必要があり、トータルの金利負担は通常のローンより高くなることが多いです。'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '任意保険料を安くする方法は？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '複数の保険会社で見積もりを取り、比較することが最も効果的です。また、車両保険を外す、免責金額を高く設定する、ゴールド免許割引や安全装置割引を活用する、年間走行距離が少ない場合は走行距離割引を利用するなどの方法があります。ネット型（ダイレクト型）保険は代理店型より安い傾向がありますが、事故対応の質も考慮して選びましょう。'
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
                <li class="text-gray-900 font-semibold">車購入・維持費計算</li>
            </ol>
        </nav>

        {{-- Hero --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    車購入・維持費計算
                </h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">
                    購入費・ローン・税金・保険・燃料費を含めた車の総コストを簡単に試算。
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
                        '車購入前の「月々の実質負担」と「5年後の総額」を確認したいとき',
                        'マイカーローンを組む際、金利差が総支払額にどれだけ影響するか知りたい',
                        '自動車税、重量税、自賠責保険など「維持費」の概算を把握したい',
                        'ガソリン代の変動や実燃費から、月間の燃料コストをシミュレーション',
                        '今の年収で「無理のないカーライフ」が送れるかの予算判断に',
                        '駐車場代や任意保険料を含めた、トータルでの車関連支出を見える化したい'
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

        {{-- 入力フォーム --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-cyan-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-cyan-500 to-blue-600 rounded-full"></span>
                車両条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">購入価格（円）</label>
                    <input type="number" wire:model.live="purchasePrice"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">ローン年数</label>
                    <input type="number" wire:model.live="loanYears"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">金利（%）</label>
                    <input type="number" step="0.1" wire:model.live="interestRate"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">月間走行距離（km）</label>
                    <input type="number" wire:model.live="monthlyDistance"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>
            </div>

            {{-- 結果 --}}
            <div class="bg-gradient-to-br from-slate-50 to-cyan-50 rounded-2xl p-8 border-2 border-cyan-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6">総コスト目安</h3>

                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-8 mb-6 shadow-lg text-center">
                    <p class="text-xs text-cyan-100 mb-2">総額</p>
                    <p class="text-6xl font-bold text-white">¥{{ number_format($totalOwnershipCost) }}</p>
                    <p class="text-xs text-cyan-200 mt-2">月額換算 ¥{{ number_format($monthlyCost) }}</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">ローン総額</p>
                        <p class="text-xl font-bold">¥{{ number_format($totalLoanPayment) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">年間維持費</p>
                        <p class="text-xl font-bold">¥{{ number_format($totalAnnualCost) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">燃料費</p>
                        <p class="text-xl font-bold text-orange-600">¥{{ number_format($annualFuel) }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span class="w-2 h-7 bg-cyan-500 rounded-full"></span>
                使い方
            </h2>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">1</div>
                    <div>
                        <p class="font-bold text-gray-800">車両価格とローン条件を入力</p>
                        <p class="text-sm text-gray-600">購入予定の車両価格、ローンの金利・年数を入力します。「とりあえず月々の支払額を知りたい」という場合にも便利です。</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">2</div>
                    <div>
                        <p class="font-bold text-gray-800">維持費の条件を設定</p>
                        <p class="text-sm text-gray-600">想定している月間走行距離などを入力すると、ガソリン代や税金、保険料を含めたリアルな維持費が自動計算されます。</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">3</div>
                    <div>
                        <p class="font-bold text-gray-800">「月額コスト」を確認</p>
                        <p class="text-sm text-gray-600">ローン支払額だけでなく、維持費を含めた「毎月実際に出ていくお金」がわかります。家計への影響を判断しましょう。</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 詳細説明セクション --}}
        <x-content-section
            title="車購入・維持費計算シミュレーターとは？"
            icon="info"
            category-color="cyan">

            <p class="text-gray-600 leading-relaxed mb-4">
                車購入・維持費計算シミュレーターは、購入費・ローン・税金・保険・燃料費を含めた車の総コストを簡単に試算する無料ツールです。
                月々の実質負担と5年後の総額を確認して、無理のないカーライフを実現できます。
            </p>

            <p class="text-gray-600 leading-relaxed mb-4">
                車の総コストは「車両価格」だけでなく、「ローン金利」「自動車税」「重量税」「自賠責保険」「任意保険」「車検費用」「燃料費」「駐車場代」「メンテナンス費」など多岐にわたります。
                これらを全て含めた「本当のコスト」を把握することが、賢い車選びの第一歩です。
            </p>

            <p class="text-gray-600 leading-relaxed">
                「月々3万円のローンなら払える」と思っても、維持費を含めると月5万円以上になることも。
                総コストを正確に把握して、家計に無理のない車選びをしましょう。
            </p>
        </x-content-section>

        {{-- 重要用語解説 --}}
        <x-content-section
            title="知っておきたい重要用語"
            icon="book"
            category-color="cyan">

            <div class="grid md:grid-cols-2 gap-6">
                <x-term-definition
                    term="残価設定ローン（残クレ）"
                    category-color="cyan">
                    数年後の車の価値（残価）を設定し、その分を差し引いた金額でローンを組む方式。月々の支払額は安くなる。
                    契約終了時に「返却」「買取」「再ローン」を選択。返却時は走行距離制限や傷・汚れの査定あり。
                    トータルの金利負担は通常のローンより高くなることが多いため、総支払額を確認することが重要。
                </x-term-definition>

                <x-term-definition
                    term="自動車税と重量税"
                    category-color="cyan">
                    自動車税は排気量に応じて毎年課税（軽自動車は10,800円、普通車は25,000円〜）。重量税は車検時に支払う。
                    エコカー減税対象車は重量税が免税または減税される。13年超の古い車は税額が高くなる。
                    軽自動車は自動車税・重量税ともに普通車より大幅に安いため、維持費を抑えたい場合は有力な選択肢。
                </x-term-definition>

                <x-term-definition
                    term="車検費用の内訳"
                    category-color="cyan">
                    法定費用（自賠責保険、重量税、印紙代）と整備費用（点検・整備・部品交換）の合計。法定費用は固定。
                    整備費用は車の状態や整備工場によって変動。ディーラーは高めだが、民間整備工場は比較的安価。
                    軽自動車で5〜7万円、普通車で7〜10万円が目安。2年に1回（新車は初回3年）の出費として計画が必要。
                </x-term-definition>

                <x-term-definition
                    term="任意保険（車両保険）"
                    category-color="cyan">
                    自賠責保険は対人賠償のみカバー。任意保険は対物・車両・人身傷害などを補償。加入率は約90%。
                    車両保険は自分の車の修理費を補償。新車や高額車は付けるべきだが、古い車は外すことで保険料を削減可能。
                    ネット型（ダイレクト型）保険は代理店型より安いが、事故対応の質も考慮して選ぶべき。
                </x-term-definition>

                <x-term-definition
                    term="実燃費とカタログ燃費"
                    category-color="cyan">
                    カタログ燃費（WLTCモード）は理想的な条件での数値。実燃費はカタログ燃費の70〜80%程度が目安。
                    市街地走行、エアコン使用、渋滞などで燃費は大きく悪化。ハイブリッド車は市街地で有利、高速では差が縮まる。
                    燃料費は月間走行距離×燃料単価÷実燃費で計算。走行距離が多い場合は燃費の良い車を選ぶと大きな差に。
                </x-term-definition>
            </div>
        </x-content-section>

        {{-- ケーススタディ --}}
        <x-case-study
            title="ローン年数を7年→5年に短縮して金利負担30万円削減"
            category-color="cyan">

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-red-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-red-100 rounded-full text-sm">Before</span>
                        7年ローンで月々の負担を軽減
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>車両価格：300万円、金利3%、7年ローン</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>月々の支払額：約4万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>総支払額：約333万円（金利負担33万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red-500 mt-1">✗</span>
                            <span>「月々の負担が軽い」と安心していた</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-emerald-600 mb-4 flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-100 rounded-full text-sm">After</span>
                        5年ローンに短縮
                    </h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>車両価格：300万円、金利3%、5年ローン</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>月々の支払額：約5.4万円</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>総支払額：約323万円（金利負担23万円）</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 mt-1">✓</span>
                            <span>10万円の金利削減に成功</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6 p-4 bg-cyan-50 rounded-xl border-l-4 border-cyan-500">
                <p class="text-sm text-gray-700 leading-relaxed">
                    <strong class="text-cyan-700">改善のポイント：</strong>
                    月々の支払額は1.4万円増えますが、2年早く完済でき、金利負担を10万円削減できました。
                    さらに、車の価値が下がる前に完済できるため、「逆ザヤ」（ローン残高＞車の価値）のリスクも回避。
                    「月々の負担」だけでなく「総支払額」と「完済時期」を総合的に判断することが重要です。
                    家計に余裕があれば、できるだけ短期間で完済することで、トータルの負担を大きく減らせます。
                </p>
            </div>
        </x-case-study>

        {{-- 関連ツール --}}
        @php
            $relatedTools = [
                [
                    'name' => 'ローン返済計算',
                    'url' => '/loan-repayment',
                    'description' => '住宅ローン返済計画',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
                ],
                [
                    'name' => '給与計算',
                    'url' => '/salary-calculator',
                    'description' => '手取り給与を算出',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                ],
                [
                    'name' => '引越し費用計算',
                    'url' => '/moving-cost',
                    'description' => '引越し費用を試算',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
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

        {{-- FAQ --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 車の維持費が安い車種は？</h3>
                    <p class="text-gray-600 leading-relaxed">軽自動車が最も維持費が安い傾向があります。自動車税が年間10,800円（普通車は25,000円〜）、重量税も安く、燃費も良いため燃料費も抑えられます。また、タイヤやオイルなどの消耗品も普通車より安価です。ただし、高速道路を頻繁に使う場合や長距離移動が多い場合は、普通車の方がトータルで有利になることもあります。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. カーローンの年数は何年が適切ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的に3〜7年が目安です。短いほど金利負担は減りますが、月々の支払額が高くなります。長いほど月々の負担は軽くなりますが、総支払額（金利負担）が増えます。また、車の価値は年々下がるため、ローン残高が車の価値を上回る「逆ザヤ」状態を避けるためにも、5年以内が推奨されることが多いです。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 車検費用はどれくらいかかりますか？</h3>
                    <p class="text-gray-600 leading-relaxed">軽自動車で5〜7万円、普通車で7〜10万円が目安です。内訳は法定費用（自賠責保険、重量税、印紙代）と整備費用（点検・整備・部品交換）です。法定費用は車種によってほぼ固定ですが、整備費用は車の状態や整備工場によって大きく変わります。ディーラーは高めですが、民間整備工場やカー用品店の車検は比較的安価です。</p>
                </div>
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 残価設定ローン（残クレ）のメリット・デメリットは？</h3>
                    <p class="text-gray-600 leading-relaxed">メリットは月々の支払額が通常のローンより安くなること。デメリットは、最終的に車を返却する場合、走行距離制限や傷・汚れの査定があり、追加費用が発生する可能性があること。また、買い取る場合は残価分を一括または再ローンで支払う必要があり、トータルの金利負担は通常のローンより高くなることが多いです。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 任意保険料を安くする方法は？</h3>
                    <p class="text-gray-600 leading-relaxed">複数の保険会社で見積もりを取り、比較することが最も効果的です。また、車両保険を外す、免責金額を高く設定する、ゴールド免許割引や安全装置割引を活用する、年間走行距離が少ない場合は走行距離割引を利用するなどの方法があります。ネット型（ダイレクト型）保険は代理店型より安い傾向がありますが、事故対応の質も考慮して選びましょう。</p>
                </div>
            </div>
        </div>

    </div>
</div>
