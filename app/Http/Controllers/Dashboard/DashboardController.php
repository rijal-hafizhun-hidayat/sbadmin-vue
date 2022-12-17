<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        //dd(session('name'));
        return Inertia::render('Dashboard/Index', [
            'nameAkun' => session(('name'))
        ]);
    }
}
