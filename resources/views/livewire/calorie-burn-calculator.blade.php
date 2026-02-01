<div class="min-h-screen bg-gradient-to-br from-slate-50 via-green-50 to-emerald-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-green-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '運動消費カロリー計算ツール | 効率的なダイエット計画に';
        $description = 'ジョギング、水泳、掃除など、様々な活動の消費カロリーをMETs値を用いて精密計算。体重と運動時間から、脂肪燃焼量や食品への換算も自動算出。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-green-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">運動消費カロリー計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-green-600 via-emerald-600 to-teal-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    運動消費カロリー計算
                </h1>
                <p class="text-lg md:text-xl text-green-100 text-center md:text-left max-w-2xl">
                    「あの運動でどれくらい痩せる?」を数値化。日常生活も立派なエクササイズ。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-green-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-green-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '今日のウォーキングで「おにぎり何個分」消費したか知りたいとき',
                        '週末の登山やランニングが、ダイエットにどれだけ貢献したか算出したい',
                        '「掃除や通勤」などの家事・移動を、運動として捉えてモチベーションを上げたい',
                        '1kg痩せるために、毎日あと何分のジョギングが必要か計画を立てるとき',
                        '水泳やHIITなど、強度の高い運動の凄さを具体的な数値で実感したい',
                        'スマートウォッチを持っていないとき、大まかな消費カロリーを把握したい'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-green-50/50 p-4 rounded-xl border border-green-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-green-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-green-500 to-emerald-600 rounded-full"></span>
                活動データを入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">体重 (kg)</label>
                    <div class="relative">
                        <input type="number" step="0.1" wire:model.live="weight" placeholder="65"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">kg</span>
                    </div>
                </div>

                <div class="space-y-3 group">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">運動の種類</label>
                    <div class="relative">
                        <select wire:model.live="exercise"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none appearance-none">
                            @foreach($metValues as $key => $value)
                                <option value="{{ $key }}">{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="space-y-3 group text-center">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-widest block">実施時間 (分)</label>
                    <div class="relative">
                        <input type="number" wire:model.live="duration" placeholder="30"
                            class="w-full border-2 border-gray-100 focus:border-green-500 focus:ring-4 focus:ring-green-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">分</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-green-50 rounded-3xl p-8 border-2 border-green-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        消費カロリー計算結果
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all flex flex-col justify-center">
                            <p class="text-xs text-green-100 mb-2 font-bold tracking-widest uppercase">Calories Burned</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-6xl font-extrabold">{{ number_format($caloriesBurned, 0) }}</span>
                                <span class="text-xl font-bold opacity-80 pl-2">kcal</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center border-b-orange-400 border-b-4">
                            <p class="text-xs text-orange-500 mb-1 font-bold">脂肪燃焼量</p>
                            <p class="text-3xl font-bold text-gray-800">{{ number_format($fatBurned, 1) }} <span class="text-sm font-bold text-gray-400 pl-1">g</span></p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center border-b-blue-400 border-b-4">
                            <p class="text-xs text-blue-500 mb-1 font-bold">徒歩換算</p>
                            <p class="text-3xl font-bold text-gray-800">{{ number_format($dailyWalkEquivalent, 0) }} <span class="text-sm font-bold text-gray-400 pl-1">分</span></p>
                        </div>
                    </div>

                    {{-- 食品換算 --}}
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                        <h4 class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-4">この消費量は「食品」で例えると？</h4>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍚</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">ご飯 (1杯)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 250, 1) }} 杯分</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍫</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">チョコ (1枚)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 500, 1) }} 枚分</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍺</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">ビール (中ジョッキ)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 200, 1) }} 杯分</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                                <span class="text-2xl">🍩</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold">ドーナツ (1個)</p>
                                    <p class="text-sm font-bold text-gray-700">{{ number_format($caloriesBurned / 300, 1) }} 個分</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-4 rounded-xl bg-green-100/50 text-green-800 text-xs font-medium leading-relaxed">
                        <p>※1kgの脂肪を燃焼させるには約7,200kcalが必要です。本日の運動を毎日{{ 7200 / ($caloriesBurned > 0 ? $caloriesBurned : 1) < 365 ? number_format(7200 / ($caloriesBurned > 0 ? $caloriesBurned : 1), 0) . '日間' : '数年間' }}続けると、脂肪が1kg減る計算になります。</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-green-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">体重を入力</p>
                            <p class="text-sm text-gray-600">消費カロリーは体重に比例します。重いほど、筋肉を動かしたり体を運んだりするのに多くのエネルギーを消費するため、正確な現在の体重を入力してください。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">活動の種類（METs）を選択</p>
                            <p class="text-sm text-gray-600">リストから該当する運動を選んでください。ここには国立健康・栄養研究所が公開している「METs（メッツ）」と呼ばれる指標が設定されています。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">実施時間を入力して結果を確認</p>
                            <p class="text-sm text-gray-600">実際に動いた時間を入力すると、自動的に計算されます。食べ物の誘惑に負けそうなときは、この数値を思い出して「おにぎり何個分か」考えてみましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-emerald-500 rounded-full"></span>
                    主な活動の運動強度 (METs)
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-3 px-2 text-left font-bold text-gray-700">活動内容</th>
                                <th class="py-3 px-2 text-center font-bold text-gray-700">METs</th>
                                <th class="py-3 px-2 text-left font-bold text-gray-700">強度の例え</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 uppercase tracking-tighter">
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">掃除・家事</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">3.0~3.5</td>
                                <td class="py-3 px-2 text-left text-gray-500">通常の歩行と同等</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">早歩き (6.4km/h)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">5.0</td>
                                <td class="py-3 px-2 text-left text-gray-500">かなりの息切れ</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">ジョギング (8km/h)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">8.3</td>
                                <td class="py-3 px-2 text-left text-gray-500">全身運動</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">ランニング (12km/h)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">11.5</td>
                                <td class="py-3 px-2 text-left text-gray-500">激しい追い込み</td>
                            </tr>
                            <tr class="hover:bg-green-50/50">
                                <td class="py-3 px-2 text-left font-bold">水泳 (クロール)</td>
                                <td class="py-3 px-2 text-center text-blue-600 font-bold">10.0</td>
                                <td class="py-3 px-2 text-left text-gray-500">水圧負荷あり</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">METs(メッツ)は、安静時を1としたとき、その運動が何倍のカロリーを消費するかを示す活動強度の指数です。</p>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「METs（メッツ）」とは何ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">METs（Metabolic Equivalents）は、運動の強度を表す単位です。何もせず安静にしている状態を「1」とし、その運動が何倍のエネルギーを消費するかを示します。例えば、3メッツの運動は安静時の3倍のエネルギーを消費します。厚生労働省の健康指針でも、この数値をベースにした活動が推奨されています。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. スマートウォッチの数値とズレがあるのはなぜですか？</h3>
                    <p class="text-gray-600 leading-relaxed">スマートウォッチは心拍数や加速度センサーを組み合わせて、「個人差（心肺能力）」を加味して算出します。一方、本ツールの計算式は厚生労働省が定義する標準的なMETsに基づいた統計的な予測値です。どちらかが間違っているわけではなく、あくまで目安として捉えてください。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 脂肪を燃やすのに「20分以上の運動」が必要って本当？</h3>
                    <p class="text-gray-600 leading-relaxed">かつてはそう言われていましたが、現在は「10分の運動を2回行っても、連続で20分行ったのと同様の脂肪燃焼効果がある」ことがわかっています。合計の消費カロリーが重要。小まめに動くこともダイエットには非常に有効です。</p>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 運動後に体重が減っているのは、脂肪が燃えたから？</h3>
                    <p class="text-gray-600 leading-relaxed">運動直後の大幅な体重減少のほとんどは「水分の排出（汗）」によるものです。脂肪1kgを燃やすには7,200kcal必要ですから、一度の運動で数百グラム以上の「脂肪そのもの」が消えることはありません。短期的な変化に一喜一憂せず、長期的に消費カロリーを積み重ねることが成功の鍵です。</p>
                </div>
                <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-gradient-to-r from-emerald-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 掃除などの「家事」での消費カロリーも計算すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">はい、ぜひ計算すべきです！「NEAT（非運動性熱産生）」と呼ばれ、日々の家事や立ち仕事による消費エネルギーは蓄積すると莫大な量になります。ジムに行く時間がないときほど、意識的に家事の強度を上げたり（アクティブ家事）、階段を使うことで消費を稼ぐことができます。</p>
                </div>
                <div class="border-l-4 border-teal-500 pl-6 py-4 bg-gradient-to-r from-teal-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 食事の直後の運動は、脂肪燃焼に効果的ですか？</h3>
                    <p class="text-gray-600 leading-relaxed">食後1時間程度は消化器に血液が集中しているため、激しい運動は避けるべきです。一方で、食後30分〜1時間後くらいの軽い運動（散歩など）は、血糖値の急上昇を抑え、脂肪を蓄えにくくする（インスリンの過剰分泌を抑える）効果があるため、ダイエットには推奨されています。</p>
                </div>
            </div>
        </div>
    </div>
</div>