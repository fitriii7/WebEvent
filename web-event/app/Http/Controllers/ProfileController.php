<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    
}
