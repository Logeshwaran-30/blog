<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});




Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/all', [BlogController::class, 'allPosts'])->name('posts.all');
Route::get('/category/{category}', [BlogController::class, 'display'])->name('blogs.display');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');







require __DIR__.'/auth.php';
