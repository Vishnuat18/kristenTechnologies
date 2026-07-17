<?php
$job_title = isset($_GET['job']) ? htmlspecialchars($_GET['job']) : 'General Application';
$page_title = "Apply for " . $job_title . " | Kristen Technologies Private Limited";
$page_description = "Apply for the " . $job_title . " position at Kristen Technologies Private Limited.";
require_once 'includes/header.php';
?>

<main class="pb-10 md:pb-16 min-h-fit pt-24">
    <div class="max-w-3xl mx-auto px-4 md:px-6">
        <div class="mb-8">
            <a href="careers.php" class="text-sm text-gray-500 dark:text-gray-400 hover:text-[#0B3D91] dark:hover:text-[#39FF7A] transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Careers
            </a>
        </div>
        
        <div class="p-5 md:p-8 md:p-6 md:p-12">
            <h1 class="text-2xl md:text-3xl font-extrabold text-[#0B3D91] dark:text-white leading-tight tracking-tight mb-2">
                Apply for <span class="text-[#22C55E] dark:text-[#39FF7A]"><?= $job_title ?></span>
            </h1>
            <p class="text-gray-600 dark:text-[#9CA39C] mb-8 text-sm md:text-base">Fill out the form below to submit your application to our hiring team.</p>
            
            <form action="../save_application.php" method="POST" enctype="multipart/form-data" class="space-y-8">
                <input type="hidden" name="job_title" value="<?= $job_title ?>">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                    <div class="relative">
                        <label class="block text-xs font-bold text-[#0A2640] dark:text-[#9CA39C] uppercase tracking-wider mb-2">Full Name *</label>
                        <input type="text" name="fullname" required class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-2 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors">
                    </div>
                    <div class="relative">
                        <label class="block text-xs font-bold text-[#0A2640] dark:text-[#9CA39C] uppercase tracking-wider mb-2">Phone Number *</label>
                        <input type="tel" name="phone" required class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-2 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors">
                    </div>
                </div>
                
                <div class="relative">
                    <label class="block text-xs font-bold text-[#0A2640] dark:text-[#9CA39C] uppercase tracking-wider mb-2">Email Address *</label>
                    <input type="email" name="email" required class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-2 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors">
                </div>

                <div class="relative">
                    <label class="block text-xs font-bold text-[#0A2640] dark:text-[#9CA39C] uppercase tracking-wider mb-2">Portfolio / LinkedIn URL</label>
                    <input type="url" name="portfolio" class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-2 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors">
                </div>
                
                <div class="relative">
                    <label class="block text-xs font-bold text-[#0A2640] dark:text-[#9CA39C] uppercase tracking-wider mb-2">Cover Letter / Message</label>
                    <textarea name="cover_letter" rows="4" class="w-full bg-transparent border-b border-gray-200 dark:border-white/[0.12] py-2 text-sm focus:outline-none focus:border-[#22C55E] dark:focus:border-[#39FF7A] text-[#0A2640] dark:text-white transition-colors resize-none"></textarea>
                </div>
                
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-4">
                    <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-auto">
                        <label class="w-full md:w-auto cursor-pointer inline-flex items-center justify-center gap-2 text-[#0A2640] dark:text-white px-4 md:px-6 py-3 font-bold text-xs uppercase tracking-wider hover:bg-gray-50 dark:hover:bg-white/[0.04] transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                            </svg>
                            Upload Resume *
                            <input type="file" name="resume" required accept=".pdf,.doc,.docx" class="hidden" onchange="document.getElementById('file-chosen').textContent = this.files[0] ? this.files[0].name : 'No file chosen'">
                        </label>
                        <span id="file-chosen" class="text-xs text-gray-400 dark:text-[#9CA39C] font-semibold">No file chosen (.pdf, .doc)</span>
                    </div>
                    
                    <button type="submit" class="w-full md:w-auto bg-[#22C55E] dark:bg-[#39FF7A] text-white dark:text-[#0A0D0A] px-10 py-3 rounded-xl font-bold text-xs uppercase tracking-wider hover:opacity-90 transition-all shadow-sm">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
