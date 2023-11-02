<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function adminLoginForm()
    {
        return view('auth.admin-login'); // Sesuaikan dengan tampilan Anda
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin-dashboard'); // Sesuaikan dengan rute admin Anda
            }
        }

        return redirect('/admin-login')->with('error', 'Login gagal.');
    }
}