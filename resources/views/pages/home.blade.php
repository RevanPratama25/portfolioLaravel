@extends('layouts.app')

@section('content')
<div class="w-full">
    
    <!-- HERO SECTION -->
    <section class="max-w-[1280px] mx-auto px-5 sm:px-8 md:px-10 lg:px-16 pt-16 md:pt-28 pb-16 md:pb-24 relative">
        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 pointer-events-none opacity-[0.03]" style="background-size: 40px 40px; background-image: linear-gradient(to right, var(--color-border-strong) 1px, transparent 1px), linear-gradient(to bottom, var(--color-border-strong) 1px, transparent 1px);"></div>
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 relative z-10">
            <div class="md:col-span-8 lg:col-span-8 flex flex-col items-start">
                <x-technical-note class="mb-8">Status: Available for opportunities</x-technical-note>
                
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[72px] font-bold text-text-primary leading-[1.05] tracking-tight mb-8">
                    Software Engineering Student & Full-stack Developer
                </h1>
                
                <p class="text-lg sm:text-xl text-text-secondary leading-relaxed max-w-[640px] mb-8 font-medium">
                    I build structured web and mobile applications that turn practical problems into usable digital products.
                </p>
                
                <p class="text-base sm:text-lg text-text-secondary leading-relaxed max-w-[640px] mb-12">
                    Software Engineering student focused on Laravel and Flutter development, with experience building productivity, asset management, and real-time monitoring applications.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <x-button href="#projects" variant="primary">View Projects</x-button>
                    <x-button href="#about" variant="secondary">About Me</x-button>
                </div>
            </div>
        </div>
    </section>

    <!-- DIVIDER -->
    <div class="w-full h-px bg-border-default"></div>

    <!-- FEATURED WORK SECTION -->
    <section id="projects" class="max-w-[1280px] mx-auto px-5 sm:px-8 md:px-10 lg:px-16 py-20 md:py-32">
        <x-section-heading>Featured Work</x-section-heading>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            <div class="lg:col-span-5 flex flex-col order-2 lg:order-1">
                <h3 class="text-2xl md:text-3xl font-bold text-text-primary tracking-tight mb-4">
                    AssetFlow &mdash; Office Asset Management System
                </h3>
                
                <p class="text-text-secondary text-base leading-relaxed mb-8">
                    A web-based office asset management system for managing assets, users, borrowing workflows, maintenance, damage reports, and administrative reporting.
                </p>
                
                <div class="flex flex-col mb-10 border-t border-border-default">
                    <x-project-meta label="Role" value="Full-stack Developer" />
                    <x-project-meta label="Type" value="Web Application" />
                    <x-project-meta label="Stack" value="Laravel · Livewire · TALL Stack" />
                </div>
                
                <x-button href="{{ route('projects.assetflow') }}" variant="secondary" class="self-start">View Case Study &rarr;</x-button>
            </div>
            
            <!-- PROJECT IMAGE -->
            <div class="lg:col-span-7 order-1 lg:order-2">
                <a href="{{ route('projects.assetflow') }}" class="block focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-accent focus-visible:outline-offset-2">
                    <x-project-image src="{{ asset('images/assetflow-landing-page.webp') }}" alt="AssetFlow Landing Page" />
                </a>
            </div>
        </div>
    </section>

    <!-- DIVIDER -->
    <div class="w-full h-px bg-border-default"></div>

    <!-- ABOUT SECTION -->
    <section id="about" class="max-w-[1280px] mx-auto px-5 sm:px-8 md:px-10 lg:px-16 py-20 md:py-32 bg-surface-soft">
        <x-section-heading>About</x-section-heading>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            <div class="lg:col-span-6">
                <h3 class="text-2xl font-bold text-text-primary mb-6 tracking-tight">Engineering Focus</h3>
                <p class="text-text-secondary text-lg leading-relaxed mb-6">
                    I focus on building structured web and mobile applications that solve practical problems through clear architecture, usable interfaces, and maintainable engineering practices.
                </p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-4">
                        <div class="w-1.5 h-1.5 bg-accent mt-2.5 flex-shrink-0"></div>
                        <span class="text-text-primary font-medium">Web Application Development</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-1.5 h-1.5 bg-accent mt-2.5 flex-shrink-0"></div>
                        <span class="text-text-primary font-medium">Mobile Application Development</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-1.5 h-1.5 bg-accent mt-2.5 flex-shrink-0"></div>
                        <span class="text-text-primary font-medium">Backend & Application Architecture</span>
                    </li>
                </ul>
            </div>
            
            <div class="lg:col-span-5 lg:col-start-8">
                <h3 class="text-2xl font-bold text-text-primary mb-6 tracking-tight">Primary Stack</h3>
                <div class="flex flex-col border-t border-border-default">
                    <x-project-meta label="Backend & Framework" value="Laravel, PHP, Livewire" />
                    <x-project-meta label="Frontend Styling" value="Tailwind CSS" />
                    <x-project-meta label="Mobile" value="Flutter, Firebase" />
                    <x-project-meta label="Database" value="MySQL" />
                </div>
            </div>
        </div>
    </section>

    <!-- DIVIDER -->
    <div class="w-full h-px bg-border-default"></div>

    <!-- CONTACT SECTION -->
    <section id="contact" class="max-w-[1280px] mx-auto px-5 sm:px-8 md:px-10 lg:px-16 py-20 md:py-32">
        <div class="max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-text-primary tracking-tight mb-8">
                Interested in working together or discussing a project?
            </h2>
            
            <div class="flex flex-wrap items-center gap-x-8 gap-y-6 w-full">
                @php
                    $emailIcon = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>';
                    $linkedinIcon = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" x="2" y="9" width="4" height="12"></rect><circle stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" cx="4" cy="4" r="2"></circle></svg>';
                    $githubIcon = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>';
                @endphp
                
                <x-social-link href="mailto:revanpratama434@gmail.com" :icon="$emailIcon">
                    Email
                </x-social-link>
                
                <x-social-link href="https://www.linkedin.com/in/reva-dede-pratama-78662a371/" :icon="$linkedinIcon">
                    LinkedIn
                </x-social-link>
                
                <x-social-link href="https://github.com/RevanPratama25" :icon="$githubIcon">
                    GitHub
                </x-social-link>
            </div>
        </div>
    </section>

</div>
@endsection
