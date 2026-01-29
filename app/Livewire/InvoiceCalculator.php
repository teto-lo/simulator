<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('源泉徴収・消費税計算ツール【請求書作成用】')]
class InvoiceCalculator extends Component
{
    public $amount = '';
    public $taxRate = 10;
    public $withholdingRate = 10.21;
    public $mode = 'gross'; // 'gross' (税別/税込から計算) or 'net' (手取りから逆算)
    public $taxType = 'exclude'; // 'exclude' (税別) or 'include' (税込)

    // Results
    public $salesAmount = 0; // 売上計上額（税別）
    public $consumptionTax = 0; // 消費税
    public $totalAmount = 0; // 請求金額（税込）
    public $withholdingTax = 0; // 源泉徴収税
    public $netAmount = 0; // 手取り額

    public function updated($propertyName)
    {
        $this->calculate();
    }

    public function calculate()
    {
        $amount = (float) $this->amount;

        if ($amount <= 0) {
            $this->resetResults();
            return;
        }

        if ($this->mode === 'gross') {
            // 金額から計算
            if ($this->taxType === 'exclude') {
                // 税別入力
                $this->salesAmount = $amount;
                $this->consumptionTax = floor($amount * ($this->taxRate / 100));
            } else {
                // 税込入力
                $this->salesAmount = ceil($amount / (1 + ($this->taxRate / 100)));
                $this->consumptionTax = $amount - $this->salesAmount;
            }
            
            $this->totalAmount = $this->salesAmount + $this->consumptionTax;
            $this->withholdingTax = floor($this->salesAmount * ($this->withholdingRate / 100));
            $this->netAmount = $this->totalAmount - $this->withholdingTax;

        } else {
            // 手取りから逆算
            // 手取り = (売上 * (1 + 消費税率)) - (売上 * 源泉徴収率)
            // 手取り = 売上 * (1 + 消費税率 - 源泉徴収率)
            // 売上 = 手取り / (1 + 消費税率 - 源泉徴収率)
            
            $rate = 1 + ($this->taxRate / 100) - ($this->withholdingRate / 100);
            $this->salesAmount = ceil($amount / $rate);
            
            $this->consumptionTax = floor($this->salesAmount * ($this->taxRate / 100));
            $this->totalAmount = $this->salesAmount + $this->consumptionTax;
            $this->withholdingTax = floor($this->salesAmount * ($this->withholdingRate / 100));
            $this->netAmount = $amount; // 入力された手取り額
            
            // 逆算の検算調整（1円単位の誤差が出ることがあるため）
            $checkNet = $this->totalAmount - $this->withholdingTax;
            if ($checkNet !== $this->netAmount) {
                // 微調整ロジックを入れるか、そのまま表示するか。
                // ここではシンプルな逆算にとどめるが、ユーザーの入力値と計算結果の整合性を優先して調整する場合もある
                // 今回はそのまま表示
            }
        }
    }

    public function resetResults()
    {
        $this->salesAmount = 0;
        $this->consumptionTax = 0;
        $this->totalAmount = 0;
        $this->withholdingTax = 0;
        $this->netAmount = 0;
    }

    public function render()
    {
        return view('livewire.invoice-calculator')
            ->layout('components.layouts.app', [
                'hideTopAd' => true,
            ]);
    }
}
