<?php

namespace App\Http\Controllers;
use App\Models\Experience;
use App\Models\Personalinfo;
use App\Models\Project;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class BaseController extends Controller
{
    public function __construct()
    {
        $personalinfo = Personalinfo::first();
        $experience = Experience::first();
        $projects = Project::first();
        $education = Education::first();
        view()->share(['personalinfo' => $personalinfo]);
        view()->share(['experience' => $experience]);
        view()->share(['projects' => $projects]);
        view()->share(['education' => $education]);
    }
}
