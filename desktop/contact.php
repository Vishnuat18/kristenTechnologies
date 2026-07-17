<?php
$page_title = "Kristen Byte Solutions";
$page_description = "";
require_once 'includes/header.php';
?>


    <main class="pb-16">
        <!-- BEGIN: Page Header -->
        <section class="relative w-full overflow-hidden bg-transparent transition-colors duration-300 min-h-screen flex items-center" data-purpose="hero-section">
            <!-- Vector Background Graphics -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 hidden md:block">
                <!-- Soft Mesh Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#EEF5FF] via-transparent to-[#F8FAFC] dark:from-[#132c1c]/10 dark:via-transparent dark:to-[#0B3D91]/10 opacity-60"></div>
                <!-- Background Image (Light/Dark Switch) -->
                <div class="absolute inset-0 bg-cover bg-center opacity-70 dark:hidden" style="background-image: url('../images/Bg/contactLight.png');"></div>
                <div class="absolute inset-0 bg-cover bg-center opacity-40 hidden dark:block" style="background-image: url('../images/Bg/contactDark.png');"></div>
            </div>

            <!-- Bottom fade-out so image dissolves into page bg (both modes) -->
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none dark:hidden" style="background: linear-gradient(to top, #FFFFFF 0%, #FFFFFF 10%, rgba(255,255,255,0.8) 40%, rgba(255,255,255,0) 100%);"></div>
            <div class="absolute bottom-0 left-0 right-0 h-48 z-[1] pointer-events-none hidden dark:block" style="background: linear-gradient(to top, #131713 0%, #131713 10%, rgba(19,23,19,0.8) 40%, rgba(19,23,19,0) 100%);"></div>
            
            <div class="max-w-7xl mx-auto px-6 pt-24 pb-12 flex flex-col items-center text-center justify-center relative z-10 w-full">
                <div class="flex flex-col items-center text-center justify-center w-full">
                    <!-- Left: Text content -->
                    <div class="w-full max-w-3xl space-y-6 flex flex-col items-center text-center justify-center">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-brandNavy dark:text-white leading-tight transition-colors tracking-tight">
                            Contact <span class="text-brandGreen dark:text-[#39FF7A]">Us</span>
                        </h1>
                        <p class="text-gray-600 dark:text-[#9CA39C] max-w-2xl mx-auto text-lg leading-relaxed transition-colors font-medium">
                            We'd love to hear from you! Whether you have a question about our services, need technical support, or want a custom quote - our team is ready to help.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Page Header -->

        <!-- BEGIN: ContactSection -->
        <section class="max-w-7xl mx-auto px-6 py-20 transition-colors duration-300" data-purpose="contact-section">
            <div class="bg-gray-50 dark:bg-[#0A0D0A] border border-gray-100 dark:border-white/[0.08] rounded-[2.5rem] p-8 md:p-12 transition-all shadow-sm">
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-2 gap-16">
                    <!-- Info Column -->
                    <div class="space-y-10 lg:pr-8">
                        <div class="text-left space-y-4 mb-8">
                            <h2 class="text-4xl font-bold text-brandNavy dark:text-white transition-colors tracking-tight">Let's Stay <span class="text-brandGreen dark:text-[#39FF7A]">Connected</span></h2>
                            <p class="text-gray-500 dark:text-[#9CA39C] text-base transition-colors leading-relaxed">Have any computer maintenance emergency or query?<br />We are always here to assist you!</p>
                        </div>

                        <div class="flex items-start gap-6 group cursor-pointer">
                            <div class="w-14 h-14 shrink-0 bg-white dark:bg-[#111512] rounded-2xl flex items-center justify-center text-brandGreen dark:text-[#39FF7A] shadow-sm border border-gray-100 dark:border-white/[0.08] transition-colors group-hover:scale-110 duration-300 premium-card">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 dark:text-gray-500 mb-1 transition-colors uppercase tracking-wider">Head Address:</p>
                                <p class="text-base font-bold text-brandNavy dark:text-white transition-colors">Salem, Tamil Nadu.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group cursor-pointer">
                            <div class="w-14 h-14 shrink-0 bg-white dark:bg-[#111512] rounded-2xl flex items-center justify-center text-brandGreen dark:text-[#39FF7A] shadow-sm border border-gray-100 dark:border-white/[0.08] transition-colors group-hover:scale-110 duration-300 premium-card">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 dark:text-gray-500 mb-1 transition-colors uppercase tracking-wider">Regd. Office:</p>
                                <p class="text-base font-bold text-brandNavy dark:text-white transition-colors">Kristen Tech Solutions<br/>Private Limited</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group cursor-pointer">
                            <div class="w-14 h-14 shrink-0 bg-white dark:bg-[#111512] rounded-2xl flex items-center justify-center text-brandGreen dark:text-[#39FF7A] shadow-sm border border-gray-100 dark:border-white/[0.08] transition-colors group-hover:scale-110 duration-300 premium-card">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 dark:text-gray-500 mb-1 transition-colors uppercase tracking-wider">Phone & Email:</p>
                                <p class="text-base font-bold text-brandNavy dark:text-white transition-colors">+91 73417 27736</p>
                                <p class="text-base font-bold text-brandNavy dark:text-white transition-colors">2021kristentech@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div>
                        <form action="/save_contact" method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="sr-only" for="fullname">Full Name</label>
                                    <input required name="fullname" id="fullname"
                                        class="w-full bg-white dark:bg-[#111512] border border-gray-200 dark:border-white/10 rounded-2xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandGreen dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandGreen dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm premium-card"
                                        placeholder="Full Name" type="text" />
                                </div>
                                <div>
                                    <label class="sr-only" for="email">Email Address</label>
                                    <input required name="email" id="email"
                                        class="w-full bg-white dark:bg-[#111512] border border-gray-200 dark:border-white/10 rounded-2xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandGreen dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandGreen dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm premium-card"
                                        placeholder="Email Address" type="email" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="sr-only" for="contactno">Phone Number</label>
                                    <input required name="contactno" id="contactno"
                                        class="w-full bg-white dark:bg-[#111512] border border-gray-200 dark:border-white/10 rounded-2xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandGreen dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandGreen dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm premium-card"
                                        placeholder="Phone Number" type="tel" />
                                </div>
                                <div>
                                    <label class="sr-only" for="subject">Subject</label>
                                    <input required name="subject" id="subject"
                                        class="w-full bg-white dark:bg-[#111512] border border-gray-200 dark:border-white/10 rounded-2xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandGreen dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandGreen dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm premium-card"
                                        placeholder="Subject" type="text" />
                                </div>
                            </div>
                            <div>
                                <label class="sr-only" for="message">Message</label>
                                <textarea required name="message" id="message"
                                    class="w-full bg-white dark:bg-[#111512] border border-gray-200 dark:border-white/10 rounded-2xl p-4 text-sm text-brandNavy dark:text-white focus:border-brandGreen dark:focus:border-[#39FF7A] focus:ring-1 focus:ring-brandGreen dark:focus:ring-[#39FF7A] outline-none transition-all shadow-sm resize-none premium-card"
                                    placeholder="Message" rows="6"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-brandNavy text-white py-4 rounded-2xl font-bold flex justify-center items-center gap-2 hover:bg-[#0A2640] transition-all shadow-md dark:bg-[#39FF7A] dark:text-[#0A0D0A] dark:hover:bg-[#2ed663]">
                                Send Message
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: ContactSection -->

        <!-- BEGIN: Office Location -->
        <section class="max-w-7xl mx-auto px-6 pb-20 transition-colors duration-300">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="rounded-[2.5rem] overflow-hidden border border-gray-100 dark:border-white/[0.08] shadow-sm relative w-full h-[250px] lg:h-[400px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.4589255280907!2d78.156543!3d11.662134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf024bf8b19bd%3A0xf63989c02ff3e41b!2sKristen%20Technologies!5e0!3m2!1sen!2sin!4v1716382627492!5m2!1sen!2sin" 
                        class="w-full h-full border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-brandGreen/10 border border-brandGreen/20">
                        <svg class="w-4 h-4 text-brandGreen dark:text-[#39FF7A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="text-xs font-bold text-brandGreen dark:text-[#39FF7A] uppercase tracking-wider">Our Location</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-brandNavy dark:text-white transition-colors tracking-tight">Visit Our Office</h2>
                    <p class="text-gray-600 dark:text-[#9CA39C] text-lg leading-relaxed transition-colors">
                        We are located in Salem, Tamil Nadu. Feel free to visit us during business hours.
                    </p>
                    
                    <div class="space-y-4 pt-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-gray-50 dark:bg-[#111512] flex items-center justify-center text-brandGreen dark:text-[#39FF7A] shadow-sm border border-gray-100 dark:border-white/[0.08]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <p class="text-brandNavy dark:text-white font-bold">Mon - Sat: 09:00 AM - 06:00 PM</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-gray-50 dark:bg-[#111512] flex items-center justify-center text-brandGreen dark:text-[#39FF7A] shadow-sm border border-gray-100 dark:border-white/[0.08]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <p class="text-brandNavy dark:text-white font-bold">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Office Location -->

        <!-- BEGIN: Call To Action -->
        <section class="max-w-7xl mx-auto px-6 pb-20 transition-colors duration-300">
            <div class="bg-[#0A2640] dark:bg-[#0D1710] p-8 md:p-12 rounded-3xl flex flex-col md:flex-row justify-between items-center gap-8 relative overflow-hidden transition-colors shadow-2xl dark:border dark:border-white/[0.08]">
                
                <!-- Background Graphics (Waves & Glow) -->
                <div class="absolute inset-0 pointer-events-none opacity-20 dark:opacity-40"
                    style="background-image: radial-gradient(circle at 80% 50%, rgba(57,255,122,0.18) 0%, transparent 60%);">
                </div>
                <div class="absolute inset-0 pointer-events-none opacity-10"
                    style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.05) 10px, rgba(255,255,255,0.05) 20px);">
                </div>
                <div class="absolute -right-20 top-0 w-96 h-96 bg-white/5 dark:bg-[#39FF7A]/10 rounded-full blur-3xl transition-colors pointer-events-none"></div>
                <div class="absolute -left-20 bottom-0 w-96 h-96 bg-white/5 dark:bg-[#39FF7A]/10 rounded-full blur-3xl transition-colors pointer-events-none"></div>

                <div class="flex flex-col md:flex-row items-center gap-8 relative z-10 w-full">
                    <div class="w-32 h-32 md:w-40 md:h-40 shrink-0 rounded-[2rem] overflow-hidden">
                        <img src="../images/contact/3d_headphones.png" alt="Headphones" class="w-full h-full object-cover" />
                    </div>
                    
                    <div class="text-center md:text-left flex-1">
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-2 transition-colors">Have <span class="text-brandGreen dark:text-[#39FF7A]">Questions?</span></h3>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 transition-colors">We're Just a <span class="text-brandGreen dark:text-[#39FF7A]">Call Away!</span></h3>
                        <p class="text-gray-300 dark:text-[#9CA39C] text-sm md:text-base max-w-md transition-colors">Our support team is available to help you with any technical issues or service related inquiries.</p>
                    </div>

                    <div class="shrink-0">
                        <a href="tel:+917341727736" class="inline-flex items-center gap-2 bg-white text-brandNavy dark:bg-[#39FF7A] dark:text-[#0A0D0A] px-8 py-3.5 rounded-full text-sm font-bold hover:scale-105 transition-transform z-10 whitespace-nowrap shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Call To Action -->

    </main>

    
<?php require_once 'includes/footer.php'; ?>
