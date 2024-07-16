<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RainfallController extends Controller
{
    public function index()
    {
        return view('rainfull.index');
    }
}
