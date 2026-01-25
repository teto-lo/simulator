{{-- resources/views/livewire/contact-form.blade.php --}}
<div class="min-h-screen bg-gradient-to-br from-purple-50 via-pink-50 to-slate-50 py-24">
    <div class="max-w-3xl mx-auto px-4">

        {{-- カード --}}
        <div class="relative bg-white/90 backdrop-blur rounded-3xl shadow-2xl p-10 border border-purple-100">

            {{-- アクセント --}}
            <div
                class="absolute -top-1 left-1/2 -translate-x-1/2 w-24 h-1.5 rounded-full bg-gradient-to-r from-purple-500 to-pink-500">
            </div>

            <h1
                class="mt-4 text-3xl font-extrabold text-center bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                お問い合わせ
            </h1>

            <p class="text-center text-gray-500 mt-3 mb-10">
                ツールに関するご質問・改善要望など、お気軽にどうぞ
            </p>

            {{-- 成功メッセージ --}}
            @if($success)
                <div
                    class="mb-8 flex items-center gap-3 p-4 rounded-xl bg-green-50 border border-green-200 text-green-700 animate-fade-in">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>お問い合わせを受け付けました。</span>
                </div>
            @endif

            <form wire:submit.prevent="submit" class="space-y-8">

                {{-- 名前 --}}
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        お名前
                    </label>
                    <input type="text" wire:model.defer="name" class="w-full rounded-xl border-gray-300 px-4 py-3
                               focus:border-purple-500 focus:ring-purple-500
                               transition shadow-sm">
                    @error('name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- メール --}}
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        メールアドレス
                    </label>
                    <input type="email" wire:model.defer="email" class="w-full rounded-xl border-gray-300 px-4 py-3
                               focus:border-purple-500 focus:ring-purple-500
                               transition shadow-sm">
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- 内容 --}}
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        お問い合わせ内容
                    </label>
                    <textarea wire:model.defer="message" rows="6" class="w-full rounded-xl border-gray-300 px-4 py-3
                               focus:border-purple-500 focus:ring-purple-500
                               transition shadow-sm resize-none"></textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- 送信 --}}
                <button type="submit" class="w-full py-4 rounded-2xl font-bold text-white
                           bg-gradient-to-r from-purple-600 to-pink-600
                           shadow-lg shadow-purple-200
                           hover:opacity-90 hover:shadow-xl
                           active:scale-[0.98]
                           transition-all">
                    送信する
                </button>
            </form>
        </div>
    </div>
</div>