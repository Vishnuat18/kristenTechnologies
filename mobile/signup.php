<?php
session_start();
$page_title = "Sign Up | Kristen Byte Solutions";
$page_description = "";
require_once 'includes/header.php';
?>


    <main class="pt-32 pb-24 relative overflow-hidden flex items-center justify-center min-h-fit">
        
        <!-- Abstract Background Shapes -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 opacity-30 pointer-events-none">
            <div class="absolute -bottom-[20%] -right-[10%] w-[50%] h-[50%] rounded-full bg-gradient-to-tl from-emerald-200 to-transparent blur-3xl dark:from-emerald-900/30"></div>
            <div class="absolute top-[10%] -left-[10%] w-[60%] h-[60%] rounded-full bg-gradient-to-br from-emerald-100 to-transparent blur-3xl dark:from-emerald-800/20"></div>
        </div>

        <div class="w-full max-w-md mx-auto px-6 relative z-10">
            <div class="bg-white dark:bg-surface-bright rounded-[2rem] p-8 md:p-10 shadow-2xl border border-gray-100 dark:border-white/5 transition-all">
                
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-extrabold text-brandNavy dark:text-white font-serif mb-3 tracking-tight">Create an Account</h2>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Join us and start your journey</p>
                </div>

                <!-- Social Login -->
                <div class="mb-8">
                    <p class="text-center text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-5">Sign up with Social Media</p>
                    <div class="grid grid-cols-3 gap-4">
                        <!-- Google -->
                        <button class="w-full h-12 flex items-center justify-center rounded-xl bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/10 hover:bg-gray-100 dark:hover:bg-surface-bright transition-all group">
                            <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform group-hover:scale-110 transition-transform">
                                <path d="M22.0001 11.2439C22.0134 10.4877 21.9338 9.73268 21.7629 8.99512H11.2246V13.0773H17.4105C17.2933 13.793 17.0296 14.4782 16.6352 15.0915C16.2409 15.7048 15.724 16.2336 15.1158 16.6461L15.0942 16.7828L18.4264 19.3125L18.6571 19.3351C20.7772 17.4162 21.9997 14.5928 21.9997 11.2439" fill="#4285F4"/>
                                <path d="M11.2245 22C14.255 22 16.7992 21.0222 18.6577 19.3355L15.1156 16.6465C14.1679 17.2945 12.8958 17.7467 11.2245 17.7467C9.80508 17.7386 8.42433 17.2926 7.27814 16.4721C6.13195 15.6516 5.27851 14.4982 4.83892 13.1755L4.70737 13.1865L1.24255 15.8143L1.19727 15.9377C2.13043 17.7603 3.56252 19.2925 5.33341 20.3631C7.10429 21.4338 9.14416 22.0005 11.2249 22" fill="#34A853"/>
                                <path d="M4.83889 13.1756C4.59338 12.4754 4.46669 11.7405 4.46388 11.0001C4.4684 10.2609 4.59041 9.52697 4.82552 8.82462L4.81927 8.6788L1.31196 6.00879L1.19724 6.06226C0.410039 7.59392 0 9.28503 0 11C0 12.715 0.410039 14.4061 1.19724 15.9377L4.83889 13.1756" fill="#FBBC05"/>
                                <path d="M11.2249 4.25337C12.8333 4.22889 14.3888 4.8159 15.565 5.89121L18.7329 2.86003C16.7011 0.992106 14.0106 -0.0328008 11.2249 3.27798e-05C9.14418 -0.000452376 7.10433 0.566279 5.33345 1.63686C3.56256 2.70743 2.13046 4.23965 1.19727 6.06218L4.82684 8.82455C5.27077 7.50213 6.12703 6.34962 7.27491 5.5295C8.4228 4.70938 9.80439 4.26302 11.2249 4.25337" fill="#EB4335"/>
                            </svg>
                        </button>
                        <!-- Twitter -->
                        <button class="w-full h-12 flex items-center justify-center rounded-xl bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/10 hover:bg-gray-100 dark:hover:bg-surface-bright transition-all group">
                            <svg width="20" height="16" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform group-hover:scale-110 transition-transform">
                                <path d="M22.1506 2.11765C21.3353 2.48824 20.4565 2.73176 19.5459 2.84824C20.4776 2.28706 21.1976 1.39765 21.5365 0.328235C20.6576 0.857647 19.6835 1.22824 18.6565 1.44C17.82 0.529412 16.6447 0 15.3106 0C12.8224 0 10.7894 2.03294 10.7894 4.54235C10.7894 4.90235 10.8318 5.25177 10.9059 5.58C7.13647 5.38941 3.78 3.57882 1.54588 0.836471C1.15412 1.50353 0.931765 2.28706 0.931765 3.11294C0.931765 4.69059 1.72588 6.08824 2.95412 6.88235C2.20235 6.88235 1.50353 6.67059 0.889412 6.35294C0.889412 6.35294 0.889412 6.35294 0.889412 6.38471C0.889412 8.58706 2.45647 10.4294 4.53176 10.8424C4.15059 10.9482 3.74823 11.0012 3.33529 11.0012C3.04941 11.0012 2.76353 10.9694 2.48823 10.9165C3.06 12.7059 4.72235 14.04 6.72353 14.0718C5.17765 15.3 3.21882 16.02 1.08 16.02C0.72 16.02 0.36 15.9988 0 15.9565C2.01176 17.2482 4.4047 18 6.96706 18C15.3106 18 19.8953 11.0753 19.8953 5.07176C19.8953 4.87059 19.8953 4.68 19.8847 4.47882C20.7741 3.84353 21.5365 3.03882 22.1506 2.11765Z" fill="#00AFED"/>
                            </svg>
                        </button>
                        <!-- Facebook -->
                        <button class="w-full h-12 flex items-center justify-center rounded-xl bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/10 hover:bg-gray-100 dark:hover:bg-surface-bright transition-all group">
                            <svg width="10" height="20" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform group-hover:scale-110 transition-transform">
                                <path d="M7.7 12.65H10.45L11.55 8.25H7.7V6.05C7.7 4.917 7.7 3.85 9.9 3.85H11.55V0.154C11.1914 0.1067 9.8373 0 8.4073 0C5.4208 0 3.3 1.8227 3.3 5.17V8.25H0V12.65H3.3V22H7.7V12.65Z" fill="#1877F2"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="relative flex items-center justify-center mb-8">
                    <span class="absolute w-full h-[1px] bg-gray-200 dark:bg-white/10"></span>
                    <span class="relative bg-white dark:bg-surface-bright px-4 text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider">Or sign up with email</span>
                </div>

                <!-- Session Messages -->
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline"><?= htmlspecialchars($_SESSION['error']) ?></span>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline"><?= htmlspecialchars($_SESSION['success']) ?></span>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>

                <!-- Form -->
                <form action="register_action.php" method="POST" class="space-y-5">
                    <div>
                        <label for="fullname" class="block text-sm font-semibold text-brandNavy dark:text-gray-300 mb-2">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Devid Wonder" class="w-full bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/10 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:text-white transition-all shadow-inner" required />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-brandNavy dark:text-gray-300 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="example@domain.com" class="w-full bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/10 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:text-white transition-all shadow-inner" required />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-brandNavy dark:text-gray-300 mb-2">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••••••" class="w-full bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/10 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:text-white transition-all shadow-inner" required />
                    </div>

                    <button type="submit" class="w-full bg-brandNavy dark:bg-emerald-accent text-white dark:text-[#051310] py-4 rounded-xl font-bold text-sm uppercase tracking-wider hover:opacity-90 hover:scale-[1.02] active:scale-[0.98] transition-all shadow-lg mt-4">
                        Sign Up
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
                    Already have an account? 
                    <a href="signin.php" class="text-brandNavy dark:text-emerald-400 font-bold hover:underline underline-offset-4">Sign In</a>
                </p>

            </div>
        </div>
    </main>

    
<?php require_once 'includes/footer.php'; ?>
