@extends('layouts.app')

@section('title', 'Techtonauts - World-Class Tech Venture & Innovation Platform')

@section('content')
<!-- Hero Section with Enhanced Dark Theme -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-bg) 0%, var(--color-dark-surface) 50%, var(--color-dark-elevated) 100%);">
    <!-- Enhanced Animated Background with Parallax -->
    <div class="absolute inset-0 z-0">
        <div class="particles">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
            <div class="particle particle-5"></div>
            <div class="particle particle-6"></div>
            <div class="particle" style="top: 12%; left: 18%;"></div>
            <div class="particle" style="top: 75%; right: 22%;"></div>
            <div class="particle" style="bottom: 20%; left: 12%;"></div>
            <div class="particle" style="top: 40%; right: 18%;"></div>
            <div class="particle" style="top: 28%; left: 65%;"></div>
            <div class="particle" style="bottom: 35%; right: 45%;"></div>
        </div>

        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
        <div class="floating-orb orb-3"></div>
        <div class="floating-orb orb-4"></div>
        <div class="floating-orb orb-5"></div>

        <div class="tech-grid opacity-40"></div>
        <div class="absolute inset-0 bg-gradient-radial from-transparent via-accent-blue/5 to-accent-purple/10"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-accent-blue/10 via-transparent to-accent-purple/10"></div>

        <div class="absolute top-16 left-8 w-28 h-28 bg-gradient-to-br from-accent-blue/25 to-accent-purple/25 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-24 right-12 w-36 h-36 bg-gradient-to-br from-accent-green/25 to-accent-blue/25 rounded-full blur-xl animate-pulse" style="animation-delay: 1.5s;"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="hero-content-wrapper">
            <div class="inline-flex items-center px-3 py-1.5 md:px-6 md:py-3 bg-glass-bg-strong backdrop-blur-lg border border-accent-purple/40 rounded-full mb-6 md:mb-8 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-2 h-2 bg-accent-green rounded-full mr-2 md:mr-3 animate-pulse"></div>
                <span class="text-xs md:text-sm font-medium text-text-primary">R&D Program Running for 5+ Months</span>
                <div class="ml-2 md:ml-3 w-1 h-1 bg-accent-blue rounded-full animate-ping"></div>
            </div>

            <h1 class="hero-title mb-6 md:mb-8">
                <span class="block">
                    <span class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-heading font-extrabold leading-none">
                        <span class="text-gradient-primary premium-glow">Tech</span><span class="text-gradient-secondary premium-glow">tonauts</span>
                    </span>
                </span>
                <span class="block text-base sm:text-lg md:text-xl lg:text-2xl mt-2 sm:mt-4 text-text-secondary font-medium typing-animation">
                    Where Technology and Purpose Align—for Our People.
                </span>
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-text-secondary mb-8 md:mb-10 max-w-5xl mx-auto leading-relaxed">
                Empowering Bangladeshi businesses with <span class="text-accent-blue font-semibold">cutting-edge AI</span>,
                <span class="text-accent-purple font-semibold">blockchain solutions</span>, and
                <span class="text-accent-green font-semibold">innovative technology</span> that transforms ideas into digital reality.
            </p>

            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 md:gap-6 justify-center items-center">
                <a href="#contact" class="btn-primary btn-hero group relative overflow-hidden w-full sm:w-auto min-w-[180px] md:min-w-[200px] shadow-lg hover:shadow-2xl hover:shadow-accent-blue/25 transition-all duration-300">
                    <span class="relative z-10 flex items-center justify-center">
                        Start Your Journey
                        <svg class="w-4 md:w-5 h-4 md:h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                    <div class="btn-glow"></div>
                </a>

                <a href="#services" class="btn-secondary btn-hero-secondary group relative overflow-hidden w-full sm:w-auto min-w-[180px] md:min-w-[200px] border-2 border-accent-purple/60 bg-glass-bg-strong backdrop-blur-sm hover:bg-accent-purple hover:text-white transition-all duration-300">
                    <span class="relative z-10 flex items-center justify-center">
                        <svg class="w-4 md:w-5 h-4 md:h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Explore Services
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-4 sm:bottom-6 md:bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="scroll-indicator group cursor-pointer">
            <div class="scroll-dot group-hover:scale-110 transition-transform"></div>
            <p class="text-[10px] sm:text-xs text-text-muted mt-1 opacity-0 group-hover:opacity-100 transition-opacity">Scroll Down</p>
        </div>
    </div>
</section>

