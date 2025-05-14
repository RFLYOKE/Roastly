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

Route::get('/menu/coffee', function () {
    return view('coffee');
});

Route::get('/menu/milk', function () {
    return view('milk');
});

Route::get('/menu/frappe', function () {
    return view('frappe');
});

Route::get('/menu/dessert', function () {
    return view('dessert');
});

Route::get('/menu/tea', function () {
    return view('tea');
});
