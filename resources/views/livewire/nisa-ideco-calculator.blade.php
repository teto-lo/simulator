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
                    </table>
                </div>
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
                    <p class="text-gray-600 leading-relaxed">iDeCoは加入時や毎月の口座管理に数百円の手数料がかかります。しかし、年収300万円以上の方であれば、所得控除による節税額（年間数万円〜）の方が、手数料総額（年間数千円）を大きく上回るため、実質的には得になるケースがほとんどです。ネット証券などの運営管理手数料が無料な窓口を選ぶのが鉄則です。</p>
                </div>
            </div>
        </div>
    </div>
</div>