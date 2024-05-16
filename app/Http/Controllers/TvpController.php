<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvpController extends Controller
{
    public function index(){
        return view('tvp');
    }
}
