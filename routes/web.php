<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function (): void {
    Route::get('/', 'home')->name('home');
    Route::get('/how-it-works', 'howItWorks')->name('how-it-works');
    Route::get('/tutorial', 'tutorial')->name('tutorial');
    Route::get('/for-personal-trainers', 'forPersonalTrainers')->name('for-personal-trainers');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/about', 'about')->name('about');
    Route::get('/support', 'support')->name('support');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/404.html', 'notFound')->name('legacy-404');
});
