<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TourController;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/holiday-packages', function () {
    return view(view: 'user.holiday-packages');
}) ->name('holiday-packages');


Route::get('/top-deals', function () {
    return view('user.top-deals');
}) ->name('top-deals');

Route::get('/help', function () {
    return view('user.help');
}) ->name('help');

Route::get('/blog', action: function () {
    return view('user.blog');
}) ->name('blog');

Route::get('/wishlist', function () {
    return view('user.wishlist');
})  ->name('wishlist');

Route::get('/trip-details', function () {
    return view('user.trip-details');
})  ->name('trip-details');


Route::get('/admin', function () {
    return view('admin.home');
})  ->name('admin');

Route::get('/admin/addTour', function () {
    return view('admin.addTour');
})  ->name('addTour');
Route::post('/admin/addTour', [TourController::class, 'store'])->name('addTour');
