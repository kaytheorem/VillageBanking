<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Invite;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Username' => ['required', 'string', 'max:255', 'unique:users'],
            'role' => ['required', 'string', 'max:50'],
            'DOB' => ['nullable', 'date', 'before:' . now()->subYears(18)->format('Y-m-d')],
            'invite_token' => ['nullable', 'string', 'exists:invites,token'], // Validate token if provided
        ], [
            'DOB.before' => 'You must be at least 18 years old to register.',
            'invite_token.exists' => 'This invite token is invalid.',
        ]);
    }

    protected function create(array $data)
    {
        // Create user instance
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Username' => $data['Username'],
            'role' => $data['role'],
            'DOB' => $data['DOB'],
        ]);

        // Check if there's an invite token
        if (isset($data['invite_token'])) {
            $invite = Invite::where('token', $data['invite_token'])->first();
            if ($invite) {
                // Optionally, you can associate the user with the group here
                $user->group_id = $invite->group_id; // Assuming you have a group_id field in users table
                $user->save();

                // Optionally delete the invite or mark it as used
                $invite->delete(); // Assuming you want to invalidate the invite after use
            }
        }

        return $user;
    }
}
