<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PvpController extends Controller
{
    public function index(){
        return view('pvp');
    }
}
