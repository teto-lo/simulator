<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\AdCostSimulator;
use App\Livewire\RoiCalculator;
use App\Livewire\BreakEvenCalculator;
use App\Livewire\CompoundInterestCalculator;
use App\Livewire\LoanRepaymentCalculator;
use App\Livewire\RetirementCalculator;
use App\Livewire\SalaryCalculator;
use App\Livewire\BmiCalculator;
use App\Livewire\BmrCalculator;
use App\Livewire\CalorieBurnCalculator;
use App\Livewire\MovingCostCalculator;
use App\Livewire\CarCostCalculator;
use App\Livewire\ContactForm;

// ホーム
Route::get('/', Home::class)->name('home');

Route::get('/contact', ContactForm::class)->name('contact');
// マーケティング
Route::get('/ad-cost', AdCostSimulator::class)->name('ad-cost');

// ビジネス分析
Route::get('/roi-calculator', RoiCalculator::class)->name('roi-calculator');
Route::get('/break-even', BreakEvenCalculator::class)->name('break-even');

// 金融・投資
Route::get('/compound-interest', CompoundInterestCalculator::class)->name('compound-interest');
Route::get('/loan-repayment', LoanRepaymentCalculator::class)->name('loan-repayment');
Route::get('/retirement-planning', RetirementCalculator::class)->name('retirement-planning');
Route::get('/nisa-ideco', \App\Livewire\NisaIdecoCalculator::class)->name('nisa-ideco');


// ===== home.blade.php の金融・投資セクションに追加 =====

// 給与・税金
Route::get('/salary-calculator', SalaryCalculator::class)->name('salary-calculator');

// 健康・フィットネス
Route::get('/bmi-calculator', BmiCalculator::class)->name('bmi-calculator');
Route::get('/bmr-calculator', BmrCalculator::class)->name('bmr-calculator');
Route::get('/calorie-burn', CalorieBurnCalculator::class)->name('calorie-burn');

// 生活・実用 (NEW)
Route::get('/moving-cost', MovingCostCalculator::class)->name('moving-cost');
Route::get('/car-cost', CarCostCalculator::class)->name('car-cost');

// 静的ページ
Route::view('/about', 'about')->name('about');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');