<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required:email',
            'password' => 'required'
        ]);
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        $isValid = Sentinel::authenticate($credentials);

        if($isValid){
            Sentinel::login($isValid);
            return redirect()->route('auth.dashboard');
        }
        else{
            return back()->withErrors([
                'loginError'   => 'Email or Password does not match!'
            ]);
        }
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect()->route('auth.login');
    }
}
