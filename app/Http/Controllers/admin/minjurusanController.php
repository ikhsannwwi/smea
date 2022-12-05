<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\jurusan;


class minjurusanController extends Controller
{
    public function index()
    {
        $jurusan = jurusan::paginate(5);
        

        return view('admin.jurusan.jurusan', compact('jurusan'));
    }

    public function tambahjurusan()
    {
        $tambahdata = jurusan::all();

        return view('admin.jurusan.tambahjurusan', compact('tambahdata'));
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

    public function insertdatajurusan(Request $request)
    {
        $data = jurusan::create($request->all());
        
        if($request->hasfile('jurusan_photo')){
            $nama_baru = $this->generateRandomString(32) . '.' . $request->file('jurusan_photo')->extension();
            $request->file('jurusan_photo')->move('images/foto-jurusan/', $nama_baru);
            $data->jurusan_photo = $nama_baru;
            
            $data->save();
        }

        return redirect()->route('admin-jurusan');
    }

    public function editjurusan($id)
    {
        $data = jurusan::find($id);
        return view('admin.jurusan.editjurusan', compact('data'));
    }

    public function updatejurusan(Request $request , $id){
        $data = jurusan::find($id);
        
        
        
            unlink(public_path('images/foto-jurusan/'.$data->jurusan_photo));
        
        $data->update($request->all());
        
        if($request->hasfile('jurusan_photo')){
            
            $nama_baru = $this->generateRandomString(32) . '.' . $request->file('jurusan_photo')->extension();
            $request->file('jurusan_photo')->move('images/foto-jurusan/', $nama_baru);
            $data->jurusan_photo = $nama_baru;
            
            $data->save();
        }
            
        

        
        
        return redirect()->route('admin-jurusan');
    }

    public function deletejurusan($id){
        $data = jurusan::find($id);
        
        if(File_exists(public_path('images/foto-jurusan/'.$data->jurusan_photo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-jurusan/'.$data->jurusan_photo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-jurusan/'.$data->jurusan_photo));
        echo public_path('images/foto-jurusan/'.$data->jurusan_photo);
        $data->delete();
        
        return redirect()->back();
    }
}
