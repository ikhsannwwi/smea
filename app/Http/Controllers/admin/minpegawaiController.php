<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\pegawai;

class minpegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::paginate(5);
        

        return view('admin.pegawai.pegawai', compact('pegawai'));
    }

    public function tambahpegawai()
    {
        $tambahdata = pegawai::all();

        return view('admin.pegawai.tambahpegawai', compact('tambahdata'));
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function insertdatapegawai(Request $request)
    {
        $data = pegawai::create($request->all());
        
        if($request->hasfile('pegawai_photo')){
            $nama_baru = $this->generateRandomString(32) . '.' . $request->file('pegawai_photo')->extension();
            $request->file('pegawai_photo')->move('images/foto-pegawai/', $nama_baru);
            $data->pegawai_photo = $nama_baru;
            
            $data->save();
        }

        return redirect()->route('admin-pegawai');
    }

    public function editpegawai($id)
    {
        $data = pegawai::find($id);
        return view('admin.pegawai.editpegawai', compact('data'));
    }

    public function updatepegawai(Request $request , $id){
        $data = pegawai::find($id);
        
        if(File_exists(public_path('images/foto-pegawai/'.$data->pegawai_photo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-pegawai/'.$data->pegawai_photo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        
            // unlink(public_path('images/foto-pegawai/'.$data->pegawai_photo));
        
        $data->update($request->all());
        
        if($request->hasfile('pegawai_photo')){
            
            $nama_baru = $this->generateRandomString(32) . '.' . $request->file('pegawai_photo')->extension();
            $request->file('pegawai_photo')->move('images/foto-pegawai/', $nama_baru);
            $data->pegawai_photo = $nama_baru;
            
            $data->save();
        }
            
        

        
        
        return redirect()->route('admin-pegawai');
    }

    public function deletepegawai($id){
        $data = pegawai::find($id);
        
        if(File_exists(public_path('images/foto-pegawai/'.$data->pegawai_photo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-pegawai/'.$data->pegawai_photo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-pegawai/'.$data->pegawai_photo));
        echo public_path('images/foto-pegawai/'.$data->pegawai_photo);
        $data->delete();
        
        return redirect()->back();
    }
}
