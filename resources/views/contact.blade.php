<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us | Kishvi Consulting</title>
    <link rel="stylesheet" href="{{ asset('css/premium-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sales-upgrade.css') }}">
    <script defer src="{{ asset('js/sales-upgrade.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            overflow-x: hidden;
            margin: 0;
        }

        /* Hero Styling */
        .hero-section {
            padding-top: 118px;
            padding-bottom: 80px;
            background: #ffffff;
            position: relative;
            overflow: hidden;
        }

        @media (max-width: 991.98px) {
            .hero-section {
                padding-top: 102px;
                padding-bottom: 56px;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            #contact-info-grid {
                margin-top: 0 !important;
            }

            #contact-info-grid .contact-card {
                padding: 1.5rem;
            }

            #mission-form-section .card {
                padding: 1.25rem !important;
            }
        }

        @media (max-width: 767.98px) {
            .hero-section {
                padding-top: 96px;
                padding-bottom: 36px;
            }

            .hero-title {
                font-size: 2rem;
                line-height: 1.2;
            }

            .hero-section .lead {
                font-size: 1rem;
                margin-bottom: 1.25rem !important;
            }

            .blob-shape {
                display: none;
            }

            .hero-section .card.d-inline-block {
                width: 100%;
            }

            #contact-info-grid {
                padding-top: 1rem !important;
                padding-bottom: 1.5rem !important;
            }

            #contact-info-grid .contact-card {
                padding: 1.1rem;
                border-radius: 14px;
            }

            #contact-info-grid .icon-box {
                width: 56px;
                height: 56px;
                font-size: 1.35rem;
                margin-bottom: 1rem;
            }

            #mission-form-section .container {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            #contact-form-container {
                border-radius: 14px !important;
                padding: 1rem !important;
            }

            #contact-form-container h3 {
                font-size: 1.35rem;
            }

            #contact-form-container .form-control,
            #contact-form-container .form-select {
                padding: 10px 14px;
            }

            #map-container {
                height: 260px !important;
            }

            #faq-section {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }

            #faq-section .accordion-button {
                padding: 14px;
                font-size: 0.95rem;
            }
        }

        /* Match page content gutters with shared navbar container (px-6 / lg:px-10) */
        #contact-hero-container .container,
        #contact-info-grid .container,
        #mission-form-section .container,
        #faq-section .container {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        @media (min-width: 992px) {
            #contact-hero-container .container,
            #contact-info-grid .container,
            #mission-form-section .container,
            #faq-section .container {
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }
        }

        .blob-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.4;
            z-index: 0;
        }
        .blob-1 { background-color: #cfe2ff; width: 300px; height: 300px; top: -50px; right: -50px; }
        .blob-2 { background-color: #e0cffc; width: 250px; height: 250px; bottom: 0; left: -50px; }

        .hero-title {
            font-weight: 800;
            font-size: 3.5rem;
            color: #212529;
            line-height: 1.1;
        }

        /* Image Composition */
        .image-stack {
            position: relative;
            height: 500px;
        }
        .img-card {
            position: absolute;
            border-radius: 15px;
            border: 5px solid #fff;
            box-shadow: 0 1rem 3rem rgba(0,0,0,.15);
            transition: transform 0.3s ease;
        }
        .img-card:hover { transform: translateY(-10px); z-index: 50; }
        
        .img-1 { top: 0; right: 20px; width: 280px; height: 320px; object-fit: cover; z-index: 10; }
        .img-2 { bottom: 40px; left: 20px; width: 300px; height: 250px; object-fit: cover; z-index: 20; }
        
        .floating-badge {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 120px; height: 120px;
            background: #0d6efd;
            color: white;
            border-radius: 50%;
            border: 4px solid white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.3);
            z-index: 30;
            animation: bounce 3s infinite;
        }

        /* Contact Cards */
        .contact-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(13, 110, 253, 0.15);
        }
        .icon-box {
            width: 70px; height: 70px;
            background-color: #ecf4ff;
            color: #0d6efd;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 1.5rem auto;
            transition: 0.3s;
        }
        .contact-card:hover .icon-box {
            background-color: #0d6efd;
            color: white;
            transform: rotate(-10deg);
        }

        /* Form Styling */
        .form-control, .form-select {
            padding: 12px 20px;
            border-radius: 10px;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
        }
        .form-control:focus, .form-select:focus {
            background-color: #fff;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.15);
            border-color: #0d6efd;
        }

        /* FAQ Accordion */
        .accordion-item {
            border: none;
            border-radius: 15px !important;
            margin-bottom: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
            overflow: hidden;
        }
        .accordion-button {
            font-weight: 700;
            padding: 20px;
            background: white;
        }
        .accordion-button:not(.collapsed) {
            background-color: #ecf4ff;
            color: #0d6efd;
            box-shadow: none;
        }

        /* Animations */
        @keyframes bounce {
            0%, 100% { transform: translate(-50%, -50%) translateY(0); }
            50% { transform: translate(-50%, -50%) translateY(-10px); }
        }
    </style>
