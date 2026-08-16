<nav class="w-full border-b border-border-default bg-surface sticky top-0 z-50">
    <div class="max-w-[1280px] mx-auto px-5 sm:px-8 md:px-10 lg:px-16 flex items-center justify-between h-16">
        <!-- Brand -->
        <a href="{{ route('home') }}" class="text-text-primary font-bold text-lg tracking-tight hover:text-accent transition-colors">
            REVAN.DEV
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex h-full space-x-8">
            <a href="{{ route('home') }}" data-nav-item="home" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors {{ request()->routeIs('home') ? 'border-accent text-accent' : 'border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong' }}">
                HOME
            </a>
            <a href="{{ request()->is('projects/*') ? request()->url() : route('home') . '#projects' }}" data-nav-item="projects" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors {{ request()->is('projects/*') ? 'border-accent text-accent' : 'border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong' }}">
                PROJECTS
            </a>
            <a href="{{ route('home') }}#about" data-nav-item="about" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong">
                ABOUT
            </a>
            <a href="{{ route('home') }}#contact" data-nav-item="contact" class="h-full flex items-center text-sm font-medium border-b-2 transition-colors border-transparent text-text-secondary hover:text-text-primary hover:border-border-strong">
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
        <a href="{{ route('home') }}" data-nav-item="home" class="block text-sm font-medium {{ request()->routeIs('home') ? 'text-accent' : 'text-text-secondary' }}">HOME</a>
        <a href="{{ request()->is('projects/*') ? request()->url() : route('home') . '#projects' }}" data-nav-item="projects" class="block text-sm font-medium {{ request()->is('projects/*') ? 'text-accent' : 'text-text-secondary' }}">PROJECTS</a>
        <a href="{{ route('home') }}#about" data-nav-item="about" class="block text-sm font-medium text-text-secondary">ABOUT</a>
        <a href="{{ route('home') }}#contact" data-nav-item="contact" class="block text-sm font-medium text-text-secondary">CONTACT</a>
    </div>
</nav>

