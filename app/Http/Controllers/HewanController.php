<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    //

    public function tambah(){
        return view('create');
    }

    public function create (Request $request){
        Hewan::create($request->all());
        return redirect()->route('tampildata');
    }

    public function tampildata(){
        $item = Hewan::all();
        return view('tampildata',compact('item'));
    }

    public function delete($id){
        $data = Hewan::find($id);
        $data->delete();
        return redirect()->route('tampildata');
    }

    public function tampilupdate($id){
        $data = Hewan::find($id);
        return view('tampilupdate',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Hewan::find($id);
        $data->update($request->all());
        
}

}