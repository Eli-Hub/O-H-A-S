<?php

namespace App\Http\Controllers;

use App\Services\PrivateImageStorage;

class UploadedImageController extends Controller
{
    public function show(string $collection, string $filename, PrivateImageStorage $images)
    {
        return $images->response($collection, $filename);
    }
}
