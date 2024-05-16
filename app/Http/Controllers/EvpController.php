<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvpController extends Controller
{
    public function index(){
        return view('evp');
    }
}
