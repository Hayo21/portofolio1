<?php
// Lokasi file: database/seeders/EducationSeeder.php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::create([
            'institution' => 'Universitas Pamulang',
            'major' => 'Teknik Informatika',
            'degree' => 'S1',
            'year' => '2026',
            'description' => 'Lulus dengan fokus pada pengembangan web, pemrograman, dan sistem basis data.',
            'sort_order' => 1,
        ]);

        Education::create([
            'institution' => 'BNSP',
            'major' => 'Network Administrator Certification',
            'degree' => 'Sertifikasi Profesi',
            'year' => '2025',
            'description' => 'Sertifikasi kompetensi di bidang administrasi jaringan.',
            'sort_order' => 2,
        ]);
    }
}
