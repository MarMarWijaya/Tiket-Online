<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LainController extends Controller
{
    public function tentang(){
        return view('tentang');
    }
}