<!-- Stats Section with Dark Premium Glass Cards -->
<section class="py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-surface) 0%, var(--color-dark-bg) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0 bg-gradient-to-br from-accent-purple/10 to-accent-blue/10"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-responsive">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gradient-primary mb-8 transform hover:scale-105 transition-all duration-300">
                Driving Innovation Forward
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Our impact speaks through numbers, innovation, and the success of our clients worldwide
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="stat-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl hover:shadow-accent-blue/20 transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 group">
                <div class="stat-icon bg-gradient-to-br from-accent-blue to-accent-purple shadow-lg group-hover:shadow-xl group-hover:shadow-accent-blue/30 transform group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <div class="stat-number counter text-text-primary group-hover:text-accent-blue transition-colors duration-300" data-target="500">0</div>
                <div class="stat-label text-text-primary group-hover:text-text-primary transition-colors duration-300">Projects Delivered</div>
                <div class="stat-description text-text-muted">Successfully completed with excellence</div>
            </div>

            <div class="stat-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl hover:shadow-accent-purple/20 transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 group">
                <div class="stat-icon bg-gradient-to-br from-accent-purple to-accent-green shadow-lg group-hover:shadow-xl group-hover:shadow-accent-purple/30 transform group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                    </svg>
                </div>
                <div class="stat-number counter text-text-primary group-hover:text-accent-purple transition-colors duration-300" data-target="250">0</div>
                <div class="stat-label text-text-primary group-hover:text-text-primary transition-colors duration-300">Happy Clients</div>
                <div class="stat-description text-text-muted">Worldwide partnerships built</div>
            </div>

            <div class="stat-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl hover:shadow-accent-green/20 transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 group">
                <div class="stat-icon bg-gradient-to-br from-accent-green to-accent-blue shadow-lg group-hover:shadow-xl group-hover:shadow-accent-green/30 transform group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
                <div class="stat-number counter text-text-primary group-hover:text-accent-green transition-colors duration-300" data-target="99">0</div>
                <div class="stat-label text-text-primary group-hover:text-text-primary transition-colors duration-300">Success Rate %</div>
                <div class="stat-description text-text-muted">Project completion excellence</div>
            </div>

            <div class="stat-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl hover:shadow-accent-blue/20 transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 group">
                <div class="stat-icon bg-gradient-to-br from-accent-blue to-accent-purple shadow-lg group-hover:shadow-xl group-hover:shadow-accent-blue/30 transform group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="stat-number counter text-text-primary group-hover:text-accent-blue transition-colors duration-300" data-target="24">0</div>
                <div class="stat-label text-text-primary group-hover:text-text-primary transition-colors duration-300">Support Hours</div>
                <div class="stat-description text-text-muted">Round-the-clock assistance</div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Tech Solutions Section with Dark Ultra-Premium 3-Card Design -->
<section id="services" class="py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-bg) 0%, var(--color-dark-surface) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0">
        <div class="cta-bg-pattern opacity-30"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-responsive">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gradient-primary mb-8 transform hover:scale-105 transition-all duration-300">
                Premium Tech Solutions
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Comprehensive technology services designed to elevate your business to new heights
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Ultra-Premium Web Development Card -->
            <div class="service-card hover-lift premium-glass-card group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-blue/30 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 relative overflow-hidden">
                <div class="service-overlay bg-gradient-to-br from-accent-blue/20 to-accent-purple/20 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <!-- Animated Background Glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-accent-blue/10 via-transparent to-accent-purple/10 opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                
                <!-- Premium Header with Floating Icon -->
                <div class="service-header relative z-10">
                    <div class="service-icon bg-gradient-to-br from-accent-blue to-accent-purple shadow-xl group-hover:shadow-2xl group-hover:shadow-accent-blue/40 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 relative overflow-hidden">
                        <svg class="w-8 h-8 text-white transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="service-title text-text-primary group-hover:text-accent-blue transition-colors duration-300">Web Development</h3>
                </div>
                
                <p class="service-description text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                    Cutting-edge web applications built with modern frameworks and premium user experiences that drive engagement and conversions with exceptional performance.
                </p>
                
                <ul class="service-list space-y-2">
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-blue rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Responsive Design Architecture
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-purple rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Progressive Web Applications
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-green rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        E-commerce Solutions
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-blue rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Performance Optimization
                    </li>
                </ul>
                
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-gradient-to-r from-accent-blue to-accent-purple text-white rounded-full font-semibold text-sm hover:shadow-xl hover:shadow-accent-blue/30 transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group/btn">
                        <span class="relative z-10">Learn More</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-accent-purple to-accent-blue opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </div>
            </div>

            <!-- Ultra-Premium Software Development Card -->
            <div class="service-card hover-lift premium-glass-card group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-purple/30 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 relative overflow-hidden">
                <div class="service-overlay bg-gradient-to-br from-accent-purple/20 to-accent-green/20 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <!-- Animated Background Glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-accent-purple/10 via-transparent to-accent-green/10 opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                
                <!-- Premium Header with Floating Icon -->
                <div class="service-header relative z-10">
                    <div class="service-icon bg-gradient-to-br from-accent-purple to-accent-green shadow-xl group-hover:shadow-2xl group-hover:shadow-accent-purple/40 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 relative overflow-hidden">
                        <svg class="w-8 h-8 text-white transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="service-title text-text-primary group-hover:text-accent-purple transition-colors duration-300">Software Development</h3>
                </div>
                
                <p class="service-description text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                    Advanced GUI applications and web-based software solutions designed for seamless user interaction and robust functionality across all platforms.
                </p>
                
                <ul class="service-list space-y-2">
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-purple rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Desktop GUI Applications
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-green rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Web-based Software Solutions
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-blue rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Cross-Platform Compatibility
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-purple rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Custom Software Architecture
                    </li>
                </ul>
                
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-gradient-to-r from-accent-purple to-accent-green text-white rounded-full font-semibold text-sm hover:shadow-xl hover:shadow-accent-purple/30 transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group/btn">
                        <span class="relative z-10">Learn More</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-accent-green to-accent-purple opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </div>
            </div>

            <!-- Ultra-Premium AI Solutions Card -->
            <div class="service-card hover-lift premium-glass-card group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-green/30 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 relative overflow-hidden">
                <div class="service-overlay bg-gradient-to-br from-accent-green/20 to-accent-blue/20 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <!-- Animated Background Glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-accent-green/10 via-transparent to-accent-blue/10 opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                
                <!-- Premium Header with Floating Icon -->
                <div class="service-header relative z-10">
                    <div class="service-icon bg-gradient-to-br from-accent-green to-accent-blue shadow-xl group-hover:shadow-2xl group-hover:shadow-accent-green/40 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 relative overflow-hidden">
                        <svg class="w-8 h-8 text-white transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="service-title text-text-primary group-hover:text-accent-green transition-colors duration-300">AI Solutions</h3>
                </div>
                
                <p class="service-description text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                    Advanced artificial intelligence and machine learning solutions that automate processes and provide intelligent insights for your business growth.
                </p>
                
                <ul class="service-list space-y-2">
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-green rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Machine Learning Models
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-blue rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Natural Language Processing
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-purple rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Computer Vision Systems
                    </li>
                    <li class="flex items-center text-text-secondary group-hover:text-text-primary transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-green rounded-full mr-3 transform group-hover:scale-125 transition-transform duration-300"></div>
                        Predictive Analytics
                    </li>
                </ul>
                
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-gradient-to-r from-accent-green to-accent-blue text-white rounded-full font-semibold text-sm hover:shadow-xl hover:shadow-accent-green/30 transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group/btn">
                        <span class="relative z-10">Learn More</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-accent-blue to-accent-green opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cutting-Edge Technologies Showcase with Dark Theme -->
