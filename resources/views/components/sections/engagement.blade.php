@props(['engagementModels'])

<section id="engagement" class="py-20 sm:py-28 lg:py-32 border-b border-white/[0.08]" aria-labelledby="engagement-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-[70ch] mb-16">
            <span class="text-xs font-semibold uppercase tracking-wider text-[#00E5FF] block mb-3 font-sans">
                Collaboration Frameworks
            </span>
            <h2 id="engagement-heading" class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-tight mb-4 font-sans text-balance">
                Flexible Engagement Models Designed for CXO Confidence
            </h2>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed text-pretty max-w-[65ch]">
                Whether you need dedicated senior engineers embedded into your existing workflow or a turnkey project delivered to specification, we structure contracts around alignment and accountability.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @foreach($engagementModels as $index => $model)
                <div class="rounded-xl border border-white/[0.08] bg-[#141C2E] p-8 flex flex-col justify-between transition-colors hover:border-white/[0.20] {{ $index === 0 ? 'ring-1 ring-[#4555FD]/50' : '' }}">
                    <div>
                        @if($index === 0)
                            <div class="mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-[#4555FD]/20 text-[#00E5FF] border border-[#4555FD]/30">
                                    Most Popular for US Teams
                                </span>
                            </div>
                        @endif
                        <h3 class="text-2xl font-bold text-white mb-2 text-balance">
                            {{ $model['title'] }}
                        </h3>
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-4">
                            {{ $model['target'] }}
                        </p>
                        <p class="text-sm text-slate-300 leading-relaxed mb-6 text-pretty max-w-[45ch]">
                            {{ $model['description'] }}
                        </p>

                        <div class="border-t border-white/[0.06] pt-6 mb-8">
                            <span class="text-xs font-semibold uppercase tracking-wider text-white block mb-3">
                                Model Highlights:
                            </span>
                            <ul class="space-y-2.5 text-sm text-slate-300">
                                @foreach($model['features'] as $feature)
                                    <li class="flex items-start gap-2.5">
                                        <svg class="h-4 w-4 text-[#10B981] mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                            <polyline points="20 6 9 17 4 12" />
                                        </svg>
                                        <span class="leading-relaxed max-w-[45ch]">{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div>
                        <x-ui.button :variant="$index === 0 ? 'primary' : 'secondary'" href="#inquire" class="w-full">
                            {{ $model['cta'] }}
                        </x-ui.button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
