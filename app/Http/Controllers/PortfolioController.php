<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Skills;
use App\Models\Qualification;
use App\Models\About;

class PortfolioController extends Controller
{
   public function contact(){
        return view('admin.contact.contact');
    }

    public function index(){
        return view('home');
    }

    public function resume(){
        $about = About::first();
        $skills = Skills::latest()->get();
        $qualifications = Qualification::latest()->get();
        return view('resume', ['about' => $about, 'skills' => $skills,'qualifications'=> $qualifications]);
    }
}