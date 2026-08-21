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
            'description' => 'Sistem berbasis web untuk membantu proses invoice dan notifikasi pelanggan, dibangun dengan Laravel dan terintegrasi WhatsApp API.',
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
            'image' => 'projects/invoice-whatsapp.jpg',
            'gallery' => [],
            'category' => 'Laravel',
            'github_url' => null,
            'live_url' => null,
            'featured' => true,
            'sort_order' => 1,
        ]);

        Project::create([
            'title' => 'Employee Attendance System',
            'slug' => 'employee-attendance-system',
            'short_description' => 'Sistem pencatatan kehadiran karyawan berbasis web.',
            'description' => 'Aplikasi untuk mencatat kehadiran karyawan, merekap data harian, dan menghasilkan laporan bulanan.',
            'problem' => 'Rekap kehadiran manual memakan waktu dan rawan kesalahan pencatatan.',
            'solution' => 'Membuat sistem absensi digital dengan rekap otomatis dan laporan yang dapat diekspor.',
            'features' => ['Check-in/check-out', 'Rekap kehadiran', 'Laporan bulanan', 'Manajemen karyawan'],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap'],
            'challenges' => 'Menjaga akurasi data saat pencatatan dilakukan dari beberapa perangkat berbeda.',
            'result' => 'Proses rekap kehadiran menjadi lebih cepat dan data lebih rapi.',
            'image' => 'projects/attendance-system.jpg',
            'gallery' => [],
            'category' => 'Laravel',
            'github_url' => null,
            'live_url' => null,
            'featured' => false,
            'sort_order' => 2,
        ]);

        Project::create([
            'title' => 'Inventory Management System',
            'slug' => 'inventory-management-system',
            'short_description' => 'Sistem pengelolaan stok barang untuk kebutuhan bisnis retail.',
            'description' => 'Aplikasi untuk mencatat stok masuk-keluar, memantau jumlah barang, dan menghasilkan laporan inventaris.',
            'problem' => 'Pencatatan stok manual menyulitkan pemantauan barang secara real-time.',
            'solution' => 'Membangun sistem inventaris terpusat dengan pencatatan transaksi stok dan notifikasi stok menipis.',
            'features' => ['Stok masuk/keluar', 'Notifikasi stok menipis', 'Laporan inventaris', 'Manajemen produk'],
            'technologies' => ['Laravel', 'PHP', 'MySQL'],
            'challenges' => 'Merancang struktur data yang fleksibel untuk berbagai kategori produk.',
            'result' => 'Pemantauan stok menjadi lebih akurat dan mudah diakses.',
            'image' => 'projects/inventory-system.jpg',
            'gallery' => [],
            'category' => 'Database',
            'github_url' => null,
            'live_url' => null,
            'featured' => false,
            'sort_order' => 3,
        ]);

        Project::create([
            'title' => 'Personal Blog',
            'slug' => 'personal-blog',
            'short_description' => 'Platform blog pribadi untuk menulis catatan teknis dan pembelajaran.',
            'description' => 'Website blog sederhana dengan sistem kategori, pencarian, dan halaman admin untuk mengelola artikel.',
            'problem' => 'Membutuhkan tempat untuk mendokumentasikan proses belajar dan berbagi pengetahuan.',
            'solution' => 'Membuat platform blog ringan dengan Laravel yang mudah dikelola melalui panel admin sederhana.',
            'features' => ['Manajemen artikel', 'Kategori', 'Pencarian', 'Panel admin'],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript'],
            'challenges' => 'Menjaga struktur konten tetap sederhana namun fleksibel untuk berbagai jenis tulisan.',
            'result' => 'Platform yang stabil untuk mendokumentasikan proses belajar secara konsisten.',
            'image' => 'projects/personal-blog.jpg',
            'gallery' => [],
            'category' => 'PHP',
            'github_url' => null,
            'live_url' => null,
            'featured' => false,
            'sort_order' => 4,
        ]);

        Project::create([
            'title' => 'Data Management Dashboard',
            'slug' => 'data-management-dashboard',
            'short_description' => 'Dashboard untuk mengelola dan memvisualisasikan data terstruktur.',
            'description' => 'Aplikasi dashboard yang menampilkan ringkasan data penting dan memungkinkan pengelolaan data secara terpusat.',
            'problem' => 'Data tersebar di berbagai file terpisah sehingga sulit dipantau secara menyeluruh.',
            'solution' => 'Membangun dashboard terpusat dengan visualisasi ringkas dan fitur pengelolaan data.',
            'features' => ['Visualisasi data', 'Manajemen data terpusat', 'Filter & pencarian', 'Export data'],
            'technologies' => ['Laravel', 'JavaScript', 'MySQL'],
            'challenges' => 'Menyusun query yang efisien untuk menampilkan ringkasan data dalam waktu singkat.',
            'result' => 'Pemantauan data menjadi lebih cepat dan terpusat dalam satu dashboard.',
            'image' => 'projects/data-dashboard.jpg',
            'gallery' => [],
            'category' => 'JavaScript',
            'github_url' => null,
            'live_url' => null,
            'featured' => false,
            'sort_order' => 5,
        ]);
    }
}
