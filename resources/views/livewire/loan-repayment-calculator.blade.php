<div class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-teal-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = 'ローン返済シミュレーター | 住宅・車・教育ローンの支払額を計算';
        $description = '借入金額、金利、期間から毎月の返済額と総支払額を算出。元利均等・元金均等返済の比較や、諸経費・団信を考慮した無理のない返済計画の作成をサポート。';
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
                <li class="text-gray-900 font-semibold">ローン返済シミュレーター</li>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    ローン返済シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-emerald-100 text-center md:text-left max-w-2xl">
                    借りる前に知る、「総支払額」。無理のない返済は、正確な計算から。
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
                        '住宅購入時の「月々の支払い」と「総返済額」のシミュレーション',
                        'マイカーローン検討時の、ボーナス払いの有無による負担差の比較',
                        '金利が0.1%変わるだけで「利息の総額」がどれほど変化するかの確認',
                        '元利均等・元金均等。自分に合った返済方式の有利・不利を判定',
                        '繰り上げ返済を行った場合の期間短縮効果や利息軽減効果の試算',
                        'カードローンやキャッシングの支払期間が長引くことのリスク可視化'
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
                ローン条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">借入総額</label>
                    <div class="relative">
                        <input type="number" wire:model.live="loanAmount" placeholder="30000000"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">年利率 (%)</label>
                    <div class="relative">
                        <input type="number" step="0.01" wire:model.live="annualRate" placeholder="1.2"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">%</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">返済期間 (年)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="years" placeholder="35"
                            class="w-full border-2 border-gray-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">年</span>
                    </div>
                </div>

                <div class="space-y-3 flex flex-col justify-center">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-3 block">返済方式</label>
                    <div class="flex gap-4">
                        <label class="flex items-center cursor-pointer group/radio">
                            <input type="radio" wire:model.live="repaymentType" value="equal_payment" class="hidden">
                            <span class="px-4 py-2 rounded-xl border-2 transition-all font-bold text-sm {{ $repaymentType === 'equal_payment' ? 'bg-emerald-100 border-emerald-500 text-amber-700 shadow-md' : 'bg-white border-gray-100 text-gray-400' }}">
                                元利均等
                            </span>
                        </label>
                        <label class="flex items-center cursor-pointer group/radio">
                            <input type="radio" wire:model.live="repaymentType" value="equal_principal" class="hidden">
                            <span class="px-4 py-2 rounded-xl border-2 transition-all font-bold text-sm {{ $repaymentType === 'equal_principal' ? 'bg-emerald-100 border-emerald-500 text-amber-700 shadow-md' : 'bg-white border-gray-100 text-gray-400' }}">
                                元金均等
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-amber-50 rounded-3xl p-8 border-2 border-emerald-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 2v-6m-8 13h11a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        返済シミュレーション結果
                    </h3>

                    <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-emerald-100 mb-2 font-bold tracking-widest uppercase">
                            {{ $repaymentType === 'equal_payment' ? 'Monthly Payment' : 'First Monthly Payment' }}
                        </p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($monthlyPayment) }}</span>
                            <span class="text-xl font-bold opacity-80 pl-2">/月</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm mt-2">
                            <span class="text-sm font-bold">
                                @if($repaymentType === 'equal_payment') 完済まで毎月一定 @else 初回分（以降、徐々に減少） @endif
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">総返済額</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($totalPayment) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center border-b-orange-400 border-b-4">
                            <p class="text-xs text-orange-400 mb-1 font-bold">支払利息 合計</p>
                            <p class="text-xl font-bold text-teal-600">¥{{ number_format($totalInterest) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">初回元金分</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($firstMonthPrincipal) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">初回利息分</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($firstMonthInterest) }}</p>
                        </div>
                    </div>

                    <div class="p-6 rounded-3xl bg-white border border-amber-200">
                        <h4 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"></path>
                            </svg>
                            方式のポイント
                        </h4>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            @if($repaymentType === 'equal_payment')
                                <strong>元利均等返済：</strong> 毎月の返済額が完済まで一定です。家計管理がしやすく、初回返済額も抑えられますが、元金均等方式に比べて総支払額（利息総額）はわずかに多くなります。多くの住宅ローンで選ばれる一般的な方式です。
                            @else
                                <strong>元金均等返済：</strong> 毎月返す「元金」の額を一定にする方式です。最初は月々の支払額が多くなりますが、元金が早く減るため利息総額を最も抑えられます。返済能力に余裕がある場合におすすめの経済的な方式です。
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
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">借入予定額と金利を入力</p>
                            <p class="text-sm text-gray-600">ローンを組んで購入したい商品の価格（借入額）と、金融機関から提示された「適用金利」を入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">返済期間を年数で設定</p>
                            <p class="text-sm text-gray-600">住宅ローンなら35年、オートローンなら5年、教育ローンなら10年など、無理のない年数を選択します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 text-amber-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">返済方式による差を確認</p>
                            <p class="text-sm text-gray-600">「毎月定額」にするか「利息を最小限」にするか切り替えて比較し、無理のないプランを見つけてください。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-orange-500 rounded-full"></span>
                    金利差による総支払額の影響 (35年)
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs">
                        <thead>
                            <tr class="border-b-2 border-gray-100 tracking-tighter">
                                <th class="py-3 px-1 font-bold text-gray-700">金利</th>
                                <th class="py-3 px-1 font-bold text-gray-700">毎月返済額</th>
                                <th class="py-3 px-1 font-bold text-gray-700">総返済額</th>
                                <th class="py-3 px-1 font-bold text-gray-700">利息分</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 tabular-nums">
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-1">0.4%</td>
                                <td class="py-3 px-1">¥76,515</td>
                                <td class="py-3 px-1">¥32.1M</td>
                                <td class="py-3 px-1 font-bold">¥2.1M</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-1">0.8%</td>
                                <td class="py-3 px-1">¥81,894</td>
                                <td class="py-3 px-1">¥34.4M</td>
                                <td class="py-3 px-1 font-bold">¥4.4M</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50 bg-amber-50/30">
                                <td class="py-3 px-1 font-black text-amber-600">1.2%</td>
                                <td class="py-3 px-1 font-black text-amber-600">¥87,510</td>
                                <td class="py-3 px-1 font-black text-amber-600">¥36.7M</td>
                                <td class="py-3 px-1 font-black text-amber-600">¥6.7M</td>
                            </tr>
                            <tr class="hover:bg-amber-50/50">
                                <td class="py-3 px-1">1.6%</td>
                                <td class="py-3 px-1">¥93,348</td>
                                <td class="py-3 px-1">¥39.2M</td>
                                <td class="py-3 px-1 font-bold">¥9.2M</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">※借入額3,000万円・元利均等・35年計算の一例。M=100万円。わずかな金利差が数百万円の差になります。</p>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                典型的なローン返済シミュレーション例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-emerald-400 border-t-4">
                    <p class="font-bold text-amber-600 mb-3 text-sm">① 住宅ローン (都市銀行)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>価格: 4,000万円</li>
                        <li>金利: 0.6% (変動)</li>
                        <li>期間: 35年</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-3">
                         ¥105,622 <span class="text-xs font-normal">/月</span>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-orange-400 border-t-4">
                    <p class="font-bold text-teal-600 mb-3 text-sm">② 自動車ローン (残価設定)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>借入: 300万円</li>
                        <li>金利: 2.9%</li>
                        <li>期間: 5年</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-3">
                         ¥53,785 <span class="text-xs font-normal">/月</span>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-red-400 border-t-4">
                    <p class="font-bold text-red-600 mb-3 text-sm">③ 教育ローン (日本公庫)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>借入: 400万円</li>
                        <li>金利: 2.25% (固定)</li>
                        <li>期間: 10年</li>
                    </ul>
                    <div class="text-xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-3">
                         ¥37,249 <span class="text-xs font-normal">/月</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「元利均等（がんりきんとう）」と「元金均等（がんきんきんとう）」どっちがお得？</h3>
                    <p class="text-gray-600 leading-relaxed">支払う利息の合計を最も少なくできるのは「元金均等」です。しかし、返済開始直後の支払額が非常に高くなるため、多くの人は支払額が一定で安定した家計管理ができる「元利均等」を選びます。総額の安さをとるか、月々の安定をとるかの選択になります。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 繰り上げ返済はいつするのが最も効果的ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">結論、できるだけ「早く」することです。利息は借入残高に対してかかるため、残高が多い時期に繰り上げ返済を行って元本を減らすほど、その後の利息軽減効果が大きくなります。ただし、手元資金（生活防衛費）を減らしすぎないよう注意が必要です。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 変動金利が上昇した場合、月々の返済額はどうなりますか？</h3>
                    <p class="text-gray-600 leading-relaxed">住宅ローンの場合、一般的に「5年ルール（5年間は返済額を変えない）」や「125%ルール（前回の返済額の1.25倍を上限にする）」があります。ただし、返済額の内訳（利息の割合）は上昇するため、完済時期に未払利息が残るリスクには注意が必要です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-amber-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 審査に通る「返済比率」の目安はどのくらいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">多くの銀行では年収の30〜35%を上限としていますが、実際に「無理なく返せる」範囲は年収の20〜25%程度と言われています。本シミュレーターで月々の支払額を確認し、ご自身の「手取り年収」と照らし合わせて判断してください。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 借入金額に「諸費用」も含めた方がいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、より正確な計画には手数料や登記費用などの諸費用（物件価格の5〜10%程度）も含めて計算することをお勧めします。いわゆる「フルローン（諸費用込みローン）」を検討されている場合は、その総額を入力してください。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ボーナス払いを活用するメリット・デメリットは？</h3>
                    <p class="text-gray-600 leading-relaxed">メリットは、毎月の返済額を抑えられることです。デメリットは、総支払額がわずかに増える（ボーナス月まで利息がかかるため）点と、将来ボーナスが減少・カットされた際に支払いが困難になるリスクがある点です。</p>
                </div>
            </div>
        </div>
    </div>
</div>