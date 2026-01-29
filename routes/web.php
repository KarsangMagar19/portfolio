<?php

use App\Http\Controllers\CvDownloadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResumeViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('/about', [PageController::class, 'aboutpage'])->name('about');
Route::get('/experience', [PageController::class, 'experiencepage'])->name('experience');
Route::get('/projects', [PageController::class, 'projectspage'])->name('projects');
Route::view('/skills', 'skills')->name('skills');
Route::view('/contact', 'contact')->name('contact');
Route::get('/messageme', fn() => redirect()->route('contact'));
Route::get('/cv', CvDownloadController::class)->name('cv.download');
Route::get('/admin/resumes/{resume}/view', ResumeViewController::class)->name('admin.resume.view');
Route::post('/messageme', [PageController::class, 'store'])->name('messageme.store');
