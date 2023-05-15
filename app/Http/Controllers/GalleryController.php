<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){
        return view('gallery');
    }


    public function pictureGallery(){
        return view('pictureGallery');
    }

    public function videoGallery(){
        return view('videoGallery');
    }
}
