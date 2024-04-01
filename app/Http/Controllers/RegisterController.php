<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function form()
    {
        return view('register');
    }

    public function simpan(Request $req)
    {
        $req->validate([
            'nama'=>'required|min:4',
            'email'=>'required|email|unique:admins,email',
            'role'=>'required|in:admin,peminjam',
            'password'=>'required|min:4|confirmed'
        ]);

        Admin::create([
            'name'=>$req->nama,
            'email'=>$req->email,
            'role'=>$req->role,
            'password'=>bcrypt($req->password) 
        ]);

        return redirect()->route('admin.login')->with('pesan','berhasil');
    }
}
