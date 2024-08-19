<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Church_information;

class church_informations extends Controller
{
    public function index(){
        $church_information = Church_information::all();
        return view('dashboard', compact('church_information'));
    }
}