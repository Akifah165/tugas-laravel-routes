<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/program/{name}', function ($name) {
    return view('program', ['programName' => $name]);
});


Route::prefix('team')->group(function () {
    Route::get('/', function () {
        return view('team');
    });

    Route::get('/member/{id}', function ($id) {
        return "Detail Member with ID: " . $id;
    });
});


Route::get('/contact', function () {
    return view('contact');
});


Route::redirect('/home', '/');


Route::fallback(function () {
    return "Sorry, the page you are looking for was not found.";
});

