@extends('layouts.app')

@php
    $title = 'AssetFlow — Office Asset Management System | Revan';
    $description = 'AssetFlow is a web-based office asset management system designed to organize asset inventory, borrowing workflows, maintenance, damage reporting, and administrative reporting.';
@endphp

@section('content')
<article class="w-full max-w-[1280px] mx-auto px-5 sm:px-8 md:px-10 lg:px-16 pt-16 pb-32">
    <!-- 1. PROJECT HEADER -->
    <div class="mb-12">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-text-primary mb-4">AssetFlow</h1>
        <p class="text-xl md:text-2xl text-text-secondary max-w-3xl leading-relaxed mb-12">
            Office Asset Management System
        </p>

        <!-- PROJECT METADATA -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-6 border-y border-border-default">
            <div>
                <h3 class="text-xs font-bold text-text-muted uppercase tracking-wider mb-2 font-mono">Role</h3>
                <p class="text-text-primary text-sm font-medium">Full-stack Developer</p>
            </div>
            <div>
                <h3 class="text-xs font-bold text-text-muted uppercase tracking-wider mb-2 font-mono">Project Type</h3>
                <p class="text-text-primary text-sm font-medium">Personal Project</p>
            </div>
            <div>
                <h3 class="text-xs font-bold text-text-muted uppercase tracking-wider mb-2 font-mono">Stack</h3>
                <p class="text-text-primary text-sm font-medium">Laravel · Livewire · Tailwind CSS</p>
            </div>
            <div>
                <h3 class="text-xs font-bold text-text-muted uppercase tracking-wider mb-2 font-mono">Status</h3>
                <p class="text-text-primary text-sm font-medium">Completed</p>
            </div>
        </div>
    </div>

    <!-- 2. HERO VISUAL -->
    <div class="mb-16 md:mb-24 w-full aspect-[16/9] bg-surface-soft border border-border-default flex items-center justify-center">
        <!-- Placeholder for actual project image -->
        <span class="text-text-muted font-mono text-sm tracking-wide">ASSETFLOW DASHBOARD PREVIEW</span>
    </div>

    <!-- 2-Column Grid for Metadata & Narrative -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 mb-24">
        <!-- Main Narrative Column -->
        <div class="lg:col-span-8 flex flex-col gap-16">
            <!-- 3. OVERVIEW & PROBLEM -->
            <section>
                <x-section-heading>Overview</x-section-heading>
                <div class="prose max-w-none text-text-primary text-lg leading-relaxed">
                    <p class="mb-6">
                        AssetFlow is a web-based office asset management system designed to organize asset inventory, borrowing workflows, maintenance, damage reporting, and administrative reporting.
                    </p>
                    <p class="mb-6">
                        Asset management involves multiple interconnected workflows: identifying available assets, organizing them by category and location, controlling access, requesting assets, approving borrowing requests, tracking active usage, processing returns, reporting damage, managing maintenance, and generating administrative reports.
                    </p>
                    <p>
                        AssetFlow centralizes these workflows into a single web application, focusing on workflow coordination and business rules.
                    </p>
                </div>
            </section>

            <!-- 4. PROJECT GOALS -->
            <section>
                <x-section-heading>Goals</x-section-heading>
                <ul class="list-disc pl-5 text-text-secondary text-lg leading-relaxed space-y-2">
                    <li>Centralize asset records.</li>
                    <li>Organize assets using categories and locations.</li>
                    <li>Support controlled asset borrowing.</li>
                    <li>Separate administrator and staff capabilities.</li>
                    <li>Track asset lifecycle states.</li>
                    <li>Support return verification.</li>
                    <li>Track damage and maintenance.</li>
                    <li>Provide administrative visibility through dashboards and reports.</li>
                    <li>Export borrowing reports as PDF documents.</li>
                </ul>
            </section>
        </div>
    </div>

    <!-- 5. KEY CAPABILITIES -->
    <section class="mb-24">
        <x-section-heading>Key Features</x-section-heading>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-bold text-text-primary mb-3">User & Asset Management</h3>
                <ul class="list-disc pl-5 text-text-secondary space-y-2">
                    <li>Role-based access control (Admin & Staff)</li>
                    <li>CRUD for users, categories, locations</li>
                    <li>Asset tracking with status and usage types (individu/bersama)</li>
                    <li>Asset photo uploads with validation</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold text-text-primary mb-3">Borrowing & Lifecycle</h3>
                <ul class="list-disc pl-5 text-text-secondary space-y-2">
                    <li>Staff asset catalog and borrowing requests</li>
                    <li>Administrative review (Approve/Reject)</li>
                    <li>Return initiation and verification</li>
                    <li>Damage reporting and maintenance workflow</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold text-text-primary mb-3">Reporting & Analytics</h3>
                <ul class="list-disc pl-5 text-text-secondary space-y-2">
                    <li>Operational dashboard insights</li>
                    <li>Asset status and category visualization</li>
                    <li>Filtered borrowing reports</li>
                    <li>PDF report export via DomPDF</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 6. USERS & ROLES -->
    <section class="mb-24">
        <x-section-heading>Users & Roles</x-section-heading>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-8 border-t border-border-default">
            <div>
                <h3 class="text-sm font-bold text-text-primary mb-6 font-mono uppercase tracking-wide border-b border-border-default pb-3">Administrator</h3>
                <p class="text-text-secondary mb-4">Administrative routes are protected using custom route middleware. Administrators can:</p>
                <ul class="list-disc pl-5 text-text-secondary space-y-2">
                    <li>Manage users, categories, locations, and assets</li>
                    <li>Review borrowing requests</li>
                    <li>Verify returns</li>
                    <li>Manage maintenance</li>
                    <li>View dashboard analytics and generate reports</li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-bold text-text-primary mb-6 font-mono uppercase tracking-wide border-b border-border-default pb-3">Staff</h3>
                <p class="text-text-secondary mb-4">Staff members interact with the asset catalog and manage their own requests. Staff can:</p>
                <ul class="list-disc pl-5 text-text-secondary space-y-2">
                    <li>Browse, search, and filter available assets</li>
                    <li>Submit and cancel borrowing requests</li>
                    <li>View personal borrowing history</li>
                    <li>Initiate asset returns</li>
                    <li>Report asset damage</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 7. CORE WORKFLOWS -->
    <section class="mb-24">
        <x-section-heading>Core Workflows</x-section-heading>
        <div class="space-y-12">
            <div>
                <h3 class="text-lg font-bold text-text-primary mb-4 font-mono uppercase tracking-wide">Borrowing</h3>
                <div class="flex flex-wrap items-center gap-3 font-mono text-sm">
                    <span class="px-3 py-2 border border-border-default">Available</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">Request</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default bg-surface-soft">Pending</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">Approved/Rejected</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">In Use</span>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-bold text-text-primary mb-4 font-mono uppercase tracking-wide">Return</h3>
                <div class="flex flex-wrap items-center gap-3 font-mono text-sm">
                    <span class="px-3 py-2 border border-border-default">In Use</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">Return Initiated</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default bg-surface-soft">Admin Verification</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">Completed</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">Available</span>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-bold text-text-primary mb-4 font-mono uppercase tracking-wide">Maintenance</h3>
                <div class="flex flex-wrap items-center gap-3 font-mono text-sm">
                    <span class="px-3 py-2 border border-border-default">Damaged</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">Maintenance</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default bg-surface-soft">Under Maintenance</span>
                    <span class="text-text-muted">&rarr;</span>
                    <span class="px-3 py-2 border border-border-default">Available</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. ASSET LIFECYCLE -->
    <section class="mb-24">
        <x-section-heading>Asset Lifecycle</x-section-heading>
        <p class="text-text-secondary text-lg mb-8">
            Explicit asset states and transitions coordinate borrowing, return, damage, and maintenance workflows.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-8 border-t border-border-default">
            <div>
                <h3 class="text-sm font-bold text-text-primary mb-6 font-mono uppercase tracking-wide border-b border-border-default pb-3 text-center">Borrowing Lifecycle</h3>
                <div class="flex flex-col items-center font-mono text-sm space-y-3">
                    <span class="text-text-primary">Tersedia</span>
                    <span class="text-text-muted">&darr;</span>
                    <span class="text-text-primary">Dipakai</span>
                    <span class="text-text-muted">&darr;</span>
                    <span class="text-text-primary">Tersedia</span>
                </div>
            </div>
            <div>
                <h3 class="text-sm font-bold text-text-primary mb-6 font-mono uppercase tracking-wide border-b border-border-default pb-3 text-center">Maintenance Lifecycle</h3>
                <div class="flex flex-col items-center font-mono text-sm space-y-3">
                    <span class="text-text-primary">Tersedia / Dipakai</span>
                    <span class="text-text-muted">&darr;</span>
                    <span class="text-error font-medium">Rusak</span>
                    <span class="text-text-muted">&darr;</span>
                    <span class="text-text-primary">Dalam Perbaikan</span>
                    <span class="text-text-muted">&darr;</span>
                    <span class="text-text-primary">Tersedia</span>
                </div>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24">
        <!-- 9. TECHNICAL ARCHITECTURE -->
        <section>
            <x-section-heading>Technical Architecture</x-section-heading>
            <ul class="font-mono text-sm flex flex-col items-center text-center space-y-2 mb-10 pt-8 border-t border-border-default">
                <li class="text-text-primary font-medium">Browser</li>
                <li class="text-text-muted">&darr;</li>
                <li class="text-text-primary font-medium">Laravel Application</li>
                <li class="text-text-muted">&darr;</li>
                <li class="text-text-primary font-medium">Eloquent ORM</li>
                <li class="text-text-muted">&darr;</li>
                <li class="text-text-primary font-medium">Relational Database</li>
            </ul>
            
            <h3 class="text-sm font-bold text-text-primary mb-4 font-mono uppercase tracking-wide">Supporting Systems</h3>
            <ul class="font-mono text-sm flex flex-col space-y-3">
                <li class="flex items-center gap-4"><span class="w-32 text-right text-text-primary">Laravel Storage</span> <span class="text-text-muted">&rarr;</span> <span class="text-text-secondary">Asset Photos</span></li>
                <li class="flex items-center gap-4"><span class="w-32 text-right text-text-primary">DomPDF</span> <span class="text-text-muted">&rarr;</span> <span class="text-text-secondary">Borrowing Reports</span></li>
                <li class="flex items-center gap-4"><span class="w-32 text-right text-text-primary">Chart.js</span> <span class="text-text-muted">&rarr;</span> <span class="text-text-secondary">Dashboard Visualization</span></li>
                <li class="flex items-center gap-4"><span class="w-32 text-right text-text-primary">Vite</span> <span class="text-text-muted">&rarr;</span> <span class="text-text-secondary">Asset Compilation</span></li>
            </ul>
        </section>

        <!-- 10. DOMAIN MODEL -->
        <section>
            <x-section-heading>Domain Model</x-section-heading>
            <div class="pt-6 border-t border-border-default overflow-x-auto">
