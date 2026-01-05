<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AdCostSimulator;

Route::get('/', AdCostSimulator::class)->name('ad-cost');
Route::view('/privacy', 'livewire.privacy')->name('privacy');
Route::view('/terms', 'livewire.terms')->name('terms');