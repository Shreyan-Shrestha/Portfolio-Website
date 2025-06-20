<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use App\Models\Qualification;
use App\Models\About;
use App\Models\Project;

class PortfolioController extends Controller
{
   public function contact(){
        return view('admin.contact.contact');
    }

    public function index(){
        $about = About::first();
        $skills = Skills::latest()->get();
        $projects = Project::latest()->get();
        return view('home', ['about' => $about, 'skills' => $skills,'projects'=> $projects]);
    }

    public function resume(){
        $about = About::first();
        $skills = Skills::latest()->get();
        $qualifications = Qualification::latest()->get();
        $projects = Project::latest()->get();
        return view('resume', ['about' => $about, 'skills' => $skills,'qualifications'=> $qualifications, 'projects'=> $projects]);
    }

    public function project(){
        $projects = Project::latest()->get();
        return view('project', ['projects' => $projects]);
    }
}