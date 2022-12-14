<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\UsersExport;

class AkunController extends Controller
{
    public function index()
    {
        $items = Akun::paginate(10)->through(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'username' => $item->username
            ];
        });

        //dd($items);
        return Inertia::render('Akun/Index', [
            'valueNavbar' => request()->session()->all(),
            'akuns' => $items,
            'page' => 'IndexAkun'
        ]);
    }

    public function create()
    {
        return Inertia::render('Akun/Index', [
            'page' => 'CreateAkun'
        ]);
    }

    public function show($id)
    {
        //dd(Akun::find($id));
        return Inertia::render('Akun/Index', [
            'akuns' => Akun::find($id),
            'page' => 'ShowAkun'
        ]);
    }

    public function store(Request $request)
    {

        $value = $this->getForm();

        Akun::create($value);

        return redirect()->route('akun.index')->with('message', 'berhasil input data');
    }

    public function destroy($id)
    {
        Akun::destroy($id);

        return redirect()->route('akun.index')->with('message', 'berhasil hapus data');
    }

    public function update($id)
    {
        //dd($id);
        $val = $this->getFormShow();
        //dd($val);
        Akun::where('id', $id)->update($val);

        return redirect()->route('akun.index')->with('message', 'berhasil update data');
    }

    public function getForm()
    {
        $credentials = request()->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required|email:rfc,dns',
                'role' => 'required'
            ],
            [
                'name.required' => 'name wajib di isi',
                'username.required' => 'username wajib di isi',
                'password.required' => 'password wajib di isi',
                'email.required' => 'email wajib di isi',
                'email.email' => 'email tidak terverifikasi',
                'role.required' => 'role wajib di isi'
            ]
        );

        $credentials['password'] = Hash::make($credentials['password']);

        return $credentials;
    }

    public function getFormShow()
    {
        $credentials = request()->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'role' => 'required'
            ],
            [
                'name.required' => 'name wajib di isi',
                'username.required' => 'username wajib di isi',
                'role.required' => 'role wajib di isi'
            ]
        );

        if (request()->filled('password')) {
            $credentials['password'] = Hash::make(request()->input('password'));
            //return true;
        }

        return $credentials;
    }

    public function print()
    {
        //dd('test');
        return Excel::download(new UsersExport, 'akuns.xlsx');
        //return Excel::download(new UsersExport, 'invoices.xlsx');
    }
}
