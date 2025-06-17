<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact; 

class PortfolioController extends Controller
{
   public function contact(){
        return view('admin.contact.contact');
    }
    public function viewcontact(){
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', ['contacts'=>$contacts]);
    }

    public function contactstore(ContactRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect('/');
    }
}