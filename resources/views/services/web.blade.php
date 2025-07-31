@extends('layouts.app')

@section('title', 'Premium Website Development Services - Techtonauts')
@section('description', 'Transform your business with world-class website development. From startup MVPs to enterprise solutions, we build secure, scalable, and stunning websites that drive growth for Bangladeshi businesses.')
@section('keywords', 'website development Bangladesh, web development services, custom website design, e-commerce development, Laravel development, responsive web design, UI/UX design, graphic design, logo design, backend development')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-blue-50/30 dark:from-gray-900 dark:via-gray-800 dark:to-blue-900/20 transition-colors duration-300">
    
    <!-- Hero Section: Digital Excellence Unleashed -->
    <section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden"
             x-data="{ 
                 showModal: false,
                 animateStats: false,
                 currentTestimonial: 0,
                 testimonials: [
                     { name: 'Ahmed Hassan', company: 'BookBuyBD', role: 'CEO', text: 'Techtonauts transformed our vision into a powerful e-commerce platform. Sales increased 300% in just 6 months!' },
                     { name: 'Dr. Fatima Rahman', company: 'LifeGuard+', role: 'CTO', text: 'Their expertise in healthcare technology integration is unmatched. The platform saves lives every day.' },
                     { name: 'Karim Industries', company: 'Manufacturing', role: 'Operations Director', text: 'From concept to launch in 4 weeks. Their speed and quality exceeded all expectations.' }
                 ]
             }"
             x-init="
                setTimeout(() => { animateStats = true }, 1000);
                setInterval(() => { 
                    currentTestimonial = (currentTestimonial + 1) % testimonials.length 
                }, 5000);
             ">
        
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-purple-600/10 to-pink-600/20 opacity-70"></div>
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute top-40 right-10 w-96 h-96 bg-purple-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-1/2 w-80 h-80 bg-pink-400/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-2 h-2 bg-blue-500/60 rounded-full animate-bounce" style="left: 15%; top: 30%; animation-delay: 0s; animation-duration: 3s;"></div>
            <div class="absolute w-1 h-1 bg-purple-500/60 rounded-full animate-bounce" style="right: 20%; top: 40%; animation-delay: 1s; animation-duration: 4s;"></div>
            <div class="absolute w-1.5 h-1.5 bg-pink-500/60 rounded-full animate-bounce" style="left: 60%; bottom: 40%; animation-delay: 2s; animation-duration: 5s;"></div>
            <div class="absolute w-2 h-2 bg-green-500/60 rounded-full animate-bounce" style="right: 40%; top: 20%; animation-delay: 3s; animation-duration: 3.5s;"></div>
        </div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-6xl mx-auto">
                
                <!-- Hero Content -->
                <div class="space-y-8 mb-12">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-100 to-purple-100 dark:from-blue-900/30 dark:to-purple-900/30 rounded-full text-sm font-semibold text-blue-800 dark:text-blue-300 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Leading Website Development in Bangladesh
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-gray-900 dark:text-white leading-tight">
                        <span class="block bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent animate-pulse">Transform Your Vision</span>
                        <span class="block mt-2 text-3xl md:text-4xl lg:text-5xl font-bold">Into Digital Excellence</span>
                        <span class="block bg-gradient-to-r from-purple-600 via-blue-600 to-green-600 bg-clip-text text-transparent">With Techtonauts</span>
                    </h1>
                    
                    <p class="text-xl lg:text-2xl text-gray-700 dark:text-gray-300 font-medium leading-relaxed max-w-4xl mx-auto">
                        We don't just build websites; we craft digital ecosystems that drive business growth. From UI/UX design to robust backend architecture, we deliver world-class solutions that set you apart from the competition.
                    </p>
                </div>

                <!-- Value Proposition Icons -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-12" 
                     x-show="animateStats"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 transform translate-y-8"
                     x-transition:enter-end="opacity-100 transform translate-y-0">
                    
                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-xl group-hover:shadow-blue-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/speed_icon.png') }}" alt="Lightning Fast Development" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Lightning Fast Delivery</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">From concept to launch in record time without compromising quality</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl shadow-xl group-hover:shadow-purple-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/scale_icon.png') }}" alt="Scalable Architecture" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Future-Ready Architecture</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Scalable solutions built to grow with your expanding business</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl shadow-xl group-hover:shadow-green-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/custom_icon.png') }}" alt="Custom Solutions" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Tailored to Perfection</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Custom solutions designed specifically for your unique business needs</p>
                    </div>

                    <div class="group text-center transform hover:scale-105 transition-all duration-500">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl shadow-xl group-hover:shadow-pink-500/50 transition-all duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-pink-400 to-pink-500 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-all duration-500"></div>
                            <img src="{{ asset('icons/bangladesh_map_icon.png') }}" alt="Bangladesh Focus" class="relative z-10 w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Bangladesh Market Expert</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Deep understanding of local market with global quality standards</p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="#packages" class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg rounded-2xl shadow-xl hover:shadow-2xl hover:shadow-blue-500/50 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <span class="relative z-10 mr-3">Explore Website Packages</span>
                        <svg class="relative z-10 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <button @click="showModal = true" class="group relative inline-flex items-center px-8 py-4 bg-transparent border-2 border-gray-800 dark:border-white text-gray-800 dark:text-white font-bold text-lg rounded-2xl hover:bg-gray-800 dark:hover:bg-white hover:text-white dark:hover:text-gray-800 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <span class="mr-3">Get Free Consultation</span>
                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </button>
                </div>

                <!-- Live Testimonials Carousel -->
                <div class="bg-white/10 dark:bg-gray-800/10 backdrop-blur-sm rounded-2xl p-6 max-w-2xl mx-auto">
                    <div x-data="{ currentTestimonial }" class="text-center">
                        <template x-for="(testimonial, index) in testimonials" :key="index">
                            <div x-show="currentTestimonial === index" 
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 transform translate-x-4"
                                 x-transition:enter-end="opacity-100 transform translate-x-0"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 transform translate-x-0"
                                 x-transition:leave-end="opacity-0 transform -translate-x-4">
                                <p class="text-lg text-gray-700 dark:text-gray-300 mb-4" x-text="testimonial.text"></p>
                                <div class="flex items-center justify-center space-x-3">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                        <span class="text-white font-bold text-lg" x-text="testimonial.name.charAt(0)"></span>
                                    </div>
                                    <div class="text-left">
                                        <p class="font-semibold text-gray-900 dark:text-white" x-text="testimonial.name"></p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400"><span x-text="testimonial.role"></span>, <span x-text="testimonial.company"></span></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Consultation Modal -->
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
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Free Website Consultation</h3>
                        <button @click="showModal = false" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Type</label>
                            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                <option>Startup Website</option>
                                <option>Business Portfolio</option>
                                <option>E-commerce Store</option>
                                <option>Enterprise Solution</option>
                                <option>Custom Development</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Budget</label>
                            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                <option>৳25,000 - ৳50,000</option>
                                <option>৳50,000 - ৳1,00,000</option>
                                <option>৳1,00,000 - ৳2,00,000</option>
                                <option>৳2,00,000+</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Details</label>
                            <textarea rows="3" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white" placeholder="Tell us about your vision and requirements..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-3 px-6 rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Schedule Free Consultation Call
                        </button>
                    </form>
                    
                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400 text-center">
                        <span class="font-semibold text-green-600 dark:text-green-400">100% Free.</span> No Obligation. Just Expert Guidance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Professional Website Section -->
    <section id="why-website" class="py-20 lg:py-32 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Beyond Social Media: <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Why Your Business Needs a Professional Website</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    While social media offers quick visibility, it comes with limitations. Your website is your owned digital real estate—a strategic asset for sustainable business growth and professional credibility.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Feature Cards -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <img src="{{ asset('icons/trust_icon.png') }}" alt="Trust & Credibility" class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Credibility & Professional Trust</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Establish authority and showcase professionalism with a dedicated platform that reflects your brand values, expertise, and commitment to quality service.</p>
                    </div>
                </div>

                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <img src="{{ asset('icons/247_icon.png') }}" alt="24/7 Availability" class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">24/7 Global Accessibility</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Your business never sleeps. Be accessible to customers around the clock, serving local and international markets without time zone limitations.</p>
                    </div>
                </div>

                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-green-600/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <img src="{{ asset('icons/seo_icon.png') }}" alt="SEO & Search Visibility" class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Search Engine Dominance</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Be discovered by your target audience through Google and other search engines. Own your search presence and control your digital narrative.</p>
                    </div>
                </div>

                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/10 to-pink-600/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <img src="{{ asset('icons/control_icon.png') }}" alt="Complete Control" class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Complete Brand Control</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Own your brand narrative and customer experience. Full control over design, functionality, content, and user journey optimization.</p>
                    </div>
                </div>

                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 to-orange-600/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <img src="{{ asset('icons/funnel_icon.png') }}" alt="Sales Optimization" class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Advanced Sales Funnels</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Optimize lead generation and conversions with strategic user flows, A/B testing, and integrated marketing automation tools.</p>
                    </div>
                </div>

                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-indigo-600/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <img src="{{ asset('icons/analytics_icon.png') }}" alt="Data Analytics" class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Deep Business Analytics</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Understand your audience with comprehensive insights, user behavior tracking, and data-driven optimization strategies.</p>
                    </div>
                </div>
            </div>

            <!-- Success Statistics -->
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900/20 dark:to-purple-900/20 rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Proven Results for Bangladesh Businesses</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Real impact, measurable growth</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-black text-blue-600 mb-2">300%</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Average Sales Increase</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Within 6 months</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-purple-600 mb-2">2.5s</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Average Load Time</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lightning fast performance</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-green-600 mb-2">95%</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Mobile Optimization</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Perfect responsive design</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-pink-600 mb-2">150+</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Happy Clients</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Growing every month</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Comprehensive Development Suite -->
    <section id="services" class="py-20 lg:py-32 bg-gray-50/50 dark:bg-gray-900/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Complete Digital Solution: <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Everything You Need Under One Roof</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    We deliver end-to-end website development services, from initial concept and design to deployment and ongoing maintenance. Our integrated approach ensures consistency, quality, and seamless project execution.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Service Modules -->
                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/uiux_premium_icon.png') }}" alt="UI/UX Design Excellence" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">UI/UX Design Excellence</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    User-centered design that converts visitors into customers. We create intuitive interfaces that provide exceptional user experiences across all devices and platforms.
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Design Process:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• User Research & Market Analysis</li>
                                        <li>• Information Architecture Planning</li>
                                        <li>• Interactive Wireframing & Prototyping</li>
                                        <li>• Visual Design & Brand Integration</li>
                                        <li>• Usability Testing & Optimization</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Key Features:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• WCAG 2.1 Accessibility Compliance</li>
                                        <li>• Conversion Rate Optimization</li>
                                        <li>• Mobile-First Responsive Design</li>
                                        <li>• Performance-Focused Implementation</li>
                                        <li>• Cross-Browser Compatibility</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/graphic_logo_icon.png') }}" alt="Brand Identity Design" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Brand Identity & Graphic Design</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Complete brand identity creation including custom logos, brand guidelines, and digital assets that ensure visual consistency and professional appeal across all touchpoints.
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Brand Services:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Custom Logo Design & Variations</li>
                                        <li>• Comprehensive Brand Guidelines</li>
                                        <li>• Strategic Color Palette Development</li>
                                        <li>• Typography & Font Selection</li>
                                        <li>• Brand Voice & Messaging</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Digital Assets:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Social Media Graphics & Templates</li>
                                        <li>• Marketing Banners & Advertisements</li>
                                        <li>• Custom Infographic Design</li>
                                        <li>• Icon Libraries & Illustrations</li>
                                        <li>• Print-Ready Business Materials</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/image_opt_icon.png') }}" alt="Performance Optimization" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Performance & Image Optimization</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Lightning-fast websites with optimized images, modern formats, lazy loading, and CDN integration. We ensure blazing performance without compromising visual quality.
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Optimization Techniques:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• WebP & AVIF Next-Gen Formats</li>
                                        <li>• Responsive Image Implementation</li>
                                        <li>• Progressive & Lazy Loading</li>
                                        <li>• Smart Compression Algorithms</li>
                                        <li>• CDN & Caching Strategies</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Performance Benefits:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• 70% Faster Load Times</li>
                                        <li>• Improved Google Search Rankings</li>
                                        <li>• Enhanced User Experience</li>
                                        <li>• Reduced Server & Bandwidth Costs</li>
                                        <li>• Better Mobile Performance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/backend_robust_icon.png') }}" alt="Backend Development" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Robust Backend Architecture</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Secure, scalable backend systems built with Laravel and PHP. Database design, API development, payment integration, and enterprise-grade security protocols.
                                </p>
                                <div class="flex items-center text-pink-600 dark:text-pink-400 font-semibold">
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
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Technical Stack:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Laravel 10+ Framework</li>
                                        <li>• PHP 8.2+ Development</li>
                                        <li>• MySQL/PostgreSQL Databases</li>
                                        <li>• RESTful API Architecture</li>
                                        <li>• Modern DevOps Practices</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Key Features:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Secure Payment Gateway Integration</li>
                                        <li>• Advanced Security Protocols</li>
                                        <li>• Scalable Cloud Architecture</li>
                                        <li>• Performance Monitoring & Optimization</li>
                                        <li>• Automated Backup & Recovery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative lg:col-span-2" x-data="{ expanded: false }">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 cursor-pointer"
                         @click="expanded = !expanded">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset('icons/content_strategy_icon.png') }}" alt="Content Strategy" class="w-12 h-12 object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Strategic Content & SEO Optimization</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                    Comprehensive content strategy, SEO optimization, and digital marketing integration. We ensure your message is clear, compelling, and drives measurable conversions.
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
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Content Strategy:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Content Architecture Planning</li>
                                        <li>• Brand Messaging Framework</li>
                                        <li>• User Journey Mapping</li>
                                        <li>• Conversion-Focused Copywriting</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">SEO Integration:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Comprehensive Keyword Research</li>
                                        <li>• On-Page Meta Optimization</li>
                                        <li>• Schema Markup Implementation</li>
                                        <li>• Technical SEO Auditing</li>
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Performance Tracking:</h4>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Google Analytics Integration</li>
                                        <li>• Conversion Tracking Setup</li>
                                        <li>• Performance Monitoring</li>
                                        <li>• Monthly Optimization Reports</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Website Development Packages -->
    <section id="packages" class="py-20 lg:py-32 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Choose Your Success Path: <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">International-Standard Website Packages</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    Our packages are strategically crafted to meet diverse business needs, from rapid startup launches to enterprise-grade solutions. Each package maintains international quality standards while being competitively priced for the Bangladesh market.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- Startup Catalyst Package -->
                <div class="group relative bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-blue-200/50 dark:border-blue-700/50">
                    <div class="absolute top-6 right-6">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Perfect Start</span>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Startup Catalyst</h3>
                        <p class="text-blue-600 dark:text-blue-400 font-semibold">Perfect for new businesses and MVPs</p>
                    </div>
                    
                    <div class="mb-6">
                        <div class="text-4xl font-black text-gray-900 dark:text-white mb-2">
                            <span class="text-blue-600">৳25,000</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">One-time investment • 2-week delivery</p>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Professional UI/UX design</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Up to 5 responsive pages</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Mobile-first responsive design</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Contact forms & lead capture</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Basic SEO optimization</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">1-month post-launch support</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Free SSL certificate & hosting setup</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Order Startup Package
                        </button>
                        <p class="text-xs text-center text-gray-600 dark:text-gray-400">
                            <span class="font-semibold text-blue-600 dark:text-blue-400">Launch Ready:</span> Professional presence in 2 weeks
                        </p>
                    </div>
                </div>

                <!-- Business Growth Package -->
                <div class="group relative bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-purple-200/50 dark:border-purple-700/50">
                    <div class="absolute top-6 right-6">
                        <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Business Growth</h3>
                        <p class="text-purple-600 dark:text-purple-400 font-semibold">Ideal for growing SMEs and service businesses</p>
                    </div>
                    
                    <div class="mb-6">
                        <div class="text-4xl font-black text-gray-900 dark:text-white mb-2">
                            <span class="text-purple-600">৳65,000</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">One-time investment • 3-week delivery</p>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Custom UI/UX with brand integration</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Up to 15 dynamic pages</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Integrated blog & content management</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Advanced contact & inquiry system</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Custom graphic design package</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Advanced SEO & analytics setup</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">3-month premium support</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button class="w-full bg-gradient-to-r from-purple-500 to-purple-600 text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Order Growth Package
                        </button>
                        <p class="text-xs text-center text-gray-600 dark:text-gray-400">
                            <span class="font-semibold text-purple-600 dark:text-purple-400">Growth Engine:</span> Scale your business impact
                        </p>
                    </div>
                </div>

                <!-- E-commerce Accelerator Package -->
                <div class="group relative bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-green-200/50 dark:border-green-700/50">
                    <div class="absolute top-6 right-6">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">E-commerce</span>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">E-commerce Accelerator</h3>
                        <p class="text-green-600 dark:text-green-400 font-semibold">For businesses moving to online sales</p>
                    </div>
                    
                    <div class="mb-6">
                        <div class="text-4xl font-black text-gray-900 dark:text-white mb-2">
                            <span class="text-green-600">৳1,25,000</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">One-time investment • 4-week delivery</p>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Complete e-commerce platform</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Secure payment gateways (bKash, SSL)</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Advanced inventory management</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Customer accounts & order tracking</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Sales analytics & reporting</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Product catalog management</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">6-month premium support</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Order E-commerce Package
                        </button>
                        <p class="text-xs text-center text-gray-600 dark:text-gray-400">
                            <span class="font-semibold text-green-600 dark:text-green-400">Sales Machine:</span> Start selling online immediately
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Enterprise Elite Package -->
                <div class="group relative bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-orange-200/50 dark:border-orange-700/50">
                    <div class="absolute top-6 right-6">
                        <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Enterprise</span>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Enterprise Elite</h3>
                        <p class="text-orange-600 dark:text-orange-400 font-semibold">Large businesses with complex requirements</p>
                    </div>
                    
                    <div class="mb-6">
                        <div class="text-3xl font-black text-gray-900 dark:text-white mb-2">
                            <span class="text-orange-600">Custom Quote</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Tailored pricing • Timeline based on scope</p>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Custom enterprise architecture</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Unlimited pages & functionality</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Advanced API integrations</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Multi-language & multi-currency</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Dedicated project manager</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">1-year priority support & maintenance</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Request Enterprise Proposal
                        </button>
                        <p class="text-xs text-center text-gray-600 dark:text-gray-400">
                            <span class="font-semibold text-orange-600 dark:text-orange-400">Enterprise Grade:</span> Unlimited possibilities
                        </p>
                    </div>
                </div>

                <!-- Custom Vision Package -->
                <div class="group relative bg-gradient-to-br from-pink-50 to-pink-100 dark:from-pink-900/20 dark:to-pink-800/20 rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-pink-200/50 dark:border-pink-700/50">
                    <div class="absolute top-6 right-6">
                        <span class="bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">AI-Ready</span>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Custom Vision</h3>
                        <p class="text-pink-600 dark:text-pink-400 font-semibold">Unique projects with advanced requirements</p>
                    </div>
                    
                    <div class="mb-6">
                        <div class="text-3xl font-black text-gray-900 dark:text-white mb-2">
                            <span class="text-pink-600">Let's Discuss</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Custom pricing • Innovation-focused timeline</p>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Complete custom development</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">AI/ML integration consultation</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">IoT device integration</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Innovative technology implementation</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">R&D partnership opportunities</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Long-term innovation partnership</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button class="w-full bg-gradient-to-r from-pink-500 to-pink-600 text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Schedule Innovation Consultation
                        </button>
                        <p class="text-xs text-center text-gray-600 dark:text-gray-400">
                            <span class="font-semibold text-pink-600 dark:text-pink-400">Future-Ready:</span> Transform your industry
                        </p>
                    </div>
                </div>
            </div>

            <!-- Package Comparison -->
            <div class="text-center mt-16">
                <button class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-gray-700 to-gray-800 dark:from-gray-600 dark:to-gray-700 text-white font-semibold rounded-2xl hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    Compare All Packages in Detail
                </button>
                <p class="mt-4 text-gray-600 dark:text-gray-400">
                    Not sure which package fits your needs? <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">Schedule a free consultation</a> to get personalized recommendations.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Showcase -->
    <section id="portfolio" class="py-20 lg:py-32 bg-gray-50/50 dark:bg-gray-900/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Success Stories: <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Websites That Drive Real Business Growth</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    Explore our featured projects showcasing the tangible business impact of professional website development. Each project represents a strategic partnership that delivered measurable results.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8"
                 x-data="{ activeProject: null }">
                
                <!-- BookBuyBD Project -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50"
                     @click="activeProject = activeProject === 'bookbuy' ? null : 'bookbuy'">
                    <div class="aspect-video relative overflow-hidden">
                        <img src="{{ asset('images/bookbuybd_hero.jpg') }}" alt="BookBuyBD E-commerce Success Story" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">E-commerce</div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-sm font-medium">300% Revenue Growth</p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">BookBuyBD: Revolutionizing Online Book Commerce</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">
                            Comprehensive e-commerce platform with intuitive navigation, secure multi-payment integration, and advanced inventory management system. Transformed a small bookstore into Bangladesh's fastest-growing online book retailer.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">Laravel</span>
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 px-3 py-1 rounded-full text-sm font-medium">Tailwind CSS</span>
                            <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">Alpine.js</span>
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-800 dark:text-orange-300 px-3 py-1 rounded-full text-sm font-medium">Payment Gateway</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <button class="text-blue-600 dark:text-blue-400 font-semibold hover:text-blue-700 dark:hover:text-blue-300 transition-colors duration-300">
                                View Live Website →
                            </button>
                            <button class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:shadow-lg transition-all duration-300">
                                Full Case Study
                            </button>
                        </div>
                    </div>
                    
                    <!-- Expandable Details -->
                    <div x-show="activeProject === 'bookbuy'" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="pt-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-3">Project Impact & Results:</h4>
                            <div class="grid grid-cols-2 gap-4 text-center mb-4">
                                <div>
                                    <div class="text-2xl font-bold text-green-600">300%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Revenue Increase</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Customer Satisfaction</div>
                                </div>
                            </div>
                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                <li>• 50% reduction in cart abandonment rate</li>
                                <li>• Mobile-first responsive design for all devices</li>
                                <li>• Integrated with local and international payment systems</li>
                                <li>• Advanced search and filtering capabilities</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- LifeGuard+ Project -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50"
                     @click="activeProject = activeProject === 'lifeguard' ? null : 'lifeguard'">
                    <div class="aspect-video relative overflow-hidden">
                        <img src="{{ asset('images/lifeguard_plus_app.jpg') }}" alt="LifeGuard+ AI Healthcare Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 right-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Healthcare AI</div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-sm font-medium">Lives Saved Daily</p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">LifeGuard+: AI-Powered Health Monitoring Revolution</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">
                            Cutting-edge web application integrating AI/IoT health devices with real-time data visualization, secure HIPAA-compliant patient portals, and predictive health analytics for rural healthcare transformation.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">Laravel</span>
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 px-3 py-1 rounded-full text-sm font-medium">AI Integration</span>
                            <span class="bg-pink-100 dark:bg-pink-900/30 text-pink-800 dark:text-pink-300 px-3 py-1 rounded-full text-sm font-medium">IoT Devices</span>
                            <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">Healthcare</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <button class="text-purple-600 dark:text-purple-400 font-semibold hover:text-purple-700 dark:hover:text-purple-300 transition-colors duration-300">
                                Learn More About Impact →
                            </button>
                            <button class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:shadow-lg transition-all duration-300">
                                Full Case Study
                            </button>
                        </div>
                    </div>
                    
                    <!-- Expandable Details -->
                    <div x-show="activeProject === 'lifeguard'" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="pt-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-3">Innovation Highlights:</h4>
                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                <li>• Real-time AI health analysis and prediction</li>
                                <li>• Seamless IoT device integration and monitoring</li>
                                <li>• HIPAA-compliant security and data protection</li>
                                <li>• Predictive analytics for early health intervention</li>
                                <li>• Multi-language support for rural communities</li>
                                <li>• Emergency alert system with GPS location</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- CardioGuard Project -->
                <div class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50"
                     @click="activeProject = activeProject === 'cardio' ? null : 'cardio'">
                    <div class="aspect-video relative overflow-hidden">
                        <img src="{{ asset('images/cardioguard_dashboard.jpg') }}" alt="CardioGuard Cardiovascular Management System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Medical IoT</div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-sm font-medium">24/7 Heart Monitoring</p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">CardioGuard: Advanced Cardiovascular Management Platform</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">
                            Comprehensive web application for cardiovascular health monitoring with real-time data visualization, intelligent alerts, and seamless integration with portable IoT cardiac devices for emergency response.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">Laravel</span>
                            <span class="bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 px-3 py-1 rounded-full text-sm font-medium">Medical IoT</span>
                            <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">Data Visualization</span>
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 px-3 py-1 rounded-full text-sm font-medium">Emergency System</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <button class="text-red-600 dark:text-red-400 font-semibold hover:text-red-700 dark:hover:text-red-300 transition-colors duration-300">
                                Discover Life-Saving Features →
                            </button>
                            <button class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:shadow-lg transition-all duration-300">
                                Full Case Study
                            </button>
                        </div>
                    </div>
                    
                    <!-- Expandable Details -->
                    <div x-show="activeProject === 'cardio'" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="pt-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-3">Patient Impact & Features:</h4>
                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                <li>• Continuous 24/7 heart rate and rhythm monitoring</li>
                                <li>• Intelligent early warning system for cardiac events</li>
                                <li>• Secure doctor-patient communication portal</li>
                                <li>• Integration with emergency response services</li>
                                <li>• Advanced data analytics and trend reporting</li>
                                <li>• Family member notification and involvement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Portfolio Statistics -->
            <div class="mt-16 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-900/20 dark:to-purple-900/20 rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Portfolio Performance Impact</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Measurable results across all our website development projects</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-black text-indigo-600 mb-2">150+</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Websites Delivered</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Across various industries</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-purple-600 mb-2">98%</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Client Satisfaction</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Long-term partnerships</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-green-600 mb-2">250%</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Average ROI Increase</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Within first year</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-pink-600 mb-2">2.1s</div>
                        <p class="font-semibold text-gray-900 dark:text-white">Average Load Time</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lightning fast performance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology & Development Philosophy -->
    <section id="philosophy" class="py-20 lg:py-32 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    The Techtonauts Advantage: <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">Precision, Innovation, Partnership</span>
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                    Our development philosophy combines cutting-edge technology with proven methodologies, ensuring every project delivers exceptional value and sustainable competitive advantage.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            Modern, Proven Technology Stack
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Built on Laravel, Tailwind CSS, PHP, and Alpine.js—technologies that ensure rapid development, exceptional maintainability, optimal performance, and cutting-edge design capabilities. Every line of code follows industry best practices.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            Agile Development Methodology
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Our iterative development process emphasizes client collaboration, transparency, and adaptability. Regular sprints, continuous feedback loops, and milestone reviews ensure your vision is perfectly realized at every stage.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            Uncompromising Quality Assurance
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Rigorous testing protocols, comprehensive security audits, and performance optimization are integral to our process. Every website undergoes extensive quality checks, cross-browser testing, and performance validation before launch.
                        </p>
                    </div>

                    <div class="group">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            Long-term Partnership Support
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed ml-16">
                            Our relationship extends far beyond project delivery. Ongoing maintenance, security updates, performance monitoring, and strategic guidance ensure your website remains competitive and secure as your business evolves.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-3xl transform rotate-6"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-gray-200/50 dark:border-gray-700/50">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Innovation-First Approach</h3>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                                We continuously invest in emerging technologies and methodologies, incorporating the latest innovations into every project. From AI integration to progressive web apps, we future-proof your digital presence with forward-thinking solutions.
                            </p>
                            <div class="grid grid-cols-2 gap-6 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">150+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Successful Projects</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">98%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Client Satisfaction</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 dark:text-green-400">5+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-pink-600 dark:text-pink-400">24/7</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Support Available</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technology Showcase -->
            <div class="mt-16">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Our Technology Arsenal</h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">Cutting-edge tools and frameworks that power exceptional websites</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/laravel_icon.png') }}" alt="Laravel Framework" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Laravel</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/tailwind_icon.png') }}" alt="Tailwind CSS" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Tailwind CSS</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/php_icon.png') }}" alt="PHP Development" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">PHP 8+</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/alpine_icon.png') }}" alt="Alpine.js" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Alpine.js</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('icons/mysql_icon.png') }}" alt="MySQL Database" class="w-10 h-10 object-contain">
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">MySQL</p>
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
    <section id="cta" class="py-20 lg:py-32 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 relative overflow-hidden">
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    Ready to Transform Your Business?
                </div>
                
                <h2 class="text-4xl lg:text-6xl font-black text-white mb-6">
                    Start Your Digital Journey <span class="text-yellow-300">Today</span>
                </h2>
                <p class="text-xl lg:text-2xl text-white/90 mb-12 leading-relaxed">
                    Join 150+ successful businesses who chose Techtonauts for their website development. Let's create something extraordinary that drives real business growth and sets you apart from the competition.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                    <a href="#packages" class="group relative inline-flex items-center px-10 py-5 bg-white text-purple-600 font-bold text-xl rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-pink-400 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <span class="relative z-10 mr-3">Get Your Custom Quote</span>
                        <svg class="relative z-10 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <button @click="showModal = true" class="group relative inline-flex items-center px-10 py-5 bg-transparent border-2 border-white text-white font-bold text-xl rounded-2xl hover:bg-white hover:text-purple-600 transform hover:scale-105 hover:-translate-y-1 transition-all duration-500">
                        <span class="mr-3">Schedule Free Strategy Call</span>
                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
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
                            <p class="text-sm text-white/80">Email Us</p>
                            <p class="text-lg font-semibold">hello@techtonauts.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80">Call Us</p>
                            <p class="text-lg font-semibold">+880 1XXXXXXXXX</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80">Support</p>
                            <p class="text-lg font-semibold">24/7 Available</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 max-w-2xl mx-auto">
                    <p class="text-2xl font-bold text-yellow-300 mb-2">
                        Free Consultation • No Obligation • Expert Guidance
                    </p>
                    <p class="text-white/90">
                        Get a detailed project roadmap, technology recommendations, and accurate timeline—completely free.
                    </p>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute bottom-8 left-8 w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm animate-bounce">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
        <div class="absolute bottom-8 right-8 w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm animate-pulse">
            <img src="{{ asset('images/techtonauts_logo_small.png') }}" alt="Techtonauts" class="w-8 h-8 object-contain">
        </div>
    </section>
</div>
@endsection