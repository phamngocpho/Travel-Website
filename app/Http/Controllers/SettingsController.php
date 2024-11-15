<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
    public function show()
    {
        return view('settings.index', [
            'user' => Auth::user()
        ]);
    }

    // public function updateProfile(Request $request)
    // {
    //     $user = Auth::user();
        
    //     $validated = $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
    //         'phone' => ['nullable', 'string', 'max:20'],
    //         'address' => ['nullable', 'string', 'max:255'],
    //     ]);

    //     $user->update($validated);

    //     return redirect()->back()->with('success', 'Profile updated successfully');
    // }

    // public function updatePassword(Request $request)
    // {
    //     $validated = $request->validate([
    //         'current_password' => ['required', 'string'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);

    //     $user = Auth::user();

    //     if (!Hash::check($validated['current_password'], $user->password)) {
    //         return back()->withErrors(['current_password' => 'The current password is incorrect.']);
    //     }

    //     $user->update([
    //         'password' => Hash::make($validated['password'])
    //     ]);

    //     return redirect()->back()->with('success', 'Password updated successfully');
    // }

    // public function updateNotifications(Request $request)
    // {
    //     $validated = $request->validate([
    //         'email_notifications' => ['boolean'],
    //         'push_notifications' => ['boolean'],
    //     ]);

    //     Auth::user()->update($validated);

    //     return redirect()->back()->with('success', 'Notification preferences updated successfully');
    // }
}
