<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.welcome');
});

Route::get('/home', function () {
    return view('main.home');
});

Route::get('/gyis', function () {
    return view('main.gyis');
});

Route::get('/edutrip', function () {
    return view('main.edutrip');
});

Route::get('/gallery', function () {
    return view('main.gallery');
});

Route::get('/articles', function () {
    return view('main.articles');
});
Route::get('/articlesmain', function () {
    return view('main.mainarticles');
});
