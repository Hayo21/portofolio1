<?php
// Lokasi file: app/Http/Controllers/PortfolioController.php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SocialLink;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $projects = Project::ordered()->get();
        $featuredProject = Project::featured()->first();
        $skills = Skill::ordered()->get()->groupBy('category');
        $experiences = Experience::ordered()->get();
        $educations = Education::ordered()->get();
        $services = Service::ordered()->get();
        $socialLinks = SocialLink::ordered()->get();

        return view('portfolio.index', compact(
            'projects',
            'featuredProject',
            'skills',
            'experiences',
            'educations',
            'services',
            'socialLinks',
        ));
    }
}
