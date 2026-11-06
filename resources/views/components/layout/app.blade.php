<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth bg-[#0A0E1A] text-slate-200 antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Synex Digital — Custom Software Engineering & Applied AI Agency' }}</title>
    <meta name="description" content="{{ $description ?? 'Synex Digital designs and builds high-velocity custom software, eCommerce platforms, robust web applications, and applied AI systems for US founders and enterprise teams.' }}">
    <meta name="keywords" content="custom software development, ecommerce development, applied AI engineering, web app development, API integration, US software agency">
    <meta name="author" content="Synex Digital">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Social Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Synex Digital — Custom Software Engineering & Applied AI' }}">
    <meta property="og:description" content="{{ $description ?? 'Senior software engineering pods, custom web applications, and applied AI pipelines aligned with US business hours.' }}">
    <meta property="og:site_name" content="Synex Digital">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Synex Digital — Custom Software Engineering & Applied AI' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Senior software engineering pods, custom web applications, and applied AI pipelines aligned with US business hours.' }}">

    <!-- Preload Self-Hosted Switzer Fonts -->
    <link rel="preload" href="/fonts/switzer/switzer-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/switzer/switzer-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/switzer/switzer-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/switzer/switzer-700.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Vite Assets (CSS & Vanilla JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Structured Data (JSON-LD Organization Schema) -->
    <?php
    $jsonLd = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        'name' => 'Synex Digital',
        'description' => 'Custom software development agency specializing in eCommerce, AI workflows, web apps, UI/UX systems, and API integrations for US businesses.',
        'url' => url('/'),
        'email' => 'contact@synexdigital.com',
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'United States',
        ],
        'knowsAbout' => [
            'eCommerce Development',
            'Applied AI Development',
            'Web Application Development',
            'UI/UX Design Systems',
            'API Architecture & Integration',
        ],
    ];
    ?>
    <script type="application/ld+json">
    <?php echo json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
    </script>
</head>
<body class="min-h-full flex flex-col bg-[#0A0E1A] text-slate-200 font-sans selection:bg-[#4555FD] selection:text-white">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[999] focus:px-4 focus:py-2 focus:bg-[#4555FD] focus:text-white focus:rounded focus:ring-2 focus:ring-white">
        Skip to main content
    </a>

    <!-- Global Navigation -->
    <x-navigation.navbar />

    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Global Footer -->
    <x-navigation.footer />
</body>
</html>
