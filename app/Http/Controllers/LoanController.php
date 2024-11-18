<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cycle;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve the loans for the user (you can also filter based on status, cycle, etc.)
        $loans = Loan::where('user_id', $user->id)
                    ->with('cycle') // Optionally load cycle info if needed
                    ->get();

        // Pass the user and loans data to the view
        return view('myLoans', compact('user', 'loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data, including group_id
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1',
            'password' => 'required|string',
            'group_id' => 'required|exists:groups,id', // Ensure group_id exists in groups table
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Attempt to retrieve the active cycle for the specified group
        $currentCycle = Cycle::where('status', 'active')
            ->where('group_id', $request->group_id)
            ->first();

        if (!$currentCycle) {
            return response()->json(['errors' => ['cycle' => 'No active cycle is available for this group.']], 422);
        }

        // Verify the user's password for security
        if (!Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password])) {
            return response()->json(['errors' => ['password' => 'The provided password is incorrect.']], 422);
        }

        // Calculate return amount based on the cycle's interest rate
        $amount = $request->amount;
        $interestRate = $currentCycle->interest_rate / 100;
        $interest = $amount * $interestRate;
        $returnAmount = $amount + $interest;

        // Store the loan record in the database
        Loan::create([
            'user_id' => Auth::id(),
            'cycle_id' => $currentCycle->id,
            'amount' => $amount,
            'interest' => $interest,
            'return_amount' => $returnAmount,
            'return_date' => now()->addMonths(1), // Example return date
        ]);

        return response()->json(['success' => true, 'message' => 'Your loan application has been submitted successfully.']);
    }




    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
