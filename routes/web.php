<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view(view: 'home');
});

Route::get('/about', function () {
    return view(view: 'about');
});

Route::get('/contact', function () {
    return view(view: 'contact');
});

Route::get('/gallery', function () {
    return view(view: 'gallery');
});


Route::get('users', function() {

    $users = [
        ['id' => 1, 'name' => 'Opet', 'email' => 'opet09@gmail.com'],
        ['id' => 2, 'name' => 'Rahmad', 'email' => 'rahmadtahalu@gmail.com'],
    ];
    
    return view('users.index', compact('users'));
});