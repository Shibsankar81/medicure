<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactformController extends Controller
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
        mail::to('shibsankarmanna447@gmail.com')->send(new ContactMail($request));

        return redirect('/')-> with('success', 'submit successfully completed');
    }

    public function contact_mail(Request $request){
        mail::to('shibsnkarmanna447@gmail.com')->send(new ContactMail($request));
        return redirect('/contact');
    }
}
