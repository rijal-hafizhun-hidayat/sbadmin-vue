<?php

namespace App\Http\Controllers\Zakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Profile;

class ZakatController extends Controller
{
    public function index(){
        // $data = Profile::orderBy('id', 'desc')->paginate(10);
        return Inertia::render('Zakat/Index');
    }

    public function report(){
        return Inertia::render('Zakat/Pelaporan/Index');
    }

    
}
