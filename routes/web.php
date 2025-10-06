<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/program', function () {
    $programs = ['Web Development','Data Science','UI/UX'];
    return view('program-list', compact('programs'));
});

Route::get('/program/{name}', function ($name) {
    return view('program', ['programName' => $name]);
});


Route::prefix('team')->group(function () {
    Route::get('/', function () {
        return view('team');
    });

    Route::get('/member/{id}', function ($id) {
        $members = [
          1 => 'Andi Nur Akifah',
          2 => 'Anisa',
          3 => 'Anita Zakiati',
        ];
        $name = $members[$id] ?? 'Unknown';
        return view('member', compact('id','name'));
    });
});


Route::get('/contact', function () {
    return view('contact');
});


Route::redirect('/home', '/');


Route::fallback(function () {
    return "Sorry, the page you are looking for was not found.";
});





