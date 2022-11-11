<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;

class agendaController extends Controller
{
    public function index()
    {
        $agenda = agenda::all();

        return view('fe.agenda', compact('agenda'));
    }
}
