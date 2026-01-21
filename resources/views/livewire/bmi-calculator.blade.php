<div class="min-h-screen bg-gradient-to-br from-slate-50 via-red-50 to-pink-100 py-8">

    {{-- Breadcrumb --}}
    <div class="max-w-6xl mx-auto px-4 mb-6">
        <nav class="text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-red-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">BMI・適正体重計算</li>
            </ol>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto px-4">

        {{-- Hero Section --}}
        <div
            class="relative overflow-hidden bg-gradient-to-br from-red-600 via-pink-600 to-rose-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div
                        class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    BMI・適正体重計算
                </h1>
                <p class="text-lg md:text-xl text-red-100 text-center md:text-left max-w-2xl">
                    身長と体重からBMI値を算出。肥満度判定と健康アドバイス付き。
                </p>
            </div>
        </div>

        {{-- 使い方ガイド --}}
        <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-red-200/50 hover:border-red-300 transition-colors">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 健康管理の第一歩</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-red-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">自分の体型が標準かチェック</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-pink-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-pink-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">ダイエット・増量の目標設定</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-rose-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-rose-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">健康診断の参考データに</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- フォーム・結果表示 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">

            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-red-500 to-pink-600 rounded-full"></span>
                    身体データを入力
                </h2>
                <p class="text-sm text-gray-500 ml-4">現在の身長と体重を入力してください</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-red-500 to-pink-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        身長(cm)
                    </label>
                    <input type="number" step="0.1" wire:model.live="height"
                        class="w-full border-2 border-gray-200 focus:border-red-500 focus:ring-4 focus:ring-red-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="170">
                    <p class="text-xs text-gray-500 ml-1">例: 170.5cm</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-red-500 to-pink-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        体重(kg)
                    </label>
                    <input type="number" step="0.1" wire:model.live="weight"
                        class="w-full border-2 border-gray-200 focus:border-red-500 focus:ring-4 focus:ring-red-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="65">
                    <p class="text-xs text-gray-500 ml-1">例: 65.5kg</p>
                </div>
            </div>

            {{-- 結果表示 --}}
            <div
                class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-red-50 rounded-2xl p-8 border-2 border-red-100 shadow-inner">
                <div
                    class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-red-400/10 to-pink-600/10 rounded-full -mr-20 -mt-20">
                </div>

                <div class="relative">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                        あなたのBMI判定
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div
                            class="bg-gradient-to-br from-red-500 to-pink-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                            <p class="text-xs text-red-100 mb-2 font-semibold">あなたのBMI</p>
                            <p class="text-5xl font-bold text-white mb-1">{{ number_format($bmi, 1) }}</p>
                            <p class="text-xs text-red-200">Body Mass Index</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                            <p class="text-xs text-gray-500 mb-2 font-semibold">適正体重(BMI22)</p>
                            <p class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($standardWeight, 1) }}kg
                            </p>
                            <p class="text-xs text-gray-400">
                                @if ($weight > $standardWeight)
                                    <span class="text-orange-600">-{{ number_format($weight - $standardWeight, 1) }}kg</span>
                                @elseif($weight < $standardWeight)
                                    <span class="text-blue-600">+{{ number_format($standardWeight - $weight, 1) }}kg</span>
                                @else
                                    <span class="text-green-600">理想的!</span>
                                @endif
                            </p>
                        </div>

                        <div
                            class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border-2 border-{{ $categoryColor }}-400">
                            <p class="text-xs text-gray-500 mb-2 font-semibold">判定</p>
                            <p class="text-2xl font-bold text-{{ $categoryColor }}-600 mb-1">{{ $category }}</p>
                            <p class="text-xs text-gray-400">体型分類</p>
                        </div>
                    </div>

                    {{-- BMIスケール --}}
                    <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                        <h4 class="font-bold text-gray-800 mb-4 text-sm">BMI基準値</h4>
                        <div class="relative h-10 bg-gradient-to-r from-blue-300 via-green-400 via-yellow-400 via-orange-400 to-red-500 rounded-full overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-between px-4 text-xs font-bold text-white">
                                <span>18.5</span>
                                <span>25</span>
                                <span>30</span>
                                <span>35</span>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2 text-xs text-gray-600">
                            <span>低体重</span>
                            <span>普通</span>
                            <span>肥満1</span>
                            <span>肥満2</span>
                            <span>肥満3</span>
                        </div>
                    </div>

                    {{-- アドバイス --}}
                    <div
                        class="p-5 rounded-xl bg-gradient-to-r from-{{ $categoryColor }}-50 to-{{ $categoryColor }}-50 border-2 border-{{ $categoryColor }}-200">
                        <p class="text-sm font-bold text-{{ $categoryColor }}-800 flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            健康アドバイス
                        </p>
                        <p class="text-sm text-{{ $categoryColor }}-700 leading-relaxed">
                            {{ $advice }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ Section --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">よくある質問</h2>
                <p class="text-gray-600">BMIについての疑問にお答えします</p>
            </div>

            <div class="space-y-6">
                <div
                    class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/50 to-transparent rounded-r-xl hover:from-red-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-red-600">Q.</span>
                        BMI22が最も健康的なの?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-red-600">A.</span>
                        統計的にBMI22前後が最も病気になりにくいとされています。ただし、筋肉量や体脂肪率も重要な指標です。
                    </p>
                </div>

                <div
                    class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/50 to-transparent rounded-r-xl hover:from-pink-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-pink-600">Q.</span>
                        筋肉質でもBMIは高くなる?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-pink-600">A.</span>
                        はい、筋肉は脂肪より重いため、アスリートなどはBMIが高めになります。体脂肪率も併せて確認することをおすすめします。
                    </p>
                </div>

                <div
                    class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/50 to-transparent rounded-r-xl hover:from-rose-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-rose-600">Q.</span>
                        BMIだけで健康状態は判断できる?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-rose-600">A.</span>
                        BMIは目安の一つです。正確な健康状態は、体脂肪率、内臓脂肪、血液検査なども含めて総合的に判断する必要があります。
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>