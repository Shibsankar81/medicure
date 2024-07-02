<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('/contact');
    }

    public function contactPost(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|regex:/^[0-9]{10}$/',
            'message'=>'required|min:6'
        ]);
        $contact = Contact::create($validateData);
        return redirect()->back()-> with('success', 'submit successfully completed');
    }
}
