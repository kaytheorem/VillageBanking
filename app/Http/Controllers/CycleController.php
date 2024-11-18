<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'group_id' => 'required|integer|exists:groups,id', // Ensure group_id exists in the groups table
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'interest_rate' => 'required|numeric|min:0',
            'balance' => 'required|numeric|min:0'
        ]);

        // Create a new cycle using the validated data
        $cycle = new Cycle();
        $cycle->name = $validatedData['name'];
        $cycle->group_id = $validatedData['group_id'];
        $cycle->start_date = $validatedData['start_date'];
        $cycle->end_date = $validatedData['end_date'];
        $cycle->interest_rate = $validatedData['interest_rate'];
        $cycle->balance = $validatedData['balance'];
        $cycle->status = 'Active'; // Set default status to active

        // Save the cycle to the database
        $cycle->save();

        // Redirect back or to another page with a success message
        return redirect()->back()->with('success', 'Cycle activated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cycle $cycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cycle $cycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cycle $cycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cycle $cycle)
    {
        //
    }
}
