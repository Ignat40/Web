<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/p/{post}', [PostsController::class,'show']);
Route::get('/p/create', [PostsController::class,'create']);
Route::post('/p', [PostsController::class,'store']);



Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('edit.show');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

