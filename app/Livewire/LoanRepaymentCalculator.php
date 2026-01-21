<?php

namespace App\Livewire;

use Livewire\Component;

class LoanRepaymentCalculator extends Component
{
    public $loanAmount = 30000000; // 借入金額
    public $annualRate = 1.5; // 年利率(%)
    public $years = 35; // 返済期間(年)
    public $repaymentType = 'equal_payment'; // 返済方式

    // 計算結果
    public $monthlyPayment = 0;
    public $totalPayment = 0;
    public $totalInterest = 0;
    public $firstMonthPrincipal = 0;
    public $firstMonthInterest = 0;

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
        $loan = max(0, (float) $this->loanAmount);
        $rate = max(0, (float) $this->annualRate) / 100 / 12; // 月利
        $months = max(1, (int) $this->years) * 12;

        if ($this->repaymentType === 'equal_payment') {
            // 元利均等返済
            if ($rate > 0) {
                $this->monthlyPayment = $loan * $rate * pow(1 + $rate, $months) / (pow(1 + $rate, $months) - 1);
            } else {
                $this->monthlyPayment = $loan / $months;
            }
            
            $this->totalPayment = $this->monthlyPayment * $months;
            $this->totalInterest = $this->totalPayment - $loan;
            
            // 初回の内訳
            $this->firstMonthInterest = $loan * $rate;
            $this->firstMonthPrincipal = $this->monthlyPayment - $this->firstMonthInterest;
            
        } else {
            // 元金均等返済
            $principalPayment = $loan / $months;
            $this->firstMonthInterest = $loan * $rate;
            $this->firstMonthPrincipal = $principalPayment;
            $this->monthlyPayment = $principalPayment + $this->firstMonthInterest;
            
            // 総利息計算
            $totalInterest = 0;
            $remainingLoan = $loan;
            for ($i = 0; $i < $months; $i++) {
                $totalInterest += $remainingLoan * $rate;
                $remainingLoan -= $principalPayment;
            }
            
            $this->totalInterest = $totalInterest;
            $this->totalPayment = $loan + $totalInterest;
        }
    }

    public function render()
    {
        return view('livewire.loan-repayment-calculator')
            ->layout('components.layouts.app', [
                'title' => 'ローン返済シミュレーター【無料】| 月々の返済額を即計算',
                'description' => '住宅ローン・車ローンの月々の返済額と総支払額を瞬時に計算。元利均等・元金均等の両方に対応した無料ツール。',
                'keywords' => 'ローン計算,住宅ローン,返済シミュレーター,月々返済額,総支払額,元利均等,元金均等,無料ツール',
            ]);
    }
}