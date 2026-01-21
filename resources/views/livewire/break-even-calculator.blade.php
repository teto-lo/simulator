<div class="min-h-screen bg-gradient-to-br from-slate-50 via-violet-50 to-purple-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-violet-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">損益分岐点計算</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-violet-600 via-purple-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">損益分岐点計算</h1>
                <p class="text-lg md:text-xl text-violet-100 text-center md:text-left max-w-2xl">固定費・変動費・販売価格から損益分岐点を瞬時に計算。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-violet-200/50">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-violet-500 to-purple-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-violet-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-violet-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">新規事業の売上目標設定</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-purple-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">商品価格の設定判断</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-indigo-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">コスト削減の効果試算</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-violet-500 to-purple-600 rounded-full"></span>
                    コスト・価格データを入力
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-violet-500 to-purple-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        固定費(円/月)
                    </label>
                    <input type="number" wire:model.live="fixedCost" class="w-full border-2 border-gray-200 focus:border-violet-500 focus:ring-4 focus:ring-violet-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="1000000">
                    <p class="text-xs text-gray-500 ml-1">家賃、人件費など</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-violet-500 to-purple-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        変動費(円/個)
                    </label>
                    <input type="number" wire:model.live="variableCostPerUnit" class="w-full border-2 border-gray-200 focus:border-violet-500 focus:ring-4 focus:ring-violet-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="500">
                    <p class="text-xs text-gray-500 ml-1">商品1個あたりの原価</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-violet-500 to-purple-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        販売価格(円/個)
                    </label>
                    <input type="number" wire:model.live="sellingPrice" class="w-full border-2 border-gray-200 focus:border-violet-500 focus:ring-4 focus:ring-violet-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="1000">
                    <p class="text-xs text-gray-500 ml-1">商品1個の販売価格</p>
                </div>
            </div>

            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-violet-50 rounded-2xl p-8 border-2 border-violet-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    損益分岐点分析
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl p-6 shadow-lg">
                        <p class="text-xs text-violet-100 mb-2 font-semibold">損益分岐点売上数量</p>
                        <p class="text-4xl font-bold text-white mb-1">{{ number_format($breakEvenUnits, 0) }}</p>
                        <p class="text-xs text-violet-200">個/月</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl p-6 shadow-lg">
                        <p class="text-xs text-purple-100 mb-2 font-semibold">損益分岐点売上高</p>
                        <p class="text-4xl font-bold text-white mb-1">¥{{ number_format($breakEvenRevenue) }}</p>
                        <p class="text-xs text-purple-200">/月</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">貢献利益</p>
                        <p class="text-3xl font-bold text-green-600 mb-1">¥{{ number_format($contributionMargin) }}</p>
                        <p class="text-xs text-gray-400">1個あたり</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">貢献利益率</p>
                        <p class="text-3xl font-bold text-blue-600 mb-1">{{ number_format($contributionMarginRatio, 1) }}%</p>
                        <p class="text-xs text-gray-400">利益率</p>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-violet-50 to-purple-50 border-2 border-violet-200">
                    <p class="text-sm font-bold text-violet-800 flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        損益分岐点について
                    </p>
                    <p class="text-sm text-violet-700">
                        月に{{ number_format($breakEvenUnits, 0) }}個販売すると、固定費と変動費がちょうど売上と等しくなります。これ以上販売すると利益が出ます。
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-violet-500 pl-6 py-4 bg-gradient-to-r from-violet-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 損益分岐点が高すぎる場合は?</h3>
                    <p class="text-gray-600">A. 固定費を削減するか、販売価格を上げるか、変動費を下げることで改善できます。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 貢献利益とは?</h3>
                    <p class="text-gray-600">A. 販売価格から変動費を引いた金額です。固定費の回収に貢献する利益を意味します。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 複数商品の場合は?</h3>
                    <p class="text-gray-600">A. 商品ごとに貢献利益を計算し、加重平均を使って算出する必要があります。</p>
                </div>
            </div>
        </div>
    </div>
</div>