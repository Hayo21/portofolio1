<?php
// Lokasi file: database/migrations/2026_01_01_000001_create_projects_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->text('description');
            $table->text('problem')->nullable();
            $table->text('solution')->nullable();
            $table->json('features')->nullable();       // array fitur
            $table->json('technologies')->nullable();    // array tech stack
            $table->text('challenges')->nullable();
            $table->text('result')->nullable();
            $table->string('image')->nullable();          // gambar utama
            $table->json('gallery')->nullable();          // array path gambar tambahan
            $table->string('category')->default('Laravel'); // untuk filter: Laravel/PHP/JavaScript/Database/Other
            $table->string('github_url')->nullable();
            $table->string('live_url')->nullable();
            $table->boolean('featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
