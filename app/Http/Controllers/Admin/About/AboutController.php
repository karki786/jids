<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(Page $page)
    {
        $this->model = $page;
        $this->pageTitle = " About Management";
        $this->redirectUrl = 'system/aboutEnglish';
        $this->redirect = 'system/aboutNepali';
    }

    public function index(Request $request)
    {
        $pageTitle = $this->pageTitle;
        $datas = $this->model->getAllData($request->all());

        return view('Admin.about.index', compact('datas', 'pageTitle'));
    }

    public function create()
    {
        return view('Admin.about.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('cover_image');
        $data['slug'] = 'about-english';
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


        return view('Admin.about.edit', compact('data', 'pageTitle'));
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
                $path = 'uploads/page/' . $data->image;

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
                    $path = 'uploads/page/' . $data->image;
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


    public function indexNepali(Request $request)
    {
        $pageTitle = $this->pageTitle;
        $datas = $this->model->getAllNepaliData($request->all());

        return view('Admin.about.indexNepali', compact('datas', 'pageTitle'));
    }

    public function createNepali()
    {
        return view('Admin.about.createNepali');
    }

    public function storeNepali(Request $request)
    {
        $data = $request->all();
        $file = $request->file('cover_image');
        $data['slug'] = 'about-nepali';
        try {
            if ($request->hasFile('cover_image')) {
                $data['cover_image'] = $this->model->upload($file);
            }

            $this->model->create($data);
            return redirect($this->redirect)->withErrors(['alert-success' => 'Successfully Added']);
        } catch (\Exception $e) {

            return redirect($this->redirect)->withErrors(['alert-danger' => 'Data was not saved!']);


        }

    }

    public function editNepali($id)
    {

        $pageTitle = $this->pageTitle;
        $data = $this->model->find($id);

        if (empty($data)) {
            return redirect()->back()->withErrors(['alert-danger' => 'Data was not found!']);
        }


        return view('Admin.about.editNepali', compact('data', 'pageTitle'));
    }

    public function updateNepali(Request $request, $id)
    {


        try {
            $data = $this->model->find($id);

            $file = $request->file('cover_image');

            if (empty($data)) {
                return redirect($this->redirect)->withErrors(['alert-danger' => 'Data was not found!']);
            }
            $attributes = $request->all();

            if ($request->hasFile('cover_image')) {
                $path = 'uploads/page/' . $data->image;

                if ($data->image) {
                    unlink($path);
                }
                $attributes['cover_image'] = $this->model->upload($file);
            }
            $attributes['slug'] = 'about-nepali';
            $data->update($attributes);
            return redirect($this->redirect)->withErrors(['alert-success' => 'Successfully updated!']);
        } catch (\Exception $e) {
            return redirect($this->redirect)->withErrors(['alert-danger' => $e->getMessage()]);
        }
    }

    public function deleteNepali($id)
    {

        if ($id != null && !is_numeric($id)) {
            return redirect($this->redirect)->withErrors(['alert-danger' => "Data not found!"]);
        }


        $data = $this->model->find($id);
        if (isset($data)) {
            try {
                if (isset($data->image)) {
                    $path = 'uploads/page/' . $data->image;
                    unlink($path);
                }
                $data->delete();
                return redirect($this->redirect)->withErrors(['alert-success' => 'Deletion successful!']);
            } catch (\Exception $e) {
                return redirect($this->redirect)->withErrors(['alert-danger' => $e->getMessage()]);
            }
        } else {
            return redirect($this->redirect)->withErrors(['alert-danger' => "Data not found!"]);

        }
    }
}
