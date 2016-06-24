<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaginasController extends Controller
{
    public function VerIcopor(){
    	return view("icopor");
    }

     public function VerBovedillasCasetones(){
    	return view("bovedillas_casetones");
    }
}
