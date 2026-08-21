{{-- Lokasi file: resources/views/portfolio/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Muniff Agustiansah — Web Developer Portfolio')
@section('description', 'Personal portfolio of Muniff Agustiansah, a Computer Science graduate focused on web development, Laravel, PHP, MySQL, and modern web technologies.')

@section('content')
    <x-hero />
    <x-about :projects="$projects" />
    <x-skills :skills="$skills" />
    <x-projects :projects="$projects" :featuredProject="$featuredProject" />
    <x-experience :experiences="$experiences" :educations="$educations" />
    <x-services :services="$services" />
    <x-workflow />
    <x-resume :educations="$educations" :skills="$skills" :projects="$projects" :featuredProject="$featuredProject" :experiences="$experiences" />
    <x-contact :socialLinks="$socialLinks" />
@endsection