<section class="py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-surface) 0%, var(--color-dark-bg) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0 bg-gradient-to-br from-accent-blue/5 to-accent-purple/10"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-responsive">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold text-gradient-primary mb-8 transform hover:scale-105 transition-all duration-300" style="text-shadow: 0 4px 20px rgba(79, 70, 229, 0.25);">
                Cutting-Edge Technologies
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                We leverage the latest technologies to build solutions that stand the test of time
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="flex-1">
                <div class="tech-showcase">
                    <div class="connecting-lines">
                        <svg class="w-full h-full" viewBox="0 0 300 300">
                            <defs>
                                <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:var(--color-accent-blue);stop-opacity:0.8" />
                                    <stop offset="50%" style="stop-color:var(--color-accent-purple);stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:var(--color-accent-green);stop-opacity:0.8" />
                                </linearGradient>
                            </defs>
                            <path d="M150,50 L80,250 L220,250 Z" stroke="url(#lineGradient)" stroke-width="2" fill="none" opacity="0.8"/>
                        </svg>
                    </div>
                    <div class="tech-orb tech-orb-1 shadow-xl hover:shadow-2xl hover:shadow-accent-blue/40 transition-all duration-500">
                        <div class="tech-pulse">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="tech-orb tech-orb-2 shadow-xl hover:shadow-2xl hover:shadow-accent-purple/40 transition-all duration-500">
                        <div class="tech-pulse">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="tech-orb tech-orb-3 shadow-xl hover:shadow-2xl hover:shadow-accent-green/40 transition-all duration-500">
                        <div class="tech-pulse">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 space-y-6">
                <div class="feature-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl hover:shadow-accent-blue/20 transform hover:scale-105 transition-all duration-500">
                    <div class="feature-icon bg-gradient-to-br from-accent-blue to-accent-purple shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-text-primary mb-2">Lightning Fast Performance</h4>
                        <p class="text-text-secondary">Optimized code and infrastructure ensuring blazing-fast load times and seamless user experiences.</p>
                    </div>
                </div>

                <div class="feature-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl hover:shadow-accent-purple/20 transform hover:scale-105 transition-all duration-500">
                    <div class="feature-icon bg-gradient-to-br from-accent-purple to-accent-green shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-text-primary mb-2">Enterprise Security</h4>
                        <p class="text-text-secondary">Bank-level security protocols protecting your data with advanced encryption and monitoring systems.</p>
                    </div>
                </div>

                <div class="feature-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl hover:shadow-accent-green/20 transform hover:scale-105 transition-all duration-500">
                    <div class="feature-icon bg-gradient-to-br from-accent-green to-accent-blue shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-text-primary mb-2">Scalable Architecture</h4>
                        <p class="text-text-secondary">Future-proof solutions that grow with your business, handling millions of users effortlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Technology Stack Showcase -->
            <div class="mt-16">
                <div class="text-center mb-16">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Advanced Technology Stack</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Cutting-edge technologies powering our software solutions</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/laravel_icon.png') }}" alt="Laravel Framework" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Laravel</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/react_icon.png') }}" alt="React.js" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">React.js</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/python_icon.png') }}" alt="Python AI" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Python AI</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/docker_icon.png') }}" alt="Docker" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Docker</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/kubernetes_icon.png') }}" alt="Kubernetes" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Kubernetes</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/tensorflow_icon.png') }}" alt="TensorFlow" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">TensorFlow</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/arduino_icon.png') }}" alt="Arduino IoT" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Arduino IoT</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/aws_icon.png') }}" alt="AWS Cloud" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">AWS Cloud</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Enhanced Portfolio Section with Dark Theme -->
