<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class jurusanController extends Controller
{
    public function index()
    {
        $jurusan = jurusan::all();

        return view('fe.jurusan', compact('jurusan'));
    }
}
