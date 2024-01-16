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
    return view('index');
});

// Show Register/Create Form
Route::get('/sign-up', [UserController::class, 'create'])->middleware('guest');


// Show Login Form
Route::get('/sign-in', [UserController::class, 'signIn'])->name('sign-in');

Route::post('/users', [UserController::class, 'store']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


//Dashboard Employee
Route::middleware(['auth', 'role:2'])->prefix('dashboards')->group(function () {
    
    Route::resource('/employee', UserController::class)->names([
        'index' => 'dashboards.employee.index',
        'create'=> 'dashboards.employee.create',
        'edit' => 'dashboards.employee.edit',
        'update' => 'dashboards.employee.update',
    ]);
   
});

//Dashboard Employer
Route::middleware(['auth', 'role:3'])->prefix('dashboards')->group(function () {
    
    Route::resource('/employer', UserController::class)->names([
        'index' => 'dashboards.employer.index',
        'create'=> 'dashboards.employer.create',
        'edit' => 'dashboards.employer.edit',
        'update' => 'dashboards.employer.update',
    ]);
   
});
