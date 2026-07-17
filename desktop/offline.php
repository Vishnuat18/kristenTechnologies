<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Offline | Kristen Byte Solutions</title>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #F8FAFC;
            color: #111827;
        }
        /* Header Skeleton */
        .header-skeleton {
            height: 72px;
            background: white;
            border-bottom: 1px solid #E2E8F0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
        }
        .header-logo, .header-nav {
            background: #E2E8F0;
            height: 32px;
            border-radius: 4px;
            animation: pulse 1.5s infinite;
        }
        .header-logo { width: 120px; }
        .header-nav { width: 300px; display: none; }
        @media(min-width: 768px) { .header-nav { display: block; } }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 24px;
            text-align: center;
        }
        
        /* Offline Message */
        .offline-message {
            padding: 40px 20px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            margin-bottom: 40px;
        }
        .offline-message h1 { color: #0B3D91; margin-top: 0; }
        .offline-message p { color: #64748B; font-size: 1.1rem; }

        /* Skeleton Grid */
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }
        @media(min-width: 768px) { .grid { grid-template-columns: repeat(3, 1fr); } }
        
        .card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
        }
        
        .skel-img, .skel-title, .skel-text {
            background: #E2E8F0;
            border-radius: 8px;
            animation: pulse 1.5s infinite;
        }
        .skel-img { height: 160px; margin-bottom: 16px; }
        .skel-title { height: 24px; width: 70%; margin-bottom: 12px; }
        .skel-text { height: 12px; margin-bottom: 8px; }
        .skel-text:last-child { width: 80%; }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .5; }
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            body { background-color: #131713; color: #F5F5F0; }
            .header-skeleton { background-color: #0A0D0A; border-color: #1a1a1a; }
            .header-logo, .header-nav, .skel-img, .skel-title, .skel-text { background: #1a1a1a; }
            .offline-message, .card { background: #111512; }
            .offline-message h1 { color: #39FF7A; }
            .offline-message p { color: #9CA39C; }
        }
    </style>
</head>
<body>
    <!-- Header Skeleton -->
    <header class="header-skeleton">
        <div class="header-logo"></div>
        <div class="header-nav"></div>
    </header>

    <main class="container">
        <!-- Offline Message -->
        <div class="offline-message">
            <h1>You are offline</h1>
            <p>Please check your internet connection. We will reconnect you as soon as possible.</p>
        </div>

        <!-- Skeleton Grid Layout mimicking content -->
        <div class="grid">
            <div class="card">
                <div class="skel-img"></div>
                <div class="skel-title"></div>
                <div class="skel-text"></div>
                <div class="skel-text"></div>
            </div>
            <div class="card">
                <div class="skel-img"></div>
                <div class="skel-title"></div>
                <div class="skel-text"></div>
                <div class="skel-text"></div>
            </div>
            <div class="card">
                <div class="skel-img"></div>
                <div class="skel-title"></div>
                <div class="skel-text"></div>
                <div class="skel-text"></div>
            </div>
        </div>
    </main>
    
    <script>
        // Check if online and reload
        window.addEventListener('online', () => {
            window.location.reload();
        });
    </script>
</body>
</html>
