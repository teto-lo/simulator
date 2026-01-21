<?php

namespace App\Livewire;

use Livewire\Component;

class SalaryCalculator extends Component
{
    public $annualSalary = 5000000; // 年収
    public $bonus = 0; // ボーナス
    public $dependents = 0; // 扶養人数
    public $socialInsurance = true; // 社会保険加入

    // 計算結果
    public $monthlyGrossSalary = 0;
    public $monthlyNetSalary = 0;
    public $annualNetSalary = 0;
    public $incomeTax = 0;
    public $residentTax = 0;
    public $socialInsuranceFee = 0;
    public $totalDeductions = 0;
    public $takeHomeRatio = 0;

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
        $annual = max(0, (float) $this->annualSalary);
        $bonus = max(0, (float) $this->bonus);

        // 月額給与（ボーナス除く）
        $this->monthlyGrossSalary = ($annual - $bonus) / 12;

        // 概算控除計算
        // 社会保険料（約15%）
        $this->socialInsuranceFee = $this->socialInsurance ? $annual * 0.15 : 0;

        // 所得税（簡易計算）
        $taxableIncome = $annual - $this->socialInsuranceFee - 480000; // 基礎控除
        $taxableIncome -= $this->dependents * 380000; // 扶養控除
        $taxableIncome = max(0, $taxableIncome);

        // 累進課税（簡易版）
        if ($taxableIncome <= 1950000) {
            $this->incomeTax = $taxableIncome * 0.05;
        } elseif ($taxableIncome <= 3300000) {
            $this->incomeTax = 97500 + ($taxableIncome - 1950000) * 0.10;
        } elseif ($taxableIncome <= 6950000) {
            $this->incomeTax = 232500 + ($taxableIncome - 3300000) * 0.20;
        } elseif ($taxableIncome <= 9000000) {
            $this->incomeTax = 962500 + ($taxableIncome - 6950000) * 0.23;
        } else {
            $this->incomeTax = 1434000 + ($taxableIncome - 9000000) * 0.33;
        }

        // 住民税（約10%）
        $this->residentTax = max(0, $taxableIncome * 0.10);

        // 総控除額
        $this->totalDeductions = $this->incomeTax + $this->residentTax + $this->socialInsuranceFee;

        // 手取り年収
        $this->annualNetSalary = $annual - $this->totalDeductions;

        // 手取り月収
        $this->monthlyNetSalary = $this->annualNetSalary / 12;

        // 手取り率
        $this->takeHomeRatio = $annual > 0 ? ($this->annualNetSalary / $annual) * 100 : 0;
    }

    public function render()
    {
        return view('livewire.salary-calculator')
            ->layout('components.layouts.app', [
                'title' => '手取り給与計算シミュレーター【無料】| 年収から手取りを計算',
                'description' => '年収を入力するだけで、所得税・住民税・社会保険料を差し引いた手取り額を瞬時に計算。転職、昇給の参考に。',
                'keywords' => '手取り計算,年収,給与計算,所得税,住民税,社会保険料,手取り年収,無料ツール',
            ]);
    }
}