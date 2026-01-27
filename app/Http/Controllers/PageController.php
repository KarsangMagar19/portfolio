<?php

namespace App\Http\Controllers;
use App\Models\Experience;
use App\Models\Personalinfo;
use App\Models\Project;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Messageme;

class PageController extends BaseController
{
    public function homepage()
    {
        return view('home');
    }

    public function aboutpage()
    {
        $educations = Education::orderByDesc('start_date')->get();

        return view('about', compact('educations'));
        
    }



    public function experiencepage()
    {
        $experience = Experience::all();

        return view('experience', compact('experience'));
    }

    public function projectspage()
    {
        $projects = Project::all();

        return view('projects', compact('projects'));
    }

    public function contactpage()
    {
            $contact = Contact::all();

        return view('contact', compact('contact'));
    }
    public function educationpage()
    {
        $education = Education::all();

        return view('education', compact('education'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Messageme::create($validated);

        return redirect()->back()->with('success', 'Message sent successfully');
    }  
}
