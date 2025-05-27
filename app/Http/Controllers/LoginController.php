<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $envUsername = env('LOGIN_USERNAME');
        $envPassword = env('LOGIN_PASSWORD');

        if ($request->username === $envUsername && $request->password === $envPassword) {
            Session::put('logged_in', true);
            $intended = session()->pull('url.intended', '/'); // default to dashboard
            return redirect($intended);
        }

        return back()->withErrors(['Invalid credentials']);
    }

    public function logout()
    {
        Session::forget('logged_in');
        return redirect('login');
    }

}
