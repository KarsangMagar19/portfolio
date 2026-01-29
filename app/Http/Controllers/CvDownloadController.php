<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class CvDownloadController extends Controller
{
    /**
     * Download the latest resume from the database.
     */
    public function __invoke(Request $request)
    {
        // Get the latest resume from the database
        $resume = Resume::latest()->first();

        if (!$resume) {
            abort(404, 'Resume not available.');
        }

        // Check if file exists in public disk first
        if (Storage::disk('public')->exists($resume->Resume_file_name)) {
            return Storage::disk('public')->download($resume->Resume_file_name, 'Resume.pdf');
        }

        // Fall back to private disk for old files
        if (Storage::disk('local')->exists($resume->Resume_file_name)) {
            $path = Storage::disk('local')->path($resume->Resume_file_name);
            return Response::download($path, 'Resume.pdf');
        }

        abort(404, 'Resume file not found.');
    }
}
