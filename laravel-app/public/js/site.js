/**
 * NEO Lab & Instrumentation Services
 * Site JavaScript - Minimal vanilla JS for interactions
 */

(function() {
    'use strict';

    // ============================================================
    // 1) NAVBAR SCROLL EFFECT
    // ============================================================
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;

    function handleNavbarScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
        
        lastScrollTop = scrollTop;
    }

    window.addEventListener('scroll', handleNavbarScroll);

    // ============================================================
    // 2) KPI COUNT-UP ANIMATION
    // ============================================================
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (target === 100 ? '%' : '+');
                clearInterval(timer);
            } else {
                element.textContent = Math.ceil(current);
            }
        }, 16);
    }

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.target.textContent === '0') {
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.kpi-counter').forEach(counter => {
        counterObserver.observe(counter);
    });

    // ============================================================
    // 3) SOLUTIONS OVERVIEW TAB SWITCHING
    // ============================================================
    const categoryPills = document.querySelectorAll('.category-pill');
    const solutionGroups = document.querySelectorAll('.solutions-group');

    categoryPills.forEach(pill => {
        pill.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active pill
            categoryPills.forEach(p => p.classList.remove('active'));
            this.classList.add('active');
            
            // Show/hide solution groups
            solutionGroups.forEach(group => {
                if (group.getAttribute('data-category') === category) {
                    group.classList.remove('d-none');
                    group.classList.add('fade-in');
                } else {
                    group.classList.add('d-none');
                    group.classList.remove('fade-in');
                }
            });
        });
    });

    // ============================================================
    // 4) CONTACT FORM DEMO (prevent submit, show alert)
    // ============================================================
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success alert
            const alertHtml = `
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <strong>Thank you for your message!</strong> This is a demo form. In production, your message would be sent to our team.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
            
            const alertContainer = document.getElementById('formAlertContainer');
            if (alertContainer) {
                alertContainer.innerHTML = alertHtml;
                contactForm.reset();
                
                // Scroll to alert
                alertContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });
    }

    // ============================================================
    // 5) LICENSE VALIDATION DEMO
    // ============================================================
    const validateButtons = document.querySelectorAll('.validate-certificate-btn');
    validateButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const alertContainer = this.closest('.card').querySelector('.validation-alert-container');
            if (alertContainer) {
                const alertHtml = `
                    <div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Demo Validation:</strong> This is a demonstration feature. Please contact us directly for official certificate verification.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `;
                alertContainer.innerHTML = alertHtml;
            }
        });
    });

    // ============================================================
    // 6) SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ============================================================
    // 7) CARD HOVER EFFECTS (add subtle animations)
    // ============================================================
    document.querySelectorAll('.neo-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // ============================================================
    // 8) DROPDOWN CLOSE ON OUTSIDE CLICK (mobile support)
    // ============================================================
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.navbar')) {
            document.querySelectorAll('.navbar .dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });

})();
