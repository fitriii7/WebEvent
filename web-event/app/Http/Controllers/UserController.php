<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user', compact('users'));
    }

    public function create(){
        return view('create_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $user->attachRole($request->role_id);

        event(new Registered($user));

        return redirect('dashboard/user')->with('status', 'New User Added Successfully');
    }

    public function edit($id)
    {
        
        $user = User::find($id);

        return view('edit_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id); 

        $user->name = $request->input('name'); 
        $user->email = $request->input('email'); 
        $user->save();
        return redirect('dashboard/user')->with('updatestatus', 'User Data Update Successfully');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('dashboard/user')->with('destroystatus', 'User Data has been Deleted!');
    }

}
