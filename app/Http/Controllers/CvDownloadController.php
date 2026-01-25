<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CvDownloadController extends Controller
{
    /**
     * Stream the CV file for download (file path configured for admin upload later).
     */
    public function __invoke(Request $request): StreamedResponse|\Illuminate\Http\Response
    {
        $path = config('portfolio.cv_path');
        $name = config('portfolio.cv_download_name');

        if (! Storage::disk('public')->exists($path)) {
            abort(404, 'CV not available.');
        }

        return Storage::disk('public')->download($path, $name);
    }
}
