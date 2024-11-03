<?php

use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;


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

});
