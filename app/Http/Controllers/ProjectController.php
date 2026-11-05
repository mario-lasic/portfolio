<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = config('projects');
        return Inertia::render('Projects', ["projects" => $projects]);
    }
}
