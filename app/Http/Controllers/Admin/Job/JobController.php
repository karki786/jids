<?php

namespace App\Http\Controllers\Admin\Job;

use App\ApplyJob;
use App\Http\Controllers\Controller;
use App\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class JobController extends Controller
{
    public function __construct(Job $job)
    {
        $this->model = $job;
        $this->pageTitle = "JOb Management";
        $this->redirectUrl = 'system/job';
    }

    public function index(Request $request)
    {
        $datas = $this->model->getAllData($request->all());
        $pageTitle = $this->pageTitle;

        return view('Admin.job.index', compact('datas', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = $this->pageTitle;
        return view('Admin.job.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['posted_date'] = Carbon::now()->format('Y-m-d');
        try {


            $this->model->create($data);
            return redirect($this->redirectUrl)->withErrors(['alert-success' => 'Successfully Added']);
        } catch (\Exception $e) {

            return redirect($this->redirectUrl)->withErrors(['alert-danger' => 'Data was not saved!']);


        }

    }

    public function edit($id)
    {

        $pageTitle = $this->pageTitle;
        $data = $this->model->find($id);

        if (empty($data)) {
            return redirect()->back()->withErrors(['alert-danger' => 'Data was not found!']);
        }


        return view('Admin.job.edit', compact('data', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {


        try {
            $data = $this->model->find($id);



            if (empty($data)) {
                return redirect($this->redirectUrl)->withErrors(['alert-danger' => 'Data was not found!']);
            }
            $attributes = $request->all();



            $data->update($attributes);
            return redirect($this->redirectUrl)->withErrors(['alert-success' => 'Successfully updated!']);
        } catch (\Exception $e) {
            return redirect($this->redirectUrl)->withErrors(['alert-danger' => $e->getMessage()]);
        }
    }

    public function delete($id)
    {

        if ($id != null && !is_numeric($id)) {
            return redirect($this->redirectUrl)->withErrors(['alert-danger' => "Data not found!"]);
        }


        $data = $this->model->find($id);
        if (isset($data)) {
            try {

                $data->delete();
                return redirect($this->redirectUrl)->withErrors(['alert-success' => 'Deletion successful!']);
            } catch (\Exception $e) {
                return redirect($this->redirectUrl)->withErrors(['alert-danger' => $e->getMessage()]);
            }
        } else {
            return redirect($this->redirectUrl)->withErrors(['alert-danger' => "Data not found!"]);

        }
    }

    public function view($id)
    {
        $datas=ApplyJob::where('job_id',$id)->get();

        return view('Admin.job.view', compact('datas'));
    }

    public function downloadCv($id)
    {

        $resume = ApplyJob::find($id);
        $resumePath = public_path() . '/uploads/career/';
        if ($resume->file !== " ") {
            $pathToFile = $resumePath . $resume->file;

            if (file_exists($pathToFile)) {
                return response()->download($pathToFile);
            } else {
                return redirect()->back()->withErrors(['alert-danger' => 'Sorry,the resume for ' . $resume->name . ' was not found!']);
            }
        } else {
            return redirect()->back()->withErrors(['alert-danger' => 'Sorry,the resume for ' . $resume->name . ' was not found!']);
        }


    }
}
