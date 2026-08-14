@props(['href', 'icon'])

<a href="{{ $href }}" target="_blank" rel="noopener noreferrer" {{ $attributes->merge(['class' => 'inline-flex items-center gap-3 pb-2 border-b border-border-default hover:border-accent text-sm font-mono text-text-secondary hover:text-text-primary uppercase group focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-accent focus-visible:outline-offset-4 transition-all']) }}>
    <span class="text-text-muted group-hover:text-accent transition-colors">
        {!! $icon !!}
    </span>
    <span class="font-medium tracking-wide">{{ $slot }}</span>
</a>
