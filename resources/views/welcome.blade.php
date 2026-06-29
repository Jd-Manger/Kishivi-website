    <!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kishvi Consulting | Bridging Talent & Opportunity</title>
    
    <link rel="stylesheet" href="{{ asset('css/premium-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sales-upgrade.css') }}">
    <script defer src="{{ asset('js/sales-upgrade.js') }}"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            overflow-x: hidden;
        }

        /* Gradient Text Utility */
        .text-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #0f172a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gradient-light {
            background: linear-gradient(135deg, #60a5fa 0%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Abstract Blob Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        /* Collage Styles */
        .collage-img {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .collage-img:hover {
            transform: scale(1.05) rotate(0deg) !important;
            z-index: 50;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Keep text readable on dark cards/sections where global theme overrides paragraph color */
        .bg-slate-900 p,
        .bg-slate-900 li {
            color: #cbd5e1 !important;
        }

        .bg-blue-600 p,
        .bg-blue-600 li,
        .bg-blue-700 p,
        .bg-blue-700 li {
            color: #dbeafe !important;
        }

        .bg-white .text-slate-400,
        .bg-slate-50 .text-slate-400 {
            color: #64748b !important;
        }
    </style>
</head>
<body class="antialiased text-slate-800">
    @include('partials.navbar')

    
    <!-- 2. HERO SECTION -->
    <section class="relative min-h-screen flex items-center pt-28 md:pt-32 lg:pt-0 overflow-hidden bg-white">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-blue-50/50 rounded-bl-[100px] -z-10"></div>
        <div class="absolute top-40 left-20 w-72 h-72 bg-blue-200/20 rounded-full blur-3xl -z-10 animate-float"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-cyan-200/20 rounded-full blur-3xl -z-10"></div>

        <div class="container mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Hero Text -->
            <div data-aos="fade-right" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 text-blue-700 font-semibold text-xs uppercase tracking-widest mb-6">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    #1 Rated Job Consultancy
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-extrabold leading-[1.1] mb-6 tracking-tight text-slate-900">
                    Your Potential, <br>
                    <span class="text-blue-600">Our Mission.</span>
                </h1>
                
                <p class="text-lg text-slate-500 mb-8 leading-relaxed max-w-lg">
                    At <span class="font-bold text-slate-800">Kishvi Consulting</span>, we believe everyone deserves a chance to grow. From freshers to executives, and blue-collar to white-collar, we bridge the gap between talent and opportunity.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('browse-jobs') }}" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg shadow-blue-600/30 transition-all transform hover:-translate-y-1 flex items-center gap-2">
                        Find a Job <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="{{ route('browse-jobs') }}" class="px-8 py-4 bg-white border border-slate-200 hover:border-blue-300 text-slate-700 hover:text-blue-600 font-bold rounded-xl shadow-sm hover:shadow-md transition-all flex items-center gap-2">
                        Hiring? Click Here
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-12 flex items-center gap-6 text-slate-400 text-sm font-medium">
                    <div class="flex -space-x-3">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                        <img src="https://randomuser.me/api/portraits/men/86.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-xs">+2k</div>
                    </div>
                    <p>Happy Candidates Placed This Month</p>
                </div>
            </div>

            <!-- Hero Image / Visual -->
            <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="relative z-10 bg-slate-900 rounded-3xl p-2 shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
                    <!-- Placeholder for a high quality professional image -->
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1000&auto=format&fit=crop" 
                         alt="Professional Woman" 
                         class="rounded-2xl w-full h-[500px] object-cover opacity-90">
                    
                    <!-- Floating Card 1 -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl flex items-center gap-4 animate-float">
                        <div class="bg-green-100 p-3 rounded-full text-green-600">
                            <i data-lucide="check-circle-2" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold">Success Rate</p>
                            <p class="text-xl font-bold text-slate-900">98.5%</p>
                        </div>
                    </div>

                    <!-- Floating Card 2 -->
                    <div class="absolute top-10 -right-8 bg-white p-4 rounded-xl shadow-xl max-w-[180px]">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="text-xs font-bold text-slate-600">New Offer</span>
                        </div>
                        <p class="text-sm font-semibold text-slate-800">Senior Developer @ TechCorp</p>
                        <p class="text-xs text-blue-600 font-bold mt-1">$120k / Year</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TRUST BANNER -->
    <section class="py-10 border-y border-slate-100 bg-white">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm text-slate-400 font-semibold uppercase tracking-widest mb-6">Trusted by leading companies</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Simple SVG Placeholders for logos -->
                <i data-lucide="hexagon" class="w-10 h-10"></i>
                <i data-lucide="triangle" class="w-10 h-10"></i>
                <i data-lucide="circle" class="w-10 h-10"></i>
                <i data-lucide="square" class="w-10 h-10"></i>
                <i data-lucide="star" class="w-10 h-10"></i>
            </div>
        </div>
    </section>

    <!-- 4. ABOUT US (COLLAGE ALBUM DESIGN) -->
    <section id="about" class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Collage Images (Left) -->
                <div class="relative h-[600px] w-full hidden lg:block" data-aos="zoom-in" data-aos-duration="1000">
                    <!-- Image 1: Background Layer -->
                    <div class="absolute top-0 left-10 w-64 h-80 bg-blue-600 rounded-2xl rotate-[-6deg] opacity-20 z-0"></div>
                    
                    <!-- Image 2: Main Portrait -->
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop" 
                         alt="CEO" 
                         class="collage-img absolute top-4 left-4 w-72 h-96 object-cover rounded-2xl shadow-2xl rotate-[-3deg] border-4 border-white z-10">
                    
                    <!-- Image 3: Landscape Action Shot -->
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop" 
                         alt="Team Meeting" 
                         class="collage-img absolute bottom-10 right-4 w-80 h-64 object-cover rounded-2xl shadow-2xl rotate-[3deg] border-4 border-white z-20">
                    
                    <!-- Image 4: Small Detail -->
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&auto=format&fit=crop" 
                         alt="Handshake" 
                         class="collage-img absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 object-cover rounded-full shadow-2xl border-4 border-slate-900 z-30">
                </div>

                <!-- Content (Right) -->
                <div data-aos="fade-left" data-aos-duration="1000">
                    <h4 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-2">About Kishvi Consulting</h4>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
                        More Than Just a Job Portal. <br>
                        We Build <span class="text-blue-600">Livelihoods.</span>
                    </h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Established with a vision to eradicate unemployment, <span class="font-bold text-slate-800">Kishvi consulting</span> is not just about corporate placements. We are a holistic platform dedicated to providing employment to the needy, the skilled, and the ambitious alike.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Whether you are a daily wage worker looking for stability, a fresh graduate seeking direction, or a senior executive aiming for the C-Suite, our algorithms and human-touch consultancy ensure you find the right fit.
                    </p>

                    <!-- Features List -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 shrink-0">
                                <i data-lucide="users" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900">Inclusive Hiring</h5>
                                <p class="text-sm text-slate-500">Jobs for blue-collar, grey-collar, and white-collar workers.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 shrink-0">
                                <i data-lucide="trending-up" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900">Career Growth</h5>
                                <p class="text-sm text-slate-500">Free counseling and skill development workshops.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="text-blue-600 font-bold hover:underline flex items-center gap-2">
                        Read Our Full Story <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CATEGORIES (BENTO GRID STYLE) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-10">
            <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Opportunities Across All Sectors</h2>
                <p class="text-slate-500">We don't limit talent. Browse jobs by category designed to fit every skill level.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Large Card -->
                <div class="md:col-span-2 md:row-span-2 relative group rounded-3xl overflow-hidden shadow-lg cursor-pointer" data-aos="fade-up" data-aos-delay="0">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Corporate">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent p-8 flex flex-col justify-end">
                        <i data-lucide="briefcase" class="text-white w-8 h-8 mb-3"></i>
                        <h3 class="text-2xl font-bold text-white mb-1">Corporate & IT</h3>
                        <p class="text-slate-300 text-sm">Developers, Managers, HR, Finance</p>
                    </div>
                </div>

                <!-- Regular Card -->
                <div class="relative group rounded-3xl overflow-hidden shadow-lg bg-blue-600 p-8 flex flex-col justify-between h-64" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-white backdrop-blur-sm">
                        <i data-lucide="stethoscope" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-1">Medical</h3>
                        <p class="text-blue-100 text-sm">Nurses, Doctors, Lab Techs</p>
                    </div>
                    <i data-lucide="arrow-up-right" class="absolute top-6 right-6 text-white/50 w-6 h-6 group-hover:text-white transition-colors"></i>
                </div>

                <!-- Regular Card -->
                <div class="relative group rounded-3xl overflow-hidden shadow-lg bg-slate-900 p-8 flex flex-col justify-between h-64" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-white backdrop-blur-sm">
                        <i data-lucide="hammer" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-1">Skilled Labor</h3>
                        <p class="text-slate-400 text-sm">Electricians, Plumbers, Mechanics</p>
                    </div>
                </div>

                <!-- Wide Card -->
                <a href="{{ route('browse-jobs') }}" class="md:col-span-2 relative group rounded-3xl overflow-hidden shadow-lg bg-white border border-slate-100 p-8 flex items-center gap-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 shrink-0">
                        <i data-lucide="graduation-cap" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900">Fresher & Internships</h3>
                        <p class="text-slate-500 text-sm mt-1">Start your journey with top mentorship programs.</p>
                    </div>
                    <span class="ml-auto w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:text-white transition-all">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. HOW IT WORKS (TIMELINE) -->
    <section class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <!-- Background Gradients -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-20">
             <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-blue-600 rounded-full blur-[120px]"></div>
             <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-teal-500 rounded-full blur-[120px]"></div>
        </div>

        <div class="container mx-auto px-6 lg:px-10 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-extrabold mb-4">Simple Process, Fast Results</h2>
                <p class="text-slate-400">Get hired in 4 easy steps.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-slate-700 -z-10"></div>

                <!-- Step 1 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-24 h-24 mx-auto bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center mb-6 shadow-xl relative group">
                        <i data-lucide="file-text" class="w-10 h-10 text-blue-400 group-hover:scale-110 transition-transform"></i>
                        <div class="absolute top-0 right-0 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-sm font-bold">1</div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Create Profile</h3>
                    <p class="text-sm text-slate-400 px-4">Upload your resume and details.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-24 h-24 mx-auto bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center mb-6 shadow-xl relative group">
                        <i data-lucide="search" class="w-10 h-10 text-teal-400 group-hover:scale-110 transition-transform"></i>
                        <div class="absolute top-0 right-0 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-sm font-bold">2</div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Search Jobs</h3>
                    <p class="text-sm text-slate-400 px-4">Filter by location and salary.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-24 h-24 mx-auto bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center mb-6 shadow-xl relative group">
                        <i data-lucide="video" class="w-10 h-10 text-purple-400 group-hover:scale-110 transition-transform"></i>
                        <div class="absolute top-0 right-0 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-sm font-bold">3</div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Interview</h3>
                    <p class="text-sm text-slate-400 px-4">Connect with employers directly.</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-24 h-24 mx-auto bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center mb-6 shadow-xl relative group">
                        <i data-lucide="check-circle" class="w-10 h-10 text-green-400 group-hover:scale-110 transition-transform"></i>
                        <div class="absolute top-0 right-0 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-sm font-bold">4</div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Get Hired</h3>
                    <p class="text-sm text-slate-400 px-4">Start your new career path.</p>
                </div>
            </div>
        </div>
    </section>

   

    <!-- 8. WHY CHOOSE KISHVI -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Why Candidates & Employers <br>Trust <span class="text-blue-600">Kishvi.</span></h2>
                    <p class="text-slate-600 mb-8 text-lg">We use advanced AI matching combined with empathetic human verification to ensure every placement is a step towards a better future.</p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <i data-lucide="shield-check" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900">Verified Listings</h4>
                                <p class="text-slate-500">Zero scams. Every employer is vetted personally by our team.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <i data-lucide="zap" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900">Fast Hiring</h4>
                                <p class="text-slate-500">Our average time-to-hire is 40% faster than industry standards.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <i data-lucide="heart-handshake" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900">Support for the Needy</h4>
                                <p class="text-slate-500">Special priority placement programs for underprivileged candidates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="zoom-in">
                    <div class="absolute inset-0 bg-blue-600 rounded-3xl rotate-6 opacity-10"></div>
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=800&auto=format&fit=crop" 
                         alt="Team Success" 
                         class="relative rounded-3xl shadow-2xl w-full">
                    
                    <!-- Stats Overlay -->
                    <div class="absolute bottom-10 left-[-20px] bg-white p-6 rounded-2xl shadow-xl max-w-xs border-l-4 border-blue-600 hidden md:block">
                        <p class="text-slate-500 text-sm mb-2">We have helped</p>
                        <h3 class="text-3xl font-extrabold text-slate-900 mb-1">10,000+</h3>
                        <p class="text-slate-800 font-bold">Families secure a livelihood.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CTA SECTION -->
    <section class="py-20">
        <div class="container mx-auto px-6 lg:px-10">
            <div class="bg-blue-600 rounded-[2.5rem] p-10 md:p-16 text-center text-white relative overflow-hidden shadow-2xl shadow-blue-600/40">
                <!-- Background Pattern -->
                <div class="absolute top-0 left-0 w-full h-full opacity-10">
                    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#grid)" />
                    </svg>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6">Ready to Shape Your Future?</h2>
                    <p class="text-blue-100 text-lg mb-10">Join Kishvi Consulting today. Whether you are hiring top talent or looking for your next big break, we are your partner in success.</p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('browse-jobs') }}" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:shadow-xl hover:bg-slate-50 transition-all">
                            Create Free Account
                        </a>
                        <a href="{{ route('contact') }}" class="px-8 py-4 bg-blue-700 border border-blue-500 text-white font-bold rounded-xl hover:bg-blue-800 transition-all">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- Initialize Animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
            duration: 800,
            easing: 'ease-out-cubic',
        });
        
        // Re-initialize icons just in case
        lucide.createIcons();
    </script>
</body>
</html>
