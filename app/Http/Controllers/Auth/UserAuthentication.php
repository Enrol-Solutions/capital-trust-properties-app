<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserAuthentication extends Controller
{
    public function UserRegister(Request $request)
    {
        $request->validate([
            // 'username' => 'required|unique:users,username',
            'name' => 'required|string',
            'contact' => 'required|string',

            'email' => 'required|email',
            // 'phone_number',
            // 'user_type' => ['required', Rule::in(['Owner', 'Broker']),],
            // 'profile_image',
            'password' => 'required|confirmed',
            // 'confirm_password' => 'required|same:password',
        ]);

        // if (User::where('username', $request->username)->exists()) {
        //     return response()->json([
        //         'message' => 'Username already exists.'
        //     ], 400);
        // }


        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->with('error' , 'Email is already in use.');
        }



        $userData = User::create([
            'contact' => $request->contact,
            'name' => $request->name,
            'email' => $request->email,
            // 'phone_number' => $request->phone_number,
            // 'user_type' => $request->user_type,
            // 'profile_image' => $profileImage,
            'password' => Hash::make($request->password)
        ]);

        $userData->save();
        return redirect()->route('login')->with('success', 'You registered successfully!');;
    }

    public function UserLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Login success
            return redirect('/')->with('success', 'You logged in successfully!'); // Redirect to the intended page
        }

        // Login failed
        return back()->with('error', 'Invalid credintials!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


}
