<?php

use App\Http\Controllers\PostJobLeadController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/industries', 'industries')->name('industries');
Route::view('/contact', 'contact')->name('contact');
Route::view('/browse-jobs', 'browse-jobs')->name('browse-jobs');
Route::view('/companies', 'companies')->name('companies');
Route::view('/career-advice', 'career-advice')->name('career-advice');
Route::view('/candidates', 'candidates')->name('candidates');
Route::post('/post-a-job', [PostJobLeadController::class, 'store'])->name('post-job.store');
Route::post('/apply-job', [PostJobLeadController::class, 'applyJob'])->name('apply-job.store');
Route::post('/contact-lead', [PostJobLeadController::class, 'contactLead'])->name('contact-lead.store');
