<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\SkillRequest;
use App\Http\Requests\QualificationRequest;
use App\Models\Contact;
use App\Models\Qualification;
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
        $skillCount = Skills::count();
        $contacts = Contact::latest()->get();
        return view('admin.admin',['contacts'=> $contacts, 'contactCount'=>$contactCount,'skillCount'=>$skillCount]);
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
    public function skills()
    {
        $skills = Skills::latest()->get();
        return view('admin.skills.skills', ['skills' => $skills]);
    }
    public function addskill()
    {
        return view('admin.skills.addskill');
    }
    public function skillstore(SkillRequest $request)    {
        $validated = $request->validated();
        Skills::create($validated);
        return redirect('/skills')->with('success', 'Skill added successfully!');
    }

    public function skilleditView($id){
        $skill = Skills::where('id', $id)->get();
        return view('admin.skills.editskill', ['skill'=> $skill[0]]);
    }
    
    public function skilledit(SkillRequest $request)
    {
        $validated = $request->validated();
        Skills::where('id', $request['id'])->update($validated);
        return redirect('/skills');
    }

    public function destroyskill($id){
        Skills::where('id', $id)->delete();
        return redirect('/skills')->with('success', 'Skill deleted successfully!');
    }

    public function qualifications(){
        $qualifications=Qualification::latest()->get();
        return view('admin.qualification.qualview', ['qualifications'=> $qualifications]);
    }

    public function qualview(){
        return view('admin.qualification.qualform');
    }

    public function qualform( QualificationRequest $request){
         $validated = $request->validated();
        Qualification::create($validated);
        return redirect('/qualification')->with('success', 'Skill added successfully!');
    }

    public function destroyqual($id){
        Qualification::where('id', $id)->delete();
        return redirect('/qualification')->with('success', 'Skill deleted successfully!');
    }

     public function qualeditView($id){
        $quals = Qualification::where('id', $id)->get();
        return view('admin.qualification.editqual', ['quals'=> $quals[0]]);
    }
    public function qualedit(QualificationRequest $request)
    {
        $validated = $request->validated();
       Qualification::where('id', $request['id'])->update($validated);
        return redirect('/qualification');
    }
}

