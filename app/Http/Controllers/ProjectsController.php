<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('projects.index');
    }
}
