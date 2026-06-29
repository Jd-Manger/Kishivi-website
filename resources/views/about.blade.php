<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>About Us | Kishvi Consulting</title>
    <link rel="stylesheet" href="{{ asset('css/premium-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sales-upgrade.css') }}">
    <script defer src="{{ asset('js/sales-upgrade.js') }}"></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
        }

        #footer-container {
            margin-top: 0 !important;
        }

        /* Hero Image Composition */
        .hero-img-1 {
            z-index: 10;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .hero-img-2 {
            z-index: 20;
            border-radius: 20px;
            border: 8px solid white;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .hero-img-3 {
            z-index: 5;
            border-radius: 100%;
            opacity: 0.8;
        }

        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Abstract Background Shapes */
        .bg-blob {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.6;
        }
        
        /* Card Hover Effects */
        .value-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .value-card:hover {
            transform: translateY(-10px);
            border-color: #3b82f6;
        }

        /* Keep low-contrast text readable on dark and colored blocks */
        .bg-slate-900 p,
        .bg-slate-900 li,
        .bg-slate-800 p,
        .bg-slate-800 li,
        .bg-slate-900 .text-slate-400,
        .bg-slate-900 .text-slate-500,
        .bg-slate-800 .text-slate-400,
        .bg-slate-800 .text-slate-500 {
            color: #e2e8f0 !important;
        }

        .bg-blue-600 p,
        .bg-blue-700 p {
            color: #dbeafe !important;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-700">

    <!-- 1. NAVBAR -->
    
@include('partials.navbar')

    <!-- 2. STYLISH HERO SECTION -->
    <section class="relative pt-32 pb-20 lg:pt-0 lg:pb-32 overflow-hidden bg-white">
        <!-- Background Blobs -->
        <div class="bg-blob bg-blue-100 w-96 h-96 rounded-full top-0 right-0 translate-x-1/3 -translate-y-1/3"></div>
        <div class="bg-blob bg-cyan-50 w-80 h-80 rounded-full bottom-0 left-0 -translate-x-1/3 translate-y-1/3"></div>

        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Text Content -->
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block py-1 px-3 rounded-full bg-blue-50 text-blue-600 font-bold text-xs uppercase tracking-widest mb-6">
                        About Kishvi Consulting
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
                        Architecting <br>
                        <span class="text-gradient">Careers & Dreams.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8 border-l-4 border-blue-600 pl-6">
                        We are more than just a recruitment agency. We are a bridge for the ambitious, a helping hand for the needy, and a strategic partner for the world's leading companies.
                    </p>
                    
                    <div class="flex flex-wrap gap-8 items-center">
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold text-slate-900">8+</span>
                            <span class="text-sm text-slate-500 uppercase font-semibold">Years of Trust</span>
                        </div>
                        <div class="h-10 w-px bg-slate-200"></div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold text-slate-900">50k+</span>
                            <span class="text-sm text-slate-500 uppercase font-semibold">Candidates Placed</span>
                        </div>
                    </div>
                </div>

                <!-- Stylish Image Composition -->
                <div class="relative h-[500px] w-full hidden lg:block" data-aos="fade-left" data-aos-duration="1000">
                    <!-- Image 1: Main Vertical -->
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=800&auto=format&fit=crop" 
                         alt="Professional Consultant" 
                         class="hero-img-1 absolute top-0 right-10 w-64 h-96 object-cover">
                    
                    <!-- Image 2: Overlapping Landscape -->
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=800&auto=format&fit=crop" 
                         alt="Team Meeting" 
                         class="hero-img-2 absolute bottom-10 left-0 w-80 h-60 object-cover">

                    <!-- Image 3: Abstract Shape/Texture -->
                    <div class="hero-img-3 absolute top-1/2 left-1/4 w-32 h-32 bg-blue-600 mix-blend-multiply filter blur-xl animate-pulse"></div>

                    <!-- Floating Badge -->
                    <div class="absolute top-20 left-10 bg-white p-4 rounded-xl shadow-xl z-30 flex items-center gap-3 animate-bounce" style="animation-duration: 3s;">
                        <div class="bg-green-100 p-2 rounded-full text-green-600">
                            <i data-lucide="award" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase">Award Winning</p>
                            <p class="text-sm font-bold text-slate-900">Best HR Firm 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. MISSION, VISION & SCOPE -->
    <section class="py-24 bg-slate-900 text-white relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Our Core Identity</h2>
                <p class="text-slate-400">The principles that drive Kishvi Consulting forward every single day.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 hover:border-blue-500 transition-colors group" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-14 h-14 bg-blue-900/50 rounded-xl flex items-center justify-center text-blue-400 mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="target" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                    <p class="text-slate-400 leading-relaxed">
                        To eradicate unemployment by providing accessible, dignified, and suitable job opportunities to everyone - from the unskilled laborer to the corporate executive.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 hover:border-blue-500 transition-colors group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-blue-900/50 rounded-xl flex items-center justify-center text-blue-400 mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="eye" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                    <p class="text-slate-400 leading-relaxed">
                        To become India's most trusted employment ecosystem, where talent meets opportunity instantly, transparently, and without bias.
                    </p>
                </div>

                <!-- Scope -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 hover:border-blue-500 transition-colors group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-blue-900/50 rounded-xl flex items-center justify-center text-blue-400 mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="globe-2" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Our Scope</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Expanding beyond borders. While our roots are local, our reach is global. We are actively scaling to serve international markets in IT, Healthcare, and Logistics.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHO WE ARE (TEXT & IMAGE) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                
                <div class="lg:w-1/2 relative" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop" 
                         alt="Our Team" 
                         class="rounded-3xl shadow-2xl w-full object-cover h-[500px]">
                    
                    <div class="absolute -bottom-10 -right-10 bg-blue-600 p-8 rounded-3xl hidden md:block">
                        <p class="text-white text-lg font-medium italic">"We don't just find jobs,<br>we build lives."</p>
                        <p class="text-blue-200 mt-2 font-bold">- CEO, Kishvi Consulting</p>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Empowering the Needy, <br>Elevating the Skilled.</h2>
                    <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                        At <span class="font-bold text-slate-900">Kishvi Consulting</span>, we recognized a gap in the market. While many consultancies focus solely on high-paying IT roles, millions of skilled and semi-skilled workers were left behind.
                    </p>
                    <p class="text-slate-600 mb-8 text-lg leading-relaxed">
                        We changed that. We created a platform that treats a factory supervisor with the same respect as a software architect. Our unique hybrid model combines AI-driven matching for speed with human empathy for understanding the real needs of our candidates.
                    </p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="text-blue-600 w-6 h-6"></i>
                            <span class="text-slate-700 font-medium">Zero charges for candidates from low-income backgrounds.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="text-blue-600 w-6 h-6"></i>
                            <span class="text-slate-700 font-medium">Personalized career counseling & resume building.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="text-blue-600 w-6 h-6"></i>
                            <span class="text-slate-700 font-medium">Verified employers to ensure workplace safety.</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. OUR VALUES (ICON GRID) -->
    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">Our Culture</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2">What We Stand For</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Value 1 -->
                <div class="value-card bg-white p-8 rounded-2xl border-t-4 border-blue-600 shadow-sm hover:shadow-xl">
                    <i data-lucide="shield" class="w-10 h-10 text-slate-900 mb-4"></i>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Integrity</h4>
                    <p class="text-slate-500 text-sm">We are transparent in our dealings. No hidden fees, no false promises.</p>
                </div>

                <!-- Value 2 -->
                <div class="value-card bg-white p-8 rounded-2xl border-t-4 border-green-500 shadow-sm hover:shadow-xl">
                    <i data-lucide="users" class="w-10 h-10 text-slate-900 mb-4"></i>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Inclusivity</h4>
                    <p class="text-slate-500 text-sm">Opportunities for all genders, backgrounds, and skill levels.</p>
                </div>

                <!-- Value 3 -->
                <div class="value-card bg-white p-8 rounded-2xl border-t-4 border-orange-500 shadow-sm hover:shadow-xl">
                    <i data-lucide="zap" class="w-10 h-10 text-slate-900 mb-4"></i>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Speed</h4>
                    <p class="text-slate-500 text-sm">We respect your time. Our processes are optimized for quick results.</p>
                </div>

                <!-- Value 4 -->
                <div class="value-card bg-white p-8 rounded-2xl border-t-4 border-purple-500 shadow-sm hover:shadow-xl">
                    <i data-lucide="heart-handshake" class="w-10 h-10 text-slate-900 mb-4"></i>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Empathy</h4>
                    <p class="text-slate-500 text-sm">We understand the stress of job hunting. We are here to support you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TEAM CTA -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-8">Ready to start your journey?</h2>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="{{ route('browse-jobs') }}" class="px-8 py-3 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all shadow-lg hover:shadow-blue-500/30">
                    Find a Job
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-slate-700 border border-slate-300 font-bold rounded-full hover:border-blue-600 hover:text-blue-600 transition-all">
                    Talk to Us
                </a>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER -->
    @include('partials.footer')
    <!-- Initialize Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
            offset: 100
        });
        lucide.createIcons();
    </script>
</body>
</html>



