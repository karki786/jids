<?php

namespace App\Http\Controllers\Frontend;

use App\HeaderImage;
use App\Http\Controllers\Controller;
use App\Page;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
         $data=Team::all();
        $aboutImage = HeaderImage::where('slug', 'team-image')->first();

        return view('frontend.team.team',compact('data','aboutImage'));
    }
}
