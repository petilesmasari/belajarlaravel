<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view(view: 'home');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'index']);

// Route::get('/contact', function () {
//     return view(view: 'contact');
// });

// Route::get('/gallery', function () {
//     return view(view: 'gallery');
// });


// Route::get('users', function() {

//     $users = [
//         ['id' => 1, 'name' => 'Opet', 'email' => 'opet09@gmail.com'],
//         ['id' => 2, 'name' => 'Rahmad', 'email' => 'rahmadtahalu@gmail.com'],
//     ];
    
//     return view('users.index', compact('users'));
// });