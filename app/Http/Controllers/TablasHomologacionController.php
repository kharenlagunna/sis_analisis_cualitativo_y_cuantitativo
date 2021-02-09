<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablasHomologacionController extends Controller
{
    //

    public function index(){
        return view('TablasHomologacion.index');
    }

}