<section id="portfolio" class="py-16 sm:py-20 lg:py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-surface) 0%, var(--color-dark-bg) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0 bg-gradient-to-b from-accent-purple/5 to-transparent"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="heading text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-6 animate-on-scroll transform hover:scale-105 transition-all duration-300">
                Our <span class="text-gradient-primary">Portfolio</span>
            </h2>
            <p class="text-lg sm:text-xl lg:text-2xl text-text-secondary max-w-5xl mx-auto leading-relaxed animate-on-scroll">
                Showcasing our innovative projects and cutting-edge solutions that transform businesses and solve real-world challenges
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 max-w-6xl mx-auto">
            <!-- Ultra-Premium Website Development Card -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-blue/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 relative overflow-hidden" data-delay="0">
                <div class="portfolio-image relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent-blue/30 to-accent-purple/30 group-hover:from-accent-blue/40 group-hover:to-accent-purple/40 transition-all duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-4 mx-auto transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold">Web Development</h4>
                        </div>
                    </div>
                    <div class="portfolio-vibrant group-hover:opacity-0 transition-opacity duration-300"></div>
                </div>
                <div class="portfolio-content p-6">
                    <div class="portfolio-category text-accent-blue font-semibold text-sm mb-2">Web Development</div>
                    <h3 class="portfolio-title group-hover:text-accent-blue transition-colors duration-300 text-xl font-bold text-text-primary mb-3">Website Development</h3>
                    <p class="portfolio-description text-sm sm:text-base text-text-secondary mb-4 leading-relaxed">
                        Modern, responsive websites built with cutting-edge technologies. From corporate sites to e-commerce platforms with premium design and functionality.
                    </p>
                    <div class="portfolio-tech flex flex-wrap gap-2">
                        <span class="tech-tag bg-accent-blue/20 border border-accent-blue/40 text-accent-blue px-3 py-1 rounded-full text-xs font-medium hover:bg-accent-blue/30 transition-colors duration-300">React</span>
                        <span class="tech-tag bg-accent-green/20 border border-accent-green/40 text-accent-green px-3 py-1 rounded-full text-xs font-medium hover:bg-accent-green/30 transition-colors duration-300">Vue.js</span>
                        <span class="tech-tag bg-red-500/20 border border-red-500/40 text-red-500 px-3 py-1 rounded-full text-xs font-medium hover:bg-red-500/30 transition-colors duration-300">Laravel</span>
                    </div>
                </div>
            </div>

            <!-- Ultra-Premium Software Development Card -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-purple/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 relative overflow-hidden" data-delay="100">
                <div class="portfolio-image relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent-purple/30 to-accent-green/30 group-hover:from-accent-purple/40 group-hover:to-accent-green/40 transition-all duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-4 mx-auto transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold">Software Development</h4>
                        </div>
                    </div>
                    <div class="portfolio-vibrant group-hover:opacity-0 transition-opacity duration-300"></div>
                </div>
                <div class="portfolio-content p-6">
                    <div class="portfolio-category text-accent-purple font-semibold text-sm mb-2">Software Development</div>
                    <h3 class="portfolio-title group-hover:text-accent-purple transition-colors duration-300 text-xl font-bold text-text-primary mb-3">Software Development</h3>
                    <p class="portfolio-description text-sm sm:text-base text-text-secondary mb-4 leading-relaxed">
                        Advanced GUI applications and web-based software solutions with intuitive interfaces, robust functionality, and seamless cross-platform compatibility.
                    </p>
                    <div class="portfolio-tech flex flex-wrap gap-2">
                        <span class="tech-tag bg-accent-purple/20 border border-accent-purple/40 text-accent-purple px-3 py-1 rounded-full text-xs font-medium hover:bg-accent-purple/30 transition-colors duration-300">Desktop GUI</span>
                        <span class="tech-tag bg-accent-green/20 border border-accent-green/40 text-accent-green px-3 py-1 rounded-full text-xs font-medium hover:bg-accent-green/30 transition-colors duration-300">Web Apps</span>
                        <span class="tech-tag bg-accent-blue/20 border border-accent-blue/40 text-accent-blue px-3 py-1 rounded-full text-xs font-medium hover:bg-accent-blue/30 transition-colors duration-300">Cross-Platform</span>
                    </div>
                </div>
            </div>

            <!-- Ultra-Premium API & AI Services Card -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-green/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 relative overflow-hidden" data-delay="200">
                <div class="portfolio-image relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent-green/30 to-accent-blue/30 group-hover:from-accent-green/40 group-hover:to-accent-blue/40 transition-all duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-4 mx-auto transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold">AI & Backend</h4>
                        </div>
                    </div>
                    <div class="portfolio-vibrant group-hover:opacity-0 transition-opacity duration-300"></div>
                </div>
                <div class="portfolio-content p-6">
                    <div class="portfolio-category text-accent-green font-semibold text-sm mb-2">AI & Backend</div>
                    <h3 class="portfolio-title group-hover:text-accent-green transition-colors duration-300 text-xl font-bold text-text-primary mb-3">API, AI, Deep Learning & Machine Learning</h3>
                    <p class="portfolio-description text-sm sm:text-base text-text-secondary mb-4 leading-relaxed">
                        Robust APIs, AI-powered solutions, deep learning models, and machine learning algorithms that drive intelligent business automation and insights.
                    </p>
                    <div class="portfolio-tech flex flex-wrap gap-2">
                        <span class="tech-tag bg-orange-500/20 border border-orange-500/40 text-orange-500 px-3 py-1 rounded-full text-xs font-medium hover:bg-orange-500/30 transition-colors duration-300">TensorFlow</span>
                        <span class="tech-tag bg-accent-blue/20 border border-accent-blue/40 text-accent-blue px-3 py-1 rounded-full text-xs font-medium hover:bg-accent-blue/30 transition-colors duration-300">PyTorch</span>
                        <span class="tech-tag bg-accent-green/20 border border-accent-green/40 text-accent-green px-3 py-1 rounded-full text-xs font-medium hover:bg-accent-green/30 transition-colors duration-300">FastAPI</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Portfolio CTA -->
        <div class="text-center mt-12 sm:mt-16 animate-on-scroll">
            <button class="btn-primary group relative overflow-hidden smooth-hover hover:shadow-2xl hover:shadow-accent-blue/25 min-w-[200px] bg-gradient-to-r from-accent-blue to-accent-purple text-white px-8 py-3 rounded-full font-semibold transform hover:scale-105 hover:-translate-y-1 transition-all duration-300">
                <span class="relative z-10 flex items-center justify-center">
                    View All Projects
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </span>
                <div class="btn-glow"></div>
            </button>
        </div>
    </div>
