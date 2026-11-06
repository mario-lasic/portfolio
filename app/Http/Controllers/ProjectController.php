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

    public function show(string $slug)
    {
        $projects = config('projects');
        foreach ($projects as $project) {
            if($project['slug'] === $slug) {
                if (isset($project['is_placeholder']) && $project['is_placeholder'] === true) {
                    abort(404);
                }
                return Inertia::render('ProjectDetails', ["project"=>$project]);
            }
        }
        abort(404);
    }
}
