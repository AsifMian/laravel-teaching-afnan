<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialistsController extends Controller

{

    public function specialists(){
        return view('ourSpecialists');
    }


    public function deenaSelais(){
        return view('deenaSelais');
    }

    public function sarahFarooq(){
        return view('sarahFarooq');
    }

    public function nahidButti(){
        return view('nahidButti');
    }

    
}
