@props(['faqs'])

<section id="faq" class="py-20 sm:py-28 lg:py-32 border-b border-white/[0.08]" aria-labelledby="faq-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left Header -->
            <div class="lg:col-span-5">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#00E5FF] block mb-3 font-sans">
                    Executive Clarifications
                </span>
                <h2 id="faq-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-tight mb-4 font-sans">
                    Frequently Asked Questions for Decision Makers
                </h2>
                <p class="text-base text-slate-300 leading-relaxed mb-8">
                    Direct answers regarding IP protection, team integration, timezone alignment, and contractual commitments.
                </p>
                <div class="p-6 rounded-xl bg-[#141C2E] border border-white/[0.08]">
                    <span class="text-sm font-semibold text-white block mb-1">Have a custom technical question?</span>
                    <p class="text-xs text-slate-400 mb-4 leading-relaxed">
                        Speak directly with a Senior Technical Architect to review your repository, tech stack, or roadmap.
                    </p>
                    <x-ui.button variant="secondary" href="#inquire" class="w-full text-sm">
                        Ask a Senior Engineer
                    </x-ui.button>
                </div>
            </div>

            <!-- Right Accordion List -->
            <div class="lg:col-span-7 space-y-4" id="faq-accordion-group">
                @foreach($faqs as $index => $faq)
                    <div class="faq-item rounded-xl border border-white/[0.08] bg-[#141C2E] transition-colors">
                        <h3>
                            <button
                                type="button"
                                class="faq-trigger flex w-full items-center justify-between p-6 text-left text-base sm:text-lg font-semibold text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] rounded-xl"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="faq-answer-{{ $index }}"
                                id="faq-button-{{ $index }}"
                            >
                                <span class="pr-6 text-balance leading-snug">{{ $faq['question'] }}</span>
                                <span class="faq-icon flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-[#1B243B] text-slate-300 transition-transform duration-200 {{ $index === 0 ? 'rotate-180 text-white' : '' }}">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="faq-answer-{{ $index }}"
                            role="region"
                            aria-labelledby="faq-button-{{ $index }}"
                            class="faq-content px-6 pb-6 pt-1 text-sm sm:text-base text-slate-300 leading-relaxed border-t border-white/[0.04] {{ $index === 0 ? 'block' : 'hidden' }}"
                        >
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
