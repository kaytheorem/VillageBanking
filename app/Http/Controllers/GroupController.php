<?php

namespace App\Http\Controllers;

use App\Models\Constitution;
use App\Models\Group;
use App\Models\GroupAccount;
use App\Models\Invite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        return view('index', compact('groups', 'user')); // Make sure to create this view
    }

    public function allGroups(){

        $user = Auth::user();
        $groups= Group::all();

        return view('allGroups', compact('user', 'groups'));
    }

    public function join(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'group_code' => 'required|string',
        ]);
    
        $group = Group::findOrFail($request->group_id);
    
        // Check if the provided code matches
        if ($group->code !== $request->group_code) {
            return redirect()->back()->with('error', 'Invalid group code.');
        }
    
        // Check if the user is already in the group
        if ($group->users()->where('users.id', Auth::id())->exists()) {
            return redirect()->back()->with('info', 'You are already a member of this group.');
        }
        
    
        // Add the user to the group
        $group->users()->attach(Auth::id());
    
        return redirect()->route('groups.show', $group->id)
            ->with('success', 'You have successfully joined the group!');
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
            'code' => strtoupper(Str::random(6)), // Generate a 6-character unique code
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
        // Retrieve the group, including its users, active cycles, and constitution
        $group = Group::with(['users', 'cycles' => function ($query) {
            $query->where('status', 'active'); // Assuming 'status' is the field for active cycles
        }, 'constitution'])->findOrFail($id);

        $cycles = $group->cycles; // Retrieve all cycles associated with the group
        $activeCycle = $cycles->first(); // Get the first active cycle if it exists

        // Retrieve savings and loans associated with the active cycle, if there is one
        $savings = $activeCycle ? $activeCycle->savings : collect(); // Get savings or empty collection
        $totalSavings = $savings->sum('amount');
        $loans = $activeCycle ? $activeCycle->loans : collect(); // Get loans or empty collection
        $totalLoans = $loans->sum('amount');
        $totalBalance = $totalSavings - $totalLoans;

        $user = Auth::user();

        // Return the view with all required data, including the active cycle
        return view('groupDetails', compact('group', 'user', 'savings', 'loans', 'totalBalance', 'cycles', 'activeCycle'));
    }


    public function generateInviteLink($groupId)
    {
        // Generate a unique token
        $token = Str::random(32);

        // Store invite in the database
        Invite::create([
            'group_id' => $groupId,
            'token' => $token,
        ]);

        // Return the invite link
        return route('group.invite', ['token' => $token]);
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
