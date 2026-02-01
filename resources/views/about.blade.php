<x-layouts.app title="計算ラボについて | 使い方ガイド" description="計算ラボのご紹介、ツールの使い方、よくある質問について。" :hideTopAd="true">
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-purple-50 to-pink-50 py-12">
        <div class="max-w-5xl mx-auto px-4">

            {{-- ヘッダー --}}
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl mb-6 shadow-2xl">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h1
                    class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 mb-4">
                    計算ラボについて
                </h1>
                <p class="text-lg text-gray-600">
                    あらゆる計算を瞬時に実行する無料ツール集
                </p>
            </div>

            {{-- サービス概要 --}}
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-12 mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <span class="w-2 h-10 bg-gradient-to-b from-purple-600 to-pink-600 rounded-full"></span>
                    サービス概要
                </h2>

                <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                    <p class="text-lg leading-relaxed">
                        <strong
                            class="text-purple-600">計算ラボ</strong> は、ビジネス、健康、金融など、あらゆる分野の複雑な計算を瞬時に実行できる、プロフェッショナルな無料オンラインツール集です。
                    </p>

                    <div class="grid md:grid-cols-3 gap-6 my-8">
                        <div
                            class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-2xl border-2 border-purple-200">
                            <div class="text-4xl font-bold text-purple-600 mb-2">100%</div>
                            <div class="text-sm font-semibold text-gray-700">完全無料</div>
                            <p class="text-xs text-gray-600 mt-2">すべての機能を無料で何度でも使えます</p>
                        </div>
                        <div
                            class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border-2 border-blue-200">
                            <div class="text-4xl font-bold text-blue-600 mb-2">10+</div>
                            <div class="text-sm font-semibold text-gray-700">豊富なツール</div>
                            <p class="text-xs text-gray-600 mt-2">多様なカテゴリーのシミュレーター</p>
                        </div>
                        <div
                            class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border-2 border-green-200">
                            <div class="text-4xl font-bold text-green-600 mb-2">0</div>
                            <div class="text-sm font-semibold text-gray-700">登録不要</div>
                            <p class="text-xs text-gray-600 mt-2">面倒な会員登録は一切不要です</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">提供しているツール</h3>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3 p-4 bg-blue-50 rounded-xl">
                            <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-gray-800">マーケティング</h4>
                                <p class="text-sm text-gray-600">広告予算シミュレーター</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-purple-50 rounded-xl">
                            <svg class="w-6 h-6 text-purple-600 flex-shrink-0 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-gray-800">ビジネス分析</h4>
                                <p class="text-sm text-gray-600">ROI計算、損益分岐点計算</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl">
                            <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-gray-800">金融・投資</h4>
                                <p class="text-sm text-gray-600">複利計算、ローン返済、老後資金計算</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-amber-50 rounded-xl">
                            <svg class="w-6 h-6 text-amber-600 flex-shrink-0 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-gray-800">給与・税金</h4>
                                <p class="text-sm text-gray-600">手取り給与計算</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-red-50 rounded-xl">
                            <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-gray-800">健康・フィットネス</h4>
                                <p class="text-sm text-gray-600">BMI計算、基礎代謝計算、運動消費カロリー計算</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 使い方 --}}
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-12 mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <span class="w-2 h-10 bg-gradient-to-b from-blue-600 to-indigo-600 rounded-full"></span>
                    使い方
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            1
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">ツールを選択</h3>
                            <p class="text-gray-600">ホームページから使いたいシミュレーターをクリックします。</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            2
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">数値を入力</h3>
                            <p class="text-gray-600">必要な項目に数値を入力します。入力と同時にリアルタイムで結果が更新されます。</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            3
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">結果を確認</h3>
                            <p class="text-gray-600">計算結果が即座に表示されます。何度でも数値を変更して試算できます。</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border-2 border-blue-200">
                    <p class="text-sm text-gray-700 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <strong>ポイント:</strong> 入力データはサーバーに送信されず、すべてブラウザ上で計算されるため安全です。
                    </p>
                </div>
            </div>

            {{-- よくある質問 --}}
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-12 mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 flex items-center gap-3">
                    <span class="w-2 h-10 bg-gradient-to-b from-green-600 to-emerald-600 rounded-full"></span>
                    よくある質問
                </h2>

                <div class="space-y-6">
                    <div
                        class="border-l-4 border-purple-500 pl-6 py-4 bg-gradient-to-r from-purple-50/50 to-transparent rounded-r-xl">
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 本当に無料ですか?</h3>
                        <p class="text-gray-600">
                            A. はい、すべての機能を完全無料でご利用いただけます。今後も無料でサービスを提供し続ける予定です。
                        </p>
                    </div>

                    <div
                        class="border-l-4 border-blue-500 pl-6 py-4 bg-gradient-to-r from-blue-50/50 to-transparent rounded-r-xl">
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 会員登録は必要ですか?</h3>
                        <p class="text-gray-600">
                            A. いいえ、会員登録は一切不要です。アクセスするだけですぐに使い始められます。
                        </p>
                    </div>

                    <div
                        class="border-l-4 border-green-500 pl-6 py-4 bg-gradient-to-r from-green-50/50 to-transparent rounded-r-xl">
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 入力したデータは保存されますか?</h3>
                        <p class="text-gray-600">
                            A. いいえ、入力データは一切保存されません。すべてブラウザ上で計算され、サーバーには送信されないため安全です。
                        </p>
                    </div>

                    <div
                        class="border-l-4 border-amber-500 pl-6 py-4 bg-gradient-to-r from-amber-50/50 to-transparent rounded-r-xl">
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 計算結果は正確ですか?</h3>
                        <p class="text-gray-600">
                            A. 一般的な計算式を使用していますが、実際の値とは異なる場合があります。重要な判断の際は専門家にご相談ください。
                        </p>
                    </div>

                    <div
                        class="border-l-4 border-red-500 pl-6 py-4 bg-gradient-to-r from-red-50/50 to-transparent rounded-r-xl">
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. スマートフォンでも使えますか?</h3>
                        <p class="text-gray-600">
                            A. はい、スマートフォン・タブレット・PCなど、あらゆるデバイスで快適にご利用いただけます。
                        </p>
                    </div>

                    <div
                        class="border-l-4 border-pink-500 pl-6 py-4 bg-gradient-to-r from-pink-50/50 to-transparent rounded-r-xl">
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Q. 新しいツールは追加されますか?</h3>
                        <p class="text-gray-600">
                            A. はい、定期的に新しいシミュレーターを追加していく予定です。ご要望があればお気軽にお問い合わせください。
                        </p>
                    </div>
                </div>
            </div>

            {{-- お問い合わせ先 --}}
            <div
                class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl shadow-2xl p-8 md:p-12 text-white text-center">
                <h2 class="text-3xl font-bold mb-4">お問い合わせ</h2>
                <p class="text-lg mb-6 text-purple-100">
                    ご質問やご要望がございましたら、お気軽にお問い合わせください。
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/terms"
                        class="bg-white text-purple-600 px-6 py-3 rounded-xl font-bold hover:bg-purple-50 transition-colors">
                        利用規約
                    </a>
                    <a href="/privacy"
                        class="bg-white text-purple-600 px-6 py-3 rounded-xl font-bold hover:bg-purple-50 transition-colors">
                        プライバシーポリシー
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>