<script>
    // Prevent immediate native fragment jump for cross-page hash navigation
    if (window.location.hash && 'scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }

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

        // --- NAVIGATION & SCROLL ENHANCEMENTS ---
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        let scrollAnimationId = null;
        let scrollTargetY = null;

        function interruptScroll() {
            if (scrollAnimationId) {
                cancelAnimationFrame(scrollAnimationId);
                scrollAnimationId = null;
                scrollTargetY = null;
            }
        }

        window.addEventListener('wheel', interruptScroll, { passive: true });
        window.addEventListener('touchstart', interruptScroll, { passive: true });

        function customScrollTo(targetY, duration = 400) {
            if (prefersReducedMotion) {
                window.scrollTo(0, targetY);
                return;
            }

            scrollTargetY = targetY;

            if (scrollAnimationId) {
                cancelAnimationFrame(scrollAnimationId);
            }

            const startY = window.scrollY;
            const distance = targetY - startY;
            let startTime = null;

            // easeOutQuad
            const easeOutQuad = (t) => t * (2 - t);

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const progress = Math.min(timeElapsed / duration, 1);
                
                window.scrollTo(0, startY + (distance * easeOutQuad(progress)));

                if (timeElapsed < duration) {
                    scrollAnimationId = requestAnimationFrame(animation);
                } else {
                    scrollAnimationId = null;
                    scrollTargetY = null;
                }
            }

            scrollAnimationId = requestAnimationFrame(animation);
        }

        // Keyboard Scrolling Interception
        window.addEventListener('keydown', (e) => {
            if (prefersReducedMotion) return;

            const activeEl = document.activeElement;
            if (activeEl) {
                const tagName = activeEl.tagName.toLowerCase();
                const isEditable = activeEl.isContentEditable;
                if (tagName === 'input' || tagName === 'textarea' || tagName === 'select' || isEditable) {
                    return;
                }

                // BUG 3 FIX: Traverse ancestors to detect inner scrollable containers
                let current = activeEl;
                while (current && current !== document.body && current !== document.documentElement) {
                    const style = window.getComputedStyle(current);
                    const overflowY = style.overflowY;
                    if ((overflowY === 'auto' || overflowY === 'scroll') && current.scrollHeight > current.clientHeight) {
                        return; // Do not intercept if focused inside a scrollable container
                    }
                    current = current.parentElement;
                }
            }

            const viewportHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;
            const currentY = window.scrollY;
            
            let target = scrollTargetY !== null ? scrollTargetY : currentY;
            let handled = false;

            switch (e.key) {
                case 'ArrowDown': target += 100; handled = true; break;
                case 'ArrowUp': target -= 100; handled = true; break;
                case 'PageDown': target += viewportHeight * 0.85; handled = true; break;
                case 'PageUp': target -= viewportHeight * 0.85; handled = true; break;
                case 'Home': target = 0; handled = true; break;
                case 'End': target = documentHeight; handled = true; break;
            }

            if (handled) {
                e.preventDefault();
                target = Math.max(0, Math.min(target, documentHeight - viewportHeight));
                customScrollTo(target, 400);
            }
        });

        // Anchor Link Smooth Scroll
        document.querySelectorAll('a[data-nav-item]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const url = new URL(this.href, window.location.origin);
                
                if (url.pathname === window.location.pathname && url.hash) {
                    const targetElement = document.querySelector(url.hash);
                    if (targetElement) {
                        e.preventDefault();
                        history.pushState(null, null, url.hash);
                        
                        const offsetTop = targetElement.getBoundingClientRect().top + window.scrollY;
                        const navHeight = 64; // Sticky nav height (h-16)
                        customScrollTo(offsetTop - navHeight);
                        
                        if (window.innerWidth < 768 && btn && btn.getAttribute('aria-expanded') === 'true') {
                            closeMenu();
                        }
                    }
                } else if (url.pathname === window.location.pathname && !url.hash && this.getAttribute('data-nav-item') === 'home') {
                    // Clicked HOME while already on Homepage
                    e.preventDefault();
                    history.pushState(null, null, url.pathname);
                    customScrollTo(0);
                    if (window.innerWidth < 768 && btn && btn.getAttribute('aria-expanded') === 'true') {
                        closeMenu();
                    }
                }
            });
        });

        // IntersectionObserver for Active States (Homepage Only)
        const isHomePage = window.location.pathname === '/' || window.location.pathname === '';
        
        if (isHomePage) {
            const desktopActiveClasses = ['border-accent', 'text-accent'];
            const desktopInactiveClasses = ['border-transparent', 'text-text-secondary', 'hover:text-text-primary', 'hover:border-border-strong'];
            
            const mobileActiveClasses = ['text-accent'];
            const mobileInactiveClasses = ['text-text-secondary'];

            const updateNavClasses = (activeId) => {
                document.querySelectorAll('a[data-nav-item]').forEach(link => {
                    const isDesktop = link.classList.contains('border-b-2');
                    const isTarget = link.getAttribute('data-nav-item') === activeId;
                    
                    if (isDesktop) {
                        if (isTarget) {
                            link.classList.remove(...desktopInactiveClasses);
                            link.classList.add(...desktopActiveClasses);
                        } else {
                            link.classList.remove(...desktopActiveClasses);
                            link.classList.add(...desktopInactiveClasses);
                        }
                    } else {
                        if (isTarget) {
                            link.classList.remove(...mobileInactiveClasses);
                            link.classList.add(...mobileActiveClasses);
                        } else {
                            link.classList.remove(...mobileActiveClasses);
                            link.classList.add(...mobileInactiveClasses);
                        }
                    }
                });
            };

            const sections = [
                { id: 'home', el: document.querySelector('section:first-of-type') }, 
                { id: 'projects', el: document.getElementById('projects') },
                { id: 'about', el: document.getElementById('about') },
                { id: 'contact', el: document.getElementById('contact') }
            ].filter(s => s.el);

            let visibleSections = new Map();

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const id = entry.target.getAttribute('data-section-id');
                    visibleSections.set(id, entry.intersectionRatio);
                });

                let maxRatio = 0;
                let activeId = 'home';
                
                const isAtBottom = (window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50;

                if (isAtBottom && visibleSections.get('contact') > 0) {
                    activeId = 'contact';
                } else {
                    for (const [id, ratio] of visibleSections.entries()) {
                        if (ratio > maxRatio) {
                            maxRatio = ratio;
                            activeId = id;
                        }
                    }
                }
                
                updateNavClasses(activeId);
                
            }, {
                threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1.0],
                rootMargin: "-10% 0px -10% 0px"
            });

            sections.forEach(s => {
                s.el.setAttribute('data-section-id', s.id);
                observer.observe(s.el);
            });
        }

        // Initial Page Load Hash Smooth Scroll
        if (window.location.hash) {
            const targetElement = document.querySelector(window.location.hash);
            if (targetElement) {
                // Wait for initial layout/rendering to settle before smoothly scrolling
                setTimeout(() => {
                    const offsetTop = targetElement.getBoundingClientRect().top + window.scrollY;
                    const navHeight = 64; // Sticky nav height
                    customScrollTo(offsetTop - navHeight);
                }, 100);
            }
        }
    });
</script>
