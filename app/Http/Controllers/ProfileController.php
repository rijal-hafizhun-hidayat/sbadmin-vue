<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $data = Profile::orderBy('id', 'desc')->paginate(10);
        return Inertia::render('Profile/Index',[
            'datas' => $data
        ]);
    }

    public function show(){

    }
}
