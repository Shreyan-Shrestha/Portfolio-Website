<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ResumeRequest;
use App\Models\Contact; 
use App\Models\Personal;
use App\Models\Skills;


class AdminController extends Controller
{
    public function contactindex()
    {
            $contacts = Contact::latest()->paginate(5);
            return view('admin.contact.index', ['contacts' => $contacts]);
    }

    public function index()
    {
        $contactCount = Contact::count();
        $contacts = Contact::latest()->get();
        return view('admin.admin',['contacts'=> $contacts, 'contactCount' => $contactCount]);
    }

      public function contactstore(ContactRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect('/');
    }

    public function destroy($id){
        Contact::where('id', $id)->delete();
        return redirect('/viewcontact');
    }

    public function personalindex()
    {
        $personals = Personal::latest()->get();
        return view('admin.personal.index', ['personals' => $personals]);
    }

    public function resume(ResumeRequest $request)
    {
        $validated = $request->validated();
        Personal::create($validated);
        return redirect('/resume');
    }
}

