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

    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="manifest" href="manifest.json" />
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
            body.dark::before {
                content: '';
                position: fixed;
                top: 0; left: 0; width: 100vw; height: 100vh;
                background: radial-gradient(circle at 50% 0%, rgba(57, 255, 122, 0.14), transparent 55%),
                            radial-gradient(circle at 90% 30%, rgba(57, 255, 122, 0.08), transparent 45%);
                pointer-events: none;
                z-index: 0;
            }
            body.dark::after {
                content: '';
                position: fixed;
                top: 0; left: 0; width: 100vw; height: 100vh;
                opacity: 0.2;
                background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
                pointer-events: none;
                z-index: 1;
            }
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
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
    </script>
</head>

<body class="overflow-x-hidden bg-white text-slate-800 dark:bg-surface dark:text-white font-sans antialiased">
    <!-- Theme Transition Overlay -->
    <div x-show="isTransitioning" x-transition.opacity.duration.100ms
        class="fixed inset-0 bg-[#0A0D0A] z-[9999] pointer-events-none" style="display: none;"></div>
    <!-- BEGIN: MainHeader -->
    <header
        class="fixed top-0 w-full z-50 bg-white/90 dark:bg-[#0A0D0A]/40 backdrop-blur-md border-b border-gray-100 dark:border-border transition-colors duration-300"
        data-purpose="header">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo (Left) -->
            <a href="index.php" class="flex items-center" data-purpose="logo">
                <!-- We should invert the logo in dark mode if it's black -->
                <img src="images/kristen_logo.png" alt="Kristen Technologies Logo"
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
                <button @click="toggleTheme()"
                    class="relative inline-flex items-center h-8 rounded-full w-14 transition-colors duration-300 focus:outline-none"
                    :class="darkMode ? 'bg-[#131713]' : 'bg-gray-200'">
                    <span class="sr-only">Toggle Theme</span>
                    <span
                        class="inline-block w-6 h-6 transform bg-white rounded-full transition-transform duration-300 flex items-center justify-center shadow"
                        :class="darkMode ? 'translate-x-7' : 'translate-x-1'">
                        <!-- Sun Icon (Light Mode) -->
                        <svg x-show="!darkMode" class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                        <!-- Moon Icon (Dark Mode) -->
                        <svg x-show="darkMode" x-cloak class="w-4 h-4 text-[#39FF7A]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                            </path>
                        </svg>
                    </span>
                </button>
                <a href="contact.php"
                    class="hidden md:flex bg-[#0B3D91] dark:bg-white text-white dark:text-[#0A0D0A] px-6 py-2.5 rounded-full font-bold items-center gap-2 hover:opacity-90 transition-all text-sm shadow-sm">
                    Get Started <span class="text-xs font-bold">&#8599;</span>
                </a>
            </div>
        </div>
    </header>
    <!-- END: MainHeader -->