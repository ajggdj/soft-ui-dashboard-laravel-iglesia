<?php

namespace App\Http\Controllers;
use App\Models\Church_information;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $church_information = Church_information::all();
        return view('dashboard', compact('church_information'));
    }

    public function create(){
        return view('dashboard.create');
    }
}