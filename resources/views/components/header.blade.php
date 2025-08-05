<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-700 ease-out" id="main-header">
    <!-- Ambient Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-purple-500/10 via-transparent to-blue-500/10 blur-3xl opacity-40"></div>
    
    <!-- First Row: Logo and Social Media -->
    <div class="relative bg-gradient-to-r from-gray-900/95 via-purple-900/90 to-gray-900/95 backdrop-blur-xl border-b border-purple-500/25 shadow-2xl">
        <!-- Floating particles background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-2 h-2 bg-purple-500/60 rounded-full" style="left: 8%; top: 20%; animation: float 6s ease-in-out infinite;"></div>
            <div class="absolute w-1 h-1 bg-purple-500/50 rounded-full" style="right: 15%; top: 40%; animation: float 8s ease-in-out infinite 1.5s;"></div>
            <div class="absolute w-1.5 h-1.5 bg-blue-500/60 rounded-full" style="left: 25%; bottom: 30%; animation: float 7s ease-in-out infinite 3s;"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-2 relative">
            <div class="flex items-center justify-between">
                <!-- Premium Logo -->
                <div class="relative group flex-shrink-0">
                    <div class="absolute -inset-6 bg-gradient-to-r from-blue-500/40 via-purple-500/40 to-green-500/40 opacity-0 group-hover:opacity-100 blur-3xl transition-all duration-1000 rounded-full"></div>
                    <a href="/" class="flex items-center relative">
                        <div class="relative transform group-hover:scale-110 transition-all duration-700 group-hover:rotate-2">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/50 via-purple-500/50 to-green-500/50 blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-1000 rounded-full"></div>
                            <img src="{{ asset('images/logo_no_bg.png') }}" alt="Techtonauts Logo" class="h-16 md:h-18 lg:h-20 w-auto relative z-10 drop-shadow-2xl filter group-hover:brightness-110">
                            <div class="absolute inset-0 border-2 border-blue-500/50 rounded-full opacity-0 group-hover:opacity-100 scale-90 group-hover:scale-110 transition-all duration-700"></div>
                        </div>
                    </a>
                </div>

                <!-- Premium Social Media Hub -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-3 bg-gradient-to-r from-gray-800/60 via-purple-800/70 to-gray-800/60 backdrop-blur-xl border border-purple-500/30 rounded-2xl px-4 py-2 shadow-2xl">
                   
                        <a href="https://www.linkedin.com/feed/?trk=404_page" class="group relative">
                            <div class="absolute -inset-2 bg-gradient-to-r from-blue-600/60 to-blue-700/60 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-500 rounded-full"></div>
                            <div class="relative p-3 rounded-full bg-gradient-to-br from-blue-600/50 to-blue-700/70 backdrop-blur-xl border border-blue-500/40 hover:border-blue-400/60 transition-all duration-500 transform hover:scale-125 hover:-translate-y-1 hover:rotate-6 shadow-lg hover:shadow-2xl hover:shadow-blue-500/30">
                                <svg class="w-5 h-5 text-blue-200 group-hover:text-blue-100 transition-all duration-300 relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </div>
                        </a>
                        
                        <a href="https://www.instagram.com/tech_to_nauts/" class="group relative">
                            <div class="absolute -inset-2 bg-gradient-to-r from-pink-500/60 to-purple-600/60 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-500 rounded-full"></div>
                            <div class="relative p-3 rounded-full bg-gradient-to-br from-pink-500/50 to-purple-600/70 backdrop-blur-xl border border-pink-400/40 hover:border-pink-300/60 transition-all duration-500 transform hover:scale-125 hover:-translate-y-1 hover:rotate-6 shadow-lg hover:shadow-2xl hover:shadow-pink-500/30">
                                <svg class="w-5 h-5 text-pink-200 group-hover:text-pink-100 transition-all duration-300 relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.326 3.608 1.301.975.975 1.24 2.242 1.301 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.326 2.633-1.301 3.608-.975.975-2.242 1.24-3.608 1.301-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.326-3.608-1.301-.975-.975-1.24-2.242-1.301-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.326-2.633 1.301-3.608.975.975 2.242 1.24 3.608 1.301 1.266.058 1.646.07 4.85.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.634.074-3.103.422-4.308 1.627C1.54 2.902 1.192 4.371 1.118 6.005c-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.074 1.634.422 3.103 1.627 4.308 1.205 1.205 2.674 1.553 4.308 1.627 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.634-.074 3.103-.422 4.308-1.627 1.205-1.205 1.553-2.674 1.627-4.308.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.074-1.634-.422-3.103-1.627-4.308-1.205-1.205-2.674-1.553-4.308-1.627-1.28-.058-1.688-.072-4.947-.072zm0 5.838c-3.404 0-6.162 2.759-6.162 6.162s2.758 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.758-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441-.645-1.441-1.441s.645-1.441 1.441-1.441 1.441.645 1.441 1.441-.645 1.441-1.441 1.441z"/>
                                </svg>
                            </div>
                        </a>
                        
                        <a href="https://x.com/techtonauts" class="group relative">
                            <div class="absolute -inset-2 bg-gradient-to-r from-gray-800/60 to-black/60 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-500 rounded-full"></div>
                            <div class="relative p-3 rounded-full bg-gradient-to-br from-gray-800/50 to-black/70 backdrop-blur-xl border border-gray-600/40 hover:border-gray-400/60 transition-all duration-500 transform hover:scale-125 hover:-translate-y-1 hover:rotate-6 shadow-lg hover:shadow-2xl hover:shadow-gray-500/30">
                                <svg class="w-5 h-5 text-gray-200 group-hover:text-white transition-all duration-300 relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </div>
                        </a>
                        
                        <a href="https://youtube.com/techtonauts" class="group relative">
                            <div class="absolute -inset-2 bg-gradient-to-r from-red-500/60 to-red-700/60 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-500 rounded-full"></div>
                            <div class="relative p-3 rounded-full bg-gradient-to-br from-red-500/50 to-red-700/70 backdrop-blur-xl border border-red-400/40 hover:border-red-300/60 transition-all duration-500 transform hover:scale-125 hover:-translate-y-1 hover:rotate-6 shadow-lg hover:shadow-2xl hover:shadow-red-500/30">
                                <svg class="w-5 h-5 text-red-200 group-hover:text-red-100 transition-all duration-300 relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Second Row: Navigation and Search -->
    <nav class="relative bg-gradient-to-b from-gray-900/98 via-purple-900/95 to-gray-900/98 backdrop-blur-2xl shadow-2xl border-b border-purple-500/20" x-data="{ mobileMenuOpen: false }">
        <!-- Navigation ambient glow -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 via-blue-500/10 to-purple-500/10 opacity-60"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-5 relative">
            <!-- Desktop Navigation and Search -->
            <div class="flex items-center justify-between">
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-4 xl:space-x-6">
                    <a href="#home" class="relative text-white font-bold text-lg hover:text-purple-400 transition-all duration-500 group transform hover:scale-105 hover:-translate-y-1" data-section="home">
                        <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                        <span class="relative z-10 px-6 py-2 rounded-xl transition-all duration-500 group-hover:bg-gradient-to-r group-hover:from-purple-500/40 group-hover:to-blue-500/40 group-hover:backdrop-blur-xl group-hover:shadow-2xl group-hover:shadow-purple-500/30 border border-transparent group-hover:border-purple-500/50 flex items-center space-x-2">
                            <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="tracking-tight">Home</span>
                        </span>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 group-hover:w-full transition-all duration-500 rounded-full"></div>
                    </a>
                    <a href="#about" class="relative text-white font-bold text-lg hover:text-purple-400 transition-all duration-500 group transform hover:scale-105 hover:-translate-y-1" data-section="about">
                        <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                        <span class="relative z-10 px-6 py-2 rounded-xl transition-all duration-500 group-hover:bg-gradient-to-r group-hover:from-purple-500/40 group-hover:to-blue-500/40 group-hover:backdrop-blur-xl group-hover:shadow-2xl group-hover:shadow-purple-500/30 border border-transparent group-hover:border-purple-500/50 flex items-center space-x-2">
                            <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="tracking-tight">About</span>
                        </span>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 group-hover:w-full transition-all duration-500 rounded-full"></div>
                    </a>
                    <a href="#services" class="relative text-white font-bold text-lg hover:text-purple-400 transition-all duration-500 group transform hover:scale-105 hover:-translate-y-1" data-section="services">
                        <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                        <span class="relative z-10 px-6 py-2 rounded-xl transition-all duration-500 group-hover:bg-gradient-to-r group-hover:from-purple-500/40 group-hover:to-blue-500/40 group-hover:backdrop-blur-xl group-hover:shadow-2xl group-hover:shadow-purple-500/30 border border-transparent group-hover:border-purple-500/50 flex items-center space-x-2">
                            <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span class="tracking-tight">Services</span>
                        </span>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 group-hover:w-full transition-all duration-500 rounded-full"></div>
                    </a>
                    <a href="#portfolio" class="relative text-white font-bold text-lg hover:text-purple-400 transition-all duration-500 group transform hover:scale-105 hover:-translate-y-1" data-section="portfolio">
                        <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                        <span class="relative z-10 px-6 py-2 rounded-xl transition-all duration-500 group-hover:bg-gradient-to-r group-hover:from-purple-500/40 group-hover:to-blue-500/40 group-hover:backdrop-blur-xl group-hover:shadow-2xl group-hover:shadow-purple-500/30 border border-transparent group-hover:border-purple-500/50 flex items-center space-x-2">
                            <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                            <span class="tracking-tight">Portfolio</span>
                        </span>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 group-hover:w-full transition-all duration-500 rounded-full"></div>
                    </a>
                    <a href="#research" class="relative text-white font-bold text-lg hover:text-purple-400 transition-all duration-500 group transform hover:scale-105 hover:-translate-y-1" data-section="research">
                        <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                        <span class="relative z-10 px-6 py-2 rounded-xl transition-all duration-500 group-hover:bg-gradient-to-r group-hover:from-purple-500/40 group-hover:to-blue-500/40 group-hover:backdrop-blur-xl group-hover:shadow-2xl group-hover:shadow-purple-500/30 border border-transparent group-hover:border-purple-500/50 flex items-center space-x-2">
                            <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                            <span class="tracking-tight">R&D</span>
                        </span>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 group-hover:w-full transition-all duration-500 rounded-full"></div>
                    </a>
                    <a href="#contact" class="relative text-white font-bold text-lg hover:text-purple-400 transition-all duration-500 group transform hover:scale-105 hover:-translate-y-1" data-section="contact">
                        <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                        <span class="relative z-10 px-6 py-2 rounded-xl transition-all duration-500 group-hover:bg-gradient-to-r group-hover:from-purple-500/40 group-hover:to-blue-500/40 group-hover:backdrop-blur-xl group-hover:shadow-2xl group-hover:shadow-purple-500/30 border border-transparent group-hover:border-purple-500/50 flex items-center space-x-2">
                            <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="tracking-tight">Contact</span>
                        </span>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 group-hover:w-full transition-all duration-500 rounded-full"></div>
                    </a>
                </div>

                <!-- Premium Search Bar -->
                <div class="flex-1 max-w-2xl mx-4 hidden lg:block">
                    <div class="relative group">
                        <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/25 via-blue-500/25 to-purple-500/25 rounded-xl blur-lg opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 transition-all duration-700"></div>
                        <div class="relative bg-gradient-to-r from-gray-800/70 via-purple-800/80 to-gray-800/70 backdrop-blur-xl border border-purple-500/40 group-hover:border-purple-500/60 group-focus-within:border-blue-500/70 rounded-xl shadow-2xl transition-all duration-500 overflow-hidden">
                            <input type="text" placeholder="Search AI solutions, services, or technologies..." class="w-full px-5 py-3 pl-12 bg-transparent text-white placeholder-gray-300 focus:outline-none focus:placeholder-gray-400 transition-all duration-300 text-base font-medium">
                            <div class="absolute left-4 top-1/2 transform -translate-y-1/2 group-focus-within:scale-110 group-focus-within:text-purple-400 transition-all duration-300">
                                <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-purple-500 to-blue-500 text-white p-2 rounded-lg hover:shadow-xl hover:shadow-purple-500/50 transition-all duration-500 group hover:scale-110">
                                <svg class="w-4 h-4 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full group-focus-within:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent pointer-events-none"></div>
                        </div>
                        
                        <!-- Premium Search Suggestions -->
                        <div class="absolute top-full left-0 right-0 mt-2 opacity-0 invisible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-500 z-50 transform translate-y-2 group-focus-within:translate-y-0">
                            <div class="bg-gradient-to-br from-gray-800/95 via-purple-800/90 to-gray-800/95 backdrop-blur-2xl border border-purple-500/40 rounded-xl shadow-2xl overflow-hidden">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h4 class="text-sm font-bold text-purple-400 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                            Trending Searches
                                        </h4>
                                        <span class="text-xs text-gray-400 bg-purple-500/15 px-2 py-1 rounded-full">Live</span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2">
                                        <a href="#" class="group flex items-center p-2 rounded-lg hover:bg-gradient-to-r hover:from-purple-500/25 hover:to-blue-500/25 transition-all duration-300 border border-transparent hover:border-purple-500/40">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full mr-2 group-hover:animate-pulse"></div>
                                            <span class="text-sm text-gray-200 group-hover:text-white">AI Development</span>
                                        </a>
                                        <a href="#" class="group flex items-center p-2 rounded-lg hover:bg-gradient-to-r hover:from-purple-500/25 hover:to-blue-500/25 transition-all duration-300 border border-transparent hover:border-purple-500/40">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full mr-2 group-hover:animate-pulse"></div>
                                            <span class="text-sm text-gray-200 group-hover:text-white">Website Development</span>
                                        </a>
                                        <a href="#" class="group flex items-center p-2 rounded-lg hover:bg-gradient-to-r hover:from-purple-500/25 hover:to-blue-500/25 transition-all duration-300 border border-transparent hover:border-purple-500/40">
                                            <div class="w-2 h-2 bg-indigo-500 rounded-full mr-2 group-hover:animate-pulse"></div>
                                            <span class="text-sm text-gray-200 group-hover:text-white">Software Development</span>
                                        </a>
                                        <a href="#" class="group flex items-center p-2 rounded-lg hover:bg-gradient-to-r hover:from-purple-500/25 hover:to-blue-500/25 transition-all duration-300 border border-transparent hover:border-purple-500/40">
                                            <div class="w-2 h-2 bg-pink-500 rounded-full mr-2 group-hover:animate-pulse"></div>
                                            <span class="text-sm text-gray-200 group-hover:text-white">Mobile Apps</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden relative group">
                    <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/40 to-blue-500/40 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-500 rounded-xl"></div>
                    <button class="relative p-3 rounded-xl bg-gradient-to-br from-purple-500/25 to-blue-500/25 backdrop-blur-xl border border-purple-500/40 hover:border-purple-500/60 transition-all duration-500 group transform hover:scale-110 hover:-translate-y-1 shadow-xl hover:shadow-2xl" x-on:click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle mobile menu">
                        <div class="space-y-1.5">
                            <span class="block w-6 h-0.5 bg-white transform transition-all duration-500 group-hover:bg-purple-400" :class="{'rotate-45 translate-y-2': mobileMenuOpen}"></span>
                            <span class="block w-6 h-0.5 bg-white transition-all duration-500 group-hover:bg-purple-400" :class="{'opacity-0 translate-x-3': mobileMenuOpen}"></span>
                            <span class="block w-6 h-0.5 bg-white transform transition-all duration-500 group-hover:bg-purple-400" :class="{'-rotate-45 -translate-y-2': mobileMenuOpen}"></span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="lg:hidden" x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform -translate-y-8 scale-95" x-transition:enter-end="opacity-100 transform translate-y-0 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0 scale-100" x-transition:leave-end="opacity-0 transform -translate-y-8 scale-95">
                <div class="bg-gradient-to-br from-gray-900/98 via-purple-900/95 to-gray-900/98 backdrop-blur-2xl py-6 border-t border-purple-500/40 rounded-b-2xl shadow-2xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/15 via-transparent to-blue-500/15 opacity-40"></div>
                    <nav class="flex flex-col space-y-2 px-5">
                        <a href="#home" class="group relative text-white text-lg font-bold hover:text-purple-400 transition-all duration-500 transform hover:scale-105 px-6 py-3 rounded-xl hover:bg-gradient-to-r hover:from-purple-500/40 hover:to-blue-500/40 hover:backdrop-blur-xl hover:shadow-2xl hover:shadow-purple-500/30 border border-transparent hover:border-purple-500/50" data-section="home" x-on:click="mobileMenuOpen = false">
                            <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                            <div class="flex items-center justify-between relative z-10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:animate-pulse"></div>
                                    <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                    <span class="tracking-tight">Home</span>
                                </div>
                                <svg class="w-5 h-5 text-purple-400 opacity-0 group-hover:opacity-100 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#about" class="group relative text-white text-lg font-bold hover:text-purple-400 transition-all duration-500 transform hover:scale-105 px-6 py-3 rounded-xl hover:bg-gradient-to-r hover:from-purple-500/40 hover:to-blue-500/40 hover:backdrop-blur-xl hover:shadow-2xl hover:shadow-purple-500/30 border border-transparent hover:border-purple-500/50" data-section="about" x-on:click="mobileMenuOpen = false">
                            <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                            <div class="flex items-center justify-between relative z-10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:animate-pulse"></div>
                                    <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="tracking-tight">About</span>
                                </div>
                                <svg class="w-5 h-5 text-blue-400 opacity-0 group-hover:opacity-100 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#services" class="group relative text-white text-lg font-bold hover:text-purple-400 transition-all duration-500 transform hover:scale-105 px-6 py-3 rounded-xl hover:bg-gradient-to-r hover:from-purple-500/40 hover:to-blue-500/40 hover:backdrop-blur-xl hover:shadow-2xl hover:shadow-purple-500/30 border border-transparent hover:border-purple-500/50" data-section="services" x-on:click="mobileMenuOpen = false">
                            <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                            <div class="flex items-center justify-between relative z-10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:animate-pulse"></div>
                                    <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                    <span class="tracking-tight">Services</span>
                                </div>
                                <svg class="w-5 h-5 text-indigo-400 opacity-0 group-hover:opacity-100 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#portfolio" class="group relative text-white text-lg font-bold hover:text-purple-400 transition-all duration-500 transform hover:scale-105 px-6 py-3 rounded-xl hover:bg-gradient-to-r hover:from-purple-500/40 hover:to-blue-500/40 hover:backdrop-blur-xl hover:shadow-2xl hover:shadow-purple-500/30 border border-transparent hover:border-purple-500/50" data-section="portfolio" x-on:click="mobileMenuOpen = false">
                            <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                            <div class="flex items-center justify-between relative z-10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-pink-500 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:animate-pulse"></div>
                                    <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                    <span class="tracking-tight">Portfolio</span>
                                </div>
                                <svg class="w-5 h-5 text-pink-400 opacity-0 group-hover:opacity-100 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#research" class="group relative text-white text-lg font-bold hover:text-purple-400 transition-all duration-500 transform hover:scale-105 px-6 py-3 rounded-xl hover:bg-gradient-to-r hover:from-purple-500/40 hover:to-blue-500/40 hover:backdrop-blur-xl hover:shadow-2xl hover:shadow-purple-500/30 border border-transparent hover:border-purple-500/50" data-section="research" x-on:click="mobileMenuOpen = false">
                            <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                            <div class="flex items-center justify-between relative z-10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-green-500 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:animate-pulse"></div>
                                    <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                    <span class="tracking-tight">R&D</span>
                                </div>
                                <svg class="w-5 h-5 text-green-400 opacity-0 group-hover:opacity-100 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#contact" class="group relative text-white text-lg font-bold hover:text-purple-400 transition-all duration-500 transform hover:scale-105 px-6 py-3 rounded-xl hover:bg-gradient-to-r hover:from-purple-500/40 hover:to-blue-500/40 hover:backdrop-blur-xl hover:shadow-2xl hover:shadow-purple-500/30 border border-transparent hover:border-purple-500/50" data-section="contact" x-on:click="mobileMenuOpen = false">
                            <div class="absolute -inset-2 bg-gradient-to-r from-purple-500/30 to-blue-500/30 opacity-0 group-hover:opacity-100 blur-lg transition-all duration-700 rounded-xl"></div>
                            <div class="flex items-center justify-between relative z-10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-yellow-500 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:animate-pulse"></div>
                                    <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="tracking-tight">Contact</span>
                                </div>
                                <svg class="w-5 h-5 text-yellow-400 opacity-0 group-hover:opacity-100 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                    </nav>
                    <!-- Mobile Search Bar -->
                    <div class="px-5 mt-6">
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-gradient-to-r from-purple-500/40 to-blue-500/40 opacity-0 group-focus-within:opacity-100 blur-lg transition-all duration-500 rounded-xl"></div>
                            <div class="relative bg-gradient-to-r from-gray-800/70 to-purple-800/80 backdrop-blur-xl border border-purple-500/40 group-focus-within:border-purple-500/60 rounded-xl shadow-xl overflow-hidden">
                                <input type="text" placeholder="Search technologies..." class="w-full px-5 py-3 pl-12 bg-transparent text-white placeholder-gray-300 focus:outline-none focus:placeholder-gray-400 transition-all duration-300 text-base">
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2 group-focus-within:scale-110 group-focus-within:text-purple-400 transition-all duration-300">
                                    <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <div class="absolute inset-0 -translate-x-full group-focus-within:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent pointer-events-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}
</style>