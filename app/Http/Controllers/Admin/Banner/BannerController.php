<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct(Banner $banner)
    {
        $this->model = $banner;
        $this->pageTitle = "Banner Management";
        $this->redirectUrl = 'system/banner';
    }

    public function index(Request $request)
    {
        $datas = $this->model->getAllData($request->all());
        $pageTitle = $this->pageTitle;

        return view('Admin.banner.index', compact('datas', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = $this->pageTitle;
        return view('Admin.banner.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['intro_text']=$request->intro_text;
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


        return view('Admin.banner.edit', compact('data', 'pageTitle'));
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
                $path = 'uploads/banner/' . $data->image;

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
                    $path = 'uploads/banner/' . $data->image;
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
