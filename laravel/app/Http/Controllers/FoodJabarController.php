<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodJabar;

class FoodJabarController extends Controller
{

    public function create(){
        return view('admin.create-food-jabar');
    }

    public function store(Request $request){
    $validateData = $request->validate([
        'nama' => 'required',
        'jenis' => 'required',
        'harga' => 'required',
        'image' => 'required|file|image|max:2000',
        ]);
        $food_jabar = new FoodJabar();
        $food_jabar->nama = $validateData['nama'];
        $food_jabar->jenis = $validateData['jenis'];
        $food_jabar->harga = $validateData['harga'];
        if($request->hasFile('image'))
        {
        $extFile = $request->image->getClientOriginalExtension();
        $namaFile = 'user-'.time().".".$extFile;
        $path = $request->image->move('assets/img/makanan',$namaFile);
        $food_jabar->image = $path;
        }
        $food_jabar->timestamps=false; 
        $food_jabar->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('admin.form-jabar');
    }

    public function index(){
        $food_jabars = FoodJabar::all();
        return view('admin.form-food-jabar',['foods' => $food_jabars]);
    }

    public function edit($foods_nama)
    {
        $result = FoodJabar::findOrFail($foods_nama);
        return view('admin.edit-food-jabar', ['foods' => $result]);
    }

    public function update($foods_nama, Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'image' => 'required|file|image|max:2000',
        ]);
        $food_jabar = FoodJabar::findOrFail($foods_nama);
        $food_jabar->nama = $validateData['nama'];
        $food_jabar->jenis = $validateData['jenis'];
        $food_jabar->harga = $validateData['harga'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/img/makanan', $namaFile);
            $food_jabar->image = $path;
        }
        $food_jabar->timestamps = false;
        $food_jabar->save();
        $request->session()->flash('pesan', 'Update data berhasil');
        return view('admin.edit-food-jabar', ['foods' => $food_jabar]);
    }

    public function destroy(Request $request, $foods_id)
    {
        $result = FoodJabar::find($foods_id);
        $result->delete();
        $request->session()->flash('pesan', 'Hapus data berhasil');
        return redirect()->route('admin.indexJabar');
    }

    public function show()
    {
        $food_jabars = FoodJabar::all();
        return view('food.food-jabar', ['foods' => $food_jabars]);
    }
}