<header class="sticky top-0 z-50 w-full border-b border-white/[0.08] bg-[#0A0E1A]/90 backdrop-blur-md transition-colors">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <!-- Brand Wordmark -->
        <a href="/" class="group flex items-center gap-3.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0A0E1A] rounded-md p-1" aria-label="Synex Digital Homepage">
            <!-- Distinctive Geometric Monogram -->
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#141C2E] border border-white/[0.12] text-white transition-colors group-hover:border-[#4555FD]/60">
                <svg class="h-5 w-5 text-[#4555FD] transition-transform duration-200 group-hover:scale-105" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polygon points="12 2 2 7 12 12 22 7 12 2" />
                    <polyline points="2 17 12 22 22 17" />
                    <polyline points="2 12 12 17 22 12" />
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="font-bold tracking-wider text-white text-lg leading-tight uppercase font-sans">
                    Synex<span class="text-[#4555FD]">.</span>Digital
                </span>
                <span class="text-[11px] font-medium tracking-widest text-slate-400 uppercase">
                    Custom Engineering
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-8" aria-label="Primary Navigation">
            <a href="#services" class="text-sm font-medium text-slate-300 hover:text-white transition-colors py-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] rounded">
                Services
            </a>
            <a href="#standards" class="text-sm font-medium text-slate-300 hover:text-white transition-colors py-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] rounded">
                Engineering Standards
            </a>
            <a href="#process" class="text-sm font-medium text-slate-300 hover:text-white transition-colors py-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] rounded">
                Process
            </a>
            <a href="#engagement" class="text-sm font-medium text-slate-300 hover:text-white transition-colors py-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] rounded">
                Engagement Models
            </a>
            <a href="#faq" class="text-sm font-medium text-slate-300 hover:text-white transition-colors py-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] rounded">
                FAQ
            </a>
        </nav>

        <!-- Right Side Action & Mobile Menu Button -->
        <div class="flex items-center gap-4">
            <div class="hidden sm:block">
                <x-ui.button variant="primary" href="#inquire">
                    <span>Start Project Inquiry</span>
                    <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </x-ui.button>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-toggle" type="button" class="md:hidden flex h-11 w-11 items-center justify-center rounded-lg bg-[#141C2E] text-slate-300 hover:text-white hover:bg-[#1B243B] border border-white/[0.08] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD]" aria-controls="mobile-menu-drawer" aria-expanded="false" aria-label="Open main navigation menu">
                <svg id="hamburger-icon" class="h-6 w-6 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="hidden h-6 w-6 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Overlay & Panel -->
    <div id="mobile-menu-overlay" class="hidden fixed inset-0 z-40 bg-black/60 backdrop-blur-sm transition-opacity" aria-hidden="true"></div>

    <div id="mobile-menu-drawer" class="hidden fixed top-20 inset-x-0 z-50 border-b border-white/[0.12] bg-[#0A0E1A] p-6 shadow-2xl transition-all md:hidden" role="dialog" aria-modal="true" aria-label="Mobile Menu">
        <nav class="flex flex-col gap-4 text-base font-medium">
            <a href="#services" class="mobile-nav-link text-slate-300 hover:text-white py-2 border-b border-white/[0.06]">
                Services & Solutions
            </a>
            <a href="#standards" class="mobile-nav-link text-slate-300 hover:text-white py-2 border-b border-white/[0.06]">
                Engineering Standards
            </a>
            <a href="#process" class="mobile-nav-link text-slate-300 hover:text-white py-2 border-b border-white/[0.06]">
                Delivery Protocol
            </a>
            <a href="#engagement" class="mobile-nav-link text-slate-300 hover:text-white py-2 border-b border-white/[0.06]">
                Engagement Models
            </a>
            <a href="#faq" class="mobile-nav-link text-slate-300 hover:text-white py-2 border-b border-white/[0.06]">
                Frequently Asked Questions
            </a>
            <div class="pt-4">
                <x-ui.button variant="primary" href="#inquire" class="w-full mobile-nav-link">
                    Start Project Inquiry
                </x-ui.button>
            </div>
        </nav>
    </div>
</header>
