<?php
// Lokasi file: database/seeders/SocialLinkSeeder.php
//
// PENTING: nilai di bawah ini adalah PLACEHOLDER karena data asli
// (email, LinkedIn, GitHub, WhatsApp, lokasi) belum diberikan di brief.
// Ganti "value" dengan data Anda yang sebenarnya sebelum deploy.

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        $links = [
            ['platform' => 'Email', 'label' => 'Email', 'value' => 'munifagustiansyah21@gmail.com', 'icon' => 'mail', 'sort_order' => 1],
            ['platform' => 'GitHub', 'label' => 'GitHub', 'value' => 'https://github.com/Hayo21', 'icon' => 'github', 'sort_order' => 2],
            ['platform' => 'LinkedIn', 'label' => 'LinkedIn', 'value' => 'https://www.linkedin.com/in/munif-agustiansyah/', 'icon' => 'linkedin', 'sort_order' => 3],
            ['platform' => 'WhatsApp', 'label' => 'WhatsApp', 'value' => '+6282111319138', 'icon' => 'message-circle', 'sort_order' => 4],
            ['platform' => 'Location', 'label' => 'Location', 'value' => 'Bogor, West Java, Indonesia', 'icon' => 'map-pin', 'sort_order' => 5],
        ];

        foreach ($links as $link) {
            SocialLink::create($link);
        }
    }
}
