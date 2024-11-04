<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {

    Route::get('/add-group', [GroupController::class, 'create'])->name('add.group');
    Route::post('/store-group', [GroupController::class, 'store'])->name('group.store');
    Route::get('/my-groups', [GroupController::class, 'index'])->name('my.groups');
    Route::get('/show-group/{id}', [GroupController::class, 'show'])->name('group.show');

    //Loan Managemnt
    Route::get('/my-loans', [LoanController::class, 'index'])->name('my.loans');

    //Savings Management
    Route::get('/my-savings', [SavingController::class, 'index'])->name('my.savings');

    //User management
    Route::get('/my-profile', [UserController::class, 'index'])->name('my.profile');

});
