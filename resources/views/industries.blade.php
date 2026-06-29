<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Industries We Serve | Kishvi Consulting</title>
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
        /* --- GLOBAL STYLES --- */
        html, body {
            overflow-x: hidden !important;
            font-family: 'Plus Jakarta Sans', sans-serif;
            scroll-behavior: smooth;
        }

        /* Keep text readable on dark and colored surfaces */
        .bg-slate-900 p,
        .bg-slate-900 li,
        .bg-slate-900 .text-slate-400,
        .bg-slate-900 .text-slate-500,
        .bg-slate-800 p,
        .bg-slate-800 li,
        .bg-slate-800 .text-slate-400,
        .bg-slate-800 .text-slate-500 {
            color: #e2e8f0 !important;
        }

        .bg-blue-600 p,
        .bg-blue-700 p {
            color: #dbeafe !important;
        }

        /* --- HERO IMAGE COMPOSITION --- */
        .hero-collage {
            position: relative;
            height: 600px;
        }
        
        .img-card {
            position: absolute;
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            border: 4px solid white;
        }
        
        .img-card:hover {
            z-index: 50;
            transform: scale(1.05);
            border-color: #2563eb;
        }

        .img-1 { /* IT/Corporate */
            width: 320px;
            height: 400px;
            top: 0;
            right: 20px;
            z-index: 10;
        }

        .img-2 { /* Industrial/Factory */
            width: 300px;
            height: 350px;
            bottom: 40px;
            left: 0;
            z-index: 20;
        }

        .img-3 { /* Medical */
            width: 220px;
            height: 220px;
            top: 40%;
            left: 40%;
            transform: translate(-50%, -50%);
            z-index: 30;
            border-radius: 50%; /* Circle */
        }

        /* --- ICON BOX STYLES --- */
        .industry-card {
            background: white;
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .industry-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0%;
            background: #2563eb;
            z-index: -1;
            transition: height 0.4s ease;
            border-radius: 0 0 50% 50%;
        }

        .industry-card:hover::before {
            height: 150%;
            border-radius: 0;
        }

        .industry-card:hover h3, 
        .industry-card:hover p, 
        .industry-card:hover i {
            color: white !important;
        }
        
        .industry-card:hover .icon-box {
            background: rgba(255,255,255,0.2);
            color: white;
        }

    </style>
</head>
<body class="bg-slate-50 text-slate-700">

    <!-- 1. NAVBAR -->
    
