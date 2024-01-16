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

Route::get('/sign-up', function () {
    return view('sign-up');
});

// Show Register/Create Form
// Route::get('/sign-up', [UserController::class, 'create'])->middleware('guest');

// Route::get('/sign-in', function () {
//     return view('sign-in');
// });


// Show Login Form
Route::get('/sign-in', [UserController::class, 'signIn'])->name('sign-in');

Route::post('/users', [UserController::class, 'store']);
