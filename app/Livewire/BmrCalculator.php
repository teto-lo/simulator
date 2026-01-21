<?php

namespace App\Livewire;

use Livewire\Component;

class BmrCalculator extends Component
{
    public $height = 170; // 身長(cm)
    public $weight = 65; // 体重(kg)
    public $age = 30;
    public $gender = 'male';
    public $activityLevel = 'moderate'; // 活動レベル

    // 計算結果
    public $bmr = 0; // 基礎代謝
    public $tdee = 0; // 1日の消費カロリー
    public $targetCalories = []; // 目的別推奨カロリー

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
        $weight = max(0.01, (float) $this->weight);
        $height = max(0.01, (float) $this->height);
        $age = max(1, (int) $this->age);

        // Harris-Benedict式で基礎代謝を計算
        if ($this->gender === 'male') {
            $this->bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
        } else {
            $this->bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
        }

        // 活動レベル係数
        $activityMultiplier = $this->getActivityMultiplier();
        $this->tdee = $this->bmr * $activityMultiplier;

        // 目的別カロリー
        $this->targetCalories = [
            'extreme_loss' => $this->tdee - 1000,
            'loss' => $this->tdee - 500,
            'mild_loss' => $this->tdee - 250,
            'maintain' => $this->tdee,
            'mild_gain' => $this->tdee + 250,
            'gain' => $this->tdee + 500,
        ];
    }

    private function getActivityMultiplier()
    {
        return match ($this->activityLevel) {
            'sedentary' => 1.2,
            'light' => 1.375,
            'moderate' => 1.55,
            'active' => 1.725,
            'very_active' => 1.9,
            default => 1.55,
        };
    }

    public function render()
    {
        return view('livewire.bmr-calculator')
            ->layout('components.layouts.app', [
                'title' => '基礎代謝・消費カロリー計算【無料】| ダイエットに最適',
                'description' => '年齢・性別・体重から基礎代謝量を算出。活動レベル別の1日消費カロリーも計算できる無料ツール。',
                'keywords' => '基礎代謝計算,消費カロリー,TDEE,ダイエット,カロリー計算,減量,増量,無料ツール',
            ]);
    }
}