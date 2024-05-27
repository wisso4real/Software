<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function showRegistrationForm()
    {

        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('register');
    }

    public function register(Request $request)
    {
        // Check if the user is already authenticated
        if (Auth::check()) {
            return redirect()->route('home');
        }

        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|min:4|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Authenticate the newly registered user
        Auth::login($user);

        // Redirect to the home page upon successful registration
        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        // If the user is already authenticated, redirect to the home page
        if (Auth::check()) {
            return redirect()->route('home');
        }

        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        // Authentication failed, redirect back with an error message
        return back()->withErrors(['message' => 'Invalid credentials.'])->withInput();
    }

    public function showForgotForm(Request $request){
        return view('forgot');
    }

    public function home(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // User is not authenticated, redirect to login
            return redirect()->route('login');
        }

        // User is authenticated, return the home view
        return view('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the current session by regenerating the session ID
        $request->session()->regenerate(true);

        // Redirect the user to the login page
        return redirect('login');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        // Generate and save password reset token
        $token = Str::random(60);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => now()]
        );

        // Send password reset email
        // (Code to send email goes here)

        return response()->json(['message' => 'Password reset link sent successfully'], 200);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'token' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Verify token
        $token = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        if (!$token || !hash_equals($token->token, $request->token)) {
            return response()->json(['message' => 'Invalid token'], 400);
        }

        // Update user's password
        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        // Delete token
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return response()->json(['message' => 'Password reset successfully'], 200);
    }
}
