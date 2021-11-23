<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OrangTua;

class AdminController extends Controller {
    
    public function homepage() {
        return view('admin.homepage');
    }

    public function data() {
        return view('admin.data');
    }

    //ADD DATA ORANG TUA BY ADMIN
    public function insert_ortu() {
        $ortu = new OrangTua;
        return view('admin.ortu.insert', compact(
            'ortu'
        ));
    }

    public function store_ortu(Request $request) {
        $ortu = new OrangTua;
        $ortu->nama = $request->nama;
        $ortu->ttl = $request->ttl;
        $ortu->alamat = $request->alamat;
        $ortu->email = $request->email;
        $ortu->save();

        return redirect('homepageAdmin')->with('success', "Data berhasil disimpan");
    }

    //UPDATE DATA ORTU
}
