<div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50 to-red-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-orange-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-red-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = 'フリマ利益計算ツール | メルカリ・ラクマの純利益を自動算出';
        $description = 'メルカリ、ラクマ、ヤフオクなどの手数料・送料を差し引いた純利益を瞬時に計算。いくらで売れば赤字にならないか、最適な販売価格を見極める。';
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
                <li class="text-gray-900 font-semibold">フリマ利益計算</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-orange-600 via-red-600 to-rose-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    フリマ利益計算
                </h1>
                <p class="text-lg md:text-xl text-orange-100 text-center md:text-left max-w-2xl">
                    手数料と送料を引いたら残りはいくら？販売価格の決定を強力にバックアップ。
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
                        '不用品を出品する際の最低販売価格の設定に',
                        'メルカリ・ラクマ・ヤフオクでの利益率の比較',
                        '「値下げ交渉」を受けた際の限界価格の把握',
                        '梱包資材やガソリン代を含めたトータル収支管理',
                        '送料込み（出品者負担）設定時の実質利益の算出',
                        '物販・せどりを行う際の仕入れ判断材料として'
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
                販売条件を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-orange-600">
                        <span class="bg-orange-100 text-orange-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        プラットフォーム
                    </label>
                    <select wire:model.live="platform"
                        class="w-full border-2 border-gray-100 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-2xl p-4 text-lg font-bold transition-all outline-none bg-white">
                        <option value="mercari">メルカリ（手数料 10%）</option>
                        <option value="rakuma">ラクマ（手数料 6.6%+税）</option>
                        <option value="yahoo">ヤフオク（手数料 10%）</option>
                    </select>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-orange-600">
                        <span class="bg-orange-100 text-orange-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        販売価格（円）
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="sellingPrice" placeholder="3000"
                            class="w-full border-2 border-gray-100 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-orange-100 text-orange-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">3</span>
                        配送費用（送料/円）
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="shippingCost" placeholder="210"
                            class="w-full border-2 border-gray-100 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">ネコポス: 210円、宅急便コンパクト: 450円〜</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center text-sm font-bold text-gray-700">
                        <span class="bg-orange-100 text-orange-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">4</span>
                        仕入れ値・経費（円）
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="purchasePrice" placeholder="1000"
                            class="w-full border-2 border-gray-100 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">商品の仕入れ価格や梱包資材代など</p>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-orange-50 rounded-3xl p-8 border-2 border-orange-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        想定純利益
                    </h3>

                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-orange-100 mb-2 font-bold tracking-widest uppercase">Net Profit</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-lg opacity-80 font-bold">¥</span>
                            <span class="text-6xl font-extrabold">{{ number_format($profit) }}</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm">
                            <span class="text-sm font-bold">利益率: {{ number_format($profitRate, 1) }}%</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">販売手数料</p>
                            <p class="text-xl font-bold text-orange-600">¥{{ number_format($salesFee) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">配送費用</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($shippingCost) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">仕入れ・経費</p>
                            <p class="text-xl font-bold text-gray-800">¥{{ number_format($purchasePrice) }}</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">総コスト</p>
                            <p class="text-xl font-bold text-red-600">¥{{ number_format($totalCost) }}</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-gradient-to-r from-orange-50 to-red-50 border border-orange-200">
                        <p class="text-sm font-bold text-orange-800 flex items-center gap-2">
                            @if($profit > 0)
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                収支診断: 利益が出ています。利益率{{ number_format($profitRate, 0) }}%は優良なラインです。
                            @else
                                <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                収支診断: 現在の設定では損益分岐点を下回っています。販売価格を見直しましょう。
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
                    <span class="w-2 h-7 bg-orange-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">出品するアプリ（手数料率）を選択</p>
                            <p class="text-sm text-gray-600">メルカリ(10%)、ラクマ(6.6%)など、利用するプラットフォームを選択します。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">販売価格と送料予定額を入力</p>
                            <p class="text-sm text-gray-600">送料込みで出品する場合は、想定される配送料も忘れずに入力してください。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">仕入れ値・梱包費を入力し結果を確認</p>
                            <p class="text-sm text-gray-600">「いくら手元に残るか」を確認し、目標利益に達しているか評価します。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-red-500 rounded-full"></span>
                    主要各社の手数料比較
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">サービス名</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">販売手数料</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-orange-50/50 transition-colors">
                                <td class="py-3 px-2">メルカリ</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">10%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50 transition-colors">
                                <td class="py-3 px-2">ラクマ</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">6.6%〜10%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50 transition-colors">
                                <td class="py-3 px-2">ヤフオク（会員）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">8.8%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50 transition-colors">
                                <td class="py-3 px-2">ヤフオク（非会員）</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">10%</td>
                            </tr>
                            <tr class="hover:bg-orange-50/50 transition-colors">
                                <td class="py-3 px-2">PayPayフリマ</td>
                                <td class="py-3 px-2 text-right font-bold text-gray-800">5%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">※2024年現在の目安です。各キャンペーン等で変動する場合がありますので詳細は公式アプリをご確認ください。</p>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-rose-500 rounded-full"></span>
                典型的な出品計算例
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 transition-all hover:bg-white hover:shadow-md">
                    <p class="font-bold text-orange-600 mb-2">① 衣類をネコポスで送る</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4">
                        <li>販売価格: 1,500円</li>
                        <li>手数料(10%): 150円</li>
                        <li>送料: 210円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>利益:</span> <span>1,140 円</span>
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 transition-all hover:bg-white hover:shadow-md">
                    <p class="font-bold text-red-600 mb-2">② 大型家具を自社配送</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4">
                        <li>販売価格: 12,000円</li>
                        <li>手数料(10%): 1,200円</li>
                        <li>送料: 5,000円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>利益:</span> <span>5,800 円</span>
                    </p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 transition-all hover:bg-white hover:shadow-md">
                    <p class="font-bold text-rose-600 mb-2">③ ラクマでお得に出品</p>
                    <ul class="text-xs text-gray-600 space-y-1 mb-4">
                        <li>販売価格: 3,000円</li>
                        <li>手数料(6.6%): 198円</li>
                        <li>送料: 210円</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800 border-t border-dashed border-gray-300 pt-3 flex justify-between">
                        <span>利益:</span> <span>2,592 円</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 販売手数料はいつ引かれますか？</h3>
                    <p class="text-gray-600">商品が売れた際、販売価格から自動的に差し引かれます。出品者側で別途支払う必要はありませんが、利益計算時には必ず考慮する必要があります。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「送料を安く抑える」にはどうすれば良い？</h3>
                    <p class="text-gray-600">メルカリ便やラクマパック（ゆうパケット/ネコポス）などアプリ独自の配送サービスが最も安価な傾向にあります。厚さ3cm以内に収めることがコストダウンの鍵です。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 梱包資材の代金も利益計算に含めるべき？</h3>
                    <p class="text-gray-600">はい。箱代、緩衝材（プチプチ）、テープ代なども数百円単位でかさむことがあります。「仕入れ値・経費」の欄に合算して入力することをおすすめします。</p>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gradient-to-r from-orange-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 価格交渉で「○○円で即決したい」と言われたら？</h3>
                    <p class="text-gray-600">その金額を本シミュレーターに入力し、自分の許容できる利益（手残り）が残るか確認してください。赤字になる場合は丁重にお断りするか、間を取った価格を提案しましょう。</p>
                </div>
                <div class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 利益が出ていても税金がかかることはありますか？</h3>
                    <p class="text-gray-600">不用品の譲渡（生活用動産）であれば基本的に非課税ですが、利益目的の転売やせどりで年間20万円を超える所得が発生した場合は、確定申告が必要になります。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ラクマの手数料ランクとは何ですか？</h3>
                    <p class="text-gray-600">ラクマでは前月の販売実績（回数・金額）に応じて、手数料が段階的に安くなる仕組みがあります。頻繁に利用する方は、最新のランク設定を確認して計算してください。</p>
                </div>
            </div>
        </div>
    </div>
</div>
