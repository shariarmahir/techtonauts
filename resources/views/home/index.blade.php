@extends('layouts.app')

@section('title', 'Techtonauts - World-Class Tech Venture & Innovation Platform')

@section('content')
<!-- Hero Section with Enhanced Animations -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Enhanced Animated Background -->
    <div class="absolute inset-0 z-0">
        <!-- Enhanced Particle System -->
        <div class="particles">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
            <div class="particle particle-5"></div>
            <div class="particle particle-6"></div>
            <!-- Additional particles for more visibility -->
            <div class="particle" style="top: 15%; left: 25%; animation: smoothFloat 9s infinite ease-in-out 0.5s;"></div>
            <div class="particle" style="top: 70%; right: 25%; animation: smoothFloat 7s infinite ease-in-out 1s;"></div>
            <div class="particle" style="bottom: 25%; left: 15%; animation: smoothFloat 8s infinite ease-in-out 1.5s;"></div>
            <div class="particle" style="top: 45%; right: 15%; animation: smoothFloat 6s infinite ease-in-out 2s;"></div>
        </div>
        
        <!-- Enhanced Floating Orbs with Better Visibility -->
        <div class="floating-orb orb-1" style="opacity: 0.6; filter: blur(15px);"></div>
        <div class="floating-orb orb-2" style="opacity: 0.7; filter: blur(18px);"></div>
        <div class="floating-orb orb-3" style="opacity: 0.5; filter: blur(12px);"></div>
        <div class="floating-orb orb-4" style="opacity: 0.8; filter: blur(20px);"></div>
        
        <!-- Enhanced Grid Pattern with Better Visibility -->
        <div class="tech-grid" style="opacity: 0.4; background-size: 40px 40px;"></div>
        
        <!-- Enhanced Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-radial from-transparent via-dark-bg/30 to-dark-bg/70"></div>
        
        <!-- Additional Animation Elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-accent-blue/20 to-accent-purple/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-gradient-to-br from-accent-green/20 to-accent-blue/20 rounded-full blur-xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-20 w-24 h-24 bg-gradient-to-br from-accent-purple/20 to-accent-green/20 rounded-full blur-xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 text-center px-responsive max-w-7xl mx-auto">
        <div class="hero-content-wrapper">
            <!-- Animated Badge -->
            <div class="inline-flex items-center px-4 py-2 bg-dark-surface/50 backdrop-blur-sm border border-accent-purple/30 rounded-full mb-8 animate-fade-in-down">
                <div class="w-2 h-2 bg-accent-green rounded-full mr-2 animate-pulse"></div>
                <span class="text-sm text-text-secondary">R&D Program Running for 5+ Months</span>
            </div>

            <!-- Main Title -->
            <h1 class="hero-title mb-8">
                <span class="block">
                    <span class="text-6xl sm:text-7xl md:text-8xl lg:text-9xl font-heading font-black">
                        <span class="text-gradient-primary animate-text-shimmer premium-glow">Tech</span><span class="text-gradient-secondary animate-text-shimmer-delay premium-glow">tonauts</span>
                    </span>
                </span>
                <span class="block text-xl sm:text-2xl md:text-3xl mt-6 text-text-secondary animate-fade-in-up-delay typing-animation">
                     Architects of Bangladesh's Digital Renaissance.
                </span>
            </h1>

            <!-- Description -->
            <p class="text-lg sm:text-xl md:text-2xl text-text-secondary mb-10 max-w-4xl mx-auto leading-relaxed animate-fade-in-up-delay-2">
                Empowering Bangladeshi businesses with <span class="text-accent-blue font-semibold">cutting-edge AI</span>, 
                <span class="text-accent-purple font-semibold">blockchain solutions</span>, and 
                <span class="text-accent-green font-semibold">innovative technology</span> that transforms ideas into digital reality.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-fade-in-up-delay-3">
                <button class="btn-primary btn-hero group relative overflow-hidden">
                    <span class="relative z-10 flex items-center">
                        Start Your Journey
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                    <div class="btn-glow"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue to-accent-purple opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
                
                <button class="btn-secondary btn-hero-secondary group relative overflow-hidden">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1a3 3 0 000-6h-1m1 6V4a3 3 0 000-6h-1m1 6h6m-7 7v4a3 3 0 006 0v-1"></path>
                        </svg>
                        Explore Services
                    </span>
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
        <div class="scroll-indicator">
            <div class="scroll-dot"></div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 relative overflow-hidden">
    <div class="container mx-auto px-responsive">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="stat-card animate-on-scroll smooth-hover" data-delay="0">
                <div class="stat-icon mb-4">
                    <svg class="w-8 h-8 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div class="stat-number counter" data-target="5">0</div>
                <div class="stat-label">Months of R&D</div>
                <div class="stat-description">Continuous research and development</div>
            </div>
            
            <div class="stat-card animate-on-scroll smooth-hover" data-delay="100">
                <div class="stat-icon mb-4">
                    <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <div class="stat-number counter" data-target="100">0</div>
                <div class="stat-label">Projects Delivered</div>
                <div class="stat-description">Successful implementations</div>
            </div>
            
            <div class="stat-card animate-on-scroll smooth-hover" data-delay="200">
                <div class="stat-icon mb-4">
                    <svg class="w-8 h-8 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support Available</div>
                <div class="stat-description">Round-the-clock assistance</div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-dark-surface/50"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-16">
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-6 animate-on-scroll">
                Innovating for <span class="text-gradient-primary">Bangladesh</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-4xl mx-auto leading-relaxed animate-on-scroll">
                Our dedicated R&D program has been operational for 5 months, focusing on solving real-time challenges 
                through <span class="text-accent-blue">artificial intelligence</span>, <span class="text-accent-purple">deep learning</span>, 
                and <span class="text-accent-green">machine learning</span> technologies.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-on-scroll">
                <div class="space-y-8">
                    <div class="feature-card">
                        <div class="feature-icon bg-accent-blue/20">
                            <svg class="w-6 h-6 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-accent-blue mb-2">AI Product Detection</h3>
                            <p class="text-text-secondary">AI-powered solutions for identifying counterfeit products, medicines, and beverages using advanced computer vision.</p>
                        </div>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon bg-accent-purple/20">
                            <svg class="w-6 h-6 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-accent-purple mb-2">Food Safety & Health</h3>
                            <p class="text-text-secondary">Machine learning models analyzing food safety standards and promoting healthier eating habits across communities.</p>
                        </div>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon bg-accent-green/20">
                            <svg class="w-6 h-6 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-accent-green mb-2">Organic Food Access</h3>
                            <p class="text-text-secondary">Technology-driven platforms making reliable organic food accessible to everyone through smart distribution networks.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="animate-on-scroll">
                <div class="relative">
                    <!-- Tech Visualization -->
                    <div class="tech-showcase">
                        <div class="tech-orb tech-orb-1">
                            <div class="tech-pulse"></div>
                        </div>
                        <div class="tech-orb tech-orb-2">
                            <div class="tech-pulse"></div>
                        </div>
                        <div class="tech-orb tech-orb-3">
                            <div class="tech-pulse"></div>
                        </div>
                        <div class="connecting-lines">
                            <svg class="w-full h-full" viewBox="0 0 300 300">
                                <path d="M50,150 Q150,50 250,150 Q150,250 50,150" stroke="url(#gradient)" stroke-width="2" fill="none" opacity="0.6">
                                    <animate attributeName="stroke-dasharray" values="0,1000;1000,0;0,1000" dur="4s" repeatCount="indefinite"/>
                                </path>
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:#4F46E5"/>
                                        <stop offset="50%" style="stop-color:#7C3AED"/>
                                        <stop offset="100%" style="stop-color:#10B981"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 relative">
    <div class="container mx-auto px-responsive">
        <div class="text-center mb-16">
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-6 animate-on-scroll">
                Our <span class="text-gradient-primary">Services</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto animate-on-scroll">
                Comprehensive technology solutions designed for the future of business
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Software Development -->
            <div class="service-card animate-on-scroll hover-lift smooth-hover" data-delay="0">
                <div class="service-header">
                    <div class="service-icon bg-accent-blue/20">
                        <svg class="w-8 h-8 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">Software Development</h3>
                </div>
                <p class="service-description">
                    Full-stack development, mobile apps, desktop applications, and enterprise solutions built with modern technologies.
                </p>
                <ul class="service-list">
                    <li>Mobile App Development (iOS/Android)</li>
                    <li>Web Development (Frontend/Backend)</li>
                    <li>Desktop Applications</li>
                    <li>Enterprise Solutions</li>
                </ul>
                <div class="service-overlay"></div>
            </div>

            <!-- AI & Machine Learning -->
            <div class="service-card animate-on-scroll hover-lift smooth-hover" data-delay="100">
                <div class="service-header">
                    <div class="service-icon bg-accent-purple/20">
                        <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">AI & Machine Learning</h3>
                </div>
                <p class="service-description">
                    Advanced AI solutions, deep learning models, and intelligent automation systems that drive innovation.
                </p>
                <ul class="service-list">
                    <li>AI Research & Development</li>
                    <li>Machine Learning Engineering</li>
                    <li>Computer Vision</li>
                    <li>Natural Language Processing</li>
                </ul>
                <div class="service-overlay"></div>
            </div>

            <!-- Cloud Computing -->
            <div class="service-card animate-on-scroll hover-lift smooth-hover" data-delay="200">
                <div class="service-header">
                    <div class="service-icon bg-accent-green/20">
                        <svg class="w-8 h-8 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">Cloud Computing</h3>
                </div>
                <p class="service-description">
                    Scalable cloud infrastructure, DevOps solutions, and reliable system architecture for modern businesses.
                </p>
                <ul class="service-list">
                    <li>Cloud Architecture Design</li>
                    <li>DevOps & SRE Implementation</li>
                    <li>System Scalability Solutions</li>
                    <li>Infrastructure Management</li>
                </ul>
                <div class="service-overlay"></div>
            </div>

            <!-- Blockchain Development -->
            <div class="service-card animate-on-scroll hover-lift smooth-hover" data-delay="300">
                <div class="service-header">
                    <div class="service-icon bg-accent-blue/20">
                        <svg class="w-8 h-8 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">Blockchain Development</h3>
                </div>
                <p class="service-description">
                    Decentralized applications, smart contracts, and distributed ledger solutions for secure transactions.
                </p>
                <ul class="service-list">
                    <li>Smart Contract Development</li>
                    <li>DApp Development</li>
                    <li>Cryptocurrency Solutions</li>
                    <li>NFT Platforms</li>
                </ul>
                <div class="service-overlay"></div>
            </div>

            <!-- UI/UX Design -->
            <div class="service-card animate-on-scroll hover-lift smooth-hover" data-delay="400">
                <div class="service-header">
                    <div class="service-icon bg-accent-purple/20">
                        <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                </div>
                <p class="service-description">
                    User-centered design, intuitive interfaces, and engaging experiences that delight users.
                </p>
                <ul class="service-list">
                    <li>User Interface Design</li>
                    <li>User Experience Research</li>
                    <li>Prototyping & Wireframing</li>
                    <li>Design Systems</li>
                </ul>
                <div class="service-overlay"></div>
            </div>

            <!-- Cybersecurity -->
            <div class="service-card animate-on-scroll hover-lift smooth-hover" data-delay="500">
                <div class="service-header">
                    <div class="service-icon bg-accent-green/20">
                        <svg class="w-8 h-8 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">Cybersecurity</h3>
                </div>
                <p class="service-description">
                    Comprehensive security solutions, penetration testing, and threat protection for digital assets.
                </p>
                <ul class="service-list">
                    <li>Security Engineering</li>
                    <li>Penetration Testing</li>
                    <li>Security Operations Center</li>
                    <li>Compliance & Auditing</li>
                </ul>
                <div class="service-overlay"></div>
            </div>
        </div>
    </div>
