<?php
// Lokasi file: app/Http/Controllers/ProjectController.php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function show(Project $project): View
    {
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->ordered()
            ->take(2)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
