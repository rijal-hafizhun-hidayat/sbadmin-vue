<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        //dd(Auth::id());
        Profile::find(Auth::id());
        return Inertia::render('Profile/Index', [
            'nameAkun' => session(('name')),
            'page' => 'IndexProfile'
        ]);
    }
}
