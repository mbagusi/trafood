<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodJateng;

class FoodJatengController extends Controller
{
    public function create(){
        return view('admin.create-food-jateng');
    }

    public function store(Request $request){
    $validateData = $request->validate([
        'nama' => 'required',
        'jenis' => 'required',
        'harga' => 'required',
        'image' => 'required|file|image|max:2000',
        ]);
        $food_jateng = new FoodJateng();
        $food_jateng->nama = $validateData['nama'];
        $food_jateng->jenis = $validateData['jenis'];
        $food_jateng->harga = $validateData['harga'];
        if($request->hasFile('image'))
        {
        $extFile = $request->image->getClientOriginalExtension();
        $namaFile = 'user-'.time().".".$extFile;
        $path = $request->image->move('assets/img/makanan',$namaFile);
        $food_jateng->image = $path;
        }
        $food_jateng->timestamps=false; 
        $food_jateng->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('admin.form-jateng');
    }

    public function index(){
        $food_jatengs = FoodJateng::all();
        return view('admin.form-food-jateng',['foods' => $food_jatengs]);
    }

    public function edit($foods_nama){
        $result = FoodJateng::findOrFail($foods_nama);
        return view('admin.edit-food-jateng',['foods' => $result]);

    }
}
