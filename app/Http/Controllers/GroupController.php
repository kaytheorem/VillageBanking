<?php

namespace App\Http\Controllers;

use App\Models\Constitution;
use App\Models\Group;
use App\Models\GroupAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Retrieve groups that the user belongs to
        $groups = $user->groups; // This uses the many-to-many relationship defined in the User model

        // Return a view and pass the groups data
        return view('index', compact('groups')); // Make sure to create this view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addGroup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        // Create the Group
        $group = Group::create([
            'name' => $request->input('group_name'),
        ]);

        $group->users()->attach($userId, ['joined_date' => now()]);

        // Create the Constitution
        $constitution = Constitution::create([
            'group_id' => $group->id,
            'cycle_duration' => $request->input('cycle_duration'),
            'minimum_savings' => $request->input('minimum_savings'),
            'initial_contribution' => $request->input('initial_contribution'),
            'loan_term' => $request->input('loan_term'),
            'meeting_frequency' => $request->input('meeting_frequency'),
            'late_payment_fee' => $request->input('late_payment_fee'),
        ]);

        // Create the Group Account with a balance of 0
        GroupAccount::create([
            'group_id' => $group->id,
            'balance' => 0,
        ]);

        return redirect()->back()->with('success', 'Group created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Retrieve the group by ID, including its related users if necessary
        $group = Group::with('users')->findOrFail($id);

        // Return a view and pass the group data
        return view('groupDetails', compact('group'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
