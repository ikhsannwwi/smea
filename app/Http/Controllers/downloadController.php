<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_file;

class downloadController extends Controller
{
    public function index()
    {
        $download = tbl_file::all();

        return view('fe.download', compact('download'));
    }
}
