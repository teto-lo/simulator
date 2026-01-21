<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-cyan-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">引越し費用計算</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">引越し費用計算</h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">距離・間取り・時期から引越し費用の概算を瞬時に計算。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-cyan-200/50">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-cyan-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">引越し予算の事前確認</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-blue-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">複数業者の見積もり比較</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-indigo-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">繁忙期の追加費用確認</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-cyan-500 to-blue-600 rounded-full"></span>
                    引越し条件を入力
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-cyan-500 to-blue-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        移動距離(km)
                    </label>
                    <input type="number" wire:model.live="distance" class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="50">
                    <p class="text-xs text-gray-500 ml-1">50km以上は追加料金</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-cyan-500 to-blue-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        間取り
                    </label>
                    <select wire:model.live="roomSize" class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold transition-all">
                        @foreach($baseRates as $key => $rate)
                            <option value="{{ $key }}">{{ $rate['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-cyan-500 to-blue-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        階数
                    </label>
                    <input type="number" wire:model.live="floor" min="1" class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="1">
                    <p class="text-xs text-gray-500 ml-1">旧居・新居のうち高い方</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-cyan-500 to-blue-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                        エレベーター
                    </label>
                    <div class="flex gap-4 pt-2">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="hasElevator" value="1" class="mr-2 text-cyan-600 focus:ring-cyan-500">
                            <span class="text-sm">あり</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="hasElevator" value="0" class="mr-2 text-cyan-600 focus:ring-cyan-500">
                            <span class="text-sm">なし</span>
                        </label>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-cyan-500 to-blue-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">5</span>
                        時期
                    </label>
                    <div class="flex gap-4 pt-2">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="season" value="normal" class="mr-2 text-cyan-600 focus:ring-cyan-500">
                            <span class="text-sm">通常期</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="season" value="busy" class="mr-2 text-cyan-600 focus:ring-cyan-500">
                            <span class="text-sm">繁忙期(3-4月)</span>
                        </label>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-cyan-500 to-blue-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">6</span>
                        追加サービス
                    </label>
                    <div class="space-y-2">
                        @foreach($serviceRates as $key => $service)
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" wire:model.live="additionalServices" value="{{ $key }}" class="mr-2 text-cyan-600 focus:ring-cyan-500 rounded">
                                <span class="text-sm">{{ $service['name'] }} (+¥{{ number_format($service['rate']) }})</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-cyan-50 rounded-2xl p-8 border-2 border-cyan-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    引越し費用見積もり
                </h3>

                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-8 mb-6 shadow-lg">
                    <p class="text-xs text-cyan-100 mb-2 font-semibold">引越し費用総額（目安）</p>
                    <p class="text-6xl font-bold text-white mb-1">¥{{ number_format($totalCost) }}</p>
                    <p class="text-xs text-cyan-200">税込価格</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500 mb-1 font-semibold">基本料金</p>
                        <p class="text-xl font-bold text-gray-800">¥{{ number_format($baseCost) }}</p>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500 mb-1 font-semibold">距離料金</p>
                        <p class="text-xl font-bold text-gray-800">¥{{ number_format($distanceCost) }}</p>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500 mb-1 font-semibold">繁忙期割増</p>
                        <p class="text-xl font-bold text-orange-600">¥{{ number_format($seasonalSurcharge) }}</p>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500 mb-1 font-semibold">階数割増</p>
                        <p class="text-xl font-bold text-gray-800">¥{{ number_format($floorSurcharge) }}</p>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500 mb-1 font-semibold">追加サービス</p>
                        <p class="text-xl font-bold text-gray-800">¥{{ number_format($servicesCost) }}</p>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500 mb-1 font-semibold">作業時間目安</p>
                        <p class="text-xl font-bold text-blue-600">{{ number_format($estimatedTime / 60, 1) }}時間</p>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-cyan-50 to-blue-50 border-2 border-cyan-200">
                    <p class="text-sm font-bold text-cyan-800 flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        注意事項
                    </p>
                    <p class="text-sm text-cyan-700">
                        この金額はあくまで目安です。実際の費用は荷物量、作業条件、業者により異なります。正確な見積もりは複数業者に依頼することをおすすめします。
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 繁忙期はいつ?</h3>
                    <p class="text-gray-600">A. 3月〜4月の引越しシーズンです。この時期は料金が20-30%高くなる傾向があります。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 費用を抑えるコツは?</h3>
                    <p class="text-gray-600">A. 平日・午後便を選ぶ、荷物を減らす、自分で荷造りする、複数業者を比較することが効果的です。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. いつ予約すべき?</h3>
                    <p class="text-gray-600">A. 1〜2ヶ月前が理想です。繁忙期は2ヶ月前、通常期でも1ヶ月前には予約しましょう。</p>
                </div>
            </div>
        </div>
    </div>
</div>