</section>

<!-- Enhanced Team Section with Dark Theme -->
<section id="team" class="py-16 sm:py-20 lg:py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-bg) 0%, var(--color-dark-surface) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/5 to-accent-purple/10"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="heading text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-6 animate-on-scroll transform hover:scale-105 transition-all duration-300">
                Meet Our <span class="text-gradient-primary">Team</span>
            </h2>
            <p class="text-lg sm:text-xl lg:text-2xl text-text-secondary max-w-5xl mx-auto leading-relaxed animate-on-scroll">
                Passionate innovators and technology experts dedicated to solving real-world challenges through cutting-edge solutions
            </p>
        </div>

        <!-- Team cards content remains the same but with updated styling classes -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 max-w-7xl mx-auto">
            <!-- Mahir Shariar -->
            <div class="team-card group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-blue/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700" data-delay="0">
                <div class="team-image-container">
                    <div class="team-image">
                        <img src="{{ asset('images/mahir-shariar.jpg') }}" 
                             alt="Mahir Shariar" 
                             class="team-photo group-hover:scale-105 transition-transform duration-500">
                        <div class="team-image-overlay group-hover:opacity-80 transition-opacity duration-300"></div>
                    </div>
                    <div class="team-vibrant group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                <div class="team-content">
                    <div class="team-header">
                        <h3 class="team-name group-hover:text-accent-blue transition-colors duration-300 text-text-primary">Mahir Shariar</h3>
                        <div class="team-role text-accent-blue">Co-Founder & Lead Engineer-Researcher</div>
                    </div>
                    <p class="team-description text-sm sm:text-base text-text-secondary">
                        Specialist in real-time problem solving, AI implementation, and business strategy for technology solutions. 
                        Expert in AI & Machine Learning, web development, real-time data processing, and innovative system architecture.
                    </p>
                    <div class="team-expertise">
                        <div class="expertise-category">
                            <h4 class="expertise-title text-accent-blue">Core Expertise</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">AI Implementation</span>
                                <span class="expertise-tag">Machine Learning</span>
                                <span class="expertise-tag">Web Development</span>
                                <span class="expertise-tag">Data Processing</span>
                            </div>
                        </div>
                        <div class="expertise-category">
                            <h4 class="expertise-title text-accent-blue">Specializations</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">Business Strategy</span>
                                <span class="expertise-tag">System Architecture</span>
                                <span class="expertise-tag">Problem Solving</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-social">
                        <a href="#" class="team-social-link hover:scale-110 transition-transform duration-300 bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-blue hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link hover:scale-110 transition-transform duration-300 bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-blue hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link hover:scale-110 transition-transform duration-300 bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-blue hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link hover:scale-110 transition-transform duration-300 bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-blue hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0190 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1568 2.4189Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Rayhan Mahmud -->
            <div class="team-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-purple/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700" data-delay="200">
                <div class="team-image-container">
                    <div class="team-image">
                        <img src="{{ asset('images/rayhan-mahmud.jpg') }}" 
                             alt="Rayhan Mahmud" 
                             class="team-photo">
                        <div class="team-image-overlay"></div>
                    </div>
                    <div class="team-vibrant"></div>
                </div>
                <div class="team-content">
                    <div class="team-header">
                        <h3 class="team-name text-text-primary">Rayhan Mahmud</h3>
                        <div class="team-role text-accent-purple">Co-Founder & Senior Engineer-Researcher</div>
                    </div>
                    <p class="team-description text-text-secondary">
                        Expert in real-time problem solving, AI systems, data analytics and business development. 
                        Specialized in data analytics & AI, system design, IoT solutions, and innovative technology implementation.
                    </p>
                    <div class="team-expertise">
                        <div class="expertise-category">
                            <h4 class="expertise-title text-accent-purple">Core Expertise</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">AI Systems</span>
                                <span class="expertise-tag">Data Analytics</span>
                                <span class="expertise-tag">System Design</span>
                                <span class="expertise-tag">IoT Solutions</span>
                            </div>
                        </div>
                        <div class="expertise-category">
                            <h4 class="expertise-title text-accent-purple">Specializations</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">Business Development</span>
                                <span class="expertise-tag">Problem Solving</span>
                                <span class="expertise-tag">Innovation</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-social">
                        <a href="#" class="team-social-link bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-purple hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-purple hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-purple hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link bg-glass-bg-strong backdrop-blur-sm border border-glass-border hover:bg-accent-purple hover:text-white hover:shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0190 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1568 2.4189Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 animate-on-scroll">
            <div class="team-stat smooth-hover bg-glass-bg-strong backdrop-blur-xl border border-glass-border shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <div class="stat-number text-accent-blue">10+</div>
                <div class="stat-label text-text-secondary">Years Combined Experience</div>
            </div>
            <div class="team-stat smooth-hover bg-glass-bg-strong backdrop-blur-xl border border-glass-border shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <div class="stat-number text-accent-purple">50+</div>
                <div class="stat-label text-text-secondary">Projects Delivered</div>
            </div>
            <div class="team-stat smooth-hover bg-glass-bg-strong backdrop-blur-xl border border-glass-border shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <div class="stat-number text-accent-green">15+</div>
                <div class="stat-label text-text-secondary">Technologies Mastered</div>
            </div>
            <div class="team-stat smooth-hover bg-glass-bg-strong backdrop-blur-xl border border-glass-border shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <div class="stat-number text-accent-blue">24/7</div>
                <div class="stat-label text-text-secondary">Dedication</div>
            </div>
        </div>
    </div>
