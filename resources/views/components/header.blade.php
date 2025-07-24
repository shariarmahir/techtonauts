<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" id="main-header">
    <!-- First Row: Login/Signup and Social Media -->
    <div class="bg-gradient-to-r from-techtonaut-navy-dark via-techtonaut-navy-light to-techtonaut-navy-dark backdrop-blur-md">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-0.5"> <!-- Changed py-1 to py-0.5 -->
            <div class="flex items-center justify-between">
                <!-- Login/Signup -->
                <div class="relative group">
                    <button class="btn-primary relative group overflow-hidden rounded-full px-2 md:px-3 py-0.5 bg-gradient-to-r from-accent-blue to-accent-purple text-white font-semibold text-sm md:text-base hover:shadow-lg hover:shadow-accent-blue/25 transition-all duration-300 transform hover:scale-105"> <!-- Changed py-1 to py-0.5 -->
                        <span class="relative z-10 flex items-center space-x-2">
                            <span class="hidden sm:inline">Login/Signup</span>
                            <span class="sm:hidden">Login</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-accent-purple to-accent-blue opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full"></div>
                    </button>
                </div>
                
                <!-- Social Media Links -->
                <div class="flex items-center space-x-3">
                    <a href="https://github.com/techtonauts" class="social-icon-header group relative p-1 rounded-full bg-gradient-to-br from-gray-700/30 to-gray-900/30 backdrop-blur-sm border border-gray-600/30 hover:from-gray-600/40 hover:to-gray-800/40 transition-all duration-300 transform hover:scale-110 hover:-translate-y-1"> <!-- Changed p-1.5 to p-1 -->
                        <svg class="w-4 h-4 text-gray-300 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"> <!-- Changed w-5 h-5 to w-4 h-4 -->
                            <path d="M12 0c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="https://linkedin.com/company/techtonauts" class="social-icon-header group relative p-1 rounded-full bg-gradient-to-br from-blue-600/30 to-blue-700/30 backdrop-blur-sm border border-blue-500/30 hover:from-blue-500/40 hover:to-blue-600/40 transition-all duration-300 transform hover:scale-110 hover:-translate-y-1"> <!-- Changed p-1.5 to p-1 -->
                        <svg class="w-4 h-4 text-blue-300 group-hover:text-blue-100 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"> <!-- Changed w-5 h-5 to w-4 h-4 -->
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://facebook.com/techtonauts" class="social-icon-header group relative p-1 rounded-full bg-gradient-to-br from-blue-500/30 to-blue-800/30 backdrop-blur-sm border border-blue-400/30 hover:from-blue-400/40 hover:to-blue-700/40 transition-all duration-300 transform hover:scale-110 hover:-translate-y-1"> <!-- Changed p-1.5 to p-1 -->
                        <svg class="w-4 h-4 text-blue-300 group-hover:text-blue-100 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"> <!-- Changed w-5 h-5 to w-4 h-4 -->
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com/techtonauts" class="social-icon-header group relative p-1 rounded-full bg-gradient-to-br from-pink-500/30 to-purple-600/30 backdrop-blur-sm border border-pink-400/30 hover:from-pink-400/40 hover:to-purple-500/40 transition-all duration-300 transform hover:scale-110 hover:-translate-y-1"> <!-- Changed p-1.5 to p-1 -->
                        <svg class="w-4 h-4 text-pink-300 group-hover:text-pink-100 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"> <!-- Changed w-5 h-5 to w-4 h-4 -->
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.326 3.608 1.301.975.975 1.24 2.242 1.301 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.326 2.633-1.301 3.608-.975.975-2.242 1.24-3.608 1.301-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.326-3.608-1.301-.975-.975-1.24-2.242-1.301-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.326-2.633 1.301-3.608.975-.975 2.242-1.24 3.608-1.301 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.634.074-3.103.422-4.308 1.627C1.54 2.902 1.192 4.371 1.118 6.005c-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.074 1.634.422 3.103 1.627 4.308 1.205 1.205 2.674 1.553 4.308 1.627 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.634-.074 3.103-.422 4.308-1.627 1.205-1.205 1.553-2.674 1.627-4.308.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.074-1.634-.422-3.103-1.627-4.308-1.205-1.205-2.674-1.553-4.308-1.627-1.28-.058-1.688-.072-4.947-.072zm0 5.838c-3.404 0-6.162 2.759-6.162 6.162s2.758 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.758-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441-.645-1.441-1.441s.645-1.441 1.441-1.441 1.441.645 1.441 1.441-.645 1.441-1.441 1.441z"/>
                        </svg>
                    </a>
                    <a href="https://youtube.com/techtonauts" class="social-icon-header group relative p-1 rounded-full bg-gradient-to-br from-red-500/30 to-red-700/30 backdrop-blur-sm border border-red-400/30 hover:from-red-400/40 hover:to-red-600/40 transition-all duration-300 transform hover:scale-110 hover:-translate-y-1"> <!-- Changed p-1.5 to p-1 -->
                        <svg class="w-4 h-4 text-red-300 group-hover:text-red-100 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"> <!-- Changed w-5 h-5 to w-4 h-4 -->
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Separator line -->
        <div class="h-px bg-gradient-to-r from-transparent via-blue-900 to-transparent"></div>
    </div>
    
    <!-- Second Row: Logo, Search Bar, Get Quote -->
    <div class="bg-gradient-to-b from-techtonaut-navy-dark/95 to-techtonaut-navy-light/95 backdrop-blur-md shadow-xl">
        <div class="container mx-auto px-2 sm:px-3 lg:px-4 py-0"> <!-- Changed py-0.5 to py-0 -->
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="logo-container relative group flex-shrink-0">
                    <a href="/" class="flex items-center">
                        <div class="relative">
                            <img src="{{ asset('images/logo_no_bg.png') }}" alt="Techtonauts Logo" class="h-12 md:h-16 lg:h-16 w-auto transform group-hover:scale-105 transition-all duration-300"> <!-- Changed h-16 md:h-20 lg:h-20 to h-12 md:h-16 lg:h-16 -->
                            <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/30 to-accent-purple/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                        </div>
                    </a>
                </div>
                
                <!-- Search Bar -->
                <div class="flex-1 max-w-md mx-4 hidden sm:block">
                    <div class="relative group">
                        <input type="text" placeholder="Search..." class="w-full px-4 py-0.5 pl-10 bg-dark-surface/50 border border-accent-blue/30 rounded-full text-blue-600 placeholder-techtonaut-gray-dark focus:outline-none focus:ring-2 focus:ring-accent-blue focus:border-accent-blue/50 transition-all duration-300 group-hover:border-accent-blue/50"> <!-- Changed py-1 to py-0.5 -->
                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                            <svg class="w-4 h-4 text-techtonaut-gray-dark group-focus-within:text-accent-blue transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-accent-blue hover:text-accent-purple transition-colors duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Get Quote Button -->
                <div class="flex items-center space-x-2">
                    <!-- Mobile Search Button -->
                    <button class="sm:hidden p-1.5 rounded-full bg-dark-surface/50 border border-accent-blue/30 text-accent-blue hover:bg-accent-blue/20 transition-all duration-300"> <!-- Changed p-2 to p-1.5 -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    
                    <!-- Get Quote Button -->
                    <button class="btn-primary relative group overflow-hidden rounded-full px-4 md:px-6 py-0.5 bg-gradient-to-r from-accent-blue to-accent-purple text-white font-semibold text-sm md:text-base hover:shadow-lg hover:shadow-accent-blue/25 transition-all duration-300 transform hover:scale-105"> <!-- Changed py-1 to py-0.5 -->
                        <span class="relative z-10 flex items-center space-x-2">
                            <span class="hidden sm:inline">Get Quote</span>
                            <span class="sm:hidden">Quote</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-accent-purple to-accent-blue opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Row (Third Row) -->
    <nav class="bg-gradient-to-b from-techtonaut-navy-dark to-techtonaut-navy-light shadow-2xl backdrop-blur-sm border-t border-blue-700" x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto px-3 sm:px-3 lg:px-5">
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center justify-center space-x-8 xl:space-x-12 py-1.5"> <!-- Changed py-2 to py-1.5 -->
                <a href="#home" class="nav-link relative text-white font-medium text-lg hover:text-accent-blue transition-all duration-300 group transform hover:scale-105 hover:-translate-y-1" data-section="home">
                    <span class="nav-text relative z-10 px-4 py-1 rounded-full transition-all duration-300 group-hover:bg-accent-blue/20 group-hover:backdrop-blur-sm group-hover:shadow-[0_0_15px_rgba(59,130,246,0.4)]">Home</span> <!-- Changed py-1.5 to py-1 -->
                    <div class="nav-indicator absolute -bottom-2 left-0 w-full h-0.5 bg-gradient-to-r from-accent-blue to-accent-purple scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-full"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/20 to-accent-purple/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <div class="absolute w-1 h-1 bg-accent-blue rounded-full animate-ping" style="left: 10%; top: 10%;"></div>
                        <div class="absolute w-1 h-1 bg-accent-purple rounded-full animate-ping" style="right: 10%; bottom: 10%; animation-delay: 0.2s;"></div>
                    </div>
                </a>
                <a href="#about" class="nav-link relative text-white font-medium text-lg hover:text-accent-blue transition-all duration-300 group transform hover:scale-105 hover:-translate-y-1" data-section="about">
                    <span class="nav-text relative z-10 px-4 py-1 rounded-full transition-all duration-300 group-hover:bg-accent-blue/20 group-hover:backdrop-blur-sm group-hover:shadow-[0_0_15px_rgba(59,130,246,0.4)]">About</span> <!-- Changed py-1.5 to py-1 -->
                    <div class="nav-indicator absolute -bottom-2 left-0 w-full h-0.5 bg-gradient-to-r from-accent-blue to-accent-purple scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-full"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/20 to-accent-purple/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <div class="absolute w-1 h-1 bg-accent-blue rounded-full animate-ping" style="left: 10%; top: 10%;"></div>
                        <div class="absolute w-1 h-1 bg-accent-purple rounded-full animate-ping" style="right: 10%; bottom: 10%; animation-delay: 0.2s;"></div>
                    </div>
                </a>
                <a href="#services" class="nav-link relative text-white font-medium text-lg hover:text-accent-blue transition-all duration-300 group transform hover:scale-105 hover:-translate-y-1" data-section="services">
                    <span class="nav-text relative z-10 px-4 py-1 rounded-full transition-all duration-300 group-hover:bg-accent-blue/20 group-hover:backdrop-blur-sm group-hover:shadow-[0_0_15px_rgba(59,130,246,0.4)]">Services</span> <!-- Changed py-1.5 to py-1 -->
                    <div class="nav-indicator absolute -bottom-2 left-0 w-full h-0.5 bg-gradient-to-r from-accent-blue to-accent-purple scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-full"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/20 to-accent-purple/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <div class="absolute w-1 h-1 bg-accent-blue rounded-full animate-ping" style="left: 10%; top: 10%;"></div>
                        <div class="absolute w-1 h-1 bg-accent-purple rounded-full animate-ping" style="right: 10%; bottom: 10%; animation-delay: 0.2s;"></div>
                    </div>
                </a>
                <a href="#portfolio" class="nav-link relative text-white font-medium text-lg hover:text-accent-blue transition-all duration-300 group transform hover:scale-105 hover:-translate-y-1" data-section="portfolio">
                    <span class="nav-text relative z-10 px-4 py-1 rounded-full transition-all duration-300 group-hover:bg-accent-blue/20 group-hover:backdrop-blur-sm group-hover:shadow-[0_0_15px_rgba(59,130,246,0.4)]">Portfolio</span> <!-- Changed py-1.5 to py-1 -->
                    <div class="nav-indicator absolute -bottom-2 left-0 w-full h-0.5 bg-gradient-to-r from-accent-blue to-accent-purple scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-full"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/20 to-accent-purple/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <div class="absolute w-1 h-1 bg-accent-blue rounded-full animate-ping" style="left: 10%; top: 10%;"></div>
                        <div class="absolute w-1 h-1 bg-accent-purple rounded-full animate-ping" style="right: 10%; bottom: 10%; animation-delay: 0.2s;"></div>
                    </div>
                </a>
                <a href="#research" class="nav-link relative text-white font-medium text-lg hover:text-accent-blue transition-all duration-300 group transform hover:scale-105 hover:-translate-y-1" data-section="research">
                    <span class="nav-text relative z-10 px-4 py-1 rounded-full transition-all duration-300 group-hover:bg-accent-blue/20 group-hover:backdrop-blur-sm group-hover:shadow-[0_0_15px_rgba(59,130,246,0.4)]">R&D</span> <!-- Changed py-1.5 to py-1 -->
                    <div class="nav-indicator absolute -bottom-2 left-0 w-full h-0.5 bg-gradient-to-r from-accent-blue to-accent-purple scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-full"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/20 to-accent-purple/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <div class="absolute w-1 h-1 bg-accent-blue rounded-full animate-ping" style="left: 10%; top: 10%;"></div>
                        <div class="absolute w-1 h-1 bg-accent-purple rounded-full animate-ping" style="right: 10%; bottom: 10%; animation-delay: 0.2s;"></div>
                    </div>
                </a>
                <a href="#contact" class="nav-link relative text-white font-medium text-lg hover:text-accent-blue transition-all duration-300 group transform hover:scale-105 hover:-translate-y-1" data-section="contact">
                    <span class="nav-text relative z-10 px-4 py-1 rounded-full transition-all duration-300 group-hover:bg-accent-blue/20 group-hover:backdrop-blur-sm group-hover:shadow-[0_0_15px_rgba(59,130,246,0.4)]">Contact</span> <!-- Changed py-1.5 to py-1 -->
                    <div class="nav-indicator absolute -bottom-2 left-0 w-full h-0.5 bg-gradient-to-r from-accent-blue to-accent-purple scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-full"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/20 to-accent-purple/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <div class="absolute w-1 h-1 bg-accent-blue rounded-full animate-ping" style="left: 10%; top: 10%;"></div>
                        <div class="absolute w-1 h-1 bg-accent-purple rounded-full animate-ping" style="right: 10%; bottom: 10%; animation-delay: 0.2s;"></div>
                    </div>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex justify-between items-center py-1.5"> <!-- Changed py-2 to py-1.5 -->
                <div class="text-white font-semibold text-lg">Menu</div>
                <button class="mobile-menu-btn relative z-50 p-1.5 rounded-full bg-gradient-to-br from-accent-blue/20 to-accent-purple/20 backdrop-blur-sm border border-accent-blue/30 hover:from-accent-blue/30 hover:to-accent-purple/30 transition-all duration-300" x-on:click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle mobile menu"> <!-- Changed p-2 to p-1.5 -->
                    <div class="hamburger space-y-1"> <!-- Changed space-y-1.5 to space-y-1 -->
                        <span class="block w-6 h-0.5 bg-white transform transition-all duration-300" :class="{'rotate-45 translate-y-2': mobileMenuOpen}"></span>
                        <span class="block w-6 h-0.5 bg-white transition-all duration-300" :class="{'opacity-0': mobileMenuOpen}"></span>
                        <span class="block w-6 h-0.5 bg-white transform transition-all duration-300" :class="{'-rotate-45 -translate-y-2': mobileMenuOpen}"></span>
                    </div>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div class="lg:hidden" x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4">
                <div class="mobile-nav-content bg-gradient-to-b from-techtonaut-navy-dark/98 to-techtonaut-navy-light/98 backdrop-blur-md py-3 border-t border-white/10"> <!-- Changed py-4 to py-3 -->
                    <nav class="flex flex-col space-y-2 px-4">
                        <a href="#home" class="mobile-nav-link group relative text-white text-lg font-medium hover:text-accent-blue transition-all duration-300 transform hover:scale-105 px-4 py-1.5 rounded-xl hover:bg-gradient-to-r hover:from-accent-blue/20 hover:to-accent-purple/20 hover:backdrop-blur-sm hover:shadow-[0_0_10px_rgba(59,130,246,0.3)]" data-section="home" x-on:click="mobileMenuOpen = false"> <!-- Changed py-2 to py-1.5 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-accent-blue rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span>Home</span>
                            </div>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg class="w-4 h-4 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#about" class="mobile-nav-link group relative text-white text-lg font-medium hover:text-accent-blue transition-all duration-300 transform hover:scale-105 px-4 py-1.5 rounded-xl hover:bg-gradient-to-r hover:from-accent-blue/20 hover:to-accent-purple/20 hover:backdrop-blur-sm hover:shadow-[0_0_10px_rgba(59,130,246,0.3)]" data-section="about" x-on:click="mobileMenuOpen = false"> <!-- Changed py-2 to py-1.5 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-accent-blue rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span>About</span>
                            </div>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg class="w-4 h-4 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#services" class="mobile-nav-link group relative text-white text-lg font-medium hover:text-accent-blue transition-all duration-300 transform hover:scale-105 px-4 py-1.5 rounded-xl hover:bg-gradient-to-r hover:from-accent-blue/20 hover:to-accent-purple/20 hover:backdrop-blur-sm hover:shadow-[0_0_10px_rgba(59,130,246,0.3)]" data-section="services" x-on:click="mobileMenuOpen = false"> <!-- Changed py-2 to py-1.5 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-accent-blue rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span>Services</span>
                            </div>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg class="w-4 h-4 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#portfolio" class="mobile-nav-link group relative text-white text-lg font-medium hover:text-accent-blue transition-all duration-300 transform hover:scale-105 px-4 py-1.5 rounded-xl hover:bg-gradient-to-r hover:from-accent-blue/20 hover:to-accent-purple/20 hover:backdrop-blur-sm hover:shadow-[0_0_10px_rgba(59,130,246,0.3)]" data-section="portfolio" x-on:click="mobileMenuOpen = false"> <!-- Changed py-2 to py-1.5 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-accent-blue rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span>Portfolio</span>
                            </div>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg class="w-4 h-4 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#research" class="mobile-nav-link group relative text-white text-lg font-medium hover:text-accent-blue transition-all duration-300 transform hover:scale-105 px-4 py-1.5 rounded-xl hover:bg-gradient-to-r hover:from-accent-blue/20 hover:to-accent-purple/20 hover:backdrop-blur-sm hover:shadow-[0_0_10px_rgba(59,130,246,0.3)]" data-section="research" x-on:click="mobileMenuOpen = false"> <!-- Changed py-2 to py-1.5 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-accent-blue rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span>R&D</span>
                            </div>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg class="w-4 h-4 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#contact" class="mobile-nav-link group relative text-white text-lg font-medium hover:text-accent-blue transition-all duration-300 transform hover:scale-105 px-4 py-1.5 rounded-xl hover:bg-gradient-to-r hover:from-accent-blue/20 hover:to-accent-purple/20 hover:backdrop-blur-sm hover:shadow-[0_0_10px_rgba(59,130,246,0.3)]" data-section="contact" x-on:click="mobileMenuOpen = false"> <!-- Changed py-2 to py-1.5 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-accent-blue rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span>Contact</span>
                            </div>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg class="w-4 h-4 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</header>