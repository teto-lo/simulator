<div class="min-h-screen bg-gradient-to-br from-slate-50 via-purple-50 to-violet-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-purple-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-violet-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = 'ROI計算シミュレーター | 投資利益率を最短算出';
        $description = 'マーケティング、設備投資、資産運用。あらゆる投資の採算性を「ROI（投資利益率）」で数値化。投資額、売上、コストから正確なパフォーマンスを導き出します。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-purple-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">ROI計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-purple-600 via-violet-600 to-purple-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
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
                    ROI計算シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-purple-100 text-center md:text-left max-w-2xl">
                    その投資、本当に利益が出ていますか？正確な指標で「勝てる投資」を判断。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-purple-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-purple-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        'Web広告やSNSマーケティングキャンペーンの費用対効果測定',
                        '新規機材導入や業務効率化システム（SaaS）の回収予測',
                        '不動産や株式投資における、物件・銘柄ごとのパフォーマンス comparison',
                        '社内プロジェクトの承認を得るための論理的な収支根拠の作成',
                        'スクール通いや資格取得など「自己研鑽」の経済的リターン可視化',
                        '限られた予算をどの部署や施策に投下するかの最適な分配判断'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-purple-50/50 p-4 rounded-xl border border-purple-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-purple-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-purple-500 to-violet-600 rounded-full"></span>
                投資データを入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-purple-600">
                        <span class="bg-purple-100 text-purple-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        投資総額 (円)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="investment" placeholder="1000000"
                            class="w-full border-2 border-gray-100 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-purple-600">
                        <span class="bg-purple-100 text-purple-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        売上高 (円)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="revenue" placeholder="1500000"
                            class="w-full border-2 border-gray-100 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-purple-600">
                        <span class="bg-purple-100 text-purple-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">3</span>
                        運用コスト (円)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="cost" placeholder="200000"
                            class="w-full border-2 border-gray-100 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-amber-50 rounded-3xl p-8 border-2 border-purple-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        ROI分析結果
                    </h3>

                    <div class="bg-gradient-to-br from-purple-500 to-orange-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-purple-100 mb-2 font-bold tracking-widest uppercase">Return on Investment</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-6xl font-extrabold">{{ number_format($roiPercentage, 1) }}</span>
                            <span class="text-2xl font-bold opacity-80 pl-2 text-purple-100">%</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm mt-3">
                            <span class="text-sm font-bold">投資利益率: 100%以上で元本以上のリターン</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">純利益</p>
                            <p class="text-xl font-bold {{ $profit >= 0 ? 'text-green-600' : 'text-red-600' }}">¥{{ number_format($profit) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">投資総額</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($investment) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center border-b-orange-400 border-b-4">
                            <p class="text-xs text-orange-400 mb-1 font-bold">必要コスト</p>
                            <p class="text-xl font-bold text-orange-600">¥{{ number_format($cost) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center border-b-indigo-400 border-b-4">
                            <p class="text-xs text-indigo-400 mb-1 font-bold">損益分岐点</p>
                            <p class="text-xl font-bold text-indigo-600">¥{{ number_format($breakEvenPoint) }}</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200">
                        <p class="text-sm font-bold text-amber-800 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            @if($profit >= 0)
                                評価基準: 投資利益率{{ number_format($roiPercentage, 0) }}%を達成しています。採算性は良好です。
                            @else
                                評価基準: 現状はマイナス収支です。投資額の回収にはさらなる売上増、または運用の見直しが必要です。
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-purple-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">投資した総額を入力</p>
                            <p class="text-sm text-gray-600">広告費、物件購入価格、SaaS利用料など、その施策のために直接支出した総額を入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">リターン（売上）を入力</p>
                            <p class="text-sm text-gray-600">その投資の結果として得られた、もしくは予測される総売上高を入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">諸経費（コスト）を考慮して判定</p>
                            <p class="text-sm text-gray-600">原価や手数料など、売上を上げるためにかかった付随的な経費を入力。純粋な利益率を算出します。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-orange-500 rounded-full"></span>
                    類似指標との違い・使い分け
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">指標</th>
                                <th class="text-left py-3 px-2 font-bold text-gray-700">目的</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 uppercase">
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold text-purple-600">ROI</td>
                                <td class="py-3 px-2 text-gray-600">「利益」ベース。事業全体のパフォーマンス評価。</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold text-purple-600">ROAS</td>
                                <td class="py-3 px-2 text-gray-600">「売上」ベース。広告費の回収率（広告成果）を見る。</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold text-purple-600">LTV</td>
                                <td class="py-3 px-2 text-gray-600">「顧客生涯価値」。一人の顧客が将来もたらす総利益。</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold text-purple-600">CPA</td>
                                <td class="py-3 px-2 text-gray-600">「顧客獲得単価」。一人を獲得するためにかかったコスト。</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100 transition-all hover:shadow-orange-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                典型的なROIシミュレーション例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-purple-600 mb-2">① Web広告 (リスティング)</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>広告費: 50万円</li>
                        <li>売上: 150万円</li>
                        <li>原価・コスト: 60万円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>ROI:</span> <span>180.0 %</span>
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-orange-600 mb-2">② 設備投資 (自動化機材)</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>導入費: 300万円</li>
                        <li>売上増分: 500万円</li>
                        <li>人件費削減: 100万円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>ROI:</span> <span>200.0 %</span>
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-red-600 mb-2">③ 不動産 (賃貸経営)</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>物件価格: 2,000万円</li>
                        <li>年間家賃収入: 200万円</li>
                        <li>管理・固定費: 50万円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>利回り(単年):</span> <span>7.5 %</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ROIが高いほど、絶対に良い投資と言えますか？</h3>
                    <p class="text-gray-600">ROIが高いことは非常に魅力的ですが、それだけで決めるのは危険です。「投資金額の規模（10万円でROI400%より1億円でROI50%の方が利益額は大きい）」や「投資リスク（不確実性）」、「投資回収にかかる期間」も併せて考慮する必要があります。一般的に、高いROIが見込まれるものほどリスクも高くなる傾向があります。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ROIとROASの違いは具体的に何ですか？</h3>
                    <p class="text-gray-600">ROI（Return On Investment）は「利益」をベースに投資対効果を見る指標です。ビジネス全体の成功可否を判断するのに使われます。対してROAS（Return On Advertising Spend）は「売上」をベースに広告費の効果を見ます。例えば、「ROASは高いけれど、原価や人件費を含めたROIは赤字だった」というケースもあるため、両方を管理することが不可欠です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q.ROIの計算に人件費は含めるべきですか？</h3>
                    <p class="text-gray-600">より精密なROIを算出するためには、外部への支払いだけでなく、そのプロジェクトに費やした社内スタッフの人件費（時間コスト）を「投資額」または「コスト」に含めるべきです。いわゆる「見えないコスト」を可視化することで、本当の意味での効率化が測れます。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. マーケティング広告におけるROIの合格ラインは？</h3>
                    <p class="text-gray-600">業界やフェーズによって異なりますが、一般的にはROI100%（投資額と同じ額の利益）を超えると「採算が取れている」とみなされます。成長期のサービスであれば150〜300%以上を目指し、追加投資の判断基準にするケースが多いです。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「マイナスのROI」が出た場合の初手は？</h3>
                    <p class="text-gray-600">まずは「売上が不足しているのか」「コストが高すぎるのか」を切り分けます。改善の余地（ABテストによるCVR向上など）があるなら続行、ない場合は早期の撤退（損切り）を検討します。ROIは、傷口を広げないための「撤退基準」としても極めて有効な指標です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. CRMやブランディングなど、直接売上に繋がらない施策のROIは？</h3>
                    <p class="text-gray-600">これらは短期的な利益算出が難しいため、「LTV（生涯価値）の向上分」を売上の代わりに置いたり、長期的なスパンでのROIを測定します。無理に短期ROIを求めると、長期的な競争力を削ぐ「目先の利益追求」に陥るリスクがあるため注意が必要です。</p>
                </div>
            </div>
        </div>
    </div>
</div>