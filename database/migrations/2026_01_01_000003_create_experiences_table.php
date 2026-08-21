<?php
// Lokasi file: database/migrations/2026_01_01_000003_create_experiences_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');          // contoh: "Web Development Project"
            $table->string('organization');   // contoh: "IDE Segar Printing"
            $table->string('year');           // contoh: "2025"
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
