<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(Project $project)
    {
        $this->model = $project;
        $this->pageTitle = "Upcoming Project";
        $this->redirectUrl = 'system/project';
    }

    public function index(Request $request)
    {
        $pageTitle = $this->pageTitle;
        $datas = $this->model->getAllData($request->all());

        return view('Admin.project.index', compact('datas','pageTitle'));
    }

    public function create()
    {
        return view('Admin.project.create');
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $file = $request->file('image');
        try {
            if ($request->hasFile('image')) {
                $data['image'] = $this->model->upload($file);
            }

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


        return view('Admin.project.edit', compact('data', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {


        try {
            $data = $this->model->find($id);

            $file = $request->file('image');

            if (empty($data)) {
                return redirect($this->redirectUrl)->withErrors(['alert-danger' => 'Data was not found!']);
            }
            $attributes = $request->all();

            if ($request->hasFile('image')) {
                $path = 'uploads/project/' . $data->image;

                if ($data->image) {
                    unlink($path);
                }
                $attributes['image'] = $this->model->upload($file);
            }

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
                if (isset($data->image)) {
                    $path = 'uploads/project/' . $data->image;
                    unlink($path);
                }
                $data->delete();
                return redirect($this->redirectUrl)->withErrors(['alert-success' => 'Deletion successful!']);
            } catch (\Exception $e) {
                return redirect($this->redirectUrl)->withErrors(['alert-danger' => $e->getMessage()]);
            }
        } else {
            return redirect($this->redirectUrl)->withErrors(['alert-danger' => "Data not found!"]);

        }
    }
}
