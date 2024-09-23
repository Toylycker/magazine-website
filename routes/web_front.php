<?php

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\WorkerController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\LinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MessageController;


Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
Route::post('/partners/{id}/subscribe', [HomeController::class, 'subscribe'])->name('partner.subscribe');
// Route::get('/blogs/{id}', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/', [HomeController::class, 'partners'])->name('home');
Route::get('/setback', [HomeController::class, 'setBackground'])->name('setback');
Route::get('/language/{key}', [HomeController::class, 'language'])->name('language');
Route::get('/get-video/{video}', [BlogController::class, 'getVideo'])->name('getVideo');
Route::get('/go_to_instagram/{name}', [LinkController::class, 'go_to_instagram'])->name('instagram');

// Route::controller(MessageController::class)->group(function () {
//     Route::get('/message', 'index')->name('message');
//     Route::post('/message/store', 'store')->name('message.store');
//     Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
//     });

// Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route::controller(BlogController::class)->group(function () {
//     Route::get('/blogs/{id}', 'blogs')->name('blogs')->where('id', '[0-9]+');
//     Route::get('/blogs/post/{slug}', 'show')->name('blogs.show')->where('slug', '[0-9A-Za-z-]+');
//     Route::get('/blogs/post/{slug}/favorite', 'favorite')->name('blogs.favorite')->where('slug', '[0-9A-Za-z-]+');
// });