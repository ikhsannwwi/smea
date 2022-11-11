<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sambutan;

class aboutController extends Controller
{
    public function index()
    {
        $sambutan = sambutan::all();

        return view('fe.about', compact('sambutan'));
    }
}
