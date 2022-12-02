<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Models\agenda;

class minAgendaController extends Controller
{
    public function index()
    {
        $agenda = agenda::paginate(5);

        return view('admin.agenda.agenda', compact('agenda'));
    }

    public function tambahagenda()
    {
        $tambahdata = agenda::all();

        return view('admin.agenda.tambahagenda', compact('tambahdata'));
    }

    public function insertdataagenda(Request $request)
    {
        $data = agenda::create($request->all());

        if($request->hasfile('agenda_photo')){
            $request->file('agenda_photo')->move('images/foto-agenda/', $request->file('agenda_photo')->getClientOriginalName());
            $data->agenda_photo = $request->file('agenda_photo')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admin-agenda');
    }

    public function editagenda($id)
    {
        $data = agenda::find($id);
        return view('admin.agenda.editagenda', compact('data'));
    }

    public function updateagenda(Request $request , $id){
        $data = agenda::find($id);
        // dd($data);
        $data->update($request->all());
        // if($request->hasfile('agenda_photo')){
        //     $request->file('agenda_photo')->move('images/foto-agenda/', $request->file('agenda_photo')->getClientOriginalName());
        //     $data->agenda_photo = $request->file('agenda_photo')->getClientOriginalName();
        //     $data->save();
        // }

        
        
        return redirect()->route('admin-agenda');
    }

    public function deleteagenda($id){
        $data = agenda::find($id);
        

        $data->delete();
        return redirect()->route('admin-agenda');
    }
}
