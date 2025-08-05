@extends('layouts.app')

@section('title', 'Portfolio - Innovation Excellence')
@section('description', 'Explore Techtonauts comprehensive portfolio featuring cutting-edge technology solutions, AI innovations, and premium digital services for Bangladesh and beyond.')

@section('content')
<!-- Hero Section -->
<section class="hero-section relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="absolute inset-0">
        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
        <div class="floating-orb orb-3"></div>
        <div class="floating-orb orb-4"></div>
        <div class="tech-grid"></div>
        <div class="particles">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
            <div class="particle particle-5"></div>
            <div class="particle particle-6"></div>
        </div>
    </div>

    <div class="container mx-auto relative z-10">
        <div class="text-center space-y-6 animate-fade-in-up">
            <div class="space-y-3">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black">
                    <span class="text-gradient-primary">Innovation</span>
                    <span class="text-gradient-secondary">Portfolio</span>
                </h1>
                <div class="typing-animation text-lg sm:text-xl md:text-2xl text-text-secondary max-w-3xl mx-auto">
                    Transforming Bangladesh Through Technology Excellence
                </div>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 max-w-4xl mx-auto mt-8">
                <div class="premium-stat animate-fade-in-up-delay">
                    <div class="stat-number text-gradient-primary counter text-2xl sm:text-3xl" data-target="3">0</div>
                    <div class="stat-label text-sm sm:text-base">Projects Delivered</div>
                </div>
                <div class="premium-stat animate-fade-in-up-delay-2">
                    <div class="stat-number text-gradient-secondary counter text-2xl sm:text-3xl" data-target="15">0</div>
                    <div class="stat-label text-sm sm:text-base">AI Solutions</div>
                </div>
                <div class="premium-stat animate-fade-in-up-delay-3">
                    <div class="stat-number text-gradient-purple counter text-2xl sm:text-3xl" data-target="4">0</div>
                    <div class="stat-label text-sm sm:text-base">Happy Clients</div>
                </div>
                <div class="premium-stat animate-fade-in-up">
                    <div class="stat-number text-gradient-primary counter text-2xl sm:text-3xl" data-target="100">0</div>
                    <div class="stat-label text-sm sm:text-base">Success Rate (%)</div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center mt-8">
                <button onclick="showNextSection()" class="btn-primary btn-hero group relative px-6 py-3">
                    <div class="btn-glow"></div>
                    Explore Our Work
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
                <a href="#contact-form" class="btn-secondary btn-hero px-6 py-3">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="scroll-indicator">
            <div class="scroll-dot"></div>
        </div>
    </div>
</section>

