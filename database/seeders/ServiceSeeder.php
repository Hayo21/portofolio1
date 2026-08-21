<?php
// Lokasi file: database/seeders/ServiceSeeder.php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Building responsive web applications using Laravel.',
                'icon' => 'code',
                'sort_order' => 1,
            ],
            [
                'title' => 'Data Management',
                'description' => 'Managing structured data using MySQL and Excel.',
                'icon' => 'database',
                'sort_order' => 2,
            ],
            [
                'title' => 'System Development',
                'description' => 'Creating systems based on real business requirements.',
                'icon' => 'cpu',
                'sort_order' => 3,
            ],
            [
                'title' => 'Technical Support',
                'description' => 'Troubleshooting software and technical issues.',
                'icon' => 'life-buoy',
                'sort_order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
