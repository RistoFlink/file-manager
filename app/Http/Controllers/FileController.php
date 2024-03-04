<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FileController extends Controller
{
    public function myFiles() {
        # code...
        return Inertia::render("MyFiles");
    }
}
