<?php

namespace App\Livewire;

use Livewire\Component;

class RoiCalculator extends Component
{
    public $investment = 1000000; // 投資額
    public $revenue = 1500000; // 売上・収益
    public $cost = 800000; // コスト

    // 計算結果
    public $profit = 0;
    public $roi = 0;
    public $roiPercentage = 0;
    public $breakEvenPoint = 0;

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
        $investment = max(0, (float) $this->investment);
        $revenue = max(0, (float) $this->revenue);
        $cost = max(0, (float) $this->cost);

        // 利益 = 売上 - コスト
        $this->profit = $revenue - $cost;

        // ROI = (利益 / 投資額) × 100
        $this->roi = $investment > 0 ? ($this->profit / $investment) : 0;
        $this->roiPercentage = $this->roi * 100;

        // 損益分岐点（投資額を回収するために必要な売上）
        $this->breakEvenPoint = $investment + $cost;
    }

    public function render()
    {
        return view('livewire.roi-calculator')
            ->layout('components.layouts.app', [
                'title' => 'ROI計算シミュレーター【無料】| 投資対効果を即計算',
                'description' => '投資額・売上・コストを入力するだけで、ROI（投資利益率）を瞬時に計算。ビジネス投資の効果測定に最適な無料ツール。',
                'keywords' => 'ROI計算,投資対効果,投資利益率,収益性分析,ビジネス分析,無料ツール',
            ]);
    }
}