</section>

<!-- Innovation Journey Section with Dark Theme -->
<section class="py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-surface) 0%, var(--color-dark-bg) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0">
        <div class="cta-bg-pattern opacity-30"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-responsive">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gradient-primary mb-8 transform hover:scale-105 transition-all duration-300">
                Innovation Journey
            </h2>
            <p class="text-xl text-text-secondary max-w-4xl mx-auto">
                For nearly five months, our R&D programme has harnessed AI, deep learning, and machine learning to tackle real-time challenges in Bangladesh
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="flex-1">
                <div class="research-timeline">
                    <div class="timeline-item active">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                            <h4 class="text-xl font-bold text-text-primary mb-2">Combating Counterfeit Products</h4>
                            <p class="text-text-secondary mb-3">Utilizing AI and machine learning to identify and combat counterfeit FMCG, medicines, bottled liquids, and beverages, ensuring consumer safety and product authenticity.</p>
                            <span class="text-sm text-accent-blue font-semibold">AI Detection Systems - Active Research</span>
                        </div>
                    </div>

                    <div class="timeline-item current">
                        <div class="timeline-dot pulsing"></div>
                        <div class="timeline-content premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                            <h4 class="text-xl font-bold text-text-primary mb-2">Promoting Healthy Food Habits</h4>
                            <p class="text-text-secondary mb-3">Developing AI-powered nutrition analysis systems to promote healthy food habits and make accessible organic food recommendations for better community health.</p>
                            <span class="text-sm text-accent-purple font-semibold">Nutrition AI - In Development</span>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                            <h4 class="text-xl font-bold text-text-primary mb-2">E-commerce Revolution</h4>
                            <p class="text-text-secondary mb-3">Empowering businesses to transcend Facebook-only operations with professional, integrated websites featuring seamless payment and management systems.</p>
                            <span class="text-sm text-accent-green font-semibold">Platform Development - Ready for Launch</span>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                            <h4 class="text-xl font-bold text-text-primary mb-2">Standardized Solutions</h4>
                            <p class="text-text-secondary mb-3">Delivering innovative, standardised technology solutions that enhance lives across Bangladesh with modern, reliable, and accessible technology infrastructure.</p>
                            <span class="text-sm text-accent-pink font-semibold">Future Vision - Scaling Nationwide</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 space-y-8">
                <div class="research-card featured premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-500">
                    <div class="research-icon-wrapper">
                        <div class="research-glow"></div>
                        <div class="research-icon bg-gradient-to-br from-accent-blue to-accent-purple shadow-xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="research-content">
                        <h4 class="text-gradient-primary text-3xl font-bold mb-2">5+</h4>
                        <p class="text-text-primary font-semibold mb-2">Months of R&D Innovation</p>
                        <p class="text-text-secondary text-sm">Dedicated research and development programme focusing on AI, deep learning, and machine learning solutions for Bangladesh's unique challenges.</p>
                    </div>
                </div>

                <div class="feature-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                    <div class="feature-icon bg-gradient-to-br from-accent-green to-accent-blue shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-text-primary mb-2">E-commerce Support</h4>
                        <p class="text-text-secondary">Helping businesses move beyond Facebook-only presence to professional websites with integrated payment and management systems, driving digital transformation.</p>
                    </div>
                </div>

                <div class="feature-card premium-glass-card bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                    <div class="feature-icon bg-gradient-to-br from-accent-purple to-accent-pink shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-text-primary mb-2">AI-Powered Solutions</h4>
                        <p class="text-text-secondary">Advanced AI solutions for product authenticity verification, nutrition analysis, and organic food certification to build consumer trust and promote healthy living.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Happy Clients & Companies Section with Dark Violet Theme -->
