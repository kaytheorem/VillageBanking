<?php

use App\Http\Controllers\CycleController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $user = Auth::user(); // Get the current logged-in user

        // Ensure that these calculations work by defining them here
        $totalGroups = $user->groups()->count(); // Assuming a relationship exists for groups
        $totalLoanAmount = $user->loans()->sum('amount'); // Assuming a relationship exists for loans
        $totalSavingsAmount = $user->savings()->sum('amount'); // Assuming a relationship exists for savings
        $totalProfits = $user->savings()->sum('amount') - $user->loans()->sum('amount');// Assuming a relationship exists for profits

        // Pass these variables to the view
        return view('home', data: compact('user', 'totalGroups', 'totalLoanAmount', 'totalSavingsAmount', 'totalProfits'));
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Auth::routes();



Route::middleware(['auth'])->group(function () {

    Route::get('/add-group', [GroupController::class, 'create'])->name('add.group');
    Route::post('/store-group', [GroupController::class, 'store'])->name('group.store');
    Route::get('/my-groups', [GroupController::class, 'index'])->name('my.groups');
    Route::get('/all-groups', [GroupController::class, 'allGroups'])->name('all.groups');
    Route::get('/show-group/{id}', [GroupController::class, 'show'])->name('group.show');
    Route::post('/groups/join', [GroupController::class, 'join'])->name('groups.join');


    //Loan Managemnt
    Route::get('/my-loans', [LoanController::class, 'index'])->name('my.loans');
    Route::post('/submit-loan', [LoanController::class, 'store'])->name('loans.store');

    //Savings Management
    Route::get('/my-savings', [SavingController::class, 'index'])->name('my.savings');
    Route::post('/add-saving', [SavingController::class, 'store'])->name('savings.store');
  
    //User management
    Route::get('/my-profile', [UserController::class, 'index'])->name('my.profile');
    // web.php (routes)
    Route::put('/profile', [UserController::class, 'editProfile'])->name('profile.update');

    //Cycle Management
    Route::post('/add-cycle', [CycleController::class, 'store'])->name('add.cycle');

    Route::get('/invite/{token}', [GroupController::class, 'handleInvite'])->name('group.invite');
});
