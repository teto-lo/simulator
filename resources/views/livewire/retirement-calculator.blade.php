<div class="min-h-screen bg-gradient-to-br from-slate-50 via-teal-50 to-cyan-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-teal-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">老後資金計算</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-teal-600 via-cyan-600 to-blue-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
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
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">老後資金計算</h1>
                <p class="text-lg md:text-xl text-teal-100 text-center md:text-left max-w-2xl">老後に必要な資金を計算。年金額、生活費、積立額から将来の資産を予測。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-teal-200/50">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 老後の不安を解消</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-teal-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">老後に必要な総資金を把握</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-cyan-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">年金だけで足りるか確認</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-blue-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">今から積立でいくら貯まる?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-teal-500 to-cyan-600 rounded-full"></span>
                    ライフプランを入力
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        現在の年齢(歳)
                    </label>
                    <input type="number" wire:model.live="currentAge" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="30">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        退職予定年齢(歳)
                    </label>
                    <input type="number" wire:model.live="retirementAge" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="65">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        平均余命(歳)
                    </label>
                    <input type="number" wire:model.live="lifeExpectancy" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="90">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                        老後の月間生活費(円)
                    </label>
                    <input type="number" wire:model.live="monthlyExpense" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="250000">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">5</span>
                        年金受給額(円/月)
                    </label>
                    <input type="number" wire:model.live="pension" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="150000">
                    <p class="text-xs text-gray-500 ml-1">平均: 15万円程度</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">6</span>
                        現在の貯蓄額(円)
                    </label>
                    <input type="number" wire:model.live="currentSavings" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="0">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">7</span>
                        月々の積立額(円)
                    </label>
                    <input type="number" wire:model.live="monthlyContribution" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="50000">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">8</span>
                        期待リターン(%)
                    </label>
                    <input type="number" step="0.1" wire:model.live="expectedReturn" class="w-full border-2 border-gray-200 focus:border-teal-500 focus:ring-4 focus:ring-teal-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="3.0">
                    <p class="text-xs text-gray-500 ml-1">保守的: 3%, 積極的: 5-7%</p>
                </div>
            </div>

            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-teal-50 rounded-2xl p-8 border-2 border-teal-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    老後資金シミュレーション結果
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl p-6 shadow-lg col-span-1 md:col-span-2">
                        <p class="text-xs text-teal-100 mb-2 font-semibold">必要な老後資金総額</p>
                        <p class="text-4xl font-bold text-white mb-1">¥{{ number_format($totalNeeded) }}</p>
                        <p class="text-xs text-teal-200">{{ $yearsInRetirement }}年間の不足分</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">退職までの期間</p>
                        <p class="text-3xl font-bold text-gray-800 mb-1">{{ $yearsToRetirement }}</p>
                        <p class="text-xs text-gray-400">年</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">老後期間</p>
                        <p class="text-3xl font-bold text-gray-800 mb-1">{{ $yearsInRetirement }}</p>
                        <p class="text-xs text-gray-400">年</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">年金受給総額</p>
                        <p class="text-2xl font-bold text-blue-600 mb-1">¥{{ number_format($pensionTotal) }}</p>
                    </div>

                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-6 shadow-lg col-span-1 md:col-span-2">
                        <p class="text-xs text-cyan-100 mb-2 font-semibold">現在の積立で到達する金額</p>
                        <p class="text-4xl font-bold text-white mb-1">¥{{ number_format($projectedSavings) }}</p>
                        <p class="text-xs text-cyan-200">退職時点の予想貯蓄額</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md border-2 {{ $gap >= 0 ? 'border-green-400' : 'border-red-400' }}">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">不足額/余剰額</p>
                        <p class="text-2xl font-bold {{ $gap >= 0 ? 'text-green-600' : 'text-red-600' }} mb-1">
                            {{ $gap >= 0 ? '+' : '' }}¥{{ number_format($gap) }}
                        </p>
                        <p class="text-xs text-gray-400">{{ $gap >= 0 ? '余裕あり' : '不足' }}</p>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-{{ $gap >= 0 ? 'green' : 'red' }}-50 to-{{ $gap >= 0 ? 'emerald' : 'rose' }}-50 border-2 border-{{ $gap >= 0 ? 'green' : 'red' }}-200">
                    <p class="text-sm font-bold text-{{ $gap >= 0 ? 'green' : 'red' }}-800 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        @if($gap >= 0)
                            現在の積立ペースで老後資金は十分です！余裕を持った老後生活が送れます。
                        @else
                            現在の積立では{{ number_format(abs($gap)) }}円不足します。積立額の増額または支出の見直しを検討しましょう。
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 老後資金2000万円問題とは?</h3>
                    <p class="text-gray-600">A. 平均的な老後生活で年金だけでは約2000万円不足すると言われています。ただし個人差が大きいです。</p>
                </div>
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. いくら積み立てれば安心?</h3>
                    <p class="text-gray-600">A. 月3-5万円を30年積み立てると、3-5%運用で2000-4000万円になります。早めの開始が重要です。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. NISAやiDeCoは活用すべき?</h3>
                    <p class="text-gray-600">A. はい、税制優遇があるため積極的に活用すべきです。特にiDeCoは所得控除も受けられます。</p>
                </div>
            </div>
        </div>
    </div>
</div>