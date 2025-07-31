<footer class="bg-gradient-to-t from-gray-900 via-gray-800 to-gray-900 border-t border-blue-500/30 py-20 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 opacity-50 transition-opacity duration-500"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-500/5 via-transparent to-purple-500/5"></div>
    
    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="footer-particle absolute w-2 h-2 bg-blue-500/60 rounded-full opacity-60 animate-float-slow" style="left: 10%; top: 20%; animation: float 6s ease-in-out infinite;"></div>
        <div class="footer-particle absolute w-1 h-1 bg-purple-500/50 rounded-full opacity-40 animate-float-slow" style="right: 15%; top: 30%; animation: float 8s ease-in-out infinite 2s;"></div>
        <div class="footer-particle absolute w-1.5 h-1.5 bg-green-500/60 rounded-full opacity-50 animate-float-slow" style="left: 20%; bottom: 40%; animation: float 7s ease-in-out infinite 4s;"></div>
        <div class="footer-particle absolute w-1 h-1 bg-blue-500/60 rounded-full opacity-30 animate-float-slow" style="right: 25%; bottom: 25%; animation: float 9s ease-in-out infinite 6s;"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Company Info -->
            <div class="space-y-8 flex flex-col items-center lg:items-start">
                <div class="group relative">
                    <a href="/" class="flex flex-col items-center lg:items-start">
                        <div class="relative mb-4">
                            <img src="{{ asset('images/logo_no_bg.png') }}" alt="Techtonauts Logo" class="h-24 w-auto transform group-hover:scale-105 group-hover:-translate-y-1 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/30 to-purple-500/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full blur-xl"></div>
                            <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-purple-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full blur-2xl"></div>
                        </div>
                        <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent group-hover:from-purple-400 group-hover:to-blue-400 transition-all duration-300 text-center lg:text-left">
                            Techtonauts
                        </h3>
                        <p class="text-sm text-blue-400/80 font-medium text-center lg:text-left">Innovation Platform</p>
                    </a>
                </div>
                <p class="text-gray-300 leading-relaxed text-center lg:text-left max-w-sm">
                    Empowering Bangladeshi businesses with world-class technology solutions, innovative R&D programs, and cutting-edge digital transformation services.
                </p>
                
                <!-- Enhanced Social Media Links -->
                <div class="flex justify-center lg:justify-start space-x-4">
                    <a href="https://facebook.com/techtonauts" class="social-link-footer group relative">
                        <div class="social-icon-footer bg-gradient-to-br from-blue-600 to-blue-800 p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                            <div class="absolute inset-0 bg-white/10 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-full"></div>
                        </div>
                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Facebook</span>
                    </a>
                    <a href="https://x.com/techtonauts" class="social-link-footer group relative">
                        <div class="social-icon-footer bg-gradient-to-br from-gray-800 to-black p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-400/20 to-gray-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                            <div class="absolute inset-0 bg-white/10 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-full"></div>
                        </div>
                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Twitter</span>
                    </a>
                    <a href="https://linkedin.com/company/techtonauts" class="social-link-footer group relative">
                        <div class="social-icon-footer bg-gradient-to-br from-blue-600 to-blue-700 p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                            <div class="absolute inset-0 bg-white/10 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-full"></div>
                        </div>
                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">LinkedIn</span>
                    </a>
                    <a href="https://github.com/techtonauts" class="social-link-footer group relative">
                        <div class="social-icon-footer bg-gradient-to-br from-gray-900 to-black p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-400/20 to-gray-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                            <div class="absolute inset-0 bg-white/10 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-full"></div>
                        </div>
                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">GitHub</span>
                    </a>
                    <a href="https://youtube.com/techtonauts" class="social-link-footer group relative">
                        <div class="social-icon-footer bg-gradient-to-br from-red-600 to-red-700 p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-red-400/20 to-red-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                            <div class="absolute inset-0 bg-white/10 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-full"></div>
                        </div>
                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">YouTube</span>
                    </a>
                    <a href="https://instagram.com/techtonauts" class="social-link-footer group relative">
                        <div class="social-icon-footer bg-gradient-to-br from-pink-500 to-purple-600 p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.326 3.608 1.301.975.975 1.24 2.242 1.301 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.326 2.633-1.301 3.608-.975.975-2.242 1.24-3.608 1.301-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.326-3.608-1.301-.975-.975-1.24-2.242-1.301-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.326-2.633 1.301-3.608.975.975 2.242 1.24 3.608 1.301 1.266.058 1.646.07 4.85.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.634.074-3.103.422-4.308 1.627C1.54 2.902 1.192 4.371 1.118 6.005c-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.074 1.634.422 3.103 1.627 4.308 1.205 1.205 2.674 1.553 4.308 1.627 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.634-.074 3.103-.422 4.308-1.627 1.205-1.205 1.553-2.674 1.627-4.308.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.074-1.634-.422-3.103-1.627-4.308-1.205-1.205-2.674-1.553-4.308-1.627-1.28-.058-1.688-.072-4.947-.072zm0 5.838c-3.404 0-6.162 2.759-6.162 6.162s2.758 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.758-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441-.645-1.441-1.441s.645-1.441 1.441-1.441 1.441.645 1.441 1.441-.645 1.441-1.441 1.441z"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-pink-400/20 to-purple-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                            <div class="absolute inset-0 bg-white/10 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-full"></div>
                        </div>
                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Instagram</span>
                    </a>
                </div>
            </div>

            <!-- Services -->
            <div class="space-y-8">
                <h4 class="text-xl font-bold text-blue-400 text-center lg:text-left relative">
                    <span class="relative z-10">Our Services</span>
                    <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </h4>
                <ul class="space-y-4 text-center lg:text-left">
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-blue-400/60 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Website Development</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-blue-400/60 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>AI & Machine Learning</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-blue-400/60 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Software Development</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-blue-400/60 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>UI/UX Design</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-blue-400/60 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Mobile App Development</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-blue-400/60 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Digital Marketing</span>
                    </a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="space-y-8">
                <h4 class="text-xl font-bold text-blue-400 text-center lg:text-left relative">
                    <span class="relative z-10">Company</span>
                    <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </h4>
                <ul class="space-y-4 text-center lg:text-left">
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-purple-400/60 group-hover:text-purple-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>About Us</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-purple-400/60 group-hover:text-purple-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Our Team</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-purple-400/60 group-hover:text-purple-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Careers</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-purple-400/60 group-hover:text-purple-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Research & Development</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-purple-400/60 group-hover:text-purple-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Blog</span>
                    </a></li>
                    <li><a href="#" class="footer-link-advanced group flex items-center justify-center lg:justify-start text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-2">
                        <svg class="w-4 h-4 mr-3 text-purple-400/60 group-hover:text-purple-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>Contact</span>
                    </a></li>
                </ul>
            </div>

            <!-- Contact Info & Newsletter -->
            <div class="space-y-8">
                <h4 class="text-xl font-bold text-blue-400 text-center lg:text-left relative">
                    <span class="relative z-10">Get in Touch</span>
                    <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </h4>
                <div class="space-y-6">
                    <div class="contact-item-advanced group flex items-center justify-center lg:justify-start space-x-4 p-3 rounded-xl hover:bg-blue-500/10 transition-all duration-300">
                        <div class="contact-icon-advanced bg-blue-500/20 p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-blue-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            <div class="absolute inset-0 bg-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                        </div>
                        <div>
                            <p class="text-gray-300 font-medium">Dhaka, Bangladesh</p>
                            <p class="text-sm text-gray-400">Innovation Hub</p>
                        </div>
                    </div>
                    <div class="contact-item-advanced group flex items-center justify-center lg:justify-start space-x-4 p-3 rounded-xl hover:bg-blue-500/10 transition-all duration-300">
                        <div class="contact-icon-advanced bg-blue-500/20 p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-blue-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div class="absolute inset-0 bg-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                        </div>
                        <div>
                            <a href="mailto:info@techtonauts.com" class="footer-link-advanced text-gray-300 hover:text-blue-400 transition-colors duration-300 font-medium">info@techtonauts.com</a>
                            <p class="text-sm text-gray-400">Business Inquiries</p>
                        </div>
                    </div>
                    <div class="contact-item-advanced group flex items-center justify-center lg:justify-start space-x-4 p-3 rounded-xl hover:bg-blue-500/10 transition-all duration-300">
                        <div class="contact-icon-advanced bg-blue-500/20 p-3 rounded-full transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 relative overflow-hidden">
                            <svg class="w-6 h-6 text-blue-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div class="absolute inset-0 bg-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                        </div>
                        <div>
                            <a href="tel:+8801234567890" class="footer-link-advanced text-gray-300 hover:text-blue-400 transition-colors duration-300 font-medium">+880 123 456 7890</a>
                            <p class="text-sm text-gray-400">24/7 Support</p>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Newsletter -->
                <div class="newsletter-signup-advanced">
                    <h5 class="text-lg font-bold text-purple-400 mb-4 text-center lg:text-left">Stay Updated</h5>
                    <p class="text-sm text-gray-400 mb-4 text-center lg:text-left">Get the latest tech insights and updates delivered to your inbox.</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="relative flex-1">
                            <input type="email" placeholder="Enter your email address" class="newsletter-input-advanced w-full px-4 py-3 pl-12 bg-gray-800/50 border border-blue-500/30 rounded-full text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500/50 transition-all duration-300 backdrop-blur-sm">
                            <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        <button class="newsletter-btn-advanced px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 group transform hover:scale-105 relative overflow-hidden">
                            <span class="relative z-10 flex items-center justify-center text-white font-semibold">
                                <svg class="w-5 h-5 mr-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                                Subscribe
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full"></div>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-3 text-center lg:text-left">
                        By subscribing, you agree to our Privacy Policy and consent to receive updates from our company.
                    </p>
                </div>
            </div>
        </div>

        <!-- Enhanced Bottom Bar -->
        <div class="border-t border-blue-500/30 pt-12">
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-8 lg:space-y-0">
                <div class="order-2 lg:order-1 text-center lg:text-left">
                    <p class="text-gray-400 text-sm mb-2">
                        © 2025 Techtonauts. All rights reserved.
                    </p>
                    <p class="text-xs text-gray-500">
                        Crafted with ❤️ in Bangladesh | Serving clients worldwide
                    </p>
                </div>
                
                <div class="order-1 lg:order-2 text-center">
                    <h5 class="text-lg font-bold text-green-400 mb-4">Secure Payments</h5>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="payment-item-advanced group relative p-2 bg-white/5 rounded-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <img src="{{ asset('images/payment/visa.png') }}" alt="Visa" class="h-8 w-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg"></div>
                        </div>
                        <div class="payment-item-advanced group relative p-2 bg-white/5 rounded-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <img src="{{ asset('images/payment/mastercard.png') }}" alt="Mastercard" class="h-8 w-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-red-400/20 to-orange-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg"></div>
                        </div>
                        <div class="payment-item-advanced group relative p-2 bg-white/5 rounded-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <img src="{{ asset('images/payment/bkash.png') }}" alt="Bkash" class="h-8 w-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-pink-400/20 to-pink-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg"></div>
                        </div>
                        <div class="payment-item-advanced group relative p-2 bg-white/5 rounded-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <img src="{{ asset('images/payment/nagad.png') }}" alt="Nagad" class="h-8 w-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-400/20 to-red-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg"></div>
                        </div>
                        <div class="payment-item-advanced group relative p-2 bg-white/5 rounded-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <img src="{{ asset('images/payment/paypal.png') }}" alt="PayPal" class="h-8 w-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg"></div>
                        </div>
                        <div class="payment-item-advanced group relative p-2 bg-white/5 rounded-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <img src="{{ asset('images/payment/googlepay.png') }}" alt="Google Pay" class="h-8 w-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-green-400/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg"></div>
                        </div>
                    </div>
                </div>
                
                <div class="order-3 lg:order-3 flex flex-wrap justify-center lg:justify-end gap-6">
                    <a href="#" class="footer-link-advanced text-sm text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1 relative group">
                        <span class="relative z-10">Privacy Policy</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#" class="footer-link-advanced text-sm text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1 relative group">
                        <span class="relative z-10">Terms of Service</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#" class="footer-link-advanced text-sm text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1 relative group">
                        <span class="relative z-10">Cookie Policy</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#" class="footer-link-advanced text-sm text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1 relative group">
                        <span class="relative z-10">Sitemap</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></div>
                    </a>
                </div>
            </div>
            
            <!-- Trust Badges -->
            <div class="mt-12 pt-8 border-t border-blue-500/20">
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                    <div class="flex items-center space-x-2 text-sm text-gray-400">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span>SSL Secured</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-400">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span>99.9% Uptime</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-400">
                        <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <span>GDPR Compliant</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-400">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                        <span>5-Star Rated</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}
</style>