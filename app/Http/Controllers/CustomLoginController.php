<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $emailOrUsername = request()->input('email');

        $fieldType = filter_var($emailOrUsername, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$fieldType => $emailOrUsername, 'password' => $request->password])) {
            // return redirect()->route('adminDashboard');
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Login Failed. Please check your credentials');
    }
}