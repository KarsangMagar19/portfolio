<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CV / Resume
    |--------------------------------------------------------------------------
    |
    | Path to the CV file on the "public" storage disk. When you add an admin
    | panel, upload the file to this path (e.g. storage/app/public/cv/resume.pdf).
    | Run: php artisan storage:link
    |
    */

    'cv_path' => env('PORTFOLIO_CV_PATH', 'cv/resume.pdf'),

    'cv_download_name' => env('PORTFOLIO_CV_DOWNLOAD_NAME', 'Karsang_Magar_CV.pdf'),

];
