<?php

use App\Http\Controllers\admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\admin\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PartnerController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubjectController;
use App\Http\Controllers\admin\SubscriptionController;
use App\Http\Controllers\admin\WorkerController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\MessageController;


Route::middleware('guest')
    ->group(function () {
        Route::get('/login', [LoginController::class, 'create'])->name('login');
        Route::post('/login', [LoginController::class, 'store']);
    });

Route::middleware('auth')
    ->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/admin/blogs/subjects', [SubjectController::class, 'index'])->name('admin.blogs.subjects');
        Route::get('/admin/partners/categories', [CategoryController::class, 'index'])->name('admin.partners.categories');
        Route::get('/admin/contact/messages', [MessageController::class, 'index'])->name('admin.contact.messages');
        Route::get('/admin/partners/subscriptions', [SubscriptionController::class, 'index'])->name('admin.partners.subscriptions');
        Route::get('/admin/workers', [WorkerController::class, 'index'])->name('admin.workers');
        Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users')->middleware('boss');

        Route::delete('/admin/messages/delete/{id}', [MessageController::class, 'destroy'])->name('admin.messages.delete');
        Route::delete('/admin/subscriptions/delete/{id}', [subscriptionController::class, 'destroy'])->name('admin.subscription.delete');
        Route::delete('/admin/workers/delete/{id}', [workerController::class, 'destroy'])->name('admin.worker.delete');
        Route::delete('/admin/blogs/subjects/delete/{id}', [SubjectController::class, 'destroy'])->name('admin.blogs.subject.delete');
        Route::delete('/admin/blogs/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.blogs.category.delete');
        Route::delete('/admin/blogs/delete/{slug}', [BlogController::class, 'destroy'])->name('admin.blogs.delete');

        Route::delete('/admin/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.delete')->middleware('boss');
        Route::post('/admin/users/create', [UserController::class, 'store'])->name('admin.users.create')->middleware('boss');

        Route::post('/admin/worker/store', [workerController::class, 'store'])->name('admin.worker.store');
        Route::post('/admin/blogs/subject/store', [SubjectController::class, 'store'])->name('admin.blogs.subject.store');
        Route::post('/admin/blogs/category/store', [CategoryController::class, 'store'])->name('admin.blogs.category.store');
        

        Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
        Route::post('/partner/store', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::delete('/partner/destroy/{id}', [PartnerController::class, 'destroy'])->name('partner.destroy');
        Route::get('/partner/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
        Route::get('/blog/edit/{slug}', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/partner/update/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::put('/blog/update/{slug}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    });