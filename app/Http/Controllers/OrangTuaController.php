<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    public function homepage()
    {
        return view('orangTua.homepage');
    }
}
