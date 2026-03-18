<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.master');
});
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/project',[HomeController::class,'project'])->name('project');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::resource('/posts',PostController::class);
Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class
]);
