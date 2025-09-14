<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('visa', [SiteController::class, 'visa'])->name('visa');
Route::get('business-visa', [SiteController::class, 'businessVisa'])->name('business-visa');
Route::get('student-visa', [SiteController::class, 'studentVisa'])->name('student-visa');
Route::get('jobseeker-visa', [SiteController::class, 'jobseekerVisa'])->name('jobseeker-visa');
Route::get('tourist-visa', [SiteController::class, 'touristVisa'])->name('tourist-visa');
Route::get('family-visa', [SiteController::class, 'familyVisa'])->name('family-visa');
Route::get('transit-visa', [SiteController::class, 'transitVisa'])->name('transit-visa');
Route::get('migrate-visa', [SiteController::class, 'migrateVisa'])->name('migrate-visa');
Route::get('consular-closings', [SiteController::class, 'consularClosings'])->name('consular-closings');
Route::get('diplomatic-visa', [SiteController::class, 'diplomaticVisa'])->name('diplomatic-visa');
Route::get('country', [SiteController::class, 'country'])->name('country');
Route::get('australia', [SiteController::class, 'australia'])->name('australia');
Route::get('united-states', [SiteController::class, 'unitedStates'])->name('united-states');
Route::get('united-kingdom', [SiteController::class, 'unitedKingdom'])->name('united-kingdom');
Route::get('canada', [SiteController::class, 'canada'])->name('canada');
Route::get('singapore', [SiteController::class, 'singapore'])->name('singapore');
Route::get('new-zealand', [SiteController::class, 'newZealand'])->name('new-zealand');
Route::get('services', [SiteController::class, 'services'])->name('services');
Route::get('faq', [SiteController::class, 'faq'])->name('faq');
Route::get('login', [SiteController::class, 'login'])->name('login');
Route::get('register', [SiteController::class, 'register'])->name('register');
Route::get('forgot-password', [SiteController::class, 'forgotPassword'])->name('forgot-password');
Route::get('404', [SiteController::class, '404'])->name('404');
Route::get('terms', [SiteController::class, 'terms'])->name('terms');
Route::get('privacy', [SiteController::class, 'privacyPolicy'])->name('privacy');
Route::get('about', [SiteController::class, 'about'])->name('about');
Route::get('contact', [SiteController::class, 'contact'])->name('contact');
Route::get('search-popup', [SiteController::class, 'searchPopup'])->name('search-popup');
