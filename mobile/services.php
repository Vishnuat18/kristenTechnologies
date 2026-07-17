<?php
$page_title = "Our Services | Kristen Byte Solutions";
$page_description = "Kristen Byte Solutions offers computer & laptop repair, data recovery, CCTV installation, networking and AMC services in Salem. On-site and pickup & delivery support.";
require_once 'includes/header.php';
?>


    <main class="pb-16">
        <!-- BEGIN: Services Hero -->
        <section class="relative w-full overflow-hidden bg-transparent transition-colors duration-300 min-h-fit flex flex-col items-center" data-purpose="hero-section">
            <!-- Vector Background Graphics -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 hidden md:block">
                <!-- Soft Mesh Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#EEF5FF] via-transparent to-[#F8FAFC] dark:from-[#132c1c]/10 dark:via-transparent dark:to-[#0B3D91]/10 opacity-60"></div>
                <!-- Background Image (Light/Dark Switch) -->
                <div class="absolute inset-0 bg-cover bg-center opacity-70 dark:hidden" style="background-image: url('../images/Bg/serviceLight.png');"></div>
                <div class="absolute inset-0 bg-cover bg-center opacity-40 hidden dark:block" style="background-image: url('../images/Bg/serviceDark.png');"></div>
            </div>

            <!-- Bottom fade-out so image dissolves into page bg (both modes) -->
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none dark:hidden" style="background: linear-gradient(to top, #FFFFFF 0%, #FFFFFF 10%, rgba(255,255,255,0.8) 40%, rgba(255,255,255,0) 100%);"></div>
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none hidden dark:block" style="background: linear-gradient(to top, #131713 0%, #131713 10%, rgba(19,23,19,0.8) 40%, rgba(19,23,19,0) 100%);"></div>

            <div class="max-w-4xl mx-auto px-8 md:px-12 pt-24 pb-12 relative z-10 flex flex-col items-center text-center justify-center w-full">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brandNavy dark:text-white leading-tight tracking-tight mb-6">
                    Our <span class="text-[#22C55E] dark:text-[#39FF7A]">Services</span>
                </h1>
                <p class="text-gray-600 dark:text-[#9CA39C] text-base md:text-lg max-w-3xl mx-auto leading-relaxed">
                    Kristen Byte Solutions is the best Computers Sales and Service provider in Salem India. We make a personal visit to your office, small business or home for Onsite Computer Setup, Networking, Computer repair, Computer upgrade and Computer Consulting. We have the client based in Salem, Erode, Namakkal and surrounding Areas.
                </p>
                <!-- Hero Image -->
                <img src="../mobile_hero/services.png" alt="Services at Kristen Technologies" class="mt-12 w-full max-w-md mx-auto object-cover">
            </div>
        </section>
        
        <!-- BEGIN: Services Grid -->
        <section class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12 py-10 lg:py-16 space-y-16 lg:space-y-24">
            
            <!-- Service 1: Computer & Laptop Services -->
            <div class="flex flex-col-reverse lg:flex-row gap-12 lg:gap-20 items-center">
                <!-- Text Column (Left) -->
                <div class="flex-1 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white uppercase tracking-tight">
                            Computer & <span class="text-[#22C55E] dark:text-[#39FF7A]">Laptop Services</span>
                        </h2>
                    </div>
                    <p class="text-gray-600 dark:text-[#9CA39C] leading-relaxed">
                        Our services cover comprehensive maintenance of computers, laptops, printers, and connected equipment. We can resolve any computer issues, like cleaning viruses, spy ware, speed up slow computers, fix internet issues, resolve wireless network issues and a lot more.
                    </p>
                    <ul class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm font-semibold text-[#0B3D91] dark:text-[#9CA39C]">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Virus Removal</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Speed Optimization</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Internet Issues</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Hardware Upgrade</span>
                        </li>
                    </ul>
                    <div class="pt-4">
                        <a href="computer-services.php" class="inline-flex items-center justify-center border-2 border-[#0B3D91] dark:border-[#39FF7A] text-[#0B3D91] dark:text-[#39FF7A] px-6 py-2.5 rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#0B3D91] hover:text-white dark:hover:bg-[#39FF7A] dark:hover:text-[#0A0D0A] transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
                <!-- Video Column (Right) -->
                <div class="flex-1 w-full max-w-xl">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/5 bg-gray-50 dark:bg-[#111512]">
                        <video class="w-full h-[320px] object-cover block" src="../videos/computer&laptop.mp4" loop muted playsinline data-autoplay-on-scroll></video>
                    </div>
                </div>
            </div>
            
            <!-- Service 2: Data Recovery -->
            <div class="flex flex-col-reverse lg:flex-row-reverse gap-12 lg:gap-20 items-center">
                <!-- Text Column (Right) -->
                <div class="flex-1 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white uppercase tracking-tight">
                            Data <span class="text-[#22C55E] dark:text-[#39FF7A]">Recovery</span>
                        </h2>
                    </div>
                    <p class="text-gray-600 dark:text-[#9CA39C] leading-relaxed">
                        Kristen Byte Solutions is the leading provider of powerful data recovery, undelete, data security and PC privacy utilities in the City for all types of data storage media. Our mission is to deliver expert data recovery, disaster recovery, crashed disk recovery, and file recovery services.
                    </p>
                    <ul class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm font-semibold text-[#0B3D91] dark:text-[#9CA39C]">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Crashed Disk Recovery</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Deleted File Recovery</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Disaster Recovery</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Data Security</span>
                        </li>
                    </ul>
                    <div class="pt-4">
                        <a href="data-recovery.php" class="inline-flex items-center justify-center border-2 border-[#0B3D91] dark:border-[#39FF7A] text-[#0B3D91] dark:text-[#39FF7A] px-6 py-2.5 rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#0B3D91] hover:text-white dark:hover:bg-[#39FF7A] dark:hover:text-[#0A0D0A] transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
                <!-- Video Column (Left) -->
                <div class="flex-1 w-full max-w-xl">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/5 bg-gray-50 dark:bg-[#111512]">
                        <video class="w-full h-[320px] object-cover block" src="../videos/data.mp4" loop muted playsinline data-autoplay-on-scroll></video>
                    </div>
                </div>
            </div>
            
            <!-- Service 3: Network Services -->
            <div class="flex flex-col-reverse lg:flex-row gap-12 lg:gap-20 items-center">
                <!-- Text Column (Left) -->
                <div class="flex-1 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-indigo-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 100-6 3 3 0 000 6z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white uppercase tracking-tight">
                            Network <span class="text-[#22C55E] dark:text-[#39FF7A]">Services</span>
                        </h2>
                    </div>
                    <p class="text-gray-600 dark:text-[#9CA39C] leading-relaxed">
                        Worried about the setup and configuration of your switches or routers? Don’t stress—just call 9514727796, and our certified engineers will handle it all at your location! We bring prompt, reliable, and professional networking services right to your doorstep.
                    </p>
                    <ul class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm font-semibold text-[#0B3D91] dark:text-[#9CA39C]">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Router Configuration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Switch Setup</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Wireless Networking</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Troubleshooting</span>
                        </li>
                    </ul>
                    <div class="pt-4">
                        <a href="network-service.php" class="inline-flex items-center justify-center border-2 border-[#0B3D91] dark:border-[#39FF7A] text-[#0B3D91] dark:text-[#39FF7A] px-6 py-2.5 rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#0B3D91] hover:text-white dark:hover:bg-[#39FF7A] dark:hover:text-[#0A0D0A] transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
                <!-- Video Column (Right) -->
                <div class="flex-1 w-full max-w-xl">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/5 bg-gray-50 dark:bg-[#111512]">
                        <video class="w-full h-[320px] object-cover block" src="../videos/netowrk.mp4" loop muted playsinline data-autoplay-on-scroll></video>
                    </div>
                </div>
            </div>
            
            <!-- Service 4: CCTV Installation -->
            <div class="flex flex-col-reverse lg:flex-row-reverse gap-12 lg:gap-20 items-center">
                <!-- Text Column (Right) -->
                <div class="flex-1 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-orange-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white uppercase tracking-tight">
                            CCTV <span class="text-[#22C55E] dark:text-[#39FF7A]">Installation</span>
                        </h2>
                    </div>
                    <p class="text-gray-600 dark:text-[#9CA39C] leading-relaxed">
                        CCTV stands for closed circuit television. This is also known as video surveillance system. It uses of video cameras to transmit signals to a specific place. The CCTV System has become a true and very powerful evidence to solve crimes and mysteries.
                    </p>
                    <ul class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm font-semibold text-[#0B3D91] dark:text-[#9CA39C]">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Camera Installation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>System Maintenance</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Remote Monitoring</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>DVR/NVR Setup</span>
                        </li>
                    </ul>
                    <div class="pt-4">
                        <a href="cctv.php" class="inline-flex items-center justify-center border-2 border-[#0B3D91] dark:border-[#39FF7A] text-[#0B3D91] dark:text-[#39FF7A] px-6 py-2.5 rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#0B3D91] hover:text-white dark:hover:bg-[#39FF7A] dark:hover:text-[#0A0D0A] transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
                <!-- Video Column (Left) -->
                <div class="flex-1 w-full max-w-xl">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/5 bg-gray-50 dark:bg-[#111512]">
                        <video class="w-full h-[320px] object-cover block" src="../videos/cctv.mp4" loop muted playsinline data-autoplay-on-scroll></video>
                    </div>
                </div>
            </div>
            
            <!-- Service 5: Printer & Toner Services -->
            <div class="flex flex-col-reverse lg:flex-row gap-12 lg:gap-20 items-center">
                <!-- Text Column (Left) -->
                <div class="flex-1 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-cyan-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white uppercase tracking-tight">
                            Printer & <span class="text-[#22C55E] dark:text-[#39FF7A]">Toner Services</span>
                        </h2>
                    </div>
                    <p class="text-gray-600 dark:text-[#9CA39C] leading-relaxed">
                        Let’s face it—in today’s fast-paced world, we don’t just want things done quickly, we need them done quickly. A slow PC or a malfunctioning printer isn’t just inconvenient. That’s why we offer quick, convenient, and expert printer and PC repair services.
                    </p>
                    <ul class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm font-semibold text-[#0B3D91] dark:text-[#9CA39C]">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Printer Repair</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Toner Refill</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Maintenance</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Quick Support</span>
                        </li>
                    </ul>
                    <div class="pt-4">
                        <a href="printer.php" class="inline-flex items-center justify-center border-2 border-[#0B3D91] dark:border-[#39FF7A] text-[#0B3D91] dark:text-[#39FF7A] px-6 py-2.5 rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#0B3D91] hover:text-white dark:hover:bg-[#39FF7A] dark:hover:text-[#0A0D0A] transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
                <!-- Video Column (Right) -->
                <div class="flex-1 w-full max-w-xl">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/5 bg-gray-50 dark:bg-[#111512]">
                        <video class="w-full h-[320px] object-cover block" src="../videos/printer.mp4" loop muted playsinline data-autoplay-on-scroll></video>
                    </div>
                </div>
            </div>
            
            <!-- Service 6: AMC Services -->
            <div class="flex flex-col-reverse lg:flex-row-reverse gap-12 lg:gap-20 items-center">
                <!-- Text Column (Right) -->
                <div class="flex-1 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-purple-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white uppercase tracking-tight">
                            AMC <span class="text-[#22C55E] dark:text-[#39FF7A]">Services</span>
                        </h2>
                    </div>
                    <p class="text-gray-600 dark:text-[#9CA39C] leading-relaxed">
                        An Annual Maintenance Contract (AMC) ensures your IT systems remain in perfect working condition throughout the year. Kristen Byte Solutions provides regular maintenance, on-call support, and quick issue resolution for computers, printers, CCTV, and networking equipment.
                    </p>
                    <ul class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm font-semibold text-[#0B3D91] dark:text-[#9CA39C]">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Regular Maintenance</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>On-call Support</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Hardware Coverage</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#22C55E] dark:text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="3.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Priority Service</span>
                        </li>
                    </ul>
                    <div class="pt-4">
                        <a href="amc.php" class="inline-flex items-center justify-center border-2 border-[#0B3D91] dark:border-[#39FF7A] text-[#0B3D91] dark:text-[#39FF7A] px-6 py-2.5 rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#0B3D91] hover:text-white dark:hover:bg-[#39FF7A] dark:hover:text-[#0A0D0A] transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
                <!-- Video Column (Left) -->
                <div class="flex-1 w-full max-w-xl">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/5 bg-gray-50 dark:bg-[#111512]">
                        <video class="w-full h-[320px] object-cover block" src="../videos/amc.mp4" loop muted playsinline data-autoplay-on-scroll></video>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- BEGIN: App Store Banner -->
        <section class="max-w-6xl mx-auto px-8 md:px-12 py-12 mb-16">
            <div class="relative rounded-[32px] overflow-hidden shadow-2xl border border-gray-200 dark:border-white/[0.08] min-h-[380px] md:min-h-[440px] flex items-center bg-gray-50 dark:bg-[#0A0D0A]">
                <!-- Background Theme Images -->
                <img src="../images/cta/lightcta.png" alt="Available Soon Banner" class="absolute inset-0 w-full h-full object-cover block dark:hidden" / loading="lazy" decoding="async">
                <img src="../images/cta/darkcta.png" alt="Available Soon Banner" class="absolute inset-0 w-full h-full object-cover hidden dark:block" / loading="lazy" decoding="async">
                
                <!-- Content Overlay (Grid: Left text/buttons, Right empty/mockup) -->
                <div class="relative z-10 w-full grid grid-cols-1 lg:grid-cols-2 gap-8 px-8 md:px-16 py-12">
                    <!-- Left side content -->
                    <div class="flex flex-col justify-center text-left max-w-xl space-y-6">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#0A2640] dark:text-white leading-tight">
                            Available <span class="text-[#4F46E5] dark:text-[#39FF7A]">Soon</span>
                        </h2>
                        <p class="text-gray-600 dark:text-[#9CA39C] text-sm md:text-base leading-relaxed">
                            We're launching our app soon on both <span class="text-[#4F46E5] dark:text-[#39FF7A] font-bold">Android</span> and <span class="text-[#4F46E5] dark:text-[#39FF7A] font-bold">iOS</span>. Stay tuned for seamless access to all our services directly from your phone!
                        </p>
                        <!-- Buttons -->
                        <div class="flex flex-wrap gap-4 items-center pt-2">
                            <!-- Google Play Button -->
                            <a href="#" class="flex items-center gap-3 bg-[#0A0D0A] hover:bg-[#1a201c] dark:bg-white/[0.06] dark:hover:bg-white/[0.1] text-white border border-white/10 px-5 py-3 rounded-xl hover:scale-105 transition-all shadow-xl group">
                                <svg class="w-5 h-5 text-[#4F46E5] dark:text-[#39FF7A] group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M5.27 3.27A1.5 1.5 0 005 4.5v15a1.5 1.5 0 00.27 1.23L13.5 12 5.27 3.27zM14.5 11l-2 2h8c.55 0 1-.45 1-1s-.45-1-1-1h-6zM5.5 3L13 10.5l3-3L6.5 2.5a.5.5 0 00-.73.23l-.27.27zm0 18l10.5-8-3-3-7.23 10.73a.5.5 0 00.73.27z"/>
                                </svg>
                                <div class="text-left">
                                    <div class="text-[8px] uppercase tracking-wider font-semibold opacity-75">Get it on</div>
                                    <div class="font-extrabold leading-none text-xs mt-0.5">Google Play</div>
                                </div>
                            </a>
                            
                            <!-- App Store Button -->
                            <a href="#" class="flex items-center gap-3 bg-[#0A0D0A] hover:bg-[#1a201c] dark:bg-white/[0.06] dark:hover:bg-white/[0.1] text-white border border-white/10 px-5 py-3 rounded-xl hover:scale-105 transition-all shadow-xl group">
                                <svg class="w-5 h-5 text-[#4F46E5] dark:text-[#39FF7A] group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 4.17c.66-.81 1.11-1.93.99-3.06-1 .04-2.21.67-2.93 1.49-.62.69-1.16 1.84-1.01 2.96 1.12.09 2.27-.56 2.95-1.39z"/>
                                </svg>
                                <div class="text-left">
                                    <div class="text-[8px] uppercase tracking-wider font-semibold opacity-75">Download on the</div>
                                    <div class="font-extrabold leading-none text-xs mt-0.5">App Store</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Right side (Empty to let background mockup shine through) -->
                    <div class="hidden lg:block"></div>
                </div>
            </div>
        </section>
        
    </main>

    
<?php require_once 'includes/footer.php'; ?>
