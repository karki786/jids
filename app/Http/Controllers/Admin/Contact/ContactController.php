<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
        $this->pageTitle = "Contact Management";
        $this->redirectUrl = 'system/contact';
    }

    public function index(Request $request)
    {
        $datas = $this->model->getAllData($request->all());
        $pageTitle = $this->pageTitle;

        return view('Admin.contact.index', compact('datas', 'pageTitle'));
    }
}
