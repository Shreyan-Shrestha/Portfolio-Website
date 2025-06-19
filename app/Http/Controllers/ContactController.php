<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Your form processing logic here...

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}
