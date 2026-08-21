<?php
// Lokasi file: routes/web.php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin routes akan ditambahkan pada Phase 4/Phase 5 (auth + panel)
