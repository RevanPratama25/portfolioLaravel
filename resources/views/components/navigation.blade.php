<nav class="w-full border-b border-border-default bg-surface sticky top-0 z-50">
    <div class="max-w-[1280px] mx-auto px-5 sm:px-8 md:px-10 lg:px-16 flex items-center justify-between h-16">
        <!-- Brand -->
        <a href="{{ route('home') }}" class="text-text-primary font-bold text-lg tracking-tight hover:text-accent transition-colors">
            REVAN.DEV
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex h-full space-x-8">
            <a href="{{ route('home') }}" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors {{ request()->routeIs('home') ? 'border-accent text-accent' : 'border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong' }}">
                HOME
            </a>
            <a href="{{ route('home') }}#projects" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong">
                PROJECTS
            </a>
            <a href="{{ route('home') }}#about" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong">
                ABOUT
            </a>
            <a href="{{ route('home') }}#contact" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong">
                CONTACT
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden flex items-center text-text-primary focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-accent focus-visible:outline-offset-2" aria-label="Toggle Menu" aria-expanded="false" aria-controls="mobile-menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-border-default bg-surface px-5 py-4 space-y-4">
        <a href="{{ route('home') }}" class="block text-sm font-medium {{ request()->routeIs('home') ? 'text-accent' : 'text-text-secondary' }}">HOME</a>
        <a href="{{ route('home') }}#projects" class="block text-sm font-medium text-text-secondary">PROJECTS</a>
        <a href="{{ route('home') }}#about" class="block text-sm font-medium text-text-secondary">ABOUT</a>
        <a href="{{ route('home') }}#contact" class="block text-sm font-medium text-text-secondary">CONTACT</a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        
        const closeMenu = () => {
            btn.setAttribute('aria-expanded', 'false');
            menu.classList.add('hidden');
        };

        if (btn && menu) {
            btn.addEventListener('click', () => {
                const expanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', !expanded);
                menu.classList.toggle('hidden');
            });

            // Escape key handling
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && btn.getAttribute('aria-expanded') === 'true') {
                    closeMenu();
                    btn.focus(); // Return focus to button when closed via keyboard
                }
            });
        }
    });
</script>
