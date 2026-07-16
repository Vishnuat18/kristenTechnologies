<?php
$page_title = "Blog | Kristen Byte Solutions";
$page_description = "";
require_once 'includes/header.php';
require_once 'db.php';

// Fetch blog posts
try {
    $stmt = $pdo->query("SELECT * FROM blog_posts ORDER BY published_at DESC");
    $blogs = $stmt->fetchAll();
} catch (PDOException $e) {
    $blogs = [];
}
?>


    <main class="pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-6">
            <header class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold text-brandNavy dark:text-white font-serif mb-4 tracking-tight">Latest Insights & News</h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Stay up to date with the latest trends, tips, and updates in technology, design, and our services.</p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if (empty($blogs)): ?>
                    <p class="text-gray-500 py-4 col-span-full">No blog posts found.</p>
                <?php else: ?>
                    <?php foreach ($blogs as $blog): ?>
                        <!-- Blog Item -->
                        <article class="bg-white dark:bg-surface-bright rounded-3xl overflow-hidden shadow-sm border border-gray-100 dark:border-white/5 group hover:shadow-lg transition-all duration-300">
                            <div class="relative overflow-hidden aspect-[4/3]">
                                <img src="<?= htmlspecialchars($blog['image_path'] ?? 'images/blog-default.jpg') ?>" loading="lazy" decoding="async" alt="Blog Image" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" />
                                <div class="absolute inset-0 bg-brandNavy/60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                                    <a href="blog-single.php?slug=<?= urlencode($blog['slug']) ?>" class="bg-white text-brandNavy px-6 py-2 rounded-full font-bold text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Read More</a>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 text-xs font-semibold text-gray-500 dark:text-gray-400 mb-3 uppercase tracking-wider">
                                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> <?= htmlspecialchars($blog['author']) ?></span>
                                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> <?= date('d M, Y', strtotime($blog['published_at'])) ?></span>
                                </div>
                                <h2 class="text-xl font-bold text-brandNavy dark:text-white mb-3 line-clamp-2 leading-tight">
                                    <a href="blog-single.php?slug=<?= urlencode($blog['slug']) ?>" class="hover:text-emerald-500 transition-colors"><?= htmlspecialchars($blog['title']) ?></a>
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3"><?= htmlspecialchars($blog['excerpt']) ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <nav class="flex items-center gap-2">
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-surface border border-gray-200 dark:border-white/5 text-gray-500 hover:bg-brandNavy hover:text-white hover:border-brandNavy transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                    </a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-brandNavy text-white font-semibold transition-all shadow-md">1</a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/5 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-100 dark:hover:bg-surface-bright transition-all">2</a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/5 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-100 dark:hover:bg-surface-bright transition-all">3</a>
                    <span class="w-10 h-10 flex items-center justify-center text-gray-500">...</span>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 dark:bg-surface border border-gray-200 dark:border-white/5 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-100 dark:hover:bg-surface-bright transition-all">12</a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-surface border border-gray-200 dark:border-white/5 text-gray-500 hover:bg-brandNavy hover:text-white hover:border-brandNavy transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </nav>
            </div>
        </div>
    </main>

    
<?php require_once 'includes/footer.php'; ?>
