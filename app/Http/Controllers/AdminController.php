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
}
