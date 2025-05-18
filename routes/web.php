<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', function () {
    $already_logged_in = Auth::check();
    $user_name = $already_logged_in ? Auth::user()->name : null;

    return view('login', compact('already_logged_in', 'user_name'));
});

Route::get('/menu', function () {
    return view('all');
})->middleware(['auth', 'verified'])->name('all');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
    Route::get('/menu/details_order', function () {
        return view('detailsMenu/orderdetails');
    });
});

require __DIR__.'/auth.php';

