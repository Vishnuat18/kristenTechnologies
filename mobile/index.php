<?php
$page_title = "Home | Kristen Byte Solutions";
$page_description = "";
require_once 'includes/header.php';
?>

    <main>
        <!-- BEGIN: HeroSection -->
        <section
            class="relative w-full overflow-hidden bg-transparent transition-colors duration-300 min-h-fit flex flex-col items-center"
            data-purpose="hero-section">

            <!-- Vector Background Graphics -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 hidden md:block">
                <!-- Soft Mesh Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#EEF5FF] via-transparent to-[#F8FAFC] dark:from-[#132c1c]/10 dark:via-transparent dark:to-[#0B3D91]/10 opacity-60"></div>
                <!-- Background Image (Light/Dark Switch) -->
                <div class="absolute inset-0 bg-cover bg-center opacity-70 dark:hidden" style="background-image: url('../images/Bg/homeLight.png');"></div>
                <div class="absolute inset-0 bg-cover bg-center opacity-40 hidden dark:block" style="background-image: url('../images/Bg/homeDark.png');"></div>
            </div>

            <!-- Bottom fade-out so image dissolves into page bg (both modes) -->
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none dark:hidden" style="background: linear-gradient(to top, #FFFFFF 0%, #FFFFFF 10%, rgba(255,255,255,0.8) 40%, rgba(255,255,255,0) 100%);"></div>
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none hidden dark:block" style="background: linear-gradient(to top, #131713 0%, #131713 10%, rgba(19,23,19,0.8) 40%, rgba(19,23,19,0) 100%);"></div>





            <div
                class="max-w-7xl mx-auto px-6 pt-24 pb-12 flex flex-col items-center text-center justify-center relative z-10 w-full">
                <!-- Center: Text Content -->
                <div class="w-full max-w-4xl space-y-6 mt-8 md:mt-0 flex flex-col items-center justify-center">


                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-bold text-brandNavy dark:text-white leading-tight transition-colors tracking-tight mb-2">
                        KRISTEN<br /><span class="text-brandGreen dark:text-[#39FF7A]">TECHNOLOGIES</span>
                    </h1>

                                        <p
                        class="text-[#0B3D91] dark:text-[#4A90E2] font-bold tracking-widest text-sm transition-colors uppercase drop-shadow-md">
                        BUILDING SOLUTIONS. <span class="text-brandGreen dark:text-[#39FF7A]">DELIVERING TRUST.</span>
                    </p>

                    <p
                        class="text-gray-800 dark:text-[#9CA39C] max-w-2xl mx-auto text-lg leading-relaxed transition-colors drop-shadow-md font-medium px-4">
                        We provide smart, reliable and scalable IT solutions that help businesses grow and achieve more
                        every day.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 pt-4 w-full px-4 sm:px-0">
                        <button
                            class="w-full sm:w-auto justify-center bg-[#0B3D91] text-white dark:bg-[#39FF7A] dark:text-black dark:hover:bg-[#2ed663] px-8 py-4 rounded-full font-bold flex items-center gap-3 hover:opacity-90 transition shadow-lg">
                            Explore Services <span class="transform rotate-[-45deg] inline-block">&#8594;</span>
                        </button>

                        <a href="careers.php"
                            class="w-full sm:w-auto justify-center bg-[#0B3D91] text-white dark:bg-[#39FF7A] dark:text-black dark:hover:bg-[#2ed663] px-8 py-4 rounded-full font-bold flex items-center gap-3 hover:opacity-90 transition shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Careers
                        </a>
                    </div>
                    
                    <!-- Hero Image -->
                    <img src="../mobile_hero/home.png" alt="Kristen Technologies Hero" class="mt-12 w-full max-w-md mx-auto object-cover">
                </div>

            </div>
        </section>

        <!-- END: HeroSection -->

        <!-- BEGIN: Custom PC Card -->
        <section class="max-w-7xl mx-auto px-6 py-12" data-purpose="custom-pc-section">
            <div
                class="bg-gray-50 dark:bg-[#111512] rounded-3xl p-8 md:p-12 shadow-sm dark:shadow-none border border-gray-100 dark:border-white/[0.08] transition-colors overflow-hidden relative premium-card">
                <div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">

                    <!-- Left Column: Text & Image -->
                    <div class="space-y-6">
                        <div>
                            <h2
                                class="text-3xl md:text-4xl font-bold text-brandNavy dark:text-white transition-colors mb-4 tracking-tight">
                                Build Your <span class="text-brandGreen dark:text-[#39FF7A]">Custom PC</span></h2>
                            <p class="text-gray-600 dark:text-[#9CA39C] text-lg leading-relaxed transition-colors">
                                Design your dream machine tailored exactly to your needs. Whether for high-end gaming,
                                professional editing, or everyday tasks, we've got you covered.</p>
                        </div>
                        <video 
                            x-data 
                            x-intersect="$el.play()" 
                            x-intersect:leave="$el.pause()" 
                            src="../videos/generate_the_looping_animation.mp4"
                            class="w-full h-auto object-contain max-h-[320px] rounded-3xl mt-8"
                            muted loop playsinline></video>
                        
                        <button onclick="document.getElementById('quoteModal').classList.remove('hidden')" class="w-full bg-[#0B3D91] text-white dark:bg-white dark:text-[#0A0D0A] font-bold py-4 rounded-full shadow-md mt-6 transition-all">
                            Get Quote
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Custom PC Card -->

        <!-- Quote Popup Modal -->
        <div id="quoteModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4">
            <!-- Backdrop -->
            <div class="absolute inset-0 bg-black/70 backdrop-blur-sm transition-opacity" onclick="document.getElementById('quoteModal').classList.add('hidden')"></div>
            
            <!-- Modal Content -->
            <div class="relative w-full max-w-sm bg-[#0A0D0A] rounded-2xl shadow-2xl z-10 max-h-[90vh] overflow-y-auto p-6 md:p-8">
                <form action="../save_quote.php" method="POST" class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-[#9CA39C]">Name</label>
                        <input type="text" name="fullname" required placeholder="Enter your full name"
                            class="w-full bg-black/30 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#39FF7A] transition-colors" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-[#9CA39C]">Mobile</label>
                        <input type="tel" name="phone" required placeholder="Enter your phone number"
                            class="w-full bg-black/30 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#39FF7A] transition-colors" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-[#9CA39C]">Email</label>
                        <input type="email" name="email" required placeholder="Enter your email address"
                            class="w-full bg-black/30 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#39FF7A] transition-colors" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-[#9CA39C]">Description</label>
                        <textarea rows="4" name="description"
                            placeholder="Tell us about your requirements (budget, usage, specific parts...)"
                            class="w-full bg-black/30 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#39FF7A] transition-colors resize-none"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-white hover:opacity-90 text-[#0A0D0A] font-bold py-4 rounded-full shadow-lg transition-all mt-4">
                        Get Quote
                    </button>
                </form>
            </div>
        </div>
        <!-- BEGIN: WhyChooseUs -->
        <section class="relative overflow-hidden py-16 md:py-20 bg-white dark:bg-[#0A0D0A] transition-colors duration-300" data-purpose="why-choose-us">
            <!-- Subtle decorative glow -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#39FF7A]/5 dark:bg-[#39FF7A]/5 rounded-full blur-[120px]"></div>
                <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#0B3D91]/5 dark:bg-[#39FF7A]/5 rounded-full blur-[100px]"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">

                    <!-- Left: Image Collage -->
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4 md:gap-6">
                            <!-- Team Collaboration Card -->
                            <div class="rounded-2xl overflow-hidden border border-gray-150 dark:border-white/10 shadow-md group">
                                <div class="relative aspect-[4/5] bg-gray-100 dark:bg-[#111827]">
                                    <img src="../images/about_hero_team.png" alt="Team Collaboration"
                                        class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500" / loading="lazy" decoding="async">
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                                        <p class="text-white text-sm font-bold tracking-wide">Team Collaboration</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Our Facility Card -->
                            <div class="rounded-2xl overflow-hidden border border-gray-150 dark:border-white/10 shadow-md mt-8 group">
                                <div class="relative aspect-[4/5] bg-gray-100 dark:bg-[#111827]">
                                    <img src="../images/about-01.png" alt="Our Facility"
                                        class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500" / loading="lazy" decoding="async">
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                                        <p class="text-white text-sm font-bold tracking-wide">Our Facility</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 10+ Years Badge -->
                        <div class="absolute -bottom-6 left-4 md:left-8 z-20">
                            <div class="rounded-2xl px-8 py-5 shadow-lg border border-gray-100 dark:border-white/10"
                                style="background: linear-gradient(135deg, #C8E632 0%, #DFFA1A 100%);">
                                <p class="text-4xl md:text-5xl font-black text-[#1a1a0e] leading-none mb-1">10+</p>
                                <p class="text-sm font-bold text-[#1a1a0e]/70 uppercase tracking-wider">Years Excellence</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Text Content -->
                    <div class="space-y-6 pt-6 lg:pt-0">
                        <!-- Heading -->
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-brandNavy dark:text-white leading-tight tracking-tight">
                            We Make Our customers happy by giving <span class="text-brandGreen dark:text-[#39FF7A]">Best services.</span>
                        </h2>

                        <!-- Description -->
                        <p class="text-slate-600 dark:text-[#9CA39C] text-base md:text-lg leading-relaxed max-w-xl font-medium">
                            We are a leading service provider in Salem, offering exceptional and unique repair solutions.
                            Our services include domestic support, remote assistance, and online support, ensuring quick
                            and efficient problem resolution.
                        </p>

                        <!-- Checklist -->
                        <div class="space-y-4 pt-2">
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-brandGreen/10 dark:bg-[#39FF7A]/20 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5 text-brandGreen dark:text-[#39FF7A]" fill="none" stroke="currentColor"
                                        stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-slate-700 dark:text-[#F5F5F0] text-sm md:text-base font-semibold">Customer-centric approach &amp; reliable repairs</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-brandGreen/10 dark:bg-[#39FF7A]/20 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5 text-brandGreen dark:text-[#39FF7A]" fill="none" stroke="currentColor"
                                        stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-slate-700 dark:text-[#F5F5F0] text-sm md:text-base font-semibold">Tailored solutions for every unique need</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-brandGreen/10 dark:bg-[#39FF7A]/20 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5 text-brandGreen dark:text-[#39FF7A]" fill="none" stroke="currentColor"
                                        stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-slate-700 dark:text-[#F5F5F0] text-sm md:text-base font-semibold">Certified engineers with years of experience</p>
                            </div>
                        </div>

                        <!-- BEGIN: Stats Cards inside Why Choose Us -->
                        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-4">
                            <!-- Stat Card 1 -->
                            <div class="bg-slate-50 dark:bg-[#111512] rounded-2xl p-5 flex items-center gap-4 border border-gray-100 dark:border-white/[0.03] transition-colors">
                                <div class="w-14 h-14 rounded-full flex-shrink-0 flex items-center justify-center bg-brandGreen/10 dark:bg-[#152e22]/90 border border-brandGreen/20 dark:border-[#2d5c3f] relative overflow-hidden">
                                    <!-- Soft radial green glow in the circle -->
                                    <div class="absolute inset-0 bg-brandGreen/5 dark:bg-[#39FF7A]/10"></div>
                                    <!-- Laptop Icon -->
                                    <svg class="w-7 h-7 text-brandGreen dark:text-[#39FF7A] relative z-10" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <rect width="18" height="11" x="3" y="4" rx="2"/>
                                        <path d="M2 19h20M2 15h20M7 19v-4M17 19v-4"/>
                                    </svg>
                                </div>
                                <div class="space-y-0.5">
                                    <p class="text-xl md:text-2xl font-bold text-brandNavy dark:text-white tracking-tight font-sans">1,800+</p>
                                    <p class="text-xs text-slate-500 dark:text-[#9CA39C] font-semibold tracking-wide uppercase">Computers Repaired</p>
                                </div>
                            </div>

                            <!-- Stat Card 2 -->
                            <div class="bg-slate-50 dark:bg-[#111512] rounded-2xl p-5 flex items-center gap-4 border border-gray-100 dark:border-white/[0.03] transition-colors">
                                <div class="w-14 h-14 rounded-full flex-shrink-0 flex items-center justify-center bg-brandGreen/10 dark:bg-[#152e22]/90 border border-brandGreen/20 dark:border-[#2d5c3f] relative overflow-hidden">
                                    <!-- Soft radial green glow in the circle -->
                                    <div class="absolute inset-0 bg-brandGreen/5 dark:bg-[#39FF7A]/10"></div>
                                    <!-- Users Icon -->
                                    <svg class="w-7 h-7 text-brandGreen dark:text-[#39FF7A] relative z-10" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </div>
                                <div class="space-y-0.5">
                                    <p class="text-xl md:text-2xl font-bold text-brandNavy dark:text-white tracking-tight font-sans">300+</p>
                                    <p class="text-xs text-slate-500 dark:text-[#9CA39C] font-semibold tracking-wide uppercase">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: Stats Cards inside Why Choose Us -->

                        <!-- CTA Button -->
                        <div class="pt-4">
                            <a href="about.php"
                                class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full font-bold text-sm transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105
                                bg-brandNavy text-white hover:bg-brandNavy/95
                                dark:bg-[#39FF7A] dark:text-[#0A0D0A] dark:hover:bg-[#2ed663]">
                                Learn More About Us
                                <svg class="w-4 h-4 transform rotate-[-45deg]" fill="none" stroke="currentColor"
                                    stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END: WhyChooseUs -->


        <!-- BEGIN: OfferServices -->
        <section class="bg-slate-50 dark:bg-[#0A0D0A] py-8 transition-colors duration-300 relative"
            data-purpose="offer-services">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <!-- Split Layout: Sticky Left, Scrolling Right -->
                <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.2fr] gap-x-12 lg:gap-x-16 xl:gap-x-24 items-start">

                    <!-- Left: Sticky Header Area -->
                    <div class="lg:sticky lg:top-32 space-y-6 flex flex-col">
                        <h3
                            class="text-3xl md:text-4xl lg:text-5xl font-medium text-brandNavy dark:text-white leading-tight transition-colors tracking-tight">
                            We Offer The <span class="text-brandGreen dark:text-[#39FF7A]">Best Quality Service</span> for You
                        </h3>
                        <p class="text-gray-600 dark:text-[#9CA39C] text-lg leading-relaxed transition-colors py-4">
                            Kristen Byte Solutions is the best Computers Sales and Sevice provider in Salem India. We
                            make a personal visit to your office, small business or home for Onsite Computer Setup,
                            Networking, Computer repair, Computer upgrade and Computer Consulting
                        </p>
                        <div>
                            <a href="services.php"
                                class="inline-block px-6 py-2.5 border border-brandNavy/20 dark:border-white/15 rounded-full text-brandNavy dark:text-[#F5F5F0] text-sm font-medium hover:bg-[#0A2640] hover:text-white dark:hover:bg-white/10 dark:hover:border-[#39FF7A]/40 dark:hover:text-[#39FF7A] transition-colors whitespace-nowrap">View
                                all services</a>
                        </div>
                    </div>

                    <!-- Right: Services List (Scrolling) -->
                    <div
                        class="flex flex-col mt-8 lg:mt-0 lg:border-l lg:border-gray-200 dark:lg:border-white/[0.08] lg:pl-12 transition-colors">

                        <!-- List Item 1: Computer Services -->
                        <a href="services.php"
                            class="flex items-center justify-between gap-8 pb-8 lg:pt-0 lg:-mt-2 border-b border-gray-200 dark:border-white/[0.08] group cursor-pointer transition-colors block">
                            <div class="flex-1 pr-4">
                                <h3
                                    class="text-xl md:text-2xl font-medium text-brandNavy dark:text-white group-hover:text-brandGreen dark:group-hover:text-[#39FF7A] transition-colors tracking-tight">
                                    Computer Services</h3>
                                <p
                                    class="text-gray-600 dark:text-[#9CA39C] mt-2 text-sm leading-relaxed hidden sm:block transition-colors">
                                    Our services cover comprehensive maintenance of computers, laptops, printers, and
                                    connected equipment.Call us and get the quick service from us, as we understand your
                                    time values.</p>
                                <div
                                    class="flex items-center gap-4 mt-4 text-xs text-gray-500 dark:text-[#9CA39C]/70 font-medium transition-colors">
                                    <span>Hardware & Software</span>
                                    <span
                                        class="flex items-center gap-1 group-hover:text-brandNavy dark:group-hover:text-white transition-colors">Learn
                                        more <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="shrink-0 relative w-24 h-24 md:w-32 md:h-32">
                                <img src="../images/services/service_light/computer.png" alt="Computer Services"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-100 dark:opacity-0" / loading="lazy" decoding="async">
                                <img src="../images/services/service_dark/computer.png" alt="Computer Services"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-0 dark:opacity-100" / loading="lazy" decoding="async">
                            </div>
                        </a>

                        <!-- List Item 2: Data Recovery -->
                        <a href="services.php"
                            class="flex items-center justify-between gap-8 py-8 border-b border-gray-200 dark:border-white/[0.08] group cursor-pointer transition-colors block">
                            <div class="flex-1 pr-4">
                                <h3
                                    class="text-xl md:text-2xl font-medium text-brandNavy dark:text-white group-hover:text-brandGreen dark:group-hover:text-[#39FF7A] transition-colors tracking-tight">
                                    Data Recovery</h3>
                                <p
                                    class="text-gray-600 dark:text-[#9CA39C] mt-2 text-sm leading-relaxed hidden sm:block transition-colors">
                                    Kristen Byte Solutions is the leading provider of powerful data recovery, undelete,
                                    data security and PC privacy utilities in Salem City for all types of data storage
                                    media.</p>
                                <div
                                    class="flex items-center gap-4 mt-4 text-xs text-gray-500 dark:text-[#9CA39C]/70 font-medium transition-colors">
                                    <span>Secure Restoration</span>
                                    <span
                                        class="flex items-center gap-1 group-hover:text-brandNavy dark:group-hover:text-white transition-colors">Learn
                                        more <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="shrink-0 relative w-24 h-24 md:w-32 md:h-32">
                                <img src="../images/services/service_light/data.png" alt="Data Recovery"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-100 dark:opacity-0" / loading="lazy" decoding="async">
                                <img src="../images/services/service_dark/data.png" alt="Data Recovery"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-0 dark:opacity-100" / loading="lazy" decoding="async">
                            </div>
                        </a>

                        <!-- List Item 3: Network Services -->
                        <a href="services.php"
                            class="flex items-center justify-between gap-8 py-8 border-b border-gray-200 dark:border-white/[0.08] group cursor-pointer transition-colors block">
                            <div class="flex-1 pr-4">
                                <h3
                                    class="text-xl md:text-2xl font-medium text-brandNavy dark:text-white group-hover:text-brandGreen dark:group-hover:text-[#39FF7A] transition-colors tracking-tight">
                                    Network Services</h3>
                                <p
                                    class="text-gray-600 dark:text-[#9CA39C] mt-2 text-sm leading-relaxed hidden sm:block transition-colors">
                                    Struggling with setting up or configuring your switches and routers? Don't worry,
                                    just call 95147 27796, and one of our certified engineers will be at your doorstep
                                    in no time!.</p>
                                <div
                                    class="flex items-center gap-4 mt-4 text-xs text-gray-500 dark:text-[#9CA39C]/70 font-medium transition-colors">
                                    <span>Connectivity</span>
                                    <span
                                        class="flex items-center gap-1 group-hover:text-brandNavy dark:group-hover:text-white transition-colors">Learn
                                        more <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="shrink-0 relative w-24 h-24 md:w-32 md:h-32">
                                <img src="../images/services/service_light/network.png" alt="Network Services"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-100 dark:opacity-0" / loading="lazy" decoding="async">
                                <img src="../images/services/service_dark/network.png" alt="Network Services"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-0 dark:opacity-100" / loading="lazy" decoding="async">
                            </div>
                        </a>

                        <!-- List Item 4: CCTV -->
                        <a href="services.php"
                            class="flex items-center justify-between gap-8 py-8 border-b border-gray-200 dark:border-white/[0.08] group cursor-pointer transition-colors block">
                            <div class="flex-1 pr-4">
                                <h3
                                    class="text-xl md:text-2xl font-medium text-brandNavy dark:text-white group-hover:text-brandGreen dark:group-hover:text-[#39FF7A] transition-colors tracking-tight">
                                    CCTV Installation and Maintanance</h3>
                                <p
                                    class="text-gray-600 dark:text-[#9CA39C] mt-2 text-sm leading-relaxed hidden sm:block transition-colors">
                                    CCTV systems provide real-time surveillance by transmitting video to a monitored
                                    location.Our team offers professional installation and reliable maintenance to
                                    secure and systems running smoothly.</p>
                                <div
                                    class="flex items-center gap-4 mt-4 text-xs text-gray-500 dark:text-[#9CA39C]/70 font-medium transition-colors">
                                    <span>Security Systems</span>
                                    <span
                                        class="flex items-center gap-1 group-hover:text-brandNavy dark:group-hover:text-white transition-colors">Learn
                                        more <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="shrink-0 relative w-24 h-24 md:w-32 md:h-32">
                                <img src="../images/services/service_light/cctv.png" alt="CCTV Installation"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-100 dark:opacity-0" / loading="lazy" decoding="async">
                                <img src="../images/services/service_dark/cctv.png" alt="CCTV Installation"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-0 dark:opacity-100" / loading="lazy" decoding="async">
                            </div>
                        </a>

                        <!-- List Item 5: Printer Services -->
                        <a href="services.php"
                            class="flex items-center justify-between gap-8 py-8 border-b border-gray-200 dark:border-white/[0.08] group cursor-pointer transition-colors block">
                            <div class="flex-1 pr-4">
                                <h3
                                    class="text-xl md:text-2xl font-medium text-brandNavy dark:text-white group-hover:text-brandGreen dark:group-hover:text-[#39FF7A] transition-colors tracking-tight">
                                    Printer Services</h3>
                                <p
                                    class="text-gray-600 dark:text-[#9CA39C] mt-2 text-sm leading-relaxed hidden sm:block transition-colors">
                                    In today's fast-paced world, we don't just want things done quickly, we need them
                                    done quickly. A slow PC or a malfunctioning printer isn't just inconvenient, it can
                                    cost you time, money, and even business opportunities.</p>
                                <div
                                    class="flex items-center gap-4 mt-4 text-xs text-gray-500 dark:text-[#9CA39C]/70 font-medium transition-colors">
                                    <span>Repair & Maintenance</span>
                                    <span
                                        class="flex items-center gap-1 group-hover:text-brandNavy dark:group-hover:text-white transition-colors">Learn
                                        more <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="shrink-0 relative w-24 h-24 md:w-32 md:h-32">
                                <img src="../images/services/service_light/printer.png" alt="Printer Services"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-100 dark:opacity-0" / loading="lazy" decoding="async">
                                <img src="../images/services/service_dark/printer.png" alt="Printer Services"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-0 dark:opacity-100" / loading="lazy" decoding="async">
                            </div>
                        </a>

                        <!-- List Item 6: AMC -->
                        <a href="amc.php"
                            class="flex items-center justify-between gap-8 pt-8 group cursor-pointer transition-colors block">
                            <div class="flex-1 pr-4">
                                <h3
                                    class="text-xl md:text-2xl font-medium text-brandNavy dark:text-white group-hover:text-brandGreen dark:group-hover:text-[#39FF7A] transition-colors tracking-tight">
                                    Annual Maintenance Contract (AMC)</h3>
                                <p
                                    class="text-gray-600 dark:text-[#9CA39C] mt-2 text-sm leading-relaxed hidden sm:block transition-colors">
                                    Kristen Byte Solutions provides regular maintenance, on-call support, and quick
                                    issue resolution for computers, printers, CCTV, and networking equipment. It's a
                                    cost-effective, reliable way to reduce downtime, prevent technical failures, and
                                    keep your business running smoothly.</p>
                                <div
                                    class="flex items-center gap-4 mt-4 text-xs text-gray-500 dark:text-[#9CA39C]/70 font-medium transition-colors">
                                    <span>Support Plans</span>
                                    <span
                                        class="flex items-center gap-1 group-hover:text-brandNavy dark:group-hover:text-white transition-colors">Learn
                                        more <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="shrink-0 relative w-24 h-24 md:w-32 md:h-32">
                                <img src="../images/services/service_light/amc.png" alt="AMC"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-100 dark:opacity-0" / loading="lazy" decoding="async">
                                <img src="../images/services/service_dark/amc.png" alt="AMC"
                                    class="absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 opacity-0 dark:opacity-100" / loading="lazy" decoding="async">
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </section>
        <!-- END: OfferServices -->



        <!-- BEGIN: Testimonials -->
        <section class="max-w-5xl mx-auto px-6 py-20 transition-colors duration-300" data-purpose="testimonials"
            x-data="{ 
                activeSlide: 0, 
                totalSlides: 4, 
                timer: null,
                init() {
                    this.startTimer();
                },
                startTimer() {
                    this.timer = setInterval(() => {
                        this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                    }, 3000);
                },
                resetTimer() {
                    clearInterval(this.timer);
                    this.startTimer();
                },
                next() {
                    this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                    this.resetTimer();
                },
                prev() {
                    this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                    this.resetTimer();
                }
            }">
            
            <div class="text-center space-y-3 mb-16">
                <!-- Tiny label -->
                <p class="text-xs font-bold text-brandGreen dark:text-[#39FF7A] uppercase tracking-widest">Testimonials</p>
                <!-- Main Header -->
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-brandNavy dark:text-white transition-colors tracking-tight">
                    Helping businesses <span class="text-brandGreen dark:text-[#39FF7A]">grow every day</span>
                </h2>
            </div>

            <!-- Slider Wrapper -->
            <div class="relative bg-slate-50 dark:bg-[#111512] rounded-[2.5rem] p-8 md:p-12 border border-gray-100 dark:border-white/[0.05] shadow-sm transition-colors overflow-hidden">
                
                <!-- Slides Container -->
                <div class="relative min-h-[380px] sm:min-h-[280px] md:min-h-[220px]">
                    <!-- Slide 1 -->
                    <div x-show="activeSlide === 0" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-8" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-8" class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                        <!-- Left Avatar -->
                        <img src="../images/tesimonials/blackpanther.png" alt="Thiyagaraj" class="w-48 h-48 md:w-56 md:h-56 rounded-[2rem] object-contain flex-shrink-0 bg-white border-2 border-gray-200/50 dark:border-white/10 hover:scale-105 transition-transform duration-500 shadow-sm" / loading="lazy" decoding="async">
                        <!-- Right Content -->
                        <div class="flex-1 text-center md:text-left space-y-4">
                            <p class="text-lg md:text-xl font-medium text-slate-800 dark:text-gray-200 leading-relaxed italic">
                                "Fast and reliable! My computer had a virus, and they removed it without losing any data. The staff was polite and knowledgeable. I will definitely return for any future issues. Very professional and trustworthy. Low Cost and Free Diagnostics. Free Consultation..!"
                            </p>
                            <div>
                                <p class="text-base font-bold text-brandNavy dark:text-white">Thiyagaraj</p>
                                <p class="text-sm text-gray-500 dark:text-[#9CA39C]">Black Panther</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div x-show="activeSlide === 1" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-8" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-8" class="flex flex-col md:flex-row items-center gap-8 md:gap-12" style="display: none;">
                        <!-- Left Avatar -->
                        <img src="../images/tesimonials/aalaninfotech.png" alt="Balakrishnan" class="w-48 h-48 md:w-56 md:h-56 rounded-[2rem] object-contain flex-shrink-0 bg-white border-2 border-gray-200/50 dark:border-white/10 hover:scale-105 transition-transform duration-500 shadow-sm" / loading="lazy" decoding="async">
                        <!-- Right Content -->
                        <div class="flex-1 text-center md:text-left space-y-4">
                            <p class="text-lg md:text-xl font-medium text-slate-800 dark:text-gray-200 leading-relaxed italic">
                                "The service was satisfactory, and the repair was completed efficiently. The technicians were friendly, skilled. Better communication would further improve the experience. The support team was responsive and well-trained."
                            </p>
                            <div>
                                <p class="text-base font-bold text-brandNavy dark:text-white">Balakrishnan</p>
                                <p class="text-sm text-gray-500 dark:text-[#9CA39C]">Aalan Infotech</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div x-show="activeSlide === 2" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-8" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-8" class="flex flex-col md:flex-row items-center gap-8 md:gap-12" style="display: none;">
                        <!-- Left Avatar -->
                        <img src="../images/tesimonials/techvedhu.png" alt="Ravindran Elango" class="w-48 h-48 md:w-56 md:h-56 rounded-[2rem] object-contain flex-shrink-0 bg-white border-2 border-gray-200/50 dark:border-white/10 hover:scale-105 transition-transform duration-500 shadow-sm" / loading="lazy" decoding="async">
                        <!-- Right Content -->
                        <div class="flex-1 text-center md:text-left space-y-4">
                            <p class="text-lg md:text-xl font-medium text-slate-800 dark:text-gray-200 leading-relaxed italic">
                                "Great experience! My desktop wasn't booting up, and they diagnosed the issue within an hour. The repair was done the same day. The only reason I'm giving 4 stars instead of 5 is that the waiting time was a bit long. Otherwise, fantastic service!"
                            </p>
                            <div>
                                <p class="text-base font-bold text-brandNavy dark:text-white">Ravindran Elango</p>
                                <p class="text-sm text-gray-500 dark:text-[#9CA39C]">Tech Vedhu</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div x-show="activeSlide === 3" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-8" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-8" class="flex flex-col md:flex-row items-center gap-8 md:gap-12" style="display: none;">
                        <!-- Left Avatar -->
                        <img src="../images/tesimonials/optimus.png" alt="Ramani Singaravel" class="w-48 h-48 md:w-56 md:h-56 rounded-[2rem] object-contain flex-shrink-0 bg-white border-2 border-gray-200/50 dark:border-white/10 hover:scale-105 transition-transform duration-500 shadow-sm" / loading="lazy" decoding="async">
                        <!-- Right Content -->
                        <div class="flex-1 text-center md:text-left space-y-4">
                            <p class="text-lg md:text-xl font-medium text-slate-800 dark:text-gray-200 leading-relaxed italic">
                                "Excellent service! My laptop had a severe issue with overheating, and the team fixed it quickly. They explained the problem in detail and gave me tips to maintain my system. Pricing was fair, and the service was professional. Highly recommended!"
                            </p>
                            <div>
                                <p class="text-base font-bold text-brandNavy dark:text-white">Ramani Singaravel</p>
                                <p class="text-sm text-gray-500 dark:text-[#9CA39C]">Optimus Technocrates</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows & Dots -->
                <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mt-8 pt-8 border-t border-gray-200/50 dark:border-white/5">
                    <!-- Dots indicator -->
                    <div class="flex gap-2">
                        <template x-for="(slide, index) in totalSlides" :key="index">
                            <button @click="activeSlide = index; resetTimer();" 
                                class="h-2.5 rounded-full transition-all duration-300"
                                :class="activeSlide === index ? 'w-8 bg-brandGreen dark:bg-[#39FF7A]' : 'w-2.5 bg-gray-300 dark:bg-white/20'"></button>
                        </template>
                    </div>

                    <!-- Arrow buttons -->
                    <div class="flex gap-3">
                        <button @click="prev()"
                            class="w-12 h-12 rounded-full border border-gray-300 dark:border-white/10 flex items-center justify-center text-gray-500 dark:text-white hover:bg-brandGreen hover:text-white hover:border-transparent dark:hover:bg-[#39FF7A] dark:hover:text-black transition-all shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button @click="next()"
                            class="w-12 h-12 rounded-full border border-gray-300 dark:border-white/10 flex items-center justify-center text-gray-500 dark:text-white hover:bg-brandGreen hover:text-white hover:border-transparent dark:hover:bg-[#39FF7A] dark:hover:text-black transition-all shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </section>
        <!-- END: Testimonials -->

            <style>
                .scrollbar-hide::-webkit-scrollbar {
                    display: none;
                }

                .scrollbar-hide {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }
            </style>
        </section>
        <!-- END: Testimonials -->



        <!-- BEGIN: BrandStrip -->
        <section class="max-w-7xl mx-auto px-6 py-12 text-center transition-colors duration-300" data-purpose="brands">
            <h2
                class="text-3xl md:text-4xl font-bold mb-6 text-brandNavy dark:text-white transition-colors tracking-tight">
                We are <span class="text-brandGreen dark:text-[#39FF7A]">Dealing With</span></h2>
            <p
                class="text-sm md:text-base text-gray-500 dark:text-[#9CA39C] max-w-3xl mx-auto mb-8 transition-colors leading-relaxed">
                We offer high-quality, affordable CCTV camera installation, setup, and maintenance services across
                Salem. Whether you need a single-camera setup or a full surveillance system, we've got you covered.
            </p>
            
            <div class="w-full flex overflow-hidden group space-x-6 relative">
                <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white dark:from-[#0A0D0A] to-transparent z-10"></div>
                <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white dark:from-[#0A0D0A] to-transparent z-10"></div>
                
                <div class="flex space-x-6 animate-marquee group-hover:[animation-play-state:paused] whitespace-nowrap py-4 shrink-0">

                    <!-- HIKVISION -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo1.png" alt="Hikvision" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- CP PLUS -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo2.jpeg" alt="CP Plus" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- ACURAA -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo3.png" alt="Acuraa" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- Dahua -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo4.png" alt="Dahua" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- LOGO 5 -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logo5.png" alt="Brand Logo" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- Trueview -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo6.png" alt="Trueview" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- HI-FOCUS -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo7.png" alt="Hi-Focus" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>

                </div>
                <div class="flex space-x-6 animate-marquee group-hover:[animation-play-state:paused] whitespace-nowrap py-4 shrink-0" aria-hidden="true">

                    <!-- HIKVISION -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo1.png" alt="Hikvision" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- CP PLUS -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo2.jpeg" alt="CP Plus" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- ACURAA -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo3.png" alt="Acuraa" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- Dahua -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo4.png" alt="Dahua" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- LOGO 5 -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logo5.png" alt="Brand Logo" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- Trueview -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo6.png" alt="Trueview" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>
                    <!-- HI-FOCUS -->
                    <div class="bg-slate-50 dark:bg-white/95 rounded-2xl flex items-center justify-center p-3 h-16 md:h-20 lg:h-24 shadow-sm dark:shadow-none min-w-[150px]">
                        <img src="../images/logos/logo7.png" alt="Hi-Focus" class="max-h-full max-w-full object-contain mix-blend-multiply" loading="lazy" decoding="async">
                    </div>

                </div>
            </div>
</section>
        <!-- END: BrandStrip -->
        <!-- BEGIN: ContactSection -->
        <section class="max-w-7xl mx-auto px-6 py-12 transition-colors duration-300" data-purpose="contact-section">
            <div
                class="bg-white dark:bg-[#111512] shadow-xl dark:shadow-none border border-gray-100 dark:border-white/[0.08] rounded-3xl p-12 transition-all">
                <div class="text-center space-y-4 mb-8">
                    <h2
                        class="text-4xl lg:text-5xl font-bold text-brandNavy dark:text-white transition-colors tracking-tight">
                        Let's Stay <span class="text-brandGreen dark:text-[#39FF7A]">Connected</span></h2>
                    <p class="text-gray-500 dark:text-[#9CA39C] text-sm transition-colors">Have any computer maintenance
                        emergency or query?<br />We are
                        always here to assist you!</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Info Column -->
                    <div class="space-y-8 lg:pr-8">
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 shrink-0 bg-[#0A2640]/5 dark:bg-[#39FF7A]/10 rounded-xl flex items-center justify-center text-brandNavy dark:text-[#39FF7A] dark:drop-shadow-[0_0_12px_rgba(57,255,122,0.3)] transition-colors">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="text-xs font-bold text-gray-500 dark:text-[#9CA39C] mb-1 transition-colors uppercase tracking-wider">
                                    Head Address:</p>
                                <p class="text-base font-semibold text-brandNavy dark:text-white transition-colors">
                                    Trichy, Tamil Nadu.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 shrink-0 bg-[#0A2640]/5 dark:bg-[#39FF7A]/10 rounded-xl flex items-center justify-center text-brandNavy dark:text-[#39FF7A] dark:drop-shadow-[0_0_12px_rgba(57,255,122,0.3)] transition-colors">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="text-xs font-bold text-gray-500 dark:text-[#9CA39C] mb-1 transition-colors uppercase tracking-wider">
                                    Regd. Office:</p>
                                <p class="text-base font-semibold text-brandNavy dark:text-white transition-colors">
                                    Kristen Tech Solutions Private Limited</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 shrink-0 bg-[#0A2640]/5 dark:bg-[#39FF7A]/10 rounded-xl flex items-center justify-center text-brandNavy dark:text-[#39FF7A] dark:drop-shadow-[0_0_12px_rgba(57,255,122,0.3)] transition-colors">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="text-xs font-bold text-gray-500 dark:text-[#9CA39C] mb-1 transition-colors uppercase tracking-wider">
                                    Phone & Email:</p>
                                <p class="text-base font-semibold text-brandNavy dark:text-white transition-colors">+91
                                    73417 27736</p>
                                <p class="text-base font-semibold text-brandNavy dark:text-white transition-colors">
                                    2021kristentech@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex gap-4 pt-6">
                            <a class="w-10 h-10 rounded-full border border-gray-300 dark:border-white/[0.08] text-brandNavy dark:text-white flex items-center justify-center text-sm hover:bg-[#0A2640] hover:text-white hover:border-transparent dark:hover:bg-[#39FF7A]/15 dark:hover:text-[#39FF7A] transition-all shadow-sm"
                                href="javascript:void(0)">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                                    </path>
                                </svg>
                            </a>
                            <a class="w-10 h-10 rounded-full border border-gray-300 dark:border-white/[0.08] text-brandNavy dark:text-white flex items-center justify-center text-sm hover:bg-[#0A2640] hover:text-white hover:border-transparent dark:hover:bg-[#39FF7A]/15 dark:hover:text-[#39FF7A] transition-all shadow-sm"
                                href="javascript:void(0)">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                    </path>
                                </svg>
                            </a>
                            <a class="w-10 h-10 rounded-full border border-gray-300 dark:border-white/[0.08] text-brandNavy dark:text-white flex items-center justify-center text-sm hover:bg-[#0A2640] hover:text-white hover:border-transparent dark:hover:bg-[#39FF7A]/15 dark:hover:text-[#39FF7A] transition-all shadow-sm"
                                href="javascript:void(0)">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                                    </path>
                                </svg>
                            </a>
                            <a class="w-10 h-10 rounded-full border border-gray-300 dark:border-white/[0.08] text-brandNavy dark:text-white flex items-center justify-center text-sm hover:bg-[#0A2640] hover:text-white hover:border-transparent dark:hover:bg-[#39FF7A]/15 dark:hover:text-[#39FF7A] transition-all shadow-sm"
                                href="javascript:void(0)">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Form Column -->
                    <form action="../save_contact.php" method="POST" class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <input
                                class="bg-slate-50 dark:bg-[#0A0D0A] border border-gray-200 dark:border-white/10 rounded-xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandNavy dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandNavy dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm"
                                placeholder="Full Name" name="fullname" required type="text" />
                            <input
                                class="bg-slate-50 dark:bg-[#0A0D0A] border border-gray-200 dark:border-white/10 rounded-xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandNavy dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandNavy dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm"
                                placeholder="Email Address" name="email" required type="email" />
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <input
                                class="bg-slate-50 dark:bg-[#0A0D0A] border border-gray-200 dark:border-white/10 rounded-xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandNavy dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandNavy dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm"
                                placeholder="Phone Number" name="contactno" required type="tel" />
                            <input
                                class="bg-slate-50 dark:bg-[#0A0D0A] border border-gray-200 dark:border-white/10 rounded-xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandNavy dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandNavy dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm"
                                placeholder="Subject" name="subject" required type="text" />
                        </div>
                        <textarea name="message" required
                            class="w-full bg-slate-50 dark:bg-[#0A0D0A] border border-gray-200 dark:border-white/10 rounded-xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandNavy dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandNavy dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm resize-none"
                            placeholder="Message" rows="5"></textarea>
                        <button
                            class="w-full bg-[#0A2640] text-white py-4 rounded-full font-bold flex justify-center items-center gap-2 hover:bg-[#0f213d] transition-all shadow-md mt-2 dark:bg-[#39FF7A] dark:text-black dark:hover:bg-[#2ed663]">
                            Send Message
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- END: ContactSection -->

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
