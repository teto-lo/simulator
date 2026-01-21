<?php

namespace App\Livewire;

use Livewire\Component;

class RetirementCalculator extends Component
{
    public $currentAge = 30;
    public $retirementAge = 65;
    public $monthlyExpense = 250000; // 老後の月間生活費
    public $lifeExpectancy = 90; // 平均余命
    public $currentSavings = 0; // 現在の貯蓄
    public $monthlyContribution = 50000; // 月々の積立額
    public $expectedReturn = 3.0; // 期待リターン(%)
    public $pension = 150000; // 年金受給額（月額）

    // 計算結果
    public $yearsToRetirement = 0;
    public $yearsInRetirement = 0;
    public $totalNeeded = 0;
    public $pensionTotal = 0;
    public $shortfall = 0;
    public $projectedSavings = 0;
    public $gap = 0;

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
        $this->yearsToRetirement = max(0, (int) $this->retirementAge - (int) $this->currentAge);
        $this->yearsInRetirement = max(0, (int) $this->lifeExpectancy - (int) $this->retirementAge);

        // 老後に必要な総額 = 月間生活費 × 12 × 老後年数
        $totalExpense = (float) $this->monthlyExpense * 12 * $this->yearsInRetirement;

        // 年金受給総額 = 月額年金 × 12 × 老後年数
        $this->pensionTotal = (float) $this->pension * 12 * $this->yearsInRetirement;

        // 不足額 = 総生活費 - 年金受給総額
        $this->shortfall = max(0, $totalExpense - $this->pensionTotal);
        $this->totalNeeded = $this->shortfall;

        // 将来の貯蓄額（複利計算）
        $rate = (float) $this->expectedReturn / 100 / 12;
        $months = $this->yearsToRetirement * 12;
        $currentSavings = (float) $this->currentSavings;
        $monthly = (float) $this->monthlyContribution;

        // 現在の貯蓄の将来価値
        $futureValueOfSavings = $currentSavings * pow(1 + $rate, $months);

        // 積立の将来価値
        $futureValueOfContributions = 0;
        if ($rate > 0) {
            $futureValueOfContributions = $monthly * ((pow(1 + $rate, $months) - 1) / $rate);
        } else {
            $futureValueOfContributions = $monthly * $months;
        }

        $this->projectedSavings = $futureValueOfSavings + $futureValueOfContributions;

        // 不足・余剰
        $this->gap = $this->projectedSavings - $this->totalNeeded;
    }

    public function render()
    {
        return view('livewire.retirement-calculator')
            ->layout('components.layouts.app', [
                'title' => '老後資金計算シミュレーター【無料】| 年金・貯蓄プラン',
                'description' => '老後に必要な資金を計算。年金額、生活費、積立額から将来の資産を予測する無料ツール。',
                'keywords' => '老後資金,年金計算,老後シミュレーション,退職金,ライフプラン,資産形成,無料ツール',
            ]);
    }
}