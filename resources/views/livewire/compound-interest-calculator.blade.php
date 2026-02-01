<div class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-teal-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '複利計算シミュレーター | 新NISA・iDeCoの将来価値を試算';
        $description = '「複利は人類最大の発明」。元本・積立額・利率・期間から将来の資産額を精密にシミュレーション。長期投資の効果をビジュアルで把握し、ライフプランニングを具体化。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-emerald-200 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">複利計算シミュレーター</li>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    複利計算シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-emerald-100 text-center md:text-left max-w-2xl">
                    複利の力を味方につける。あなたの資産が時間と共にどう育つか、詳細に予測。
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
                        '新NISA（つみたて投資枠）での30年後の資産額予測',
                        'iDeCo（個人型確定拠出年金）による老後資金の積立シミュレーション',
                        'お子様の大学入学時に必要な「学資資金」の必要積立額の検討',
                        '「単利」と「複利」でどれくらい大きな差が出るかの視覚的な比較',
                        '早期リタイア（FIRE）達成に向けた、目標資産への到達時期予測',
                        '銀行の定期預金と投資信託での運用益の決定的な違いの確認'
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
                条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">初期投資 (元本)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="principal" placeholder="1000000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">毎月の積立額</label>
                    <div class="relative">
                        <input type="number" wire:model.live="monthlyDeposit" placeholder="30000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定年利 (%)</label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="annualRate" placeholder="5"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">%</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">運用期間</label>
                    <div class="relative">
                        <input type="number" wire:model.live="years" placeholder="20"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">年</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-emerald-50 rounded-3xl p-8 border-2 border-emerald-100 shadow-inner">
                <div class="relative z-10 font-sans">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        将来価格シミュレーション
                    </h3>

                    <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-emerald-100 mb-2 font-bold tracking-widest uppercase">Total Future Value</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($futureValue) }}</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm">
                            <span class="text-sm font-bold">{{ $years }}年後の予測資産合計</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">積立元本 合計</p>
                            <p class="text-2xl font-bold text-gray-800">¥{{ number_format($totalDeposit) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center border-b-emerald-400 border-b-4">
                            <p class="text-xs text-emerald-500 mb-1 font-bold">合計運用益 (複利効果)</p>
                            <p class="text-2xl font-bold text-emerald-600">¥{{ number_format($totalInterest) }}</p>
                        </div>
                    </div>

                    @if (count($yearlyData) > 0)
                        <div class="bg-white/80 rounded-2xl p-6 shadow-inner border border-emerald-100 overflow-hidden">
                            <h4 class="font-bold text-gray-800 mb-4 flex items-center justify-between">
                                <span>資産の推移表</span>
                                <span class="text-xs font-normal text-gray-400 tabular-nums">単位: 円</span>
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm tabular-nums">
                                    <thead class="bg-emerald-50">
                                        <tr>
                                            <th class="py-3 px-4 text-left font-bold text-gray-600">経過年</th>
                                            <th class="py-3 px-4 text-right font-bold text-gray-600">資産合計</th>
                                            <th class="py-3 px-4 text-right font-bold text-gray-600">運用益</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        @foreach ($yearlyData as $data)
                                            <tr class="hover:bg-emerald-50/50 transition-colors">
                                                <td class="py-3 px-4 font-bold text-gray-500">{{ $data['year'] }}年後</td>
                                                <td class="py-3 px-4 text-right font-bold text-gray-800">¥{{ number_format($data['value']) }}</td>
                                                <td class="py-3 px-4 text-right font-medium text-emerald-600">+¥{{ number_format($data['interest']) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
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
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">現状の元本と利率を設定</p>
                            <p class="text-sm text-gray-600">手元にある資金と、投資信託や株式等の「想定リターン」を入力します。全世界株式なら年4〜6%程度が目安です。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">月々の積立継続力を加味する</p>
                            <p class="text-sm text-gray-600">毎月「いくらなら無理なく投資に回せるか」を設定。時間の経過とともに積立金にも複利がかかります。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">長期スパンでの成長を可視化</p>
                            <p class="text-sm text-gray-600">「10年ならこれくらい、30年ならこれほど増える」という推移を確認し、投資を継続するモチベーションにしましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    72の法則 (資産を2倍にする期間)
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">年利率</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">2倍にかかる年数</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 uppercase font-mono">
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">1.0 %</td>
                                <td class="py-3 px-2 text-right">72 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">3.0 %</td>
                                <td class="py-3 px-2 text-right">24 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50 bg-emerald-50/30 transition-colors">
                                <td class="py-3 px-2 font-extrabold text-emerald-600">5.0 %</td>
                                <td class="py-3 px-2 text-right font-extrabold text-emerald-600">約 14.4 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">7.0 %</td>
                                <td class="py-3 px-2 text-right">約 10.3 年</td>
                            </tr>
                            <tr class="hover:bg-emerald-50/50">
                                <td class="py-3 px-2 font-bold">10.0 %</td>
                                <td class="py-3 px-2 text-right">7.2 年</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4">72を利率（%）で割ることで、複利によって元本を2倍にするために必要な年数を知ることができます。</p>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                よくある投資信託・FIREシミュレーション例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-emerald-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-emerald-600 mb-3">① 老後2,000万円形成</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>毎月積立: 3万円</li>
                        <li>期待利回り: 5%</li>
                        <li>期間: 30年</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        将来合計: ¥25,000,000+
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-orange-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-teal-600 mb-3">② ジュニアNISA/学資代わり</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>一括元本: 100万円</li>
                        <li>毎月積立: 1万円</li>
                        <li>期待利回り: 4% (15年)</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        将来合計: ¥4,200,000+
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-red-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-red-600 mb-3">③ 積極運用によるFIRE準備</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>一括元本: 500万円</li>
                        <li>毎月積立: 10万円</li>
                        <li>期待利回り: 7% (15年)</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        将来合計: ¥45,000,000+
                    </div>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「複利（ふくり）」とは具体的に何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">複利とは、運用で得た利息や配当金を、さらに元本に組み入れて運用し続けることを指します。最初は小さな利益ですが、雪だるま式に利息が利息を生んでいくため、時間が経つほど資産の増加スピードが跳ね上がります。アインシュタインが「人類最大の発明」と呼んだことでも有名です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 年利5%というのはどの程度のレベルですか？</h3>
                    <p class="text-gray-600 leading-relaxed">株式インデックス投資（全世界株式や全米株式 S&P500など）の過去数十年の平均リターンが年5〜7%程度とされています。もちろん年によってマイナスになるリスクもありますが、15年以上の長期保有を前提とした場合の現実的な目安としてよく使われる数値です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 新NISAのシミュレートで注意すべき点は？</h3>
                    <p class="text-gray-600 leading-relaxed">新NISAでは「配当金や売却益にかかる税金(約20%)」が非課税になります。本シミュレーターの計算結果をほぼそのまま手取りとして受け取れるイメージになります。ただし、投資信託の信託報酬（手数料）などは差し引かれるため、それを考慮して年利を0.1〜0.2%低めに見積もるとより正確です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 下落した時（暴落時）はどう考えればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">シミュレーションは右肩上がりを前提としていますが、現実はジグザグに進みます。大切なのは、複利の恩恵を最大化するために「暴落時も積立を止めない」ことです。むしろ安く多く買えるチャンスと捉え、長期的な合計資産額を追う姿勢が、シミュレーション通りの結果に近づく秘訣です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 複利計算の頻度（年次・月次）で差は出ますか？</h3>
                    <p class="text-gray-600 leading-relaxed">結論、頻度が多い（月次）ほうが、わずかに資産は増えます。なぜなら、利息を再投資するタイミングが早くなるからです。本シミュレーターでは、実際の積立投資に近い「月次複利」での計算にも対応しています。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 複利運用の成果を最大にする一番のコツは？</h3>
                    <p class="text-gray-600 leading-relaxed">「とにかく早く始めること」と「長く続けること」です。複利の効果は時間軸の後半で急激に現れます。たとえ少額でも、複利の恩恵を受ける期間（運用年数）を1年でも長く確保することが、投資金額そのもの以上に大きな成果をもたらします。</p>
                </div>
            </div>
        </div>
    </div>
</div>