<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-blue-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = '広告予算シミュレーター | Web広告の費用対効果を即座に試算';
        $description = 'Google、Yahoo!、SNS広告の予算編成に。月間予算・クリック単価（CPC）・成約率（CVR）から、獲得件数、売上、ROAS、利益を自動計算。目標CV数からの逆算も可能。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-indigo-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">広告予算シミュレーター</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    広告予算シミュレーター
                </h1>
                <p class="text-lg md:text-xl text-blue-100 text-center md:text-left max-w-2xl">
                    予算内で何件獲得できるか、今すぐ試算。データに基づいた論理的な予算策定を。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-blue-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-blue-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        '「月10万円で何件獲得できる?」を即座に可視化したいとき',
                        '上司やクライアントへの予算提案で、論理的な根拠が必要なとき',
                        'GoogleリスティングかSNS広告、どちらが効率的か比較したいとき',
                        '目標CV件数から、逆算して「いくらの予算を確保すべきか」知りたいとき',
                        'CPC（クリック単価）が上がった際、利益がどれだけ削られるかの試算',
                        'LP改善でCVRが1%向上した場合の、インパクト額を算出したいとき'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-blue-50/50 p-4 rounded-xl border border-blue-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- モード切替タブ --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-t-3xl shadow-lg overflow-hidden border-b border-gray-100">
            <div class="grid grid-cols-2 gap-0 font-sans">
                <button wire:click="$set('mode', 'plan')"
                    class="relative py-6 px-4 text-center font-bold transition-all duration-300 group
                        {{ $mode === 'plan' ? 'bg-white text-blue-600' : 'bg-gray-50/50 text-gray-400 hover:bg-gray-100/50' }}">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm md:text-base tracking-tight">予算から「成果」を試算</span>
                    </div>
                </button>

                <button wire:click="$set('mode', 'reverse')"
                    class="relative py-6 px-4 text-center font-bold transition-all duration-300 group
                        {{ $mode === 'reverse' ? 'bg-white text-indigo-600' : 'bg-gray-50/50 text-gray-400 hover:bg-gray-100/50' }}">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                        </svg>
                        <span class="text-sm md:text-base tracking-tight">目標から「必要予算」を逆算</span>
                    </div>
                </button>
            </div>
        </div>

        {{-- フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-b-3xl shadow-2xl p-6 md:p-10 mb-12 border border-blue-50">
            @if ($mode === 'plan')
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">月間広告予算</label>
                        <div class="relative">
                            <input type="number" wire:model.live="budget" placeholder="300000"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CPC (クリック単価)</label>
                        <div class="relative">
                            <input type="number" wire:model.live="cpc" placeholder="120"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CVR (成約率)</label>
                        <div class="relative">
                            <input type="number" step="0.1" wire:model.live="cvr" placeholder="2.0"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">%</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">商品単価</label>
                        <div class="relative">
                            <input type="number" wire:model.live="unitPrice" placeholder="15000"
                                class="w-full border-2 border-gray-100 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 border-2 border-blue-100 shadow-inner">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        試算結果
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all flex flex-col justify-center">
                            <p class="text-xs text-blue-100 mb-2 font-bold tracking-widest uppercase">Expected Conversions</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-6xl font-extrabold">{{ number_format($conversions, 1) }}</span>
                                <span class="text-xl font-bold opacity-80 pl-2">件</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">CPA (獲得単価)</p>
                            <p class="text-3xl font-bold text-gray-800">¥{{ $conversions > 0 ? number_format($budget / $conversions) : 0 }}</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center border-b-emerald-400 border-b-4">
                            <p class="text-xs text-emerald-500 mb-1 font-bold">ROAS (広告費回収率)</p>
                            <p class="text-3xl font-bold text-emerald-600">{{ $budget > 0 ? number_format(($revenue / $budget) * 100, 0) : 0 }}%</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">クリック数</p>
                            <p class="text-lg font-bold text-gray-700">{{ number_format($clicks) }}回</p>
                        </div>
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">想定売上</p>
                            <p class="text-lg font-bold text-gray-700">¥{{ number_format($revenue) }}</p>
                        </div>
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">営業利益</p>
                            <p class="text-lg font-bold {{ $profit >= 0 ? 'text-green-600' : 'text-red-500' }}">¥{{ number_format($profit) }}</p>
                        </div>
                        <div class="bg-white/50 p-4 rounded-xl text-center">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">リーチ損益分岐点</p>
                            <p class="text-lg font-bold text-gray-700">{{ $unitPrice > 0 ? number_format($budget / ($unitPrice * ($cvr / 100))) : 0 }}回</p>
                        </div>
                    </div>
                </div>
            @else
                {{-- 逆算モード --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">目標CV件数</label>
                        <div class="relative">
                            <input type="number" wire:model.live="targetConversions" placeholder="50"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">件</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CVR (%)</label>
                        <div class="relative">
                            <input type="number" step="0.1" wire:model.live="reverseCvr" placeholder="2.0"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">%</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">想定CPC (円)</label>
                        <div class="relative">
                            <input type="number" wire:model.live="reverseCpc" placeholder="100"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                    <div class="space-y-3 group">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block">商品単価</label>
                        <div class="relative">
                            <input type="number" wire:model.live="reverseUnitPrice" placeholder="10000"
                                class="w-full border-2 border-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 rounded-2xl p-4 text-xl font-bold transition-all outline-none">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">円</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-50 to-indigo-50 rounded-3xl p-8 border-2 border-indigo-100 shadow-inner">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                         <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        逆算結果: 必要予算
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-3xl p-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all flex flex-col justify-center">
                            <p class="text-xs text-indigo-100 mb-2 font-bold tracking-widest uppercase">Required Monthly Budget</p>
                            <div class="flex items-baseline justify-center gap-1">
                                <span class="text-lg opacity-80 font-bold">¥</span>
                                <span class="text-6xl font-extrabold">{{ number_format($requiredBudget) }}</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">必要クリック数</p>
                            <p class="text-3xl font-bold text-gray-800">{{ number_format($requiredClicks) }}回</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 text-center flex flex-col justify-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">見込み総売上</p>
                            <p class="text-3xl font-bold text-blue-600">¥{{ number_format($expectedRevenue) }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-blue-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">配信モードを選択</p>
                            <p class="text-sm text-gray-600">「手元の予算でどれくらい獲得できるか」を知りたい場合は通常モード、「獲得したい件数のためにいくら必要か」を知りたい場合は逆算モードを選びます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">業界平均値を参考に数値を入力</p>
                            <p class="text-sm text-gray-600">CPC（クリック単価）やCVR（成約率）は商材によります。不明な場合は、右側の「広告指標の目安表」を参考に仮数値を入力してください。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">採算性をチェック</p>
                            <p class="text-sm text-gray-600">算出されたCPA（獲得単価）やROASが、自社の許容範囲内にあるか確認します。赤字になる場合は、単価アップやCVR改善の施策を検討しましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2 justify-center">
                    <span class="w-2 h-7 bg-indigo-500 rounded-full"></span>
                    主要プラットフォームの指標目安
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-3 px-2 text-left font-bold text-gray-700">媒体</th>
                                <th class="py-3 px-2 text-left font-bold text-gray-700">特徴</th>
                                <th class="py-3 px-2 text-right font-bold text-gray-700">想定CPC</th>
                                <th class="py-3 px-2 text-right font-bold text-gray-700">想定CVR</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">Google検索</td>
                                <td class="py-3 px-2 text-left text-gray-500">成約に近いユーザー</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥100~¥500</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">2.0~5.0%</td>
                            </tr>
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">Meta (Instagram)</td>
                                <td class="py-3 px-2 text-left text-gray-500">ビジュアル重視</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥30~¥150</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">0.5~2.0%</td>
                            </tr>
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">YouTube</td>
                                <td class="py-3 px-2 text-left text-gray-500">認知・動画広告</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥10~¥50</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">0.1~0.5%</td>
                            </tr>
                            <tr class="hover:bg-blue-50/50">
                                <td class="py-3 px-2 text-left font-bold">Yahoo!/GDN</td>
                                <td class="py-3 px-2 text-left text-gray-500">幅広い認知獲得</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">¥20~¥100</td>
                                <td class="py-3 px-2 text-right font-mono text-blue-600">0.3~1.0%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-[10px] text-gray-400 mt-4 leading-relaxed">※上記は一般的な業界平均値です。競合状況、クリエイティブ、飛び先(LP)の質によって大きく変動します。</p>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. シミュレーションで「赤字」と出ました。どうすればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">まずは「CVR（成約率）」を上げるか、「CPC（クリック単価）」を下げるための施策を考えます。あるいは「商品単価（LTV）」を上げる工夫（セット販売、定期購入への誘導など）も有効です。広告だけで黒字化が難しい場合、フロントエンド商品での集客と割り切る戦略もあります。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 「逆算」で出た必要予算が大きすぎます。減らす方法は？</h3>
                    <p class="text-gray-600 leading-relaxed">必要予算を減らすには、CVRの向上が最も効果的です。LPの改善によってCVRが1%から2%に倍増すれば、同じ獲得件数を得るための必要予算は半分で済みます。また、入札戦略を見直し、より関連性の高いキーワードに絞ることで不必要なクリックを減らす（CPCを実効的に下げる）ことも有効です。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 代理店手数料は計算に含まれていますか？</h3>
                    <p class="text-gray-600 leading-relaxed">本シミュレーターには代理店手数料（一般的には媒体費の20%程度）は含まれていません。代理店に依頼する場合は、算出された「必要予算」に1.2を掛けるか、予算入力時に手数料分を差し引いてシミュレーションしてください。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ROASとROI、どちらを重視すべきですか？</h3>
                    <p class="text-gray-600 leading-relaxed">ROASは「売上」に対する広告効率を見るため、現場の運用指標に向いています。一方、ROIは利益ベースで考えるため、経営的な判断に向いています。広告予算シミュレーターでは、まずROASで配信効率の健全性をチェックすることをお勧めします。</p>
                </div>
                <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-gradient-to-r from-indigo-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. CPCを高めに設定するメリットはありますか？</h3>
                    <p class="text-gray-600 leading-relaxed">上限クリック単価（CPC）を高めることで、検索結果のより上位に表示されやすくなり、クリック数（リーチ）を短期間で稼ぐことができます。コンバージョンが十分取れている場合は、CPCを上げてボリュームを追求するフェーズになります。</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/30 to-transparent rounded-r-xl transition-all">
                    <h3 class="font-bold text-gray-800 mb-2">Q. CPA（獲得単価）の目安はどう決めればいいですか？</h3>
                    <p class="text-gray-600 leading-relaxed">一般的には「商品利益（売上 - 原価）」を超えないように設定します。例えば利益5,000円の商品なら、CPA3,000円であれば1件あたり2,000円の利益が残る計算になります。リピート購入がある商材（LTVが高い）なら、初回購入CPAが赤字でも許容される場合があります。</p>
                </div>
            </div>
        </div>
    </div>
</div>
