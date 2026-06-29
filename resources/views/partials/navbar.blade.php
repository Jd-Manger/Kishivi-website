<!-- Shared Navbar -->
<!--
  Mobile navbar refactor notes:
  1) Uses Tailwind responsive classes with md breakpoint (>=768px desktop nav, <768px hamburger).
  2) Hamburger button is always visible on mobile via md:hidden.
  3) Mobile menu toggle is handled with explicit hidden class + aria-expanded state.
  4) High z-index keeps navbar and menu above hero/media content.
  5) Overlay/panel structure prevents overlap glitches with underlying sections/images.
-->
<script>
    // Ensure required assets are loaded once (safe across pages).
    if (!document.querySelector('link[data-job-portal-bootstrap-icons]')) {
        var bi = document.createElement('link');
        bi.rel = "stylesheet";
        bi.href = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css";
        bi.setAttribute('data-job-portal-bootstrap-icons', '1');
        document.head.appendChild(bi);
    }
    if (!document.querySelector('script[data-job-portal-tailwind]')) {
        var tw = document.createElement('script');
        tw.src = "https://cdn.tailwindcss.com";
        tw.setAttribute('data-job-portal-tailwind', '1');
        document.head.appendChild(tw);
    }
</script>

<style>
    /* Navbar visual and stacking safety above all page sections */
    #job-portal-main-navbar {
        transition: all .25s ease;
        background: linear-gradient(180deg, rgba(255,255,255,.96), rgba(255,255,255,.9));
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(15, 23, 42, .08);
        z-index: 1200;
    }

    #job-portal-main-navbar.job-portal-scrolled {
        background: #fff;
        box-shadow: 0 10px 30px -20px rgba(15, 23, 42, .35);
    }

    .job-portal-mobile-link {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        color: #0f172a;
        text-decoration: none;
    }

    .job-portal-mobile-link:hover {
        background: rgba(37, 99, 235, .08);
    }
</style>

<div id="job-portal-navbar-container" class="relative z-[1200]">
    <header id="job-portal-main-navbar" class="fixed inset-x-0 top-0">
        <nav class="container mx-auto flex items-center justify-between px-6 lg:px-10 py-3">
            <a href="{{ route('home') }}" class="flex items-center gap-3 min-w-0">
                <img src="{{ asset('Assets/logo.png') }}" alt="Kishvi Consultancy" class="h-12 w-auto object-contain shrink-0">
                <div class="leading-tight min-w-0">
                    <div class="text-lg font-bold truncate">Kishvi</div>
                    <div class="text-[10px] text-slate-400 uppercase tracking-widest font-semibold truncate">Consultancy</div>
                </div>
            </a>

            <!-- Desktop menu (shown at md and above) -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600' : 'text-slate-600' }}">Home</a>
                <a href="{{ route('about') }}" class="text-sm font-medium {{ request()->routeIs('about') ? 'text-blue-600' : 'text-slate-600' }}">About Us</a>
                <a href="{{ route('industries') }}" class="text-sm font-medium {{ request()->routeIs('industries') ? 'text-blue-600' : 'text-slate-600' }}">Industries</a>
                <a href="{{ route('contact') }}" class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-blue-600' : 'text-slate-600' }}">Contact</a>
            </div>

            <div class="hidden md:flex items-center gap-4">
                <a href="#" class="px-5 py-2.5 bg-slate-900 hover:bg-blue-600 text-white text-sm font-bold rounded-full shadow-lg">
                    Post a Job
                </a>
            </div>

            <!-- Mobile hamburger (visible below md) -->
            <button
                id="job-portal-hamburger-btn"
                type="button"
                aria-controls="job-portal-mobile-overlay"
                aria-expanded="false"
                aria-label="Open menu"
                class="md:hidden inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 bg-white text-slate-900 shadow-sm"
            >
                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </nav>
    </header>

    <!-- Mobile overlay/panel (below md only). Hidden by default. -->
    <div id="job-portal-mobile-overlay" role="dialog" aria-modal="true" aria-hidden="true" class="fixed inset-0 z-[1250] hidden md:hidden">
        <div id="job-portal-mobile-backdrop" tabindex="-1" class="absolute inset-0 bg-black/45"></div>
        <aside id="job-portal-mobile-panel" role="menu" aria-label="Mobile menu panel" class="absolute top-0 left-0 h-screen w-[90%] max-w-[380px] bg-white p-5 shadow-2xl">
            <div class="mb-4 flex items-center justify-between">
                <div class="text-lg font-bold">Menu</div>
                <button id="job-portal-close-btn" type="button" aria-label="Close menu" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-red-200 bg-white text-red-500">
                    <span aria-hidden="true" class="text-2xl leading-none">&times;</span>
                </button>
            </div>

            <nav class="mt-2 flex flex-col gap-2">
                <a href="{{ route('home') }}" class="job-portal-mobile-link">Home</a>
                <a href="{{ route('about') }}" class="job-portal-mobile-link">About Us</a>
                <a href="{{ route('industries') }}" class="job-portal-mobile-link">Industries</a>
                <a href="{{ route('contact') }}" class="job-portal-mobile-link">Contact</a>
            </nav>

            <div class="mt-6">
                <a href="#" class="block w-full rounded-xl bg-blue-600 py-3 text-center font-bold text-white shadow">
                    Post a Job
                </a>
            </div>
        </aside>
    </div>
</div>

<script>
    (function () {
        const navbar = document.getElementById('job-portal-main-navbar');
        const overlay = document.getElementById('job-portal-mobile-overlay');
        const menuButton = document.getElementById('job-portal-hamburger-btn');
        const closeButton = document.getElementById('job-portal-close-btn');
        const backdrop = document.getElementById('job-portal-mobile-backdrop');
        const panel = document.getElementById('job-portal-mobile-panel');

        const onScroll = () => {
            if (!navbar) return;
            navbar.classList.toggle('job-portal-scrolled', window.scrollY > 8);
        };

        const openMenu = () => {
            if (!overlay) return;
            overlay.classList.remove('hidden');
            overlay.setAttribute('aria-hidden', 'false');
            if (menuButton) menuButton.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        };

        const closeMenu = () => {
            if (!overlay) return;
            overlay.classList.add('hidden');
            overlay.setAttribute('aria-hidden', 'true');
            if (menuButton) menuButton.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        };

        if (menuButton) menuButton.addEventListener('click', openMenu);
        if (closeButton) closeButton.addEventListener('click', closeMenu);
        if (backdrop) backdrop.addEventListener('click', closeMenu);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeMenu();
        });

        if (panel) {
            panel.querySelectorAll('a').forEach(function (a) {
                a.addEventListener('click', closeMenu);
            });
        }

        // Safety: if resized to desktop while open, close mobile menu.
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 768) closeMenu();
        });

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();
</script>
