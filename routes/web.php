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

Route::get('/invoice', \App\Livewire\InvoiceCalculator::class)->name('invoice');

Route::get('/aspect-ratio', \App\Livewire\AspectRatioCalculator::class)->name('aspect-ratio');

Route::get('/px-rem', \App\Livewire\PxRemConverter::class)->name('px-rem');
Route::get('/flea-market', \App\Livewire\FleaMarketCalculator::class)->name('flea-market');
Route::get('/electricity-cost', \App\Livewire\ElectricityCostCalculator::class)->name('electricity-cost');
Route::get('/time-value', \App\Livewire\TimeValueCalculator::class)->name('time-value');

Route::get('/sitemap.xml', function () {
    $sitemap = Spatie\Sitemap\Sitemap::create()
        ->add(route('home'))
        ->add(route('contact'))
        ->add(route('ad-cost'))
        ->add(route('roi-calculator'))
        ->add(route('break-even'))
        ->add(route('compound-interest'))
        ->add(route('loan-repayment'))
        ->add(route('retirement-planning'))
        ->add(route('nisa-ideco'))
        ->add(route('salary-calculator'))
        ->add(route('bmi-calculator'))
        ->add(route('bmr-calculator'))
        ->add(route('calorie-burn'))
        ->add(route('moving-cost'))
        ->add(route('car-cost'))
        ->add(route('invoice'))
        ->add(route('aspect-ratio'))
        ->add(route('px-rem'))
        ->add(route('flea-market'))
        ->add(route('electricity-cost'))
        ->add(route('time-value'))
        ->add(route('about'))
        ->add(route('privacy'))
        ->add(route('terms'));

    return $sitemap->toResponse(request());
});