<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MenuController;
use App\Models\Drink;
use App\Models\Kategori;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', function () {
    $already_logged_in = Auth::check();
    $user_name = $already_logged_in ? Auth::user()->name : null;

    return view('login', compact('already_logged_in', 'user_name'));
});

Route::get('/menu', [MenuController::class, 'all'])->middleware(['auth', 'verified'])->name('all');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/menu/{kategori}', [MenuController::class, 'all'])
        ->middleware(['auth', 'verified']);

    Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');

    Route::get('/menu/details_order', function () {
        return view('detailsMenu/orderdetails');
    });

    Route::get('/menu/payment_order', function () {
        return view('detailsMenu/orderbills');
    });
});

require __DIR__.'/auth.php';

