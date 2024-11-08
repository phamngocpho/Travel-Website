<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/holiday-packages', function () {
    return view(view: 'holiday-packages');
}) ->name('holiday-packages');


Route::get('/top-deals', function () {
    return view('top-deals');
}) ->name('top-deals');

Route::get('/help', function () {
    return view('help');
}) ->name('help');

Route::get('/blog', function () {
    return view('blog');
}) ->name('blog');

Route::get('/wishlist', function () {
    return view('wishlist');
})  ->name('wishlist');

Route::get('/trip-details', function () {
    return view('trip-details');
})  ->name('trip-details');