@extends('layouts.app')

@section('title', 'Advanced Software Development & IoT Solutions - Techtonauts')
@section('description', 'Revolutionary software development and IoT solutions designed for seamless user interaction and robust functionality. From desktop GUI applications to web-based software and IoT device integration.')
@section('keywords', 'software development Bangladesh, GUI applications, IoT solutions, desktop applications, web-based software, cross-platform development, custom software architecture, LifeGuard+, CardioGuard, healthcare IoT, rural healthcare technology')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-purple-50/30 dark:from-gray-900 dark:via-gray-800 dark:to-purple-900/20 transition-colors duration-300">
    
    <!-- Hero Section: Software Innovation Unleashed -->
    <section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden"
             x-data="{ 
                 showModal: false,
                 animateStats: false,
                 currentShowcase: 0,
                 showcases: [
                     { name: 'LifeGuard+', type: 'Healthcare AI', description: 'AI-powered health monitoring for rural communities', status: 'Launching December 2024' },
                     { name: 'CardioGuard', type: 'IoT Medical Device', description: 'Portable cardiovascular emergency response system', status: 'Launching December 2024' },
                     { name: 'Smart Agriculture', type: 'IoT Platform', description: 'Precision farming with deep learning analytics', status: 'In Development' }
                 ]
             }"
             x-init="
                setTimeout(() => { animateStats = true }, 1000);
                setInterval(() => { 
                    currentShowcase = (currentShowcase + 1) % showcases.length 
                }, 4000);
             ">
        
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-600/20 via-blue-600/10 to-indigo-600/20 opacity-70"></div>
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute top-40 right-10 w-96 h-96 bg-blue-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-1/2 w-80 h-80 bg-indigo-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <!-- Tech Grid Background -->
        <div class="absolute inset-0 overflow-hidden opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #7C3AED 0%, transparent 50%), radial-gradient(circle at 75% 75%, #4338CA 0%, transparent 50%);"></div>
        </div>

        <!-- Floating Tech Icons -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-8 h-8 text-purple-500/40 animate-bounce" style="left: 15%; top: 30%; animation-delay: 0s; animation-duration: 3s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="absolute w-6 h-6 text-blue-500/40 animate-bounce" style="right: 20%; top: 40%; animation-delay: 1s; animation-duration: 4s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <div class="absolute w-7 h-7 text-indigo-500/40 animate-bounce" style="left: 60%; bottom: 40%; animation-delay: 2s; animation-duration: 5s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
            </div>
            <div class="absolute w-5 h-5 text-purple-500/40 animate-bounce" style="right: 40%; top: 20%; animation-delay: 3s; animation-duration: 3.5s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19.428 15.428l-3.429-3.428m0 0l-3.428-3.429m3.428 3.429V4m0 8.571V21"/></svg>
            </div>
        </div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-6xl mx-auto">
                
                <!-- Hero Content -->
                <div class="space-y-8 mb-12">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-100 to-blue-100 dark:from-purple-900/30 dark:to-blue-900/30 rounded-full text-sm font-semibold text-purple-800 dark:text-purple-300 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        Revolutionary Software & IoT Development
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-gray-900 dark:text-white leading-tight">
                        <span class="block bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600 bg-clip-text text-transparent animate-pulse">Intelligent Software</span>
                        <span class="block mt-2 text-3xl md:text-4xl lg:text-5xl font-bold">That Transforms Lives</span>
                        <span class="block bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">With Techtonauts</span>
                    </h1>
                    
                    <p class="text-xl lg:text-2xl text-gray-700 dark:text-gray-300 font-medium leading-relaxed max-w-4xl mx-auto">
                        Advanced GUI applications and web-based software solutions designed for seamless user interaction and robust functionality across all platforms. We're building the future of healthcare technology for rural Bangladesh and emergency response systems.
                    </p>
                </div>

                <!-- Key Innovation Areas -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-12" 
                     x-show="animateStats"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 transform translate-y-8"
                     x-transition:enter-end="opacity-100 transform translate-y-0">
                    
                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl shadow-xl group-hover:shadow-purple-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/desktop_gui_icon.png') }}" alt="Desktop GUI Applications" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Desktop GUI Applications</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Cross-platform desktop solutions with intuitive interfaces</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-xl group-hover:shadow-blue-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/web_software_icon.png') }}" alt="Web-based Software Solutions" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Web-based Software Solutions</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Cloud-powered applications accessible from anywhere</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl shadow-xl group-hover:shadow-indigo-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-400 to-indigo-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/iot_devices_icon.png') }}" alt="IoT Device Integration" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">IoT Device Integration</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Smart devices powered by deep learning AI</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl shadow-xl group-hover:shadow-green-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/custom_architecture_icon.png') }}" alt="Custom Software Architecture" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Custom Software Architecture</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Scalable, robust solutions tailored to your needs</p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="#solutions" class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-purple-600 to-blue-600 text-white font-bold text-lg rounded-2xl shadow-xl hover:shadow-2xl hover:shadow-purple-500/50 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <span class="relative z-10 mr-3">Explore Software Solutions</span>
                        <svg class="relative z-10 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <button @click="showModal = true" class="group relative inline-flex items-center px-8 py-4 bg-transparent border-2 border-gray-800 dark:border-white text-gray-800 dark:text-white font-bold text-lg rounded-2xl hover:bg-gray-800 dark:hover:bg-white hover:text-white dark:hover:text-gray-800 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <span class="mr-3">Schedule Innovation Consultation</span>
                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428l-3.429-3.428m0 0l-3.428-3.429m3.428 3.429V4m0 8.571V21"/>
                        </svg>
                    </button>
                </div>

                <!-- Live Project Showcase -->
                <div class="bg-white/10 dark:bg-gray-800/10 backdrop-blur-sm rounded-2xl p-6 max-w-3xl mx-auto">
                    <div class="text-center mb-4">
                        <p class="text-sm font-semibold text-purple-600 dark:text-purple-400 mb-2">Currently Developing</p>
                    </div>
                    <div x-data="{ currentShowcase }" class="text-center">
                        <template x-for="(showcase, index) in showcases" :key="index">
                            <div x-show="currentShowcase === index" 
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 transform translate-x-4"
                                 x-transition:enter-end="opacity-100 transform translate-x-0"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 transform translate-x-0"
                                 x-transition:leave-end="opacity-0 transform -translate-x-4">
                                <div class="flex items-center justify-center space-x-4 mb-3">
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white" x-text="showcase.name"></h3>
                                        <p class="text-purple-600 dark:text-purple-400 font-semibold" x-text="showcase.type"></p>
                                    </div>
                                </div>
                                <p class="text-lg text-gray-700 dark:text-gray-300 mb-2" x-text="showcase.description"></p>
                                <p class="text-sm font-semibold text-green-600 dark:text-green-400" x-text="showcase.status"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Innovation Modal -->
        <div x-show="showModal" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" 
             style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity bg-gray-900/80 backdrop-blur-sm" @click="showModal = false"></div>
                
                <div class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white dark:bg-gray-800 shadow-xl rounded-2xl"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform scale-95 translate-y-4"
                     x-transition:enter-end="opacity-100 transform scale-100 translate-y-0">
                    
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Innovation Consultation</h3>
                        <button @click="showModal = false" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Software Solution Interest</label>
                            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                <option>Desktop GUI Application</option>
                                <option>Web-based Software Solution</option>
                                <option>IoT Device Integration</option>
                                <option>Healthcare Technology</option>
                                <option>Custom Software Architecture</option>
                                <option>AI-Powered Application</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Scope</label>
                            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                <option>Small Business Solution</option>
                                <option>Enterprise Application</option>
                                <option>Startup MVP</option>
                                <option>Healthcare Innovation</option>
                                <option>Research & Development</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Vision</label>
                            <textarea rows="3" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white" placeholder="Describe your software vision and requirements..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Schedule Innovation Consultation
                        </button>
                    </form>
                    
                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400 text-center">
                        <span class="font-semibold text-purple-600 dark:text-purple-400">Free Innovation Session.</span> Explore possibilities together.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Software Development Capabilities -->
    <section id="capabilities" class="py-20 lg:py-32 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Comprehensive Software Expertise: <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">From Desktop to Cloud to IoT</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    We deliver end-to-end software solutions that bridge the gap between traditional applications and cutting-edge IoT technology. Our expertise spans across multiple platforms and technologies, ensuring your software vision becomes reality.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <!-- Desktop GUI Applications -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/desktop_gui_premium_icon.png') }}" alt="Desktop GUI Applications" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Desktop GUI Applications</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Cross-platform desktop applications with intuitive user interfaces, optimized performance, and seamless integration capabilities. Built for Windows, macOS, and Linux environments.
                                </p>
                                <div class="flex items-center text-purple-600 dark:text-purple-400 font-semibold">
                                    <span class="mr-2" x-text="expanded ? 'Show Less' : 'Learn More'">Learn More</span>
                                    <svg class="w-5 h-5 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div x-show="expanded" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform -translate-y-4"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Desktop Technologies:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Electron Framework for Cross-Platform</li>
                                        <li>• Native Windows Applications (.NET)</li>
                                        <li>• macOS Native Applications (Swift)</li>
                                        <li>• Linux Applications (Qt/GTK+)</li>
                                        <li>• Progressive Web Apps (PWA)</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Key Features:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Rich User Interface Design</li>
                                        <li>• Multi-threading & Performance Optimization</li>
                                        <li>• Database Integration & Synchronization</li>
                                        <li>• File System & Hardware Access</li>
                                        <li>• Automatic Updates & Deployment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web-based Software Solutions -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/web_software_premium_icon.png') }}" alt="Web-based Software Solutions" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Web-based Software Solutions</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Cloud-powered applications accessible from any device, featuring real-time synchronization, collaborative features, and enterprise-grade security protocols.
                                </p>
                                <div class="flex items-center text-blue-600 dark:text-blue-400 font-semibold">
                                    <span class="mr-2" x-text="expanded ? 'Show Less' : 'Learn More'">Learn More</span>
                                    <svg class="w-5 h-5 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div x-show="expanded" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform -translate-y-4"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Web Technologies:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Laravel & PHP Backend Framework</li>
                                        <li>• React.js & Vue.js Frontend</li>
                                        <li>• Progressive Web Applications</li>
                                        <li>• Real-time WebSocket Integration</li>
                                        <li>• Microservices Architecture</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Cloud Features:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Multi-tenant SaaS Architecture</li>
                                        <li>• Scalable Cloud Infrastructure</li>
                                        <li>• Advanced API Development</li>
                                        <li>• Real-time Collaboration Tools</li>
                                        <li>• Enterprise Security & Compliance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IoT Device Integration -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/iot_integration_premium_icon.png') }}" alt="IoT Device Integration" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">IoT Device Integration</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Seamless integration of smart devices powered by deep learning AI, enabling real-time data collection, analysis, and automated responses for healthcare and emergency situations.
                                </p>
                                <div class="flex items-center text-green-600 dark:text-green-400 font-semibold">
                                    <span class="mr-2" x-text="expanded ? 'Show Less' : 'Learn More'">Learn More</span>
                                    <svg class="w-5 h-5 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div x-show="expanded" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform -translate-y-4"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">IoT Technologies:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Arduino & Raspberry Pi Integration</li>
                                        <li>• MQTT & CoAP Protocols</li>
                                        <li>• LoRaWAN & NB-IoT Connectivity</li>
                                        <li>• Edge Computing Solutions</li>
                                        <li>• Sensor Data Processing & Analytics</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Healthcare IoT:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Portable Health Monitoring Devices</li>
                                        <li>• Real-time Vital Signs Tracking</li>
                                        <li>• Emergency Alert Systems</li>
                                        <li>• Remote Patient Monitoring</li>
                                        <li>• Rural Healthcare Connectivity</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Software Architecture -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/custom_architecture_premium_icon.png') }}" alt="Custom Software Architecture" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Custom Software Architecture</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Scalable, maintainable software architectures designed to handle complex business logic, high-traffic loads, and future growth requirements with modern design patterns.
                                </p>
                                <div class="flex items-center text-indigo-600 dark:text-indigo-400 font-semibold">
                                    <span class="mr-2" x-text="expanded ? 'Show Less' : 'Learn More'">Learn More</span>
                                    <svg class="w-5 h-5 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div x-show="expanded" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform -translate-y-4"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Architecture Patterns:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Clean Architecture & SOLID Principles</li>
                                        <li>• Domain-Driven Design (DDD)</li>
                                        <li>• Event-Driven Architecture</li>
                                        <li>• CQRS & Event Sourcing</li>
                                        <li>• Hexagonal Architecture</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Scalability Features:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Containerization with Docker</li>
                                        <li>• Kubernetes Orchestration</li>
                                        <li>• Load Balancing & Auto-scaling</li>
                                        <li>• Database Sharding & Replication</li>
                                        <li>• Caching & CDN Integration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Innovation Statistics -->
            <div class="bg-gradient-to-r from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Software Development Impact</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Delivering innovative solutions that transform industries</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-black text-purple-600 mb-2">50+</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Software Solutions</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Across various platforms</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-blue-600 mb-2">2</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Healthcare IoT Products</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Launching December 2024</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-green-600 mb-2">100%</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Cross-Platform Support</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Desktop, Web, Mobile, IoT</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-indigo-600 mb-2">24/7</div>
                        <p class="font-semibold text-gray-900 dark:text-white">IoT Monitoring</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Continuous health tracking</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects: LifeGuard+ & CardioGuard -->
    <section id="featured-projects" class="py-20 lg:py-32 bg-gray-50/50 dark:bg-gray-900/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Revolutionary Healthcare Solutions: <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">Where Technology Saves Lives</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    Introducing our flagship AI-powered healthcare applications and IoT devices designed specifically for rural Bangladesh and emergency response. These innovations represent the future of accessible healthcare technology.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12"
                 x-data="{ activeFeature: null }">
                
                <!-- LifeGuard+ Project -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50"
                     @click="activeFeature = activeFeature === 'lifeguard' ? null : 'lifeguard'">
                    
                    <div class="absolute top-6 right-6 z-10">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">AI Healthcare</span>
                    </div>
                    
                    <div class="aspect-video relative overflow-hidden">
                        <img src="{{ asset('images/lifeguard_plus_app.jpg') }}" alt="LifeGuard+ AI Healthcare Application" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-lg font-bold">Launching December 2024</p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-blue-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">LifeGuard+</h3>
                                <p class="text-green-600 dark:text-green-400 font-semibold">AI-Powered Health Monitoring Platform</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Revolutionary AI-powered GUI application that integrates with portable IoT health monitoring devices. Designed specifically for rural areas with limited healthcare access, providing real-time health analysis and emergency alerts.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">AI Integration</span>
                            <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">IoT Devices</span>
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 px-3 py-1 rounded-full text-sm font-medium">Deep Learning</span>
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-800 dark:text-orange-300 px-3 py-1 rounded-full text-sm font-medium">Rural Healthcare</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <button class="text-green-600 dark:text-green-400 font-semibold hover:text-green-700 dark:hover:text-green-300 transition-colors duration-300">
                                Explore Innovation Details →
                            </button>
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-green-600 dark:text-green-400">In Development</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Expandable Details -->
                    <div x-show="activeFeature === 'lifeguard'" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="pt-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Revolutionary Features:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• Real-time AI health analysis and prediction</li>
                                    <li>• Portable IoT device integration</li>
                                    <li>• Multi-language support for rural communities</li>
                                    <li>• Emergency alert system with GPS location</li>
                                </ul>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• Offline functionality for remote areas</li>
                                    <li>• Telemedicine consultation integration</li>
                                    <li>• Health data visualization and trends</li>
                                    <li>• Family member notification system</li>
                                </ul>
                            </div>
                            <div class="mt-4 p-4 bg-green-50 dark:bg-green-900/20 rounded-lg">
                                <p class="text-sm text-green-800 dark:text-green-300 font-medium">
                                    <strong>Social Impact:</strong> Designed to serve rural communities where healthcare access is limited, providing life-saving technology at the point of need.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CardioGuard Project -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50"
                     @click="activeFeature = activeFeature === 'cardio' ? null : 'cardio'">
                    
                    <div class="absolute top-6 right-6 z-10">
                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Medical IoT</span>
                    </div>
                    
                    <div class="aspect-video relative overflow-hidden">
                        <img src="{{ asset('images/cardioguard_dashboard.jpg') }}" alt="CardioGuard Cardiovascular Monitoring System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-lg font-bold">Launching December 2024</p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">CardioGuard</h3>
                                <p class="text-red-600 dark:text-red-400 font-semibold">Advanced Cardiovascular Emergency System</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Cutting-edge portable IoT device powered by deep learning AI for cardiovascular emergency detection and response. Features 24/7 monitoring, automatic emergency alerts, and integration with emergency services.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 px-3 py-1 rounded-full text-sm font-medium">Emergency Response</span>
                            <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">24/7 Monitoring</span>
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 px-3 py-1 rounded-full text-sm font-medium">Deep Learning</span>
                            <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">Portable Device</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <button class="text-red-600 dark:text-red-400 font-semibold hover:text-red-700 dark:hover:text-red-300 transition-colors duration-300">
                                Discover Life-Saving Technology →
                            </button>
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-red-600 dark:text-red-400">In Development</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Expandable Details -->
                    <div x-show="activeFeature === 'cardio'" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="pt-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Life-Saving Capabilities:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• Continuous heart rate and rhythm monitoring</li>
                                    <li>• AI-powered cardiac event prediction</li>
                                    <li>• Automatic emergency service notification</li>
                                    <li>• Real-time ECG analysis and reporting</li>
                                </ul>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• GPS location tracking for emergencies</li>
                                    <li>• Family and doctor instant alerts</li>
                                    <li>• Historical health data analysis</li>
                                    <li>• Integration with hospital systems</li>
                                </ul>
                            </div>
                            <div class="mt-4 p-4 bg-red-50 dark:bg-red-900/20 rounded-lg">
                                <p class="text-sm text-red-800 dark:text-red-300 font-medium">
                                    <strong>Emergency Focus:</strong> Specifically designed for natural disaster response and rural emergency situations where immediate medical assistance may not be available.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Development Timeline -->
            <div class="mt-16 bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900/20 dark:to-purple-900/20 rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Innovation Timeline</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Our journey to revolutionize healthcare technology</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Research & Development</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">2023 - Present</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Intensive research into rural healthcare needs and AI technology integration</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428l-3.429-3.428m0 0l-3.428-3.429m3.428 3.429V4m0 8.571V21"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Beta Testing & Refinement</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">Current Phase</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Rigorous testing with healthcare professionals and rural community partners</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Public Launch</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">December 2024</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Official launch of both LifeGuard+ and CardioGuard systems</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Software Development Process -->
    <section id="process" class="py-20 lg:py-32 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Our Development Philosophy: <span class="bg-gradient-to-r from-cyan-600 to-purple-600 bg-clip-text text-transparent">Innovation Meets Precision</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    We follow a rigorous, user-centered development process that ensures every software solution is not just functional, but transformative. Our approach combines cutting-edge technology with deep understanding of user needs.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            Innovation-First Approach
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            We don't just follow trends—we create them. Every project begins with extensive research into emerging technologies, user needs analysis, and innovative problem-solving approaches that push the boundaries of what's possible.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            User-Centered Design Process
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Every interface, every feature, every interaction is designed with the end user in mind. We conduct extensive user research, create detailed personas, and continuously iterate based on real user feedback to ensure optimal usability.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.99.01c.326 0 .623-.138.837-.364a1.186 1.186 0 00.363-.836V8.828c0-.314-.125-.615-.347-.837L16.828 8l1.207-1.207a1.186 1.186 0 00.347-.837V3.828c0-.314-.125-.615-.347-.837l-2.414-2.414a1.186 1.186 0 00-.837-.347H8.828c-.314 0-.615.125-.837.347L6.784 1.784a1.186 1.186 0 00-.347.837V8.828c0 .314.125.615.347.837L8.828 11.635a1.186 1.186 0 00.837.347h5.957a1.186 1.186 0 00.837-.347L18.466 9.628a1.186 1.186 0 00.347-.837V3.828z"/>
                                </svg>
                            </div>
                            Agile & Iterative Development
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Our agile methodology ensures rapid prototyping, continuous testing, and flexible adaptation to changing requirements. Regular sprint reviews and stakeholder feedback loops keep projects on track and aligned with objectives.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.99.01c.326 0 .623-.138.837-.364a1.186 1.186 0 00.363-.836"/>
                                </svg>
                            </div>
                            Quality & Security First
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Comprehensive testing, security audits, and performance optimization are built into every stage of development. We adhere to international standards and best practices to ensure enterprise-grade reliability and security.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-blue-500/20 rounded-3xl transform rotate-6"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-gray-200/50 dark:border-gray-700/50">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Purpose-Driven Technology</h3>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                                "Where Technology and Purpose Align—for Our People." Every software solution we create is designed to solve real problems and improve lives, particularly in underserved communities across Bangladesh.
                            </p>
                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">50+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Software Solutions</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">100%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Client Satisfaction</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 dark:text-green-400">24/7</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Technical Support</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">3+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Years Innovation</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technology Stack Showcase -->
            <div class="mt-16">
                <div class="text-center mb-12">
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

    <!-- Call to Action -->
    <section id="cta" class="py-20 lg:py-32 bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-600 relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-white/5 rounded-full mix-blend-overlay filter blur-xl opacity-70 animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold text-white mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Ready to Build the Future?
                </div>
                
                <h2 class="text-4xl lg:text-6xl font-black text-white mb-6">
                    Transform Your Industry with <span class="text-yellow-300">Intelligent Software</span>
                </h2>
                <p class="text-xl lg:text-2xl text-white/90 mb-12 leading-relaxed">
                    Join us in creating software solutions that don't just serve businesses—they transform communities and save lives. Let's build technology that matters, where innovation meets purpose.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                    <a href="#solutions" class="group relative inline-flex items-center px-10 py-5 bg-white text-purple-600 font-bold text-xl rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-pink-400 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <span class="relative z-10 mr-3">Start Your Software Project</span>
                        <svg class="relative z-10 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <button @click="showModal = true" class="group relative inline-flex items-center px-10 py-5 bg-transparent border-2 border-white text-white font-bold text-xl rounded-2xl hover:bg-white hover:text-purple-600 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <span class="mr-3">Schedule Innovation Session</span>
                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428l-3.429-3.428m0 0l-3.428-3.429m3.428 3.429V4m0 8.571V21"/>
                        </svg>
                    </button>
                </div>

                <!-- Contact Information -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-white mb-8">
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80">Email Innovation Team</p>
                            <p class="text-lg font-semibold">software@techtonauts.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80">Innovation Hotline</p>
                            <p class="text-lg font-semibold">+880 1XXXXXXXXX</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80">Innovation Focus</p>
                            <p class="text-lg font-semibold">Healthcare & IoT</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 max-w-2xl mx-auto">
                    <p class="text-2xl font-bold text-yellow-300 mb-2">
                        "Where Technology and Purpose Align—for Our People"
                    </p>
                    <p class="text-white/90">
                        Free innovation consultation • Explore possibilities • Build solutions that matter
                    </p>
                </div>
            </div>
        </div>

        <!-- Floating Innovation Elements -->
        <div class="absolute bottom-8 left-8 w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm animate-bounce">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
            </svg>
        </div>
        <div class="absolute bottom-8 right-8 w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm animate-pulse">
            <img src="{{ asset('images/techtonauts_logo_small.png') }}" alt="Techtonauts" class="w-8 h-8 object-contain">
        </div>
    </section>
</div>
@endsection