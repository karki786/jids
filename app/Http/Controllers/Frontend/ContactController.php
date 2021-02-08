<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\HeaderImage;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use League\CommonMark\Block\Renderer\HeadingRenderer;

class ContactController extends Controller
{
    public function contact()
    {
        $aboutImage = HeaderImage::where('slug', 'contact-image')->first();

        return view('frontend.contact.contact',compact('aboutImage'));
    }

    public function storeContact(Request $request)
    {
        $data = $request->all();

        try {

            Contact::create($data);
            return back()->with('message','Success');
        } catch (\Exception $e) {

            return back()->with('message','Danger');


        }
    }
}
