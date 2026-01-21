<?php

namespace App\Livewire;

use Livewire\Component;

class MovingCostCalculator extends Component
{
    public $distance = 50; // 移動距離(km)
    public $roomSize = '1K'; // 間取り
    public $floor = 1; // 階数
    public $hasElevator = true; // エレベーター有無
    public $season = 'normal'; // 繁忙期/通常期
    public $additionalServices = []; // 追加サービス

    // 間取り別の基本料金
    private $baseRates = [
        '1K' => ['name' => '1K・1R', 'rate' => 30000, 'volume' => 2],
        '1DK' => ['name' => '1DK・1LDK', 'rate' => 40000, 'volume' => 3],
        '2DK' => ['name' => '2DK・2LDK', 'rate' => 60000, 'volume' => 5],
        '3DK' => ['name' => '3DK・3LDK', 'rate' => 80000, 'volume' => 7],
        '4DK' => ['name' => '4DK以上', 'rate' => 100000, 'volume' => 10],
    ];

    // 追加サービスの料金
    private $serviceRates = [
        'packing' => ['name' => '荷造り・荷解き', 'rate' => 20000],
        'furniture' => ['name' => '家具の組立・設置', 'rate' => 15000],
        'cleaning' => ['name' => '清掃サービス', 'rate' => 30000],
        'disposal' => ['name' => '不用品処分', 'rate' => 25000],
        'aircon' => ['name' => 'エアコン移設', 'rate' => 15000],
    ];

    // 計算結果
    public $baseCost = 0;
    public $distanceCost = 0;
    public $seasonalSurcharge = 0;
    public $floorSurcharge = 0;
    public $servicesCost = 0;
    public $totalCost = 0;
    public $estimatedTime = 0;

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
        $roomData = $this->baseRates[$this->roomSize];
        
        // 基本料金
        $this->baseCost = $roomData['rate'];

        // 距離料金（50km以上は追加料金）
        $distance = max(0, (float) $this->distance);
        if ($distance > 50) {
            $this->distanceCost = ($distance - 50) * 200; // 1kmあたり200円
        } else {
            $this->distanceCost = 0;
        }

        // 繁忙期割増（3-4月は20%増）
        if ($this->season === 'busy') {
            $this->seasonalSurcharge = ($this->baseCost + $this->distanceCost) * 0.2;
        } else {
            $this->seasonalSurcharge = 0;
        }

        // 階数割増（2階以上でエレベーターなしの場合）
        $floor = max(1, (int) $this->floor);
        if ($floor > 1 && !$this->hasElevator) {
            $this->floorSurcharge = ($floor - 1) * 5000;
        } else {
            $this->floorSurcharge = 0;
        }

        // 追加サービス料金
        $this->servicesCost = 0;
        if (is_array($this->additionalServices)) {
            foreach ($this->additionalServices as $service) {
                if (isset($this->serviceRates[$service])) {
                    $this->servicesCost += $this->serviceRates[$service]['rate'];
                }
            }
        }

        // 総額
        $this->totalCost = $this->baseCost + $this->distanceCost + 
                           $this->seasonalSurcharge + $this->floorSurcharge + 
                           $this->servicesCost;

        // 作業時間の目安（荷物量と距離から算出）
        $volume = $roomData['volume'];
        $loadingTime = $volume * 30; // 1㎥あたり30分
        $travelTime = ($distance / 40) * 60; // 平均時速40km
        $this->estimatedTime = ($loadingTime * 2) + $travelTime; // 積み込み+移動+荷降ろし
    }

    public function getBaseRates()
    {
        return $this->baseRates;
    }

    public function getServiceRates()
    {
        return $this->serviceRates;
    }

    public function render()
    {
        return view('livewire.moving-cost-calculator', [
            'baseRates' => $this->baseRates,
            'serviceRates' => $this->serviceRates,
        ])->layout('components.layouts.app', [
            'title' => '引越し費用計算【無料】| 相場・見積もりシミュレーター',
            'description' => '距離・間取り・時期から引越し費用の概算を即計算。繁忙期割増、階数、追加サービスも考慮した正確な見積もり。',
            'keywords' => '引越し費用,引越し相場,引越し見積もり,引越し料金,単身引越し,家族引越し,無料ツール',
        ]);
    }
}