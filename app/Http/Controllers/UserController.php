<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

        return view('profile', compact('user'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProfile(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user
    
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id, // Email uniqueness check excluding current user
            'password' => 'nullable|string|min:8|confirmed', // Optional password change
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Profile picture validation
            'gender' => 'nullable|string|in:Male,Female,Other', // Validate gender
            'location' => 'nullable|string|max:255', // Validate location
        ]);
    
        // Update the user's name, email, gender, and location
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->location = $request->location;
    
        // If a new profile picture is uploaded
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->picture = $imagePath; // Use the 'picture' column
        }
    
        // If a new password is provided, hash it and update
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        // Save the changes
        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
