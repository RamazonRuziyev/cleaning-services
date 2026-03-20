<?php

use App\Http\Controllers\AuthController;
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
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/auth',[AuthController::class,'register'])->name('register');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/save',[AuthController::class,'save'])->name('save');
Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class
]);
