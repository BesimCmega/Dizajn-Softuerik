<?php

use App\Http\Controllers\CVController;
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
    return view('index');
})->middleware('guest');

// Show Register/Create Form
Route::get('/sign-up', [UserController::class, 'create'])->middleware('guest');


// Show Login Form
Route::get('/sign-in', [UserController::class, 'signIn'])->name('sign-in')->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


//Dashboard Employee
Route::middleware(['auth', 'role:2'])->prefix('dashboards')->group(function () {
    
    Route::get('/employee', [UserController::class, 'indexEmployee'])->name('dashboards.employee.index');
    Route::get('/employee/cv', [CVController::class, 'cv'])->name('dashboards.employee.cv');
    
   
});

//Dashboard Employer
Route::middleware(['auth', 'role:3'])->prefix('dashboards')->group(function () {
    
    Route::get('/employer', [UserController::class, 'indexEmployer'])->name('dashboards.employer.index');
   
});
