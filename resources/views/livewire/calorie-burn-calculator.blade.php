<div class="min-h-screen bg-gradient-to-br from-slate-50 via-rose-50 to-red-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-rose-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">運動消費カロリー計算</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-rose-600 via-red-600 to-pink-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">運動消費カロリー計算</h1>
                <p class="text-lg md:text-xl text-rose-100 text-center md:text-left max-w-2xl">運動の種類と時間から消費カロリーを計算。15種類以上の運動に対応。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-rose-200/50">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-rose-500 to-red-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 運動効果を可視化</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-rose-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-rose-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">運動によるカロリー消費量</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-red-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">ダイエット計画の参考に</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div class="w-6 h-6 bg-pink-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-pink-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">トレーニング記録管理</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-8 bg-gradient-to-b from-rose-500 to-red-600 rounded-full"></span>
                    運動データを入力
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-rose-500 to-red-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                        体重(kg)
                    </label>
                    <input type="number" step="0.1" wire:model.live="weight" class="w-full border-2 border-gray-200 focus:border-rose-500 focus:ring-4 focus:ring-rose-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="65">
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-rose-500 to-red-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                        運動の種類
                    </label>
                    <select wire:model.live="exercise" class="w-full border-2 border-gray-200 focus:border-rose-500 focus:ring-4 focus:ring-rose-100 rounded-xl p-4 text-lg font-semibold transition-all">
                        @foreach($metValues as $key => $value)
                            <option value="{{ $key }}">{{ $value['name'] }} (MET {{ $value['met'] }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-gradient-to-br from-rose-500 to-red-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                        運動時間(分)
                    </label>
                    <input type="number" wire:model.live="duration" class="w-full border-2 border-gray-200 focus:border-rose-500 focus:ring-4 focus:ring-rose-100 rounded-xl p-4 text-lg font-semibold transition-all" placeholder="30">
                </div>
            </div>

            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-rose-50 rounded-2xl p-8 border-2 border-rose-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    消費カロリー計算結果
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-gradient-to-br from-rose-500 to-red-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                        <p class="text-xs text-rose-100 mb-2 font-semibold">消費カロリー</p>
                        <p class="text-5xl font-bold text-white mb-1">{{ number_format($caloriesBurned, 0) }}</p>
                        <p class="text-xs text-rose-200">kcal</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">脂肪燃焼量</p>
                        <p class="text-4xl font-bold text-orange-600 mb-1">{{ number_format($fatBurned, 1) }}</p>
                        <p class="text-xs text-gray-400">g</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">ウォーキング換算</p>
                        <p class="text-4xl font-bold text-blue-600 mb-1">{{ number_format($dailyWalkEquivalent, 0) }}</p>
                        <p class="text-xs text-gray-400">分</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                    <h4 class="font-bold text-gray-800 mb-4 text-sm">参考: 食品との比較</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center p-3 bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl border border-amber-200">
                            <p class="text-2xl mb-1">🍚</p>
                            <p class="text-xs text-gray-600 mb-1">ご飯</p>
                            <p class="text-sm font-bold text-gray-800">{{ number_format($caloriesBurned / 168, 1) }}杯</p>
                        </div>
                        <div class="text-center p-3 bg-gradient-to-br from-red-50 to-rose-50 rounded-xl border border-red-200">
                            <p class="text-2xl mb-1">🍔</p>
                            <p class="text-xs text-gray-600 mb-1">ハンバーガー</p>
                            <p class="text-sm font-bold text-gray-800">{{ number_format($caloriesBurned / 300, 1) }}個</p>
                        </div>
                        <div class="text-center p-3 bg-gradient-to-br from-yellow-50 to-amber-50 rounded-xl border border-yellow-200">
                            <p class="text-2xl mb-1">🍺</p>
                            <p class="text-xs text-gray-600 mb-1">ビール</p>
                            <p class="text-sm font-bold text-gray-800">{{ number_format($caloriesBurned / 140, 1) }}杯</p>
                        </div>
                        <div class="text-center p-3 bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl border border-pink-200">
                            <p class="text-2xl mb-1">🍰</p>
                            <p class="text-xs text-gray-600 mb-1">ケーキ</p>
                            <p class="text-sm font-bold text-gray-800">{{ number_format($caloriesBurned / 350, 1) }}個</p>
                        </div>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-gradient-to-r from-rose-50 to-red-50 border-2 border-rose-200">
                    <p class="text-sm font-bold text-rose-800 flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        MET値について
                    </p>
                    <p class="text-sm text-rose-700">
                        MET(メッツ)は運動強度の単位です。安静時を1として、運動がその何倍のエネルギーを消費するかを示します。消費カロリー = MET × 体重(kg) × 時間(h) × 1.05 で計算されます。
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 痩せるには何kcal消費すればいい?</h3>
                    <p class="text-gray-600">A. 脂肪1kgを減らすには約7,200kcalの消費が必要です。1日300kcal消費すると、約1ヶ月で1kg減量できます。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 効率的にカロリーを消費する運動は?</h3>
                    <p class="text-gray-600">A. HIIT、縄跳び、水泳(平泳ぎ)、ランニングなどが効率的です。MET値が高い運動ほど消費カロリーが多くなります。</p>
                </div>
                <div class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/50 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 毎日どれくらい運動すべき?</h3>
                    <p class="text-gray-600">A. 週150分の中強度運動(早歩きなど)が推奨されています。1日20-30分を目安に継続することが大切です。</p>
                </div>
            </div>
        </div>
    </div>
</div>