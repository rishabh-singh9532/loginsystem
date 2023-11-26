<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('register');
});

Route::group(['middleware' => ['IsLogin']], function () {
    Route::get('/register', [Authcontroller::class, 'register'])->name('register');
    Route::post('/store', [Authcontroller::class, 'store'])->name('store');

    Route::get('/login', [Authcontroller::class, 'login'])->name('login');
    Route::post('/verify', [Authcontroller::class, 'verify'])->name('verify');

});
Route::group(['middleware' => ['IsLogout']], function () {
    Route::get('/dashboard', [Authcontroller::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [Authcontroller::class, 'logout'])->name('logout');


});


