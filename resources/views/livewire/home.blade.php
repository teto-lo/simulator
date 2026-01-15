<div class="min-h-screen bg-gradient-to-br from-slate-50 via-purple-50 to-pink-50">

    {{-- Hero Section --}}
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-600/10 to-pink-600/10"></div>
        <div class="absolute inset-0"
            style="background-image: radial-gradient(circle at 1px 1px, rgb(148 163 184 / 0.1) 1px, transparent 0); background-size: 40px 40px;">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 py-20 sm:py-28">
            <div class="text-center">
                <div
                    class="inline-flex items-center justify-center p-2 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl mb-6 shadow-2xl transform hover:scale-105 transition-transform duration-300">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>

                <h1
                    class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 mb-6">
                    シミュレーションツール集
                </h1>

                <p class="text-xl md:text-2xl text-gray-600 mb-4 font-medium">
                    ビジネスから日常まで、<span class="text-purple-600 font-bold">あらゆる計算</span>を瞬時に実行
                </p>

                <p class="text-gray-500 text-lg mb-8">
                    完全無料・登録不要・何度でも使える
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-md">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">完全無料</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-md">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">登録不要</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-md">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">リアルタイム計算</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Category Sections --}}
    <div class="max-w-7xl mx-auto px-4 pb-20">

        {{-- マーケティング --}}
        <section class="mb-20">
            <div class="flex items-center gap-3 mb-8 mt-12">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">マーケティング</h2>
                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">1 tools</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- 広告予算シミュレーター --}}
                <a href="/ad-cost" class="group block">
                    <div
                        class="relative h-full bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden border-2 border-transparent hover:border-indigo-400">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-indigo-600/20 rounded-bl-full">
                        </div>

                        <div class="p-8 relative">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>

                            <div class="mb-2">
                                <span
                                    class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold mb-3">人気</span>
                            </div>

                            <h3
                                class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">
                                広告予算シミュレーター
                            </h3>

                            <p class="text-gray-600 mb-6 leading-relaxed">
                                予算・CPC・CVRを入力するだけで、月間獲得数と利益を瞬時に計算。目標CV数からの逆算機能も搭載。
                            </p>

                            <div class="space-y-2 mb-6">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    予算 → 獲得数を計算
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    目標CV → 必要予算を逆算
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    CPA・ROAS・利益も自動算出
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-indigo-600 font-bold group-hover:underline">
                                    今すぐ使う →
                                </span>
                                <div class="flex items-center gap-1 text-xs text-gray-400">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>3,240</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- 金融・投資 --}}
        <section class="mb-20">
            <div class="flex items-center gap-3 mb-8">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">金融・投資</h2>
                <span class="px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-sm font-semibold">Coming Soon</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- 複利計算 --}}
                <div class="group block opacity-60 cursor-not-allowed">
                    <div
                        class="relative h-full bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-dashed border-gray-300">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-300/20 to-emerald-400/20 rounded-bl-full">
                        </div>
                        <div class="p-8 relative">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-gray-300 to-gray-400 rounded-2xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="mb-2">
                                <span
                                    class="inline-block px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-xs font-bold mb-3">準備中</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-400 mb-3">複利計算シミュレーター</h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">投資の複利効果を可視化。元本、利率、期間を入力するだけで将来価値を計算。</p>
                            <div class="text-gray-400 text-sm">Coming Soon...</div>
                        </div>
                    </div>
                </div>

                {{-- ローン返済 --}}
                <div class="group block opacity-60 cursor-not-allowed">
                    <div
                        class="relative h-full bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-dashed border-gray-300">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-300/20 to-emerald-400/20 rounded-bl-full">
                        </div>
                        <div class="p-8 relative">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-gray-300 to-gray-400 rounded-2xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                    </path>
                                </svg>
                            </div>
                            <div class="mb-2">
                                <span
                                    class="inline-block px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-xs font-bold mb-3">準備中</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-400 mb-3">ローン返済シミュレーター</h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">住宅ローン・車ローンの月々の返済額と総支払額を計算。繰り上げ返済効果も確認可能。</p>
                            <div class="text-gray-400 text-sm">Coming Soon...</div>
                        </div>
                    </div>
                </div>

                {{-- 積立投資 --}}
                <div class="group block opacity-60 cursor-not-allowed">
                    <div
                        class="relative h-full bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-dashed border-gray-300">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-300/20 to-emerald-400/20 rounded-bl-full">
                        </div>
                        <div class="p-8 relative">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-gray-300 to-gray-400 rounded-2xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="mb-2">
                                <span
                                    class="inline-block px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-xs font-bold mb-3">準備中</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-400 mb-3">積立投資シミュレーター</h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">毎月の積立額と期待リターンから、将来の資産額を予測。NISA・iDeCoにも対応。</p>
                            <div class="text-gray-400 text-sm">Coming Soon...</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 健康・フィットネス --}}
        <section class="mb-20">
            <div class="flex items-center gap-3 mb-8">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">健康・フィットネス</h2>
                <span class="px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-sm font-semibold">Coming Soon</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- BMI計算 --}}
                <div class="group block opacity-60 cursor-not-allowed">
                    <div
                        class="relative h-full bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-dashed border-gray-300">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-300/20 to-pink-400/20 rounded-bl-full">
                        </div>
                        <div class="p-8 relative">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-gray-300 to-gray-400 rounded-2xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="mb-2">
                                <span
                                    class="inline-block px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-xs font-bold mb-3">準備中</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-400 mb-3">BMI・適正体重計算</h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">身長と体重からBMI値を算出。適正体重や肥満度を判定して健康管理をサポート。</p>
                            <div class="text-gray-400 text-sm">Coming Soon...</div>
                        </div>
                    </div>
                </div>

                {{-- 基礎代謝 --}}
                <div class="group block opacity-60 cursor-not-allowed">
                    <div
                        class="relative h-full bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-dashed border-gray-300">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-300/20 to-pink-400/20 rounded-bl-full">
                        </div>
                        <div class="p-8 relative">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-gray-300 to-gray-400 rounded-2xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                                </svg>
                            </div>
                            <div class="mb-2">
                                <span
                                    class="inline-block px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-xs font-bold mb-3">準備中</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-400 mb-3">基礎代謝・消費カロリー計算</h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">年齢・性別・体重から基礎代謝量を算出。活動レベル別の1日消費カロリーも計算。</p>
                            <div class="text-gray-400 text-sm">Coming Soon...</div>
                        </div>
                    </div>
                </div>

                {{-- 筋トレ --}}
                <div class="group block opacity-60 cursor-not-allowed">
                    <div
                        class="relative h-full bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-dashed border-gray-300">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-300/20 to-pink-400/20 rounded-bl-full">
                        </div>
                        <div class="p-8 relative">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-gray-300 to-gray-400 rounded-2xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5">
                                    </path>
                                </svg>
                            </div>
                            <div class="mb-2">
                                <span
                                    class="inline-block px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-xs font-bold mb-3">準備中</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-400 mb-3">筋トレボリューム計算</h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">重量×回数×セット数から総負荷量を計算。トレーニング進捗の可視化に最適。</p>
                            <div class="text-gray-400 text-sm">Coming Soon...</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>



    {{-- Feature Section --}}
    <div class="bg-white/50 backdrop-blur-sm py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    こんな方におすすめ
                </h2>
                <p class="text-gray-600 text-lg">
                    あらゆるシーンで活用できる計算ツール
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">ビジネスパーソン</h3>
                    <p class="text-gray-600 leading-relaxed">
                        マーケティング、財務、投資など、仕事で必要な計算を素早く正確に。
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">個人ユーザー</h3>
                    <p class="text-gray-600 leading-relaxed">
                        健康管理、家計計算、趣味の計算まで、日常生活で役立つツールが満載。
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">学生・研究者</h3>
                    <p class="text-gray-600 leading-relaxed">
                        レポート作成、研究データの分析、学習の補助に最適なツールを提供。
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
