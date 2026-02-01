<div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50 to-red-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-orange-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-red-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '源泉徴収・消費税計算ツール | 請求書作成の強い味方';
        $description = 'フリーランスの請求書作成に欠かせない源泉徴収税と消費税を自動計算。報酬額からの算出だけでなく、手取り額からの逆算にも対応。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-orange-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">源泉徴収・消費税計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-orange-600 via-red-600 to-rose-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-full shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    源泉徴収・消費税計算
                </h1>
                <p class="text-lg md:text-xl text-orange-100 text-center md:text-left max-w-2xl">
                    請求書の端数計算に迷わない。インボイス制度対応の税額を最短で算出。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-orange-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-orange-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '初めての請求書作成で、源泉徴収税の計算方法が不安なとき',
                        '「手取りでピッタリ20万円」受け取るために必要な請求額の逆算',
                        'インボイス登録後の消費税込み・抜き金額の社内照合に',
                        '100万円を超える高額案件で、税率が変わるポイントの確認',
                        '確定申告前に、年間の源泉徴収された総額を概算したいとき',
                        'クライアントとの報酬交渉中に、その場で手取り額を知りたいとき'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-orange-50/50 p-4 rounded-xl border border-orange-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-orange-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-orange-500 to-red-600 rounded-full"></span>
                金額を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-orange-600">
                        <span class="bg-orange-100 text-orange-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        計算モード
                    </label>
                    <select wire:model.live="mode"
                        class="w-full border-2 border-gray-100 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-2xl p-4 text-lg font-bold transition-all outline-none bg-white">
                        <option value="gross">報酬額（税抜）から計算</option>
                        <option value="net">手取り額（振込額）から逆算</option>
                    </select>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-orange-600">
                        <span class="bg-orange-100 text-orange-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        {{ $mode === 'gross' ? '報酬額（税抜/円）' : '希望手取り額（円）' }}
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="amount" placeholder="100000"
                            class="w-full border-2 border-gray-100 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-orange-50 rounded-3xl p-8 border-2 border-orange-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        想定振込額・請求額の内訳
                    </h3>

                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-orange-100 mb-2 font-bold tracking-widest uppercase">{{ $mode === 'gross' ? 'Expected Net Amount' : 'Required Invoice Amount' }}</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($netAmount) }}</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm">
                            <span class="text-sm font-bold">{{ $mode === 'gross' ? '実際に振り込まれる手元金額' : '手出しを防ぐための税抜報酬額' }}</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">報酬額（税抜）</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($salesAmount) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">消費税 (10%)</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($consumptionTax) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center border-b-orange-400 border-b-4">
                            <p class="text-xs text-orange-400 mb-1 font-bold">源泉所得税</p>
                            <p class="text-xl font-bold text-orange-600">¥{{ number_format($withholdingTax) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center border-b-indigo-400 border-b-4">
                            <p class="text-xs text-indigo-400 mb-1 font-bold">税込請求総額</p>
                            <p class="text-xl font-bold text-indigo-600">¥{{ number_format($totalAmount) }}</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-gradient-to-r from-orange-50 to-red-50 border border-orange-200">
                        <p class="text-sm font-bold text-orange-800 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            注意: 源泉徴収税率は復興特別所得税を含む 10.21% で算出しています。100万円を超える部分は 20.42% が自動適用されます。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-orange-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">計算モードを切り替える</p>
                            <p class="text-sm text-gray-600">税抜きの報酬額を決めたい場合は「報酬額から」、振込額を指定したい場合は「手取りから」を選びます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">金額を入力する</p>
                            <p class="text-sm text-gray-600">交渉中の金額や、現在の案件単価を入力します。リアルタイムに各項目の金額が動きます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">内訳を請求書に反映</p>
                            <p class="text-sm text-gray-600">算出された「消費税」や「源泉所得税」の額を、そのままお手持ちの請求書フォーマットに記載してください。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                    消費税・源泉税のリファレンス
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">税項目</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">現行税率 / 基準</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-orange-50/50">
                                <td class="py-3 px-2">消費税（標準）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">10%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50">
                                <td class="py-3 px-2">消費税（軽減税率）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">8%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50">
                                <td class="py-3 px-2">源泉徴収（100万以下）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">10.21%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50">
                                <td class="py-3 px-2">源泉徴収（100万超）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">20.42%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50">
                                <td class="py-3 px-2">インボイス登録業者</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">適格請求書発行</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100 transition-all hover:shadow-orange-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-rose-500 rounded-full"></span>
                よくある請求シミュレーション例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-orange-600 mb-2 underline decoration-2">① 報酬10万円（税抜）</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>報酬額: 100,000円</li>
                        <li>消費税: 10,000円</li>
                        <li>源泉税: -10,210円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>振込額:</span> <span>99,790 円</span>
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-red-600 mb-2 underline decoration-2">② 報酬20万円（税込）から逆算</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>税込請求: 200,000円</li>
                        <li>(税抜: 181,818円)</li>
                        <li>源泉税: -18,563円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>振込額:</span> <span>181,437 円</span>
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-rose-600 mb-2 underline decoration-2">③ 高額案件（120万円）</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4 leading-relaxed">
                        <li>源泉税(100万): 102,100円</li>
                        <li>源泉税(残20万): 40,840円</li>
                        <li>源泉税合計: 142,940円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>税引前:</span> <span>1,200,000 円</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 源泉徴収税を引くのは義務ですか？</h3>
                    <p class="text-gray-600">クライアント（支払者）が会社や個人の事業主である場合、特定の報酬（原稿料、デザイン、翻訳等）を支払う際に税金を天引きして国に納める義務があります。報酬を受け取る側が引くのではなく、支払う側が処理します。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 消費税を請求してもいいのですか？（免税事業者の場合）</h3>
                    <p class="text-gray-600">インボイス登録をしていない免税事業者であっても、従来通り「消費税相当額」を上乗せして請求することは法的に禁止されていません。ただし、取引先との契約関係やインボイス制度の導入背景により、価格交渉が発生する可能性があります。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 源泉徴収された税金は戻ってきますか？</h3>
                    <p class="text-gray-600">はい、確定申告を行うことで戻ってくる可能性があります。天引きされた税金は「税金の前払い」のようなものなので、年間の総所得に対して納めすぎている場合は「還付金」として返ってきます。逆に足りない場合は追加で納めます。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 復興特別所得税とは何ですか？</h3>
                    <p class="text-gray-600">東日本大震災からの復興財源を確保するための税金で、2037年まで通常の所得税に2.1%を上乗せして徴収されます。源泉徴収税率が10%キリではなく10.21%なのはこのためです。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 源泉徴収の対象にならない仕事はありますか？</h3>
                    <p class="text-gray-600">システム開発（Webサイト制作の一部ではなく、純粋なシステム構築）、事務代行、清掃などは原則として源泉徴収の対象外とされています（※デザイン要素が含まれると対象になる場合があります）。詳細は税務署や税理士にご確認ください。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 手数料（システム利用料等）がある場合の計算は？</h3>
                    <p class="text-gray-600">クラウドソーシングサイト等では手数料が引かれますが、税務上の「報酬額」は手数料を引く前の【総額】です。本ツールに入力する際も、手数料を引く前の契約金額を入力してください。</p>
                </div>
            </div>
        </div>
    </div>
</div>