</section>

<!-- Updated Portfolio Section with Videos -->
<section id="portfolio" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-surface/30 to-transparent"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-16">
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-6 animate-on-scroll">
                Our <span class="text-gradient-primary">Portfolio</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-4xl mx-auto leading-relaxed animate-on-scroll">
                Showcasing our innovative projects and cutting-edge solutions that transform businesses and solve real-world challenges
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Website Development -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="0">
                <div class="portfolio-image">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                        <source src="{{ asset('videos/web-development.mp4') }}" type="video/mp4">
                    </video>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Web Development</div>
                    <h3 class="portfolio-title">Website Development</h3>
                    <p class="portfolio-description">
                        Modern, responsive websites built with cutting-edge technologies. From corporate sites to e-commerce platforms with premium design and functionality.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">Laravel</span>
                    </div>
                </div>
            </div>

            <!-- App Development -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="100">
                <div class="portfolio-image">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                        <source src="{{ asset('videos/mobile-app.mp4') }}" type="video/mp4">
                    </video>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Mobile Development</div>
                    <h3 class="portfolio-title">App Development (iOS & Android)</h3>
                    <p class="portfolio-description">
                        Native and cross-platform mobile applications with seamless user experience, advanced features, and optimized performance for both iOS and Android platforms.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">React Native</span>
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Swift</span>
                    </div>
                </div>
            </div>

            <!-- API & AI Services -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="200">
                <div class="portfolio-image">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                        <source src="{{ asset('videos/ai-ml.mp4') }}" type="video/mp4">
                    </video>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">AI & Backend</div>
                    <h3 class="portfolio-title">API, AI, Deep Learning & Machine Learning</h3>
                    <p class="portfolio-description">
                        Robust APIs, AI-powered solutions, deep learning models, and machine learning algorithms that drive intelligent business automation and insights.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">TensorFlow</span>
                        <span class="tech-tag">PyTorch</span>
                        <span class="tech-tag">FastAPI</span>
                    </div>
                </div>
            </div>

            <!-- IoT & Robotics -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="300">
                <div class="portfolio-image">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                        <source src="{{ asset('videos/iot-robotics.mp4') }}" type="video/mp4">
                    </video>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">IoT & Robotics</div>
                    <h3 class="portfolio-title">IoT Devices (Robotics & Medical Devices)</h3>
                    <p class="portfolio-description">
                        Smart IoT solutions including robotics systems, medical devices, industrial automation, and connected device ecosystems for modern industries.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">Arduino</span>
                        <span class="tech-tag">Raspberry Pi</span>
                        <span class="tech-tag">ROS</span>
                    </div>
                </div>
            </div>

            <!-- Enterprise AI Dashboard -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="400">
                <div class="portfolio-image">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                        <source src="{{ asset('videos/data-analytics.mp4') }}" type="video/mp4">
                    </video>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Data Analytics</div>
                    <h3 class="portfolio-title">Enterprise AI Dashboard</h3>
                    <p class="portfolio-description">
                        Real-time data processing dashboard with AI-powered insights for enterprise decision making and business intelligence.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">D3.js</span>
                        <span class="tech-tag">FastAPI</span>
                        <span class="tech-tag">PostgreSQL</span>
                    </div>
                </div>
            </div>

            <!-- Blockchain Security Platform -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="500">
                <div class="portfolio-image">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                        <source src="{{ asset('videos/blockchain-security.mp4') }}" type="video/mp4">
                    </video>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Cybersecurity</div>
                    <h3 class="portfolio-title">Blockchain Security Platform</h3>
                    <p class="portfolio-description">
                        Decentralized security platform with smart contracts for secure transactions and digital asset protection.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">Solidity</span>
                        <span class="tech-tag">Web3.js</span>
                        <span class="tech-tag">Ethereum</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Portfolio CTA -->
        <div class="text-center mt-16 animate-on-scroll">
            <button class="btn-primary group relative overflow-hidden smooth-hover">
                <span class="relative z-10 flex items-center">
                    View All Projects
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </span>
                <div class="btn-glow"></div>
            </button>
        </div>
    </div>
