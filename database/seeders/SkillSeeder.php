<?php
// Lokasi file: database/seeders/SkillSeeder.php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Frontend
            ['name' => 'HTML', 'category' => 'Frontend', 'icon' => 'code', 'sort_order' => 1],
            ['name' => 'CSS', 'category' => 'Frontend', 'icon' => 'palette', 'sort_order' => 2],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'icon' => 'file-code', 'sort_order' => 3],
            ['name' => 'Bootstrap', 'category' => 'Frontend', 'icon' => 'layout', 'sort_order' => 4],
            // Backend
            ['name' => 'PHP', 'category' => 'Backend', 'icon' => 'server', 'sort_order' => 5],
            ['name' => 'Laravel', 'category' => 'Backend', 'icon' => 'layers', 'sort_order' => 6],
            ['name' => 'REST API', 'category' => 'Backend', 'icon' => 'network', 'sort_order' => 7],
            // Database
            ['name' => 'MySQL', 'category' => 'Database', 'icon' => 'database', 'sort_order' => 8],
            ['name' => 'phpMyAdmin', 'category' => 'Database', 'icon' => 'table', 'sort_order' => 9],
            // Tools
            ['name' => 'Git', 'category' => 'Tools', 'icon' => 'git-branch', 'sort_order' => 10],
            ['name' => 'GitHub', 'category' => 'Tools', 'icon' => 'github', 'sort_order' => 11],
            ['name' => 'Laragon', 'category' => 'Tools', 'icon' => 'terminal', 'sort_order' => 12],
            ['name' => 'VS Code', 'category' => 'Tools', 'icon' => 'code-2', 'sort_order' => 13],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
