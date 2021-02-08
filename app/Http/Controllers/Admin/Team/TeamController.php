<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct(Team $team)
    {
        $this->model = $team;
        $this->pageTitle = "Team Management";
        $this->redirectUrl = 'system/team';
    }

    public function index(Request $request)
    {
        $datas = $this->model->getAllData($request->all());
        $pageTitle = $this->pageTitle;

        return view('Admin.team.index', compact('datas', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = $this->pageTitle;
        return view('Admin.team.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['intro_text'] = $request->intro_text;
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


        return view('Admin.team.edit', compact('data', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {


        try {
            $data = $this->model->find($id);
            if (empty($data)) {
                return redirect($this->redirectUrl)->withErrors(['alert-danger' => 'Data was not found!']);
            }
            $file = $request->file('image');
            if ($file) {
                if ($data->image) {
                    $path = public_path('uploads/team');

                    if (!empty($data->image) && file_exists($path . '/' . $data->image)) {

                        unlink(($path . '/' . $data->image));
                    }
                }
                $attributes = $request->all();

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
