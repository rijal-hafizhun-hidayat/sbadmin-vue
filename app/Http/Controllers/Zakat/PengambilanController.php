<?php

namespace App\Http\Controllers\Zakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PengambilanController extends Controller
{
    public function index(){
        return Inertia::render('Zakat/Pengambilan/Index');
    }
}
