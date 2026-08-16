@props(['src' => null, 'alt' => ''])

<div {{ $attributes->merge(['class' => 'w-full aspect-video bg-surface-soft border border-border-default flex items-center justify-center relative overflow-hidden group']) }}>
    @if($src)
        <img src="{{ $src }}" alt="{{ $alt }}" class="object-fill w-full h-full" loading="lazy">
    @else
        <!-- Structural Placeholder -->
        <div class="absolute inset-0 bg-surface-soft grid place-items-center">
            <div class="text-center flex flex-col items-center z-10">
                <svg class="w-8 h-8 text-text-muted mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span class="text-xs font-mono text-text-muted uppercase tracking-widest bg-surface-soft px-2">Image Asset Pending</span>
            </div>
            <!-- Technical Grid Overlay for placeholder -->
            <div class="absolute inset-0 pointer-events-none opacity-50" style="background-size: 24px 24px; background-image: linear-gradient(to right, var(--color-border-default) 1px, transparent 1px), linear-gradient(to bottom, var(--color-border-default) 1px, transparent 1px);"></div>
        </div>
    @endif
</div>
