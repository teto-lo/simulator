<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8">
    <div class="max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-cyan-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">車購入・維持費計算</li>
            </ol>
        </nav>

        {{-- Hero --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    車購入・維持費計算
                </h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">
                    購入費・ローン・税金・保険・燃料費を含めた車の総コストを簡単に試算。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-cyan-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-cyan-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '車購入前の「月々の実質負担」と「5年後の総額」を確認したいとき',
                        'マイカーローンを組む際、金利差が総支払額にどれだけ影響するか知りたい',
                        '自動車税、重量税、自賠責保険など「維持費」の概算を把握したい',
                        'ガソリン代の変動や実燃費から、月間の燃料コストをシミュレーション',
                        '今の年収で「無理のないカーライフ」が送れるかの予算判断に',
                        '駐車場代や任意保険料を含めた、トータルでの車関連支出を見える化したい'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-cyan-50/50 p-4 rounded-xl border border-cyan-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-cyan-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-cyan-500 to-blue-600 rounded-full"></span>
                車両条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">購入価格（円）</label>
                    <input type="number" wire:model.live="purchasePrice"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">ローン年数</label>
                    <input type="number" wire:model.live="loanYears"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">金利（%）</label>
                    <input type="number" step="0.1" wire:model.live="interestRate"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">月間走行距離（km）</label>
                    <input type="number" wire:model.live="monthlyDistance"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>
            </div>

            {{-- 結果 --}}
            <div class="bg-gradient-to-br from-slate-50 to-cyan-50 rounded-2xl p-8 border-2 border-cyan-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6">総コスト目安</h3>

                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-8 mb-6 shadow-lg">
                    <p class="text-xs text-cyan-100 mb-2">総額</p>
                    <p class="text-6xl font-bold text-white">¥{{ number_format($totalOwnershipCost) }}</p>
                    <p class="text-xs text-cyan-200">月額換算 ¥{{ number_format($monthlyCost) }}</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">ローン総額</p>
                        <p class="text-xl font-bold">¥{{ number_format($totalLoanPayment) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">年間維持費</p>
                        <p class="text-xl font-bold">¥{{ number_format($totalAnnualCost) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">燃料費</p>
                        <p class="text-xl font-bold text-orange-600">¥{{ number_format($annualFuel) }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span class="w-2 h-7 bg-cyan-500 rounded-full"></span>
                使い方
            </h2>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">1</div>
                    <div>
                        <p class="font-bold text-gray-800">車両価格とローン条件を入力</p>
                        <p class="text-sm text-gray-600">購入予定の車両価格、ローンの金利・年数を入力します。「とりあえず月々の支払額を知りたい」という場合にも便利です。</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">2</div>
                    <div>
                        <p class="font-bold text-gray-800">維持費の条件を設定</p>
                        <p class="text-sm text-gray-600">想定している月間走行距離などを入力すると、ガソリン代や税金、保険料を含めたリアルな維持費が自動計算されます。</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">3</div>
                    <div>
                        <p class="font-bold text-gray-800">「月額コスト」を確認</p>
                        <p class="text-sm text-gray-600">ローン支払額だけでなく、維持費を含めた「毎月実際に出ていくお金」がわかります。家計への影響を判断しましょう。</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/50 to-transparent">
                    <h3 class="font-bold">Q. 維持費が安い車は？</h3>
                    <p class="text-gray-600">軽自動車が最も安い傾向があります。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/50 to-transparent">
                    <h3 class="font-bold">Q. ローン年数の目安は？</h3>
                    <p class="text-gray-600">一般的に3〜7年です。</p>
                </div>
            </div>
        </div>

    </div>
</div>
