<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Models\user;


class usersController extends Controller
{
    public function index()
    {
        $user = user::paginate(5);

        return view('admin.user.users', compact('user'));
    }

    public function tambahusers()
    {
        $tambahdata = user::all();

        return view('admin.user.tambahusers', compact('tambahdata'));
    }

    public function insertdatausers(Request $request)
    {
        $data = user::create($request->all());

        if($request->hasfile('foto_users')){
            $request->file('foto_users')->move('fotousers/', $request->file('foto_users')->getClientOriginalName());
            $data->foto_users = $request->file('foto_users')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('administrator');
    }

    public function editusers($id)
    {
        $data = user::find($id);
        return view('admin.users.editusers', compact('data'));
    }

    public function updateusers(Request $request , $id){
        $data = user::find($id);
        $data->update($request->all());
        if($request->hasfile('foto_users')){
            $request->file('foto_users')->move('fotousers/', $request->file('foto_users')->getClientOriginalName());
            $data->foto_users = $request->file('foto_users')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('administrator');
    }

    public function deleteusers($id){
        $data = user::find($id);
        $dest = 'fotousers/'.$data->fotousers;
        if(File::exists($dest)) {
            File::delete($dest);
        }
        
        $data->delete();
        return redirect()->route('administrator');
    }
}


