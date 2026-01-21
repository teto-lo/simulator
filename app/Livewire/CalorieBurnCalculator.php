<?php

namespace App\Livewire;

use Livewire\Component;

class CalorieBurnCalculator extends Component
{
    public $weight = 65; // 体重(kg)
    public $exercise = 'running'; // 運動の種類
    public $duration = 30; // 運動時間(分)

    // 運動別MET値
    private $metValues = [
        'walking' => ['name' => 'ウォーキング（普通）', 'met' => 3.5],
        'walking_fast' => ['name' => 'ウォーキング（速歩）', 'met' => 5.0],
        'running' => ['name' => 'ランニング（8km/h）', 'met' => 8.0],
        'running_fast' => ['name' => 'ランニング（10km/h）', 'met' => 10.0],
        'cycling' => ['name' => 'サイクリング（普通）', 'met' => 6.8],
        'cycling_fast' => ['name' => 'サイクリング（速い）', 'met' => 10.0],
        'swimming' => ['name' => '水泳（クロール）', 'met' => 8.0],
        'swimming_breast' => ['name' => '水泳（平泳ぎ）', 'met' => 10.0],
        'yoga' => ['name' => 'ヨガ', 'met' => 2.5],
        'weight_training' => ['name' => '筋トレ（中程度）', 'met' => 5.0],
        'hiit' => ['name' => 'HIIT', 'met' => 12.0],
        'jump_rope' => ['name' => '縄跳び', 'met' => 11.0],
        'tennis' => ['name' => 'テニス', 'met' => 7.3],
        'basketball' => ['name' => 'バスケットボール', 'met' => 6.5],
        'soccer' => ['name' => 'サッカー', 'met' => 7.0],
    ];

    // 計算結果
    public $caloriesBurned = 0;
    public $fatBurned = 0;
    public $dailyWalkEquivalent = 0;

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
        $weight = max(0.1, (float) $this->weight);
        $duration = max(0, (int) $this->duration);
        $met = $this->metValues[$this->exercise]['met'];

        // 消費カロリー = MET × 体重(kg) × 時間(h) × 1.05
        $hours = $duration / 60;
        $this->caloriesBurned = $met * $weight * $hours * 1.05;

        // 脂肪燃焼量（脂肪1g = 7.2kcal）
        $this->fatBurned = $this->caloriesBurned / 7.2;

        // 普通歩行での換算（MET3.5）
        $walkingMet = 3.5;
        $this->dailyWalkEquivalent = ($this->caloriesBurned / (1.05 * $walkingMet * $weight)) * 60;
    }

    public function getMetValues()
    {
        return $this->metValues;
    }

    public function render()
    {
        return view('livewire.calorie-burn-calculator', [
            'metValues' => $this->metValues,
        ])->layout('components.layouts.app', [
                    'title' => '運動消費カロリー計算【無料】| エクササイズ効果測定',
                    'description' => '運動の種類と時間から消費カロリーを計算。ダイエット、トレーニングの効果測定に最適な無料ツール。',
                    'keywords' => '消費カロリー,運動,ダイエット,カロリー計算,MET,脂肪燃焼,無料ツール',
                ]);
    }
}