</section>

<!-- Enhanced Team Section -->
<section id="team" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-dark-surface/50 to-dark-bg/50"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-16">
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-6 animate-on-scroll">
                Meet Our <span class="text-gradient-primary">Team</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-4xl mx-auto leading-relaxed animate-on-scroll">
                Passionate innovators and technology experts dedicated to solving real-world challenges through cutting-edge solutions
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Mahir Shariar -->
            <div class="team-card" data-delay="0">
                <div class="team-image-container">
                    <div class="team-image">
                        <img src="{{ asset('images/mahir-shariar.jpg') }}" 
                             alt="Mahir Shariar" 
                             class="team-photo">
                        <div class="team-image-overlay"></div>
                    </div>
                    <div class="team-glow"></div>
                </div>
                <div class="team-content">
                    <div class="team-header">
                        <h3 class="team-name">Mahir Shariar</h3>
                        <div class="team-role">Co-Founder & Lead Engineer-Researcher</div>
                    </div>
                    <p class="team-description">
                        Specialist in real-time problem solving, AI implementation, and business strategy for technology solutions. 
                        Expert in AI & Machine Learning, web development, real-time data processing, and innovative system architecture.
                    </p>
                    <div class="team-expertise">
                        <div class="expertise-category">
                            <h4 class="expertise-title">Core Expertise</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">AI Implementation</span>
                                <span class="expertise-tag">Machine Learning</span>
                                <span class="expertise-tag">Web Development</span>
                                <span class="expertise-tag">Data Processing</span>
                            </div>
                        </div>
                        <div class="expertise-category">
                            <h4 class="expertise-title">Specializations</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">Business Strategy</span>
                                <span class="expertise-tag">System Architecture</span>
                                <span class="expertise-tag">Problem Solving</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-social">
                        <a href="#" class="team-social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0190 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1568 2.4189Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Rayhan Mahmud -->
            <div class="team-card" data-delay="200">
                <div class="team-image-container">
                    <div class="team-image">
                        <img src="{{ asset('images/rayhan-mahmud.jpg') }}" 
                             alt="Rayhan Mahmud" 
                             class="team-photo">
                        <div class="team-image-overlay"></div>
                    </div>
                    <div class="team-glow"></div>
                </div>
                <div class="team-content">
                    <div class="team-header">
                        <h3 class="team-name">Rayhan Mahmud</h3>
                        <div class="team-role">Co-Founder & Senior Engineer-Researcher</div>
                    </div>
                    <p class="team-description">
                        Expert in real-time problem solving, AI systems, data analytics and business development. 
                        Specialized in data analytics & AI, system design, IoT solutions, and innovative technology implementation.
                    </p>
                    <div class="team-expertise">
                        <div class="expertise-category">
                            <h4 class="expertise-title">Core Expertise</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">AI Systems</span>
                                <span class="expertise-tag">Data Analytics</span>
                                <span class="expertise-tag">System Design</span>
                                <span class="expertise-tag">IoT Solutions</span>
                            </div>
                        </div>
                        <div class="expertise-category">
                            <h4 class="expertise-title">Specializations</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">Business Development</span>
                                <span class="expertise-tag">Problem Solving</span>
                                <span class="expertise-tag">Innovation</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-social">
                        <a href="#" class="team-social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="team-social-link">
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
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-blue">10+</div>
                <div class="stat-label">Years Combined Experience</div>
            </div>
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-purple">50+</div>
                <div class="stat-label">Projects Delivered</div>
            </div>
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-green">15+</div>
                <div class="stat-label">Technologies Mastered</div>
            </div>
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-blue">24/7</div>
                <div class="stat-label">Dedication</div>
            </div>
        </div>
    </div>
