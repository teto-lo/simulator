<div class="min-h-screen bg-gradient-to-br from-slate-50 via-purple-50 to-violet-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-purple-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">ROI計算シミュレーター</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-purple-600 via-violet-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">ROI計算シミュレーター</h1>
                <p class="text-lg md:text-xl text-purple-100 text-center md:text-left max-w-2xl">投資額・売上・コストから投資対効果(ROI)を瞬時に計算。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-purple-200/50">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-purple-500 to-violet-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-purple-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">広告キャンペーンの効果測定</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-violet-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-violet-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">設備投資の採算性判断</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-indigo-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">複数プロジェクトの比較</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-purple-500 to-violet-600 rounded-full"></span>
                    投資データを入力
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-purple-500 to-violet-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        投資額(円)
                    </label>
                    <input type="number" wire:model.live="investment" class="w-full border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="1000000">
                    <p class="text-xs text-gray-500 ml-1">初期投資額</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-purple-500 to-violet-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        売上・収益(円)
                    </label>
                    <input type="number" wire:model.live="revenue" class="w-full border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="1500000">
                    <p class="text-xs text-gray-500 ml-1">投資による売上</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-purple-500 to-violet-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        コスト(円)
                    </label>
                    <input type="number" wire:model.live="cost" class="w-full border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="800000">
                    <p class="text-xs text-gray-500 ml-1">運用コスト</p>
                </div>
            </div>

            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-purple-50 rounded-2xl p-8 border-2 border-purple-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    投資対効果分析
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="bg-gradient-to-br from-purple-500 to-violet-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                        <p class="text-xs text-purple-100 mb-2 font-semibold">ROI</p>
                        <p class="text-4xl font-bold text-white mb-1">{{ number_format($roiPercentage, 1) }}%</p>
                        <p class="text-xs text-purple-200">投資利益率</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">利益</p>
                        <p class="text-2xl font-bold {{ $profit >= 0 ? 'text-green-600' : 'text-red-600' }} mb-1">¥{{ number_format($profit) }}</p>
                        <p class="text-xs text-gray-400">純利益</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">投資額</p>
                        <p class="text-2xl font-bold text-gray-800 mb-1">¥{{ number_format($investment) }}</p>
                        <p class="text-xs text-gray-400">初期投資</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">損益分岐点</p>
                        <p class="text-2xl font-bold text-blue-600 mb-1">¥{{ number_format($breakEvenPoint) }}</p>
                        <p class="text-xs text-gray-400">必要売上</p>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-{{ $profit >= 0 ? 'green' : 'red' }}-50 to-{{ $profit >= 0 ? 'emerald' : 'rose' }}-50 border-2 border-{{ $profit >= 0 ? 'green' : 'red' }}-200">
                    <p class="text-sm font-bold text-{{ $profit >= 0 ? 'green' : 'red' }}-800 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        @if($profit >= 0)
                            投資が成功しています！ROI {{ number_format($roiPercentage, 1) }}% で{{ number_format(abs($roiPercentage)) }}%の利益率です。
                        @else
                            投資が赤字です。売上を増やすかコストを削減する必要があります。
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. ROIが高いほど良い投資?</h3>
                    <p class="text-gray-600">A. 一般的にそうですが、リスクや投資期間も考慮する必要があります。ROI 100%以上が優良投資の目安です。</p>
                </div>
                <div class="border-l-4 border-violet-500 pl-6 py-4 bg-gradient-to-r from-violet-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. ROIの計算式は?</h3>
                    <p class="text-gray-600">A. ROI = (利益 ÷ 投資額) × 100 です。利益は(売上 - コスト)で計算します。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. マイナスのROIの意味は?</h3>
                    <p class="text-gray-600">A. 投資額を回収できていない状態です。事業改善または投資中止を検討する必要があります。</p>
                </div>
            </div>
        </div>
    </div>
</div>