@props(['services'])

<section id="services" class="py-20 sm:py-28 lg:py-32 border-b border-white/[0.08]" aria-labelledby="services-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="max-w-[70ch] mb-16 sm:mb-20">
            <span class="text-xs font-semibold uppercase tracking-wider text-[#00E5FF] block mb-3 font-sans">
                Core Specializations
            </span>
            <h2 id="services-heading" class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-tight text-balance mb-4 font-sans">
                Engineering Services Aligned With Concrete Business Outcomes
            </h2>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed text-pretty max-w-[65ch]">
                We do not sell generic staff hours. Every service engagement is organized around eliminating technical bottlenecks, scaling throughput, and delivering maintainable, production-ready systems.
            </p>
        </div>

        <!-- Varied, Deep-Dive Service Cards (Flattened hierarchy: zero nested cards) -->
        <div class="space-y-8 lg:space-y-12">
            @foreach($services as $index => $service)
                <article class="rounded-xl border border-white/[0.08] bg-[#141C2E] p-6 sm:p-8 lg:p-10 transition-colors hover:border-white/[0.20]">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                        <!-- Left Summary & Context -->
                        <div class="lg:col-span-5 flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-semibold uppercase tracking-widest text-slate-400 font-mono">
                                    0{{ $index + 1 }} // {{ $service['category'] }}
                                </span>
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-bold text-white tracking-tight leading-snug text-balance">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-slate-300 text-base leading-relaxed text-pretty max-w-[60ch]">
                                {{ $service['summary'] }}
                            </p>

                            <!-- Problem vs Solution Matrix -->
                            <div class="mt-4 pt-4 border-t border-white/[0.06] space-y-3">
                                <div class="text-sm">
                                    <span class="font-semibold text-slate-200">The Challenge:</span>
                                    <p class="text-slate-400 mt-1 leading-relaxed text-pretty max-w-[55ch]">{{ $service['problem'] }}</p>
                                </div>
                                <div class="text-sm">
                                    <span class="font-semibold text-white">Our Architectural Solution:</span>
                                    <p class="text-slate-300 mt-1 leading-relaxed text-pretty max-w-[55ch]">{{ $service['solution'] }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Deliverables & Tech Foundation (Divided via border, not nested card) -->
                        <div class="lg:col-span-7 flex flex-col justify-between h-full pt-6 lg:pt-0 border-t lg:border-t-0 lg:border-l border-white/[0.08] lg:pl-10">
                            <div>
                                <h4 class="text-xs font-semibold uppercase tracking-wider text-slate-300 mb-4">
                                    Core Engineering Deliverables
                                </h4>
                                <ul class="space-y-3 text-sm text-slate-300 mb-8">
                                    @foreach($service['deliverables'] as $deliverable)
                                        <li class="flex items-start gap-3">
                                            <svg class="h-4 w-4 text-[#10B981] mt-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                                <polyline points="20 6 9 17 4 12" />
                                            </svg>
                                            <span class="leading-relaxed max-w-[60ch]">{{ $deliverable }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="pt-4 border-t border-white/[0.06]">
                                <h4 class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-3">
                                    Primary Technologies & Frameworks
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($service['tech'] as $tech)
                                        <span class="inline-flex items-center px-3 py-1 rounded-md text-xs font-medium bg-[#0A0E1A] text-slate-200 border border-white/[0.08]">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
