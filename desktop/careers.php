<?php
$page_title = "Careers | Kristen Byte Solutions";
$page_description = "Join Kristen Technologies. Openings for IT support executive, service engineer, CCTV technician, and network engineers in Salem.";
require_once 'includes/header.php';
require_once '../db.php';

// Fetch active jobs
try {
    $stmt = $pdo->query("SELECT * FROM jobs WHERE is_active = TRUE ORDER BY id DESC");
    $jobs = $stmt->fetchAll();
} catch (PDOException $e) {
    $jobs = [];
}
?>


    <main class="pb-16">
        
        <!-- BEGIN: Careers Hero -->
        <section class="relative w-full overflow-hidden bg-transparent transition-colors duration-300 min-h-screen flex items-center" data-purpose="hero-section">
            <!-- Vector Background Graphics -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 hidden md:block">
                <!-- Soft Mesh Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#EEF5FF] via-transparent to-[#F8FAFC] dark:from-[#132c1c]/10 dark:via-transparent dark:to-[#0B3D91]/10 opacity-60"></div>
                <!-- Background Image (Light/Dark Switch) -->
                <div class="absolute inset-0 bg-cover bg-center opacity-70 dark:hidden" style="background-image: url('../images/Bg/careerLight.png');"></div>
                <div class="absolute inset-0 bg-cover bg-center opacity-40 hidden dark:block" style="background-image: url('../images/Bg/careerDark.png');"></div>
            </div>

            <!-- Bottom fade-out so image dissolves into page bg (both modes) -->
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none dark:hidden" style="background: linear-gradient(to top, #FFFFFF 0%, #FFFFFF 10%, rgba(255,255,255,0.8) 40%, rgba(255,255,255,0) 100%);"></div>
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none hidden dark:block" style="background: linear-gradient(to top, #131713 0%, #131713 10%, rgba(19,23,19,0.8) 40%, rgba(19,23,19,0) 100%);"></div>

            <div class="max-w-4xl mx-auto px-8 md:px-12 pt-24 pb-12 relative z-10 flex flex-col items-center text-center justify-center w-full">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#0B3D91] dark:text-white leading-tight tracking-tight mb-6">
                    Careers at <span class="text-[#22C55E] dark:text-[#39FF7A]">Kristen Technologies</span>
                </h1>
                <p class="text-gray-600 dark:text-[#9CA39C] text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                    Join our team and help shape the future of local IT services. We are looking for passionate and talented individuals to join us.
                </p>
            </div>
        </section>
        
        <!-- BEGIN: Why Work With Us -->
        <section class="max-w-6xl mx-auto px-8 md:px-12 mb-24 relative z-10">
            <div class="text-center mb-12">
                <span class="text-xs font-bold tracking-widest text-[#22C55E] dark:text-[#39FF7A] uppercase">We work hard, we play hard</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#0B3D91] dark:text-white mt-2">
                    Work With <span class="text-[#22C55E] dark:text-[#39FF7A]">Us</span>
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1 -->
                <div class="flex flex-col items-center text-center p-8 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/[0.06] shadow-sm hover:shadow-xl dark:hover:shadow-none hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A] mb-6">
                        <!-- Briefcase Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-[#0B3D91] dark:text-white text-base mb-2">Real Projects</h3>
                    <p class="text-xs text-gray-500 dark:text-[#9CA39C] leading-relaxed">Challenging real-world projects that make a difference.</p>
                </div>

                <!-- Card 2 -->
                <div class="flex flex-col items-center text-center p-8 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/[0.06] shadow-sm hover:shadow-xl dark:hover:shadow-none hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A] mb-6">
                        <!-- Group Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-[#0B3D91] dark:text-white text-base mb-2">Great Culture</h3>
                    <p class="text-xs text-gray-500 dark:text-[#9CA39C] leading-relaxed">A collaborative and inclusive culture where ideas thrive.</p>
                </div>

                <!-- Card 3 -->
                <div class="flex flex-col items-center text-center p-8 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/[0.06] shadow-sm hover:shadow-xl dark:hover:shadow-none hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-amber-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A] mb-6">
                        <!-- Book Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-[#0B3D91] dark:text-white text-base mb-2">Continuous Learning</h3>
                    <p class="text-xs text-gray-500 dark:text-[#9CA39C] leading-relaxed">Stay ahead of the curve with continuous learning and growth.</p>
                </div>

                <!-- Card 4 -->
                <div class="flex flex-col items-center text-center p-8 bg-white dark:bg-[#111512] rounded-3xl border border-gray-100 dark:border-white/[0.06] shadow-sm hover:shadow-xl dark:hover:shadow-none hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-purple-50 dark:bg-white/[0.04] flex items-center justify-center text-[#22C55E] dark:text-[#39FF7A] mb-6">
                        <!-- Chart Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-[#0B3D91] dark:text-white text-base mb-2">Career Growth</h3>
                    <p class="text-xs text-gray-500 dark:text-[#9CA39C] leading-relaxed">Clear career development opportunities and mentorship.</p>
                </div>

            </div>
        </section>
        
        <!-- BEGIN: Career Openings -->
        <section class="max-w-6xl mx-auto px-8 md:px-12 mb-24 relative z-10" data-purpose="openings-section">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16 items-start">
                
                <!-- Left: Open Positions (2 columns wide, scrolls normally) -->
                <div class="lg:col-span-2 space-y-6">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white">
                            Begin Your <span class="text-[#22C55E] dark:text-[#39FF7A]">Career</span> With Us
                        </h2>
                        <p class="text-gray-600 dark:text-[#9CA39C] text-sm md:text-base mt-3 leading-relaxed">
                            We are looking for passionate individuals to join our team. Explore our open positions and find the role that fits your skills and ambitions.
                        </p>
                    </div>
                    
                    <!-- Jobs list (strictly underlines, no boxed container) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
                        <?php if (empty($jobs)): ?>
                            <p class="text-gray-500 py-4">No open positions currently available. Please check back later!</p>
                        <?php else: ?>
                            <?php foreach ($jobs as $job): ?>
                                <!-- Job -->
                                <div class="group flex flex-col justify-between p-6 border border-gray-150 dark:border-white/[0.08] rounded-2xl bg-white dark:bg-[#111512] shadow-sm hover:shadow-md transition-all duration-300">
                                    <div class="mb-4">
                                        <h3 class="font-extrabold text-[#0B3D91] dark:text-white text-base md:text-lg group-hover:text-[#22C55E] dark:group-hover:text-[#39FF7A] transition-colors"><?= htmlspecialchars($job['title']) ?></h3>
                                        <p class="text-xs text-gray-500 dark:text-[#9CA39C] mt-1"><?= htmlspecialchars($job['location']) ?> • <?= htmlspecialchars($job['type']) ?></p>
                                    </div>
                                    <div class="flex justify-end">
                                    <button type="button" @click.prevent="isApplyModalOpen = true; applyJobTitle = '<?= htmlspecialchars($job['title'], ENT_QUOTES) ?>'" class="w-10 h-10 rounded-full border border-gray-200 dark:border-white/[0.08] bg-white dark:bg-[#111512] flex items-center justify-center text-gray-700 dark:text-gray-300 group-hover:text-white dark:group-hover:text-[#0A0D0A] group-hover:bg-[#22C55E] dark:group-hover:bg-[#39FF7A] group-hover:border-[#22C55E] dark:group-hover:border-[#39FF7A] shadow-sm hover:scale-105 transition-all duration-300 cursor-pointer">
                                        <!-- Up-Right Arrow -->
                                        <svg class="w-4 h-4 transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                        </svg>
                                    </button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Right: Reach Us Sidecard (Sticky to align with scroll animation) -->
                <div class="lg:col-span-1 lg:sticky lg:top-32">
                    <div class="p-8 bg-gray-50 dark:bg-[#111512] border border-gray-100 dark:border-white/[0.06] rounded-[32px] space-y-6 shadow-sm">
                        <h3 class="font-extrabold text-[#0B3D91] dark:text-white text-lg tracking-tight">REACH US</h3>
                        <p class="text-xs text-gray-500 dark:text-[#9CA39C] leading-relaxed">
                            Reach out to our hiring team directly if you have any specific inquiries about the available roles.
                        </p>
                        
                        <!-- Greyscale Recruitment Image -->
                        <div class="relative rounded-2xl overflow-hidden aspect-[4/3] bg-gray-200 dark:bg-white/[0.04]">
                            <img src="../images/about-02.png" alt="Hiring Team" class="w-full h-full object-cover grayscale block" / loading="lazy" decoding="async">
                        </div>
                        
                        <div class="space-y-4 pt-2">
                            <div>
                                <span class="block text-[10px] uppercase font-bold text-gray-400 dark:text-gray-500 tracking-wider">Mail Us</span>
                                <a href="mailto:careers@kristenbytes.com" class="font-extrabold text-sm text-[#0B3D91] dark:text-[#39FF7A] hover:underline transition-all">careers@kristenbytes.com</a>
                            </div>
                            
                            <!-- Social Icons -->
                            <div class="flex items-center gap-3 pt-1">
                                <a href="http://facebook.com/kristentechnologies/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-gray-300 dark:border-white/[0.08] flex items-center justify-center transition-all text-gray-500 dark:text-gray-300 hover:bg-[#1877F2] hover:border-[#1877F2] hover:text-white dark:hover:bg-[#1877F2] dark:hover:border-[#1877F2] dark:hover:text-white">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/kristen_bytes" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-gray-300 dark:border-white/[0.08] flex items-center justify-center text-gray-500 dark:text-gray-300 hover:bg-[#E4405F] hover:border-[#E4405F] hover:text-white dark:hover:bg-[#E4405F] dark:hover:border-[#E4405F] dark:hover:text-white">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <div class="pt-4 border-t border-gray-200 dark:border-white/[0.06]">
                                <a href="mailto:support@kristenbytes.com" class="font-extrabold text-xs text-gray-500 dark:text-[#9CA39C] hover:text-[#0B3D91] dark:hover:text-[#39FF7A] transition-all">support@kristenbytes.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- BEGIN: Contact Form / Doubts -->
        <section class="max-w-4xl mx-auto px-8 md:px-12 mb-24 relative z-10">
            <div class="bg-gray-50 dark:bg-white/[0.02] border border-gray-100 dark:border-white/[0.06] rounded-[32px] p-8 md:p-12 shadow-sm">
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white text-center leading-tight tracking-tight mb-12">
                    IF YOU HAVE ANY<br>DOUBTS CONTACT US
                </h2>
                
                <form action="../save_careers.php" method="POST" enctype="multipart/form-data" class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="relative">
                            <input type="text" id="name" name="name" required class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-3 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors placeholder:text-gray-400 dark:placeholder:text-[#9CA39C]/40" placeholder="Name">
                        </div>
                        <div class="relative">
                            <input type="tel" id="phone" name="phone" required class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-3 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors placeholder:text-gray-400 dark:placeholder:text-[#9CA39C]/40" placeholder="Contact Number">
                        </div>
                    </div>
                    
                    <div class="relative">
                        <input type="email" id="email" name="email" required class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-3 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors placeholder:text-gray-400 dark:placeholder:text-[#9CA39C]/40" placeholder="Email Address">
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-4">
                        <!-- Custom File Upload Button -->
                        <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-auto">
                            <label class="w-full md:w-auto cursor-pointer inline-flex items-center justify-center gap-2 bg-[#22C55E] dark:bg-[#39FF7A] text-white dark:text-[#0A0D0A] px-6 py-3 rounded-xl font-bold text-xs uppercase tracking-wider hover:opacity-90 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                </svg>
                                Upload Resume
                                <input type="file" name="resume" accept=".pdf,.doc,.docx,.jpg,.png" class="hidden" onchange="document.getElementById('file-chosen').textContent = this.files[0] ? this.files[0].name : 'No file chosen'">
                            </label>
                            <span id="file-chosen" class="text-xs text-gray-400 dark:text-[#9CA39C] font-semibold">No file chosen</span>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full md:w-auto bg-[#22C55E] dark:bg-[#39FF7A] text-white dark:text-[#0A0D0A] px-10 py-3 rounded-xl font-bold text-xs uppercase tracking-wider hover:opacity-90 transition-all">
                            Submit
                        </button>
                                    </div>
                                </div>
                    <p class="text-[10px] text-gray-400 dark:text-[#9CA39C]/60 text-center md:text-left mt-2">
                        *Upload your resume in pdf, doc, docx, jpg, or png format.
                    </p>
                </form>
            </div>
        </section>

        <!-- BEGIN: FinalCTA -->
        <section class="max-w-6xl mx-auto px-8 md:px-12 mb-24 transition-colors duration-300" data-purpose="bottom-banner">
            <div
                class="bg-[#0A2640] dark:bg-[#0D1710] p-8 md:p-12 rounded-[32px] flex flex-col md:flex-row justify-between items-center gap-8 relative overflow-hidden transition-colors shadow-2xl dark:border dark:border-white/[0.08]">

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

    </main>

    
<?php require_once 'includes/footer.php'; ?>
