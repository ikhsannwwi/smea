<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tulisan;

class blogController extends Controller
{
    public function index()
    {
        $blog = tulisan::all();

        return view('fe.blog', compact('blog'));
    }
}
