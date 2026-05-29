<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script>
        // Inline theme initialization to avoid render flash
        (function() {
            const savedTheme = localStorage.getItem('portfolio_theme');
            if (savedTheme === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 antialiased transition-colors duration-300">
    <!-- Fullscreen 3D Animated Background Canvas -->
    <canvas id="three-bg-canvas" class="fixed inset-0 -z-10 pointer-events-none opacity-60 dark:opacity-40 transition-opacity duration-300"></canvas>

    <header>
        <x-navbar />
    </header>

    <main class="flex-1 page-transition-3d">
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>