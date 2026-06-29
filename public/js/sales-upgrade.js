(function () {
    const doc = document;

    const addProgressBar = () => {
        if (doc.querySelector(".sales-progress-bar")) return;
        const bar = doc.createElement("div");
        bar.className = "sales-progress-bar";
        doc.body.appendChild(bar);
        const update = () => {
            const scrollTop = window.scrollY || doc.documentElement.scrollTop;
            const height = doc.documentElement.scrollHeight - window.innerHeight;
            const width = height > 0 ? (scrollTop / height) * 100 : 0;
            bar.style.width = Math.max(0, Math.min(100, width)) + "%";
        };
        window.addEventListener("scroll", update, { passive: true });
        update();
    };

    const addFloatingActions = () => {
        if (doc.querySelector(".sales-float-wrap")) return;

        const wrap = doc.createElement("div");
        wrap.className = "sales-float-wrap";

        const consult = doc.createElement("a");
        consult.className = "sales-float-btn sales-float-btn--primary";
        consult.href = "/contact";
        consult.textContent = "Book Consultation";

        const whatsapp = doc.createElement("a");
        whatsapp.className = "sales-float-btn sales-float-btn--whatsapp";
        whatsapp.href = "https://wa.me/919027293530";
        whatsapp.target = "_blank";
        whatsapp.rel = "noopener noreferrer";
        whatsapp.textContent = "WhatsApp Now";

        wrap.appendChild(consult);
        wrap.appendChild(whatsapp);
        doc.body.appendChild(wrap);
    };

    const buildPostJobModal = () => {
        if (doc.querySelector(".post-job-modal")) {
            return doc.querySelector(".post-job-modal");
        }

        const modal = doc.createElement("div");
        modal.className = "post-job-modal";
        modal.setAttribute("aria-hidden", "true");
        modal.innerHTML = `
            <div class="post-job-modal__backdrop" data-post-job-close="1"></div>
            <div class="post-job-modal__panel" role="dialog" aria-modal="true" aria-label="Post a Job Form">
                <div class="post-job-modal__header">
                    <h3 class="post-job-modal__title">Post a Job Requirement</h3>
                    <button type="button" class="post-job-modal__close" data-post-job-close="1" aria-label="Close">×</button>
                </div>
                <p class="post-job-modal__sub">Fill this form and our team will contact you quickly.</p>
                <form class="post-job-form" id="post-job-form">
                    <div class="post-job-form__field">
                        <label for="pj_company_name">Company Name *</label>
                        <input id="pj_company_name" name="company_name" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="pj_contact_person">Contact Person *</label>
                        <input id="pj_contact_person" name="contact_person" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="pj_email">Email *</label>
                        <input id="pj_email" type="email" name="email" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="pj_phone">Phone *</label>
                        <input id="pj_phone" name="phone" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="pj_job_role">Hiring For (Role) *</label>
                        <input id="pj_job_role" name="job_role" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="pj_hiring_count">No. of Positions</label>
                        <input id="pj_hiring_count" name="hiring_count" />
                    </div>
                    <div class="post-job-form__field post-job-form__field--full">
                        <label for="pj_message">Requirement Details</label>
                        <textarea id="pj_message" name="message"></textarea>
                    </div>
                    <div class="post-job-form__actions">
                        <span class="post-job-form__status" id="post-job-form-status"></span>
                        <button type="submit" class="post-job-form__submit" id="post-job-form-submit">Send Requirement</button>
                    </div>
                </form>
            </div>
        `;

        doc.body.appendChild(modal);
        return modal;
    };

    const wirePostJobModal = () => {
        const modal = buildPostJobModal();
        const form = modal.querySelector("#post-job-form");
        const statusEl = modal.querySelector("#post-job-form-status");
        const submitBtn = modal.querySelector("#post-job-form-submit");

        const openModal = () => {
            modal.classList.add("is-open");
            modal.setAttribute("aria-hidden", "false");
            doc.body.classList.add("post-job-modal-open");
        };

        const closeModal = () => {
            modal.classList.remove("is-open");
            modal.setAttribute("aria-hidden", "true");
            doc.body.classList.remove("post-job-modal-open");
            statusEl.textContent = "";
            statusEl.classList.remove("is-error", "is-success");
        };

        modal.addEventListener("click", (event) => {
            if (event.target.closest("[data-post-job-close='1']")) {
                closeModal();
            }
        });

        doc.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && modal.classList.contains("is-open")) {
                closeModal();
            }
        });

        const targetLinks = Array.from(doc.querySelectorAll("a, button")).filter((element) => {
            const text = (element.textContent || "").trim().toLowerCase();
            return text === "post a job" || text.includes("post a job");
        });

        targetLinks.forEach((element) => {
            if (element.dataset.postJobBound === "1") {
                return;
            }

            element.dataset.postJobBound = "1";
            element.addEventListener("click", (event) => {
                event.preventDefault();
                openModal();
            });
        });

        form.addEventListener("submit", async (event) => {
            event.preventDefault();
            statusEl.textContent = "";
            statusEl.classList.remove("is-error", "is-success");
            submitBtn.disabled = true;

            const formData = new FormData(form);
            const csrf = doc.querySelector('meta[name="csrf-token"]')?.getAttribute("content") || "";

            try {
                const response = await fetch("/post-a-job", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": csrf,
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: formData,
                });

                const payload = await response.json();

                if (!response.ok || !payload.ok) {
                    statusEl.textContent = payload.message || "Unable to submit right now.";
                    statusEl.classList.add("is-error");
                    return;
                }

                statusEl.textContent = payload.message || "Submitted successfully.";
                statusEl.classList.add("is-success");
                form.reset();
                window.setTimeout(() => {
                    closeModal();
                }, 1300);
            } catch (error) {
                statusEl.textContent = "Network issue. Please try again.";
                statusEl.classList.add("is-error");
            } finally {
                submitBtn.disabled = false;
            }
        });
    };

    const buildApplyJobModal = () => {
        if (doc.querySelector(".apply-job-modal")) {
            return doc.querySelector(".apply-job-modal");
        }

        const modal = doc.createElement("div");
        modal.className = "post-job-modal apply-job-modal";
        modal.setAttribute("aria-hidden", "true");
        modal.innerHTML = `
            <div class="post-job-modal__backdrop" data-apply-job-close="1"></div>
            <div class="post-job-modal__panel" role="dialog" aria-modal="true" aria-label="Apply Job Form">
                <div class="post-job-modal__header">
                    <h3 class="post-job-modal__title">Apply for Job</h3>
                    <button type="button" class="post-job-modal__close" data-apply-job-close="1" aria-label="Close">×</button>
                </div>
                <p class="post-job-modal__sub">Fill your details and our team will contact you soon.</p>
                <form class="post-job-form" id="apply-job-form">
                    <div class="post-job-form__field">
                        <label for="aj_full_name">Full Name *</label>
                        <input id="aj_full_name" name="full_name" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="aj_email">Email *</label>
                        <input id="aj_email" type="email" name="email" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="aj_phone">Phone *</label>
                        <input id="aj_phone" name="phone" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="aj_job_role">Job Role *</label>
                        <input id="aj_job_role" name="job_role" required />
                    </div>
                    <div class="post-job-form__field">
                        <label for="aj_experience">Experience</label>
                        <input id="aj_experience" name="experience" placeholder="e.g. 2 years" />
                    </div>
                    <div class="post-job-form__field post-job-form__field--full">
                        <label for="aj_message">Message</label>
                        <textarea id="aj_message" name="message"></textarea>
                    </div>
                    <div class="post-job-form__actions">
                        <span class="post-job-form__status" id="apply-job-form-status"></span>
                        <button type="submit" class="post-job-form__submit" id="apply-job-form-submit">Submit Application</button>
                    </div>
                </form>
            </div>
        `;

        doc.body.appendChild(modal);
        return modal;
    };

    const wireApplyJobModal = () => {
        const modal = buildApplyJobModal();
        const form = modal.querySelector("#apply-job-form");
        const statusEl = modal.querySelector("#apply-job-form-status");
        const submitBtn = modal.querySelector("#apply-job-form-submit");
        const roleInput = modal.querySelector("#aj_job_role");

        const openModal = (prefillRole) => {
            modal.classList.add("is-open");
            modal.setAttribute("aria-hidden", "false");
            doc.body.classList.add("post-job-modal-open");
            if (prefillRole) {
                roleInput.value = prefillRole;
            }
        };

        const closeModal = () => {
            modal.classList.remove("is-open");
            modal.setAttribute("aria-hidden", "true");
            doc.body.classList.remove("post-job-modal-open");
            statusEl.textContent = "";
            statusEl.classList.remove("is-error", "is-success");
        };

        modal.addEventListener("click", (event) => {
            if (event.target.closest("[data-apply-job-close='1']")) {
                closeModal();
            }
        });

        const applyTriggers = Array.from(doc.querySelectorAll("a, button")).filter((element) => {
            const text = (element.textContent || "").trim().toLowerCase();
            const href = (element.getAttribute("href") || "").trim().toLowerCase();
            const isApplyTrigger = text === "apply now" || text.includes("apply job");
            const isCandidatesTrigger =
                text === "candidates" ||
                text.includes("candidate") ||
                href === "/candidates" ||
                href.endsWith("/candidates") ||
                href === "candidates";

            return isApplyTrigger || isCandidatesTrigger || element.dataset.openApplyJob === "1";
        });

        applyTriggers.forEach((element) => {
            if (element.dataset.applyJobBound === "1") return;
            element.dataset.applyJobBound = "1";
            element.addEventListener("click", (event) => {
                event.preventDefault();
                const role = element.closest(".card, article, .industry-card")?.querySelector("h3")?.textContent?.trim() || "";
                openModal(role);
            });
        });

        form.addEventListener("submit", async (event) => {
            event.preventDefault();
            statusEl.textContent = "";
            statusEl.classList.remove("is-error", "is-success");
            submitBtn.disabled = true;

            const formData = new FormData(form);
            const csrf = doc.querySelector('meta[name="csrf-token"]')?.getAttribute("content") || "";

            try {
                const response = await fetch("/apply-job", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": csrf,
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: formData,
                });
                const payload = await response.json();

                if (!response.ok || !payload.ok) {
                    statusEl.textContent = payload.message || "Unable to submit right now.";
                    statusEl.classList.add("is-error");
                    return;
                }

                statusEl.textContent = payload.message || "Application submitted.";
                statusEl.classList.add("is-success");
                form.reset();
                window.setTimeout(() => closeModal(), 1300);
            } catch (error) {
                statusEl.textContent = "Network issue. Please try again.";
                statusEl.classList.add("is-error");
            } finally {
                submitBtn.disabled = false;
            }
        });
    };

    const wireContactLeadForm = () => {
        const forms = Array.from(doc.querySelectorAll("form")).filter((form) => {
            const button = form.querySelector("button");
            if (!button) return false;
            if (!/send\s*(us\s*)?message/i.test(button.textContent || "")) return false;
            if (!form.querySelector("input[type='email']")) return false;
            if (!form.querySelector("textarea")) return false;
            return true;
        });

        forms.forEach((form) => {
            if (form.dataset.contactLeadBound === "1") return;
            form.dataset.contactLeadBound = "1";

            let statusEl = form.querySelector(".contact-form-status");
            if (!statusEl) {
                statusEl = doc.createElement("div");
                statusEl.className = "post-job-form__status contact-form-status mt-2";
                form.appendChild(statusEl);
            }

            const submitButton = form.querySelector("button");
            if (submitButton && submitButton.getAttribute("type") === "button") {
                submitButton.setAttribute("type", "submit");
            }

            form.addEventListener("submit", async (event) => {
                event.preventDefault();
                statusEl.textContent = "";
                statusEl.classList.remove("is-error", "is-success");

                const textInputs = Array.from(form.querySelectorAll('input[type="text"]'));
                const firstName =
                    form.querySelector('input[name="first_name"]')?.value?.trim() ||
                    form.querySelector('input[placeholder*="First"]')?.value?.trim() ||
                    textInputs[0]?.value?.trim() ||
                    "";
                const lastName =
                    form.querySelector('input[name="last_name"]')?.value?.trim() ||
                    form.querySelector('input[placeholder*="Last"]')?.value?.trim() ||
                    textInputs[1]?.value?.trim() ||
                    "";
                const email = form.querySelector('input[type="email"]')?.value?.trim() || "";
                const phone = form.querySelector('input[type="tel"], input[placeholder*="Phone"]')?.value?.trim() || "";
                const subject = form.querySelector("select")?.value?.trim() || "";
                const message = form.querySelector("textarea")?.value?.trim() || "";
                const messageWithSubject = subject
                    ? `Subject: ${subject}\n\n${message}`
                    : message;

                const payload = new FormData();
                payload.append("first_name", firstName);
                payload.append("last_name", lastName);
                payload.append("email", email);
                payload.append("phone", phone);
                payload.append("message", messageWithSubject);

                const csrf = doc.querySelector('meta[name="csrf-token"]')?.getAttribute("content") || "";

                try {
                    const response = await fetch("/contact-lead", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": csrf,
                            "X-Requested-With": "XMLHttpRequest",
                        },
                        body: payload,
                    });

                    const data = await response.json();
                    if (!response.ok || !data.ok) {
                        statusEl.textContent = data.message || "Unable to send query right now.";
                        statusEl.classList.add("is-error");
                        return;
                    }

                    statusEl.textContent = data.message || "Query received successfully.";
                    statusEl.classList.add("is-success");
                    form.reset();
                } catch (error) {
                    statusEl.textContent = "Network issue. Please try again.";
                    statusEl.classList.add("is-error");
                }
            });
        });
    };

    const removeTopLoginButtons = () => {
        const nav = doc.querySelector("#job-portal-main-navbar");
        if (!nav) return;

        const loginElements = Array.from(nav.querySelectorAll("a, button")).filter((element) => {
            const text = (element.textContent || "").trim().toLowerCase();
            return text === "login" || text.includes(" login");
        });

        loginElements.forEach((element) => {
            const wrapper = element.closest("li, .flex, .inline-flex, .job-portal-mobile-link") || element;
            if (wrapper && wrapper !== nav) {
                wrapper.remove();
            } else {
                element.remove();
            }
        });
    };

    const mapFooterLinksToRoutes = () => {
        const routeMap = {
            "browse jobs": "/browse-jobs",
            companies: "/companies",
            "career advice": "/career-advice",
            candidates: "/candidates",
        };

        const links = Array.from(doc.querySelectorAll("a.footer-link, footer a, #footer-container a"));
        links.forEach((link) => {
            const text = (link.textContent || "").trim().toLowerCase();
            if (!text) return;

            if (text.includes("post a job")) {
                link.setAttribute("href", "#");
                return;
            }

            if (text === "login") {
                link.closest("li")?.remove();
                return;
            }

            if (routeMap[text]) {
                link.setAttribute("href", routeMap[text]);
            }
        });
    };

    const enableRevealAnimation = () => {
        const targets = Array.from(
            doc.querySelectorAll(
                "section, .card, .contact-card, .industry-card, .value-card, .accordion-item"
            )
        );

        targets.forEach((item) => item.classList.add("sales-reveal"));

        if (!("IntersectionObserver" in window)) {
            targets.forEach((item) => item.classList.add("is-visible"));
            return;
        }

        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        obs.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
        );

        targets.forEach((item) => observer.observe(item));
    };

    const init = () => {
        removeTopLoginButtons();
        mapFooterLinksToRoutes();
        addProgressBar();
        addFloatingActions();
        wirePostJobModal();
        wireApplyJobModal();
        wireContactLeadForm();
        doc.body.classList.remove("sales-dark");
        enableRevealAnimation();
    };

    if (doc.readyState === "loading") {
        doc.addEventListener("DOMContentLoaded", init);
    } else {
        init();
    }
})();
