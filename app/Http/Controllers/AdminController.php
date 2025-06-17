<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact; 
use App\Models\Skills;

class AdminController extends Controller
{
    public function index(){
        return view("admin/admin");
    }

}