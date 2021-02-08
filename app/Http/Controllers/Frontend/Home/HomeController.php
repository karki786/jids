<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Banner;
use App\Http\Controllers\Controller;
use App\News;
use App\Page;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function index()
    {

        $data['banner'] = Banner::where('status', 'active')->get();
        $data['projects'] = Project::orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        $data['news'] = News::orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        $data['aboutData'] = Page::where('slug', 'about-english')->first();
        return view('frontend.home.index', $data);
    }


}