</head>
<body id="main-body-container">

    
@include('partials.navbar')

    <section class="hero-section" id="contact-hero-container">
        <div class="blob-shape blob-1"></div>
        <div class="blob-shape blob-2"></div>

        <div class="container position-relative z-1">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <span class="badge bg-light text-secondary border rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold">
                        <span class="text-success me-1">&bull;</span> We are Online
                    </span>
                    <h1 class="hero-title mb-4">
                        Let's Start a <br>
                        <span class="text-primary">Conversation.</span>
                    </h1>
                    <p class="lead text-secondary mb-5">
                        Whether you are a company looking for talent or a candidate looking for a future, <span class="fw-bold text-dark">Kishvi Consulting</span> is here to bridge the gap.
                    </p>

                    <div class="card border-0 shadow-sm rounded-4 d-inline-block">
                        <div class="card-body d-flex align-items-center p-3">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                                <i class="bi bi-telephone-fill fs-4"></i>
                            </div>
                            <div>
                                <small class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem;">Call Us Now</small>
                                <div class="fw-bold fs-5 text-dark">+91 9027293530</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image-stack">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop" class="img-card img-1" alt="Team Support">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop" class="img-card img-2" alt="Meeting">
                        
                        <div class="floating-badge">
                            <div>
                                <i class="bi bi-chat-dots-fill fs-3 d-block mb-1"></i>
                                <span style="font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">24/7 Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-info-grid" class="py-5 bg-light" style="margin-top: -50px; position: relative; z-index: 10;">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-4">
                    <div class="contact-card text-center" id="address-card">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Visit HQ</h4>
                        <p class="text-muted small mb-3">Come say hello at our office.</p>
                        <p class="fw-semibold text-dark" id="office-address-text">
                            06A, Tower 5, Panchsheel Wellington,<br>
                            Crossing Republik, Ghaziabad,<br>
                            Uttar Pradesh, PIN 201016
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-card text-center" id="email-card">
                        <div class="icon-box">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Email Us</h4>
                        <p class="text-muted small mb-3">Our friendly team is here to help.</p>
                        <a href="mailto:Info@kishviconsulting.com" class="text-primary fw-bold text-decoration-none fs-5">
                            Info@kishviconsulting.com
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-card text-center" id="phone-card">
                        <div class="icon-box">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Call Us</h4>
                        <p class="text-muted small mb-3">Mon-Fri from 9am to 6pm.</p>
                        <p class="fw-bold text-dark fs-4" id="contact-phone-number">+91 9027293530</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-white position-relative overflow-hidden" id="mission-form-section">
        <div class="container py-4">
            <div class="row gx-lg-5 align-items-center">
                
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="fw-bold display-6 mb-4">Why Connect With <br> <span class="text-primary">Kishvi?</span></h2>
                    <p class="text-secondary lead mb-5">
                        We are not just processing resumes; we are building a legacy of employment. Reaching out to us means taking a step towards ethical recruitment and professional growth.
                    </p>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px;">01</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-1">Immediate Response</h5>
                            <p class="text-muted small">Our mission is speed. We aim to respond to all candidate inquiries within 24 hours.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px;">02</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-1">Expert Guidance</h5>
                            <p class="text-muted small">Our scope involves counseling. Talk to us if you are confused about your career path.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px;">03</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-1">National Network</h5>
                            <p class="text-muted small">With vision to cover India, we have connections in Metro cities and Industrial hubs alike.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 bg-white" id="contact-form-container">
                        <h3 class="fw-bold mb-4">Send us a Message</h3>
                        <form action="{{ route('contact-lead.store') }}" method="POST">
                            @csrf
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="John" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Doe">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold small">Subject</label>
                                <select name="subject" class="form-select">
                                    <option>Looking for a Job</option>
                                    <option>Looking to Hire</option>
                                    <option>Partnership Inquiry</option>
                                    <option>General Query</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold small">Message</label>
                                <textarea name="message" class="form-control" rows="4" placeholder="Tell us how we can help..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow">
                                Send Message <i class="bi bi-send-fill ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="map-container" class="w-100 bg-light" style="height: 400px; position: relative;">
        <iframe src="https://maps.google.com/maps?q=Ghaziabad&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                width="100%" height="100%" style="border:0; filter: grayscale(100%);" allowfullscreen="" loading="lazy"></iframe>
        
        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 bg-white px-4 py-2 rounded-pill shadow d-none d-md-block">
            <p class="mb-0 fw-bold text-dark d-flex align-items-center gap-2">
                <span class="bg-success rounded-circle p-1"></span>
                Headquarters: Ghaziabad, Uttar Pradesh
            </p>
        </div>
    </section>

    <section class="py-5 bg-light" id="faq-section">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Frequently Asked Questions</h2>
                <p class="text-secondary">Quick answers to common questions.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How fast can Kishvi Consulting provide candidates?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary">
                                    For standard roles, we provide shortlisted profiles within 48 hours. For executive search, it typically takes 5-7 business days to find the perfect match.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Is there a registration fee for job seekers?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary">
                                    No. Kishvi Consulting is strictly against charging candidates. Our services are free for job seekers as we are compensated by the employers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Which industries do you specialize in?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary">
                                    We have deep expertise in Manufacturing, IT & Corporate Services, Healthcare, Logistics, and Retail sectors.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


