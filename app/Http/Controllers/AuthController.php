<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle Login Request
    // Handle Login Request
public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Attempt login with email and password
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // Flash a success message
        session()->flash('success', 'You are logged in successfully!');
        
        // Redirect to the home page after successful login
        return redirect()->intended('/');
    }

    // If login fails, return back with an error message
    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}


    // Show Register Form
    public function showRegisterForm()
    {
        return view('register');
    }

    // Handle Register Request
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function logout(Request $request)
    {
        // Clear the session data
        Auth::logout();
    
        // Clear the session cookie explicitly
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        // Flash a success message for logout
        session()->flash('success', 'You have been logged out successfully.');
    
        // Redirect to login page with the flash message
        return redirect('/login');
    }
}
