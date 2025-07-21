<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{    
    public function indexTwo()
    {
        return view('home/indexTwo');
    }

    public function index()
    {
        return view('home/indexTwo');
    }

}
