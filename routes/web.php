<?php

use App\Http\Controllers\Administrator\AdminController;
use App\Http\Controllers\Administrator\CommentController;
use App\Http\Controllers\Administrator\ContactController;
use App\Http\Controllers\Administrator\LinkController;
use App\Http\Controllers\Administrator\NewsController;
use App\Http\Controllers\Administrator\ParallaxController;
use App\Http\Controllers\Administrator\SeoController;
use App\Http\Controllers\Administrator\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/* ======================= Start route auth ui package ======================= */
Auth::routes(['register' => false, 'verify' => false, 'confirm' => false, 'reset' => false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
/* ======================= End route auth ui package ======================= */
/* ======================= Start route website ======================= */
Route::get('/', [IndexController::class, 'index'])->name('home-page');
Route::get('/showAllNews', [IndexController::class, 'showAllNews'])->name('showAllNews');
Route::get('/showNews/{id}', [IndexController::class, 'showNews'])->name('showNews');
Route::post('/comment', [IndexController::class, 'comment'])->name('comment');
Route::get('/search', [IndexController::class, 'search'])->name('search');
/* ======================= End route website ======================= */
/* ======================= Start route backend ======================= */
Route::middleware('auth')->prefix('administrator/panel')
    ->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::resource('/seo', SeoController::class)->parameters(['seo' => 'id']);
        Route::resource('/parallax', ParallaxController::class)->parameters(['parallax' => 'id']);
        Route::resource('/link', LinkController::class)->parameters(['link' => 'id']);
        Route::resource('/news', NewsController::class)->parameters(['news' => 'id']);
        Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
        Route::put('/comment/{id}', [CommentController::class, 'update'])->name('comment.update');
        Route::delete('/comment/{id}', [CommentController::class, 'delete'])->name('comment.delete');
        Route::delete('/comment/soft/{id}', [CommentController::class, 'deleteAndUndelete'])
            ->name('comment.undelete');
        Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::delete('/contact/{id}', [ContactController::class, 'delete'])->name('contact.delete');
        Route::resource('/slider', SliderController::class)->parameters(['slider' => 'id']);
    });
/* ======================= End route backend ======================= */
