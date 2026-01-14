<?php

namespace App\Livewire;

use Livewire\Component;

class AdCostSimulator extends Component
{
    // 予算から獲得数を計算モード
    public $budget = 100000;
    public $cpc = 100;
    public $cvr = 2.5;
    public $unitPrice = 10000;

    // 目標CV数から予算を計算モード
    public $targetConversions = 30;
    public $reverseCvr = 2.5;
    public $reverseCpc = 100;
    public $reverseUnitPrice = 10000;

    // モード切替
    public $mode = 'plan'; // 'plan' or 'reverse'

    // 計算結果 (予算から獲得数)
    public $clicks = 0;
    public $conversions = 0;
    public $revenue = 0;
    public $profit = 0;

    // 計算結果 (目標から予算)
    public $requiredBudget = 0;
    public $requiredClicks = 0;
    public $expectedRevenue = 0;

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
        if ($this->mode === 'plan') {
            $this->calculatePlan();
        } else {
            $this->calculateReverse();
        }
    }

    private function calculatePlan()
    {
        $budget = max(0, (float) $this->budget);
        $cpc = max(0.01, (float) $this->cpc);
        $cvr = max(0, (float) $this->cvr);
        $unitPrice = max(0, (float) $this->unitPrice);

        $this->clicks = $cpc > 0 ? $budget / $cpc : 0;
        $this->conversions = $this->clicks * ($cvr / 100);
        $this->revenue = $this->conversions * $unitPrice;
        $this->profit = $this->revenue - $budget;
    }

    private function calculateReverse()
    {
        $targetCv = max(0, (float) $this->targetConversions);
        $cvr = max(0.01, (float) $this->reverseCvr);
        $cpc = max(0.01, (float) $this->reverseCpc);
        $unitPrice = max(0, (float) $this->reverseUnitPrice);

        $this->requiredClicks = $cvr > 0 ? $targetCv / ($cvr / 100) : 0;
        $this->requiredBudget = $this->requiredClicks * $cpc;
        $this->expectedRevenue = $targetCv * $unitPrice;
    }

    public function render()
    {
        return view('livewire.ad-cost-simulator')
            ->layout('components.layouts.app', [
                'title' => '広告予算シミュレーター【無料】| 予算から獲得数を即計算',
                'description' => '広告予算・CPC・CVRを入力するだけで、月間で何件獲得できるかを瞬時に計算。Google広告、SNS広告の予算策定に最適な無料ツール。目標CV数からの逆算機能付き。',
                'keywords' => '広告予算シミュレーター,広告予算計算,CPC計算,CVR計算,獲得数予測,予算策定,Google広告,Facebook広告,Instagram広告,無料ツール',
                'structuredData' => $this->getStructuredData(),
            ]);
    }

    private function getStructuredData()
    {
        return '<script type="application/ld+json">' . json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebApplication',
            'name' => '広告予算シミュレーター',
            'description' => '広告予算から獲得数を計算する無料ツール',
            'url' => url()->current(),
            'applicationCategory' => 'BusinessApplication',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'JPY',
            ],
            'featureList' => [
                '広告予算計算',
                '獲得数予測',
                'CPC計算',
                'CVR計算',
                '予算逆算機能',
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    }
}
