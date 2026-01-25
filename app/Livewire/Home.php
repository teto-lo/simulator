<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home')
            ->layout('components.layouts.app', [
                'title' => '計算ラボ | 無料で使える計算ツール',
                'description' => 'ビジネスから日常まで、あらゆる計算を瞬時に実行。広告予算、投資、健康管理など、完全無料・登録不要の計算ラボ。',
                'keywords' => 'シミュレーター,計算ツール,無料,広告予算,投資計算,健康管理,ビジネスツール',
                'ogTitle' => '計算ラボ | あらゆる計算を瞬時に実行',
                'ogDescription' => 'ビジネス・投資・健康など、様々な分野の計算ツールを完全無料で提供。登録不要で今すぐ使えます。',
            ]);
    }
}