<!DOCTYPE html>
<html lang="en"
    x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches), isTransitioning: false, toggleTheme() { this.isTransitioning = true; setTimeout(() => { this.darkMode = !this.darkMode; setTimeout(() => { this.isTransitioning = false; }, 50); }, 100); } }"
    x-init="$watch('darkMode', val => localStorage.setItem('theme', val ? 'dark' : 'light'))"
    :class="{ 'dark': darkMode }">

<head>
    <title><?= $page_title ?? "Kristen Byte Solutions" ?></title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MKQXVT5Z4B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-MKQXVT5Z4B');
    </script>

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <link rel="icon" type="image/x-icon" href="../icons/favicon.ico" />
    <link rel="manifest" href="../manifest.json" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Tailwind CSS v3 with Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Alpine.js for theme toggling -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@400;500;600&family=Manrope:wght@700;800&display=swap"
        rel="stylesheet" />
    <style type="text/tailwindcss">
        @layer base {
            :root {
                --color-primary: #0B3D91;
                --color-secondary: #22C55E;
                --color-accent: #84CC16;
                --color-bg: #FFFFFF;
                --color-surface: #F8FAFC;
                --color-card: #FFFFFF;
                --color-text: #111827;
                --color-text-muted: #64748B;
                --color-border: #E2E8F0;
            }
                                    .dark {
                --color-primary: #F5F5F0;
                --color-secondary: #39FF7A;
                --color-accent: #39FF7A;
                --color-bg: #0A0D0A;
                --color-surface: #131713;
                --color-card: #111512;
                --color-text: #F5F5F0;
                --color-text-muted: #9CA39C;
                --color-border: rgba(255, 255, 255, 0.08);
            }
            body.dark {
                background-color: var(--color-bg);
                position: relative;
                font-family: 'Space Grotesk', sans-serif;
            }
        }
    
        
        /* Typography System (Responsive) */
        @layer base {
            h1, .text-h1 { font-size: 34px; line-height: 1.2; }
            @media (min-width: 768px) { h1, .text-h1 { font-size: 46px; } }
            @media (min-width: 1024px) { h1, .text-h1 { font-size: 64px; } }

            h2, .text-h2 { font-size: 28px; line-height: 1.3; }
            @media (min-width: 768px) { h2, .text-h2 { font-size: 34px; } }
            @media (min-width: 1024px) { h2, .text-h2 { font-size: 42px; } }

            p, .text-p { font-size: 15px; }
            @media (min-width: 768px) { p, .text-p { font-size: 16px; } }
            @media (min-width: 1024px) { p, .text-p { font-size: 18px; } }
            
            /* Responsive Utilities */
            .section-padding { padding-top: 56px; padding-bottom: 56px; }
            @media (min-width: 768px) { .section-padding { padding-top: 80px; padding-bottom: 80px; } }
            @media (min-width: 1024px) { .section-padding { padding-top: 120px; padding-bottom: 120px; } }
            
            .card-gap { gap: 20px; }
            @media (min-width: 768px) { .card-gap { gap: 24px; } }
            @media (min-width: 1024px) { .card-gap { gap: 32px; } }
        }

        /* Mobile/Tablet Adjustments */
        @media (max-width: 1023px) {
            .blob-bg {
                display: none !important;
            }
        }

    </style>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    },
                    colors: {
                        // Semantic variables
                        'primary': 'var(--color-primary)',
                        'secondary': 'var(--color-secondary)',
                        'accent': 'var(--color-accent)',
                        'bg': 'var(--color-bg)',
                        'surface': 'var(--color-surface)',
                        'card': 'var(--color-card)',
                        'text': 'var(--color-text)',
                        'text-muted': 'var(--color-text-muted)',
                        'border': 'var(--color-border)',

                        // Legacy mapped colors to prevent breaking existing classes
                        'brandNavy': 'var(--color-primary)',
                        'brandGreen': 'var(--color-secondary)',
                        'accentLight': 'var(--color-surface)',
                        'surface-dim': 'var(--color-bg)',
                        'surface-bright': 'var(--color-card)',
                        'surface-container': 'var(--color-card)',
                        'emerald-accent': 'var(--color-accent)',
                    },
                    fontFamily: {
                        // Remapping garamond to Manrope for headings so old classes work
                        'garamond': ['Manrope', 'sans-serif'],
                        // Default sans to Inter
                        'sans': ['Inter', 'sans-serif'],
                    },
                    borderRadius: {
                        '8': '8px',
                    }
                }
            }
        }
    </script>
    <style data-purpose="custom-styling">
        /* Custom Global Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        ::-webkit-scrollbar-track {
            background: var(--color-bg); 
        }
        ::-webkit-scrollbar-thumb {
            background: var(--color-primary); 
            border-radius: 8px;
            border: 2px solid var(--color-bg);
        }
        .dark ::-webkit-scrollbar-thumb {
            background: var(--color-text-muted);
        }
        ::-webkit-scrollbar-thumb:hover, .dark ::-webkit-scrollbar-thumb:hover {
            background: var(--color-secondary); 
        }

        /* Transition for theme switching */
        body {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Decorative elements */
        .blob-bg {
            background: radial-gradient(circle, rgba(57, 255, 122, 0.10) 0%, rgba(10, 13, 10, 0) 70%);
            filter: blur(40px);
        }

        .custom-shadow {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .dark .custom-shadow {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        }

        .nav-link {
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #74A83C;
        }

        .dark .nav-link:hover {
            color: #39FF7A;
        }

        /* Fxology-style glow text */
        .dark .glow-text {
            text-shadow: 0 0 24px rgba(57, 255, 122, 0.35);
        }

        /* Hide scrollbar for horizontal scrolling containers */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => console.log('ServiceWorker registration successful'))
                    .catch(err => console.log('ServiceWorker registration failed: ', err));
            });
        }
        
        // Mobile to Desktop Transition
        function checkViewport() {
            if (window.innerWidth > 768) {
                if (window.location.pathname.includes('/mobile/')) {
                    window.location.href = window.location.href.replace('/mobile/', '/desktop/');
                }
            }
        }
        window.addEventListener('resize', checkViewport);
        checkViewport();
    </script>
    <style>
        #preloader {
            display: none;
        }
        .preloader-active #preloader {
            display: flex !important;
        }
        .preloader-active {
            overflow: hidden !important;
        }
    </style>
    <script>
        const isHomePage = window.location.pathname.endsWith('index.php') || 
                           window.location.pathname.endsWith('/') || 
                           window.location.pathname.endsWith('/desktop/') || 
                           window.location.pathname.endsWith('/mobile/');
        const showPreloader = isHomePage && !sessionStorage.getItem('preloaderPlayed');
        if (showPreloader) {
            document.documentElement.classList.add('preloader-active');
        }
    </script>
