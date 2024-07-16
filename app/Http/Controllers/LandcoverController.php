<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandcoverController extends Controller
{
    public function index()
    {
        return view('Landcover.index');
    }
}
