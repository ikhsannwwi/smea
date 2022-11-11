<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class pegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();

        return view('fe.pegawai', compact('pegawai'));
    }
}
