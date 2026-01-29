<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class ResumeViewController extends Controller
{
    public function __invoke(Resume $resume)
    {
        // Check if file exists in public disk first
        if (Storage::disk('public')->exists($resume->Resume_file_name)) {
            $path = Storage::disk('public')->path($resume->Resume_file_name);
            return Response::file($path);
        }

        // Fall back to private disk for old files
        if (Storage::disk('local')->exists($resume->Resume_file_name)) {
            $path = Storage::disk('local')->path($resume->Resume_file_name);
            return Response::file($path);
        }

        abort(404, 'Resume file not found');
    }
}
