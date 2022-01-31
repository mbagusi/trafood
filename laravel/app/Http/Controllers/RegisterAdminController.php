<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

class RegisterAdminController extends Controller
{
    public function create()
    {
        return view('admin.register-admin');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:3|max:50',
        ]);
        $admin = new Admin();
        $admin->username = $validateData['username'];
        $admin->password = $validateData['password'];

        $admin->timestamps = false;
        $admin->save();
        $request->session()->flash('pesan', 'Add User Berhasil');
        return redirect()->route('addadmin.create');
    }
}
