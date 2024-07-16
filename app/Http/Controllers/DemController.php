<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemController extends Controller
{
    public function index()
    {
        return view('dem.index');
    }
}
