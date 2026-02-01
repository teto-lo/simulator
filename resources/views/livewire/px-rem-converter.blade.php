<div class="min-h-screen bg-gradient-to-br from-slate-50 via-pink-50 to-rose-100 py-8 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-pink-200/40 blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-rose-200/40 blur-[100px]"></div>
    </div>

    @php
        $title = 'px / rem 変換ツール | CSS設計を効率化する単位計算';
        $description = 'ピクセル（px）とレム（rem）を即座に相互変換。ルートフォントサイズに基づいた正確な計算で、レスポンシブデザインやアクセシビリティ対応をスムーズに。';
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>

    <div class="relative z-10 max-w-6xl mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="/" class="hover:text-pink-600 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                    </a>
                </li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-semibold">px / rem 変換</li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative overflow-hidden bg-gradient-to-br from-pink-600 via-rose-600 to-fuchsia-700 rounded-3xl shadow-2xl mb-8 p-8 md:p-12 text-white">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative z-10">
                <div class="flex items-center justify-center md:justify-start mb-6">
                    <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-2xl shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-center md:text-left">
                    px / rem 変換
                </h1>
                <p class="text-lg md:text-xl text-pink-100 text-center md:text-left max-w-2xl">
                    もっと速く、もっと正確にCSSコーディングを。ルート基準の単位変換を自動化。
                </p>
            </div>
        </div>

        {{-- 便利ポイント --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-xl border border-pink-100">
            <h3 class="font-bold text-gray-800 mb-6 text-xl flex items-center gap-2">
                <span class="w-1.5 h-6 bg-pink-500 rounded-full"></span>
                💡 こんなときに便利
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        'FigmaやAdobe XDのデザインカンプ上のpx値をremに変換したいとき',
                        'レスポンシブなフォントサイズを設計し、CSSの保守性を高めたいとき',
                        'アクセシビリティ（ブラウザの文字サイズ変更）に対応した数値を求めるとき',
                        'Tailwind CSS独自の「4px/0.25rem刻み」の感覚を補正したいとき',
                        'デザインシステムで全社共通の「ベースフォントサイズ」を定義したとき',
                        'CSS変数（Custom Properties）に格納する正規化された値を算出するとき'
                    ];
                @endphp
                @foreach($points as $point)
                <div class="bg-pink-50/50 p-4 rounded-xl border border-pink-100 flex items-start gap-3 transition-all hover:shadow-md group">
                    <span class="w-2 h-2 bg-pink-400 rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
                    <p class="text-sm text-gray-700 leading-relaxed">{{ $point }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- 入力フォーム・結果表示 --}}
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-6 md:p-10 mb-12 border border-pink-50">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-800 flex items-center gap-2">
                <span class="w-2 h-8 bg-gradient-to-b from-pink-500 to-rose-600 rounded-full"></span>
                値を入力
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-pink-600">
                        <span class="bg-pink-100 text-pink-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">1</span>
                        基準サイズ (Base px)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="baseSize" placeholder="16"
                            class="w-full border-2 border-gray-100 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">px</span>
                    </div>
                    <p class="text-xs text-gray-500 ml-1">通常 16px (100%) がブラウザの標準です</p>
                </div>

                <div class="space-y-3 group">
                    <label class="flex items-center text-sm font-bold text-gray-700 transition-colors group-focus-within:text-pink-600">
                        <span class="bg-pink-100 text-pink-600 rounded-lg w-7 h-7 flex items-center justify-center text-xs mr-3 font-extrabold">2</span>
                        変換したいピクセル値 (px)
                    </label>
                    <div class="relative">
                        <input type="number" wire:model.live="px" placeholder="24"
                            class="w-full border-2 border-gray-100 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 rounded-2xl p-4 text-2xl font-bold transition-all outline-none">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">px</span>
                    </div>
                </div>
            </div>

            {{-- 計算結果 --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-50 to-pink-50 rounded-3xl p-8 border-2 border-pink-100 shadow-inner">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                        レム変換結果
                    </h3>

                    <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-3xl p-8 mb-8 shadow-xl text-white text-center transform hover:scale-[1.02] transition-all">
                        <p class="text-xs text-pink-100 mb-2 font-bold tracking-widest uppercase">Result in REM</p>
                        <div class="flex items-baseline justify-center gap-1 mb-2">
                            <span class="text-6xl font-extrabold">{{ number_format($rem, 3) }}</span>
                            <span class="text-xl font-bold opacity-80 pl-2 text-pink-100">rem</span>
                        </div>
                        <div class="inline-flex items-center bg-white/20 px-6 py-2 rounded-full backdrop-blur-sm mt-3">
                            <span class="text-sm font-bold">Formula: {{ $px }}px / {{ $baseSize }}px</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">入力ピクセル</p>
                            <p class="text-2xl font-bold text-gray-800">{{ number_format($px) }}px</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-md border border-gray-100 text-center">
                            <p class="text-xs text-gray-400 mb-1 font-bold">変換後レム</p>
                            <p class="text-2xl font-bold text-pink-600">{{ number_format($rem, 3) }}rem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- 使い方セクション --}}
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-pink-500 rounded-full"></span>
                    使い方
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <p class="font-bold text-gray-800">HTMLルートのフォントサイズを確認</p>
                            <p class="text-sm text-gray-600">プロジェクトのCSSで <code>html { font-size: ... }</code> がどう定義されているかを確認。通常は16pxです。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <p class="font-bold text-gray-800">ピクセル値を入力</p>
                            <p class="text-sm text-gray-600">デザインツール等で確認した、設定したい要素のpx値を入力します。リアルタイムに変換されます。</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <p class="font-bold text-gray-800">算出したremをCSSに書き込む</p>
                            <p class="text-sm text-gray-600">ブラウザのズームやOS設定のテキストサイズ変更に追従する、レスポンシブな実装の完了です。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="w-2 h-7 bg-rose-500 rounded-full"></span>
                    クイック変換表 (16pxベース)
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="text-left py-3 px-2 font-bold text-gray-700">px</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">rem</th>
                                <th class="text-left py-3 px-2 font-bold text-gray-700">px</th>
                                <th class="text-right py-3 px-2 font-bold text-gray-700">rem</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 uppercase font-mono">
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">12</td> <td class="py-3 px-2 text-right">0.750</td>
                                <td class="py-3 px-2">24</td> <td class="py-3 px-2 text-right">1.500</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">14</td> <td class="py-3 px-2 text-right">0.875</td>
                                <td class="py-3 px-2">32</td> <td class="py-3 px-2 text-right">2.000</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50 transition-colors bg-pink-50/20">
                                <td class="py-3 px-2 font-extrabold text-pink-600">16</td> <td class="py-3 px-2 text-right font-extrabold text-pink-600">1.000</td>
                                <td class="py-3 px-2">48</td> <td class="py-3 px-2 text-right">3.000</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">18</td> <td class="py-3 px-2 text-right">1.125</td>
                                <td class="py-3 px-2">64</td> <td class="py-3 px-2 text-right">4.000</td>
                            </tr>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-3 px-2">20</td> <td class="py-3 px-2 text-right">1.250</td>
                                <td class="py-3 px-2">80</td> <td class="py-3 px-2 text-right">5.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- 計算例 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 mb-12 shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span class="w-2 h-7 bg-fuchsia-500 rounded-full"></span>
                よくあるCSS設計の計算例
            </h2>
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-pink-600 mb-2">① 標準的な本文 (16px)</p>
                    <p class="text-xs text-gray-500 mb-4 tracking-tighter">（Base: 16px）</p>
                    <div class="text-2xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        1.0 rem
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-rose-600 mb-2">② 見出し H1 (32px)</p>
                    <p class="text-xs text-gray-500 mb-4 tracking-tighter">（Base: 16px）</p>
                    <div class="text-2xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        2.0 rem
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <p class="font-bold text-fuchsia-600 mb-2">③ 小さな注釈 (12px)</p>
                    <p class="text-xs text-gray-500 mb-4 tracking-tighter">（Base: 16px）</p>
                    <div class="text-2xl font-black text-gray-800 border-t border-dashed border-gray-300 pt-4">
                        0.75 rem
                    </div>
                </div>
            </div>
        </div>

        {{-- よくある質問 --}}
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">よくある質問</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. remとemはどう使い分ければいいですか？</h3>
                    <p class="text-gray-600">remはサイト全体で共通の基準（html）を持たせたいフォントサイズやレイアウトに使用します。emは、ボタン内のアイコンサイズや行間（line-height）など、その要素のフォントサイズに比例させたい場合に使用するのが一般的です。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. px指定は絶対に使わない方がいいですか？</h3>
                    <p class="text-gray-600">必ずしもそうではありません。ボーダーの太さ（1px）や、フォントサイズに関わらず固定したい小さなアイコン、絶対にレイアウトを崩したくない固定幅の要素などはpxを使用することもあります。ただし、基本の文字サイズや余白はremが推奨されます。</p>
                </div>
                <div class="border-l-4 border-fuchsia-500 pl-6 py-4 bg-gradient-to-r from-fuchsia-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. 62.5%ルールとは何ですか？</h3>
                    <p class="text-gray-600">html要素に <code>font-size: 62.5%;</code> を指定すると、ブラウザ標準の16pxが10px相当になります。これにより <code>1.4rem = 14px</code> と計算がしやすくなります。ただし、最近では calc() や CSS変数が普及したため、無理にこのルールを使う必要性は薄れています。</p>
                </div>
                <div class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. Tailwind CSSの数値（w-4, text-xlなど）とremの関係は？</h3>
                    <p class="text-gray-600">Tailwindのデフォルト設定では「数値1 = 0.25rem = 4px」となっています。例えば <code>w-4</code> は 1rem = 16px です。本ツールで算出した値をTailwindの設定ファイル（tailwind.config.js）に反映させる際にも役立ちます。</p>
                </div>
                <div class="border-l-4 border-rose-500 pl-6 py-4 bg-gradient-to-r from-rose-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. ルートのフォントサイズをpx以外にする理由は？</h3>
                    <p class="text-gray-600">ユーザーの設定（OSやブラウザの「文字を大きく」する設定）を尊重するためです。pxで固定してしまうと、視力の弱いユーザーが文字を大きくしたくても計算が固定されてしまい、アクセシビリティが低下します。%やキーワード指定にすることで解決します。</p>
                </div>
                <div class="border-l-4 border-fuchsia-500 pl-6 py-4 bg-gradient-to-r from-fuchsia-50/30 to-transparent rounded-r-xl">
                    <h3 class="font-bold text-gray-800 mb-2">Q. remを使うとブレイクポイント（メディアクエリ）はどうなりますか？</h3>
                    <p class="text-gray-600">メディアクエリに em または rem を使うと、ユーザーがブラウザをズームした際に、適切なタイミングでレイアウトが切り替わるようになります。最近のモダンなCSS設計では、メディアクエリにも相対単位が推奨されています。</p>
                </div>
            </div>
        </div>
    </div>
</div>
