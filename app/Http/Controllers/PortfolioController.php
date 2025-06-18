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

    public function index(){
        return view('home');
    }

     public function resume(){
        return view('resume');
    }
}