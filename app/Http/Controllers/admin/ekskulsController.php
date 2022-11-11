<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\File;
use App\Models\ekskul;


class ekskulsController extends Controller
{
    public function index()
    {
        $ekskul = ekskul::paginate(5);
        

        return view('admin.ekstrakulikuler.ekskul', compact('ekskul'));
    }

    public function tambahekskuls()
    {
        $tambahdata = ekskul::all();

        return view('admin.ekstrakulikuler.tambaheskul', compact('tambahdata'));
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

    public function insertdataekskuls(Request $request)
    {
        $data = ekskul::create($request->all());
        
        if($request->hasfile('ekskul_photo')){
            $nama_baru = $this->generateRandomString(32) . '.' . $request->file('ekskul_photo')->extension();
            $request->file('ekskul_photo')->move('images/foto-ekskul/', $nama_baru);
            $data->ekskul_photo = $nama_baru;
            
            $data->save();
        }

        return redirect()->route('admin-ekstrakulikuler');
    }

    public function editekskuls($id)
    {
        $data = ekskul::find($id);
        return view('admin.ekstrakulikuler.editekskuls', compact('data'));
    }

    public function updateekskuls(Request $request , $id){
        $data = ekskul::find($id);
        unlink(public_path('images/foto-ekskul/'.$data->ekskul_photo));
    
        $data->update($request->all());
        
        if($request->hasfile('ekskul_photo')){
           
            if(File_exists(public_path('images/foto-ekskul/'.$data->ekskul_photo))){ //either you can use file path instead of $data->image
               unlink(public_path('images/foto-ekskul/'.$data->ekskul_photo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
            $request->file('ekskul_photo')->move('images/foto-ekskul/', $request->file('ekskul_photo')->getClientOriginalName());
            $data->ekskul_photo = $request->file('ekskul_photo')->getClientOriginalName();
            $data->save();
        }

        
        
        return redirect()->route('admin-ekstrakulikuler');
    }

    public function deleteekskuls($id){
        $data = ekskul::find($id);
        
        if(File_exists(public_path('images/foto-ekskul/'.$data->ekskul_photo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-ekskul/'.$data->ekskul_photo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-ekskul/'.$data->ekskul_photo));
        echo public_path('images/foto-ekskul/'.$data->ekskul_photo);
        $data->delete();
        
        return redirect()->back();
    }
}


