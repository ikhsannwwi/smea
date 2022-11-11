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

    public function tambahagendas()
    {
        $tambahdata = agenda::all();

        return view('admin.agenda.tambaheskul', compact('tambahdata'));
    }

    public function insertdataagendas(Request $request)
    {
        $data = agenda::create($request->all());

        if($request->hasfile('agenda_photo')){
            $request->file('agenda_photo')->move('images/foto-agenda/', $request->file('agenda_photo')->getClientOriginalName());
            $data->agenda_photo = $request->file('agenda_photo')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admin-agenda');
    }

    public function editagendas($id)
    {
        $data = agenda::find($id);
        return view('admin.agenda.editagenda', compact('data'));
    }

    public function updateagendas(Request $request , $id){
        $data = agenda::find($id);
        $data->update($request->all());
        // if($request->hasfile('agenda_photo')){
        //     $request->file('agenda_photo')->move('images/foto-agenda/', $request->file('agenda_photo')->getClientOriginalName());
        //     $data->agenda_photo = $request->file('agenda_photo')->getClientOriginalName();
        //     $data->save();
        // }

        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png|max:10000',
        ]);
        // Let get the current image
        $user = agenda::user();
        $currentImage = $user->image;
        // Let compare the current Image with the new Image if are not the same
        $image = $request->file('agenda_photo');
        // The Image is required which means it will be set, so we don't need to che isset($image)
        if ($image != $currentImage) {
          // To make our code cleaner let define a directory for DRY code
            $filePath = public_path('images/users/');
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            if (!File::isDirectory($filePath)){
                File::makeDirectory($filePath, 0777, true, true);
            }
            $image->move($filePath, $imageName);
            // After the Image has been updated then we can delete the old Image if exists
            if (file_exists($filePath.$currentImage)){
                @unlink($filePath.$currentImage);
            }
        } else {
          $imageName = $currentImage;
        }
        //  SAVE CHANGES TO THE DATA BASE
        $user->image = $imageName;
        $user->save();
        
        return redirect()->route('admin-agenda');
    }

    public function deleteagendas($id){
        $data = agenda::find($id);
        $dest = 'fotoagenda/'.$data->fotoagenda;
        if(File::exists($dest)) {
            File::delete($dest);
        }
        
        $data->delete();
        return redirect()->route('admin-agenda');
    }
}