</section>

<!-- R&D Section -->
<section id="research" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-dark-surface to-dark-bg opacity-80"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-16">
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-6 animate-on-scroll">
                Research & <span class="text-gradient-primary">Development</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-4xl mx-auto leading-relaxed animate-on-scroll">
                Our dedicated R&D program focuses on solving real-time problems in Bangladesh through innovative technology solutions
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-on-scroll">
                <div class="research-timeline">
                    <div class="timeline-item active">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h4 class="text-xl font-semibold text-accent-blue mb-2">Phase 1: Research Foundation</h4>
                            <p class="text-text-secondary mb-2">Established core research methodologies and team structure</p>
                            <span class="text-sm text-accent-green">Completed - Month 1-2</span>
                        </div>
                    </div>
                    
                    <div class="timeline-item active">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h4 class="text-xl font-semibold text-accent-purple mb-2">Phase 2: AI Model Development</h4>
                            <p class="text-text-secondary mb-2">Built initial models for fake product detection and food safety</p>
                            <span class="text-sm text-accent-green">Completed - Month 2-4</span>
                        </div>
                    </div>
                    
                    <div class="timeline-item current">
                        <div class="timeline-dot pulsing"></div>
                        <div class="timeline-content">
                            <h4 class="text-xl font-semibold text-accent-blue mb-2">Phase 3: Implementation & Testing</h4>
                            <p class="text-text-secondary mb-2">Real-world testing and refinement of developed solutions</p>
                            <span class="text-sm text-accent-blue">In Progress - Month 4-6</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="animate-on-scroll">
                <div class="research-showcase">
                    <div class="research-card featured">
                        <div class="research-icon-wrapper">
                            <div class="research-icon bg-gradient-to-br from-accent-blue to-accent-purple">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="research-content">
                            <h4 class="text-lg font-semibold text-accent-blue mb-2">5+ Months</h4>
                            <p class="text-text-secondary">Continuous Innovation</p>
                        </div>
                        <div class="research-glow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Happy Clients & Companies Section -->
