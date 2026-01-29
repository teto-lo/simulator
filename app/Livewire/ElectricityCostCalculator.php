<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('電気代計算ツール | 家電の電気代を簡単シミュレーション')]
class ElectricityCostCalculator extends Component
{
    public $wattage = '';
    public $hoursPerDay = '';
    public $daysPerMonth = 30;
    public $electricityRate = 31; // 円/kWh (全国平均)

    // Results
    public $dailyCost = 0;
    public $monthlyCost = 0;
    public $yearlyCost = 0;
    public $kwh = 0;

    public function mount()
    {
        $this->wattage = 1000; // 例: 電子レンジ
        $this->hoursPerDay = 0.5;
        $this->calculate();
    }

    public function updated($propertyName)
    {
        $this->calculate();
    }

    public function calculate()
    {
        $w = (float) $this->wattage;
        $h = (float) $this->hoursPerDay;
        $d = (float) $this->daysPerMonth;
        $rate = (float) $this->electricityRate;

        if ($w <= 0 || $h <= 0) {
            $this->resetResults();
            return;
        }

        // kWh = (W × 時間) / 1000
        $dailyKwh = ($w * $h) / 1000;
        $monthlyKwh = $dailyKwh * $d;

        $this->kwh = round($monthlyKwh, 2);
        $this->dailyCost = round($dailyKwh * $rate, 2);
        $this->monthlyCost = round($monthlyKwh * $rate, 2);
        $this->yearlyCost = round($this->monthlyCost * 12, 2);
    }

    public function resetResults()
    {
        $this->dailyCost = 0;
        $this->monthlyCost = 0;
        $this->yearlyCost = 0;
        $this->kwh = 0;
    }

    public function render()
    {
        return view('livewire.electricity-cost-calculator')
            ->layout('components.layouts.app', [
                'hideTopAd' => true,
            ]);
    }
}
