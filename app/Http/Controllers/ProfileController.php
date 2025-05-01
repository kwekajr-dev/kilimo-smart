<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Constructor - apply auth middleware to all methods
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the user's profile.
     * This method returns the profile view with the currently authenticated user
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('profile.show', [
            'user' => Auth::user(), // Get current authenticated user
        ]);
    }

    /**
     * Display the user's settings page.
     * This method returns the settings view with the currently authenticated user
     *
     * @return \Illuminate\View\View
     */
    public function settings()
    {
        return view('profile.settings', [
            'user' => Auth::user(), // Get current authenticated user
        ]);
    }

    /**
     * Update the user's profile information.
     * This method validates and updates the user's name and telephone
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|max:255|digits:10|unique:users,telephone,' . Auth::id(),
            // The unique rule includes the current user's ID to exclude it from the unique check
        ]);

        Auth::user()->update($validated);

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }

    /**
     * Update the user's password.
     * This method validates the current password and updates to a new password
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required|current_password', // Validates that current password matches
            'password' => 'required|string|min:8|confirmed', // Requires password_confirmation field
        ]);

        Auth::user()->update([
            'password' => Hash::make($validated['password']), // Hash the new password
        ]);

        return redirect()->route('profile.settings')->with('success', 'Password updated successfully!');
    }
}