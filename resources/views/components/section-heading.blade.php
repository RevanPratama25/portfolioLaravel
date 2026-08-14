<div {{ $attributes->merge(['class' => 'mb-10 md:mb-16']) }}>
    <div class="flex items-center gap-6">
        <h2 class="text-xl md:text-2xl font-semibold tracking-tight text-text-primary uppercase font-mono">{{ $slot }}</h2>
        <div class="flex-grow h-px bg-border-default"></div>
    </div>
</div>
