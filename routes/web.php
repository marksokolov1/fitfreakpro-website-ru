<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/how-it-works', 'pages.how-it-works')->name('how-it-works');
Route::view('/for-personal-trainers', 'pages.for-personal-trainers')->name('for-personal-trainers');
Route::view('/pricing', 'pages.pricing')->name('pricing');
Route::view('/tutorial', 'pages.tutorial')->name('tutorial');
Route::view('/about', 'pages.about')->name('about');
Route::view('/support', 'pages.support')->name('support');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');

Route::fallback(fn () => response()->view('errors.404', status: 404));
