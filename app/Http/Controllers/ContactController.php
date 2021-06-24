<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{


   public function create(Request $request)
    {
        $a = new Contact();
        $a->id=$request->id;
        $a ->name =$request-> name;
        $a ->email =$request-> email;
        $a ->subject =$request-> subject;
        $a ->message =$request-> message;

        $a ->save();
        return redirect()->route('contact');


    }

    public function destroy(Request $request)
    {
        $payment = Contact::find($request->id);
        $payment->delete();
        return redirect()->back();
    }


   
}
