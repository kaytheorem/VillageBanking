<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
     {
         $user = Auth::user(); // Get the current logged-in user

         // Calculate total groups the user is a member of
         $totalGroups = $user->groups()->count(); // Assuming a relationship exists

         // Calculate the total loan amount for the user
         $totalLoanAmount = $user->loans()->sum('amount'); // Assuming a relationship exists

         // Calculate the total savings amount for the user
         $totalSavingsAmount = $user->savings()->sum('amount'); // Assuming a relationship exists

         // Calculate the total profits (you may have a more specific logic for this)
         $totalProfits = $user->profits()->sum('amount'); // Assuming a relationship exists

         return view('home', compact('user', 'totalGroups', 'totalLoanAmount', 'totalSavingsAmount', 'totalProfits'));
     }

}
