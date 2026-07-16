<?php
$page_title = "Kristen Byte Solutions";
$page_description = "";
require_once 'includes/header.php';
?>


    <main class="pb-16">
        <!-- BEGIN: AMC Hero -->
        <section class="relative w-full overflow-hidden bg-transparent transition-colors duration-300 min-h-screen flex items-center text-center" data-purpose="hero-section">
            <!-- Vector Background Graphics -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
                <!-- Soft Mesh Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#EEF5FF] via-transparent to-[#F8FAFC] dark:from-[#132c1c]/10 dark:via-transparent dark:to-[#0B3D91]/10 opacity-60"></div>
                <!-- Background Image (Light/Dark Switch) -->
                <div class="absolute inset-0 bg-cover bg-center opacity-70 dark:hidden" style="background-image: url('images/Bg/aboutLight.png');"></div>
                <div class="absolute inset-0 bg-cover bg-center opacity-40 hidden dark:block" style="background-image: url('images/Bg/aboutDark.png');"></div>
            </div>
            
            <!-- Bottom fade-out dissolves into page bg -->
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none dark:hidden" style="background: linear-gradient(to top, #FFFFFF 0%, #FFFFFF 10%, rgba(255,255,255,0.8) 40%, rgba(255,255,255,0) 100%);"></div>
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none hidden dark:block" style="background: linear-gradient(to top, #131713 0%, #131713 10%, rgba(19,23,19,0.8) 40%, rgba(19,23,19,0) 100%);"></div>
            
            <div class="max-w-4xl mx-auto px-6 pt-24 pb-12 relative z-10 flex flex-col items-center space-y-8 text-center w-full">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-brandGreen/10 border border-brandGreen/20">
                    <svg class="w-4 h-4 text-brandGreen dark:text-[#39FF7A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <span class="text-xs font-bold text-brandGreen dark:text-[#39FF7A] uppercase tracking-wider">Annual Maintenance Contract</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-brandNavy dark:text-white leading-tight transition-colors tracking-tight">
                    AMC Plans <br/>
                    Are <span class="text-brandGreen dark:text-[#39FF7A]">Available Soon</span>
                </h1>
                
                <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed transition-colors max-w-xl mx-auto">
                    We are crafting premium IT maintenance packages to keep your business running with zero downtime. Stay tuned, we will launch very soon!
                </p>

                <div class="pt-4">
                    <a href="index.php" class="inline-flex items-center gap-2 bg-[#0a2640] dark:bg-[#39FF7A] text-white dark:text-[#0A0D0A] px-8 py-3.5 rounded-full font-bold hover:scale-105 transition-all shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Back to Home
                    </a>
                </div>
            </div>
        </section>
        <!-- END: AMC Hero -->
    </main>

    
<?php require_once 'includes/footer.php'; ?>
