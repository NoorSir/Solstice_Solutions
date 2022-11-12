<?php

namespace App\Http\Controllers;
use App\Models\contact;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function index(){
        return view('frontend.layouts.contact');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);

        contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }
}
