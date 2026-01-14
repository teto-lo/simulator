<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AdCostSimulator;
use App\Livewire\Home;

// シミュレーター
Route::get('/', Home::class)->name('home');
Route::get('/ad-cost', AdCostSimulator::class)->name('ad-cost');

// 静的ページ (Bladeビューを直接使用)
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');

// 今後追加するシミュレーター例
// Route::get('/roi-calculator', RoiCalculator::class)->name('roi-calculator');
// Route::get('/ctr-calculator', CtrCalculator::class)->name('ctr-calculator');
// Route::get('/roas-calculator', RoasCalculator::class)->name('roas-calculator');