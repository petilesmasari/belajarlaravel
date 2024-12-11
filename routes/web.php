<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;




Route::get('/',[Controllers\HomeController::class,'index'])->name("home");

Route::get('/about', [Controllers\AboutController::class, 'index'])->name("about");

Route::get('/contact', [Controllers\ContactController::class, 'index']);

Route::get('/gallery', [Controllers\GalleryController::class, 'index']);


Route::resource('users', Controllers\UserController::class)->middleware('auth');

Route::get('login',[Controllers\LoginController::class, 'loginForm'])->middleware('guest');

Route::post('login',[Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');;


Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');

    // ->except(['destroy', 'show']);

// Route::get('/users', [Controllers\UserController::class, 'index'])->name('users.index');

// Route::get('/users/create', [Controllers\UserController::class, 'create'])->name('users.create');

// Route::post('/users', [Controllers\UserController::class,'store'])->name('users.store');

// Route::get('/users/{user}', [Controllers\UserController::class, 'show'])->name('users.show');

// Route::get('users/{user}/edit', [Controllers\UserController::class, 'edit'])->name('users.edit');

// Route::put('users/{user}', [Controllers\UserController::class, 'update'])->name('users.update');

Route::delete('users/{user:id}', [Controllers\UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');

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