@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
])

@php
    $baseStyles = "inline-flex items-center justify-center font-medium transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0A0E1A] min-h-[44px] min-w-[44px] px-6 py-3 rounded-lg text-sm sm:text-base";

    $variants = [
        'primary' => "bg-[#4555FD] hover:bg-[#3744E0] text-white shadow-sm active:scale-[0.98]",
        'secondary' => "bg-[#141C2E] hover:bg-[#1B243B] text-slate-200 hover:text-white border border-white/[0.12] hover:border-white/[0.24] active:scale-[0.98]",
        'subtle' => "bg-transparent text-slate-300 hover:text-white hover:bg-white/[0.04]",
        'accent' => "bg-white text-[#0A0E1A] hover:bg-slate-100 font-semibold active:scale-[0.98]",
    ];

    $classes = $baseStyles . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
