<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->logemail,
            'password' => $request->logpass
        ];
        
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('index');
        } else {
            // Authentication failed...
            return back()->withErrors([
                'message' => 'These credentials do not match our records.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        // Auth::logout();

        // return redirect('home');

        session()->flush();

    // Invalidate the session cookie
    session()->invalidate();

    // Redirect the user to the login page
    return redirect('login');
    }

}
