<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;
use App\Models\jurusan;
use App\Models\guru;
use App\Models\pegawai;

class dashboardController extends Controller
{
    public function index()
    {
        $agendas = agenda::paginate(5);
        $jurusan = jurusan::paginate(5);
        $pegawai = pegawai::paginate(5);
        $gurus = guru::paginate(5);

        $total_guru = guru::all()->count();
        $total_pegawai = pegawai::all()->count();
        $total_jurusan = jurusan::all()->count();
        $total_agenda = agenda::all()->count();

        return view('admin.dashboard', compact('total_guru', 'total_pegawai', 'total_jurusan', 'total_agenda','agendas','jurusan','pegawai','gurus'));
    }
}
