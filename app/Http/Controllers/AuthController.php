<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login.login');
    }

    public function loginProceesing(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt( $credentials)) {
            return view('dashboard');
        }

        return 'finawa ghadi';
    }

    public function logout() {
        Auth::logout();
        return redirect(route('login'));
    }


}
