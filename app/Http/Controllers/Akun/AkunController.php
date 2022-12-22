<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        $akun = Akun::latest()->get();
        //dd($akun);
        return Inertia::render('Akun/Index', [
            'akuns' => $akun,
            'nameAkun' => session(('name'))
        ]);
    }

    public function create()
    {
        return Inertia::render('Akun/Create', [
            'nameAkun' => session(('name'))
        ]);
    }

    public function show($id)
    {
        //dd(Akun::find($id));
        return Inertia::render('Akun/Show', [
            'akuns' => Akun::find($id),
            'nameAkun' => session(('name'))
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
                'role' => 'required'
            ],
            [
                'name.required' => 'name wajib di isi',
                'username.required' => 'username wajib di isi',
                'password.required' => 'password wajib di isi',
                'role.required' => 'role wajib di isi'
            ]
        );

        $credentials['password'] = Hash::make($credentials['password']);

        Akun::create($credentials);

        return redirect()->route('akun.index')->with('message', 'berhasil input data');
    }

    public function destroy($id)
    {
        Akun::destroy($id);

        return redirect()->route('akun.index')->with('message', 'berhasil hapus data');
    }
}
