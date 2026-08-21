<?php
// Lokasi file: database/migrations/2026_01_01_000006_create_social_links_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('platform');  // Email, GitHub, LinkedIn, WhatsApp, Location
            $table->string('label');     // teks yang ditampilkan
            $table->string('value');     // url / alamat / nomor
            $table->string('icon')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
