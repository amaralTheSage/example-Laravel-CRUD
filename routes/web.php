<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('post.index');

// Route::get('/{id}', [PostController::class, 'show']);

Route::post('/makeapost', [PostController::class, 'store'])->name('post.store');

Route::post('/{id}', [PostController::class, 'update'])->name("post.update");

Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
