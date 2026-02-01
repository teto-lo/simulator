<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('時間価値計算ツール | 時給換算で判断')]
class TimeValueCalculator extends Component
{
    public $monthlyIncome = 25; // 手取り月収(万円)
    public $taskTime = 2; // 時間
    public $taskCost = 5000; // 費用

    // Results
    public $hourlyWage = 0; // 時給換算
    public $timeValue = 0;
    public $recommendation = '';
    public $savings = 0;

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
        $income = (float) $this->monthlyIncome;
        $time = (float) $this->taskTime;
        $cost = (float) $this->taskCost;

        if ($income <= 0) {
            $this->resetResults();
            return;
        }

        // 月160時間稼働として時給換算 (月収万円 * 10000 / 160)
        // 160 = 20日 * 8時間
        $this->hourlyWage = ($income * 10000) / 160;

        if ($this->hourlyWage <= 0 || $time <= 0) {
            $this->resetResults();
            return;
        }

        // 時間の価値 = 時給 × 作業時間
        $this->timeValue = $this->hourlyWage * $time;

        // 判定
        if ($cost < $this->timeValue) {
            $this->recommendation = 'buy';
            $this->savings = $this->timeValue - $cost;
        } else {
            $this->recommendation = 'diy';
            $this->savings = $cost - $this->timeValue;
        }
    }

    public function resetResults()
    {
        $this->timeValue = 0;
        $this->recommendation = '';
        $this->savings = 0;
    }

    public function render()
    {
        return view('livewire.time-value-calculator')
            ->layout('components.layouts.app', [
                'hideTopAd' => true,
                'hideBreadcrumbs' => true,
            ]);
    }
}
