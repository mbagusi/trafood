<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodBanten;

class FoodBantenController extends Controller
{
    public function create()
    {
        return view('admin.create-food-banten');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'image' => 'required|file|image|max:2000',
        ]);
        $food_banten = new FoodBanten();
        $food_banten->nama = $validateData['nama'];
        $food_banten->jenis = $validateData['jenis'];
        $food_banten->harga = $validateData['harga'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/img/makanan', $namaFile);
            $food_banten->image = $path;
        }
        $food_banten->timestamps = false;
        $food_banten->save();
        $request->session()->flash('pesan', 'Penambahan data berhasil');
        return redirect()->route('admin.form-banten');
    }

    public function index()
    {
        $food_bantens = FoodBanten::all();
        return view('admin.form-food-banten', ['foods' => $food_bantens]);
    }

    public function edit($foods_nama)
    {
        $result = FoodBanten::findOrFail($foods_nama);
        return view('admin.edit-food-banten', ['foods' => $result]);
    }

    public function update($foods_nama, Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'image' => 'required|file|image|max:2000',
        ]);
        $food_banten = FoodBanten::findOrFail($foods_nama);
        $food_banten->nama = $validateData['nama'];
        $food_banten->jenis = $validateData['jenis'];
        $food_banten->harga = $validateData['harga'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/img/makanan', $namaFile);
            $food_banten->image = $path;
        }
        $food_banten->timestamps = false;
        $food_banten->save();
        $request->session()->flash('pesan', 'Update data berhasil');
        return view('admin.edit-food-banten', ['foods' => $food_banten]);
    }

    public function destroy(Request $request, $foods_id)
    {
        $result = FoodBanten::find($foods_id);
        $result->delete();
        $request->session()->flash('pesan', 'Hapus data berhasil');
        return redirect()->route('admin.indexBanten');
    }

    public function show()
    {
        $food_bantens = FoodBanten::all();
        return view('food.food-banten', ['foods' => $food_bantens]);
    }
}
