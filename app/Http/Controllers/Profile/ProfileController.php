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
        //dd(Auth::id());
        //dd(Akun::find(Auth::id()));
        return Inertia::render('Profile/Index', [
            'profile'   => Akun::find(Auth::id()),
            'nameAkun'  => session(('name')),
            'page'      => 'IndexProfile'
        ]);
    }

    public function update(Request $request)
    {
        Akun::where('id', Auth::id())->update($this->catchForm());

        return redirect()->route('profile.index')->with('message', 'berhasil update data');
    }

    public function catchForm()
    {
        $credentials = request()->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'email' => 'email:rfc,dns',
                'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
            ],
            [
                'name.required' => 'name wajib di isi',
                'username.required' => 'username wajib di isi',
                'email.email' => 'email tidak terverifikasi',
                'gambar.image' => 'file wajib berbentuk gambar',
                'gambar.mimes' => 'file wajib ber ektensi jpeg, png dan jpg',
                'gambar.size' => 'size file tidak boleh lebih dari 2mb'
            ]
        );

        $credentials['gambar'] = request()->file('gambar')->getClientOriginalName();

        $credentials['password'] = request()->input('password');

        //store gambar
        request()->file('gambar')->storeAs('public/images', $credentials['gambar']);

        return $credentials;
    }
}
