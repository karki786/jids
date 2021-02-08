<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct(Gallery $banner)
    {
        $this->model = $banner;
        $this->pageTitle = "Gallery Management";
        $this->redirectUrl = 'system/gallery';
    }

    public function index(Request $request)
    {
        $datas = $this->model->getAllData($request->all());
        $pageTitle = $this->pageTitle;

        return view('Admin.gallery.index', compact('datas', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = $this->pageTitle;
        return view('Admin.gallery.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
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


        return view('Admin.gallery.edit', compact('data', 'pageTitle'));
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
                $path = 'uploads/gallery/' . $data->image;

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
                    $path = 'uploads/gallery/' . $data->image;
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
