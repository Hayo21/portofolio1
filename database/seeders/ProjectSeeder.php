<?php
// Lokasi file: database/seeders/ProjectSeeder.php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Invoice & WhatsApp Notification System',
            'slug' => 'invoice-whatsapp-notification-system',
            'short_description' => 'Sistem manajemen invoice dengan notifikasi otomatis ke pelanggan via WhatsApp.',
            'description' => 'Sistem berbasis web untuk membantu proses invoice, notifikasi pelanggan dan pengelolaan barang, dibangun dengan Laravel dan terintegrasi WhatsApp API.',
            'problem' => 'Proses pembuatan invoice dan pemberitahuan status pembayaran ke pelanggan masih dilakukan manual, sehingga rentan terlambat dan sulit dilacak.',
            'solution' => 'Membangun sistem terpusat yang mengelola invoice, pelanggan, dan produk, lalu mengirim notifikasi status invoice secara otomatis melalui WhatsApp, termasuk penjadwalan pengingat.',
            'features' => [
                'Invoice management',
                'Customer management',
                'Product management',
                'Invoice status tracking',
                'WhatsApp notification',
                'Notification scheduling',
                'Financial reports',
                'Monthly reports',
                'PDF invoice',
                'Dashboard',
            ],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript', 'WhatsApp API'],
            'challenges' => 'Menyusun alur pengiriman notifikasi WhatsApp yang andal dan menjadwalkan pengingat pembayaran tanpa mengganggu performa aplikasi utama.',
            'result' => 'Proses invoicing dan komunikasi status pembayaran menjadi lebih cepat, konsisten, dan mudah dipantau melalui dashboard.',
            'image' => 'projects/invoice-whatsapp.png',
            'gallery' => [],
            'category' => 'Laravel',
            'github_url' => null,
            'live_url' => null,
            'featured' => true,
            'sort_order' => 1,
        ]);

        Project::create([
            'title' => 'Toy Store',
            'slug' => 'Toko-Mainan',
            'short_description' => 'Sistem manajemen toko mainan berbasis web.',
            'description' => 'Aplikasi untuk mengelola inventaris, penjualan, dan pelanggan di toko mainan.',
            'problem' => 'Manajemen stok dan penjualan manual memakan waktu dan rawan kesalahan.',
            'solution' => 'Membuat sistem manajemen toko mainan yang terintegrasi dengan pencatatan stok dan laporan penjualan.',
            'features' => ['Manajemen produk', 'Pencatatan penjualan', 'Laporan penjualan', 'Manajemen pelanggan'],
            'technologies' => ['ReactJS', 'JavaScript', 'MongoDB', 'Bootstrap'],
            'challenges' => 'Menjaga akurasi data stok saat ada banyak transaksi penjualan yang dilakukan secara bersamaan.',
            'result' => 'Proses manajemen toko mainan menjadi lebih efisien dan data lebih akurat.',
            'image' => 'projects/toko-mainan.png',
            'gallery' => [],
            'category' => 'ReactJS',
            'github_url' => null,
            'live_url' => null,
            'featured' => false,
            'sort_order' => 2,
        ]);

        Project::create([
            'title' => 'List Film',
            'slug' => 'list-film',
            'short_description' => 'Aplikasi untuk menampilkan daftar film beserta informasi detail.',
            'description' => 'Website sederhana untuk menampilkan daftar film, sinopsis, dan informasi lainnya.',
            'problem' => 'Kesulitan dalam mencari dan melihat informasi film yang tersedia.',
            'solution' => 'Membuat aplikasi web yang menyediakan tampilan daftar film dengan fitur pencarian dan filter.',
            'features' => ['Daftar film', 'Pencarian film', 'Filter berdasarkan kategori', 'Detail film'],
            'technologies' => ['ReactJS', 'JavaScript', 'IMDB API', 'Bootstrap'],
            'challenges' => 'Mengintegrasikan data dari sumber eksternal dan memastikan tampilan responsif.',
            'result' => 'Pengguna dapat dengan mudah menemukan dan melihat informasi tentang berbagai film.',
            'image' => 'projects/film-aing.png',
            'gallery' => [],
            'category' => 'ReactJS',
            'github_url' => null,
            'live_url' => null,
            'featured' => false,
            'sort_order' => 3,
        ]);

        Project::create([
            'title' => 'List Game',
            'slug' => 'list-game',
            'short_description' => 'Aplikasi untuk menampilkan daftar game beserta informasi detail.',
            'description' => 'Website sederhana untuk menampilkan daftar game, sinopsis, dan informasi lainnya.',
            'problem' => 'Kesulitan dalam mencari dan melihat informasi game yang tersedia.',
            'solution' => 'Membuat aplikasi web yang menyediakan tampilan daftar game dengan fitur pencarian dan filter.',
            'features' => ['Daftar game', 'Pencarian game', 'Filter berdasarkan kategori', 'Detail game'],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'API RawG'],
            'challenges' => 'Menjaga struktur konten tetap sederhana namun fleksibel untuk berbagai jenis tulisan.',
            'result' => 'Platform yang stabil untuk mendokumentasikan proses belajar secara konsisten.',
            'image' => 'projects/game-web.png',
            'gallery' => [],
            'category' => 'PHP',
            'github_url' => null,
            'live_url' => null,
            'featured' => false,
            'sort_order' => 4,
        ]);
    }
}
