<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\SkillRequest;
use App\Http\Requests\QualificationRequest;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\ProjectRequest;

use App\Models\Contact;
use App\Models\Qualification;
use App\Models\Skills;
use App\Models\About;
use App\Models\Project;

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
        $projectCount = Project::count();
        $contacts = Contact::latest()->get();
        $projects=Project::latest()->get();

        return view('admin.admin', ['contacts' => $contacts, 'projects'=>$projects ,'contactCount' => $contactCount, 'skillCount' => $skillCount , 'projectCount' => $projectCount]);
    }

    public function contactstore(ContactRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect('/');
    }

    public function destroy($id)
    {
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
    public function skillstore(SkillRequest $request)
    {
        $validated = $request->validated();
        Skills::create($validated);
        return redirect('/skills')->with('success', 'Skill added successfully!');
    }

    public function skilleditView($id)
    {
        $skill = Skills::where('id', $id)->get();
        return view('admin.skills.editskill', ['skill' => $skill[0]]);
    }

    public function skilledit(SkillRequest $request)
    {
        $validated = $request->validated();
        Skills::where('id', $request['id'])->update($validated);
        return redirect('/skills');
    }

    public function destroyskill($id)
    {
        Skills::where('id', $id)->delete();
        return redirect('/skills')->with('success', 'Skill deleted successfully!');
    }

    public function qualifications()
    {
        $qualifications = Qualification::latest()->get();
        return view('admin.qualification.qualview', ['qualifications' => $qualifications]);
    }

    public function qualview()
    {
        return view('admin.qualification.qualform');
    }

    public function qualform(QualificationRequest $request)
    {
        $validated = $request->validated();
        Qualification::create($validated);
        return redirect('/qualification')->with('success', 'Skill added successfully!');
    }

    public function destroyqual($id)
    {
        Qualification::where('id', $id)->delete();
        return redirect('/qualification')->with('success', 'Skill deleted successfully!');
    }

    public function qualeditView($id)
    {
        $quals = Qualification::where('id', $id)->get();
        return view('admin.qualification.editqual', ['quals' => $quals[0]]);
    }
    public function qualedit(QualificationRequest $request)
    {
        $validated = $request->validated();
        Qualification::where('id', $request['id'])->update($validated);
        return redirect('/qualification');
    }

    public function about()
    {
        $abouts = About::latest()->get();
        return view('admin.about.index', ['abouts' => $abouts]);
    }

    public function aboutstore(AboutRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $path = $request->file('photo')->store('images', 'public');
            $validated['photo'] = 'storage/' . $path; // Or use Storage::url($path)
        }
        About::create($validated);

        return redirect('/about')->with('success', 'Personal Information added successfully!');
    }
    public function abouteditview($id)
    {
        $about = About::where('id', $id)->get();
        return view('admin.about.editabout', ['about' => $about[0]]);
    }

    public function aboutview()
    {
        return view('admin.about.aboutform');
    }

    public function aboutedit(AboutRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $path = $request->file('photo')->store('images', 'public');
            $validated['photo'] = 'storage/' . $path; // Or use Storage::url($path)
        }
        About::where('id', $request['id'])->update($validated);
        return redirect('/about')->with('success', 'Personal Information updated successfully!');
    }

    public function project()
    {
        $projects = Project::latest()->get();
        return view('admin.project.projectview', ['projects' => $projects]);
    }

    public function projectview()
    {
        return view('admin.project.projectform');
    }

    public function projectform(ProjectRequest $request)
{
    $validated = $request->validated();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName); // Save to public/images
        $validated['image'] = 'images/' . $imageName; // Add image path to validated data
    }

    Project::create($validated);

    return redirect('/project')->with('success', 'Personal Information updated successfully!');
}

    public function destroyproject($id)
    {
        Project::where('id', $id)->delete();
        return redirect('/project')->with('success', 'Project deleted successfully!');
    }

    public function projecteditView($id)
    {
        $projects = project::where('id', $id)->get();
        return view('admin.project.editproject', ['projects' => $projects[0]]);
    }
    public function projectedit(ProjectRequest $request)
    {
        $validated = $request->validated();
        Project::where('id', $request['id'])->update($validated);
        return redirect('/project');
    }
}
