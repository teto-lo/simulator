<div class="min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-100 py-8">
    <div class="max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6">
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
                <li class="text-gray-900 font-semibold">電気代計算</li>
            </ol>
        </nav>

        {{-- Hero --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 text-center md:text-left">
                    電気代計算
                </h1>
                <p class="text-lg md:text-xl text-cyan-100 text-center md:text-left max-w-2xl">
                    家電のワット数と使用時間から電気代を自動計算。節約の第一歩。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 mb-8 shadow-lg border-2 border-cyan-200/50">
            <div class="flex items-start gap-4">
                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-3 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 mb-3 text-lg">💡 こんなときに便利</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <p class="text-sm text-gray-600">家電の電気代を把握</p>
                        <p class="text-sm text-gray-600">節約ポイントを発見</p>
                        <p class="text-sm text-gray-600">買い替え判断の材料</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 入力フォーム --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-cyan-500 to-blue-600 rounded-full"></span>
                家電情報を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">消費電力（W）</label>
                    <input type="number" wire:model.live="wattage" placeholder="1000"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">1日の使用時間（時間）</label>
                    <input type="number" step="0.1" wire:model.live="hoursPerDay" placeholder="5"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">電力単価（円/kWh）</label>
                    <input type="number" step="0.1" wire:model.live="electricityRate" placeholder="31"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>

                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700">使用日数（日/月）</label>
                    <input type="number" wire:model.live="daysPerMonth" placeholder="30"
                        class="w-full border-2 border-gray-200 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 rounded-xl p-4 text-lg font-semibold">
                </div>
            </div>

            {{-- 結果 --}}
            <div class="bg-gradient-to-br from-slate-50 to-cyan-50 rounded-2xl p-8 border-2 border-cyan-100 shadow-inner">
                <h3 class="text-xl font-bold text-gray-800 mb-6">電気代目安</h3>

                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-8 mb-6 shadow-lg">
                    <p class="text-xs text-cyan-100 mb-2">月額電気代</p>
                    <p class="text-6xl font-bold text-white">¥{{ number_format($monthlyCost, 0) }}</p>
                    <p class="text-xs text-cyan-200">年間 ¥{{ number_format($yearlyCost, 0) }}</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">1日あたり</p>
                        <p class="text-xl font-bold">¥{{ number_format($dailyCost, 0) }}</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">月間消費電力</p>
                        <p class="text-xl font-bold">{{ number_format($kwh, 1) }}kWh</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-xs text-gray-500">年間消費電力</p>
                        <p class="text-xl font-bold text-orange-600">{{ number_format($kwh * 12, 1) }}kWh</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-cyan-500 pl-6 py-4 bg-gradient-to-r from-cyan-50/50 to-transparent">
                    <h3 class="font-bold">Q. 電力単価の目安は？</h3>
                    <p class="text-gray-600">一般的に25〜30円/kWh程度です。</p>
                </div>
                <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/50 to-transparent">
                    <h3 class="font-bold">Q. 節約のコツは？</h3>
                    <p class="text-gray-600">使わない家電はコンセントから抜く、省エネ家電に買い替えるなどが効果的です。</p>
                </div>
            </div>
        </div>

    </div>
</div>
    {{-- Theme: Life (Cyan/Blue) --}}
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-cyan-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-blue-200/40 blur-[100px]"></div>
    </div>
    
    @php
        $title = '電気代計算ツール | 家電の電気代を簡単シミュレーション';
        $description = '家電のワット数と使用時間から電気代を自動計算。エアコン、冷蔵庫、PCなど、あらゆる家電の電気代を一瞬で可視化。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-4xl mx-auto space-y-10">
        {{-- Breadcrumbs --}}
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-cyan-600 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        ホーム
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-slate-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-cyan-600 md:ml-2">電気代計算</span>
                    </div>
                </li>
            </ol>
        </nav>

        {{-- Header --}}
        <div class="text-center space-y-4">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/80 backdrop-blur shadow-sm border border-cyan-100 text-cyan-700 text-xs font-bold tracking-wide">
                <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
                LIFE TOOLS
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-blue-600 tracking-tight pb-1">
                電気代計算機
            </h1>
            <p class="text-slate-600 max-w-lg mx-auto text-lg">
                見えない電気代を<span class="text-cyan-600 font-bold border-b-2 border-cyan-200">見える化</span>。<br>節約の第一歩は知ることから。
            </p>
        </div>

        {{-- Main Calculator Card --}}
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/50 overflow-hidden transform transition-all hover:shadow-cyan-200/50 duration-500">
            <div class="p-6 md:p-10 space-y-8">
                <div class="grid lg:grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <div class="group">
                            <label class="block text-sm font-bold text-slate-700 mb-2 group-focus-within:text-cyan-600 transition-colors">消費電力 (W)</label>
                            <div class="relative">
                                <input type="number" wire:model.live="wattage" placeholder="1000" class="w-full text-2xl font-bold p-4 pl-5 bg-white border border-slate-200 rounded-2xl focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 transition-all outline-none shadow-sm">
                                <span class="absolute right-5 top-1/2 -translate-y-1/2 text-slate-400 font-bold">W</span>
                            </div>
                        </div>
                        <div class="group">
                            <label class="block text-sm font-bold text-slate-700 mb-2 group-focus-within:text-cyan-600 transition-colors">1日の使用時間</label>
                            <div class="relative">
                                <input type="number" step="0.1" wire:model.live="hoursPerDay" placeholder="5" class="w-full text-xl font-bold p-4 pl-5 bg-white border border-slate-200 rounded-2xl focus:border-cyan-500 focus:ring-4 focus:ring-cyan-100 transition-all outline-none shadow-sm">
                                <span class="absolute right-5 top-1/2 -translate-y-1/2 text-slate-400 font-bold">時間</span>
                            </div>
                        </div>
                        
                        <div class="bg-cyan-50/50 rounded-2xl p-4 border border-cyan-100 grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">月間使用日数</label>
                                <div class="relative">
                                    <input type="number" wire:model.live="daysPerMonth" class="w-full p-2.5 font-bold bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-cyan-400 outline-none">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-xs text-slate-400 font-bold">日</span>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">電気単価</label>
                                <div class="relative">
                                    <input type="number" wire:model.live="electricityRate" class="w-full p-2.5 font-bold bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-cyan-400 outline-none">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-xs text-slate-400 font-bold">円/kWh</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Results --}}
                    <div class="flex flex-col justify-between space-y-6">
                        <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-3xl p-1 shadow-xl shadow-cyan-200 text-white relative overflow-hidden group">
                             <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-10 -translate-y-10 group-hover:scale-110 transition-transform duration-700"></div>
                             
                             <div class="bg-white/10 backdrop-blur-sm rounded-[20px] p-8 text-center h-full flex flex-col justify-center relative z-10">
                                <span class="block text-xs font-bold uppercase tracking-widest opacity-80 mb-2">Monthly Cost</span>
                                <div class="flex items-baseline justify-center gap-1 mb-1">
                                    <span class="text-5xl md:text-6xl font-extrabold tracking-tighter drop-shadow-sm">
                                        {{ number_format($monthlyCost) }}
                                    </span>
                                    <span class="text-xl font-bold opacity-80">円</span>
                                </div>
                                <span class="text-xs font-bold bg-white/20 px-3 py-1 rounded-full inline-block mx-auto mt-2">{{ number_format($kwh, 1) }} kWh / 月</span>
                             </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-2xl p-4 border border-slate-200 shadow-sm text-center transform transition-transform hover:-translate-y-1">
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1">1日あたり</span>
                                <span class="text-xl font-bold text-slate-700">{{ number_format($dailyCost) }}<span class="text-xs ml-0.5 font-normal">円</span></span>
                            </div>
                            <div class="bg-white rounded-2xl p-4 border border-slate-200 shadow-sm text-center transform transition-transform hover:-translate-y-1">
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1">年間コスト</span>
                                <span class="text-xl font-bold text-slate-700">{{ number_format($yearlyCost) }}<span class="text-xs ml-0.5 font-normal">円</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white/60 backdrop-blur-md rounded-2xl p-6 border border-white/50 shadow-lg">
                <h3 class="font-bold text-slate-800 mb-4 flex items-center gap-2"><div class="w-2 h-8 bg-cyan-400 rounded-full"></div>消費電力の目安</h3>
                <div class="overflow-hidden rounded-xl border border-white/60">
                    <table class="w-full text-sm text-left text-slate-600">
                        <tbody class="divide-y divide-slate-100 bg-white/50">
                            <tr class="hover:bg-cyan-50 transition-colors"><td class="px-4 py-3">ドライヤー</td><td class="px-4 py-3 font-bold text-right text-slate-800">1200 W</td></tr>
                            <tr class="hover:bg-cyan-50 transition-colors"><td class="px-4 py-3">電子レンジ</td><td class="px-4 py-3 font-bold text-right text-slate-800">1000 W</td></tr>
                            <tr class="hover:bg-cyan-50 transition-colors"><td class="px-4 py-3">エアコン</td><td class="px-4 py-3 font-bold text-right text-slate-800">500~1000 W</td></tr>
                            <tr class="hover:bg-cyan-50 transition-colors"><td class="px-4 py-3">洗濯機</td><td class="px-4 py-3 font-bold text-right text-slate-800">300~500 W</td></tr>
                            <tr class="hover:bg-cyan-50 transition-colors"><td class="px-4 py-3">テレビ (50型)</td><td class="px-4 py-3 font-bold text-right text-slate-800">150 W</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="bg-white/60 backdrop-blur-md rounded-2xl p-6 border border-white/50 shadow-lg relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-blue-100 rounded-full opacity-50"></div>
                <h3 class="font-bold text-slate-800 mb-4 relative z-10">計算式について</h3>
                <div class="text-sm text-slate-600 space-y-4 relative z-10">
                    <p>電気代は以下の計算式で算出されます。</p>
                    <div class="bg-slate-800 text-cyan-400 p-4 rounded-xl font-mono text-xs shadow-lg">
                        ( 消費電力W ÷ 1000 ) × 使用時間h × 単価
                    </div>
                    <p>※ デフォルト単価は <span class="font-bold text-slate-800">31円/kWh</span> に設定しています（全国家庭電気製品公正取引協議会 新電力料金目安単価）。</p>
                </div>
            </div>
        </div>
    </div>
</div>
