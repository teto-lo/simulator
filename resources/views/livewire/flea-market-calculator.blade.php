<div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50 to-red-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-orange-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">フリマ利益計算</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-orange-600 via-red-600 to-rose-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">フリマ利益計算</h1>
                <p class="text-lg md:text-xl text-orange-100 text-center md:text-left max-w-2xl">メルカリ・ラクマの手数料・送料を差し引いた純利益を自動計算。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-orange-200/50">
            <div class="flex items-start gap-4">
                <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl p-3 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <p class="text-sm text-gray-600">出品前の利益確認</p>
                        <p class="text-sm text-gray-600">プラットフォーム比較</p>
                        <p class="text-sm text-gray-600">価格設定の参考</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-orange-500 to-red-600 rounded-full"></span>
                販売条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">プラットフォーム</label>
                    <select wire:model.live="platform"
                        class="w-full border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-xl p-4 text-lg font-semibold">
                        <option value="mercari">メルカリ（10%）</option>
                        <option value="rakuma">ラクマ（6.6%）</option>
                        <option value="yahoo">ヤフオク（10%）</option>
                    </select>
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">販売価格（円）</label>
                    <input type="number" wire:model.live="sellingPrice" placeholder="3000"
                        class="w-full border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">送料（円）</label>
                    <input type="number" wire:model.live="shippingCost" placeholder="200"
                        class="w-full border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">仕入れ値（円）</label>
                    <input type="number" wire:model.live="purchasePrice" placeholder="1000"
                        class="w-full border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-xl p-4 text-lg font-semibold">
                </div>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-orange-50 rounded-2xl p-8 border-2 border-orange-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6">利益計算結果</h3>

                <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-xl p-8 mb-6 shadow-lg">
                    <p class="text-xs text-orange-100 mb-2">純利益</p>
                    <p class="text-6xl font-bold text-white">¥{{ number_format($profit) }}</p>
                    <p class="text-xs text-orange-200">利益率 {{ number_format($profitRate, 1) }}%</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">販売価格</p>
                        <p class="text-xl font-bold">¥{{ number_format($sellingPrice) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">手数料</p>
                        <p class="text-xl font-bold text-orange-600">¥{{ number_format($salesFee) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">送料</p>
                        <p class="text-xl font-bold">¥{{ number_format($shippingCost) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">仕入れ値</p>
                        <p class="text-xl font-bold">¥{{ number_format($purchasePrice) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">総コスト</p>
                        <p class="text-xl font-bold text-red-600">¥{{ number_format($totalCost) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/50 to-transparent">
                    <h3 class="font-bold">Q. 手数料が一番安いのは？</h3>
                    <p class="text-gray-600">ラクマが6.6%で最も安いです。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/50 to-transparent">
                    <h3 class="font-bold">Q. 送料込みの場合は？</h3>
                    <p class="text-gray-600">送料を0円に設定してください。</p>
                </div>
            </div>
        </div>

    </div>
</div>
