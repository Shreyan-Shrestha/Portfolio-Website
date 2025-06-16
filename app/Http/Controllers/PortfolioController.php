<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact; 

class PortfolioController extends Controller
{
   public function contactview(){
        $contacts = Contact::latest();
        return view('contact', compact('contacts'));
    }

    public function contactstore(ContactRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect('/');
    }
}