<?php

namespace App\Http\Controllers\Frontend;

use App\ApplyJob;
use App\HeaderImage;
use App\Http\Controllers\Controller;
use App\Job;
use App\News;
use App\Page;
use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function __construct(ApplyJob $applyJob)
    {
        $this->model = $applyJob;

    }

    public function careerList()
    {
        $jobs = Job::orderBy('created_at', 'asc')->get();
        $aboutImage = HeaderImage::where('slug', 'job-image')->first();
        return view('frontend.job.job-list', compact('jobs','aboutImage'));
    }

    public function careerDetails($id)
    {
        $aboutImage = HeaderImage::where('slug', 'job-image')->first();

        $job = Job::where('id', $id)->first();
        return view('frontend.job.job-detail', compact('job','aboutImage'));
    }

    public function storeCareer(Request $request,$id)
    {

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['job_id'] = $id;


        $file = $request->file('file');
        try {
            if ($request->hasFile('file')) {
                $data['file'] = $this->model->upload($file);
            }

            $test = ApplyJob::create($data);

            return back()->withErrors(['alert-success' => 'Successfully Added']);
        } catch (\Exception $e) {

            return back()->withErrors(['alert-danger' => 'Data was not saved!']);


        }
    }
}