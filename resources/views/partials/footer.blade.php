<footer id="footer-container" class="pt-5 pb-3 mt-16" style="background-color: #1e293b;">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 text-center md:text-left">
            <div>
                <h5 class="fw-bold text-white mb-3">Kishvi Consulting</h5>
                <p class="small text-secondary mb-3">Connecting top talent with great companies.</p>
                <div class="flex gap-2 justify-center md:justify-start">
                    <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div>
                <h6 class="fw-bold text-white mb-3">Candidates</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="{{ route('browse-jobs') }}" class="footer-link">Browse Jobs</a></li>
                    <li><a href="{{ route('companies') }}" class="footer-link">Companies</a></li>
                    <li><a href="{{ route('career-advice') }}" class="footer-link">Career Advice</a></li>
                </ul>
            </div>

            <div>
                <h6 class="fw-bold text-white mb-3">Employers</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="#" class="footer-link text-primary">Post a Job</a></li>
                    <li><a href="{{ route('candidates') }}" class="footer-link">Candidates</a></li>
                </ul>
            </div>

            <div>
                <h6 class="fw-bold text-white mb-3">Get in Touch</h6>
                <ul class="list-unstyled small d-flex flex-column gap-2">
                    <li><a href="tel:9027293530" class="footer-link fw-bold">9027293530</a></li>
                    <li><a href="mailto:Info@kishviconsulting.com" class="footer-link">Info@kishviconsulting.com</a></li>
                    <li class="text-secondary">Crossing Republik, Ghaziabad, UP</li>
                </ul>
            </div>
        </div>

        <hr class="border-secondary opacity-25">
        <div class="text-center small text-secondary">
            &copy; {{ now()->year }} Kishvi Consulting. All Rights Reserved.
        </div>
    </div>
</footer>

