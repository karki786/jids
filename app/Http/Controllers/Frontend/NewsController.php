<?php

namespace App\Http\Controllers\Frontend;

use App\HeaderImage;
use App\Http\Controllers\Controller;
use App\News;
use App\Project;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::orderBy('created_at', 'asc')->get();
        $project= Project::orderBy('created_at', 'asc')
            ->take(3)->get();
        $aboutImage = HeaderImage::where('slug', 'news-image')->first();

        return view('frontend.news.news-list', compact('news','project','aboutImage'));
    }

    public function newsdetails($id)
    {
        $newsDetail = News::where('id', $id)->first();
        $news= News::orderBy('created_at', 'asc')
            ->take(3)->get();
        $aboutImage = HeaderImage::where('slug', 'news-image')->first();

        return view('frontend.news.news-detail', compact('newsDetail','news','aboutImage'));
    }
}