<pre class="font-mono text-sm leading-relaxed text-text-primary">
User
├── BorrowingRequest
└── current asset assignment

Asset
├── Category
├── Location
├── current User
├── BorrowingRequest
└── MaintenanceLog

MaintenanceLog
├── Asset
└── User
</pre>
            </div>
        </section>
    </div>

    <!-- 11. TECHNICAL DECISIONS -->
    <section class="mb-24">
        <x-section-heading>Technical Decisions</x-section-heading>
        <dl class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div>
                <dt class="text-lg font-bold text-text-primary mb-2">Laravel Framework</dt>
                <dd class="text-text-secondary leading-relaxed">Used as the primary application framework for routing, authentication integration, server-side application logic, and database interaction. Integrated Laravel authentication scaffolding for registration, login, password management, and email verification.</dd>
            </div>
            <div>
                <dt class="text-lg font-bold text-text-primary mb-2">Livewire</dt>
                <dd class="text-text-secondary leading-relaxed">Used to build reactive server-driven interfaces while keeping application workflows closely integrated with Laravel. Powers interactive workflows like searching, filtering, modal-based interaction, administrative CRUD, and borrowing workflows.</dd>
            </div>
            <div>
                <dt class="text-lg font-bold text-text-primary mb-2">Eloquent ORM</dt>
                <dd class="text-text-secondary leading-relaxed">Handles data modeling and relationships, translating the domain model (User, Asset, BorrowingRequest, MaintenanceLog) into relational persistence.</dd>
            </div>
            <div>
                <dt class="text-lg font-bold text-text-primary mb-2">Tailwind CSS</dt>
                <dd class="text-text-secondary leading-relaxed">Provides interface styling strictly adhering to the design constraints (light theme, sharp geometry, specific typography tokens) without creating large custom CSS payloads.</dd>
            </div>
        </dl>
    </section>

    <!-- 12. ENGINEERING CHALLENGES -->
    <section class="mb-24">
        <x-section-heading>Engineering Challenges</x-section-heading>
        <div class="space-y-12 border-l-2 border-border-default pl-6">
            <div>
                <h3 class="text-xl font-bold text-text-primary mb-2">1. Asset State Coordination</h3>
                <p class="text-text-primary font-medium mb-1">Challenge:</p>
                <p class="text-text-secondary mb-4">Managing the state transitions across borrowing, returning, and maintenance to prevent inconsistent states.</p>
                <p class="text-text-primary font-medium mb-1">Approach:</p>
                <p class="text-text-secondary">Implemented explicit asset statuses (`Tersedia`, `Dipakai`, `Rusak`, `Dalam Perbaikan`) and strictly coupled transitions to specific user-initiated or admin-initiated actions.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-text-primary mb-2">2. Role Separation</h3>
                <p class="text-text-primary font-medium mb-1">Challenge:</p>
                <p class="text-text-secondary">Ensuring administrative functions are securely isolated from staff borrowing interactions.</p>
                <p class="text-text-primary font-medium mb-1">Approach:</p>
                <p class="text-text-secondary">Used custom route middleware to explicitly verify roles before granting access to administrative routes, and prevented self-deletion by administrators as a concrete business rule.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-text-primary mb-2">3. Conditional Business Rules</h3>
                <p class="text-text-primary font-medium mb-1">Challenge:</p>
                <p class="text-text-secondary">Assets have different behaviors; shared assets have locations while individual assets have user assignments, and only certain assets can be borrowed.</p>
                <p class="text-text-primary font-medium mb-1">Approach:</p>
                <p class="text-text-secondary">Implemented application-level business rules restricting the staff catalog to assets with status `Tersedia` and usage type `individu`.</p>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24">
        <!-- 13. TECHNICAL LIMITATION -->
        <section>
            <x-section-heading>Technical Limitation</x-section-heading>
            <p class="text-text-secondary leading-relaxed mb-4">
                The current borrowing approval flow validates asset availability at the application level but does not yet use database transactions or row-level locking for concurrent approval scenarios.
            </p>
            <p class="text-text-primary font-medium">Future direction:</p>
            <p class="text-text-secondary leading-relaxed">
                Introduce transactional approval with appropriate row-level locking to make asset state transitions atomic.
            </p>
        </section>

        <!-- 14. TESTING -->
        <section>
            <x-section-heading>Testing</x-section-heading>
            <div class="pt-6 border-t border-border-default">
                <p class="text-text-secondary leading-relaxed font-medium">
                    Authentication workflows are covered by existing automated tests, while core domain workflows currently have limited automated test coverage.
                </p>
            </div>
        </section>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24">
        <!-- 15. LESSONS LEARNED -->
        <section>
            <x-section-heading>Lessons Learned</x-section-heading>
            <ul class="list-disc pl-5 text-text-secondary leading-relaxed space-y-3">
                <li>Business rules extend beyond CRUD.</li>
                <li>Domain relationships strongly affect workflow design.</li>
                <li>Shared-state workflows require attention to data integrity.</li>
                <li>Framework infrastructure can be reused to focus effort on domain-specific functionality.</li>
                <li>Workflow-heavy interfaces benefit from reactive UI patterns.</li>
            </ul>
        </section>

        <!-- 16. FUTURE IMPROVEMENTS -->
        <section>
            <x-section-heading>Future Improvements</x-section-heading>
            <ul class="list-disc pl-5 text-text-secondary leading-relaxed space-y-3">
                <li>Transactional borrowing approval</li>
                <li>Row-level locking where appropriate</li>
                <li>Automated tests for core domain workflows</li>
                <li>Broader authorization tests</li>
                <li>Asset history/audit trail</li>
                <li>Expanded reporting</li>
                <li>Operational observability</li>
            </ul>
        </section>
    </div>

    <!-- 17. FINAL CTA -->
    <section class="border-t border-border-default pt-16 flex flex-col items-center text-center">
        <h2 class="text-3xl font-bold text-text-primary tracking-tight mb-8">Interested in the code?</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <x-button href="https://github.com/RevanPratama25" variant="primary">VIEW GITHUB</x-button>
            <x-button href="/#contact" variant="secondary">GET IN TOUCH</x-button>
        </div>
    </section>

</article>
@endsection
