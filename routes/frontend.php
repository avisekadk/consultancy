<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/about',[FrontendController::class,'about'])->name('about');

Route::get('/courses', [FrontendController::class, 'courses'])->name('courses');
Route::get('/courses/{slug}', [FrontendController::class, 'courseDetail'])->name('course.detail');


Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/services/{slug}', [FrontendController::class, 'serviceDetail'])->name('service.detail');


Route::get('/countries', [FrontendController::class, 'countries'])->name('countries');
Route::get('/countries/{slug}', [FrontendController::class, 'countryDetail'])->name('country.detail');


Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [FrontendController::class, 'blogDetail'])->name('blog.detail');


Route::get('/branches', [FrontendController::class, 'branches'])->name('branches');


Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'contactStore'])->name('contact.store');


Route::get('/page/{slug}', [FrontendController::class, 'page'])->name('page');