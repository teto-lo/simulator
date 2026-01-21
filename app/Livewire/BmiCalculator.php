<?php

namespace App\Livewire;

use Livewire\Component;

class BmiCalculator extends Component
{
    public $height = 170; // 身長(cm)
    public $weight = 65; // 体重(kg)
    public $age = 30;
    public $gender = 'male';

    // 計算結果
    public $bmi = 0;
    public $standardWeight = 0;
    public $category = '';
    public $categoryColor = '';
    public $advice = '';

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
        $heightM = max(0.01, (float) $this->height) / 100;
        $weight = max(0.01, (float) $this->weight);

        // BMI計算
        $this->bmi = $weight / ($heightM * $heightM);

        // 標準体重(BMI=22)
        $this->standardWeight = 22 * ($heightM * $heightM);

        // カテゴリー判定
        $this->categorize();
    }

    private function categorize()
    {
        $bmi = $this->bmi;

        if ($bmi < 18.5) {
            $this->category = '低体重(痩せ型)';
            $this->categoryColor = 'blue';
            $this->advice = '栄養バランスの良い食事を心がけ、適度な運動で健康的に体重を増やしましょう。';
        } elseif ($bmi < 25) {
            $this->category = '普通体重';
            $this->categoryColor = 'green';
            $this->advice = '理想的な体重です。このまま健康的な生活習慣を維持しましょう。';
        } elseif ($bmi < 30) {
            $this->category = '肥満(1度)';
            $this->categoryColor = 'yellow';
            $this->advice = '食事の見直しと運動習慣を取り入れることをおすすめします。';
        } elseif ($bmi < 35) {
            $this->category = '肥満(2度)';
            $this->categoryColor = 'orange';
            $this->advice = '健康リスクが高まります。医師に相談し、計画的な減量を検討しましょう。';
        } else {
            $this->category = '肥満(3度)';
            $this->categoryColor = 'red';
            $this->advice = '医師の指導のもと、早急な対策が必要です。';
        }
    }

    public function render()
    {
        return view('livewire.bmi-calculator')
            ->layout('components.layouts.app', [
                'title' => 'BMI・適正体重計算【無料】| 健康管理に最適',
                'description' => '身長と体重を入力するだけでBMI値と適正体重を瞬時に計算。肥満度判定とアドバイス付きの無料ツール。',
                'keywords' => 'BMI計算,適正体重,肥満度判定,健康管理,ダイエット,体重管理,無料ツール',
            ]);
    }
}