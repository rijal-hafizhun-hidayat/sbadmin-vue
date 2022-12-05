<?php

namespace App\Http\Controllers\Infaq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InfaqController extends Controller
{
    public function index(){
        return Inertia::render('Infaq/Index');
    }

    public function report(){
        return Inertia::render('Infaq/Pelaporan/Index');
    }

    public function pengambilan(){
        return Inertia::render('Infaq/Pengambilan/Index');
    }
}
