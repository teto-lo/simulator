<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-8">

    {{-- Breadcrumb --}}
    <div class="max-w-6xl mx-auto px-4 mb-6">
        <nav class="text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-indigo-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">広告予算シミュレーター</li>
            </ol>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto px-4">

        {{-- Hero Section --}}
        <div
            class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div
                        class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    広告予算シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-blue-100 text-center md:text-left max-w-2xl">
                    予算内で何件獲得できるか、今すぐ試算。Google広告・SNS広告の予算策定に。
                </p>
            </div>
        </div>

        {{-- 使い方ガイド --}}
        <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-blue-200/50 hover:border-blue-300 transition-colors">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl p-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-blue-600 font-bold text-sm">1</span>
                            </div>
                            <p class="text-sm text-gray-600">「予算10万円で何件獲得できる?」を即座に試算</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-indigo-600 font-bold text-sm">2</span>
                            </div>
                            <p class="text-sm text-gray-600">上司への予算申請前のシミュレーション</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <div
                                class="w-6 h-6 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="text-purple-600 font-bold text-sm">3</span>
                            </div>
                            <p class="text-sm text-gray-600">クライアント提案資料の見積もり作成</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- モード切替タブ --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-t-3xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-2 gap-0">
                <button wire:click="$set('mode', 'plan')"
                    class="relative py-5 px-4 text-center font-bold transition-all duration-300 group
                        {{ $mode === 'plan' ? 'bg-white text-indigo-600' : 'bg-gray-50/50 text-gray-500 hover:bg-gray-100/50' }}">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm md:text-base">予算 → 獲得数</span>
                    </div>
                    @if ($mode === 'plan')
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-indigo-600">
                        </div>
                    @endif
                </button>

                <button wire:click="$set('mode', 'reverse')"
                    class="relative py-5 px-4 text-center font-bold transition-all duration-300 group
                        {{ $mode === 'reverse' ? 'bg-white text-purple-600' : 'bg-gray-50/50 text-gray-500 hover:bg-gray-100/50' }}">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                        </svg>
                        <span class="text-sm md:text-base">目標CV → 予算</span>
                    </div>
                    @if ($mode === 'reverse')
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 to-pink-600">
                        </div>
                    @endif
                </button>
            </div>
        </div>

        {{-- フォーム・結果表示 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-b-3xl shadow-2xl p-6 md:p-10 mb-12">

            @if ($mode === 'plan')
                {{-- 予算から獲得数を計算 --}}
                <section>
                    <div class="mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                            <span class="w-2 h-8 bg-gradient-to-b from-blue-500 to-indigo-600 rounded-full"></span>
                            広告予算から獲得数を試算
                        </h2>
                        <p class="text-sm text-gray-500 ml-4">月○○万円使ったら何件獲得できるか?を計算します</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <div class="space-y-3 group">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                                月間広告予算（円）
                            </label>
                            <input type="number" wire:model.live="budget"
                                class="w-full border-2 border-gray-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="100000">
                            <p class="text-xs text-gray-500 ml-1 flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                例: 10万円 → 「100000」と入力
                            </p>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                                想定CPC（クリック単価/円）
                            </label>
                            <input type="number" wire:model.live="cpc"
                                class="w-full border-2 border-gray-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="100">
                            <p class="text-xs text-gray-500 ml-1">業界平均: 50〜200円</p>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                                想定CVR（成約率/%）
                            </label>
                            <input type="number" step="0.1" wire:model.live="cvr"
                                class="w-full border-2 border-gray-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="2.5">
                            <p class="text-xs text-gray-500 ml-1">業界平均: 1〜5%</p>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                                商品単価（円）
                            </label>
                            <input type="number" wire:model.live="unitPrice"
                                class="w-full border-2 border-gray-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="10000">
                            <p class="text-xs text-gray-500 ml-1">1件あたりの売上金額</p>
                        </div>
                    </div>

                    {{-- 結果表示 --}}
                    <div
                        class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-blue-50 rounded-2xl p-8 border-2 border-blue-100 shadow-inner">
                        <div
                            class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-blue-400/10 to-indigo-600/10 rounded-full -mr-20 -mt-20">
                        </div>

                        <div class="relative">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                月間で獲得できる見込み
                            </h3>

                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                                <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow">
                                    <p class="text-xs text-gray-500 mb-2 font-semibold">クリック数</p>
                                    <p class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($clicks) }}</p>
                                    <p class="text-xs text-gray-400">回</p>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-indigo-500 to-blue-600 rounded-xl p-5 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                                    <p class="text-xs text-indigo-100 mb-2 font-semibold">獲得CV数</p>
                                    <p class="text-4xl font-bold text-white mb-1">{{ number_format($conversions, 1) }}
                                    </p>
                                    <p class="text-xs text-indigo-200">件</p>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow">
                                    <p class="text-xs text-gray-500 mb-2 font-semibold">想定売上</p>
                                    <p class="text-2xl font-bold text-blue-600 mb-1">¥{{ number_format($revenue) }}</p>
                                </div>

                                <div
                                    class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow border-2 {{ $profit >= 0 ? 'border-green-400' : 'border-red-400' }}">
                                    <p class="text-xs text-gray-500 mb-2 font-semibold">利益</p>
                                    <p
                                        class="text-2xl font-bold {{ $profit >= 0 ? 'text-green-600' : 'text-red-600' }} mb-1">
                                        ¥{{ number_format($profit) }}
                                    </p>
                                </div>
                            </div>

                            <div
                                class="p-5 rounded-xl {{ $profit >= 0 ? 'bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200' : 'bg-gradient-to-r from-red-50 to-rose-50 border-2 border-red-200' }}">
                                <p
                                    class="text-sm font-bold {{ $profit >= 0 ? 'text-green-800' : 'text-red-800' }} flex items-center gap-2">
                                    @if ($profit >= 0)
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        黒字予測です（CPA:
                                        ¥{{ $conversions > 0 ? number_format($budget / $conversions) : 0 }}）
                                    @else
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        赤字予測です - CVRまたは商品単価の改善が必要
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                {{-- 目標CV数から予算を計算 --}}
                <section>
                    <div class="mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800 flex items-center gap-2">
                            <span class="w-2 h-8 bg-gradient-to-b from-purple-500 to-pink-600 rounded-full"></span>
                            目標CV数から必要予算を逆算
                        </h2>
                        <p class="text-sm text-gray-500 ml-4">月30件獲得するには予算いくら必要?を計算します</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                                目標CV数（件/月）
                            </label>
                            <input type="number" wire:model.live="targetConversions"
                                class="w-full border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="30">
                            <p class="text-xs text-gray-500 ml-1">例: 月30件獲得したい</p>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                                想定CVR（成約率/%）
                            </label>
                            <input type="number" step="0.1" wire:model.live="reverseCvr"
                                class="w-full border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="2.5">
                            <p class="text-xs text-gray-500 ml-1">業界平均: 1〜5%</p>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                                想定CPC（クリック単価/円）
                            </label>
                            <input type="number" wire:model.live="reverseCpc"
                                class="w-full border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="100">
                            <p class="text-xs text-gray-500 ml-1">業界平均: 50〜200円</p>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-bold text-gray-700">
                                <span
                                    class="bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                                商品単価（円）
                            </label>
                            <input type="number" wire:model.live="reverseUnitPrice"
                                class="w-full border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-xl p-4 text-lg font-semibold transition-all"
                                placeholder="10000">
                            <p class="text-xs text-gray-500 ml-1">1件あたりの売上金額</p>
                        </div>
                    </div>

                    {{-- 逆算結果表示 --}}
                    <div
                        class="relative overflow-hidden bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border-2 border-purple-100 shadow-inner">
                        <div
                            class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-purple-400/10 to-pink-600/10 rounded-full -mr-20 -mt-20">
                        </div>

                        <div class="relative">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                必要な広告予算
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                <div
                                    class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                                    <p class="text-xs text-purple-100 mb-2 font-semibold">必要予算</p>
                                    <p class="text-4xl font-bold text-white mb-1">
                                        ¥{{ number_format($requiredBudget) }}</p>
                                    <p class="text-xs text-purple-200">/ 月</p>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                                    <p class="text-xs text-gray-500 mb-2 font-semibold">必要クリック数</p>
                                    <p class="text-3xl font-bold text-indigo-600 mb-1">
                                        {{ number_format($requiredClicks) }}</p>
                                    <p class="text-xs text-gray-400">回</p>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                                    <p class="text-xs text-gray-500 mb-2 font-semibold">想定売上</p>
                                    <p class="text-2xl font-bold text-blue-600 mb-1">
                                        ¥{{ number_format($expectedRevenue) }}</p>
                                </div>
                            </div>

                            @if ($requiredBudget > 0)
                                <div class="grid grid-cols-2 gap-4 mb-6">
                                    <div class="bg-white rounded-xl p-4 text-center shadow-md">
                                        <p class="text-xs text-gray-500 mb-2 font-semibold">CPA（獲得単価）</p>
                                        <p class="text-2xl font-bold text-gray-700">
                                            ¥{{ number_format($requiredBudget / $targetConversions) }}</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-4 text-center shadow-md">
                                        <p class="text-xs text-gray-500 mb-2 font-semibold">ROAS（広告費回収率）</p>
                                        <p class="text-2xl font-bold text-gray-700">
                                            {{ $requiredBudget > 0 ? number_format(($expectedRevenue / $requiredBudget) * 100, 0) : 0 }}%
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="p-5 rounded-xl {{ $requiredBudget <= 1000000 ? 'bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200' : ($requiredBudget <= 3000000 ? 'bg-gradient-to-r from-yellow-50 to-amber-50 border-2 border-yellow-200' : 'bg-gradient-to-r from-red-50 to-rose-50 border-2 border-red-200') }}">
                                    <p
                                        class="text-sm font-bold {{ $requiredBudget <= 1000000 ? 'text-green-800' : ($requiredBudget <= 3000000 ? 'text-yellow-800' : 'text-red-800') }} flex items-center gap-2">
                                        @if ($requiredBudget <= 1000000)
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            月100万円以内で達成可能な目標です
                                        @elseif($requiredBudget <= 3000000)
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            やや高額ですが、段階的な配信で調整可能
                                        @else
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            高額予算が必要です - CVR改善やCPC削減を検討してください
                                        @endif
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>
            @endif
        </div>

        {{-- FAQ Section --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">よくある質問</h2>
                <p class="text-gray-600">使い方に迷ったらこちらをご確認ください</p>
            </div>

            <div class="space-y-6">
                <div
                    class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/50 to-transparent rounded-r-xl hover:from-indigo-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-indigo-600">Q.</span>
                        CVRの目安がわかりません
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-indigo-600">A.</span>
                        一般的に、リスティング広告で1〜3%、ディスプレイ広告で0.5〜1%が平均です。初めての場合は保守的に2%程度で試算することをおすすめします。
                    </p>
                </div>

                <div
                    class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/50 to-transparent rounded-r-xl hover:from-blue-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-blue-600">Q.</span>
                        CPCの目安がわかりません
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-blue-600">A.</span>
                        業界や商材により異なりますが、Google広告のキーワードプランナーで事前に調査できます。一般的には50〜200円の範囲が多いです。
                    </p>
                </div>

                <div
                    class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/50 to-transparent rounded-r-xl hover:from-purple-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-purple-600">Q.</span>
                        シミュレーション通りの結果が出ますか?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-purple-600">A.</span>
                        あくまで試算であり、実際の配信結果は広告文やLPの質、競合状況により変動します。配信開始後は定期的にデータを確認し、最適化してください。
                    </p>
                </div>

                <div
                    class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/50 to-transparent rounded-r-xl hover:from-green-50 transition-colors">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg flex items-center gap-2">
                        <span class="text-green-600">Q.</span>
                        無料で使えますか?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold text-green-600">A.</span> はい、完全無料です。登録不要で何度でもご利用いただけます。
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
