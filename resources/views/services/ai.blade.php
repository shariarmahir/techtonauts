@extends('layouts.app')

@section('title', 'Advanced AI & Machine Learning Solutions - Techtonauts')
@section('description', 'Revolutionary artificial intelligence and machine learning solutions that automate processes and provide intelligent insights for business growth. Machine Learning Models, NLP, Computer Vision, and Predictive Analytics.')
@section('keywords', 'AI solutions Bangladesh, machine learning development, artificial intelligence services, NLP solutions, computer vision systems, predictive analytics, AI automation, intelligent business solutions, deep learning Bangladesh')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-indigo-50/30 dark:from-gray-900 dark:via-gray-800 dark:to-indigo-900/20 transition-colors duration-300">
    
    <!-- Hero Section: AI Revolution Unleashed -->
    <section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden"
             x-data="{ 
                 showModal: false,
                 animateStats: false,
                 currentAI: 0,
                 aiPlatforms: [
                     { name: 'HealthAI Platform', focus: 'Rural Healthcare Intelligence', description: 'AI-powered diagnostic assistance for underserved communities', status: 'In Development' },
                     { name: 'AgriAI System', focus: 'Smart Agriculture Analytics', description: 'Precision farming with machine learning insights', status: 'Research Phase' },
                     { name: 'DisasterAI Network', focus: 'Emergency Response Optimization', description: 'Predictive disaster management and resource allocation', status: 'Conceptual Design' }
                 ]
             }"
             x-init="
                setTimeout(() => { animateStats = true }, 1000);
                setInterval(() => { 
                    currentAI = (currentAI + 1) % aiPlatforms.length 
                }, 5000);
             ">
        
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 via-purple-600/10 to-blue-600/20 opacity-70"></div>
            <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute top-40 right-10 w-96 h-96 bg-purple-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-1/2 w-80 h-80 bg-blue-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <!-- AI Neural Network Background -->
        <div class="absolute inset-0 overflow-hidden opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 20%, #4338CA 0%, transparent 50%), radial-gradient(circle at 80% 80%, #7C3AED 0%, transparent 50%), radial-gradient(circle at 50% 30%, #3B82F6 0%, transparent 50%);"></div>
        </div>

        <!-- Floating AI Icons -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-8 h-8 text-indigo-500/40 animate-bounce" style="left: 15%; top: 30%; animation-delay: 0s; animation-duration: 4s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
            </div>
            <div class="absolute w-6 h-6 text-purple-500/40 animate-bounce" style="right: 20%; top: 40%; animation-delay: 1s; animation-duration: 5s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="absolute w-7 h-7 text-blue-500/40 animate-bounce" style="left: 60%; bottom: 40%; animation-delay: 2s; animation-duration: 6s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M13.5.67s.74 2.65.74 4.8c0 2.06-1.35 3.73-3.41 3.73-2.07 0-3.63-1.67-3.63-3.73l.03-.36C5.21 7.51 4 10.62 4 14c0 4.42 3.58 8 8 8s8-3.58 8-8C20 8.61 17.41 3.8 13.5.67zM11.71 19c-1.78 0-3.22-1.4-3.22-3.14 0-1.62 1.05-2.76 2.81-3.12 1.77-.36 3.6-1.21 4.62-2.58.39 1.29.59 2.65.59 4.04 0 2.65-2.15 4.8-4.8 4.8z"/></svg>
            </div>
            <div class="absolute w-5 h-5 text-indigo-500/40 animate-bounce" style="right: 40%; top: 20%; animation-delay: 3s; animation-duration: 3.5s;">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            </div>
        </div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-6xl mx-auto">
                
                <!-- Hero Content -->
                <div class="space-y-8 mb-12">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-indigo-100 to-purple-100 dark:from-indigo-900/30 dark:to-purple-900/30 rounded-full text-sm font-semibold text-indigo-800 dark:text-indigo-300 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        Advanced AI & Machine Learning Solutions
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-gray-900 dark:text-white leading-tight">
                        <span class="block bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 bg-clip-text text-transparent animate-pulse">Artificial Intelligence</span>
                        <span class="block mt-2 text-3xl md:text-4xl lg:text-5xl font-bold">That Serves Humanity</span>
                        <span class="block bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600 bg-clip-text text-transparent">With Techtonauts</span>
                    </h1>
                    
                    <p class="text-xl lg:text-2xl text-gray-700 dark:text-gray-300 font-medium leading-relaxed max-w-5xl mx-auto">
                        Advanced artificial intelligence and machine learning solutions that automate processes, provide intelligent insights, and drive unprecedented business growth. We're building AI platforms specifically designed for our people and communities.
                    </p>
                </div>

                <!-- AI Capability Highlights -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-12" 
                     x-show="animateStats"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 transform translate-y-8"
                     x-transition:enter-end="opacity-100 transform translate-y-0">
                    
                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl shadow-xl group-hover:shadow-indigo-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-400 to-indigo-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/machine_learning_icon.png') }}" alt="Machine Learning Models" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Machine Learning Models</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Custom ML algorithms for predictive analytics and automation</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl shadow-xl group-hover:shadow-purple-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/nlp_processing_icon.png') }}" alt="Natural Language Processing" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Natural Language Processing</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Advanced text analysis and language understanding systems</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-xl group-hover:shadow-blue-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/computer_vision_icon.png') }}" alt="Computer Vision Systems" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Computer Vision Systems</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Image recognition and visual intelligence applications</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl shadow-xl group-hover:shadow-green-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/predictive_analytics_icon.png') }}" alt="Predictive Analytics" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Predictive Analytics</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Data-driven insights for strategic business decisions</p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="#ai-solutions" class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-lg rounded-2xl shadow-xl hover:shadow-2xl hover:shadow-indigo-500/50 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <span class="relative z-10 mr-3">Explore AI Solutions</span>
                        <svg class="relative z-10 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <button @click="showModal = true" class="group relative inline-flex items-center px-8 py-4 bg-transparent border-2 border-gray-800 dark:border-white text-gray-800 dark:text-white font-bold text-lg rounded-2xl hover:bg-gray-800 dark:hover:bg-white hover:text-white dark:hover:text-gray-800 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <span class="mr-3">Schedule AI Consultation</span>
                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </button>
                </div>

                <!-- Live AI Platform Showcase -->
                <div class="bg-white/10 dark:bg-gray-800/10 backdrop-blur-sm rounded-2xl p-6 max-w-3xl mx-auto">
                    <div class="text-center mb-4">
                        <p class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 mb-2">Building AI Platforms for Our People</p>
                    </div>
                    <div x-data="{ currentAI }" class="text-center">
                        <template x-for="(platform, index) in aiPlatforms" :key="index">
                            <div x-show="currentAI === index" 
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 transform translate-x-4"
                                 x-transition:enter-end="opacity-100 transform translate-x-0"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 transform translate-x-0"
                                 x-transition:leave-end="opacity-0 transform -translate-x-4">
                                <div class="flex items-center justify-center space-x-4 mb-3">
                                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white" x-text="platform.name"></h3>
                                        <p class="text-indigo-600 dark:text-indigo-400 font-semibold" x-text="platform.focus"></p>
                                    </div>
                                </div>
                                <p class="text-lg text-gray-700 dark:text-gray-300 mb-2" x-text="platform.description"></p>
                                <p class="text-sm font-semibold text-green-600 dark:text-green-400" x-text="platform.status"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- AI Consultation Modal -->
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
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">AI Strategy Consultation</h3>
                        <button @click="showModal = false" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">AI Solution Interest</label>
                            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                <option>Machine Learning Models</option>
                                <option>Natural Language Processing</option>
                                <option>Computer Vision Systems</option>
                                <option>Predictive Analytics</option>
                                <option>AI Automation</option>
                                <option>Custom AI Platform</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Industry Focus</label>
                            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                <option>Healthcare & Medical</option>
                                <option>Agriculture & Farming</option>
                                <option>E-commerce & Retail</option>
                                <option>Education & Training</option>
                                <option>Finance & Banking</option>
                                <option>Manufacturing & Industry</option>
                                <option>Government & Public Service</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">AI Vision & Goals</label>
                            <textarea rows="3" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white" placeholder="Describe how AI can transform your business or serve your community..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-3 px-6 rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Schedule AI Strategy Session
                        </button>
                    </form>
                    
                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400 text-center">
                        <span class="font-semibold text-indigo-600 dark:text-indigo-400">Free AI Assessment.</span> Discover your AI potential.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Solutions & Capabilities -->
    <section id="ai-solutions" class="py-20 lg:py-32 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Comprehensive AI Ecosystem: <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Intelligence That Transforms</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    Our AI solutions span across multiple domains, from healthcare diagnostics to agricultural optimization. We build intelligent systems that learn, adapt, and provide actionable insights for sustainable growth and community impact.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Machine Learning Models -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/ml_models_premium_icon.png') }}" alt="Machine Learning Models" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Machine Learning Models</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Custom machine learning algorithms designed to solve specific business challenges, from predictive maintenance to customer behavior analysis and automated decision-making systems.
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">ML Algorithms:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Supervised Learning (Classification & Regression)</li>
                                        <li>• Unsupervised Learning (Clustering & Dimensionality)</li>
                                        <li>• Deep Neural Networks & CNNs</li>
                                        <li>• Reinforcement Learning Systems</li>
                                        <li>• Ensemble Methods & Model Optimization</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Applications:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Predictive Healthcare Diagnostics</li>
                                        <li>• Customer Behavior Prediction</li>
                                        <li>• Fraud Detection & Risk Assessment</li>
                                        <li>• Supply Chain Optimization</li>
                                        <li>• Automated Quality Control</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Natural Language Processing -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/nlp_processing_icon.png') }}" alt="Natural Language Processing" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Natural Language Processing</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Advanced text analysis, language understanding, and conversational AI systems that can process Bengali, English, and other languages for comprehensive communication solutions.
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">NLP Capabilities:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Multi-language Text Analysis (Bengali/English)</li>
                                        <li>• Sentiment Analysis & Opinion Mining</li>
                                        <li>• Named Entity Recognition (NER)</li>
                                        <li>• Text Summarization & Generation</li>
                                        <li>• Conversational AI & Chatbots</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Use Cases:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Customer Service Automation</li>
                                        <li>• Document Processing & Analysis</li>
                                        <li>• Content Moderation & Classification</li>
                                        <li>• Voice-to-Text & Speech Recognition</li>
                                        <li>• Intelligent Search & Recommendation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Computer Vision Systems -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/computer_vision_icon.png') }}" alt="Computer Vision Systems" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Computer Vision Systems</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Advanced image recognition, object detection, and visual intelligence applications that can analyze medical images, monitor agricultural conditions, and enhance security systems.
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Vision Technologies:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Object Detection & Recognition</li>
                                        <li>• Facial Recognition & Biometric Analysis</li>
                                        <li>• Medical Image Analysis (X-ray, MRI)</li>
                                        <li>• Optical Character Recognition (OCR)</li>
                                        <li>• Real-time Video Processing</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Healthcare Applications:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Automated Medical Diagnosis</li>
                                        <li>• Skin Cancer Detection</li>
                                        <li>• Retinal Disease Screening</li>
                                        <li>• Wound Assessment & Monitoring</li>
                                        <li>• Drug Identification & Verification</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Predictive Analytics -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/predictive_analytics_icon.png') }}" alt="Predictive Analytics" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Predictive Analytics</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Data-driven insights and forecasting systems that help businesses make informed decisions, optimize operations, and anticipate future trends with remarkable accuracy.
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Analytics Capabilities:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Time Series Forecasting</li>
                                        <li>• Risk Assessment & Modeling</li>
                                        <li>• Customer Lifetime Value Prediction</li>
                                        <li>• Demand Forecasting & Inventory</li>
                                        <li>• Financial Market Analysis</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Business Impact:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• 40% Improvement in Decision Accuracy</li>
                                        <li>• 60% Reduction in Operational Costs</li>
                                        <li>• Early Warning Systems for Risks</li>
                                        <li>• Optimized Resource Allocation</li>
                                        <li>• Strategic Planning & Growth Insights</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Innovation Statistics -->
            <div class="mt-16 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-900/20 dark:to-purple-900/20 rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">AI Development Impact</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Transforming businesses and communities through intelligent automation</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-black text-indigo-600 mb-2">25+</div>
                        <p class="font-semibold text-gray-900 dark:text-white">AI Models Deployed</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Across various industries</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-purple-600 mb-2">95%</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Prediction Accuracy</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Healthcare diagnostics</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-blue-600 mb-2">3</div>
                        <p class="font-semibold text-gray-900 dark:text-white">AI Platforms</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Currently in development</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-green-600 mb-2">∞</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Possibilities</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">For community impact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Platforms in Development -->
    <section id="ai-platforms" class="py-20 lg:py-32 bg-gray-50/50 dark:bg-gray-900/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    AI Platforms for Our People: <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">Technology That Serves Communities</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    We are developing two groundbreaking AI platforms specifically designed to address the unique challenges faced by Bangladeshi communities. These platforms embody our motto: "Where Technology and Purpose Align—for Our People."
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12"
                 x-data="{ activePlatform: null }">
                
                <!-- HealthAI Platform -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50"
                     @click="activePlatform = activePlatform === 'health' ? null : 'health'">
                    
                    <div class="absolute top-6 right-6 z-10">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Healthcare AI</span>
                    </div>
                    
                    <div class="aspect-video relative overflow-hidden">
                        <img src="{{ asset('images/health_ai_platform.jpg') }}" alt="HealthAI Platform for Rural Communities" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-lg font-bold">Serving Rural Communities</p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-blue-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">HealthAI Platform</h3>
                                <p class="text-green-600 dark:text-green-400 font-semibold">Rural Healthcare Intelligence System</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Comprehensive AI platform designed to bridge the healthcare gap in rural Bangladesh. Features intelligent diagnostic assistance, health monitoring, and telemedicine integration specifically tailored for underserved communities.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">Diagnostic AI</span>
                            <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">Telemedicine</span>
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 px-3 py-1 rounded-full text-sm font-medium">Multi-language</span>
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-800 dark:text-orange-300 px-3 py-1 rounded-full text-sm font-medium">Rural Focus</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <button class="text-green-600 dark:text-green-400 font-semibold hover:text-green-700 dark:hover:text-green-300 transition-colors duration-300">
                                Learn About Community Impact →
                            </button>
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-green-600 dark:text-green-400">In Development</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Expandable Details -->
                    <div x-show="activePlatform === 'health'" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="pt-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Platform Capabilities:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• AI-powered symptom analysis and triage</li>
                                    <li>• Multi-language health questionnaires</li>
                                    <li>• Remote diagnostic assistance</li>
                                    <li>• Health education and awareness modules</li>
                                </ul>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• Integration with local healthcare workers</li>
                                    <li>• Offline functionality for remote areas</li>
                                    <li>• Community health data analytics</li>
                                    <li>• Emergency response coordination</li>
                                </ul>
                            </div>
                            <div class="mt-4 p-4 bg-green-50 dark:bg-green-900/20 rounded-lg">
                                <p class="text-sm text-green-800 dark:text-green-300 font-medium">
                                    <strong>Mission:</strong> Democratizing healthcare access through AI, ensuring every person in rural Bangladesh has access to intelligent health guidance and support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AgriAI Platform -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50"
                     @click="activePlatform = activePlatform === 'agri' ? null : 'agri'">
                    
                    <div class="absolute top-6 right-6 z-10">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Agriculture AI</span>
                    </div>
                    
                    <div class="aspect-video relative overflow-hidden">
                        <img src="{{ asset('images/ai_platform.jpg') }}" alt="AgriAI Smart Agriculture Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-lg font-bold">Empowering Farmers</p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-green-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 12v1m1-6h1m-2 0h1M8 21l4-7 4 7M3 4l3.5 7.5L10 4M14 4l3.5 7.5L21 4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">AgriAI System</h3>
                                <p class="text-blue-600 dark:text-blue-400 font-semibold">Smart Agriculture Analytics Platform</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Revolutionary AI platform for precision farming that combines satellite imagery, IoT sensors, and machine learning to optimize crop yields, reduce resource waste, and increase farmer profitability across Bangladesh.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">Precision Farming</span>
                            <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">Crop Optimization</span>
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 px-3 py-1 rounded-full text-sm font-medium">Satellite Data</span>
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-800 dark:text-orange-300 px-3 py-1 rounded-full text-sm font-medium">IoT Sensors</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <button class="text-blue-600 dark:text-blue-400 font-semibold hover:text-blue-700 dark:hover:text-blue-300 transition-colors duration-300">
                                Discover Farming Innovation →
                            </button>
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-blue-600 dark:text-blue-400">Research Phase</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Expandable Details -->
                    <div x-show="activePlatform === 'agri'" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="pt-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Agricultural Intelligence Features:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• Crop health monitoring via satellite imagery</li>
                                    <li>• Weather pattern analysis and prediction</li>
                                    <li>• Soil condition assessment and recommendations</li>
                                    <li>• Pest and disease early detection</li>
                                </ul>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li>• Optimal planting and harvesting timing</li>
                                    <li>• Resource optimization (water, fertilizer)</li>
                                    <li>• Market price prediction and analysis</li>
                                    <li>• Farmer education and best practices</li>
                                </ul>
                            </div>
                            <div class="mt-4 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                                <p class="text-sm text-blue-800 dark:text-blue-300 font-medium">
                                    <strong>Vision:</strong> Empowering Bangladeshi farmers with AI-driven insights to increase productivity, reduce costs, and build sustainable agricultural practices for future generations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Development Roadmap -->
            <div class="mt-16 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">AI Development Roadmap</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Our journey to democratize AI for Bangladesh</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Research & Analysis</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">2023 - Present</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Deep research into community needs and AI applications</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Platform Development</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">Current Phase</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Building core AI algorithms and platform architecture</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Community Testing</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">2024 Q3-Q4</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Beta testing with rural communities and healthcare workers</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Public Launch</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">2025</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Full deployment across Bangladesh communities</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Technology Stack & Expertise -->
    <section id="ai-expertise" class="py-20 lg:py-32 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    AI Technology Mastery: <span class="bg-gradient-to-r from-cyan-600 to-purple-600 bg-clip-text text-transparent">Cutting-Edge Tools & Frameworks</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    Our AI development expertise spans across the most advanced frameworks and technologies, ensuring we can tackle any challenge and deliver state-of-the-art solutions that drive real-world impact.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            Deep Learning Frameworks
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Expertise in TensorFlow, PyTorch, and Keras for building sophisticated neural networks, deep learning models, and AI systems that can handle complex pattern recognition and decision-making tasks.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                            Data Science & Analytics
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Advanced data processing, statistical analysis, and visualization capabilities using Python, R, and specialized tools for extracting meaningful insights from complex datasets and real-time data streams.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                                </svg>
                            </div>
                            Cloud AI & MLOps
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Scalable AI deployment using AWS, Google Cloud, and Azure ML services. Comprehensive MLOps practices for model versioning, monitoring, and continuous improvement in production environments.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            Ethical AI Development
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Commitment to responsible AI development with bias detection, fairness assessment, and transparent algorithms. We ensure our AI solutions are ethical, inclusive, and beneficial for all communities.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-3xl transform rotate-6"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-gray-200/50 dark:border-gray-700/50">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">AI for Social Good</h3>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                                Our AI development philosophy centers on creating technology that serves humanity. Every algorithm, every model, every platform is designed to solve real problems and improve lives in meaningful ways.
                            </p>
                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">25+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">AI Models</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Accuracy Rate</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">3</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">AI Platforms</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 dark:text-green-400">∞</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Impact Potential</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Technology Showcase -->
            <div class="mt-16">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Advanced AI Technology Stack</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Industry-leading frameworks and tools powering our AI solutions</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/tensorflow_icon.png') }}" alt="TensorFlow" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">TensorFlow</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/pytorch_icon.png') }}" alt="PyTorch" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">PyTorch</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/python_icon.png') }}" alt="Python" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Python</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/opencv_icon.png') }}" alt="OpenCV" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">OpenCV</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/scikit_learn_icon.png') }}" alt="Scikit-learn" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Scikit-learn</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/aws_icon.png') }}" alt="AWS AI" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">AWS AI</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/docker_icon.png') }}" alt="Docker" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Docker</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Ethics & Community Impact -->
    <section id="ai-ethics" class="py-20 lg:py-32 bg-gray-50/50 dark:bg-gray-900/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Responsible AI Development: <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">Ethics, Transparency, Community First</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    Our commitment to ethical AI development ensures that every solution we create is fair, transparent, and beneficial for all. We prioritize community needs, cultural sensitivity, and long-term positive impact.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Ethical AI Principles -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-blue-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.99.01c.326 0 .623-.138.837-.364a1.186 1.186 0 00.363-.836"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Fairness & Bias Prevention</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Rigorous testing and validation to ensure our AI systems are fair, unbiased, and inclusive for all users regardless of background, gender, or socioeconomic status.</p>
                    </div>
                </div>

                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Transparency & Explainability</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Clear, understandable AI decisions with explainable algorithms that users can trust and understand, especially critical in healthcare and financial applications.</p>
                    </div>
                </div>

                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Privacy & Data Security</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Comprehensive data protection, privacy-preserving AI techniques, and secure data handling practices that respect user privacy and comply with international standards.</p>
                    </div>
                </div>
            </div>

            <!-- Community Impact Showcase -->
            <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-green-900/20 dark:to-blue-900/20 rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">"Where Technology and Purpose Align—for Our People"</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Our AI initiatives focus on solving real problems for Bangladeshi communities</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Healthcare Accessibility</h4>
                        <p class="text-gray-600 dark:text-gray-400">AI-powered healthcare solutions for rural and underserved communities across Bangladesh</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 12v1m1-6h1m-2 0h1M8 21l4-7 4 7M3 4l3.5 7.5L10 4M14 4l3.5 7.5L21 4"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Agricultural Innovation</h4>
                        <p class="text-gray-600 dark:text-gray-400">Smart farming solutions that increase productivity and sustainability for Bangladeshi farmers</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Community Empowerment</h4>
                        <p class="text-gray-600 dark:text-gray-400">AI education and tools that empower local communities to leverage technology for their own development</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="cta" class="py-20 lg:py-32 bg-gradient-to-br from-indigo-200 via-purple-300 to-blue-400 relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-white/5 rounded-full mix-blend-overlay filter blur-xl opacity-70 animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <!-- AI Neural Network Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #FFFFFF 1px, transparent 1px), radial-gradient(circle at 75% 75%, #FFFFFF 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold text-white mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    Ready to Harness AI Power?
                </div>
                
                <h2 class="text-4xl lg:text-6xl font-black text-white mb-6">
                    Build AI Solutions That <span class="text-yellow-300">Transform Communities</span>
                </h2>
                <p class="text-xl lg:text-2xl text-white/90 mb-12 leading-relaxed">
                    Join us in creating artificial intelligence that serves humanity. Let's build AI solutions that don't just automate processes—they solve real problems, improve lives, and create lasting positive impact for our people.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                    <a href="#ai-solutions" class="group relative inline-flex items-center px-10 py-5 bg-white text-indigo-600 font-bold text-xl rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-pink-400 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <span class="relative z-10 mr-3">Start Your AI Journey</span>
                        <svg class="relative z-10 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <button @click="showModal = true" class="group relative inline-flex items-center px-10 py-5 bg-transparent border-2 border-white text-white font-bold text-xl rounded-2xl hover:bg-white hover:text-indigo-600 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <span class="mr-3">Schedule AI Strategy Session</span>
                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
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
                            <p class="text-sm text-white/80">AI Innovation Team</p>
                            <p class="text-lg font-semibold">info@techtonauts.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80">AI Consultation</p>
                            <p class="text-lg font-semibold">+880 1521444725</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80">AI Research</p>
                            <p class="text-lg font-semibold">Community Focused</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 max-w-3xl mx-auto">
                    <p class="text-2xl font-bold text-yellow-300 mb-2">
                        "AI That Serves Humanity, Not the Other Way Around"
                    </p>
                    <p class="text-white/90">
                        Free AI consultation • Explore intelligent solutions • Build technology that matters for our communities
                    </p>
                </div>
            </div>
        </div>

        <!-- Floating AI Elements -->
        <div class="absolute bottom-8 left-8 w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm animate-bounce">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
            </svg>
        </div>
    
        <div class="absolute top-8 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm animate-bounce" style="animation-delay: 1s;">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
        </div>
    </section>
</div>
@endsection