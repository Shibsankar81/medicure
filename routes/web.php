<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\DoctorRegController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DashboardController;


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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::view('/header', 'header');
Route::view('/service', 'service');
Route::view('/about', 'about')->name('about');
// Route::view('/admin', 'admin')->name('admin');
// Route::view('/contact', 'contact');
// Route::view('/slide', 'carousel');

// Route::view('/login', 'login');
// Route::get('/booking',function(){
//     return view('booking');
// })->name('booking');

// Route::view('/register', 'register');
// --------controller-----------------
Route::group(['middleware'=>'guest'], function(){

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class,'registerPost'])->name('register');

Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'loginPost'])->name('login');




});

Route::group(['middleware'=>'auth', 'role:user'], function(){

    // Route::view('/doctor', 'doctor');

    Route::get('/booking', [BookingController::class, 'booking'])->name('booking');
    Route::post('/booking',[BookingController::class,'bookingPost'])->name('booking');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');


});





Route::get('/contact',[ContactformController::class, 'contact'])->name('contact');
Route::post('/contact',[ContactformController::class, 'contactPost'])->name('contact');

Route::controller(DoctorRegController::class)->group(function(){
    Route::get('/doctorregistration', 'doctorRegistration');
    Route::Post('/doctorregistration', 'doctorRegistrationPost')->name('doctorReg');
});

// Route::get('/admin', [DoctorRegController::class, 'records']);
Route::get('/admin', [IndexController::class, 'index']);
// Route::delete('/admin/{id}', [IndexController::class, 'destroy'])->name('booking.destroy');
Route::delete('/admin/{id}', [IndexController::class, 'destroy'])->name('destroy');

// Route::get('/resources/{id}/edit', [EditController::class,'edit'])->name('resources.edit');
// Route::resource('bookEdit/{id}', [EditController::class, 'bookEdit'])->name('bookEdit');

Route::get('bookEdit/{id}', [EditController::class, 'bookedit'])->name('bookEdit');
Route::post('bookEdit/{id}', [EditController::class, 'update'])->name('bookupdate');

// Route::get('/dashboard', [DashboardController::class, 'countNumber']);
Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/{id}/edit', [DashboardController::class, 'appointmentEdit']);
Route::get('/dashboard/appointment/{id}/delete', [DashboardController::class, 'appointmentDestroy']);
Route::get('/dashboard/user/{id}/delete', [DashboardController::class, 'UserDestroy']);
Route::get('/dashboard/doctor/{id}/delete', [DashboardController::class, 'doctorDestroy']);
Route::get('/dashboard/message/{id}/delete', [DashboardController::class, 'messageDestroy']);
});

Route::get('/doctor', [DoctorRegController::class, 'AllDoctor'])->name('doctor');

Route::get('/doctorDashboard',[DoctorRegController::class, 'myAppointments'])->name('doctorDashboard');





// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/booking', [AppointmentController::class, 'booking'])->name('booking');
// Route::post('/booking', [AppointmentController::class, 'bookingPost'])->name('booking');