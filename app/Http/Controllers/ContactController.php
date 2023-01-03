<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact.index');
    }

    public function create(Request $request)
    {
        Contact::createContact($request);
        return redirect('/add-contact')->with('message', "This Number Saved in Contact");
    }

    public function manage()
    {
        return view('user.contact.contact-list', ['contacts' => Contact::orderBy('id', 'desc')->get()]);
    }

    public function edit($id)
    {
        return view('user.contact.edit', ['contact' => Contact::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Contact::updateContact($request,$id);
        return redirect('/contact-list')->with('message', 'Updated successfully');
    }
    public function bookmarkContact($id)
    {
        return redirect('/contact-list')->with('message', Contact::bookmark($id));
    }
}
