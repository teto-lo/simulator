<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('アスペクト比計算ツール（16:9, 4:3, 黄金比）')]
class AspectRatioCalculator extends Component
{
    // Mode: 'calculate_new' (片方入力してもう片方を計算) or 'check_ratio' (両方入力して比率を判定)
    public $mode = 'calculate'; 

    // Inputs
    public $width = '';
    public $height = '';
    public $ratioW = 16;
    public $ratioH = 9;

    // Results
    public $resultWidth = '';
    public $resultHeight = '';
    public $calculatedRatio = '';

    public function mount()
    {
        $this->width = 1920;
        $this->calculate();
    }

    public function updated($propertyName)
    {
        $this->calculate();
    }

    public function setRatio($w, $h)
    {
        $this->ratioW = $w;
        $this->ratioH = $h;
        $this->calculate();
    }

    public function calculate()
    {
        // 片方入力からもう片方を計算するモード
        $w = (float) $this->width;
        $h = (float) $this->height;
        $rw = (float) $this->ratioW;
        $rh = (float) $this->ratioH;

        if ($rw <= 0 || $rh <= 0) return;

        // 幅が入力されていれば高さを計算
        if ($w > 0) {
            $this->resultHeight = round($w * ($rh / $rw), 2);
        } else {
            $this->resultHeight = '';
        }

        // 高さが入力されていれば幅を計算
        if ($h > 0) {
            $this->resultWidth = round($h * ($rw / $rh), 2);
        } else {
            $this->resultWidth = '';
        }
    }

    // 両方の値が変更されたときにどちらを基準にするか、あるいは双方向バインディングでどう扱うか
    // ここではシンプルに「幅優先」で高さを出す、または「入力された方」を基準にするUIにする
    // 今回は「幅を入力すると高さが出る」「高さを入力すると幅が出る」という2つのフォームを用意するか
    // あるいは1つのフォームでやる場合、どちらを変更したかを追う必要がある。
    // 簡易的に「幅」入力欄と「高さ」入力欄を分けず、
    // 「基準サイズ」と「算出サイズ」を表示するようにビューで工夫する。

    public function render()
    {
        return view('livewire.aspect-ratio-calculator')
            ->layout('components.layouts.app', [
                'hideTopAd' => true,
            ]);
    }
}
