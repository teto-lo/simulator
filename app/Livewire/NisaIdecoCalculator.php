<?php

namespace App\Livewire;

use Livewire\Component;

class NisaIdecoCalculator extends Component
{
    // 基本情報
    public $age = 30;
    public $currentSavings = 0;
    public $monthlyInvestment = 50000;
    public $investmentYears = 30;
    public $expectedReturn = 5.0; // 年利(%)
    
    // NISA設定
    public $useNisa = true;
    public $nisaMonthly = 100000; // 新NISAは月10万円まで(年120万)
    
    // iDeCo設定
    public $useIdeco = true;
    public $employeeType = 'company'; // company, public, self
    public $idecoMonthly = 23000;
    
    // 税金設定
    public $annualIncome = 5000000; // 年収
    public $incomeTaxRate = 20; // 所得税率(%)
    public $residentTaxRate = 10; // 住民税率(%)
    
    // iDeCo上限額マスタ
    private $idecoLimits = [
        'company' => ['name' => '会社員(企業年金なし)', 'limit' => 23000],
        'company_pension' => ['name' => '会社員(企業年金あり)', 'limit' => 12000],
        'public' => ['name' => '公務員', 'limit' => 12000],
        'self' => ['name' => '自営業・フリーランス', 'limit' => 68000],
        'housewife' => ['name' => '専業主婦(夫)', 'limit' => 23000],
    ];
    
    // 計算結果
    public $totalInvestment = 0;
    public $totalReturn = 0;
    public $finalAmount = 0;
    public $nisaTaxSavings = 0;
    public $idecoTaxSavings = 0;
    public $totalTaxSavings = 0;
    public $comparisonNoTax = 0;
    public $retirementAge = 60;
    
    // NISA結果
    public $nisaFinalAmount = 0;
    public $nisaTotalInvestment = 0;
    
    // iDeCo結果
    public $idecoFinalAmount = 0;
    public $idecoTotalInvestment = 0;
    public $idecoAnnualTaxSavings = 0;

    public function mount()
    {
        $this->calculate();
    }

    public function updated($propertyName)
    {
        // iDeCo上限チェック
        if ($propertyName === 'employeeType') {
            $limit = $this->idecoLimits[$this->employeeType]['limit'];
            if ($this->idecoMonthly > $limit) {
                $this->idecoMonthly = $limit;
            }
        }
        
        if ($propertyName === 'idecoMonthly') {
            $limit = $this->idecoLimits[$this->employeeType]['limit'];
            if ($this->idecoMonthly > $limit) {
                $this->idecoMonthly = $limit;
            }
        }
        
        // NISA上限チェック
        if ($propertyName === 'nisaMonthly' && $this->nisaMonthly > 100000) {
            $this->nisaMonthly = 100000;
        }
        
        $this->calculate();
    }

    public function calculate()
    {
        $age = max(20, min(65, (int) $this->age));
        $years = max(1, min(45, (int) $this->investmentYears));
        $rate = max(0, min(20, (float) $this->expectedReturn)) / 100;
        
        $this->retirementAge = $age + $years;
        
        // NISA計算
        if ($this->useNisa) {
            $nisaMonthly = min(100000, max(0, (float) $this->nisaMonthly));
            $this->nisaTotalInvestment = $nisaMonthly * 12 * $years;
            $this->nisaFinalAmount = $this->calculateCompoundInterest(
                $nisaMonthly, 
                $rate, 
                $years
            );
        } else {
            $this->nisaTotalInvestment = 0;
            $this->nisaFinalAmount = 0;
        }
        
        // iDeCo計算
        if ($this->useIdeco) {
            $idecoLimit = $this->idecoLimits[$this->employeeType]['limit'];
            $idecoMonthly = min($idecoLimit, max(0, (float) $this->idecoMonthly));
            $this->idecoTotalInvestment = $idecoMonthly * 12 * $years;
            $this->idecoFinalAmount = $this->calculateCompoundInterest(
                $idecoMonthly,
                $rate,
                $years
            );
            
            // iDeCo税制優遇計算（掛金全額所得控除）
            $incomeTaxRate = max(0, min(45, (float) $this->incomeTaxRate)) / 100;
            $residentTaxRate = max(0, min(10, (float) $this->residentTaxRate)) / 100;
            
            $this->idecoAnnualTaxSavings = $idecoMonthly * 12 * ($incomeTaxRate + $residentTaxRate);
            $this->idecoTaxSavings = $this->idecoAnnualTaxSavings * $years;
        } else {
            $this->idecoTotalInvestment = 0;
            $this->idecoFinalAmount = 0;
            $this->idecoAnnualTaxSavings = 0;
            $this->idecoTaxSavings = 0;
        }
        
        // NISA税制優遇計算（運用益非課税 20.315%）
        $nisaProfit = $this->nisaFinalAmount - $this->nisaTotalInvestment;
        $this->nisaTaxSavings = $nisaProfit * 0.20315;
        
        // 合計
        $this->totalInvestment = $this->nisaTotalInvestment + $this->idecoTotalInvestment;
        $this->finalAmount = $this->nisaFinalAmount + $this->idecoFinalAmount;
        $this->totalReturn = $this->finalAmount - $this->totalInvestment;
        $this->totalTaxSavings = $this->nisaTaxSavings + $this->idecoTaxSavings;
        
        // 課税口座との比較
        $regularProfit = $this->totalReturn;
        $regularTax = $regularProfit * 0.20315;
        $this->comparisonNoTax = $this->finalAmount - ($this->totalInvestment + $regularProfit - $regularTax);
    }
    
    private function calculateCompoundInterest($monthlyAmount, $annualRate, $years)
    {
        if ($annualRate <= 0) {
            return $monthlyAmount * 12 * $years;
        }
        
        $monthlyRate = $annualRate / 12;
        $months = $years * 12;
        
        // 積立複利計算式: P × ((1 + r)^n - 1) / r
        $futureValue = $monthlyAmount * ((pow(1 + $monthlyRate, $months) - 1) / $monthlyRate);
        
        return round($futureValue);
    }
    
    public function getIdecoLimits()
    {
        return $this->idecoLimits;
    }

    public function render()
    {
        return view('livewire.nisa-ideco-calculator', [
            'idecoLimits' => $this->idecoLimits,
        ])->layout('components.layouts.app', [
            'title' => 'NISA・iDeCo最適化ツール【無料】| 節税効果を瞬時に計算',
            'description' => '新NISA・iDeCoの運用シミュレーション。投資額、期間、期待リターンから将来資産と節税効果を計算。老後資金計画に最適な無料ツール。',
            'keywords' => 'NISA,iDeCo,新NISA,積立NISA,確定拠出年金,節税,投資シミュレーション,老後資金,資産運用,無料ツール',
            'structuredData' => $this->getStructuredData(),
            'hideBreadcrumbs' => true,
            'hideTopAd' => true,
        ]);
    }
    
    private function getStructuredData()
    {
        return '<script type="application/ld+json">' . json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebApplication',
            'name' => 'NISA・iDeCo最適化ツール',
            'description' => '新NISA・iDeCoの運用シミュレーションと節税効果計算',
            'url' => url()->current(),
            'applicationCategory' => 'FinanceApplication',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'JPY',
            ],
            'featureList' => [
                '新NISA対応',
                'iDeCo最適化',
                '節税効果計算',
                '複利シミュレーション',
                '老後資金計画',
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    }
}