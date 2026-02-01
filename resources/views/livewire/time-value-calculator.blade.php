<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-cyan-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-blue-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '時間価値計算ツール | 時給換算で「時は金なり」を可視化';
        $description = 'あなたの時間はいくらの価値？年収から時給を算出し、家事代行やタクシー利用、外注サービスの利用が自分にとって「お得」かを論理的に判定します。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
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
                <li class="text-gray-900 font-semibold">時間価値計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
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

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    時間価値計算
                </h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">
                    迷ったときは「時間コスト」で考える。あなたの1時間を、最も価値ある場所へ。
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
                        '家事代行や掃除ロボット購入の損益分岐点の確認',
                        '移動時間の短縮のためにタクシーを使うかどうかの判断',
                        '勉強時間を確保するために、どの作業を外注すべきかの検討',
                        '副業のプロジェクトを引き受けるか、時給面での妥当性評価',
                        '「少しでも安い店」へ行くための移動時間が無駄でないか検証',
                        'QOL（生活の質）向上のための投資判断基準として'
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
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-cyan-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-cyan-500 to-blue-600 rounded-full"></span>
                条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-cyan-600">
                        <span class="bg-cyan-100 text-cyan-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        手取り月収 (万円)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="monthlyIncome" placeholder="25"
                            class="w-full border-2 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">万円</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">目安: 手取り20万円なら「20」と入力</p>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-cyan-600">
                        <span class="bg-cyan-100 text-cyan-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        作業にかかる時間
                    </label>
                    <div class="relative">
                        <input type="number" step="0.5" wire:model.live="taskTime" placeholder="2"
                            class="w-full border-2 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">時間</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-cyan-600">
                        <span class="bg-cyan-100 text-cyan-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">3</span>
                        外注/サービス費用
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="taskCost" placeholder="5000"
                            class="w-full border-2 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-cyan-50 rounded-3xl p-8 border-2 border-cyan-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        コスト比較結果
                    </h3>

                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-cyan-100 mb-2 font-bold tracking-widest uppercase">Your Time Value</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($timeValue) }}</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm">
                            <span class="text-sm font-bold">あなたが自分で作業する場合の実質コスト</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">外注した場合の費用</p>
                            <p class="text-2xl font-bold text-gray-800">¥{{ number_format($taskCost) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center border-b-cyan-400 border-b-4">
                            <p class="text-xs text-cyan-400 mb-1 font-bold">差額 (お得度)</p>
                            <p class="text-2xl font-bold {{ $timeValue > $taskCost ? 'text-green-600' : 'text-blue-600' }}">
                                {{ $timeValue > $taskCost ? '+' : '' }}¥{{ number_format($savings) }}
                            </p>
                        </div>
                    </div>

                    <div class="p-6 rounded-3xl {{ $recommendation == 'buy' ? 'bg-gradient-to-r from-emerald-50 to-green-50 border-2 border-green-200 shadow-lg shadow-green-100' : 'bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200' }} transition-all">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-2xl {{ $recommendation == 'buy' ? 'bg-green-500' : 'bg-blue-500' }} text-white shadow-md">
                                @if($recommendation == 'buy')
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                @else
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                    </svg>
                                @endif
                            </div>
                            <div>
                                <h4 class="text-lg font-black {{ $recommendation == 'buy' ? 'text-green-900' : 'text-blue-900' }} mb-1">
                                    {{ $recommendation == 'buy' ? '外注・購入をおすすめします' : '自分で作業する方が経済的です' }}
                                </h4>
                                <p class="{{ $recommendation == 'buy' ? 'text-green-700' : 'text-blue-700' }} text-sm font-medium leading-relaxed">
                                    {{ $recommendation == 'buy' 
                                        ? '自分で行うより外注する方が約 ' . number_format($savings) . ' 円分のお得（時間の空き）になります。浮いた時間で休息やスキルアップに充てましょう。' 
                                        : '外注費用があなたの時間価値を上回っています。自分で作業することで、約 ' . number_format($savings) . ' 円の節約になります。' 
                                    }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-cyan-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">自分の「時給」を把握する</p>
                            <p class="text-sm text-gray-600">働いている方なら「年収÷年間労働時間」、主婦・主夫の方なら「地域平均時給」を目安に入力します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">作業時間とコストを入力</p>
                            <p class="text-sm text-gray-600">その作業に「何時間かかるか」と、外注・購入した際の「具体的な費用」を入力してください。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">診断結果を判断材料にする</p>
                            <p class="text-sm text-gray-600">「自分でやるか、買うか」の論理的な答えが出ます。最終的には幸福度や体力面も考慮して決定しましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 uppercase">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-blue-500 rounded-full"></span>
                    年収別時給の目安
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">額面年収</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">推定時給</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">300 万円</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">約 1,500 円</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">500 万円</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">約 2,500 円</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2 font-black text-cyan-600">800 万円</td>
                                <td class="py-3 px-2 text-right font-black text-cyan-600">約 4,000 円</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">1,000 万円</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">約 5,000 円</td>
                            </tr>
                            <tr class="hover:bg-cyan-50/50">
                                <td class="py-3 px-2">1,500 万円</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">約 7,500 円</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">※ 年間2,000時間勤務（残業・休日出勤込）で計算。ボーナスも含めた総額ベースの目安です。</p>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-cyan-500 rounded-full"></span>
                日常生活の「時間コスト」シミュレーション例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-cyan-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-cyan-600 mb-3">① 移動 (タクシー vs 電車)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>電車移動: 1時間 (¥200)</li>
                        <li>タクシー: 15分 (¥3,000)</li>
                        <li class="font-bold text-black pt-2">→ 45分を¥2,800で買うか？</li>
                    </ul>
                    <div class="text-xs p-2 bg-cyan-50 rounded text-cyan-800">時給3,800円以上の人はタクシーがお得</div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-blue-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-blue-600 mb-3">② 家事 (家事代行)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>自力掃除: 3時間 (¥0)</li>
                        <li>代行利用: 3時間 (¥8,500)</li>
                        <li class="font-bold text-black pt-2">→ 3時間を¥8,500で買うか？</li>
                    </ul>
                    <div class="text-xs p-2 bg-blue-50 rounded text-blue-800">時給2,900円以上の人は代行がお得</div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 border-t-indigo-400 border-t-4 hover:shadow-md transition-all">
                    <p class="font-bold text-indigo-600 mb-3">③ 買物 (ネットスーパー)</p>
                    <ul class="text-xs text-gray-600 space-y-2 mb-4">
                        <li>往復＋店舗: 1.5時間 (¥0)</li>
                        <li>配送料: (¥330)</li>
                        <li class="font-bold text-black pt-2">→ 1.5時間を¥330で買うか？</li>
                    </ul>
                    <div class="text-xs p-2 bg-indigo-50 rounded text-indigo-800 transition-colors">ほとんどの人にとって手数料を払う価値あり</div>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「時給」は額面で計算すべき？手取りで計算すべき？</h3>
                    <p class="text-gray-600">正確に判断したい場合は「手取り年収」をベースにすることをおすすめします。実際に自由に使えるお金（ディスポーザブル・インカム）と時間を比較するためです。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 浮いた時間で寝てしまうのは「無駄」ですか？</h3>
                    <p class="text-gray-600">いいえ、それが良質な睡眠であり、翌日のパフォーマンスを向上させるなら価値ある「投資」になります。ただし、単に生産性のない時間をダラダラ過ごすだけの外注は「贅沢（浪費）」になります。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 時給換算が低くても「自分でやったほうがいい作業」は？</h3>
                    <p class="text-gray-600">趣味やストレス解消になる作業、将来スキルの習得に繋がる作業、または家族との大切な時間などは、時給だけで判断すべきではありません。感情的価値がコストを上回るなら自分でやりましょう。</p>
                </div>
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 専業主婦・主夫の場合、時給はどう考えればいいですか？</h3>
                    <p class="text-gray-600">厚生労働省の統計データや、自分がパートに出た場合の推定時給（地域別最低賃金〜平均時給）を基準にします。あるいは、自分の労働を外注した場合の「代行費用」を逆算して時給と捉える考え方もあります。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「時は金なり」と言いますが、限界はありますか？</h3>
                    <p class="text-gray-600">時間を買うために無理な借金をしたり、生活を圧迫するのは本末転倒です。あくまで「余剰資金の中で、時間を最大化して人生を豊かにする」ためのツールとして使いましょう。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 子供がいる場合の時間の価値は？</h3>
                    <p class="text-gray-600">子供と過ごせる時間は有限であり、非常に高い価値（プライスレス）があります。家事の外注で1時間浮かせ、その1時間を子供との対話に使えるなら、経済的損得を大きく超えたメリットがあると言えます。</p>
                </div>
            </div>
        </div>
    </div>
</div>
