<div class="min-h-screen bg-gradient-to-br from-slate-50 via-pink-50 to-rose-100 py-8">

    {{-- Breadcrumb --}}
    <div class="max-w-6xl mx-auto px-4 mb-6">
        <nav class="text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-pink-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">基礎代謝・消費カロリー計算</li>
            </ol>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto px-4">

        {{-- Hero Section --}}
        <div
            class="relative overflow-hidden bg-gradient-to-br from-pink-600 via-rose-600 to-red-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div
                        class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    基礎代謝・消費カロリー計算
                </h1>
                <p class="text-lg md:text-xl text-pink-100 text-center md:text-left max-w-2xl">
                    年齢・性別・体重から基礎代謝量を算出。活動レベル別の消費カロリーも計算。
                </p>
            </div>
        </div>

        {{-- 使い方ガイド --}}
        <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-pink-200/50 hover:border-pink-300 transition-colors">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 ダイエット・増量の基本</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-pink-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-pink-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">1日の消費カロリーを把握</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-rose-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-rose-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">減量・増量の摂取カロリー目標設定</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-red-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">食事管理・栄養計画の基礎データに</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- フォーム・結果表示 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">

            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-pink-500 to-rose-600 rounded-full"></span>
                    身体データを入力
                </h2>
                <p class="text-sm text-gray-500 ml-4">現在の身体情報を入力してください</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-pink-500 to-rose-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        性別
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="gender" value="male"
                                class="mr-2 text-pink-600 focus:ring-pink-500">
                            <span class="text-sm">男性</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" wire:model.live="gender" value="female"
                                class="mr-2 text-pink-600 focus:ring-pink-500">
                            <span class="text-sm">女性</span>
                        </label>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-pink-500 to-rose-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        年齢(歳)
                    </label>
                    <input type="number" wire:model.live="age"
                        class="w-full border-2 border-gray-200 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="30">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-pink-500 to-rose-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        身長(cm)
                    </label>
                    <input type="number" step="0.1" wire:model.live="height"
                        class="w-full border-2 border-gray-200 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="170">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-pink-500 to-rose-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                        体重(kg)
                    </label>
                    <input type="number" step="0.1" wire:model.live="weight"
                        class="w-full border-2 border-gray-200 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-xl p-4 text-lg font-semibold transition-all"
                        placeholder="65">
                </div>

                <div class="space-y-3 md:col-span-2">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span
                            class="bg-gradient-to-br from-pink-500 to-rose-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">5</span>
                        活動レベル
                    </label>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                        <label
                            class="flex items-center justify-center cursor-pointer border-2 rounded-xl p-3 transition-all {{ $activityLevel === 'sedentary' ? 'border-pink-500 bg-pink-50' : 'border-gray-200 hover:border-pink-300' }}">
                            <input type="radio" wire:model.live="activityLevel" value="sedentary" class="sr-only">
                            <span class="text-sm font-semibold text-center">座り仕事<br><span
                                    class="text-xs text-gray-500">運動なし</span></span>
                        </label>
                        <label
                            class="flex items-center justify-center cursor-pointer border-2 rounded-xl p-3 transition-all {{ $activityLevel === 'light' ? 'border-pink-500 bg-pink-50' : 'border-gray-200 hover:border-pink-300' }}">
                            <input type="radio" wire:model.live="activityLevel" value="light" class="sr-only">
                            <span class="text-sm font-semibold text-center">軽い運動<br><span
                                    class="text-xs text-gray-500">週1~3回</span></span>
                        </label>
                        <label
                            class="flex items-center justify-center cursor-pointer border-2 rounded-xl p-3 transition-all {{ $activityLevel === 'moderate' ? 'border-pink-500 bg-pink-50' : 'border-gray-200 hover:border-pink-300' }}">
                            <input type="radio" wire:model.live="activityLevel" value="moderate" class="sr-only">
                            <span class="text-sm font-semibold text-center">中程度<br><span
                                    class="text-xs text-gray-500">週3~5回</span></span>
                        </label>
                        <label
                            class="flex items-center justify-center cursor-pointer border-2 rounded-xl p-3 transition-all {{ $activityLevel === 'active' ? 'border-pink-500 bg-pink-50' : 'border-gray-200 hover:border-pink-300' }}">
                            <input type="radio" wire:model.live="activityLevel" value="active" class="sr-only">
                            <span class="text-sm font-semibold text-center">活発<br><span
                                    class="text-xs text-gray-500">週6~7回</span></span>
                        </label>
                        <label
                            class="flex items-center justify-center cursor-pointer border-2 rounded-xl p-3 transition-all {{ $activityLevel === 'very_active' ? 'border-pink-500 bg-pink-50' : 'border-gray-200 hover:border-pink-300' }}">
                            <input type="radio" wire:model.live="activityLevel" value="very_active" class="sr-only">
                            <span class="text-sm font-semibold text-center">非常に活発<br><span
                                    class="text-xs text-gray-500">1日2回</span></span>
                        </label>
                    </div>
                </div>
            </div>

            {{-- 結果表示 --}}
            <div
                class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-pink-50 rounded-2xl p-8 border-2 border-pink-100 shadow-inner">
                <div
                    class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-pink-400/10 to-rose-600/10 rounded-full -mr-20 -mt-20">
                </div>

                <div class="relative">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        あなたの代謝・消費カロリー
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div
                            class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                            <p class="text-xs text-pink-100 mb-2 font-semibold">基礎代謝量(BMR)</p>
                            <p class="text-5xl font-bold text-white mb-1">{{ number_format($bmr) }}</p>
                            <p class="text-xs text-pink-200">kcal/日</p>
                            <p class="text-xs text-pink-100 mt-2">何もしなくても消費するカロリー</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-rose-500 to-red-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                            <p class="text-xs text-rose-100 mb-2 font-semibold">1日の消費カロリー(TDEE)</p>
                            <p class="text-5xl font-bold text-white mb-1">{{ number_format($tdee) }}</p>
                            <p class="text-xs text-rose-200">kcal/日</p>
                            <p class="text-xs text-rose-100 mt-2">活動量を含めた総消費カロリー</p>
                        </div>
                    </div>

                    {{-- 目的別カロリー --}}
                    <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                        <h4 class="font-bold text-gray-800 mb-4">目的別の推奨摂取カロリー</h4>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="text-center p-4 bg-red-50 rounded-xl border-2 border-red-200">
                                <p class="text-xs text-gray-600 mb-1">急速減量</p>
                                <p class="text-2xl font-bold text-red-600">{{ number_format($targetCalories['extreme_loss']) }}</p>
                                <p class="text-xs text-gray-500 mt-1">-1000kcal</p>
                            </div>
                            <div class="text-center p-4 bg-orange-50 rounded-xl border-2 border-orange-200">
                                <p class="text-xs text-gray-600 mb-1">減量</p>
                                <p class="text-2xl font-bold text-orange-600">{{ number_format($targetCalories['loss']) }}</p>
                                <p class="text-xs text-gray-500 mt-1">-500kcal</p>
                            </div>
                            <div class="text-center p-4 bg-yellow-50 rounded-xl border-2 border-yellow-200">
                                <p class="text-xs text-gray-600 mb-1">緩やか減量</p>
                                <p class="text-2xl font-bold text-yellow-600">{{ number_format($targetCalories['mild_loss']) }}</p>
                                <p class="text-xs text-gray-500 mt-1">-250kcal</p>
                            </div>
                            <div class="text-center p-4 bg-green-50 rounded-xl border-2 border-green-300">
                                <p class="text-xs text-gray-600 mb-1">維持</p>
                                <p class="text-2xl font-bold text-green-600">{{ number_format($targetCalories['maintain']) }}</p>
                                <p class="text-xs text-gray-500 mt-1">±0kcal</p>
                            </div>
                            <div class="text-center p-4 bg-blue-50 rounded-xl border-2 border-blue-200">
                                <p class="text-xs text-gray-600 mb-1">緩やか増量</p>
                                <p class="text-2xl font-bold text-blue-600">{{ number_format($targetCalories['mild_gain']) }}</p>
                                <p class="text-xs text-gray-500 mt-1">+250kcal</p>
                            </div>
                            <div class="text-center p-4 bg-indigo-50 rounded-xl border-2 border-indigo-200">
                                <p class="text-xs text-gray-600 mb-1">増量</p>
                                <p class="text-2xl font-bold text-indigo-600">{{ number_format($targetCalories['gain']) }}</p>
                                <p class="text-xs text-gray-500 mt-1">+500kcal</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 rounded-xl bg-gradient-to-r from-pink-50 to-rose-50 border-2 border-pink-200">
                        <p class="text-sm font-bold text-pink-800 flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            計算式について
                        </p>
                        <p class="text-sm text-pink-700 leading-relaxed">
                            Harris-Benedict式を使用して基礎代謝を計算しています。活動レベルに応じて係数を乗じてTDEEを算出します。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ Section --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">よくある質問</h2>
                <p class="text-gray-600">基礎代謝・カロリーについての疑問にお答えします</p>
            </div>

            <div class="space-y-6">
                <div
                    class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/50 to-transparent rounded-r-xl hover:from-pink-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-pink-600">Q.</span>
                        1kg減らすには何kcal必要?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-pink-600">A.</span>
                        体脂肪1kgを減らすには約7,200kcalの消費が必要です。1日500kcal削減すれば、約2週間で1kg減量できる計算になります。
                    </p>
                </div>

                <div
                    class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/50 to-transparent rounded-r-xl hover:from-rose-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-rose-600">Q.</span>
                        基礎代謝を上げる方法は?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-rose-600">A.</span>
                        筋トレで筋肉量を増やす、タンパク質を摂取する、十分な睡眠を取る、などが効果的です。筋肉が増えると基礎代謝が上がります。
                    </p>
                </div>

                <div
                    class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/50 to-transparent rounded-r-xl hover:from-red-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-red-600">Q.</span>
                        急速減量(-1000kcal)は安全?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-red-600">A.</span>
                        急速な減量は筋肉量の減少やリバウンドのリスクがあります。健康的には週0.5~1kgペースの緩やかな減量がおすすめです。
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>