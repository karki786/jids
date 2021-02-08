<?php

namespace App\Http\Controllers\Frontend;

use App\HeaderImage;
use App\Http\Controllers\Controller;
use App\News;
use App\Page;
use App\Pdf;
use App\Project;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $aboutEnglishData = Page::where('slug', 'about-english')->first();
        $aboutNepaliData = Page::where('slug', 'about-Nepali')->first();
        $aboutImage = HeaderImage::where('slug', 'about-image')->first();
        $news = News::orderBY('created_at', 'DESC')->take(3)->get();
        $project = Project::orderBY('created_at', 'DESC')->take(3)->get();
        return view('frontend.about.about', compact('news', 'project', 'aboutEnglishData','aboutImage','aboutNepaliData'));
    }

    public function report()
    {
        $news = News::orderBY('created_at', 'DESC')->take(3)->get();
        $project = Project::orderBY('created_at', 'DESC')->take(3)->get();
        $aboutImage = HeaderImage::where('slug', 'report-image')->first();
        $pdf=Pdf::all();
        return view('frontend.about.report', compact('news', 'project','pdf','aboutImage'));
    }



    public function committee()
    {
        $news = News::orderBY('created_at', 'DESC')->take(3)->get();
        $project = Project::orderBY('created_at', 'DESC')->take(3)->get();
        $committeeEnglish=Page::where('slug', 'committee-english')->first();
        $committeeNepali=Page::where('slug', 'committee-nepali')->first();
        $aboutImage = HeaderImage::where('slug', 'committee-image')->first();
        return view('frontend.about.committe', compact('news', 'project','committeeEnglish','aboutImage','committeeNepali'));
    }

    public function downloadReport($id)
    {

        $pdf = Pdf::find($id);
        $pdfPath = public_path() . '/uploads/pdf/';
        if ($pdf->file !== " ") {
            $pathToFile = $pdfPath . $pdf->file;

            if (file_exists($pathToFile)) {
                return response()->download($pathToFile);
            } else {
                return redirect()->back()->withErrors(['alert-danger' => 'Sorry,the resume for ' . $pdf->title . ' was not found!']);
            }
        } else {
            return redirect()->back()->withErrors(['alert-danger' => 'Sorry,the resume for ' . $pdf->title . ' was not found!']);
        }


    }
}
