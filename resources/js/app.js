/**
 * Synex Digital — Vanilla JavaScript Interactions
 * Lightweight, zero-dependency, accessible interactions for Laravel frontend.
 */

document.addEventListener('DOMContentLoaded', () => {
    initMobileNav();
    initFaqAccordion();
    initInquiryForm();
    initSmoothAnchors();
});

/**
 * Mobile Navigation Drawer
 */
function initMobileNav() {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const drawer = document.getElementById('mobile-menu-drawer');
    const overlay = document.getElementById('mobile-menu-overlay');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    const navLinks = document.querySelectorAll('.mobile-nav-link');

    if (!toggleBtn || !drawer || !overlay) return;

    let isOpen = false;

    function openMenu() {
        isOpen = true;
        drawer.classList.remove('hidden');
        overlay.classList.remove('hidden');
        hamburgerIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        toggleBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        isOpen = false;
        drawer.classList.add('hidden');
        overlay.classList.add('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        toggleBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    toggleBtn.addEventListener('click', () => {
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    overlay.addEventListener('click', closeMenu);

    navLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isOpen) {
            closeMenu();
            toggleBtn.focus();
        }
    });
}

/**
 * Accessible FAQ Accordion
 */
function initFaqAccordion() {
    const triggers = document.querySelectorAll('.faq-trigger');

    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
            const contentId = trigger.getAttribute('aria-controls');
            const content = document.getElementById(contentId);
            const icon = trigger.querySelector('.faq-icon');

            // Collapse other open items for a clean single-accordion feel
            triggers.forEach(otherTrigger => {
                if (otherTrigger !== trigger) {
                    otherTrigger.setAttribute('aria-expanded', 'false');
                    const otherContentId = otherTrigger.getAttribute('aria-controls');
                    const otherContent = document.getElementById(otherContentId);
                    const otherIcon = otherTrigger.querySelector('.faq-icon');
                    if (otherContent) otherContent.classList.add('hidden');
                    if (otherIcon) {
                        otherIcon.classList.remove('rotate-180', 'text-white');
                    }
                }
            });

            // Toggle current item
            if (isExpanded) {
                trigger.setAttribute('aria-expanded', 'false');
                if (content) content.classList.add('hidden');
                if (icon) icon.classList.remove('rotate-180', 'text-white');
            } else {
                trigger.setAttribute('aria-expanded', 'true');
                if (content) content.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-180', 'text-white');
            }
        });
    });
}

/**
 * Contact Inquiry Form Validation & Transparent Notification
 */
function initInquiryForm() {
    const form = document.getElementById('project-inquiry-form');
    if (!form) return;

    const feedbackEl = document.getElementById('form-feedback');

    const fields = [
        { id: 'full-name', errorId: 'full-name-error', validate: (val) => val.trim().length >= 2 },
        { id: 'work-email', errorId: 'work-email-error', validate: (val) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val.trim()) },
        { id: 'company-name', errorId: 'company-name-error', validate: (val) => val.trim().length >= 2 },
        { id: 'capability-select', errorId: 'capability-select-error', validate: (val) => val.trim() !== '' },
        { id: 'project-scope', errorId: 'project-scope-error', validate: (val) => val.trim().length >= 10 },
    ];

    // Real-time error removal on input
    fields.forEach(({ id, errorId }) => {
        const input = document.getElementById(id);
        const error = document.getElementById(errorId);
        if (input && error) {
            input.addEventListener('input', () => {
                input.classList.remove('border-rose-500');
                error.classList.add('hidden');
            });
        }
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        let hasErrors = false;

        fields.forEach(({ id, errorId, validate }) => {
            const input = document.getElementById(id);
            const error = document.getElementById(errorId);
            if (!input || !error) return;

            if (!validate(input.value)) {
                hasErrors = true;
                input.classList.add('border-rose-500');
                error.classList.remove('hidden');
            } else {
                input.classList.remove('border-rose-500');
                error.classList.add('hidden');
            }
        });

        if (feedbackEl) {
            if (hasErrors) {
                feedbackEl.className = 'p-4 rounded-lg text-sm bg-rose-950/40 border border-rose-500/40 text-rose-300';
                feedbackEl.innerHTML = '<strong>Validation Error:</strong> Please complete all required fields correctly before submitting.';
                feedbackEl.classList.remove('hidden');
                feedbackEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                // Clear inputs
                form.reset();

                // Transparent notice: No fake success!
                feedbackEl.className = 'p-5 rounded-lg text-sm bg-[#141C2E] border border-[#10B981]/50 text-slate-200';
                feedbackEl.innerHTML = `
                    <div class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-[#10B981] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <div class="space-y-1.5">
                            <strong class="text-white block">Form Specification Verified (Frontend Interactive Mode)</strong>
                            <p class="text-slate-300 text-xs leading-relaxed">
                                Thank you for testing the inquiry flow. In accordance with the current Phase 1 development scope, server-side database storage and email transports are deferred.
                            </p>
                            <p class="text-xs text-slate-400">
                                To schedule directly with a Senior Solutions Architect right now, please email <a href="mailto:contact@synexdigital.com" class="text-[#00E5FF] hover:underline font-medium">contact@synexdigital.com</a> or book directly on <a href="https://cal.com/synexdigital/meeting" target="_blank" rel="noopener noreferrer" class="text-[#00E5FF] hover:underline font-medium">Cal.com</a>.
                            </p>
                        </div>
                    </div>
                `;
                feedbackEl.classList.remove('hidden');
                feedbackEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }
    });
}

/**
 * Smooth Anchor Navigation with Sticky Header Offset
 */
function initSmoothAnchors() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                const headerOffset = 90; // Height of sticky header plus padding
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Update URL hash without jumping
                history.pushState(null, null, targetId);
            }
        });
    });
}
