<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::view('/header', 'header');
Route::view('/service', 'service');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact');
// Route::view('/slide', 'carousel');
Route::view('/doctors', 'doctor');
// Route::view('/login', 'login');
Route::get('/booking',function(){
    return view('booking');
})->name('booking');

// Route::view('/register', 'register');
// --------controller-----------------

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class,'registerPost'])->name('register');
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'loginPost'])->name('login');