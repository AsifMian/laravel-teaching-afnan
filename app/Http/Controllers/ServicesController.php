<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){
        return view('ourServices');
    }
    

    public function orthopedic(){
        return view('orthopedic');
    }

    public function neuroRehab(){
        return view('neuroRehab');
    }

    public function lymphodema(){
        return view('lymphodema');
    }

    public function personalTrainer(){
        return view('personalTrainer');
    }
}
