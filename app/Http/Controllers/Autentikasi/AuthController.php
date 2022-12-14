<?php

namespace App\Http\Controllers\Autentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;


class AuthController extends Controller
{
    public function index()
    {
        //dd(Hash::make('admin'));
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
            $request->session()->put('gambar', Auth::user()->gambar);
            // $request->session()->put('id', Auth::id());

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
