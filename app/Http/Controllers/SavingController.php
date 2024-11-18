<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Group;
use App\Models\Saving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        // Fetch the savings related to the authenticated user
        $savings = $user->savings;

        return view('mySavings', compact('user', 'savings'));
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
        try {
            // Retrieve the group from the database using the provided group_id
            $group = Group::findOrFail($request->group_id);

            // Validate the incoming request using the group's minimum_savings
            $validator = Validator::make($request->all(), [
                'amount' => 'required|numeric|min:' . $group->constitution->minimum_savings,
                'network' => 'required|string',
                'phone_number' => 'required|string',
                'password' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // Password verification
            if (!Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password])) {
                return response()->json(['errors' => ['password' => 'The provided password is incorrect.']], 422);
            }

            // Get the current cycle for the user
            $currentCycle = Cycle::where('status', 'active')->first();
            $user = Auth::user();

            // Save the new savings record
            Saving::create([
                'amount' => $request->amount,
                'network' => $request->network,
                'phone' => $request->phone_number,
                'user_id' => $user->id,
                'cycle_id' => $currentCycle->id,
            ]);

            return response()->json(['success' => true, 'message' => 'Your saving has been successful.']);

        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Error in saving deposit: ' . $e->getMessage());

            return response()->json(['error' => 'An unexpected error occurred. Please try again later.'], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Saving $saving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saving $saving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saving $saving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saving $saving)
    {
        //
    }
}
