<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/home',[HomeController::class,'index'])->name("home");

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name("about");

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index']);


Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create']);

Route::post('/users', [App\Http\Controllers\UserController::class,'store']);

Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show']);

Route::get('users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit']);

Route::put('users/{user}', [App\Http\Controllers\UserController::class, 'update']);


Route::get('articles/create',function(){
    \App\Models\Article::create([
        'title'=> $title = 'My first article',
        'slug' => str($title) ->slug() .'-'.time(),
        'body'=> $body ='This is the body of my first article',
        'teaser' => $teaser = str($body)->limit(160),
        'meta_title' => $title,
        'meta_description' => $teaser,
     ]);

});