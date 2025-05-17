<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Exception;
class SuperAdminController extends Controller
{
    public function newAdmin(Request $request){
       try{ $request->validate([
            'contact' => 'required|string',
             'name' => 'required|string',
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


        // if (User::where('email', $request->email)->exists()) {
        //     return response()->json([
        //         'message' => 'Email is already in use.'
        //     ], 400);
        // }



        $userData = User::create([
            // 'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            // 'user_type' => $request->user_type,
            // 'profile_image' => $profileImage,
            'password' => Hash::make($request->password)
        ]);
        Admin::create(['user_id'=>$userData->id]);
        return redirect()->back()->with('success', 'Your data has been saved successfully!');
    }
    catch(Exception $e)
    {
     return redirect()->back()->with('error', 'Something went wrong!');
    }
    }

    public function newAdminfrm()
    {
      return view('admin.newadmin');  
    }
}
