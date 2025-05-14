<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/menu', function () {
    return view('all');
});

Route::get('/menu/signature', function () {
    return view('signature');
});
