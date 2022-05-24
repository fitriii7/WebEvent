<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user()->id;
        $getuser = User::where('id', $user)->get();
        return view('profile', compact('getuser'));
    }

    public function edit(){
        return view('edit_profile');
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id); 
        $user->name = $request->input('name'); 
        $user->email = $request->input('email'); 
        $user->save();
        return redirect('dashboard/profile')->with('updatestatus', 'User Data Update Successfully');
    }

    public function password(){
        return view('change-password');

    }

    public function changePasswordPost(Request $request){
        
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }
    
}
