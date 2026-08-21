<?php
// Lokasi file: database/seeders/ExperienceSeeder.php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
            [
                'title' => 'Web Development Project',
                'organization' => 'IDE Segar Printing',
                'year' => '2025',
                'description' => 'Mengerjakan proyek pengembangan web sebagai bagian dari proses belajar penerapan Laravel pada kebutuhan bisnis nyata.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Administrative Internship',
                'organization' => 'PDAM Tirta Pakuan',
                'year' => '2019',
                'description' => 'Membantu proses administrasi dan pengelolaan data operasional secara terstruktur.',
                'sort_order' => 2,
            ],
            [
                'title' => 'Family Retail Business Management',
                'organization' => 'Usaha Keluarga',
                'year' => '2015 - 2019',
                'description' => 'Mengelola operasional usaha retail keluarga, termasuk pencatatan transaksi dan pengelolaan stok barang.',
                'sort_order' => 3,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