</head>

<body class="overflow-x-hidden bg-white text-slate-800 dark:bg-surface dark:text-white font-sans antialiased">
    <!-- Preloader Screen -->
    <div id="preloader" class="fixed inset-0 z-[100000] flex items-center justify-center bg-white transition-opacity duration-700 ease-in-out">
        <video id="preloader-video" class="max-w-[280px] max-h-[280px] md:max-w-[360px] md:max-h-[360px] w-full h-auto object-contain" src="../videos/preloader.mp4" autoplay muted playsinline></video>
    </div>
    <script>
        if (typeof showPreloader !== 'undefined' && showPreloader) {
            const preloader = document.getElementById('preloader');
            const video = document.getElementById('preloader-video');
            
            const fadeOutPreloader = () => {
                preloader.classList.add('opacity-0');
                document.documentElement.classList.remove('preloader-active');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 700);
                sessionStorage.setItem('preloaderPlayed', 'true');
            };

            video.onended = fadeOutPreloader;
            
            // Safety net: 6 seconds max
            setTimeout(fadeOutPreloader, 6000);
        }
    </script>

    <!-- Theme Transition Overlay -->
    <div x-show="isTransitioning" x-transition.opacity.duration.100ms
        class="fixed inset-0 bg-[#0A0D0A] z-[9999] pointer-events-none" style="display: none;"></div>

    <!-- BEGIN: MainHeader -->
    <header x-data="{ drawerOpen: false }"
        class="fixed top-0 w-full z-50 bg-white/90 dark:bg-[#0A0D0A]/40 backdrop-blur-md border-b border-gray-100 dark:border-border transition-colors duration-300"
        data-purpose="header">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo (Left) -->
            <a href="index.php" class="flex items-center" data-purpose="logo">
                <!-- We should invert the logo in dark mode if it's black -->
                <img src="../images/kristen_logo.png" alt="Kristen Technologies Logo"
                    class="h-12 w-auto transition-all " />
            </a>

            <!-- Navigation (Center) -->
            <nav
                class="hidden md:flex items-center gap-8 text-sm uppercase tracking-wider font-semibold text-brandNavy dark:text-white transition-colors">
                <a class="nav-link hover:text-brandGreen dark:hover:text-[#39FF7A] transition-colors"
                    href="index.php">Home</a>
                <a class="nav-link hover:text-brandGreen dark:hover:text-[#39FF7A] transition-colors"
                    href="about.php">About</a>
                <a class="nav-link hover:text-brandGreen dark:hover:text-[#39FF7A] transition-colors"
                    href="services.php">Services</a>
                <a class="nav-link hover:text-brandGreen dark:hover:text-[#39FF7A] transition-colors"
                    href="careers.php">Careers</a>
                <a class="nav-link hover:text-brandGreen dark:hover:text-[#39FF7A] transition-colors"
                    href="contact.php">Contact</a>
                <a class="nav-link hover:text-brandGreen dark:hover:text-[#39FF7A] transition-colors"
                    href="https://mail.kristenbytes.com">Employee Login</a>
            </nav>

            <!-- Theme Toggle & CTA (Right) -->
            <div class="flex items-center gap-4">
                <a href="contact.php"
                    class="hidden md:flex bg-[#0B3D91] dark:bg-white text-white dark:text-[#0A0D0A] px-6 py-2.5 rounded-full font-bold items-center gap-2 hover:opacity-90 transition-all text-sm shadow-sm">
                    Get Started <span class="text-xs font-bold">&#8599;</span>
                </a>
            
                <!-- Mobile Menu Button -->
                <button @click="drawerOpen = true" class="md:hidden p-2 text-gray-800 dark:text-white focus:outline-none">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                            <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                            <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                            <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
                        </svg>
                </button>
            </div>
            
            
            <!-- Mobile Slide Drawer -->
            <template x-teleport="body">
            <div x-show="drawerOpen" style="display: none;" class="fixed inset-0 z-[100] md:hidden">
                <!-- Backdrop -->
                <div x-show="drawerOpen" x-transition.opacity.duration.300ms @click="drawerOpen = false" class="absolute inset-0 bg-black/60 backdrop-blur-md"></div>
                
                <!-- Drawer Content -->
                <div x-show="drawerOpen" 
                     x-transition:enter="transition ease-out duration-320"
                     x-transition:enter-start="translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition ease-in duration-320"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="translate-x-full"
                     class="absolute right-0 top-0 bottom-0 w-[300px] bg-white/95 dark:bg-[#0A0D0A]/95 shadow-2xl flex flex-col pt-16 px-5 pb-6 overflow-y-auto">
                     
                     <div class="flex justify-between items-center mb-8 border-b border-gray-100 dark:border-white/10 pb-4">
                        <!-- Favicon Icon -->
                        <img src="../icons/favicon.ico" alt="Logo" class="w-8 h-8 object-contain" />
                        <button @click="drawerOpen = false" class="text-gray-500 dark:text-gray-400 p-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                     </div>
                     
                     <!-- Clean List Menu -->
                     <nav class="flex flex-col space-y-6 mb-8 text-lg font-medium text-gray-800 dark:text-white">
                         <a href="index.php" class="flex justify-between items-center hover:text-[#39FF7A] transition-colors">
                             Home
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                         </a>
                         <a href="about.php" class="flex justify-between items-center hover:text-[#39FF7A] transition-colors">
                             About Us
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                         </a>
                         <a href="services.php" class="flex justify-between items-center hover:text-[#39FF7A] transition-colors">
                             Services
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                         </a>
                         <a href="careers.php" class="flex justify-between items-center hover:text-[#39FF7A] transition-colors">
                             Careers
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                         </a>
                         <a href="contact.php" class="flex justify-between items-center hover:text-[#39FF7A] transition-colors">
                             Contact Us
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                         </a>
                         <a href="signin.php" class="flex justify-between items-center hover:text-[#39FF7A] transition-colors">
                             Login
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                         </a>
                         <a href="signup.php" class="flex justify-between items-center hover:text-[#39FF7A] transition-colors">
                             Signup
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                         </a>
                     </nav>
                     
                     <div class="mt-auto flex flex-col space-y-6">
                        <!-- Social Icons -->
                        <div class="flex justify-center gap-4 pb-2">
                            <a class="w-10 h-10 rounded-lg flex items-center justify-center transition-all bg-[#1877F2] text-white hover:opacity-80" href="http://facebook.com/kristentechnologies/" target="_blank">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg>
                            </a>
                            <a class="w-10 h-10 rounded-lg flex items-center justify-center transition-all bg-[#E4405F] text-white hover:opacity-80" href="https://www.instagram.com/kristen_bytes" target="_blank">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                            </a>
                            <a class="w-10 h-10 rounded-lg flex items-center justify-center transition-all bg-[#FF0000] text-white hover:opacity-80" href="https://www.youtube.com/channel/UCc6kv0xYyAcNfTowmsmVGMA" target="_blank">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.01 3.01 0 0 0-2.12-2.13C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.378.556a3.01 3.01 0 0 0-2.12 2.13A31.24 31.24 0 0 0 0 12a31.24 31.24 0 0 0 .502 5.814 3.01 3.01 0 0 0 2.12 2.13C4.495 20.5 12 20.5 12 20.5s7.505 0 9.378-.556a3.01 3.01 0 0 0 2.12-2.13A31.24 31.24 0 0 0 24 12a31.24 31.24 0 0 0-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>
                            </a>
                            <a class="w-10 h-10 rounded-lg flex items-center justify-center transition-all bg-[#0A66C2] text-white hover:opacity-80" href="https://www.linkedin.com/company/kristen-byte-solutions" target="_blank">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                            </a>
                        </div>
                     </div>
                </div>
            </div>
            </template>
        </div>
    </header>
    <!-- END: MainHeader -->

    <!-- Floating Theme Toggle Button -->
    <button @click="toggleTheme()" 
            class="fixed bottom-6 right-6 z-[999] w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-transform hover:scale-110 active:scale-95 focus:outline-none bg-white text-slate-800 border border-gray-200 dark:bg-[#111512] dark:text-[#39FF7A] dark:border-white/[0.08]"
            aria-label="Toggle Theme">
        <!-- Moon Icon (Visible in Light Mode to toggle to Dark) -->
        <svg x-show="!darkMode" class="w-6 h-6 text-slate-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
        </svg>
        <!-- Sun Icon (Visible in Dark Mode to toggle to Light) -->
        <svg x-show="darkMode" x-cloak class="w-6 h-6 text-[#39FF7A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
    </button>