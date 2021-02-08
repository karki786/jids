<?php

namespace App\Http\Controllers\Admin\HeaderImage;

use App\HeaderImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderImageController extends Controller

{
    public function __construct(HeaderImage $headerImage)
    {
        $this->model = $headerImage;
        $this->pageTitle = "Header Image";
        $this->redirectUrl = 'system/headerImage';
    }

    public function index(Request $request)
    {
        $pageTitle = $this->pageTitle;
        $datas = $this->model->getAllData($request->all());

        return view('Admin.headerImage.index', compact('datas','pageTitle'));
    }

    public function create()
    {
        return view('Admin.headerImage.create');
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $file = $request->file('cover_image');
        try {
            if ($request->hasFile('cover_image')) {
                $data['cover_image'] = $this->model->upload($file);
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


        return view('Admin.headerImage.edit', compact('data', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {


        try {
            $data = $this->model->find($id);

            $file = $request->file('cover_image');

            if (empty($data)) {
                return redirect($this->redirectUrl)->withErrors(['alert-danger' => 'Data was not found!']);
            }
            $attributes = $request->all();

            if ($request->hasFile('cover_image')) {
                $path = 'uploads/headerImage/' . $data->image;

                if ($data->image) {
                    unlink($path);
                }
                $attributes['cover_image'] = $this->model->upload($file);
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
                    $path = 'uploads/headerImage/' . $data->image;
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