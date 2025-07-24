<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Techtonauts') }} - @yield('title', 'Innovate the Future')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Techtonauts provides innovative technology solutions for a brighter future.')">
    <meta name="keywords" content="@yield('keywords', 'technology, innovation, tech solutions, digital transformation')">
    <meta name="author" content="Techtonauts">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Techtonauts - Innovate the Future')">
    <meta property="og:description" content="@yield('og_description', 'Innovative technology solutions for a brighter future')">
    <meta property="og:image" content="@yield('og_image', asset('images/techtonauts-og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Techtonauts - Innovate the Future')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Innovative technology solutions for a brighter future')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/techtonauts-twitter-image.jpg'))">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" as="style">
    <link rel="preload" href="{{ asset('images/hero-bg.jpg') }}" as="image">

    <!-- Additional Head Content -->
    @stack('head')

    <style>
        /* Custom CSS for enhanced effects */
        .social-icon-header {
            position: relative;
            overflow: hidden;
        }
        
        .social-icon-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .social-icon-header:hover::before {
            left: 100%;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(59, 130, 246, 0.1), transparent);
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s ease;
        }
        
        .nav-link:hover::after {
            opacity: 1;
            transform: scale(1);
        }
        
        .payment-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }
        
        .payment-item:hover::before {
            transform: translateX(100%);
        }
        
        /* Smooth scrolling for navigation */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(15, 23, 42, 0.1);
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #2563eb, #7c3aed);
        }
        
        /* Loading animation enhancement */
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(59, 130, 246, 0.6);
            }
        }
        
        .animate-spin {
            animation: spin 1s linear infinite, pulse-glow 2s ease-in-out infinite;
        }
        
        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .main-navigation {
                position: sticky;
                top: 0;
            }
        }
    </style>
</head>
<body class="font-inter antialiased bg-white text-gray-900 overflow-x-hidden" x-data="{
    mobileMenuOpen: false,
    scrolled: false,
    loading: true
}"
x-init="
    window.addEventListener('scroll', () => {
        scrolled = window.pageYOffset > 100;
    });
    setTimeout(() => { loading = false; }, 800);
">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-blue-600 text-white px-4 py-2 rounded-md z-50 transition-all duration-300 hover:bg-blue-700">
        Skip to main content
    </a>

    <!-- Header Component (includes navigation) -->
    @include('components.header')

    <!-- Main Content -->
    <main id="main-content" class="relative pt-44 lg:pt-48">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- Back to Top Button -->
    <div x-show="scrolled"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform translate-y-4 scale-75"
         x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 transform translate-y-4 scale-75"
         class="fixed bottom-8 right-8 z-40">
        <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                class="bg-gradient-to-br from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white p-3 rounded-full shadow-lg hover:shadow-xl hover:shadow-blue-500/25 transition-all duration-300 group transform hover:scale-110 hover:-translate-y-1">
            <svg class="w-6 h-6 transform group-hover:-translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
            <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-md"></div>
        </button>
    </div>

    <!-- Loading Overlay -->
    <div id="loading-overlay"
         x-show="loading"
         x-transition:leave="transition ease-in duration-500"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gradient-to-br from-techtonaut-navy-dark via-techtonaut-navy-light to-accent-blue/20 z-50 flex items-center justify-center">
        <div class="text-center space-y-6">
            <div class="relative">
                <div class="animate-spin rounded-full h-20 w-20 border-4 border-blue-200/30 border-t-blue-600 mx-auto"></div>
                <div class="absolute inset-0 rounded-full border-4 border-transparent border-r-purple-600 animate-spin" style="animation-direction: reverse; animation-duration: 1.5s;"></div>
                <div class="absolute inset-2 rounded-full border-2 border-transparent border-l-accent-blue animate-spin" style="animation-duration: 2s;"></div>
            </div>
            <div class="space-y-3">
                <div class="flex items-center justify-center space-x-3">
                    <img src="{{ asset('images/logo_no_bg.png') }}" alt="Techtonauts Logo" class="h-8 w-auto">
                    <p class="text-2xl font-bold bg-gradient-to-r from-accent-blue to-accent-purple bg-clip-text text-transparent">Techtonauts</p>
                </div>
                <p class="text-sm text-gray-300 animate-pulse">Loading your tech experience...</p>
                <div class="flex justify-center space-x-1">
                    <div class="w-2 h-2 bg-accent-blue rounded-full animate-bounce"></div>
                    <div class="w-2 h-2 bg-accent-purple rounded-full animate-bounce" style="animation-delay: 0.1s;"></div>
                    <div class="w-2 h-2 bg-accent-blue rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>

    <!-- Additional Scripts -->
    @stack('scripts')

    <!-- Performance monitoring and smooth navigation -->
    <script>
        window.addEventListener('load', () => {
            if ('performance' in window) {
                const loadTime = performance.now();
                console.log('Page load time:', Math.round(loadTime) + 'ms');
            }
        });

        // Smooth scroll for navigation links
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('a[href^="#"]');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        const headerHeight = document.getElementById('main-header').offsetHeight;
                        const targetPosition = targetElement.offsetTop - headerHeight - 20;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });

        // Enhanced header scroll effect
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const header = document.getElementById('main-header');
            
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                // Scrolling down
                header.style.transform = 'translateY(-50%)';
            } else {
                // Scrolling up
                header.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        });
    </script>
</body>
</html>