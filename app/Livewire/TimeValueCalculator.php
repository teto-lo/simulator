<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('時間価値計算ツール | 時給換算で判断')]
class TimeValueCalculator extends Component
{
    public $hourlyWage = '';
    public $taskTime = '';
    public $taskCost = '';

    // Results
    public $timeValue = 0;
    public $recommendation = '';
    public $savings = 0;

    public function mount()
    {
        $this->hourlyWage = 2000;
        $this->taskTime = 2;
        $this->taskCost = 3000;
        $this->calculate();
    }

    public function updated($propertyName)
    {
        $this->calculate();
    }

    public function calculate()
    {
        $wage = (float) $this->hourlyWage;
        $time = (float) $this->taskTime;
        $cost = (float) $this->taskCost;

        if ($wage <= 0 || $time <= 0) {
            $this->resetResults();
            return;
        }

        // 時間の価値 = 時給 × 作業時間
        $this->timeValue = $wage * $time;

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
            ]);
    }
}
