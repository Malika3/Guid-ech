<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlHotelsRegister extends Controller
{
     public function index()
    {
        return view('formulaires.registerHotels');
    }
}
