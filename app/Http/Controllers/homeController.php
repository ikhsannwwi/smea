<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tulisan;
use App\Models\agenda;
use App\Models\jurusan;
use App\Models\ekskul;
use App\Models\slider;
use App\Models\guru;
use App\Models\pegawai;



class homeController extends Controller
{
    public function index(){
        $berita = tulisan::all();
        $agenda = agenda::all();
        $jurusan = jurusan::all();
        $ekskul = ekskul::all();
        $slider = slider::all();

        $tot_guru = guru::all()->count();
        $tot_pegawai = pegawai::all()->count();
        $tot_jurusan = jurusan::all()->count();
        $tot_agenda = agenda::all()->count();

        return view('fe.home', compact('berita' , 'agenda', 'jurusan', 'ekskul', 'slider', 'tot_guru', 'tot_pegawai', 'tot_jurusan', 'tot_agenda'));
    }
}
