<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaPvpController extends Controller
{
    public function index(){
        return view('kelolapvp');
    }
}
