@props(['engineeringStandards'])

<section id="standards" class="py-20 sm:py-28 lg:py-32 border-b border-white/[0.08]" aria-labelledby="standards-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left Header & Philosophy -->
            <div class="lg:col-span-5">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#00E5FF] block mb-3 font-sans">
                    Quality Verification
                </span>
                <h2 id="standards-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-tight mb-6 font-sans text-balance">
                    Engineered for Production Rigor, Not Just Speed
                </h2>
                <p class="text-base text-slate-300 leading-relaxed mb-6 text-pretty max-w-[55ch]">
                    Fast delivery without architectural discipline creates compound interest on technical debt. Every module we engineer adheres to strict standards for type verification, memory efficiency, and security isolation.
                </p>
                <div class="p-5 rounded-lg bg-[#141C2E] border border-white/[0.08] space-y-3">
                    <span class="text-xs font-semibold uppercase tracking-wider text-white">Our Baseline Promise:</span>
                    <p class="text-sm text-slate-400 leading-relaxed text-pretty max-w-[50ch]">
                        No undocumented dependencies, zero unverified npm scripts, and automated test passes required before any deployment to staging or production.
                    </p>
                </div>
            </div>

            <!-- Right Standards Grid (2x2 layout, distinct cards with technical depth) -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach($engineeringStandards as $standard)
                    <div class="rounded-xl border border-white/[0.08] bg-[#141C2E] p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-white mb-2.5 text-balance">
                                {{ $standard['title'] }}
                            </h3>
                            <p class="text-sm text-slate-300 leading-relaxed mb-4 text-pretty max-w-[45ch]">
                                {{ $standard['description'] }}
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/[0.06]">
                            <span class="text-xs font-mono text-slate-400 block leading-normal">
                                {{ $standard['detail'] }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
