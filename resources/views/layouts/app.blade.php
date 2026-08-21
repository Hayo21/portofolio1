<!DOCTYPE html>
{{-- Lokasi file: resources/views/layouts/app.blade.php --}}
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2D3250">

    <title>@yield('title', 'Muniff Agustiansah — Web Developer Portfolio')</title>
    <meta name="description" content="@yield('description', 'Personal portfolio of Muniff Agustiansah, a Computer Science graduate focused on web development, Laravel, PHP, MySQL, and modern web technologies.')">
    <meta name="keywords" content="Muniff Agustiansah, Laravel Developer, PHP Developer, Web Developer Portfolio, Full Stack Developer Indonesia">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Muniff Agustiansah — Web Developer Portfolio')">
    <meta property="og:description" content="@yield('description', 'Personal portfolio of Muniff Agustiansah, a Computer Science graduate focused on web development, Laravel, PHP, MySQL, and modern web technologies.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    {{-- Fonts: Plus Jakarta Sans (display) + Inter (body) — max 2 families per brief --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    {{-- Applied before first paint to avoid a light-mode flash --}}
    <script>
        (function () {
            var saved = localStorage.getItem('portfolio-theme');
            var theme = saved || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    @stack('head')
</head>
<body>

    {{-- 28. LOADING SCREEN --}}
    <div id="loading-screen" aria-hidden="true">
        <span class="loading-mark">M.</span>
        <div class="loading-bar"><span id="loading-bar-fill"></span></div>
    </div>

    {{-- 29. SCROLL PROGRESS --}}
    <div id="scroll-progress" aria-hidden="true"></div>

    {{-- 8. CUSTOM CURSOR (desktop only, controlled via JS/CSS) --}}
    <div id="custom-cursor" aria-hidden="true">
        <div class="cursor-dot"></div>
        <div class="cursor-outline"></div>
    </div>

    <a href="#main-content" class="skip-link">Skip to main content</a>

    <x-navbar />

    <main id="main-content">
        @yield('content')
    </main>

    <x-footer />

    {{-- 30. BACK TO TOP --}}
    <button id="back-to-top" type="button" aria-label="Back to top">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
    </button>

    {{-- 48/49. COMMAND PALETTE --}}
    <div id="command-palette-overlay" role="dialog" aria-modal="true" aria-label="Command palette" hidden>
        <div id="command-palette">
            <div class="cp-input-row">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                <input type="text" id="cp-input" placeholder="Search..." autocomplete="off" aria-label="Search commands">
                <kbd>ESC</kbd>
            </div>
            <ul id="cp-list" role="listbox"></ul>
        </div>
    </div>

    {{-- Lucide icons — renders elements with [data-lucide] into inline SVG --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/animations.js') }}" defer></script>
    <script src="{{ asset('js/projects.js') }}" defer></script>
    <script src="{{ asset('js/contact.js') }}" defer></script>
    <script src="{{ asset('js/portfolio.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
