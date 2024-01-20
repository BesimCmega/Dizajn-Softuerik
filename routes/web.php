<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResumeController;

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


//Dashboard Admin
Route::middleware(['auth', 'role:1'])->prefix('dashboards')->group(function () {
    
    Route::get('/admin', [AdminController::class, 'indexAdmin'])->name('dashboards.admin.index');
    Route::get('/admin/users', [AdminController::class, 'indexUsers'])->name('dashboards.admin.users.users_index');
    Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('dashboards.admin.users.create');
    Route::post('/users', [AdminController::class, 'storeInAdmin'])->name('dashboards.admin.users.storeInAdmin');
    Route::get('/admin/users/{user}/editUser', [AdminController::class, 'editUser'])->name('dashboards.admin.users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'update'])->name('dashboards.admin.users.update');
    Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('dashboards.admin.users.destroy');
    Route::get('/admin/users/show/{user}', [AdminController::class, 'show'])->name('dashboards.admin.users.show');

    
});

//Dashboard Employee
Route::middleware(['auth', 'role:2'])->prefix('dashboards')->group(function () {
    
    Route::get('/employee', [UserController::class, 'indexEmployee'])->name('dashboards.employee.index');
    Route::get('/employee/cv', [CvController::class, 'cv'])->name('dashboards.employee.cv');
    Route::get('/employee/createCV', [CvController::class, 'createCV'])->name('dashboards.employee.createCV');
    Route::post('/employee', [CvController::class, 'store'])->name('dashboards.employee.store');
    Route::get('/employee/{cv}/editCV', [CvController::class, 'edit'])->name('dashboards.employee.editCV');
    Route::put('/employee/{cv}', [CvController::class, 'update'])->name('dashboards.employee.update');
   
    Route::get('/employee/card1', [CvController::class, 'card1'])->name('dashboards.employee.card1');
    Route::get('/employee/card2', [CvController::class, 'card2'])->name('dashboards.employee.card2');
    Route::get('/employee/card3', [CvController::class, 'card3'])->name('dashboards.employee.card3');
});

//Dashboard Employer
Route::middleware(['auth', 'role:3'])->prefix('dashboards')->group(function () {
    
    Route::get('/employer', [UserController::class, 'indexEmployer'])->name('dashboards.employer.index');
    Route::get('/employer/resume', [ResumeController::class, 'resume'])->name('dashboards.employer.resume');
    Route::get('/employer/createResume', [ResumeController::class, 'createResume'])->name('dashboards.employer.createResume');
    Route::post('/employer', [ResumeController::class, 'store'])->name('dashboards.employer.store');
    Route::get('/employer/{resume}/edit', [ResumeController::class, 'edit'])->name('dashboards.employer.edit');
    Route::put('/employer/{resume}', [ResumeController::class, 'update'])->name('dashboards.employer.update');
    
});
