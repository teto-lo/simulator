<?php

namespace App\Livewire;

use Livewire\Component;

class AdCostSimulator extends Component
{
    public $adCost = 100000;      // 広告費
    public $cpc = 100;            // クリック単価
    public $cvr = 1;              // コンバージョン率(%)
    public $unitPrice = 10000;    // 成約単価

    public $clicks = 0;
    public $conversions = 0;
    public $revenue = 0;
    public $profit = 0;

    public function updated()
    {
        $this->calculate();
    }

    public function calculate()
    {
        if ($this->cpc <= 0 || $this->cvr < 0) {
            return;
        }

        $this->clicks = floor($this->adCost / $this->cpc);
        $this->conversions = round($this->clicks * ($this->cvr / 100), 2);
        $this->revenue = round($this->conversions * $this->unitPrice);
        $this->profit = $this->revenue - $this->adCost;
    }

    public function mount()
    {
        $this->calculate();
    }

    public function render()
    {
        return view('livewire.ad-cost-simulator')
            ->layout('layouts.app');
    }

}
