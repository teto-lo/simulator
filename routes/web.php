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

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create(route('home'))
            ->setPriority(1.0)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setLastModificationDate(Carbon::now()))
        ->add(Url::create(route('contact'))
            ->setPriority(0.5)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('ad-cost'))
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setLastModificationDate(Carbon::now()))
        ->add(Url::create(route('roi-calculator'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('break-even'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('compound-interest'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('loan-repayment'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('retirement-planning'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('nisa-ideco'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('salary-calculator'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('bmi-calculator'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('bmr-calculator'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('calorie-burn'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('moving-cost'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('car-cost'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('invoice'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('aspect-ratio'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('px-rem'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('flea-market'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('electricity-cost'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('time-value'))
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(route('about'))
            ->setPriority(0.4)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY))
        ->add(Url::create(route('privacy'))
            ->setPriority(0.3)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY))
        ->add(Url::create(route('terms'))
            ->setPriority(0.3)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));

    return $sitemap->toResponse(request());
});