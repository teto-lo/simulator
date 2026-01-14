<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home')
            ->layout('components.layouts.app', [
                'title' => 'マーケティングツール集 | 無料で使える計算ツール',
                'description' => 'Web広告運用に必要な計算を瞬時に実行。広告予算シミュレーター、CPM計算、ROAS計算など、マーケティング担当者のための無料ツール集。',
                'keywords' => 'マーケティングツール,広告計算,無料ツール,広告予算,シミュレーター',
            ]);
    }
}