<section id="clients" class="py-20 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-bg) 0%, var(--color-dark-surface) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(139, 92, 246, 0.15) 0%, rgba(79, 70, 229, 0.10) 50%, rgba(139, 92, 246, 0.15) 100%);"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-16">
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-8 animate-on-scroll text-text-primary transform hover:scale-105 transition-all duration-300">
                Happy <span class="text-gradient-primary">Clients & Companies</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-4xl mx-auto leading-relaxed animate-on-scroll">
                Trusted by innovative businesses and satisfied clients who have experienced our cutting-edge solutions and exceptional service
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Ultra-Premium Client Card 1 -->
            <div class="premium-client-card animate-on-scroll hover-lift smooth-hover group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-blue/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700" data-delay="0">
                <div class="client-card-header">
                    <div class="client-avatar shadow-lg">
                        <img src="{{ asset('images/client-1.jpg') }}" alt="BookBuyBD" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="client-info">
                        <h3 class="client-name text-text-primary">BookBuyBD</h3>
                        <p class="client-role text-accent-blue">E-commerce Platform</p>
                    </div>
                </div>
                <div class="client-review">
                    <div class="stars mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-2 text-text-muted text-sm">5.0/5</span>
                    </div>
                    <p class="text-text-secondary italic">
                        "Techtonauts delivered an exceptional AI-powered analytics platform that transformed our business operations. Their expertise in machine learning and web development is unmatched."
                    </p>
                </div>
            </div>

            <!-- Ultra-Premium Client Card 2 -->
            <div class="premium-client-card animate-on-scroll hover-lift smooth-hover group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-purple/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700" data-delay="100">
                <div class="client-card-header">
                    <div class="client-avatar shadow-lg">
                        <img src="{{ asset('images/client-2.jpg') }}" alt="LifeGuard+" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="client-info">
                        <h3 class="client-name text-text-primary">LifeGuard+</h3>
                        <p class="client-role text-accent-purple">Healthcare Tech</p>
                    </div>
                </div>
                <div class="client-review">
                    <div class="stars mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-2 text-text-muted text-sm">5.0/5</span>
                    </div>
                    <p class="text-text-secondary italic">
                        "The software development service was outstanding. Clean code, beautiful design, and perfect functionality. Highly recommend Techtonauts for any tech project."
                    </p>
                </div>
            </div>

            <!-- Ultra-Premium Client Card 3 -->
            <div class="premium-client-card animate-on-scroll hover-lift smooth-hover group bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-2xl hover:shadow-3xl hover:shadow-accent-green/25 transform hover:scale-105 hover:-translate-y-3 transition-all duration-700" data-delay="200">
                <div class="client-card-header">
                    <div class="client-avatar shadow-lg">
                        <img src="{{ asset('images/client-3.jpg') }}" alt="CardioGuard" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="client-info">
                        <h3 class="client-name text-text-primary">CardioGuard</h3>
                        <p class="client-role text-accent-green">Medical Technology</p>
                    </div>
                </div>
                <div class="client-review">
                    <div class="stars mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-2 text-text-muted text-sm">5.0/5</span>
                    </div>
                    <p class="text-text-secondary italic">
                        "Their AI and software development expertise helped us develop cutting-edge medical applications. Professional, innovative, and delivered beyond expectations."
                    </p>
                </div>
            </div>
        </div>

        <!-- Review Statistics -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 animate-on-scroll">
            <div class="premium-stat bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                <div class="stat-number text-yellow-500">98%</div>
                <div class="stat-label text-text-secondary">Client Satisfaction</div>
            </div>
            <div class="premium-stat bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                <div class="stat-number text-green-500">150+</div>
                <div class="stat-label text-text-secondary">Happy Clients</div>
            </div>
            <div class="premium-stat bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                <div class="stat-number text-blue-500">4.9/5</div>
                <div class="stat-label text-text-secondary">Average Rating</div>
            </div>
            <div class="premium-stat bg-glass-bg-strong backdrop-blur-xl border border-glass-border-strong shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500">
                <div class="stat-number text-pink-500">24h</div>
                <div class="stat-label text-text-secondary">Response Time</div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section with Dark Theme -->
<section class="py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-surface) 0%, var(--color-dark-bg) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0 bg-gradient-to-br from-accent-blue/15 via-accent-purple/15 to-accent-green/15"></div>
    <div class="cta-bg-pattern opacity-30"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-responsive text-center">
        <h2 class="text-4xl md:text-6xl font-bold text-gradient-primary mb-8 transform hover:scale-105 transition-all duration-300">
            Ready to Transform Your Vision?
        </h2>
        <p class="text-xl text-text-secondary mb-12 max-w-2xl mx-auto">
            Let's collaborate to bring your innovative ideas to life with cutting-edge technology solutions
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <button class="group btn-primary btn-hero premium-glass-button relative overflow-hidden bg-gradient-to-r from-accent-blue to-accent-purple text-white shadow-2xl hover:shadow-3xl hover:shadow-accent-blue/25 transform hover:scale-105 hover:-translate-y-2 transition-all duration-500">
                <div class="btn-glow"></div>
                <span class="relative z-10 flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Start Conversation
                </span>
            </button>
            <button class="btn-secondary btn-hero premium-glass-button group bg-glass-bg-strong backdrop-blur-xl border-2 border-accent-purple/60 text-accent-purple hover:bg-accent-purple hover:text-white shadow-xl hover:shadow-2xl transform hover:scale-105 hover:-translate-y-2 transition-all duration-500">
                <span class="flex items-center gap-3">
                    <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    View Portfolio
                </span>
            </button>
        </div>
    </div>
</section>

