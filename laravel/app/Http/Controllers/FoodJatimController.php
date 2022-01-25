<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FoodJatim;

class FoodJatimController extends Controller
{
    public function create(){
        return view('admin.create-food-jatim');
    }

    public function store(Request $request){
    $validateData = $request->validate([
        'nama' => 'required',
        'jenis' => 'required',
        'harga' => 'required',
        'image' => 'required|file|image|max:2000',
        ]);
        $food_jatim = new FoodJatim();
        $food_jatim->nama = $validateData['nama'];
        $food_jatim->jenis = $validateData['jenis'];
        $food_jatim->harga = $validateData['harga'];
        if($request->hasFile('image'))
        {
        $extFile = $request->image->getClientOriginalExtension();
        $namaFile = 'user-'.time().".".$extFile;
        $path = $request->image->move('assets/img/makanan',$namaFile);
        $food_jatim->image = $path;
        }
        $food_jatim->timestamps=false; 
        $food_jatim->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('admin.form-jatim');
    }

    public function index(){
        $food_jatims = FoodJatim::all();
        return view('admin.form-food-jatim',['foods' => $food_jatims]);
    }

    public function edit($foods_nama)
    {
        $result = FoodJatim::findOrFail($foods_nama);
        return view('admin.edit-food-jatim', ['foods' => $result]);
    }

    public function update($foods_nama, Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'image' => 'required|file|image|max:2000',
        ]);
        $food_jatim = FoodJatim::findOrFail($foods_nama);
        $food_jatim->nama = $validateData['nama'];
        $food_jatim->jenis = $validateData['jenis'];
        $food_jatim->harga = $validateData['harga'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/img/makanan', $namaFile);
            $food_jatim->image = $path;
        }
        $food_jatim->timestamps = false;
        $food_jatim->save();
        $request->session()->flash('pesan', 'Update data berhasil');
        return view('admin.edit-food-jatim', ['foods' => $food_jatim]);
    }

    public function destroy(Request $request, $foods_id)
    {
        $result = FoodJatim::find($foods_id);
        $result->delete();
        $request->session()->flash('pesan', 'Hapus data berhasil');
        return redirect()->route('admin.indexJatim');
    }
}
