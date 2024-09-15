<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TailwindController extends Controller
{
    public function tailwind(){
        return view('tailwind.tailwind');
    }
}
