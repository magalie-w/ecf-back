<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

      public function contact(Request $request)
      {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());
      }
}
