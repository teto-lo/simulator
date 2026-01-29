<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('フリマ利益計算ツール【メルカリ・ラクマ対応】')]
class FleaMarketCalculator extends Component
{
    public $platform = 'mercari'; // mercari, rakuma, yahuoku
    public $sellingPrice = '';
    public $purchasePrice = '';
    public $shippingCost = '';

    // Results
    public $salesFee = 0;
    public $totalCost = 0;
    public $profit = 0;
    public $profitRate = 0;

    public function mount()
    {
        $this->sellingPrice = 3000;
        $this->purchasePrice = 1500;
        $this->shippingCost = 200;
        $this->calculate();
    }

    public function updated($propertyName)
    {
        $this->calculate();
    }

    public function calculate()
    {
        $selling = (float) $this->sellingPrice;
        $purchase = (float) $this->purchasePrice;
        $shipping = (float) $this->shippingCost;

        if ($selling <= 0) {
            $this->resetResults();
            return;
        }

        // プラットフォーム別の手数料率
        $feeRate = match($this->platform) {
            'mercari' => 0.10,    // メルカリ 10%
            'rakuma' => 0.066,    // ラクマ 6.6%
            'yahuoku' => 0.10,    // ヤフオク 10%
            default => 0.10
        };

        $this->salesFee = floor($selling * $feeRate);
        $this->totalCost = $purchase + $shipping + $this->salesFee;
        $this->profit = $selling - $this->totalCost;
        
        if ($selling > 0) {
            $this->profitRate = round(($this->profit / $selling) * 100, 1);
        } else {
            $this->profitRate = 0;
        }
    }

    public function resetResults()
    {
        $this->salesFee = 0;
        $this->totalCost = 0;
        $this->profit = 0;
        $this->profitRate = 0;
    }

    public function render()
    {
        return view('livewire.flea-market-calculator')
            ->layout('components.layouts.app', [
                'hideTopAd' => true,
            ]);
    }
}
