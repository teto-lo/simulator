<div>
    <nav class="text-sm text-gray-600 mb-4" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
            <li><a href="/" class="hover:text-indigo-600">ホーム</a></li>
            <li><span class="text-gray-400">/</span></li>
            <li class="text-gray-900 font-semibold">広告費シミュレーター</li>
        </ol>
    </nav>

    <div class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12 px-4 rounded-2xl">
        <div class="max-w-4xl mx-auto">
            
            {{-- タイトル --}}
            <div class="text-center mb-8">
                <div class="inline-block p-3 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl mb-4 shadow-lg">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h2 class="text-4xl font-bold text-gray-800 mb-2">広告費シミュレーター</h2>
                <p class="text-gray-600">広告投資の収益性を即座に可視化</p>
            </div>

            {{-- フォーム部分 --}}
            <div class="bg-white p-8 rounded-2xl shadow-xl">
                <section>
                    <h3 class="text-2xl font-bold mb-6 text-gray-800 border-b-2 border-indigo-500 pb-2">広告収益を計算する</h3>

                    <p class="text-sm text-gray-600 text-center mb-6 bg-blue-50 p-4 rounded-lg">
                        広告費・CPC・CVR・成約単価を入力するだけで、
                        <strong class="text-indigo-600">売上・利益・黒字／赤字</strong>を自動計算します。
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <span class="bg-indigo-100 text-indigo-700 rounded-full w-6 h-6 flex items-center justify-center text-xs mr-2">1</span>
                                広告費
                            </label>
                            <input type="number" wire:model.live="adCost" class="w-full border-2 border-gray-300 focus:border-indigo-500 rounded-lg p-3" placeholder="例: 100000">
                        </div>

                        <div class="space-y-2">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <span class="bg-indigo-100 text-indigo-700 rounded-full w-6 h-6 flex items-center justify-center text-xs mr-2">2</span>
                                CPC (クリック単価)
                            </label>
                            <input type="number" wire:model.live="cpc" class="w-full border-2 border-gray-300 focus:border-indigo-500 rounded-lg p-3" placeholder="例: 100">
                        </div>

                        <div class="space-y-2">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <span class="bg-indigo-100 text-indigo-700 rounded-full w-6 h-6 flex items-center justify-center text-xs mr-2">3</span>
                                CVR (成約率)
                            </label>
                            <input type="number" step="0.1" wire:model.live="cvr" class="w-full border-2 border-gray-300 focus:border-indigo-500 rounded-lg p-3" placeholder="例: 2.5 (%)">
                        </div>

                        <div class="space-y-2">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <span class="bg-indigo-100 text-indigo-700 rounded-full w-6 h-6 flex items-center justify-center text-xs mr-2">4</span>
                                成約単価
                            </label>
                            <input type="number" wire:model.live="unitPrice" class="w-full border-2 border-gray-300 focus:border-indigo-500 rounded-lg p-3" placeholder="例: 10000">
                        </div>
                    </div>

                    {{-- 結果表示 --}}
                    <div class="mt-8 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-6 border-2 border-gray-200">
                        <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            計算結果
                        </h4>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <p class="text-xs text-gray-500 mb-1">クリック数</p>
                                <p class="text-2xl font-bold text-gray-800">@php echo number_format($clicks); @endphp</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <p class="text-xs text-gray-500 mb-1">想定CV数</p>
                                <p class="text-2xl font-bold text-indigo-600">@php echo $conversions; @endphp</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <p class="text-xs text-gray-500 mb-1">売上</p>
                                <p class="text-xl font-bold text-blue-600">¥@php echo number_format($revenue); @endphp</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm border-2 @if($profit >= 0) border-green-400 @else border-red-400 @endif">
                                <p class="text-xs text-gray-500 mb-1">利益</p>
                                <p class="text-xl font-bold @if($profit >= 0) text-green-600 @else text-red-600 @endif">
                                    ¥@php echo number_format($profit); @endphp
                                </p>
                            </div>
                        </div>

                        <div wire:loading class="text-sm text-indigo-600 text-center py-2 flex items-center justify-center">
                            <svg class="animate-spin h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            計算中...
                        </div>

                        <div class="mt-4 p-4 rounded-lg @if($profit >= 0) bg-green-50 @else bg-red-50 @endif">
                            <p class="text-sm font-semibold @if($profit >= 0) text-green-800 @else text-red-800 @endif">
                                @if($profit >= 0)
                                    ✓ 黒字運用です
                                @else
                                    ✗ 赤字運用です - 改善が必要
                                @endif
                            </p>
                        </div>
                    </div>
                </section>
                    {{-- FAQ (構造化データ対応・SEO強化) --}}
                <section class="mt-12 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">よくある質問</h2>
                    
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h3 class="font-bold text-gray-800 mb-2">Q. 広告費シミュレーターは無料で使えますか?</h3>
                            <p class="text-gray-600 text-sm">A. はい、完全無料でご利用いただけます。登録不要で何度でも計算できます。</p>
                        </div>
                        
                        <div class="border-b pb-4">
                            <h3 class="font-bold text-gray-800 mb-2">Q. どんな広告に対応していますか?</h3>
                            <p class="text-gray-600 text-sm">A. Google広告、Yahoo!広告、Facebook広告、Instagram広告、TikTok広告など、あらゆるCPC課金型広告に対応しています。</p>
                        </div>
                        
                        <div class="border-b pb-4">
                            <h3 class="font-bold text-gray-800 mb-2">Q. CVRとは何ですか?</h3>
                            <p class="text-gray-600 text-sm">A. CVR(Conversion Rate)は成約率のことで、クリックされた回数のうち何%が成約に至ったかを示す指標です。</p>
                        </div>
                        
                        <div class="border-b pb-4">
                            <h3 class="font-bold text-gray-800 mb-2">Q. 計算結果は保存されますか?</h3>
                            <p class="text-gray-600 text-sm">A. いいえ、入力データはブラウザ上でのみ処理され、サーバーには保存されません。安心してご利用ください。</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
