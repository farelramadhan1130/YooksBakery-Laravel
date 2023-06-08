<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function login()
    {
        // $data['title'] = 'Login';
        return view('/login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (Auth::user()->level === 'Admin') {
                return redirect()->intended('/admin/dashboard'); // Ganti dengan rute admin yang sesuai
            }
            if (Auth::user()->level === 'User') {
                return redirect()->intended('/home'); // Ganti dengan rute admin yang sesuai
            }
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::forget('keranjang');
        return redirect('/login');
    }
}
