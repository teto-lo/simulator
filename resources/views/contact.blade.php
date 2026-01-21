<x-app-layout title="お問い合わせ | シミュレーションツール集" description="シミュレーションツール集へのお問い合わせフォームです。" :hideTopAd="true">
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-12">
        <div class="max-w-3xl mx-auto px-4">

            {{-- ヘッダー --}}
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl mb-6 shadow-2xl">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 mb-4">
                    お問い合わせ
                </h1>
                <p class="text-lg text-gray-600">
                    ご質問・ご要望はこちらからお送りください
                </p>
            </div>

            {{-- お問い合わせフォーム --}}
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-12">
                <form action="#" method="POST" class="space-y-6">
                    
                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">1</span>
                            お名前 <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input type="text" name="name" required class="w-full border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-xl p-4 text-lg transition-all" placeholder="山田 太郎">
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">2</span>
                            メールアドレス <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input type="email" name="email" required class="w-full border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-xl p-4 text-lg transition-all" placeholder="example@email.com">
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">3</span>
                            お問い合わせ種別 <span class="text-red-500 ml-1">*</span>
                        </label>
                        <select name="category" required class="w-full border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-xl p-4 text-lg transition-all">
                            <option value="">選択してください</option>
                            <option value="bug">不具合・エラー報告</option>
                            <option value="feature">機能追加のご要望</option>
                            <option value="question">使い方の質問</option>
                            <option value="other">その他</option>
                        </select>
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-bold text-gray-700">
                            <span class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl w-7 h-7 flex items-center justify-center text-xs mr-3 shadow-md">4</span>
                            お問い合わせ内容 <span class="text-red-500 ml-1">*</span>
                        </label>
                        <textarea name="message" required rows="6" class="w-full border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 rounded-xl p-4 text-lg transition-all" placeholder="お問い合わせ内容をご記入ください"></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold py-4 px-8 rounded-xl hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            送信する
                        </button>
                    </div>
                </form>

                <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border-2 border-blue-200">
                    <p class="text-sm text-gray-700 flex items-start gap-2">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <span>
                            <strong>注意事項:</strong><br>
                            ・通常2-3営業日以内にご返信いたします<br>
                            ・迷惑メールフォルダもご確認ください<br>
                            ・個人情報は適切に管理いたします
                        </span>
                    </p>
                </div>
            </div>

            {{-- よくある質問 --}}
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 md:p-10 mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">よくある質問</h2>
                <div class="space-y-4">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl hover:from-blue-100 hover:to-indigo-100 transition-colors">
                            <span class="font-semibold text-gray-800">Q. 新しいシミュレーターを追加してほしい</span>
                            <svg class="w-5 h-5 text-gray-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600">
                            A. お問い合わせフォームから「機能追加のご要望」を選択してご連絡ください。検討させていただきます。
                        </div>
                    </details>

                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl hover:from-blue-100 hover:to-indigo-100 transition-colors">
                            <span class="font-semibold text-gray-800">Q. 計算結果がおかしい</span>
                            <svg class="w-5 h-5 text-gray-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600">
                            A. 入力値と計算結果の詳細を添えて「不具合・エラー報告」からご連絡ください。速やかに確認いたします。
                        </div>
                    </details>

                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl hover:from-blue-100 hover:to-indigo-100 transition-colors">
                            <span class="font-semibold text-gray-800">Q. 商用利用は可能ですか?</span>
                            <svg class="w-5 h-5 text-gray-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="p-4 text-gray-600">
                            A. はい、個人・法人問わず無料でご利用いただけます。特別な許可は不要です。
                        </div>
                    </details>
                </div>
            </div>

            {{-- リンク --}}
            <div class="text-center">
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/" class="bg-white text-blue-600 px-6 py-3 rounded-xl font-bold hover:bg-blue-50 transition-colors shadow-md">
                        ← ホームに戻る
                    </a>
                    <a href="/about" class="bg-white text-blue-600 px-6 py-3 rounded-xl font-bold hover:bg-blue-50 transition-colors shadow-md">
                        サイトについて
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>