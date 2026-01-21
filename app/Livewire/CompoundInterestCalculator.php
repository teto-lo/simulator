<?php

namespace App\Livewire;

use Livewire\Component;

class CompoundInterestCalculator extends Component
{
    public $principal = 1000000; // 元本
    public $annualRate = 5.0; // 年利率(%)
    public $years = 10; // 運用期間(年)
    public $monthlyDeposit = 0; // 月々の積立額
    public $compoundFrequency = 'yearly'; // 複利頻度

    // 計算結果
    public $futureValue = 0;
    public $totalDeposit = 0;
    public $totalInterest = 0;
    public $yearlyData = [];

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
        $principal = max(0, (float) $this->principal);
        $rate = max(0, (float) $this->annualRate) / 100;
        $years = max(1, (int) $this->years);
        $monthly = max(0, (float) $this->monthlyDeposit);

        // 複利計算の頻度に応じた計算
        $n = $this->getCompoundFrequency();

        $this->yearlyData = [];
        $currentValue = $principal;
        $totalDeposited = $principal;

        for ($year = 1; $year <= $years; $year++) {
            // 年初の複利計算
            $currentValue = $currentValue * pow(1 + $rate / $n, $n);

            // 月々の積立
            for ($month = 1; $month <= 12; $month++) {
                $currentValue += $monthly;
                $totalDeposited += $monthly;
            }

            $this->yearlyData[] = [
                'year' => $year,
                'value' => round($currentValue),
                'deposit' => round($totalDeposited),
                'interest' => round($currentValue - $totalDeposited),
            ];
        }

        $this->futureValue = round($currentValue);
        $this->totalDeposit = round($totalDeposited);
        $this->totalInterest = round($currentValue - $totalDeposited);
    }

    private function getCompoundFrequency()
    {
        return match ($this->compoundFrequency) {
            'monthly' => 12,
            'quarterly' => 4,
            'yearly' => 1,
            default => 1,
        };
    }

    public function render()
    {
        return view('livewire.compound-interest-calculator')
            ->layout('components.layouts.app', [
                'title' => '複利計算シミュレーター【無料】| 投資の将来価値を即計算',
                'description' => '元本・利率・期間を入力するだけで、複利効果を考慮した将来価値を瞬時に計算。投資計画、資産形成の試算に最適な無料ツール。',
                'keywords' => '複利計算,投資シミュレーター,資産運用,将来価値計算,積立投資,NISA,iDeCo,無料ツール',
            ]);
    }
}