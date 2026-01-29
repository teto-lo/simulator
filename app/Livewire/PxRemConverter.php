<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('px/rem変換ツール | CSS単位自動計算')]
class PxRemConverter extends Component
{
    public $baseSize = 16;
    public $px = '';
    public $rem = '';

    public function mount()
    {
        $this->px = 16;
        $this->calculateFromPx();
    }

    // pxが更新されたらremを計算
    public function updatedPx()
    {
        $this->calculateFromPx();
    }

    // remが更新されたらpxを計算
    public function updatedRem()
    {
        $this->calculateFromRem();
    }

    // 基準サイズが更新されたら、現在入力されているpxを基準に再計算（あるいはrem固定でpx再計算か、方針による）
    // ここでは両方のバランスを取るのが難しいが、基本はpx維持でrem再計算とする
    public function updatedBaseSize()
    {
        if (is_numeric($this->px) && $this->px > 0) {
            $this->calculateFromPx();
        } elseif (is_numeric($this->rem) && $this->rem > 0) {
            $this->calculateFromRem();
        }
    }

    public function calculateFromPx()
    {
        $px = (float) $this->px;
        $base = (float) $this->baseSize;

        if ($base <= 0) return;

        if ($px > 0) {
            $this->rem = round($px / $base, 4); // 小数点4桁まで
        } else {
            $this->rem = '';
        }
    }

    public function calculateFromRem()
    {
        $rem = (float) $this->rem;
        $base = (float) $this->baseSize;

        if ($base <= 0) return;

        if ($rem > 0) {
            $this->px = round($rem * $base, 2);
        } else {
            $this->px = '';
        }
    }

    public function render()
    {
        return view('livewire.px-rem-converter')
            ->layout('components.layouts.app', [
                'hideTopAd' => true,
            ]);
    }
}
