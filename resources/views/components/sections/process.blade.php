@props(['processSteps'])

<section id="process" class="py-20 sm:py-28 lg:py-32 border-b border-white/[0.08]" aria-labelledby="process-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-[70ch] mb-16">
            <span class="text-xs font-semibold uppercase tracking-wider text-[#00E5FF] block mb-3 font-sans">
                Delivery Protocol
            </span>
            <h2 id="process-heading" class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-tight mb-4 font-sans text-balance">
                Predictable Sprints With Complete Architectural Transparency
            </h2>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed text-pretty max-w-[65ch]">
                We eliminate surprises with a structured 4-phase collaboration lifecycle. You maintain real-time visibility into code commits, task tracking, and staging builds at every milestone.
            </p>
        </div>

        <!-- 4 Step Sequential Process Pathway -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($processSteps as $step)
                <div class="relative rounded-xl border border-white/[0.08] bg-[#141C2E] p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-bold font-mono text-[#818CF8]">
                                {{ $step['step'] }}
                            </span>
                            <span class="text-xs font-medium px-2.5 py-1 rounded bg-[#1B243B] text-slate-300 border border-white/[0.06]">
                                {{ $step['timeline'] }}
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-3 text-balance">
                            {{ $step['name'] }}
                        </h3>
                        <p class="text-sm text-slate-300 leading-relaxed mb-6 text-pretty max-w-[45ch]">
                            {{ $step['summary'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-white/[0.06]">
                        <span class="text-xs font-semibold uppercase tracking-wider text-slate-400 block mb-2">
                            Key Artifacts:
                        </span>
                        <ul class="space-y-1.5 text-xs text-slate-300">
                            @foreach($step['outputs'] as $output)
                                <li class="flex items-center gap-2">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#818CF8]"></span>
                                    <span>{{ $output }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
