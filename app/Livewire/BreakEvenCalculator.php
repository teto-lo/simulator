<?php

namespace App\Livewire;

use Livewire\Component;

class BreakEvenCalculator extends Component
{
    public $fixedCost = 1000000; // 固定費
    public $variableCostPerUnit = 500; // 変動費（単位あたり）
    public $sellingPrice = 1000; // 販売価格

    // 計算結果
    public $breakEvenUnits = 0;
    public $breakEvenRevenue = 0;
    public $contributionMargin = 0;
    public $contributionMarginRatio = 0;

    public function mount()
    {
        $this->calculate();
    }

    public function updated($propertyName)
    {
        $this->calculate();
    }

    public function calculate()
    {
        $fixedCost = max(0, (float) $this->fixedCost);
        $variableCost = max(0, (float) $this->variableCostPerUnit);
        $price = max(0.01, (float) $this->sellingPrice);

        // 貢献利益 = 販売価格 - 変動費
        $this->contributionMargin = $price - $variableCost;

        // 貢献利益率 = 貢献利益 / 販売価格
        $this->contributionMarginRatio = ($this->contributionMargin / $price) * 100;

        // 損益分岐点売上数量 = 固定費 / 貢献利益
        $this->breakEvenUnits = $this->contributionMargin > 0
            ? $fixedCost / $this->contributionMargin
            : 0;

        // 損益分岐点売上高 = 損益分岐点売上数量 × 販売価格
        $this->breakEvenRevenue = $this->breakEvenUnits * $price;
    }

    public function render()
    {
        return view('livewire.break-even-calculator')
            ->layout('components.layouts.app', [
                'title' => '損益分岐点計算シミュレーター【無料】| BEP分析ツール',
                'description' => '固定費・変動費・販売価格から損益分岐点を瞬時に計算。事業計画、価格設定の参考に最適な無料ツール。',
                'keywords' => '損益分岐点,BEP,損益分岐点分析,固定費,変動費,貢献利益,ビジネス分析,無料ツール',
            ]);
    }
}