@include('partials.navbar')

    <!-- 2. HERO SECTION -->
    <section class="relative pt-28 pb-24 lg:pt-24 lg:pb-32 overflow-hidden bg-white">
        <!-- Abstract Bg -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-[20%] -right-[10%] w-[700px] h-[700px] bg-blue-50/50 rounded-full blur-3xl"></div>
            <div class="absolute top-[40%] -left-[10%] w-[500px] h-[500px] bg-slate-50 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 lg:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Content -->
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 border border-blue-200 text-blue-700 text-xs font-bold uppercase tracking-widest mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                        Kishvi Consulting
                    </div>
                    
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-6">
                        Powering Every <br>
                        <span class="text-blue-600">Sector & Scale.</span>
                    </h1>
                    
                    <p class="text-lg text-slate-500 mb-8 leading-relaxed max-w-lg border-l-4 border-slate-200 pl-6">
                        From the precision of the operating room to the hum of the factory floor, and the buzz of the IT park. We provide the workforce that keeps the world moving.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#sectors" class="px-8 py-4 bg-slate-900 text-white font-bold rounded-xl shadow-xl hover:bg-slate-800 transition-all flex items-center gap-2">
                            Explore Sectors <i data-lucide="arrow-down" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- 3-Image Composition -->
                <div class="hero-collage hidden lg:block" data-aos="zoom-in" data-aos-duration="1200">
                    <!-- Image 1: Corporate/Tech -->
                    <div class="img-card img-1">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover" alt="Corporate Office">
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4">
                            <p class="text-white font-bold text-sm">Corporate & IT</p>
                        </div>
                    </div>

                    <!-- Image 2: Industrial -->
                    <div class="img-card img-2">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover" alt="Factory Worker">
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4">
                            <p class="text-white font-bold text-sm">Manufacturing</p>
                        </div>
                    </div>

                    <!-- Image 3: Healthcare (Center Circle) -->
                    <div class="img-card img-3 border-4 border-blue-600">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover" alt="Doctor">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. INDUSTRIAL MISSION & VISION -->
    <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-64 h-full bg-blue-600/10 skew-x-12"></div>
        <div class="absolute top-0 left-0 w-32 h-full bg-blue-600/5 -skew-x-12"></div>

        <div class="container mx-auto px-6 lg:px-12 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
                
                <div data-aos="fade-up">
                    <h2 class="text-3xl font-bold mb-6">Our Industrial Vision</h2>
                    <p class="text-slate-400 text-lg leading-relaxed mb-6">
                        At <span class="text-white font-bold">Kishvi Consulting</span>, our scope extends beyond simple placements. We aim to be the backbone of industrial growth by ensuring that no machine stops due to lack of labor, and no desk remains empty due to lack of talent.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-lg bg-blue-600 flex items-center justify-center shrink-0">
                                <i data-lucide="crosshair" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white">The Mission</h4>
                                <p class="text-slate-400 text-sm">To bridge the gap between rural talent and urban industrial demands, stabilizing supply chains.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-lg bg-slate-700 flex items-center justify-center shrink-0">
                                <i data-lucide="bar-chart-3" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white">The Scope</h4>
                                <p class="text-slate-400 text-sm">Serving 15+ verticals including Auto-ancillaries, FMCG, IT Services, and Healthcare institutions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
                    <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 text-center hover:bg-slate-750 transition-colors">
                        <h3 class="text-4xl font-extrabold text-blue-500 mb-2">500+</h3>
                        <p class="text-xs text-slate-400 uppercase tracking-widest">Factories Staffed</p>
                    </div>
                    <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 text-center hover:bg-slate-750 transition-colors">
                        <h3 class="text-4xl font-extrabold text-blue-500 mb-2">200+</h3>
                        <p class="text-xs text-slate-400 uppercase tracking-widest">IT Partners</p>
                    </div>
                    <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 text-center hover:bg-slate-750 transition-colors">
                        <h3 class="text-4xl font-extrabold text-blue-500 mb-2">50+</h3>
                        <p class="text-xs text-slate-400 uppercase tracking-widest">Hospitals</p>
                    </div>
                    <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 text-center hover:bg-slate-750 transition-colors">
                        <h3 class="text-4xl font-extrabold text-blue-500 mb-2">12</h3>
                        <p class="text-xs text-slate-400 uppercase tracking-widest">Global Clients</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. SECTORS WE SERVE (THE CORE GRID) -->
    <section id="sectors" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">Domain Expertise</span>
                <h2 class="text-4xl font-extrabold text-slate-900 mt-2 mb-4">Industries We Transform</h2>
                <p class="text-slate-500">We don't believe in a one-size-fits-all approach. Our specialized teams understand the nuances of each sector.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- 1. IT & Corporate -->
                <div class="industry-card p-8 rounded-2xl shadow-sm border border-slate-100 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="icon-box w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 transition-colors">
                        <i data-lucide="monitor" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-white">IT & Corporate</h3>
                    <p class="text-slate-500 text-sm mb-4 group-hover:text-blue-100">
                        From Full Stack Developers to HR Managers. We handle the complex demands of the tech world with technical screening.
                    </p>
                    <ul class="text-sm text-slate-400 space-y-1 group-hover:text-white">
                        <li>- Software Development</li>
                        <li>- Data Science</li>
                        <li>- BPO / KPO Executives</li>
                    </ul>
                </div>

                <!-- 2. Manufacturing -->
                <div class="industry-card p-8 rounded-2xl shadow-sm border border-slate-100 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box w-14 h-14 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-6 transition-colors">
                        <i data-lucide="factory" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-white">Manufacturing</h3>
                    <p class="text-slate-500 text-sm mb-4 group-hover:text-blue-100">
                        Reliable blue-collar staffing for factories. We provide verified machine operators, assembly line workers, and supervisors.
                    </p>
                    <ul class="text-sm text-slate-400 space-y-1 group-hover:text-white">
                        <li>- Plant Operations</li>
                        <li>- Quality Control</li>
                        <li>- Helpers & Loaders</li>
                    </ul>
                </div>

                <!-- 3. Healthcare -->
                <div class="industry-card p-8 rounded-2xl shadow-sm border border-slate-100 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box w-14 h-14 bg-green-50 text-green-600 rounded-xl flex items-center justify-center mb-6 transition-colors">
                        <i data-lucide="stethoscope" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-white">Healthcare</h3>
                    <p class="text-slate-500 text-sm mb-4 group-hover:text-blue-100">
                        Compassionate care requires qualified professionals. We staff hospitals with certified nurses, technicians, and admin staff.
                    </p>
                    <ul class="text-sm text-slate-400 space-y-1 group-hover:text-white">
                        <li>- Nursing Staff</li>
                        <li>- Lab Technicians</li>
                        <li>- Hospital Administration</li>
                    </ul>
                </div>

                <!-- 4. Construction -->
                <div class="industry-card p-8 rounded-2xl shadow-sm border border-slate-100 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box w-14 h-14 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center mb-6 transition-colors">
                        <i data-lucide="hard-hat" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-white">Construction</h3>
                    <p class="text-slate-500 text-sm mb-4 group-hover:text-blue-100">
                        Building the future requires strong hands. We supply skilled masons, electricians, plumbers, and site engineers.
                    </p>
                    <ul class="text-sm text-slate-400 space-y-1 group-hover:text-white">
                        <li>- Civil Engineers</li>
                        <li>- Skilled Laborers</li>
                        <li>- Project Managers</li>
                    </ul>
                </div>

                <!-- 5. Logistics -->
                <div class="industry-card p-8 rounded-2xl shadow-sm border border-slate-100 group" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box w-14 h-14 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-6 transition-colors">
                        <i data-lucide="truck" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-white">Logistics & Delivery</h3>
                    <p class="text-slate-500 text-sm mb-4 group-hover:text-blue-100">
                        Keep the supply chain moving. We have a massive database of delivery partners, warehouse staff, and fleet managers.
                    </p>
                    <ul class="text-sm text-slate-400 space-y-1 group-hover:text-white">
                        <li>- Warehouse Management</li>
                        <li>- Last-Mile Delivery</li>
                        <li>- Supply Chain Analysts</li>
                    </ul>
                </div>

                <!-- 6. Retail & Sales -->
                <div class="industry-card p-8 rounded-2xl shadow-sm border border-slate-100 group" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box w-14 h-14 bg-red-50 text-red-600 rounded-xl flex items-center justify-center mb-6 transition-colors">
                        <i data-lucide="shopping-bag" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-white">Retail & Sales</h3>
                    <p class="text-slate-500 text-sm mb-4 group-hover:text-blue-100">
                        Frontline staff that drives revenue. We hire charismatic sales associates, store managers, and marketing execs.
                    </p>
                    <ul class="text-sm text-slate-400 space-y-1 group-hover:text-white">
                        <li>- Store Managers</li>
                        <li>- Sales Executives</li>
                        <li>- Customer Support</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. WHY US FOR INDUSTRIES -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div data-aos="fade-right">
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Why Industries Trust <br><span class="text-blue-600">Kishvi Consulting</span></h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-8">
                        Recruiting for a tech startup is different from recruiting for a steel plant. We understand the "language" of every industry.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600 font-bold shrink-0">1</div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Industry-Specific Databases</h4>
                                <p class="text-slate-500 text-sm">We maintain separate talent pools. We don't send a Java developer to fix a Java machine.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600 font-bold shrink-0">2</div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Compliance & Verification</h4>
                                <p class="text-slate-500 text-sm">For industrial roles, we handle police verification, medical fitness checks, and Aadhaar authentication.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600 font-bold shrink-0">3</div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Bulk Hiring Capabilities</h4>
                                <p class="text-slate-500 text-sm">Need 500 workers for a new plant launch? We can mobilize workforce in under 7 days.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-slate-900 rotate-3 rounded-2xl transform translate-x-4 translate-y-4"></div>
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" class="relative rounded-2xl shadow-xl border border-slate-200 w-full" alt="Handshake">
                </div>

            </div>
        </div>
    </section>

    <!-- 6. CTA -->
    <section class="py-20 bg-blue-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6">Need specialized talent?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">Tell us your industry, and we will find the perfect fit. From the factory floor to the boardroom.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('browse-jobs') }}" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold shadow-lg hover:shadow-xl hover:bg-blue-50 transition-all">
                    Hire Talent
                </a>
                <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-blue-600 transition-all">
                    Contact Sales
                </a>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER -->
    @include('partials.footer')
    <!-- Scripts -->
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



