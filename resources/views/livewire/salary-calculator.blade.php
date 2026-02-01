<div class="min-h-screen bg-gradient-to-br from-slate-50 via-amber-50 to-orange-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-amber-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-orange-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '手取り給与計算ツール | 年収から手取り額を最短シミュレーション';
        $description = '年収から所得税・住民税・社会保険料を差し引いた手取り額を瞬時に計算。転職、昇給、ライフプランの策定に役立つ精密シミュレーター。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-amber-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">手取り給与計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-amber-600 via-orange-600 to-red-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    手取り給与計算
                </h1>
                <p class="text-lg md:text-xl text-amber-100 text-center md:text-left max-w-2xl">
                    年収、扶養人数、社会保険料まで。あなたの本当の「手取り額」を精密にシュミレート。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-amber-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-amber-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '転職先の提示年収から「実際の手残り」を試算したい',
                        '昇給や賞与（ボーナス）後の生活レベルの再検討',
                        '結婚・出産等による扶養控除の節税メリットを確認',
                        '一人暮らしやマイホーム購入の返済予算立て',
                        'ふるさと納税の限度額を計算するための元データとして',
                        '手取り額から「月いくら使えるか」の家計簿作成'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-amber-50/50 p-4 rounded-xl border border-amber-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-amber-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-amber-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-amber-500 to-orange-600 rounded-full"></span>
                収入・扶養条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-amber-600">
                        <span class="bg-amber-100 text-amber-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        年収（額面/円）
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="annualSalary" placeholder="5000000"
                            class="w-full border-2 border-gray-100 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-amber-600">
                        <span class="bg-amber-100 text-amber-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        配偶者・扶養親族
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="dependents" placeholder="0"
                            class="w-full border-2 border-gray-100 focus:border-amber-500 focus:ring-4 focus:ring-amber-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">人</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">配偶者や子供、親など控除対象者の人数</p>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-amber-50 rounded-3xl p-8 border-2 border-amber-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        シミュレーション結果
                    </h3>

                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-amber-100 mb-2 font-bold tracking-widest uppercase">Annual Net Salary</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($annualNetSalary) }}</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm">
                            <span class="text-sm font-bold">月額目安: ¥{{ number_format($monthlyNetSalary) }}</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">所得税</p>
                            <p class="text-xl font-bold text-orange-600">¥{{ number_format($incomeTax) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">住民税</p>
                            <p class="text-xl font-bold text-orange-600">¥{{ number_format($residentTax) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">社会保険料</p>
                            <p class="text-xl font-bold text-orange-600">¥{{ number_format($socialInsuranceFee) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">手取り率</p>
                            <p class="text-xl font-bold text-green-600">{{ number_format($takeHomeRatio, 1) }}%</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200">
                        <p class="text-sm font-bold text-amber-800 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            ワンポイント: 控除後の手元に残る金額は約{{ number_format($takeHomeRatio, 0) }}%です。年収が上がると税率も上がる（累進課税）ため、手取り率は徐々に低くなります。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-amber-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">年収（総支給額）の入力</p>
                            <p class="text-sm text-gray-600">源泉徴収票の「支払金額」や、求人票に記載されている「年収」をそのまま入力してください。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">扶養親族の有無を選択</p>
                            <p class="text-sm text-gray-600">配偶者控除や扶養控除の対象となる人数を入力します。税金が軽減される影響が反映されます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">手取り・税額の詳細を確認</p>
                            <p class="text-sm text-gray-600">所得税、住民税、社会保険料の各内訳を確認し、自由にお使いいただける「本当の年収」を把握します。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-orange-500 rounded-full"></span>
                    控除される項目の内訳
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">項目</th>
                                <th class="text-left py-3 px-2 font-bold text-gray-700">内容の説明</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold">健康保険・年金</td>
                                <td class="py-3 px-2 text-gray-600">給与の約14~15%（会社折半後）。将来の年金や医療費の備え。</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold">雇用保険</td>
                                <td class="py-3 px-2 text-gray-600">給与の約0.6%。失業手当や育休手当の原資。</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold">所得税</td>
                                <td class="py-3 px-2 text-gray-600">年間の所得に応じて国に納める税金。累進課税が適用される。</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-2 font-bold">住民税</td>
                                <td class="py-3 px-2 text-gray-600">前年の所得に応じて地方自治体に納める税金。原則一律10%。</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                年収別・手取りシミュレーション（独身・扶養0の場合）
            </h2>
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-amber-600 mb-2">年収 300万円</p>
                    <p class="text-sm text-gray-500 mb-4 tracking-tighter">（社会保険・税制を考慮）</p>
                    <div class="text-2xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        約 238 万円
                    </div>
                    <p class="text-xs text-gray-400 mt-2">月額目安: ¥198,000</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-orange-600 mb-2">年収 500万円</p>
                    <p class="text-sm text-gray-500 mb-4 tracking-tighter">（ボリュームゾーン標準）</p>
                    <div class="text-2xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        約 395 万円
                    </div>
                    <p class="text-xs text-gray-400 mt-2">月額目安: ¥329,000</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-red-600 mb-2">年収 800万円</p>
                    <p class="text-sm text-gray-500 mb-4 tracking-tighter">（高所得層の仲間入り）</p>
                    <div class="text-2xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        約 605 万円
                    </div>
                    <p class="text-xs text-gray-400 mt-2">月額目安: ¥504,000</p>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-amber-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 正確な手取り額より少なく/多く表示されるのですが？</h3>
                    <p class="text-gray-600">このシミュレーターは、社会保険料の控除（約15%）や所得税・住民税の簡易計算を行っています。実際は賞与の回数、残業代、個別の控除項目（生命保険、地震保険、iDeCo等）によって多少前後します。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「壁」とは何のことですか？（103万、130万など）</h3>
                    <p class="text-gray-600">パートやアルバイトの方が扶養内で働く際の基準です。103万円を超えると自身に所得税がかかり、130万円を超えると自身で社会保険に加入する必要が出てくるため、手取りが一時的に減る「働き損」が発生する場合があります。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 社会保険料はずっと同じですか？</h3>
                    <p class="text-gray-600">4月から6月の3ヶ月間の給料の平均（標準報酬月額）によって、その年の9月から1年間の保険料が決まります。したがって、この時期に残業が多いと翌年1年間の社会保険料が高くなる仕組みです。</p>
                </div>
                <div class="border-l-4 border-amber-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 住民税が突然高くなった気がします。</h3>
                    <p class="text-gray-600">住民税は「後払い」制です。前年の1月から12月の所得に対して課税され、翌年の6月から給与天引きが始まります。転職直後や新卒2年目の方は前年の所得があるため、手取りが減ったように感じることがあります。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ふるさと納税をすると手取りは増えますか？</h3>
                    <p class="text-gray-600">正確には「手取りが増える」のではなく「翌年以降の税金が前払いされる（＋返礼品分お得）」という仕組みです。寄付した金額（マイナス2,000円）が所得税の還付や住民税の控除として返ってきます。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 確定申告は必要ですか？</h3>
                    <p class="text-gray-600">会社員の方は原則「年末調整」で完結するため不要です。ただし、医療費控除、住宅ローン控除（1年目）、副業所得が20万円を超える場合などは確定申告を行うことで税金が戻ってくる可能性があります。</p>
                </div>
            </div>
        </div>
    </div>
</div>