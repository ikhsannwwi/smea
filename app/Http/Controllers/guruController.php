<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;

class guruController extends Controller
{
    public function index()
    {
        $guru = guru::all();

        return view('fe.guru', compact('guru'));
    }
}
