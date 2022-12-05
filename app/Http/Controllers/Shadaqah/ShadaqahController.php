<?php

namespace App\Http\Controllers\Shadaqah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShadaqahController extends Controller
{
    public function index(){
        // $data = Profile::orderBy('id', 'desc')->paginate(10);
        return Inertia::render('Shadaqah/Index');
    }

    public function report(){
        return Inertia::render('Shadaqah/Pelaporan/Index');
    }

    public function pengambilan(){
        return Inertia::render('Shadaqah/Pengambilan/Index');
    }
}
