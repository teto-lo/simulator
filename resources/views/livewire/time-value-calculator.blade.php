<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-cyan-600 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>ホーム</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">時間価値計算</li>
            </ol>
        </nav>

        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">時間価値計算</h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">あなたの時間はいくらの価値？時給換算で最適な意思決定を。</p>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-cyan-200/50">
            <div class="flex items-start gap-4">
                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-3 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <p class="text-sm text-gray-600">外注 vs 自分でやる判断</p>
                        <p class="text-sm text-gray-600">時間の価値を可視化</p>
                        <p class="text-sm text-gray-600">合理的な意思決定</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-cyan-500 to-blue-600 rounded-full"></span>
                条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">あなたの時給（円/時）</label>
                    <input type="number" wire:model.live="hourlyWage" placeholder="2000"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                    <p class="text-xs text-gray-500">目安: 年収400万 ≒ 2,000円/時</p>
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">タスクにかかる時間（時間）</label>
                    <input type="number" step="0.5" wire:model.live="taskTime" placeholder="2"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">外注費用（円）</label>
                    <input type="number" wire:model.live="taskCost" placeholder="5000"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-cyan-50 rounded-2xl p-8 border-2 border-cyan-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6">判定結果</h3>

                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-8 mb-6 shadow-lg">
                    <p class="text-xs text-cyan-100 mb-2">あなたの時間コスト</p>
                    <p class="text-6xl font-bold text-white">¥{{ number_format($timeValue) }}</p>
                    <p class="text-xs text-cyan-200">{{ $taskTime }}時間 × ¥{{ number_format($hourlyWage) }}/時</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <p class="text-xs text-gray-500 mb-2">外注費用</p>
                        <p class="text-2xl font-bold">¥{{ number_format($taskCost) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <p class="text-xs text-gray-500 mb-2">差額</p>
                        <p class="text-2xl font-bold {{ $timeValue > $taskCost ? 'text-green-600' : 'text-orange-600' }}">
                            {{ $timeValue > $taskCost ? '+' : '' }}¥{{ number_format($savings) }}
                        </p>
                    </div>
                </div>

                <div class="p-5 rounded-xl {{ $recommendation == 'buy' ? 'bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200' : 'bg-gradient-to-r from-orange-50 to-red-50 border-2 border-orange-200' }}">
                    <p class="text-sm font-bold {{ $recommendation == 'buy' ? 'text-green-800' : 'text-orange-800' }} mb-2">
                        {{ $recommendation == 'buy' ? '✅ 外注がお得' : '⚠️ 自分でやる方がお得' }}
                    </p>
                    <p class="text-sm {{ $recommendation == 'buy' ? 'text-green-700' : 'text-orange-700' }}">
                        {{ $recommendation == 'buy' 
                            ? '外注することで、あなたの時間を¥' . number_format($savings) . '分節約できます。' 
                            : '自分でやることで、¥' . number_format($savings) . '節約できます。' 
                        }}
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/50 to-transparent">
                    <h3 class="font-bold">Q. 時給の計算方法は？</h3>
                    <p class="text-gray-600">年収を2000で割ると概算の時給が出ます。（年収400万 ÷ 2000 = 2,000円/時）</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/50 to-transparent">
                    <h3 class="font-bold">Q. この計算は正確？</h3>
                    <p class="text-gray-600">あくまで目安です。スキル習得や楽しさなど、金銭以外の価値も考慮しましょう。</p>
                </div>
            </div>
        </div>

    </div>
</div>
