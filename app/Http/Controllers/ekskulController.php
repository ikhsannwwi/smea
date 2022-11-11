<?php

namespace App\Http\Controllers;

use App\Models\ekskul;
use Illuminate\Http\Request;

class ekskulController extends Controller
{
    public function index()
    {
        $ekskul = ekskul::all();

        return view('fe.ekskul', compact('ekskul')) ;
    }
}
