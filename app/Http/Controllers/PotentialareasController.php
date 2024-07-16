<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotentialareasController extends Controller
{
    public function index()
    {
        return view('potentialareas.index');
    }
}
