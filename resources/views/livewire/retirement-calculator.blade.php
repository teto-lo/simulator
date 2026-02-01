<div class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-teal-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '老後資金計算シミュレーター | 2000万円問題に備えるライフプラン';
        $description = '現在の年齢、年金額、理想の生活費から、老後に必要な総資金と毎月の必要積立額をシミュレーション。資産運用による「複利の効果」も含めて精密に試算します。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-emerald-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">老後資金計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-emerald-600 via-teal-600 to-emerald-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    老後資金計算
                </h1>
                <p class="text-lg md:text-xl text-emerald-100 text-center md:text-left max-w-2xl">
                    「2000万円で足りるか？」に、あなただけの答えを。将来を可視化して、今を安心して生きよう。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-emerald-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-emerald-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '「老後2000万円不足」と言われるが、自分の場合はいくら必要なのか知りたい',
                        '現在の生活レベルを老後も維持するために、毎月いくら積み立てるべきか算出',
                        '退職年齢を早める（FIRE）には、どれだけの資産を形成する必要があるか確認',
                        '年金の受給額を予測し、貯金だけで乗り切れる期間がどれくらいか把握したい',
                        '「資産運用（新NISA/iDeCo）」を組み入れた際、将来資産がどう変わるか試算',
                        '平均寿命を超えて長生きした場合の「もしも」の資金不足リスクを診断'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-emerald-50/50 p-4 rounded-xl border border-emerald-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-emerald-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-emerald-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                ライフプランの設定
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">現在の年齢</label>
                    <div class="relative">
                        <input type="number" wire:model.live="currentAge" placeholder="30"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">退職予定年齢</label>
                    <div class="relative">
                        <input type="number" wire:model.live="retirementAge" placeholder="65"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">寿命の想定 (90〜100推奨)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="lifeExpectancy" placeholder="90"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">歳</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">老後の月間生活費</label>
                    <div class="relative">
                        <input type="number" wire:model.live="monthlyExpense" placeholder="250000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">受給予定の年金 (月)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="pension" placeholder="150000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">現在の貯蓄額</label>
                    <div class="relative">
                        <input type="number" wire:model.live="currentSavings" placeholder="0"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 block italic leading-none mb-1 text-center">追加の月間積立額</label>
                    <div class="relative">
                        <input type="number" wire:model.live="monthlyContribution" placeholder="50000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none text-center">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold italic">円</span>
                    </div>
                </div>
            </div>

            <div class="mb-10 text-center">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 block">運用期待リターン (年利)</label>
                <div class="flex items-center gap-4 max-w-xl mx-auto">
                    <span class="text-xs font-bold text-gray-400 italic">0%</span>
                    <input type="range" wire:model.live="expectedReturn" min="0" max="10" step="0.1" class="w-full h-2 bg-gray-100 rounded-lg appearance-none cursor-pointer accent-emerald-500">
                    <span class="text-xs font-bold text-gray-400 italic">10%</span>
                </div>
                <p class="text-emerald-600 font-black text-xl italic mt-2">{{ $expectedReturn }}%</p>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-emerald-50 rounded-3xl p-8 border-2 border-emerald-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                        ライフプラン試算レポート
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        {{-- 支出の部 --}}
                        <div class="bg-gradient-to-br from-rose-500 to-red-600 rounded-3xl p-8 shadow-xl text-white transform hover:scale-[1.02] transition-all relative overflow-hidden group">
                            <div class="absolute right-0 bottom-0 opacity-10 -mr-6 -mb-6 group-hover:scale-125 transition-transform duration-700">
                                <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            </div>
                            <p class="text-xs text-rose-100 mb-2 font-bold tracking-widest uppercase">Required Post-Retirement Funds</p>
                            <h4 class="text-sm font-bold mb-4">老後にかかる総費用 ({{ $yearsInRetirement }}年間)</h4>
                            <div class="flex items-baseline gap-1">
                                <span class="text-lg opacity-80 font-bold">¥</span>
                                <span class="text-5xl font-extrabold">{{ number_format($totalNeeded) }}</span>
                            </div>
                            <div class="mt-4 pt-4 border-t border-white/20 flex flex-col gap-1 text-xs">
                                <div class="flex justify-between"><span class="opacity-70">月間生活費:</span><span>¥{{ number_format($monthlyExpense) }}</span></div>
                                <div class="flex justify-between font-bold"><span>年金総受給額:</span><span>- ¥{{ number_format($pensionTotal) }}</span></div>
                            </div>
                        </div>

                        {{-- 資産の部 --}}
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-8 shadow-xl text-white transform hover:scale-[1.02] transition-all relative overflow-hidden group">
                            <div class="absolute right-0 bottom-0 opacity-10 -mr-6 -mb-6 group-hover:scale-125 transition-transform duration-700">
                                <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                            </div>
                            <p class="text-xs text-green-100 mb-2 font-bold tracking-widest uppercase">Projected Savings at Retirement</p>
                            <h4 class="text-sm font-bold mb-4">退職時点の予測資産総額 ({{ $yearsToRetirement }}年後)</h4>
                            <div class="flex items-baseline gap-1">
                                <span class="text-lg opacity-80 font-bold">¥</span>
                                <span class="text-5xl font-extrabold">{{ number_format($projectedSavings) }}</span>
                            </div>
                            <div class="mt-4 pt-4 border-t border-white/20 flex flex-col gap-1 text-xs">
                                <div class="flex justify-between"><span class="opacity-70">現在貯蓄 ＋ 元本合計:</span><span>¥{{ number_format($currentSavings + ($monthlyContribution * 12 * $yearsToRetirement)) }}</span></div>
                                <div class="flex justify-between font-bold text-yellow-200"><span>運用益 (複利効果):</span><span>+ ¥{{ number_format($projectedSavings - ($currentSavings + ($monthlyContribution * 12 * $yearsToRetirement))) }}</span></div>
                            </div>
                        </div>
                    </div>

                    {{-- 最終結果 --}}
                    <div class="bg-white rounded-3xl p-8 shadow-md border-2 {{ $gap >= 0 ? 'border-emerald-200' : 'border-rose-200' }} relative overflow-hidden">
                        @if($gap >= 0)
                            <div class="absolute top-0 right-0 p-4 opacity-10 text-emerald-600">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-emerald-800 mb-2">試算結果：老後資金の不安は「なし」といえます！</h4>
                            <p class="text-xs text-gray-500 mb-4">現在の計画を維持できれば、想定される老後期間をカバーしてもなお余剰金が発生する計算です。</p>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">余剰額目安</span>
                                <span class="text-4xl font-black text-emerald-600">¥{{ number_format($gap) }}</span>
                            </div>
                        @else
                            <div class="absolute top-0 right-0 p-4 opacity-10 text-rose-600">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-rose-800 mb-2">試算結果：対策が必要な「不足」の状態です</h4>
                            <p class="text-xs text-gray-500 mb-4">このままのペースでは、想定される老後生活のどこかで資金が底をつく可能性があります。</p>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">不足額目安</span>
                                <span class="text-4xl font-black text-rose-600">¥{{ number_format(abs($gap)) }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">現状と未来の期間を設定</p>
                            <p class="text-sm text-gray-600">今の年齢と、引退したい年齢、そして「いつまでお金が必要か（寿命の想定）」を入力します。人生100年時代を見据え、90〜100歳程度に設定するのがリスク管理上のおすすめです。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">収支のバランスを入力</p>
                            <p class="text-sm text-gray-600">老後に送りたい生活のレベル（月額費用）と、受け取れる年金額を入力します。今の生活費から、住居費（住宅ローン完済後）や交際費の変化を考慮して見積もりましょう。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">積立と運用のシミュレーション</p>
                            <p class="text-sm text-gray-600">今の貯金に加え、退職までに毎月いくら貯められるかと、それを何％で運用できるかを入力します。不足が出る場合は、積立額を上げたり、運用利回りの設定を変えて微調整してみましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-teal-500 rounded-full"></span>
                    よく計算で使われる「物価・生活費」
                </h2>
                <div class="overflow-x-auto text-[10px]">
                    <table class="w-full text-left uppercase tracking-tighter">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-2 font-bold text-gray-400 italic">ライフスタイル</th>
                                <th class="py-2 font-bold text-amber-600 italic">月間生活費（夫婦）</th>
                                <th class="py-2 font-bold text-gray-400 italic">イメージ</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 leading-relaxed font-bold">
                            <tr>
                                <td class="py-3 text-gray-500 italic">最低限の生活</td>
                                <td class="py-3 text-gray-800 italic">約 22万円</td>
                                <td class="py-3 text-gray-400 italic">節約意識が高い、公営住宅等</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-gray-500 italic">平均的な生活</td>
                                <td class="py-3 text-gray-800 italic">約 27万円</td>
                                <td class="py-3 text-gray-400 italic">標準的な夫婦二人のゆとり</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-gray-500 italic">ゆとりある生活</td>
                                <td class="py-3 text-gray-800 italic">約 36万円</td>
                                <td class="py-3 text-gray-400 italic">旅行、レジャー、外食を定期的に</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 p-4 rounded-xl bg-orange-50 border border-teal-100 text-left">
                    <p class="text-[10px] font-bold text-teal-600 mb-1">💡 寿命（長生き）のリスク</p>
                    <p class="text-[9px] text-gray-600 leading-tight">想定寿命を1年延ばすごとに、必要資金は「（月間生活費 - 年金額）× 12ヶ月」分だけ増大します。特に女性は平均寿命が長いため、100歳まで考慮したプランが推奨されます。</p>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「老後2000万円問題」は今でも有効な数字ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">2000万円という数字は「夫65歳以上、妻60歳以上の無職世帯の平均的な不足額」に基づいたものです。住宅ローンの有無、住む地域（賃貸か持ち家か）、健康状態によって、必要な額は500万円で済む人もいれば、5000万円必要な人もいます。このシミュレーターで「自分だけの不足額」を出すことが重要です。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 年金受給額がいくらになるか分かりません。</h3>
                    <p class="text-gray-600 leading-relaxed">まずは「ねんきん定期便」を確認するのが確実です。ざっくりとした目安としては、年収500万円程度の会社員（厚生年金）であれば月15〜18万円程度、自営業者（国民年金のみ）であれば月6〜7万円程度と言われています。iDeCoや企業型DCの上乗せ分も忘れないように入力してください。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 資産運用のリターン（％）はどれくらいで設定すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">インデックス投資中心であれば「3％〜5％」程度でシミュレーションするのが現実的かつ健全です。期待しすぎてハイリスクな商品に手を出すのは老後資金形成においては危険です。逆に、銀行預金のみであれば「0％」に近い数値に設定し、どれくらいのスピードでお金が減るかを確認しましょう。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 不足額が大きすぎて、何から手をつけていいか分かりません。</h3>
                    <p class="text-gray-600 leading-relaxed">魔法のような回答はありませんが、打てる手は3つです。(1)リタイア年齢を遅らせて受給までの空白を縮める、(2)新NISA等を活用して「複利」の恩恵を最大限受ける、(3)老後の生活レベルを工夫し、月数万円でも支出を減らす。この3つを少しずつ組み合わせることで、不足額は劇的に縮小します。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 介護費用やインフレ（物価上昇）は考慮されていますか？</h3>
                    <p class="text-gray-600 leading-relaxed">本シミュレーターは現在の物価での簡易的な収支計算をベースにしています。実際の老後には、これに加えて予備費（医療・介護費として一人500万円程度、住宅修繕費など）を「現在の貯蓄額」から差し引いて考えるのが、より保守的で安全な計画になります。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 持ち家の場合、家賃がかからないので有利ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">退職時にローンが完済されていれば、月々の支出を劇的に抑えられます。ただし、固定資産税やメンテナンス費用（外壁塗装や設備の更新）が発生するため、月々の生活費にはそれらの「積み立て分」を数万円上乗せして設定することをお勧めします。賃貸の場合は、生涯家賃がかかる前提での生活費設定が必要です。</p>
                </div>
            </div>
        </div>
    </div>
</div>