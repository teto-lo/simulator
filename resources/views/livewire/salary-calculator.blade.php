<div class="min-h-screen bg-gradient-to-br from-slate-50 via-amber-50 to-orange-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-amber-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">手取り給与計算</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-amber-600 via-orange-600 to-red-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
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
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">手取り給与計算</h1>
                <p class="text-lg md:text-xl text-amber-100 text-center md:text-left max-w-2xl">年収から所得税・住民税・社会保険料を差し引いた手取り額を瞬時に計算。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-amber-200/50">
            <div class="flex items-start gap-4">
                <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl p-3 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <p class="text-sm text-gray-600">転職時の手取り確認</p>
                        <p class="text-sm text-gray-600">昇給後のシミュレーション</p>
                        <p class="text-sm text-gray-600">生活費の計画</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-amber-500 to-orange-600 rounded-full"></span>
                年収を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">年収（円）</label>
                    <input type="number" wire:model.live="annualSalary" placeholder="5000000"
                        class="w-full border-2 border-gray-200 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-xl p-4 text-lg font-semibold">
                    <p class="text-xs text-gray-500">額面の年収を入力</p>
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">扶養人数</label>
                    <input type="number" wire:model.live="dependents" placeholder="0"
                        class="w-full border-2 border-gray-200 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-xl p-4 text-lg font-semibold">
                </div>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-amber-50 rounded-2xl p-8 border-2 border-amber-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6">手取り額</h3>

                <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-8 mb-6 shadow-lg">
                    <p class="text-xs text-amber-100 mb-2">年間手取り額</p>
                    <p class="text-6xl font-bold text-white">¥{{ number_format($annualNetSalary) }}</p>
                    <p class="text-xs text-amber-200">月額 ¥{{ number_format($monthlyNetSalary) }}</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">年収（額面）</p>
                        <p class="text-xl font-bold">¥{{ number_format($annualSalary) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">所得税</p>
                        <p class="text-xl font-bold text-orange-600">¥{{ number_format($incomeTax) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">住民税</p>
                        <p class="text-xl font-bold text-orange-600">¥{{ number_format($residentTax) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">社会保険料</p>
                        <p class="text-xl font-bold text-orange-600">¥{{ number_format($socialInsuranceFee) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">控除合計</p>
                        <p class="text-xl font-bold text-red-600">¥{{ number_format($totalDeduction) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">手取り率</p>
                        <p class="text-xl font-bold text-green-600">{{ number_format($takeHomeRatio, 1) }}%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-amber-500 pl-6 py-4 bg-gradient-to-r from-amber-50/50 to-transparent">
                    <h3 class="font-bold">Q. 手取り率の目安は？</h3>
                    <p class="text-gray-600">一般的に75〜80%程度です。年収が高いほど手取り率は下がります。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/50 to-transparent">
                    <h3 class="font-bold">Q. ボーナスは含む？</h3>
                    <p class="text-gray-600">はい、年収にはボーナスを含めた額面総額を入力してください。</p>
                </div>
            </div>
        </div>

    </div>
</div>