<!-- Service Sections -->
<section class="section py-12 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <div id="service-container" class="container mx-auto">
        <!-- Web Development Section -->
        <div class="service-section active" data-service="0">
            <div class="text-center mb-10 sm:mb-12">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gradient-primary">
                    Web Development Excellence
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-text-secondary max-w-3xl mx-auto leading-relaxed mt-4">
                    Comprehensive website development solutions with international standards. We create stunning, functional websites that elevate your brand.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 mb-12 sm:mb-16">
                <!-- Service Overview with Rotating Image Gallery -->
                <div class="feature-highlight">
                    <div class="mb-6 relative">
                        <div class="image-gallery-container relative h-48 sm:h-56 md:h-64 lg:h-72 rounded-lg overflow-hidden">
                            <div class="image-gallery" data-gallery="web">
                                <img src="{{ asset('images/frontend.jpg') }}" alt="Frontend Development" class="gallery-image active w-full h-full object-cover">
                                <img src="{{ asset('images/responsive-design.jpg') }}" alt="Responsive Design" class="gallery-image w-full h-full object-cover">
                                <img src="{{ asset('images/ui-design.jpg') }}" alt="UI Design" class="gallery-image w-full h-full object-cover">
                                <img src="{{ asset('images/web-performance.jpg') }}" alt="Web Performance" class="gallery-image w-full h-full object-cover">
                                <img src="{{ asset('images/web-security.jpg') }}" alt="Web Security" class="gallery-image w-full h-full object-cover">
                            </div>
                            <!-- Gallery Controls -->
                            <div class="gallery-controls absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                <button onclick="previousImage('web')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <button onclick="nextImage('web')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                                <button onclick="openFullscreen('web')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2 2z"/>
                                    </svg>
                                </button>
                            </div>
                            <!-- Image Indicators -->
                            <div class="image-indicators absolute bottom-4 right-4 flex space-x-1">
                                <div class="indicator active w-2 h-2 bg-white rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mr-4">
                            <img src="{{ asset('icons/ui-ux.png') }}" alt="UI/UX" class="w-8 h-8">
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-text-primary">UI/UX Design & Frontend</h3>
                    </div>
                    <p class="text-text-secondary mb-6 text-sm sm:text-base">
                        Modern, responsive designs that provide exceptional user experiences across all devices. Our design philosophy focuses on intuitive navigation and aesthetic appeal.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('icons/responsive.png') }}" alt="Check" class="w-6 h-6">
                                <span class="text-sm sm:text-base text-text-secondary">Responsive Design</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('icons/graphics.png') }}" alt="Check" class="w-6 h-6">
                                <span class="text-sm sm:text-base text-text-secondary">Custom Graphics</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('icons/identity.png') }}" alt="Check" class="w-6 h-6">
                                <span class="text-sm sm:text-base text-text-secondary">Brand Identity</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('icons/design.png') }}" alt="Check" class="w-6 h-6">
                                <span class="text-sm sm:text-base text-text-secondary">Logo Design</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('icons/seo_icon.png') }}" alt="Check" class="w-6 h-6">
                                <span class="text-sm sm:text-base text-text-secondary">SEO Optimization</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('icons/fast.png') }}" alt="Check" class="w-6 h-6">
                                <span class="text-sm sm:text-base text-text-secondary">Fast Loading</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Video Showcase with Additional Images -->
                <div class="feature-highlight">
                    <div class="project-video mb-6">
                        <video id="web-demo-video" class="w-full h-48 sm:h-56 md:h-64 lg:h-72 object-cover rounded-lg" poster="{{ asset('images/video-poster.png') }}" controls>
                            <source src="{{ asset('videos/record.mp4') }}" type="video/mp4">
                            <p>Your browser doesn't support video playback.</p>
                        </video>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-text-primary mb-4">Featured Project: LifeGuard+</h3>
                    <p class="text-text-secondary mb-6 text-sm sm:text-base">
                        LifeGuard+ provides AI-powered healthcare services and devices for Bangladesh's most underserved populations. Revolutionary medical technology made in Bangladesh.
                    </p>
                    
                    <!-- Additional Project Images -->
                    <div class="grid grid-cols-3 gap-2 sm:gap-3 mb-6">
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('bookbuybd')">
                            <img src="{{ asset('images/bookbuybd-dashboard.jpg') }}" alt="BookBuyBD Dashboard" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('bookbuybd')">
                            <img src="{{ asset('images/bookbuybd-catalog.jpg') }}" alt="BookBuyBD Catalog" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('bookbuybd')">
                            <img src="{{ asset('images/bookbuybd-mobile.jpg') }}" alt="BookBuyBD Mobile" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-3 sm:gap-4">
                        <div class="text-center bg-gradient-to-br from-purple-600/10 to-blue-600/10 rounded-lg p-3 sm:p-4 border border-purple-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-primary mb-1">5000+</div>
                            <div class="text-sm text-text-secondary">Books Listed</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-blue-600/10 to-cyan-600/10 rounded-lg p-3 sm:p-4 border border-blue-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-secondary mb-1">1200+</div>
                            <div class="text-sm text-text-secondary">Active Users</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-green-600/10 to-teal-600/10 rounded-lg p-3 sm:p-4 border border-green-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-primary mb-1">98%</div>
                            <div class="text-sm text-text-secondary">Uptime</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technology Stack -->
            <div class="mb-12 sm:mb-16">
                <h3 class="text-2xl sm:text-3xl font-bold text-text-primary mb-6 sm:mb-8 text-center">Technologies We Use</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-6">
                    <div class="tech-card flex flex-col items-center">
                        <div class="tech-icon">
                            <img src="{{ asset('icons/laravel_icon.png') }}" alt="Laravel" class="w-10 h-10 sm:w-12 sm:h-12">
                        </div>
                        <div class="tech-label text-sm sm:text-base">Laravel</div>
                    </div>
                    <div class="tech-card flex flex-col items-center">
                        <div class="tech-icon">
                            <img src="{{ asset('icons/php_icon.png') }}" alt="PHP" class="w-10 h-10 sm:w-12 sm:h-12">
                        </div>
                        <div class="tech-label text-sm sm:text-base">PHP</div>
                    </div>
                    <div class="tech-card flex flex-col items-center">
                        <div class="tech-icon">
                            <img src="{{ asset('icons/tailwind_icon.png') }}" alt="Tailwind" class="w-10 h-10 sm:w-12 sm:h-12">
                        </div>
                        <div class="tech-label text-sm sm:text-base">Tailwind CSS</div>
                    </div>
                    <div class="tech-card flex flex-col items-center">
                        <div class="tech-icon">
                            <img src="{{ asset('icons/alpine_icon.png') }}" alt="Alpine.js" class="w-10 h-10 sm:w-12 sm:h-12">
                        </div>
                        <div class="tech-label text-sm sm:text-base">Alpine.js</div>
                    </div>
                    <div class="tech-card flex flex-col items-center">
                        <div class="tech-icon">
                            <img src="{{ asset('icons/javascript_icon.png') }}" alt="JavaScript" class="w-10 h-10 sm:w-12 sm:h-12">
                        </div>
                        <div class="tech-label text-sm sm:text-base">JavaScript</div>
                    </div>
                    <div class="tech-card flex flex-col items-center">
                        <div class="tech-icon">
                            <img src="{{ asset('icons/mysql_icon.png') }}" alt="MySQL" class="w-10 h-10 sm:w-12 sm:h-12">
                        </div>
                        <div class="tech-label text-sm sm:text-base">MySQL</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Software Development Section -->
        <div class="service-section" data-service="1">
            <div class="text-center mb-10 sm:mb-12">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gradient-secondary">
                    Advanced Software Solutions
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-text-secondary max-w-3xl mx-auto leading-relaxed mt-4">
                    Custom GUI applications and web-based software solutions designed for seamless user interaction and robust functionality.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 mb-12 sm:mb-16">
                <div class="feature-highlight">
                    <div class="mb-6 relative">
                        <div class="image-gallery-container relative h-48 sm:h-56 md:h-64 lg:h-72 rounded-lg overflow-hidden">
                            <div class="image-gallery" data-gallery="software">
                                <img src="{{ asset('images/desktop-app.jpg') }}" alt="Desktop Application" class="gallery-image active w-full h-full object-cover">
                                <img src="{{ asset('images/software-dashboard.jpg') }}" alt="Software Dashboard" class="gallery-image w-full h-full object-cover">
                                <img src="{{ asset('images/inventory-management.jpg') }}" alt="Inventory Management" class="gallery-image w-full h-full object-cover">
                                <img src="{{ asset('images/business-analytics.jpg') }}" alt="Business Analytics" class="gallery-image w-full h-full object-cover">
                            </div>
                            <!-- Gallery Controls -->
                            <div class="gallery-controls absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                <button onclick="previousImage('software')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <button onclick="nextImage('software')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                                <button onclick="openFullscreen('software')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2 2z"/>
                                    </svg>
                                </button>
                            </div>
                            <!-- Image Indicators -->
                            <div class="image-indicators absolute bottom-4 right-4 flex space-x-1">
                                <div class="indicator active w-2 h-2 bg-white rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mr-4">
                            <img src="{{ asset('icons/desktop.png') }}" alt="Desktop" class="w-8 h-8">
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-text-primary">Desktop Applications</h3>
                    </div>
                    <p class="text-text-secondary mb-6 text-sm sm:text-base">
                        Modern desktop applications with advanced functionality and cross-platform compatibility for Windows, macOS, and Linux.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('icons/check.png') }}" alt="Check" class="w-6 h-6">
                            <span class="text-sm sm:text-base text-text-secondary">Cross-Platform Compatibility</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('icons/data.png') }}" alt="Check" class="w-6 h-6">
                            <span class="text-sm sm:text-base text-text-secondary">Real-time Data Processing</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('icons/security.png') }}" alt="Check" class="w-6 h-6">
                            <span class="text-sm sm:text-base text-text-secondary">Advanced Security Features</span>
                        </div>
                    </div>
                </div>

                <div class="feature-highlight">
                    <div class="project-video mb-6">
                        <video id="software-demo-video" class="w-full h-48 sm:h-56 md:h-64 lg:h-72 object-cover rounded-lg" poster="{{ asset('images/software-poster.png') }}" controls>
                            <source src="{{ asset('videos/software-demo.mp4') }}" type="video/mp4">
                            <p>Your browser doesn't support video playback.</p>
                        </video>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-text-primary mb-4">Business Management Suite</h3>
                    <p class="text-text-secondary mb-6 text-sm sm:text-base">
                        Comprehensive business management software with inventory tracking, financial reporting, and employee management modules.
                    </p>

                    <!-- Additional Project Images -->
                    <div class="grid grid-cols-3 gap-2 sm:gap-3 mb-6">
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('business-suite')">
                            <img src="{{ asset('images/business-suite-reports.jpg') }}" alt="Business Reports" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('business-suite')">
                            <img src="{{ asset('images/business-suite-analytics.jpg') }}" alt="Analytics Dashboard" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('business-suite')">
                            <img src="{{ asset('images/business-suite-mobile.jpg') }}" alt="Mobile Interface" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-3 sm:gap-4">
                        <div class="text-center bg-gradient-to-br from-purple-600/10 to-blue-600/10 rounded-lg p-3 sm:p-4 border border-purple-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-primary mb-1">50+</div>
                            <div class="text-sm text-text-secondary">Features</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-green-600/10 to-teal-600/10 rounded-lg p-3 sm:p-4 border border-green-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-secondary mb-1">99.9%</div>
                            <div class="text-sm text-text-secondary">Uptime</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-blue-600/10 to-cyan-600/10 rounded-lg p-3 sm:p-4 border border-blue-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-primary mb-1">100+</div>
                            <div class="text-sm text-text-secondary">Active Users</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AI Solutions Section -->
        <div class="service-section" data-service="2">
            <div class="text-center mb-10 sm:mb-12">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gradient-primary">
                    AI Innovation Lab
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-text-secondary max-w-3xl mx-auto leading-relaxed mt-4">
                    Advanced artificial intelligence and machine learning solutions that automate processes and provide intelligent insights.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 mb-12 sm:mb-16">
                <div class="feature-highlight">
                    <div class="mb-6 relative">
                        <div class="image-gallery-container relative h-48 sm:h-56 md:h-64 lg:h-72 rounded-lg overflow-hidden">
                            <div class="image-gallery" data-gallery="ai">
                                <img src="{{ asset('images/machine-learning.jpg') }}" alt="Machine Learning" class="gallery-image active w-full h-full object-cover">
                                <img src="{{ asset('images/data-analytics.jpg') }}" alt="Data Analytics" class="gallery-image w-full h-full object-cover">
                                <img src="{{ asset('images/ai-automation.jpg') }}" alt="AI Automation" class="gallery-image w-full h-full object-cover">
                                <img src="{{ asset('images/predictive-models.jpg') }}" alt="Predictive Models" class="gallery-image w-full h-full object-cover">
                            </div>
                            <!-- Gallery Controls -->
                            <div class="gallery-controls absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                <button onclick="previousImage('ai')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <button onclick="nextImage('ai')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                                <button onclick="openFullscreen('ai')" class="control-btn bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2 2z"/>
                                    </svg>
                                </button>
                            </div>
                            <!-- Image Indicators -->
                            <div class="image-indicators absolute bottom-4 right-4 flex space-x-1">
                                <div class="indicator active w-2 h-2 bg-white rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                                <div class="indicator w-2 h-2 bg-white/50 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center mr-4">
                            <img src="{{ asset('icons/brain.png') }}" alt="AI Brain" class="w-8 h-8">
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-text-primary">Machine Learning</h3>
                    </div>
                    <p class="text-text-secondary mb-6 text-sm sm:text-base">
                        Custom ML models for predictive analytics, pattern recognition, and automated decision-making systems.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('icons/check_7.png') }}" alt="Check" class="w-6 h-6">
                            <span class="text-sm sm:text-base text-text-secondary">Predictive Analytics</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('icons/check_3.png') }}" alt="Check" class="w-6 h-6">
                            <span class="text-sm sm:text-base text-text-secondary">Pattern Recognition</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('icons/check_4.png') }}" alt="Check" class="w-6 h-6">
                            <span class="text-sm sm:text-base text-text-secondary">Automated Decisions</span>
                        </div>
                    </div>
                </div>

                <div class="feature-highlight">
                    <div class="project-video mb-6">
                        <video id="ai-demo-video" class="w-full h-48 sm:h-56 md:h-64 lg:h-72 object-cover rounded-lg" poster="{{ asset('images/ai-poster.png') }}" controls>
                            <source src="{{ asset('videos/ai.mp4') }}" type="video/mp4">
                            <p>Your browser doesn't support video playback.</p>
                        </video>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-text-primary mb-4">LifeGuard+ Healthcare AI</h3>
                    <p class="text-text-secondary mb-6 text-sm sm:text-base">
                        Revolutionary healthcare monitoring system powered by deep learning AI, designed for rural areas and emergency response.
                    </p>

                    <!-- Additional Project Images -->
                    <div class="grid grid-cols-3 gap-2 sm:gap-3 mb-6">
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('lifeguard')">
                            <img src="{{ asset('images/lifeguard-dashboard.jpg') }}" alt="LifeGuard Dashboard" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('lifeguard')">
                            <img src="{{ asset('images/lifeguard-monitoring.jpg') }}" alt="Health Monitoring" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="image-gallery-container relative h-20 sm:h-24 rounded overflow-hidden cursor-pointer" onclick="openProjectGallery('lifeguard')">
                            <img src="{{ asset('images/lifeguard-alerts.jpg') }}" alt="Alert System" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-3 sm:gap-4">
                        <div class="text-center bg-gradient-to-br from-green-600/10 to-teal-600/10 rounded-lg p-3 sm:p-4 border border-green-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-primary mb-1">95%</div>
                            <div class="text-sm text-text-secondary">Accuracy</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-purple-600/10 to-blue-600/10 rounded-lg p-3 sm:p-4 border border-purple-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-secondary mb-1">24/7</div>
                            <div class="text-sm text-text-secondary">Monitoring</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-blue-600/10 to-cyan-600/10 rounded-lg p-3 sm:p-4 border border-blue-600/20">
                            <div class="text-xl sm:text-2xl font-bold text-gradient-primary mb-1">15</div>
                            <div class="text-sm text-text-secondary">Health Metrics</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="section bg-dark-surface relative py-12 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <div class="purple-gradient-overlay"></div>
    <div class="container mx-auto">
        <div class="text-center mb-10 sm:mb-12">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gradient-primary">
                Client Success Stories
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-text-secondary max-w-3xl mx-auto mt-4">
                Hear from our satisfied clients who have transformed their businesses with our innovative solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <div class="testimonial-card p-6 rounded-lg bg-dark-surface/50 border border-purple-600/20">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mr-4">
                        <img src="{{ asset('icons/user.png') }}" alt="User" class="w-6 h-6">
                    </div>
                    <div>
                        <h4 class="text-base sm:text-lg font-bold text-text-primary">Ahmed Rahman</h4>
                        <p class="text-sm text-accent-blue">CEO, BookBuyBD</p>
                    </div>
                </div>
                <p class="text-text-secondary italic text-sm sm:text-base">
                    "Techtonauts transformed our book business completely. The e-commerce platform is intuitive, fast, and increased our sales by 300%."
                </p>
            </div>

            <div class="testimonial-card p-6 rounded-lg bg-dark-surface/50 border border-purple-600/20">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center mr-4">
                        <img src="{{ asset('icons/user.png') }}" alt="User" class="w-6 h-6">
                    </div>
                    <div>
                        <h4 class="text-base sm:text-lg font-bold text-text-primary">Dr. Sarah Fatima</h4>
                        <p class="text-sm text-accent-green">Medical Director</p>
                    </div>
                </div>
                <p class="text-text-secondary italic text-sm sm:text-base">
                    "The AI-powered healthcare solutions are revolutionary. We're eagerly awaiting LifeGuard+ as it will transform rural healthcare."
                </p>
            </div>

            <div class="testimonial-card p-6 rounded-lg bg-dark-surface/50 border border-purple-600/20">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mr-4">
                        <img src="{{ asset('icons/user.png') }}" alt="User" class="w-6 h-6">
                    </div>
                    <div>
                        <h4 class="text-base sm:text-lg font-bold text-text-primary">Md. Hasanul Haque</h4>
                        <p class="text-sm text-accent-orange">IT Manager</p>
                    </div>
                </div>
                <p class="text-text-secondary italic text-sm sm:text-base">
                    "Their custom software solution streamlined our workflow and improved productivity by 250%. Outstanding technical expertise!"
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Contact Form -->
<section id="contact-form" class="section bg-dark-bg relative py-12 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <div class="purple-gradient-overlay"></div>
    <div class="container mx-auto">
        <div class="text-center mb-10 sm:mb-12">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gradient-primary">
                Get In Touch
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-text-secondary max-w-3xl mx-auto mt-4">
                Ready to transform your vision into reality? Let's discuss your project requirements and create something extraordinary together.
            </p>
        </div>

        <div class="max-w-3xl mx-auto">
            <!-- Contact Form -->
            <div class="card-base p-6 sm:p-8 rounded-lg bg-dark-surface/50 border border-purple-600/20">
                <form id="advanced-contact-form" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div class="form-group">
                            <label for="firstName" class="block text-sm font-semibold text-text-primary mb-2">
                                First Name *
                            </label>
                            <input type="text" id="firstName" name="firstName" required 
                                   class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary placeholder-text-muted focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300" 
                                   placeholder="John">
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="block text-sm font-semibold text-text-primary mb-2">
                                Last Name *
                            </label>
                            <input type="text" id="lastName" name="lastName" required 
                                   class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary placeholder-text-muted focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300" 
                                   placeholder="Doe">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div class="form-group">
                            <label for="email" class="block text-sm font-semibold text-text-primary mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" required 
                                   class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary placeholder-text-muted focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300" 
                                   placeholder="john@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="block text-sm font-semibold text-text-primary mb-2">
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone" 
                                   class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary placeholder-text-muted focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300" 
                                   placeholder="+880 1234 567890">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div class="form-group">
                            <label for="company" class="block text-sm font-semibold text-text-primary mb-2">
                                Company/Organization
                            </label>
                            <input type="text" id="company" name="company" 
                                   class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary placeholder-text-muted focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300" 
                                   placeholder="Your Company">
                        </div>
                        <div class="form-group">
                            <label for="serviceType" class="block text-sm font-semibold text-text-primary mb-2">
                                Service Interest *
                            </label>
                            <select id="serviceType" name="serviceType" required 
                                    class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300">
                                <option value="">Select a service</option>
                                <option value="web-development">Website Development</option>
                                <option value="software-development">Software Solutions</option>
                                <option value="ai-solutions">AI Innovation</option>
                                <option value="mobile-development">Mobile App Development</option>
                                <option value="consulting">Technical Consulting</option>
                                <option value="custom-solution">Custom Solution</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="projectType" class="block text-sm font-semibold text-text-primary mb-3">
                            Project Type
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="projectType" value="new-project" class="text-accent-blue focus:ring-accent-blue">
                                <span class="text-sm text-text-secondary">New Project</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="projectType" value="redesign" class="text-accent-blue focus:ring-accent-blue">
                                <span class="text-sm text-text-secondary">Redesign</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="projectType" value="maintenance" class="text-accent-blue focus:ring-accent-blue">
                                <span class="text-sm text-text-secondary">Maintenance</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="projectType" value="consultation" class="text-accent-blue focus:ring-accent-blue">
                                <span class="text-sm text-text-secondary">Consultation</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div class="form-group">
                            <label for="budget" class="block text-sm font-semibold text-text-primary mb-2">
                                Budget Range (USD)
                            </label>
                            <select id="budget" name="budget" 
                                    class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300">
                                <option value="">Select budget range</option>
                                <option value="under-1000">Under $1,000</option>
                                <option value="1000-5000">$1,000 - $5,000</option>
                                <option value="5000-10000">$5,000 - $10,000</option>
                                <option value="10000-25000">$10,000 - $25,000</option>
                                <option value="25000-50000">$25,000 - $50,000</option>
                                <option value="above-50000">Above $50,000</option>
                                <option value="enterprise">Enterprise Project</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="timeline" class="block text-sm font-semibold text-text-primary mb-2">
                                Project Timeline
                            </label>
                            <select id="timeline" name="timeline" 
                                    class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300">
                                <option value="">Select timeline</option>
                                <option value="asap">ASAP (Rush job)</option>
                                <option value="1-month">Within 1 month</option>
                                <option value="2-3-months">2-3 months</option>
                                <option value="3-6-months">3-6 months</option>
                                <option value="6-12-months">6-12 months</option>
                                <option value="flexible">Flexible timeline</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="projectDetails" class="block text-sm font-semibold text-text-primary mb-2">
                            Project Details *
                        </label>
                        <textarea id="projectDetails" name="projectDetails" required rows="5" 
                                  class="form-input w-full px-4 py-3 rounded-lg bg-dark-surface border border-purple-600/20 text-text-primary placeholder-text-muted focus:border-accent-blue focus:ring-2 focus:ring-accent-blue/20 transition-all duration-300 resize-vertical" 
                                  placeholder="Please describe your project requirements, goals, target audience, and any specific features you need. The more details you provide, the better we can assist you."></textarea>
                    </div>

                    <div class="space-y-3">
                        <div class="form-group">
                            <label class="flex items-start space-x-3 cursor-pointer">
                                <input type="checkbox" id="newsletter" name="newsletter" class="mt-1 text-accent-blue focus:ring-accent-blue flex-shrink-0">
                                <span class="text-sm text-text-secondary">I would like to receive updates about new services and technology insights from Techtonauts.</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="flex items-start space-x-3 cursor-pointer">
                                <input type="checkbox" id="terms" name="terms" required class="mt-1 text-accent-blue focus:ring-accent-blue flex-shrink-0">
                                <span class="text-sm text-text-secondary">I agree to the <a href="#" class="text-accent-blue hover:text-accent-purple transition-colors">Terms of Service</a> and <a href="#" class="text-accent-blue hover:text-accent-purple transition-colors">Privacy Policy</a> *</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-center pt-6">
                        <button type="submit" class="btn-primary btn-hero group relative px-8 py-4 min-w-[200px]">
                            <div class="btn-glow"></div>
                            Send Message
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>

                    <div class="text-center text-sm text-text-muted bg-dark-surface/50 rounded-lg p-4 border border-purple-600/10 mt-6">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            <span class="font-semibold text-text-primary">Your information is secure</span>
                        </div>
                        <p>We use industry-standard encryption to protect your data and will never share your information with third parties. You can expect a response within 2-4 hours during business days.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section bg-dark-surface relative py-12 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <div class="cta-bg-pattern"></div>
    <div class="container mx-auto">
        <div class="text-center space-y-6">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gradient-primary">
                Ready to Transform Your Vision?
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-text-secondary max-w-3xl mx-auto leading-relaxed">
                Join the digital revolution with Techtonauts. Let's collaborate to bring your innovative ideas to life and create solutions that make a difference.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center">
                <a href="#contact-form" class="btn-primary btn-hero group relative px-6 py-3">
                    <div class="btn-glow"></div>
                    Start Your Project
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="mailto:contact@techtonauts.com" class="btn-secondary btn-hero px-6 py-3">
                    Free Consultation
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 max-w-4xl mx-auto mt-10 sm:mt-12">
                <div class="text-center space-y-2">
                    <div class="text-2xl sm:text-3xl font-black text-gradient-primary">24/7</div>
                    <div class="text-sm sm:text-base text-text-secondary">Technical Support</div>
                </div>
                <div class="text-center space-y-2">
                    <div class="text-2xl sm:text-3xl font-black text-gradient-secondary">100%</div>
                    <div class="text-sm sm:text-base text-text-secondary">Satisfaction Guaranteed</div>
                </div>
                <div class="text-center space-y-2">
                    <div class="text-2xl sm:text-3xl font-black text-gradient-purple">Fast</div>
                    <div class="text-sm sm:text-base text-text-secondary">Delivery Promise</div>
                </div>
                <div class="text-center space-y-2">
                    <div class="text-2xl sm:text-3xl font-black text-gradient-primary">Premium</div>
                    <div class="text-sm sm:text-base text-text-secondary">Quality Standards</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection