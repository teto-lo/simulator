<?php

namespace App\Livewire;

use Livewire\Component;

class CarCostCalculator extends Component
{
    // 車両情報
    public $carType = 'compact'; // 車種
    public $purchasePrice = 2000000; // 購入価格
    public $loanYears = 5; // ローン年数
    public $interestRate = 3.0; // 金利(%)
    public $monthlyDistance = 1000; // 月間走行距離(km)
    public $ownershipYears = 7; // 保有年数

    // 車種別データ
    private $carTypes = [
        'compact' => ['name' => '軽自動車', 'tax' => 10800, 'insurance' => 50000, 'fuel' => 25, 'parking' => 8000],
        'sedan' => ['name' => '普通車(セダン)', 'tax' => 34500, 'insurance' => 80000, 'fuel' => 15, 'parking' => 15000],
        'suv' => ['name' => 'SUV', 'tax' => 45000, 'insurance' => 100000, 'fuel' => 12, 'parking' => 15000],
        'minivan' => ['name' => 'ミニバン', 'tax' => 39500, 'insurance' => 90000, 'fuel' => 13, 'parking' => 15000],
    ];

    // 計算結果
    public $monthlyLoanPayment = 0;
    public $totalLoanPayment = 0;
    public $annualTax = 0;
    public $annualInsurance = 0;
    public $annualFuel = 0;
    public $annualParking = 0;
    public $annualMaintenance = 0;
    public $annualInspection = 0;
    public $totalAnnualCost = 0;
    public $totalOwnershipCost = 0;
    public $monthlyCost = 0;

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
        $carData = $this->carTypes[$this->carType];
        $price = max(0, (float) $this->purchasePrice);
        $years = max(1, (int) $this->loanYears);
        $rate = max(0, (float) $this->interestRate) / 100 / 12;
        $months = $years * 12;

        // ローン月額支払い（元利均等）
        if ($rate > 0) {
            $this->monthlyLoanPayment = $price * $rate * pow(1 + $rate, $months) / (pow(1 + $rate, $months) - 1);
        } else {
            $this->monthlyLoanPayment = $price / $months;
        }
        $this->totalLoanPayment = $this->monthlyLoanPayment * $months;

        // 年間維持費
        $this->annualTax = $carData['tax']; // 自動車税
        $this->annualInsurance = $carData['insurance']; // 任意保険
        
        // 燃料費（月間走行距離 × 12 ÷ 燃費 × ガソリン単価）
        $monthlyDistance = max(0, (float) $this->monthlyDistance);
        $fuelEfficiency = $carData['fuel'];
        $gasPrice = 170; // ガソリン単価（円/L）
        $this->annualFuel = ($monthlyDistance * 12 / $fuelEfficiency) * $gasPrice;

        // 駐車場代
        $this->annualParking = $carData['parking'] * 12;

        // メンテナンス費（オイル交換、タイヤ交換など）
        $this->annualMaintenance = 50000;

        // 車検費用（2年に1回）
        $this->annualInspection = 100000 / 2;

        // 年間総維持費
        $this->totalAnnualCost = $this->annualTax + $this->annualInsurance + 
                                 $this->annualFuel + $this->annualParking + 
                                 $this->annualMaintenance + $this->annualInspection;

        // 保有期間中の総コスト
        $ownershipYears = max(1, (int) $this->ownershipYears);
        
        // ローン期間中はローン支払い、以降は維持費のみ
        if ($ownershipYears <= $years) {
            $this->totalOwnershipCost = ($this->monthlyLoanPayment * 12 * $ownershipYears) + 
                                       ($this->totalAnnualCost * $ownershipYears);
        } else {
            $this->totalOwnershipCost = $this->totalLoanPayment + 
                                       ($this->totalAnnualCost * $ownershipYears);
        }

        // 月額換算
        $this->monthlyCost = $this->totalOwnershipCost / ($ownershipYears * 12);
    }

    public function getCarTypes()
    {
        return $this->carTypes;
    }

    public function render()
    {
        return view('livewire.car-cost-calculator', [
            'carTypes' => $this->carTypes,
        ])->layout('components.layouts.app', [
            'title' => '車購入・維持費計算【無料】| 総コストシミュレーター',
            'description' => '車の購入から維持までの総コストを計算。ローン、税金、保険、燃料代、駐車場代を含めた実際の費用を把握。',
            'keywords' => '車維持費,車購入費用,自動車税,車検費用,ガソリン代,駐車場代,カーローン,無料ツール',
        ]);
    }
}