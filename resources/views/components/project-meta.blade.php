@props(['label', 'value'])

<div {{ $attributes->merge(['class' => 'flex flex-col py-3 border-b border-border-default']) }}>
    <span class="text-xs font-mono text-text-muted mb-1 uppercase tracking-wider">{{ $label }}</span>
    <span class="text-sm font-medium text-text-primary font-mono">{{ $value }}</span>
</div>
