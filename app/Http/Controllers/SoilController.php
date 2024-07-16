<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoilController extends Controller
{
    public function index()
    {
        return view('soil.index');
    }
}
