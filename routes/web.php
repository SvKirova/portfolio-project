<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticContentController::class, 'index'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{slug}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{slug}', [PostController::class, 'delete'])->name('posts.destroy');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');

Route::get('/faq', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('/faq', [FaqController::class, 'store'])->name('faqs.store');
Route::get('/faqs/{id}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
Route::put('/faqs/{id}', [FaqController::class, 'update'])->name('faqs.update');
Route::delete('/faqs/{id}', [FaqController::class, 'delete'])->name('faqs.destroy');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
