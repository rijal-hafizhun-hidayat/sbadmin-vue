<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class LoginController extends Controller
{
    public function index()
    {
        return Inertia::render('Login/Index');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'username wajib di isi',
                'password.required' => 'password wajib di isi'
            ]
        );

        if (Auth::attempt($credentials)) {
            //dd(session()->getId());
            $request->session()->regenerate();

            $request->session()->put('hasLoggedIn', true);

            return redirect()->route('dashboard.index');
        }
    }
}
