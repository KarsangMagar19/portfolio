<?php

use App\Http\Controllers\CvDownloadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;

    

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/experience', 'experience')->name('experience');
Route::view('/projects', 'projects')->name('projects');
Route::view('/skills', 'skills')->name('skills');
Route::view('/contact', 'contact')->name('contact');
Route::get('/cv', CvDownloadController::class)->name('cv.download');
