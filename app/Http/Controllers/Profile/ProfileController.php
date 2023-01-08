<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Akun;

class ProfileController extends Controller
{
    public function index()
    {
        $get = Akun::find(Auth::id());
        return Inertia::render('Profile/Index', [
            'profile' => $get,
            'page' => 'IndexProfile'
        ]);
    }

    public function update(Request $request)
    {
        $catchForm = $this->catchForm();

        //dd($request->newPassword, $request->konfPassword);

        if ($request->filled('newPassword') || $request->filled('konfPassword')) {
            if ($request->newPassword === $request->konfPassword) {
                //dd(true)
                $catchForm['password'] = $request->newPassword;
            }
        }

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'mimes:jpeg,png,jpg|max:2048'
            ]);

            $catchForm['gambar'] = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->storeAs('public/images', $catchForm['gambar']);
        }

        dd($catchForm);

        Akun::where('id', Auth::id())->update($catchForm);

        return redirect()->route('profile.index')->with('message', 'berhasil update data');
    }

    public function catchForm()
    {
        $credentials = request()->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|email:rfc,dns',
            ],
            [
                'name.required' => 'name wajib di isi',
                'username.required' => 'username wajib di isi',
                'email.required' => 'email wajib di isi',
                'email.email' => 'email tidak terverifikasi',
            ]
        );

        return $credentials;
    }
}
