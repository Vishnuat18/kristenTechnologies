<?php
$page_title = "About Us | Kristen Byte Solutions";
$page_description = "";
require_once 'includes/header.php';
?>

    
    <main class="pb-16">
        <!-- BEGIN: Hero Section -->
        <section class="relative w-full overflow-hidden bg-transparent transition-colors duration-300 min-h-screen flex items-center" data-purpose="hero-section">
            <!-- Vector Background Graphics -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 hidden md:block">
                <!-- Soft Mesh Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#EEF5FF] via-transparent to-[#F8FAFC] dark:from-[#132c1c]/10 dark:via-transparent dark:to-[#0B3D91]/10 opacity-60"></div>
                <!-- Background Image (Light/Dark Switch) -->
                <div class="absolute inset-0 bg-cover bg-center opacity-70 dark:hidden" style="background-image: url('images/Bg/aboutLight.png');"></div>
                <div class="absolute inset-0 bg-cover bg-center opacity-40 hidden dark:block" style="background-image: url('images/Bg/aboutDark.png');"></div>
            </div>

            <!-- Bottom fade-out so image dissolves into page bg (both modes) -->
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none dark:hidden" style="background: linear-gradient(to top, #FFFFFF 0%, #FFFFFF 10%, rgba(255,255,255,0.8) 40%, rgba(255,255,255,0) 100%);"></div>
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none hidden dark:block" style="background: linear-gradient(to top, #131713 0%, #131713 10%, rgba(19,23,19,0.8) 40%, rgba(19,23,19,0) 100%);"></div>

            <div class="max-w-7xl mx-auto px-6 pt-24 pb-12 flex flex-col items-center text-center justify-center relative z-10 w-full">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brandNavy dark:text-white leading-tight tracking-tight max-w-4xl mx-auto mb-6">
                    Building Technology<br/>that <span class="text-[#22C55E] dark:text-[#39FF7A]">Empowers Businesses.</span>
                </h1>
                <p class="text-gray-600 dark:text-gray-400 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed mb-12">
                    Kristen Technologies is a trusted IT services company committed to delivering smart, reliable and innovative solutions that help businesses grow and stay ahead in the digital world.
                </p>
                
                <!-- Stats Box -->
                <div class="max-w-4xl mx-auto bg-white/70 dark:bg-[#111512]/60 backdrop-blur-md rounded-3xl border border-gray-100 dark:border-white/5 shadow-lg p-6 md:p-8 grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100 dark:divide-white/5">
                    <div class="flex items-center gap-4 justify-center md:justify-start p-4 md:p-2">
                        <div class="p-3 bg-[#e8f5e9] dark:bg-[#39FF7A]/10 rounded-2xl flex-shrink-0 text-brandGreen dark:text-[#39FF7A]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 00-2 2z"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="text-3xl font-extrabold text-brandNavy dark:text-[#39FF7A]">10+</div>
                            <div class="text-sm font-semibold text-gray-500 dark:text-gray-400">Years of Experience</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 justify-center md:justify-start p-4 md:p-2 md:pl-8">
                        <div class="p-3 bg-[#e8f5e9] dark:bg-[#39FF7A]/10 rounded-2xl flex-shrink-0 text-brandGreen dark:text-[#39FF7A]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="text-3xl font-extrabold text-brandNavy dark:text-[#39FF7A]">300+</div>
                            <div class="text-sm font-semibold text-gray-500 dark:text-gray-400">Happy Clients</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 justify-center md:justify-start p-4 md:p-2 md:pl-8">
                        <div class="p-3 bg-[#e8f5e9] dark:bg-[#39FF7A]/10 rounded-2xl flex-shrink-0 text-brandGreen dark:text-[#39FF7A]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="text-3xl font-extrabold text-brandNavy dark:text-[#39FF7A]">1,800+</div>
                            <div class="text-sm font-semibold text-gray-500 dark:text-gray-400">Systems Maintained</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Section -->

        <!-- BEGIN: About Content -->
        <section class="max-w-6xl mx-auto px-6 py-12">
            <div class="space-y-16">

                <!-- Mission & Vision -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Our Mission Card -->
                    <div class="bg-white dark:bg-[#111512] p-8 rounded-3xl border border-gray-100 dark:border-white/5 transition-colors shadow-sm relative overflow-hidden flex flex-col justify-between group hover:scale-[1.01] duration-300">
                        <!-- Concentric circles background vector -->
                        <div class="absolute -right-8 -bottom-8 w-48 h-48 pointer-events-none opacity-[0.08] dark:opacity-[0.15] text-[#0B3D91] dark:text-[#39FF7A]">
                            <svg viewBox="0 0 100 100" class="w-full h-full" fill="none" stroke="currentColor" stroke-width="1.2">
                                <circle cx="50" cy="50" r="10" />
                                <circle cx="50" cy="50" r="20" />
                                <circle cx="50" cy="50" r="30" />
                                <circle cx="50" cy="50" r="40" />
                                <circle cx="50" cy="50" r="50" />
                                <circle cx="50" cy="50" r="60" />
                                <circle cx="50" cy="50" r="70" />
                            </svg>
                        </div>
                        <div class="relative z-10">
                            <h2 class="text-2xl font-bold text-[#0B3D91] dark:text-white mb-4">Our Mission</h2>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                Our mission is to provide high-quality IT services that solve real-world problems and create long-term value for our clients, through innovation, performance and trust.
                            </p>
                        </div>
                        <div class="w-12 h-1.5 bg-[#0B3D91] dark:bg-[#39FF7A] rounded-full mt-6 relative z-10"></div>
                    </div>
                    
                    <!-- Our Vision Card -->
                    <div class="bg-white dark:bg-[#111512] p-8 rounded-3xl border border-gray-100 dark:border-white/5 transition-colors shadow-sm relative overflow-hidden flex flex-col justify-between group hover:scale-[1.01] duration-300">
                        <!-- Concentric eye background vector -->
                        <div class="absolute -right-8 -bottom-8 w-48 h-48 pointer-events-none opacity-[0.08] dark:opacity-[0.15] text-[#22C55E] dark:text-[#39FF7A]">
                            <svg viewBox="0 0 100 100" class="w-full h-full" fill="none" stroke="currentColor" stroke-width="1.2">
                                <!-- Outer eye outline curves -->
                                <path d="M 10 50 Q 50 15 90 50" />
                                <path d="M 10 50 Q 50 85 90 50" />
                                
                                <path d="M 20 50 Q 50 25 80 50" />
                                <path d="M 20 50 Q 50 75 80 50" />
                                
                                <!-- Iris outer circle -->
                                <circle cx="50" cy="50" r="18" />
                                <!-- Iris inner circle -->
                                <circle cx="50" cy="50" r="11" />
                                <!-- Pupil (filled dot) -->
                                <circle cx="50" cy="50" r="5" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="relative z-10">
                            <h2 class="text-2xl font-bold text-[#22C55E] dark:text-[#39FF7A] mb-4">Our Vision</h2>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                Our vision is to become a leading IT solutions partner known for our excellence, customer satisfaction, and commitment to transforming businesses worldwide.
                            </p>
                        </div>
                        <div class="w-12 h-1.5 bg-[#22C55E] dark:bg-[#39FF7A] rounded-full mt-6 relative z-10"></div>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="text-center py-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-brandNavy dark:text-white mb-12">Our Core <span class="text-[#22C55E] dark:text-[#39FF7A]">Values</span></h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                        
                        <!-- Integrity -->
                        <div class="flex gap-4 p-6 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/5 shadow-sm transition-all duration-300 hover:scale-[1.01]">
                            <div class="w-14 h-14 rounded-2xl bg-[#e0f2fe] dark:bg-[#0B3D91]/20 flex items-center justify-center flex-shrink-0 text-[#0B3D91] dark:text-[#39FF7A]">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 009 11a5 5 0 00-9-2.753M21.247 12c.003.167.003.333.003.5 0 3.49-1.353 6.666-3.568 9.043m-3.44-2.04l.054-.09A13.916 13.916 0 0018 12a5 5 0 00-9-2.753m10.247-4.148A10.024 10.024 0 0012 2a9.979 9.979 0 00-6.247 2.148M12 12h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-brandNavy dark:text-white">Integrity</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm mt-2 leading-relaxed">We believe in honesty, transparency, and ethical business.</p>
                            </div>
                        </div>

                        <!-- Reliability -->
                        <div class="flex gap-4 p-6 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/5 shadow-sm transition-all duration-300 hover:scale-[1.01]">
                            <div class="w-14 h-14 rounded-2xl bg-[#dcfce7] dark:bg-[#22C55E]/10 flex items-center justify-center flex-shrink-0 text-[#22C55E] dark:text-[#39FF7A]">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-brandNavy dark:text-white">Reliability</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm mt-2 leading-relaxed">We deliver consistent, high-quality services you can trust.</p>
                            </div>
                        </div>

                        <!-- Innovation -->
                        <div class="flex gap-4 p-6 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/5 shadow-sm transition-all duration-300 hover:scale-[1.01]">
                            <div class="w-14 h-14 rounded-2xl bg-[#fef9c3] dark:bg-[#eab308]/10 flex items-center justify-center flex-shrink-0 text-[#ca8a04] dark:text-[#39FF7A]">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-brandNavy dark:text-white">Innovation</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm mt-2 leading-relaxed">We embrace new ideas and deliver creative IT solutions.</p>
                            </div>
                        </div>

                        <!-- Customer Focus -->
                        <div class="flex gap-4 p-6 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/5 shadow-sm transition-all duration-300 hover:scale-[1.01]">
                            <div class="w-14 h-14 rounded-2xl bg-[#ffedd5] dark:bg-[#f97316]/10 flex items-center justify-center flex-shrink-0 text-[#ea580c] dark:text-[#39FF7A]">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-brandNavy dark:text-white">Customer Focus</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm mt-2 leading-relaxed">Our clients' success is our highest priority.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center py-8">
                    <!-- Left: Text Content -->
                    <div class="space-y-6">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-brandNavy dark:text-white leading-tight">
                            Why Choose <span class="text-[#22C55E] dark:text-[#39FF7A]">Us?</span>
                        </h2>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                                <div class="w-6 h-6 rounded-full border-2 border-[#22C55E] dark:border-[#39FF7A] text-[#22C55E] dark:text-[#39FF7A] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-semibold text-base">Skilled and certified professional team</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                                <div class="w-6 h-6 rounded-full border-2 border-[#22C55E] dark:border-[#39FF7A] text-[#22C55E] dark:text-[#39FF7A] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-semibold text-base">Affordable pricing with best value</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                                <div class="w-6 h-6 rounded-full border-2 border-[#22C55E] dark:border-[#39FF7A] text-[#22C55E] dark:text-[#39FF7A] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-semibold text-base">On-time delivery with 100% reliability</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                                <div class="w-6 h-6 rounded-full border-2 border-[#22C55E] dark:border-[#39FF7A] text-[#22C55E] dark:text-[#39FF7A] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-semibold text-base">Latest technology and modern tools</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                                <div class="w-6 h-6 rounded-full border-2 border-[#22C55E] dark:border-[#39FF7A] text-[#22C55E] dark:text-[#39FF7A] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-semibold text-base">Secure, scalable and future-ready solutions</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Right: Image -->
                    <div class="relative group max-w-lg mx-auto lg:mr-0">
                        <div class="absolute inset-0 bg-[#22C55E] dark:bg-[#39FF7A] opacity-5 rounded-[32px] blur-xl group-hover:opacity-10 transition-opacity pointer-events-none"></div>
                        <img src="images/why_choose_us_globe.png" alt="Why Choose Us Globe" class="w-full h-[300px] object-cover rounded-[24px] shadow-lg border border-gray-100 dark:border-white/5 group-hover:scale-[1.01] transition-transform duration-300" / loading="lazy" decoding="async">
                    </div>
                </div>

                <!-- Timeline Section -->
                <div class="py-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-brandNavy dark:text-white mb-12 text-center">Our Journey at <span class="text-[#22C55E] dark:text-[#39FF7A]">a glance</span></h2>
                    
                    <div class="max-w-4xl mx-auto bg-[#F8FAFC] dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/5 shadow-sm p-6 lg:p-10 relative overflow-hidden">
                        <div class="divide-y divide-gray-200/60 dark:divide-white/5">
                            
                            <!-- 2018 Milestone -->
                            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-start lg:items-stretch py-8 first:pt-0 last:pb-0">
                                <!-- Left side: Badge & Year -->
                                <div class="flex items-center gap-4 w-52 flex-shrink-0">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-white bg-[#22C55E] dark:bg-[#39FF7A] dark:text-[#0A0D0A] shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-3xl font-extrabold text-[#0B3D91] dark:text-white tracking-tight">2018</span>
                                        <span class="block text-[11px] text-gray-400 dark:text-gray-500 font-semibold uppercase tracking-wider mt-0.5">Company Founded</span>
                                    </div>
                                </div>
                                
                                <!-- Colored vertical divider line -->
                                <div class="hidden lg:block w-0.5 bg-[#22C55E] dark:bg-[#39FF7A] self-stretch mx-2 rounded-full"></div>
                                
                                <!-- Right side: Title & Description -->
                                <div class="flex-1 pl-4 lg:pl-0 space-y-3 py-1">
                                    <h3 class="text-xl font-bold text-[#0B3D91] dark:text-white leading-tight">The Beginning</h3>
                                    <ul class="space-y-2.5 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Kristen Technologies was founded as an offshoot of its parent company, Kristen Technologies.</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Started providing reliable and affordable IT services to local clients.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- 2019 Milestone -->
                            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-start lg:items-stretch py-8 first:pt-0 last:pb-0">
                                <!-- Left side: Badge & Year -->
                                <div class="flex items-center gap-4 w-52 flex-shrink-0">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-white bg-[#0B3D91] dark:bg-[#4A90E2] shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-3xl font-extrabold text-[#0B3D91] dark:text-white tracking-tight">2019</span>
                                        <span class="block text-[11px] text-gray-400 dark:text-gray-500 font-semibold uppercase tracking-wider mt-0.5">Service Expansion</span>
                                    </div>
                                </div>
                                
                                <!-- Colored vertical divider line -->
                                <div class="hidden lg:block w-0.5 bg-[#0B3D91] dark:bg-[#4A90E2] self-stretch mx-2 rounded-full"></div>
                                
                                <!-- Right side: Title & Description -->
                                <div class="flex-1 pl-4 lg:pl-0 space-y-3 py-1">
                                    <h3 class="text-xl font-bold text-[#0B3D91] dark:text-white leading-tight">Service Expansion</h3>
                                    <ul class="space-y-2.5 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#0B3D91] dark:text-[#4A90E2] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Introduced comprehensive AMC plans.</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#0B3D91] dark:text-[#4A90E2] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Started CCTV installation and on-site IT support for businesses.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- 2021 Milestone -->
                            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-start lg:items-stretch py-8 first:pt-0 last:pb-0">
                                <!-- Left side: Badge & Year -->
                                <div class="flex items-center gap-4 w-52 flex-shrink-0">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-white bg-[#ea580c] dark:bg-[#f97316] shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-3xl font-extrabold text-[#0B3D91] dark:text-white tracking-tight">2021</span>
                                        <span class="block text-[11px] text-gray-400 dark:text-gray-500 font-semibold uppercase tracking-wider mt-0.5">Regional Growth</span>
                                    </div>
                                </div>
                                
                                <!-- Colored vertical divider line -->
                                <div class="hidden lg:block w-0.5 bg-[#ea580c] dark:bg-[#f97316] self-stretch mx-2 rounded-full"></div>
                                
                                <!-- Right side: Title & Description -->
                                <div class="flex-1 pl-4 lg:pl-0 space-y-3 py-1">
                                    <h3 class="text-xl font-bold text-[#0B3D91] dark:text-white leading-tight">Regional Growth</h3>
                                    <ul class="space-y-2.5 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#ea580c] dark:text-[#f97316] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Started offering services across multiple cities.</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#ea580c] dark:text-[#f97316] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Established a dedicated remote troubleshooting team.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- 2023 Milestone -->
                            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-start lg:items-stretch py-8 first:pt-0 last:pb-0">
                                <!-- Left side: Badge & Year -->
                                <div class="flex items-center gap-4 w-52 flex-shrink-0">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-white bg-[#ec4899] dark:bg-[#f43f5e] shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-3xl font-extrabold text-[#0B3D91] dark:text-white tracking-tight">2023</span>
                                        <span class="block text-[11px] text-gray-400 dark:text-gray-500 font-semibold uppercase tracking-wider mt-0.5">Major Milestone</span>
                                    </div>
                                </div>
                                
                                <!-- Colored vertical divider line -->
                                <div class="hidden lg:block w-0.5 bg-[#ec4899] dark:bg-[#f43f5e] self-stretch mx-2 rounded-full"></div>
                                
                                <!-- Right side: Title & Description -->
                                <div class="flex-1 pl-4 lg:pl-0 space-y-3 py-1">
                                    <h3 class="text-xl font-bold text-[#0B3D91] dark:text-white leading-tight">Major Milestone</h3>
                                    <ul class="space-y-2.5 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#ec4899] dark:text-[#f43f5e] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Achieved over 300+ satisfied customers.</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#ec4899] dark:text-[#f43f5e] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Continued excellence in data recovery & IT support.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- 2025 Milestone -->
                            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-start lg:items-stretch py-8 first:pt-0 last:pb-0">
                                <!-- Left side: Badge & Year -->
                                <div class="flex items-center gap-4 w-52 flex-shrink-0">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-white bg-[#06b6d4] dark:bg-[#22d3ee] shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-3xl font-extrabold text-[#0B3D91] dark:text-white tracking-tight">2025</span>
                                        <span class="block text-[11px] text-gray-400 dark:text-gray-500 font-semibold uppercase tracking-wider mt-0.5">Future Goals</span>
                                    </div>
                                </div>
                                
                                <!-- Colored vertical divider line -->
                                <div class="hidden lg:block w-0.5 bg-[#06b6d4] dark:bg-[#22d3ee] self-stretch mx-2 rounded-full"></div>
                                
                                <!-- Right side: Title & Description -->
                                <div class="flex-1 pl-4 lg:pl-0 space-y-3 py-1">
                                    <h3 class="text-xl font-bold text-[#0B3D91] dark:text-white leading-tight">Future Goals</h3>
                                    <ul class="space-y-2.5 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#06b6d4] dark:text-[#22d3ee] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Expanding into cloud solutions.</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <svg class="w-4 h-4 text-[#06b6d4] dark:text-[#22d3ee] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <span>Enhancing cybersecurity services to meet modern digital needs.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- END: About Content -->

        <!-- BEGIN: FinalCTA -->
        <section class="max-w-7xl mx-auto px-6 mb-12 transition-colors duration-300" data-purpose="bottom-banner">
            <div
                class="bg-[#0A2640] dark:bg-[#0D1710] p-8 md:p-12 rounded-3xl flex flex-col md:flex-row justify-between items-center gap-8 relative overflow-hidden transition-colors shadow-2xl dark:border dark:border-white/[0.08]">

                <!-- Background Graphics (Waves & Glow) -->
                <div class="absolute inset-0 pointer-events-none opacity-20 dark:opacity-40"
                    style="background-image: radial-gradient(circle at 80% 50%, rgba(57,255,122,0.18) 0%, transparent 60%);">
                </div>
                <div class="absolute inset-0 pointer-events-none opacity-10"
                    style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.05) 10px, rgba(255,255,255,0.05) 20px);">
                </div>
                <div
                    class="absolute -right-20 top-0 w-96 h-96 bg-white/5 dark:bg-[#39FF7A]/10 rounded-full blur-3xl transition-colors pointer-events-none">
                </div>
                <div
                    class="absolute -left-20 bottom-0 w-96 h-96 bg-white/5 dark:bg-[#39FF7A]/10 rounded-full blur-3xl transition-colors pointer-events-none">
                </div>

                <div class="space-y-3 z-10 text-center md:text-left flex-1">
                    <h2
                        class="text-3xl md:text-4xl font-bold text-white transition-colors leading-tight tracking-tight">
                        Join with Our <span class="text-brandGreen dark:text-[#39FF7A]">AMC to Growing</span><br class="hidden md:block" />with Base.</h2>
                    <p class="text-gray-300 dark:text-[#9CA39C] text-sm md:text-base font-medium transition-colors">
                        Computer and IT Care, Delivered Nearby.</p>
                </div>
                <a href="amc.php"
                    class="bg-white text-brandNavy dark:bg-[#39FF7A] dark:text-[#0A0D0A] px-8 py-3.5 rounded-full text-sm font-bold flex items-center gap-2 hover:scale-105 transition-transform z-10 whitespace-nowrap shadow-lg">
                    Get AMC Now
                    <svg class="w-4 h-4 transform rotate-[-45deg] -mt-1 -mr-1" fill="none" stroke="currentColor"
                        stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
                        </path>
                    </svg>
                </a>
            </div>
        </section>
        <!-- END: FinalCTA -->
    </main>

    
<?php require_once 'includes/footer.php'; ?>
