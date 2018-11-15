<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class indexController extends Controller
{
    public function load(){
        //$publication = new Publication;
        $publications = Publication::get();
        return view('welcome')->with(compact('publications'));
    }
}
