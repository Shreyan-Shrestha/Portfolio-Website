<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\AboutRequest;
use App\Models\Contact; 
use App\Models\About;

class PortfolioController extends Controller
{
    public function viewabout(){
        $abouts = About::latest()->get();
        return view('resume', ['abouts'=> $abouts]);
    }

    public function aboutstore(AboutRequest $request){
        $validated = $request->validated();
        About::create($validated);
        return redirect('/');
    }

    public function index(){
        return view('welcome');
    }
}