<!-- Trust and Social Media Section with Dark Violet Theme -->
<section class="py-16 relative overflow-hidden" style="background: linear-gradient(135deg, var(--color-dark-bg) 0%, var(--color-dark-surface) 50%, var(--color-dark-elevated) 100%);">
    <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(139, 92, 246, 0.15) 0%, rgba(79, 70, 229, 0.10) 50%, rgba(139, 92, 246, 0.15) 100%);"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <!-- Trust Indicators -->
            <div class="animate-on-scroll mb-20">
                <!-- Centered Title -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-text-primary mb-6 transform hover:scale-105 transition-all duration-300">
                        Trusted by innovative businesses across Bangladesh
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-pink-400 mx-auto rounded-full"></div>
                </div>
                
                <!-- Trust Statistics -->
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-90">
                    <div class="text-2xl font-bold text-yellow-500">150+</div>
                    <div class="w-px h-8 bg-text-muted"></div>
                    <div class="text-sm text-text-secondary">Happy Clients</div>
                    <div class="w-px h-8 bg-text-muted"></div>
                    <div class="text-2xl font-bold text-pink-500">98%</div>
                    <div class="w-px h-8 bg-text-muted"></div>
                    <div class="text-sm text-text-secondary">Success Rate</div>
                </div>
            </div>

            <!-- Social Media Section -->
            <div class="animate-on-scroll">
                <!-- Centered Title -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-text-primary mb-6 transform hover:scale-105 transition-all duration-300">
                        Connect with us on social media
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-green-400 mx-auto rounded-full"></div>
                </div>
                
                <!-- Social Media Icons -->
                <div class="flex flex-wrap justify-center items-center gap-6">
                    <!-- LinkedIn -->
                    <a href="{{ config('social.linkedin', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 shadow-xl hover:shadow-2xl hover:shadow-blue-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">LinkedIn</span>
                    </a>

                    <!-- X (Twitter) -->
                    <a href="{{ config('social.twitter', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-gray-800 to-black hover:from-gray-700 hover:to-gray-900 shadow-xl hover:shadow-2xl hover:shadow-gray-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">X</span>
                    </a>

                    <!-- YouTube -->
                    <a href="{{ config('social.youtube', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 shadow-xl hover:shadow-2xl hover:shadow-red-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">YouTube</span>
                    </a>

                    <!-- Facebook -->
                    <a href="{{ config('social.facebook', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-blue-600 to-blue-800 hover:from-blue-500 hover:to-blue-700 shadow-xl hover:shadow-2xl hover:shadow-blue-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">Facebook</span>
                    </a>

                    <!-- Instagram -->
                    <a href="{{ config('social.instagram', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-purple-600 via-pink-600 to-orange-600 hover:from-purple-500 hover:via-pink-500 hover:to-orange-500 shadow-xl hover:shadow-2xl hover:shadow-pink-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C8.396 0 7.989.013 7.041.048 6.094.082 5.52.204 5.015.38a6.275 6.275 0 0 0-2.357 1.526A6.26 6.26 0 0 0 .132 4.266c-.175.505-.297 1.079-.331 2.026C-.014 7.04.001 7.447.001 12.017c0 4.624-.015 5.031.021 5.979.034.947.156 1.521.331 2.026a6.24 6.24 0 0 0 1.526 2.357 6.249 6.249 0 0 0 2.357 1.526c.505.175 1.079.297 2.026.331.95.005 1.357.021 5.979.021 4.624 0 5.031-.015 5.979-.021.947-.034 1.521-.156 2.026-.331a6.257 6.257 0 0 0 2.357-1.526 6.245 6.245 0 0 0 1.526-2.357c.175-.505.297-1.079.331-2.026.005-.95.021-1.357.021-5.979 0-4.624-.015-5.031-.021-5.979-.034-.947-.156-1.521-.331-2.026a6.257 6.257 0 0 0-1.526-2.357A6.245 6.245 0 0 0 18.974.38c-.505-.175-1.079-.297-2.026-.331C16.04.013 15.633.001 12.017.001h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">Instagram</span>
                    </a>

                    <!-- Reddit -->
                    <a href="{{ config('social.reddit', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-orange-600 to-red-600 hover:from-orange-500 hover:to-red-500 shadow-xl hover:shadow-2xl hover:shadow-orange-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">Reddit</span>
                    </a>

                    <!-- Discord -->
                    <a href="{{ config('social.discord', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0190 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1568 2.4189Z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">Discord</span>
                    </a>

                    <!-- Threads -->
                    <a href="{{ config('social.threads', '#') }}" class="social-media-link group" target="_blank" rel="noopener">
                        <div class="social-icon bg-gradient-to-br from-gray-800 to-gray-900 hover:from-gray-700 hover:to-gray-800 shadow-xl hover:shadow-2xl hover:shadow-gray-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.781 3.631 2.695 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 0 1 3.02.142c-.126-.742-.375-1.332-.74-1.811-.365-.479-.856-.735-1.414-.735-.572 0-1.009.21-1.334.64-.325.43-.455.995-.39 1.713l-2.06.35c-.067-1.32.18-2.572.738-3.632.558-1.06 1.411-1.902 2.522-2.379.555-.238 1.196-.359 1.924-.359 1.253 0 2.336.377 3.222 1.115.886.738 1.466 1.784 1.764 3.106.149.66.220 1.418.220 2.286v.028c-.004.661-.048 1.391-.134 2.212.904.396 1.593 1.016 2.058 1.855.582 1.048.708 2.326.708 3.803 0 1.447-.955 2.242-2.863 2.386-.381.029-.762.043-1.143.043l-.007.001z"/>
                            </svg>
                        </div>
                        <span class="social-label text-text-secondary">Threads</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection