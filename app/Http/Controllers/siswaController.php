<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;
use App\Models\siswa;


class siswaController extends Controller
{
    public function index()
    {
        $data = siswa::all();

        return view('admin.siswa.siswa', compact('data'));
    }

    public function tambahsiswa()
    {
        $data = siswa::all();

        return view('admin.siswa.tambahsiswa', compact('data'));
    }

    public function insertdatasiswa(Request $request)
    {
        $data = siswa::create($request->all());

        if($request->hasfile('foto_siswa')){
            $request->file('foto_siswa')->move('fotosiswa/', $request->file('foto_siswa')->getClientOriginalName());
            $data->foto_siswa = $request->file('foto_siswa')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('administrator');
    }

    public function editsiswa($id)
    {
        $data = siswa::find($id);
        return view('admin.siswa.editsiswa', compact('data'));
    }

    public function updatesiswa(Request $request , $id){
        $data = siswa::find($id);
        $data->update($request->all());
        if($request->hasfile('foto_siswa')){
            $request->file('foto_siswa')->move('fotosiswa/', $request->file('foto_siswa')->getClientOriginalName());
            $data->foto_siswa = $request->file('foto_siswa')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('administrator');
    }

    public function deletesiswa($id){
        $data = siswa::find($id);
        $dest = 'fotosiswa/'.$data->fotosiswa;
        if(File::exists($dest)) {
            File::delete($dest);
        }
        
        $data->delete();
        return redirect()->route('administrator');
    }
}