<section id="clients" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-bg to-dark-surface/50"></div>
    <div class="container mx-auto px-responsive relative z-10">
        <div class="text-center mb-16">
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-6 animate-on-scroll">
                Happy <span class="text-gradient-primary">Clients & Companies</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-4xl mx-auto leading-relaxed animate-on-scroll">
                Trusted by innovative businesses and satisfied clients who have experienced our cutting-edge solutions and exceptional service
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Review 1 -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="0">
                <div class="portfolio-image" style="height: 350px;">
                    <img src="{{ asset('images/client-1.jpg') }}" alt="TechCorp Bangladesh" class="w-full h-full object-cover">
                    <div class="portfolio-overlay" style="opacity: 0.8;"></div>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Enterprise Client</div>
                    <h3 class="portfolio-title">BookBuyBD</h3>
                    <p class="portfolio-description">
                        "Techtonauts delivered an exceptional AI-powered analytics platform that transformed our business operations. Their expertise in machine learning is unmatched."
                    </p>
                    <div class="flex items-center mt-4">
                        <div class="flex text-accent-green">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <span class="ml-2 text-sm text-text-secondary">5.0/5</span>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="100">
                <div class="portfolio-image" style="height: 350px;">
                    <img src="{{ asset('images/client-2.jpg') }}" alt="InnovateBD" class="w-full h-full object-cover">
                    <div class="portfolio-overlay" style="opacity: 0.8;"></div>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Startup Client</div>
                    <h3 class="portfolio-title">LifeGuard+</h3>
                    <p class="portfolio-description">
                        "The mobile app development service was outstanding. Clean code, beautiful design, and perfect functionality. Highly recommend Techtonauts for any tech project."
                    </p>
                    <div class="flex items-center mt-4">
                        <div class="flex text-accent-green">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <span class="ml-2 text-sm text-text-secondary">5.0/5</span>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="portfolio-card animate-on-scroll hover-lift smooth-hover" data-delay="200">
                <div class="portfolio-image" style="height: 350px;">
                    <img src="{{ asset('images/client-3.jpg') }}" alt="HealthTech Solutions" class="w-full h-full object-cover">
                    <div class="portfolio-overlay" style="opacity: 0.8;"></div>
                    <div class="portfolio-gradient"></div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Healthcare Client</div>
                    <h3 class="portfolio-title">CardioGuard</h3>
                    <p class="portfolio-description">
                        "Their IoT and robotics expertise helped us develop cutting-edge medical devices. Professional, innovative, and delivered beyond expectations."
                    </p>
                    <div class="flex items-center mt-4">
                        <div class="flex text-accent-green">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <span class="ml-2 text-sm text-text-secondary">5.0/5</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Statistics -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 animate-on-scroll">
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-blue">98%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-purple">150+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-green">4.9/5</div>
                <div class="stat-label">Average Rating</div>
            </div>
            <div class="team-stat smooth-hover">
                <div class="stat-number text-accent-blue">24h</div>
                <div class="stat-label">Response Time</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="cta-bg-pattern"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-dark-bg via-transparent to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-responsive text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <div class="inline-flex items-center px-4 py-2 bg-accent-blue/10 border border-accent-blue/30 rounded-full mb-8 animate-on-scroll">
                <div class="w-2 h-2 bg-accent-blue rounded-full mr-2 animate-pulse"></div>
                <span class="text-sm text-accent-blue">Ready to Start Your Journey?</span>
            </div>
            
            <h2 class="heading text-4xl sm:text-5xl md:text-6xl mb-6 animate-on-scroll">
                Transform Your <span class="text-gradient-primary">Business Today</span>
            </h2>
            
            <p class="text-xl text-text-secondary mb-10 animate-on-scroll">
                Join us in building the future of technology in Bangladesh. Let's create something extraordinary together with cutting-edge solutions tailored for your success.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-on-scroll">
                <button class="btn-primary btn-hero group relative overflow-hidden smooth-hover">
                    <span class="relative z-10 flex items-center">
                        Get Started Today
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                    <div class="btn-glow"></div>
                </button>
                
                <button class="btn-secondary btn-hero-secondary group smooth-hover">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Schedule Consultation
                    </span>
                </button>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-16 animate-on-scroll">
                <p class="text-sm text-text-secondary mb-6">Trusted by innovative businesses across Bangladesh</p>
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                    <div class="text-2xl font-bold text-accent-blue">150+</div>
                    <div class="w-px h-8 bg-accent-purple/30"></div>
                    <div class="text-sm text-text-secondary">Happy Clients</div>
                    <div class="w-px h-8 bg-accent-purple/30"></div>
                    <div class="text-2xl font-bold text-accent-purple">98%</div>
                    <div class="w-px h-8 bg-accent-purple/30"></div>
                    <div class="text-sm text-text-secondary">Success Rate</div>
                </div>
            </div>

            <!-- Social Media Section -->
            <div class="mt-16 animate-on-scroll">
                <p class="text-lg text-text-secondary mb-8">Connect with us on social media</p>
                <div class="flex flex-wrap justify-center items-center gap-6">
                    <!-- LinkedIn -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-blue-600 to-blue-700">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                        <span class="social-label">LinkedIn</span>
                    </a>

                    <!-- X (Twitter) -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-gray-800 to-black">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </div>
                        <span class="social-label">X</span>
                    </a>

                    <!-- YouTube -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-red-600 to-red-700">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </div>
                        <span class="social-label">YouTube</span>
                    </a>

                    <!-- Facebook -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-blue-600 to-blue-800">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <span class="social-label">Facebook</span>
                    </a>

                    <!-- Instagram -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-purple-600 via-pink-600 to-orange-600">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C8.396 0 7.989.013 7.041.048 6.094.082 5.52.204 5.015.38a6.275 6.275 0 0 0-2.357 1.526A6.26 6.26 0 0 0 .132 4.266c-.175.505-.297 1.079-.331 2.026C-.014 7.04.001 7.447.001 12.017c0 4.624-.015 5.031.021 5.979.034.947.156 1.521.331 2.026a6.24 6.24 0 0 0 1.526 2.357 6.249 6.249 0 0 0 2.357 1.526c.505.175 1.079.297 2.026.331.95.005 1.357.021 5.979.021 4.624 0 5.031-.015 5.979-.021.947-.034 1.521-.156 2.026-.331a6.257 6.257 0 0 0 2.357-1.526 6.245 6.245 0 0 0 1.526-2.357c.175-.505.297-1.079.331-2.026.005-.95.021-1.357.021-5.979 0-4.624-.015-5.031-.021-5.979-.034-.947-.156-1.521-.331-2.026a6.257 6.257 0 0 0-1.526-2.357A6.245 6.245 0 0 0 18.974.38c-.505-.175-1.079-.297-2.026-.331C16.04.013 15.633.001 12.017.001h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </div>
                        <span class="social-label">Instagram</span>
                    </a>

                    <!-- Reddit -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-orange-600 to-red-600">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z"/>
                            </svg>
                        </div>
                        <span class="social-label">Reddit</span>
                    </a>

                    <!-- Discord -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-indigo-600 to-purple-600">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0190 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1568 2.4189Z"/>
                            </svg>
                        </div>
                        <span class="social-label">Discord</span>
                    </a>

                    <!-- Threads -->
                    <a href="#" class="social-media-link group">
                        <div class="social-icon bg-gradient-to-br from-gray-800 to-gray-900">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.781 3.631 2.695 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 0 1 3.02.142c-.126-.742-.375-1.332-.74-1.811-.365-.479-.856-.735-1.414-.735-.572 0-1.009.21-1.334.64-.325.43-.455.995-.39 1.713l-2.06.35c-.067-1.32.18-2.572.738-3.632.558-1.06 1.411-1.902 2.522-2.379.555-.238 1.196-.359 1.924-.359 1.253 0 2.336.377 3.222 1.115.886.738 1.466 1.784 1.764 3.106.149.66.220 1.418.220 2.286v.028c-.004.661-.048 1.391-.134 2.212.904.396 1.593 1.016 2.058 1.855.582 1.048.708 2.326.708 3.803 0 1.447-.955 2.242-2.863 2.386-.381.029-.762.043-1.143.043l-.007.001z"/>
                            </svg>
                        </div>
                        <span class="social-label">Threads</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection