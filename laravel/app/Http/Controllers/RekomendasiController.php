<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rekomendasi;

class RekomendasiController extends Controller
{
    public function create(){
        return view('admin.create-rekomendasi');
    }

    public function store(Request $request){
    $validateData = $request->validate([
        'nama' => 'required',
        'jenis' => 'required',
        'harga' => 'required',
        'image' => 'required|file|image|max:2000',
        ]);
        $rekomendasi = new Rekomendasi();
        $rekomendasi->nama = $validateData['nama'];
        $rekomendasi->jenis = $validateData['jenis'];
        $rekomendasi->harga = $validateData['harga'];
        if($request->hasFile('image'))
        {
        $extFile = $request->image->getClientOriginalExtension();
        $namaFile = 'user-'.time().".".$extFile;
        $path = $request->image->move('assets/img/makanan',$namaFile);
        $rekomendasi->image = $path;
        }
        $rekomendasi->timestamps=false; 
        $rekomendasi->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('admin.indexRekomendasi');
    }

    public function index(){
        $rekomendasis = Rekomendasi::all();
        return view('admin.form-rekomendasi',['foods' => $rekomendasis]);
    }

    public function edit($foods_nama)
    {
        $result = Rekomendasi::findOrFail($foods_nama);
        return view('admin.edit-rekomendasi', ['foods' => $result]);
    }

    public function update($foods_nama, Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'image' => 'required|file|image|max:2000',
        ]);
        $rekomendasi = Rekomendasi::findOrFail($foods_nama);
        $rekomendasi->nama = $validateData['nama'];
        $rekomendasi->jenis = $validateData['jenis'];
        $rekomendasi->harga = $validateData['harga'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/img/makanan', $namaFile);
            $rekomendasi->image = $path;
        }
        $rekomendasi->timestamps = false;
        $rekomendasi->save();
        $request->session()->flash('pesan', 'Update data berhasil');
        return view('admin.edit-rekomendasi', ['foods' => $rekomendasi]);
    }

    public function destroy(Request $request, $foods_id)
    {
        $result = Rekomendasi::find($foods_id);
        $result->delete();
        $request->session()->flash('pesan', 'Hapus data berhasil');
        return redirect()->route('admin.indexRekomendasi');
    }

    public function show()
    {
        $rekomendasis = Rekomendasi::all();
        return view('kategori.list-kategori', ['foods' => $rekomendasis]);
    }
}
