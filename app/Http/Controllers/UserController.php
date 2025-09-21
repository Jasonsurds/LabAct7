<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Show a list of all users (admin-only or protected route)
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show a specific user's profile
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Show the authenticated user's profile
    public function profile()
    {
        $user = auth()->user();
        return view('users.profile', compact('user'));
    }

    // Update the authenticated user's profile
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only('name', 'email'));

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
