<?php

namespace App\Http\Controllers\Frontend;

use App\HeaderImage;
use App\Http\Controllers\Controller;
use App\News;
use App\Page;
use App\Project;
use Illuminate\Http\Request;
use League\CommonMark\Block\Renderer\HeadingRenderer;

class ProjectController extends Controller
{

    public function __Construct(Project $project)
    {
        $this->project = $project;
    }

    public function project()
    {

        $project = $this->project->orderBy('created_at', 'desc')->get();
        $news = News::orderBy('created_at', 'asc')
            ->take(3)->get();
        $aboutImage = HeaderImage::where('slug', 'project-image')->first();

        return view('frontend.project.project-list', compact('project', 'news','aboutImage'));
    }

    public function projectDetails($id)
    {

        $projectDetail = Project::where('id', $id)->first();

        $project = $this->project->orderBy('created_at', 'desc')->take(3)->get();
        $aboutImage = HeaderImage::where('slug', 'project-image')->first();

        return view('frontend.project.project-detail', compact('projectDetail', 'project','aboutImage'));
    }
}
