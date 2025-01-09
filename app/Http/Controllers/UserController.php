<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import User model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
// Method to list all users using Eloquent
public function index()
{
    // Fetch all users from the database using Eloquent
    $users = User::all();
    
    // Return the view and pass the users data
    return view('users.index', compact('users'));
}

// Method to show details of a single user
public function show($id)
{
    // Fetch user by ID using Eloquent
    $user = User::findOrFail($id);

    // Return the view with the user data
    return view('users.show', compact('user'));
}
    public function showProfile()
    {
        // You can fetch user information here if needed
        return view('profile'); // Ensure 'profile.blade.php' exists
    }


    public function updateProfile(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . Auth::id(),
    ]);

    // Update the authenticated user's profile
    $user = Auth::user();
    $user->update($validated);

    // Flash message for success
    return redirect()->route('home')->with('success', 'Profile updated successfully!');
}

public function changePassword(Request $request)
{
    // Validate the request
    $request->validate([
        'current_password' => ['required', 'string', 'min:8'],
        'new_password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    // Check if the current password matches the authenticated user's password
    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }

    // Update the password
    Auth::user()->update([
        'password' => Hash::make($request->new_password),
    ]);

    return redirect()->route('profile.show')->with('status', 'Password updated successfully.');
}
}
