<section id="inquire" class="py-20 sm:py-28 lg:py-32 bg-[#0A0E1A]" aria-labelledby="inquire-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            <!-- Left Value & Contact Information -->
            <div class="lg:col-span-5">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#00E5FF] block mb-3 font-sans">
                    Start a Technical Conversation
                </span>
                <h2 id="inquire-heading" class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-tight mb-6 font-sans text-balance">
                    Discuss Your Architecture & Scope With a Senior Engineer
                </h2>
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed mb-8 text-pretty max-w-[55ch]">
                    Skip the sales pitch. Send us your project requirements, current technical bottlenecks, or planned roadmap. A Senior Solutions Architect will review and provide technical feedback within one business day.
                </p>

                <div class="space-y-4 pt-4 border-t border-white/[0.08]">
                    <div class="flex items-start gap-3">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-[#141C2E] border border-white/[0.10] text-[#10B981]">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-sm font-semibold text-white block">Standard Mutual NDA</span>
                            <span class="text-xs text-slate-400">We execute mutual NDAs prior to reviewing proprietary codebases or specs.</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-[#141C2E] border border-white/[0.10] text-[#10B981]">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-sm font-semibold text-white block">Direct Lead Availability</span>
                            <span class="text-xs text-slate-400">Guaranteed 24-hour turnaround for initial scoping reviews.</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-[#141C2E] border border-white/[0.10] text-[#10B981]">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-sm font-semibold text-white block">Prefer Calendar Scheduling?</span>
                            <span class="text-xs text-slate-400">Book an initial 20-minute architecture discovery via <a href="https://cal.com/synexdigital/meeting" target="_blank" rel="noopener noreferrer" class="text-[#818CF8] hover:underline">Cal.com</a>.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Inquiry Form (Frontend Only Notice & Functional Validation) -->
            <div class="lg:col-span-7 rounded-2xl border border-white/[0.12] bg-[#141C2E] p-8 sm:p-10 shadow-xl">
                <!-- Explicit Frontend-Only Indicator (Anti-Slop & Quality compliant) -->
                <div class="mb-6 rounded-lg bg-[#1B243B] p-4 border border-white/[0.08] flex items-center justify-between text-xs text-slate-300">
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-[#00E5FF]"></span>
                        <span>Phase 1 Scope: <strong>Frontend Interactive Mode</strong></span>
                    </div>
                    <span class="text-slate-400">Backend integrations deferred</span>
                </div>

                <form id="project-inquiry-form" novalidate class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Name Field -->
                        <div>
                            <label for="full-name" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                                Full Name <span class="text-[#00E5FF]">*</span>
                            </label>
                            <input
                                type="text"
                                id="full-name"
                                name="full_name"
                                required
                                placeholder="e.g. Alex Morgan"
                                class="w-full rounded-lg bg-[#0A0E1A] border border-white/[0.12] px-4 py-3 text-sm text-white placeholder-slate-400 transition-colors focus:border-[#4555FD] focus:ring-1 focus:ring-[#4555FD] focus:outline-none"
                            >
                            <span class="error-msg hidden text-xs text-rose-400 mt-1.5 block" id="full-name-error">Please enter your full name.</span>
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="work-email" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                                Work Email <span class="text-[#00E5FF]">*</span>
                            </label>
                            <input
                                type="email"
                                id="work-email"
                                name="work_email"
                                required
                                placeholder="alex@company.com"
                                class="w-full rounded-lg bg-[#0A0E1A] border border-white/[0.12] px-4 py-3 text-sm text-white placeholder-slate-400 transition-colors focus:border-[#4555FD] focus:ring-1 focus:ring-[#4555FD] focus:outline-none"
                            >
                            <span class="error-msg hidden text-xs text-rose-400 mt-1.5 block" id="work-email-error">Please provide a valid work email.</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Company Field -->
                        <div>
                            <label for="company-name" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                                Company / Organization <span class="text-[#00E5FF]">*</span>
                            </label>
                            <input
                                type="text"
                                id="company-name"
                                name="company_name"
                                required
                                placeholder="e.g. Acme Tech Inc."
                                class="w-full rounded-lg bg-[#0A0E1A] border border-white/[0.12] px-4 py-3 text-sm text-white placeholder-slate-400 transition-colors focus:border-[#4555FD] focus:ring-1 focus:ring-[#4555FD] focus:outline-none"
                            >
                            <span class="error-msg hidden text-xs text-rose-400 mt-1.5 block" id="company-name-error">Please enter your company name.</span>
                        </div>

                        <!-- Primary Capability Needed -->
                        <div>
                            <label for="capability-select" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                                Primary Need <span class="text-[#00E5FF]">*</span>
                            </label>
                            <select
                                id="capability-select"
                                name="primary_capability"
                                required
                                class="w-full rounded-lg bg-[#0A0E1A] border border-white/[0.12] px-4 py-3 text-sm text-white transition-colors focus:border-[#4555FD] focus:ring-1 focus:ring-[#4555FD] focus:outline-none"
                            >
                                <option value="" class="bg-[#0A0E1A] text-slate-400">Select engagement area...</option>
                                <option value="ecommerce" class="bg-[#0A0E1A]">Custom eCommerce Development</option>
                                <option value="ai" class="bg-[#0A0E1A]">Applied AI & Workflow Automation</option>
                                <option value="webapp" class="bg-[#0A0E1A]">Full-Stack Web / App Engineering</option>
                                <option value="uiux" class="bg-[#0A0E1A]">UI/UX Design & Design Systems</option>
                                <option value="api" class="bg-[#0A0E1A]">API Architecture & Enterprise Integration</option>
                                <option value="audit" class="bg-[#0A0E1A]">Codebase Audit & Modernization</option>
                            </select>
                            <span class="error-msg hidden text-xs text-rose-400 mt-1.5 block" id="capability-select-error">Please select your primary requirement.</span>
                        </div>
                    </div>

                    <!-- Project Context / Scope -->
                    <div>
                        <label for="project-scope" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                            Project Overview & Technical Context <span class="text-[#00E5FF]">*</span>
                        </label>
                        <textarea
                            id="project-scope"
                            name="project_scope"
                            rows="4"
                            required
                            placeholder="Describe your current tech stack, target timeline, key challenges, or deliverables required..."
                            class="w-full rounded-lg bg-[#0A0E1A] border border-white/[0.12] px-4 py-3 text-sm text-white placeholder-slate-400 transition-colors focus:border-[#4555FD] focus:ring-1 focus:ring-[#4555FD] focus:outline-none"
                        ></textarea>
                        <span class="error-msg hidden text-xs text-rose-400 mt-1.5 block" id="project-scope-error">Please provide a brief summary of your project.</span>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button
                            type="submit"
                            id="submit-inquiry-btn"
                            class="w-full inline-flex items-center justify-center font-medium bg-[#4555FD] hover:bg-[#3744E0] text-white min-h-[48px] px-8 py-3.5 rounded-lg text-base transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0A0E1A] active:scale-[0.99]"
                        >
                            <span>Transmit Inquiry Specification</span>
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>

                    <!-- Dynamic Feedback Message Container (No fake success) -->
                    <div id="form-feedback" class="hidden p-4 rounded-lg text-sm border" role="alert" aria-live="polite"></div>
                </form>
            </div>
        </div>
    </div>
</section>
