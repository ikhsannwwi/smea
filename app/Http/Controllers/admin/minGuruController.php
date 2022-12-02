<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\File;
use App\Models\guru;


class minGuruController extends Controller
{
    public function index()
    {
        $guru = guru::paginate(5);
        

        return view('admin.guru.guru', compact('guru'));
    }

    public function tambahguru()
    {
        $tambahdata = guru::all();

        return view('admin.guru.tambahguru', compact('tambahdata'));
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

    public function insertdataguru(Request $request)
    {
        $data = guru::create($request->all());
        
        if($request->hasfile('guru_photo')){
            $nama_baru = $this->generateRandomString(32) . '.' . $request->file('guru_photo')->extension();
            $request->file('guru_photo')->move('images/foto-guru/', $nama_baru);
            $data->guru_photo = $nama_baru;
            
            $data->save();
        }

        return redirect()->route('admin-guru');
    }

    public function editguru($id)
    {
        $data = guru::find($id);
        return view('admin.guru.editguru', compact('data'));
    }

    public function updateguru(Request $request , $id){
        $data = guru::find($id);
        unlink(public_path('images/foto-guru/'.$data->guru_photo));
    
        $data->update($request->all());
        
        if($request->hasfile('guru_photo')){
           
            if(File_exists(public_path('images/foto-guru/'.$data->guru_photo))){ //either you can use file path instead of $data->image
               unlink(public_path('images/foto-guru/'.$data->guru_photo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
            $request->file('guru_photo')->move('images/foto-guru/', $request->file('guru_photo')->getClientOriginalName());
            $data->guru_photo = $request->file('guru_photo')->getClientOriginalName();
            $data->save();
        }

        
        
        return redirect()->route('admin-guru');
    }

    public function deleteguru($id){
        $data = guru::find($id);
        
        if(File_exists(public_path('images/foto-guru/'.$data->guru_photo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-guru/'.$data->guru_photo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-guru/'.$data->guru_photo));
        echo public_path('images/foto-guru/'.$data->guru_photo);
        $data->delete();
        
        return redirect()->back();
    }
}


