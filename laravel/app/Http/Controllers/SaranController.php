<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saran;

class SaranController extends Controller
{
    public function create()
    {
        return view('index.index');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'deskripsi' => '',
        ]);

        $saran = new Saran();
        $saran->nama = $validateData['nama'];
        $saran->email = $validateData['email'];
        $saran->deskripsi = $validateData['deskripsi'];

        $saran->timestamps = false;
        $saran->save();
        $request->session()->flash('pesan', 'Kritik & Saran Terkirim!');
        return redirect()->route('saran.saranCreate');
    }

    public function show(){
        $saran = Saran::all();
        return view('admin.form-saran',['sarans' => $saran]);
    }

    public function destroy(Request $request, $id)
    {
        $result = Saran::FindOrFail($id);
        $result->delete();
        $request->session()->flash('pesan', 'Hapus data berhasil');
        return redirect()->route('saran.saranShow');
    }
}
