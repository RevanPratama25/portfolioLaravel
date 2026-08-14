@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button'
])

@php
    $baseClasses = 'inline-flex items-center justify-center px-6 py-3 text-sm font-bold tracking-wide uppercase transition-colors focus:outline-none';
    $variantClasses = [
        'primary' => 'bg-accent text-white hover:bg-accent-dark',
        'secondary' => 'bg-surface border border-border-default text-text-primary hover:border-border-strong',
    ];
    $classes = $baseClasses . ' ' . ($variantClasses[$variant] ?? $variantClasses['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
