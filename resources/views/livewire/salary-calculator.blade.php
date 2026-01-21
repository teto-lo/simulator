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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">手取り給与計算</h1>
                <p class="text-lg md:text-xl text-amber-100 text-center md:text-left max-w-2xl">年収から所得税・住民税・社会保険料を差し引いた手取り額を瞬時に計算。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-amber-200/50">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-amber-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-amber-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">転職時の年収比較</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-orange-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">昇給後の実際の手取り確認</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-red-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">家計管理の基礎データ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-amber-500 to-orange-600 rounded-full"></span>
                    給与情報を入力
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-amber-500 to-orange-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        年収(円)
                    </label>
                    <input type="number" wire:model.live="annualSalary" class="w-full border-2 border-gray-200 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="5000000">
                    <p class="text-xs text-gray-500 ml-1">例: 500万円 → 「5000000」</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-amber-500 to-orange-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        ボーナス(円/年)
                    </label>
                    <input type="number" wire:model.live="bonus" class="w-full border-2 border-gray-200 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="0">
                    <p class="text-xs text-gray-500 ml-1">年間ボーナス総額</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-amber-500 to-orange-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        扶養人数(人)
                    </label>
                    <input type="number" wire:model.live="dependents" class="w-full border-2 border-gray-200 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="0">
                    <p class="text-xs text-gray-500 ml-1">配偶者・子供など</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-amber-500 to-orange-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                        社会保険
                    </label>
                    <div class="flex gap-4 pt-2">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="socialInsurance" value="1" class="mr-2 text-amber-600 focus:ring-amber-500">
                            <span class="text-sm">加入あり</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="socialInsurance" value="0" class="mr-2 text-amber-600 focus:ring-amber-500">
                            <span class="text-sm">加入なし</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-amber-50 rounded-2xl p-8 border-2 border-amber-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    手取り額計算結果
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                        <p class="text-xs text-amber-100 mb-2 font-semibold">手取り年収</p>
                        <p class="text-4xl font-bold text-white mb-1">¥{{ number_format($annualNetSalary) }}</p>
                        <p class="text-xs text-amber-200">年間</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                        <p class="text-xs text-orange-100 mb-2 font-semibold">手取り月収</p>
                        <p class="text-4xl font-bold text-white mb-1">¥{{ number_format($monthlyNetSalary) }}</p>
                        <p class="text-xs text-orange-200">月額</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">手取り率</p>
                        <p class="text-4xl font-bold text-amber-600 mb-1">{{ number_format($takeHomeRatio, 1) }}%</p>
                        <p class="text-xs text-gray-400">控除後の割合</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                    <h4 class="font-bold text-gray-800 mb-4 text-sm">控除内訳</h4>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                            <span class="text-sm text-gray-600">額面年収</span>
                            <span class="text-lg font-bold text-gray-800">¥{{ number_format($annualSalary) }}</span>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                            <span class="text-sm text-gray-600 flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                所得税
                            </span>
                            <span class="text-lg font-bold text-red-600">-¥{{ number_format($incomeTax) }}</span>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                            <span class="text-sm text-gray-600 flex items-center gap-2">
                                <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                                住民税
                            </span>
                            <span class="text-lg font-bold text-orange-600">-¥{{ number_format($residentTax) }}</span>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                            <span class="text-sm text-gray-600 flex items-center gap-2">
                                <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                社会保険料
                            </span>
                            <span class="text-lg font-bold text-blue-600">-¥{{ number_format($socialInsuranceFee) }}</span>
                        </div>
                        <div class="flex justify-between items-center pt-3 bg-amber-50 -mx-6 px-6 py-4 rounded-b-xl">
                            <span class="text-sm font-bold text-gray-800">手取り年収</span>
                            <span class="text-2xl font-bold text-amber-600">¥{{ number_format($annualNetSalary) }}</span>
                        </div>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-amber-50 to-orange-50 border-2 border-amber-200">
                    <p class="text-sm font-bold text-amber-800 flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        控除について
                    </p>
                    <p class="text-sm text-amber-700">
                        年収{{ number_format($annualSalary) }}円の場合、控除額は合計{{ number_format($totalDeductions) }}円です。実際の手取り額は{{ number_format($takeHomeRatio, 1) }}%になります。
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-amber-500 pl-6 py-4 bg-gradient-to-r from-amber-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 手取りはどれくらいになる?</h3>
                    <p class="text-gray-600">A. 一般的に額面の75-85%が手取りになります。年収が高いほど控除率も高くなります。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 控除額を減らす方法は?</h3>
                    <p class="text-gray-600">A. iDeCoや生命保険料控除、ふるさと納税などを活用すると所得控除が増えて税金が減ります。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 計算結果は正確?</h3>
                    <p class="text-gray-600">A. 概算値です。実際の控除額は、各種控除の適用状況により変動します。詳細は給与明細をご確認ください。</p>
                </div>
            </div>
        </div>
    </div>
</div>