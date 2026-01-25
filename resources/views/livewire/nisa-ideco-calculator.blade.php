<div class="min-h-screen bg-gradient-to-br from-slate-50 via-green-50 to-emerald-100 py-8">

    {{-- Breadcrumb --}}
    <div class="max-w-6xl mx-auto px-4 mb-6">
        <nav class="text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-green-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">NISA・iDeCo最適化ツール</li>
            </ol>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto px-4">

        {{-- Hero Section --}}
        <div
            class="relative overflow-hidden bg-gradient-to-br from-green-600 via-emerald-600 to-teal-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div
                        class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                            </path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    NISA・iDeCo最適化ツール
                </h1>
                <p class="text-lg md:text-xl text-green-100 text-center md:text-left max-w-2xl">
                    新NISA・iDeCoの運用シミュレーション。節税効果を含めた将来資産を瞬時に計算。
                </p>
            </div>
        </div>

        {{-- 使い方ガイド --}}
        <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-green-200/50 hover:border-green-300 transition-colors">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-green-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">老後資金の計画立案</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-emerald-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">NISA・iDeCoの最適配分</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-teal-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">節税効果の確認</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- フォーム・結果表示 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">

            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-green-500 to-emerald-600 rounded-full"></span>
                    運用条件を入力
                </h2>
                <p class="text-sm text-gray-500 ml-4">条件を入力すると自動で将来資産が表示されます</p>
            </div>

            {{-- 基本情報 --}}
            <div class="mb-8">
                <h3 class="text-lg font-bold text-gray-700 mb-4 flex items-center gap-2">
                    <span class="w-6 h-6 bg-green-100 rounded-lg flex items-center justify-center text-green-600 text-xs font-bold">1</span>
                    基本情報
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span
                                class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">①</span>
                            現在の年齢
                        </label>
                        <input type="number" wire:model.live="age" min="20" max="65"
                            class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                            placeholder="30">
                        <p class="text-xs text-gray-500 ml-1">20歳〜65歳</p>
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span
                                class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">②</span>
                            運用期間(年)
                        </label>
                        <input type="number" wire:model.live="investmentYears" min="1" max="45"
                            class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                            placeholder="30">
                        <p class="text-xs text-gray-500 ml-1">{{ $retirementAge }}歳まで運用</p>
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span
                                class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">③</span>
                            期待リターン(%/年)
                        </label>
                        <input type="number" step="0.1" wire:model.live="expectedReturn"
                            class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                            placeholder="5.0">
                        <p class="text-xs text-gray-500 ml-1">一般的に3〜7%</p>
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span
                                class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">④</span>
                            年収(円)
                        </label>
                        <input type="number" wire:model.live="annualIncome"
                            class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                            placeholder="5000000">
                        <p class="text-xs text-gray-500 ml-1">税率計算に使用</p>
                    </div>
                </div>
            </div>

            {{-- NISA設定 --}}
            <div class="mb-8 p-6 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl border-2 border-blue-200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-gray-700 flex items-center gap-2">
                        <span class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 text-xs font-bold">2</span>
                        新NISA設定
                    </h3>
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" wire:model.live="useNisa"
                            class="mr-2 w-5 h-5 text-blue-600 focus:ring-blue-500 rounded">
                        <span class="text-sm font-semibold text-gray-700">利用する</span>
                    </label>
                </div>

                @if ($useNisa)
                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            月々の積立額(円)
                        </label>
                        <input type="number" wire:model.live="nisaMonthly" max="100000"
                            class="w-full border-2 border-blue-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-xl p-4 text-lg font-semibold transition-all"
                            placeholder="100000">
                        <p class="text-xs text-blue-600 ml-1 font-semibold">💡 新NISAは月10万円(年120万円)まで非課税</p>
                    </div>
                @endif
            </div>

            {{-- iDeCo設定 --}}
            <div class="mb-8 p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl border-2 border-orange-200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-gray-700 flex items-center gap-2">
                        <span class="w-6 h-6 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 text-xs font-bold">3</span>
                        iDeCo設定
                    </h3>
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" wire:model.live="useIdeco"
                            class="mr-2 w-5 h-5 text-orange-600 focus:ring-orange-500 rounded">
                        <span class="text-sm font-semibold text-gray-700">利用する</span>
                    </label>
                </div>

                @if ($useIdeco)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                職業
                            </label>
                            <select wire:model.live="employeeType"
                                class="w-full border-2 border-orange-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-xl p-4 text-lg font-semibold transition-all">
                                @foreach ($idecoLimits as $key => $limit)
                                    <option value="{{ $key }}">{{ $limit['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                月々の掛金(円)
                            </label>
                            <input type="number" wire:model.live="idecoMonthly"
                                max="{{ $idecoLimits[$employeeType]['limit'] }}"
                                class="w-full border-2 border-orange-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="{{ $idecoLimits[$employeeType]['limit'] }}">
                            <p class="text-xs text-orange-600 ml-1 font-semibold">💡 上限: 月¥{{ number_format($idecoLimits[$employeeType]['limit']) }}(全額所得控除)</p>
                        </div>
                    </div>
                @endif
            </div>

            {{-- 結果表示 --}}
            <div
                class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-green-50 rounded-2xl p-8 border-2 border-green-100 shadow-inner">
                <div
                    class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-green-400/10 to-emerald-600/10 rounded-full -mr-20 -mt-20">
                </div>

                <div class="relative">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                            </path>
                        </svg>
                        {{ $investmentYears }}年後の資産シミュレーション
                    </h3>

                    {{-- 総資産 --}}
                    <div
                        class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-8 mb-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                        <p class="text-xs text-green-100 mb-2 font-semibold">{{ $retirementAge }}歳時点の総資産</p>
                        <p class="text-6xl font-bold text-white mb-1">¥{{ number_format($finalAmount) }}</p>
                        <p class="text-xs text-green-200">投資元本: ¥{{ number_format($totalInvestment) }} | 運用益: ¥{{ number_format($totalReturn) }}</p>
                    </div>

                    {{-- 内訳 --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        @if ($useNisa)
                            <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6">
                                <h4 class="text-sm font-bold text-blue-700 mb-4 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    新NISA
                                </h4>
                                <div class="space-y-3">
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1">運用資産</p>
                                        <p class="text-2xl font-bold text-blue-700">¥{{ number_format($nisaFinalAmount) }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1">投資元本</p>
                                        <p class="text-lg font-semibold text-gray-700">¥{{ number_format($nisaTotalInvestment) }}</p>
                                    </div>
                                    <div class="pt-2 border-t border-blue-200">
                                        <p class="text-xs text-gray-500 mb-1">節税効果(運用益非課税)</p>
                                        <p class="text-xl font-bold text-green-600">¥{{ number_format($nisaTaxSavings) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($useIdeco)
                            <div class="bg-orange-50 border-2 border-orange-200 rounded-xl p-6">
                                <h4 class="text-sm font-bold text-orange-700 mb-4 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    iDeCo
                                </h4>
                                <div class="space-y-3">
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1">運用資産</p>
                                        <p class="text-2xl font-bold text-orange-700">¥{{ number_format($idecoFinalAmount) }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1">投資元本</p>
                                        <p class="text-lg font-semibold text-gray-700">¥{{ number_format($idecoTotalInvestment) }}</p>
                                    </div>
                                    <div class="pt-2 border-t border-orange-200">
                                        <p class="text-xs text-gray-500 mb-1">節税効果(掛金控除)</p>
                                        <p class="text-xl font-bold text-green-600">¥{{ number_format($idecoTaxSavings) }}</p>
                                        <p class="text-xs text-orange-600 mt-1">年間: ¥{{ number_format($idecoAnnualTaxSavings) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- 節税効果まとめ --}}
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-300 rounded-xl p-6 mb-6">
                        <h4 class="text-lg font-bold text-green-800 mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            総節税効果
                        </h4>
                        <div class="flex items-center justify-between">
                            <p class="text-sm text-green-700">NISA・iDeCoによる節税効果の合計</p>
                            <p class="text-4xl font-bold text-green-600">¥{{ number_format($totalTaxSavings) }}</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200">
                        <p class="text-sm font-bold text-green-800 flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            注意事項
                        </p>
                        <p class="text-sm text-green-700 leading-relaxed">
                            この計算はシミュレーションです。実際の運用成績は市場環境により変動します。iDeCoは60歳まで引き出せません。新NISAは非課税期間が無期限化されました(2024年〜)。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ Section --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">よくある質問</h2>
                <p class="text-gray-600">NISA・iDeCoに関する疑問を解決</p>
            </div>

            <div class="space-y-6">
                <div
                    class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/50 to-transparent rounded-r-xl hover:from-green-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. NISAとiDeCoの違いは?</h3>
                    <p class="text-gray-600">A.
                        NISAは運用益が非課税、いつでも引き出し可能。iDeCoは掛金が全額所得控除、運用益も非課税ですが60歳まで引き出せません。両方併用できます。</p>
                </div>
                <div
                    class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/50 to-transparent rounded-r-xl hover:from-emerald-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 新NISAの変更点は?</h3>
                    <p class="text-gray-600">A.
                        2024年から非課税期間が無期限、年間投資枠が360万円(つみたて投資枠120万円+成長投資枠240万円)、生涯投資枠1800万円に拡大されました。</p>
                </div>
                <div
                    class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/50 to-transparent rounded-r-xl hover:from-teal-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. どちらを優先すべき?</h3>
                    <p class="text-gray-600">A.
                        一般的に、(1)会社の企業型DC、(2)iDeCo(所得控除のメリット大)、(3)NISA、の順がおすすめ。ただし流動性が必要ならNISA優先も検討を。</p>
                </div>
                <div
                    class="border-l-4 border-lime-500 pl-6 py-4 bg-gradient-to-r from-lime-50/50 to-transparent rounded-r-xl hover:from-lime-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. おすすめの投資商品は?</h3>
                    <p class="text-gray-600">A.
                        長期運用なら手数料の低いインデックスファンド(全世界株式、米国株式など)がおすすめ。リスク許容度に応じて債券を組み入れるのも良いでしょう。</p>
                </div>
            </div>
        </div>

    </div>
</div>