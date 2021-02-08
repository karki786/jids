<?php

namespace App\Http\Controllers\Admin\Pdf;

use App\Http\Controllers\Controller;
use App\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function __construct(Pdf $banner)
    {
        $this->model = $banner;
        $this->pageTitle = "Pdf Management";
        $this->redirectUrl = 'system/pdf';
    }

    public function index(Request $request)
    {
        $datas = $this->model->getAllData($request->all());
        $pageTitle = $this->pageTitle;

        return view('Admin.pdf.index', compact('datas', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = $this->pageTitle;
        return view('Admin.pdf.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $file = $request->file('file');
        try {
            if ($request->hasFile('file')) {
                $data['file'] = $this->model->upload($file);
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


        return view('Admin.pdf.edit', compact('data', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {


        try {
            $data = $this->model->find($id);

            $file = $request->file('file');

            if (empty($data)) {
                return redirect($this->redirectUrl)->withErrors(['alert-danger' => 'Data was not found!']);
            }
            $attributes = $request->all();

            if ($request->hasFile('file')) {
                $path = 'uploads/pdf/' . $data->file;

                if ($data->file) {
                    unlink($path);
                }
                $attributes['file'] = $this->model->upload($file);
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
                if (isset($data->file)) {
                    $path = 'uploads/pdf/' . $data->file;
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

    public function downloadPdf($id)
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
