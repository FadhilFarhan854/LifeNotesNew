<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
    
=======
    //testing
>>>>>>> a510977ed7194c9c2be0a3fd5493c1f983f8f4e5
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && password_verify($request->password, $user->password)) {
            return redirect('/NotesMain');
        }
        return redirect()->back()->withErrors(['Login' => 'Invalid username or password']);
    }
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user',
            'password' => 'required',
            'cPassword' => 'required|same:password',
        ]);

        User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect('/Login');
    }
}
