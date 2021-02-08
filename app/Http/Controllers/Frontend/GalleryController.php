<?php

namespace App\Http\Controllers\Frontend;

use App\Gallery;
use App\HeaderImage;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {

        $data = Gallery::all();
        $aboutImage = HeaderImage::where('slug', 'gallery-image')->first();

        return view('frontend.gallery.gallery', compact('data','aboutImage'));
    }
}
