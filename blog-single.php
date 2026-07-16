<?php
require_once 'db.php';
$slug = $_GET['slug'] ?? '';

if (empty($slug)) {
    header("Location: blog-grid.php");
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE slug = ?");
    $stmt->execute([$slug]);
    $blog = $stmt->fetch();
    
    if (!$blog) {
        header("Location: blog-grid.php");
        exit;
    }
    
    // Fetch recent posts for the sidebar
    $recentStmt = $pdo->query("SELECT title, slug, image_path FROM blog_posts WHERE slug != " . $pdo->quote($slug) . " ORDER BY published_at DESC LIMIT 3");
    $recentPosts = $recentStmt->fetchAll();
} catch (PDOException $e) {
    header("Location: blog-grid.php");
    exit;
}

$page_title = htmlspecialchars($blog['title']) . " | Kristen Byte Solutions";
$page_description = htmlspecialchars($blog['excerpt']);
require_once 'includes/header.php';
?>


    <main class="pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Content -->
                <article class="lg:w-2/3">
                    <div class="bg-white dark:bg-surface-bright rounded-3xl overflow-hidden shadow-sm border border-gray-100 dark:border-white/5 p-6 md:p-10 transition-all">
                        <img src="<?= htmlspecialchars($blog['image_path'] ?? 'images/blog-big.png') ?>" loading="lazy" decoding="async" alt="Blog Main Image" class="w-full rounded-2xl mb-8 object-cover aspect-video" />

                        <h1 class="text-3xl md:text-4xl font-extrabold text-brandNavy dark:text-white font-serif mb-6 leading-tight">
                            <?= htmlspecialchars($blog['title']) ?>
                        </h1>

                        <div class="flex flex-wrap gap-4 text-sm font-semibold text-gray-500 dark:text-gray-400 mb-8 pb-8 border-b border-gray-100 dark:border-white/10 uppercase tracking-wider">
                            <span class="flex items-center gap-1.5 text-brandNavy dark:text-gray-300">
                                <span class="text-emerald-500">Author:</span> <?= htmlspecialchars($blog['author']) ?>
                            </span>
                            <span class="flex items-center gap-1.5 text-brandNavy dark:text-gray-300">
                                <span class="text-emerald-500">Published On:</span> <?= date('F j, Y', strtotime($blog['published_at'])) ?>
                            </span>
                            <span class="flex items-center gap-1.5 text-brandNavy dark:text-gray-300">
                                <span class="text-emerald-500">Category:</span> <?= htmlspecialchars($blog['category']) ?>
                            </span>
                        </div>

                        <div class="prose prose-lg dark:prose-invert max-w-none prose-emerald">
                            <?= nl2br(htmlspecialchars($blog['content'])) ?>
                        </div>

                        <!-- Share Section -->
                        <div class="flex items-center gap-4 pt-8 border-t border-gray-100 dark:border-white/10 mt-8">
                            <span class="font-bold text-brandNavy dark:text-white">Share On:</span>
                            <div class="flex gap-2">
                                <a href="#" class="w-10 h-10 rounded-full bg-brandNavy dark:bg-surface flex items-center justify-center text-white hover:bg-emerald-500 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-brandNavy dark:bg-surface flex items-center justify-center text-white hover:bg-emerald-500 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path></svg>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-brandNavy dark:bg-surface flex items-center justify-center text-white hover:bg-emerald-500 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!-- Sidebar -->
                <aside class="lg:w-1/3 space-y-8">
                    <!-- Search Widget -->
                    <div class="bg-gray-50 dark:bg-surface-bright rounded-3xl p-8 shadow-sm border border-gray-100 dark:border-white/5 transition-all">
                        <form action="#" class="relative">
                            <input type="text" placeholder="Search Here..." class="w-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 rounded-full px-6 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:text-white transition-all shadow-sm" />
                            <button type="submit" class="absolute right-2 top-1.5 w-10 h-10 bg-brandNavy dark:bg-emerald-accent rounded-full flex items-center justify-center text-white dark:text-[#051310] hover:scale-105 transition-transform">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </button>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-gray-50 dark:bg-surface-bright rounded-3xl p-8 shadow-sm border border-gray-100 dark:border-white/5 transition-all">
                        <h4 class="text-xl font-bold text-brandNavy dark:text-white mb-6 font-serif">Categories</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="block text-gray-600 dark:text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400 font-medium transition-colors">Blog</a></li>
                            <li><a href="#" class="block text-gray-600 dark:text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400 font-medium transition-colors">Events</a></li>
                            <li><a href="#" class="block text-gray-600 dark:text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400 font-medium transition-colors">Grids</a></li>
                            <li><a href="#" class="block text-gray-600 dark:text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400 font-medium transition-colors">News</a></li>
                            <li><a href="#" class="block text-gray-600 dark:text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400 font-medium transition-colors">Rounded</a></li>
                        </ul>
                    </div>

                    <!-- Related Posts Widget -->
                    <div class="bg-gray-50 dark:bg-surface-bright rounded-3xl p-8 shadow-sm border border-gray-100 dark:border-white/5 transition-all">
                        <h4 class="text-xl font-bold text-brandNavy dark:text-white mb-6 font-serif">Related Posts</h4>
                        <div class="space-y-6">
                            <?php foreach ($recentPosts as $recent): ?>
                                <div class="flex items-center gap-4 group">
                                    <img src="<?= htmlspecialchars($recent['image_path'] ?? 'images/blog-small-01.png') ?>" loading="lazy" decoding="async" alt="Blog" class="w-20 h-20 rounded-xl object-cover shrink-0" />
                                    <div>
                                        <h5 class="font-bold text-brandNavy dark:text-white leading-snug line-clamp-2">
                                            <a href="blog-single.php?slug=<?= urlencode($recent['slug']) ?>" class="group-hover:text-emerald-500 transition-colors"><?= htmlspecialchars($recent['title']) ?></a>
                                        </h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    
<?php require_once 'includes/footer.php'; ?>
