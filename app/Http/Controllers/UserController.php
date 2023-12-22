<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $admin = Admin::where('username', $request->username)->where('password', $request->password)->first();
        if ($admin) {
            $request->session()->put('id', $admin->id_admin);
            return redirect('/ForumAdmin');
        }
        $user = User::where('username', $request->username)->first();
        $remember = $request->has('check');
        $id_user = $user->id_user;
        if ($user && password_verify($request->password, $user->password) && $remember) {
            cookie('cookie_id', 'id_user', 2880);
            $request->session()->put('id', $id_user);
            return redirect('/NotesMain');
        }
        if ($user && password_verify($request->password, $user->password)) {
            $request->session()->put('id', $id_user);
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
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
