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
                <li class="text-gray-900 font-semibold">複利計算シミュレーター</li>
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
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    複利計算シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-green-100 text-center md:text-left max-w-2xl">
                    投資の複利効果を可視化。元本・利率・期間で将来価値を瞬時に計算。
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
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 複利の力を実感</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-green-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">100万円を年利5%で10年運用するといくらに?</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-emerald-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">月3万円の積立で老後資金はいくら貯まる?</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-teal-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">NISA・iDeCoの運用シミュレーションに</p>
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
                    投資条件を入力
                </h2>
                <p class="text-sm text-gray-500 ml-4">元本と運用条件を入力してください</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        初期投資額(元本/円)
                    </label>
                    <input type="number" wire:model.live="principal"
                        class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="1000000">
                    <p class="text-xs text-gray-500 ml-1">例: 100万円 → 「1000000」と入力</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        年利率(%)
                    </label>
                    <input type="number" step="0.1" wire:model.live="annualRate"
                        class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="5.0">
                    <p class="text-xs text-gray-500 ml-1">目安: 株式投資 5~7%, 債券 2~4%</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        運用期間(年)
                    </label>
                    <input type="number" wire:model.live="years"
                        class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="10">
                    <p class="text-xs text-gray-500 ml-1">長期ほど複利効果が大きくなります</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                        月々の積立額(円)
                    </label>
                    <input type="number" wire:model.live="monthlyDeposit"
                        class="w-full border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="0">
                    <p class="text-xs text-gray-500 ml-1">積立なしの場合は「0」</p>
                </div>

                <div class="space-y-3 md:col-span-2">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">5</span>
                        複利計算の頻度
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="compoundFrequency" value="yearly"
                                class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">年次</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="compoundFrequency" value="quarterly"
                                class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">四半期</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="compoundFrequency" value="monthly"
                                class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">月次</span>
                        </label>
                    </div>
                </div>
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
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        運用結果シミュレーション
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div
                            class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                            <p class="text-xs text-green-100 mb-2 font-semibold">最終資産額</p>
                            <p class="text-4xl font-bold text-white mb-1">¥{{ number_format($futureValue) }}</p>
                            <p class="text-xs text-green-200">{{ $years }}年後</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <p class="text-xs text-gray-500 mb-2 font-semibold">元本合計</p>
                            <p class="text-3xl font-bold text-gray-800 mb-1">¥{{ number_format($totalDeposit) }}</p>
                            <p class="text-xs text-gray-400">投資した総額</p>
                        </div>

                        <div
                            class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border-2 border-emerald-400">
                            <p class="text-xs text-gray-500 mb-2 font-semibold">運用益</p>
                            <p class="text-3xl font-bold text-emerald-600 mb-1">¥{{ number_format($totalInterest) }}
                            </p>
                            <p class="text-xs text-gray-400">利益分</p>
                        </div>
                    </div>

                    @if (count($yearlyData) > 0)
                        <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                            <h4 class="font-bold text-gray-800 mb-4">年次推移</h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm">
                                    <thead>
                                        <tr class="border-b-2 border-gray-200">
                                            <th class="text-left py-3 px-2">年数</th>
                                            <th class="text-right py-3 px-2">資産額</th>
                                            <th class="text-right py-3 px-2">元本累計</th>
                                            <th class="text-right py-3 px-2">運用益</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($yearlyData as $data)
                                            <tr class="border-b border-gray-100 hover:bg-green-50">
                                                <td class="py-3 px-2 font-semibold">{{ $data['year'] }}年目</td>
                                                <td class="text-right py-3 px-2 font-bold text-green-600">
                                                    ¥{{ number_format($data['value']) }}</td>
                                                <td class="text-right py-3 px-2 text-gray-600">
                                                    ¥{{ number_format($data['deposit']) }}</td>
                                                <td class="text-right py-3 px-2 text-emerald-600">
                                                    +¥{{ number_format($data['interest']) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    <div class="p-5 rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200">
                        <p class="text-sm font-bold text-green-800 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            複利効果により、元本{{ number_format($totalDeposit) }}円が{{ number_format($futureValue) }}円に成長します!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ Section --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">よくある質問</h2>
                <p class="text-gray-600">複利運用についての疑問にお答えします</p>
            </div>

            <div class="space-y-6">
                <div
                    class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/50 to-transparent rounded-r-xl hover:from-green-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-green-600">Q.</span>
                        複利とは何ですか?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-green-600">A.</span>
                        複利とは、運用で得た利息や配当を元本に組み入れて再投資することで、雪だるま式に資産が増えていく仕組みです。長期投資ほど効果が大きくなります。
                    </p>
                </div>

                <div
                    class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/50 to-transparent rounded-r-xl hover:from-emerald-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-emerald-600">Q.</span>
                        年利5%は現実的ですか?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-emerald-600">A.</span>
                        株式インデックス投資の長期平均リターンは5~7%程度です。ただし、年によって変動があるため、あくまで目安としてご利用ください。
                    </p>
                </div>

                <div
                    class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/50 to-transparent rounded-r-xl hover:from-teal-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-teal-600">Q.</span>
                        NISAやiDeCoでも使えますか?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-teal-600">A.</span>
                        はい、NISA・iDeCoの運用シミュレーションにも最適です。非課税メリットを活かした長期投資の参考にご活用ください。
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>