<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserAjaxController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('users', UserController::class);

Route::get('/guest_book', [GuestController::class, 'guest_book'])->name('guest_book');

Route::prefix('ajax')->group(function () {
    Route::get('/users', [UserAjaxController::class, 'index'])->name('ajax.users.index');
});
