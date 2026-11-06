<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = config('projects');
        return Inertia::render('Projects', ["projects" => $projects]);
    }

    /**
     * @throws FileNotFoundException
     */
    public function show(string $slug)
    {
        $projects = config('projects');
        foreach ($projects as $project) {
            if ($project['slug'] === $slug) {
                if (isset($project['is_placeholder']) && $project['is_placeholder'] === true) {
                    abort(404);
                }
                $path = resource_path($project['content_file']);
                $contentHtml = Str::markdown(File::get($path));

                return Inertia::render('ProjectDetails', ["project" => $project, "contentHtml" => $contentHtml]);
            }
        }
        abort(404);
    }
}
