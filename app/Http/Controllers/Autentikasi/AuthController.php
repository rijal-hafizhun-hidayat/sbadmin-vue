<?php

namespace App\Http\Controllers\Autentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class AuthController extends Controller
{
    public function index()
    {
        // $val = Auth::user();
        // dd(Auth::user()->name);
        //dd(Auth::user());
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

            $request->session()->regenerate();

            $request->session()->put('hasLoggedIn', true);
            $request->session()->put('name', Auth::user()->name);

            return redirect()->route('dashboard.index');
        }

        return back()->withErrors([
            'warn' => true,
        ]);
        //return back()->withSuccess('Task Created Successfully!');
    }

    public function logOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.index');
    }
}
