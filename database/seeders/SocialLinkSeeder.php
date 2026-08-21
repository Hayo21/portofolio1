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
            ['platform' => 'Email', 'label' => 'Email', 'value' => 'your-email@example.com', 'icon' => 'mail', 'sort_order' => 1],
            ['platform' => 'GitHub', 'label' => 'GitHub', 'value' => 'https://github.com/your-username', 'icon' => 'github', 'sort_order' => 2],
            ['platform' => 'LinkedIn', 'label' => 'LinkedIn', 'value' => 'https://linkedin.com/in/your-profile', 'icon' => 'linkedin', 'sort_order' => 3],
            ['platform' => 'WhatsApp', 'label' => 'WhatsApp', 'value' => '+62xxxxxxxxxxx', 'icon' => 'message-circle', 'sort_order' => 4],
            ['platform' => 'Location', 'label' => 'Location', 'value' => 'Bogor, West Java, Indonesia', 'icon' => 'map-pin', 'sort_order' => 5],
        ];

        foreach ($links as $link) {
            SocialLink::create($link);
        }
    }
}
