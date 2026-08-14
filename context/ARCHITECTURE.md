# ARCHITECTURE.md

# Portfolio Architecture

**Project:** Revan Personal Portfolio
**Version:** V1
**Status:** Final
**Architecture Type:** Server-rendered Laravel application
**Primary Goal:** Maintainable, performant, accessible, and visually consistent professional portfolio

---

# 1. Architecture Overview

The portfolio is a **server-rendered Laravel application** using Blade and Tailwind CSS.

The architecture intentionally remains lightweight because the portfolio is primarily a content-driven professional website rather than a data-heavy application.

### Core Stack

| Layer           | Technology   | Purpose                                                |
| --------------- | ------------ | ------------------------------------------------------ |
| Framework       | Laravel      | Application structure and server-side routing          |
| View Layer      | Blade        | Server-rendered HTML                                   |
| Styling         | Tailwind CSS | Utility-first styling and design system implementation |
| Build Tool      | Vite         | Asset bundling and development workflow                |
| Interactivity   | Alpine.js    | Lightweight UI interaction when required               |
| Icons           | Lucide       | Consistent interface icons                             |
| Language        | PHP          | Server-side application logic                          |
| Version Control | Git / GitHub | Source control                                         |
| Database        | None         | Not required for V1                                    |
| Authentication  | None         | Not required for V1                                    |
| Analytics       | None         | Explicitly excluded from V1                            |

---

# 2. Architectural Principles

## 2.1 Simplicity First

Use the simplest architecture that satisfies the product requirements.

Do not introduce technical complexity without a concrete product or engineering requirement.

---

## 2.2 Server-Rendered First

The default rendering strategy is server-side rendering through Laravel Blade.

Static and content-heavy pages should not require client-side rendering.

---

## 2.3 Progressive Enhancement

The website must remain functional without JavaScript wherever reasonably possible.

JavaScript exists to enhance the experience, not to become a dependency for basic content consumption.

---

## 2.4 Componentized, Not Over-Abstracted

Reusable components should be created for recurring semantic UI patterns.

Do not create abstractions solely because markup happens to look similar.

> Abstract repeated meaning, not repeated markup.

---

## 2.5 Content and Presentation Must Remain Understandable

A developer inspecting the project should be able to quickly understand:

* Where routes are defined
* Where pages are rendered
* Where reusable components live
* Where styles are defined
* Where project assets are stored

---

## 2.6 No Hypothetical Infrastructure

Do not build infrastructure for features that do not currently exist.

Examples:

* Database without dynamic data requirements
* API without API consumers
* Authentication without authenticated users
* CMS without content management requirements
* Analytics without an analytics requirement

---

# 3. Application Architecture

The high-level request flow is:

```text
Browser
   │
   ▼
Laravel Router
   │
   ▼
Controller
   │
   ▼
Blade View
   │
   ├── Layout
   ├── Page Sections
   └── Reusable Components
   │
   ▼
HTML Response
   │
   ▼
Browser
```

For styling and optional interaction:

```text
Blade
  │
  ├── Tailwind CSS
  │
  └── Alpine.js (only when required)
```

---

# 4. Rendering Strategy

The portfolio uses **server-rendered HTML as the primary rendering model**.

### Default

```text
Request
   ↓
Laravel
   ↓
Blade
   ↓
HTML
```

### JavaScript

JavaScript is loaded only to provide interaction that cannot be reasonably achieved through HTML and CSS alone.

Examples:

* Mobile navigation
* Small UI state changes
* Progressive interaction
* Motion enhancement

---

# 5. Project Structure

The project should follow this structure:

```text
portfolio/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       └── ProjectController.php
│   │
│   └── Providers/
│
├── public/
│   ├── images/
│   │   ├── projects/
│   │   │   └── assetflow/
│   │   └── og/
│   │
│   ├── fonts/
│   └── favicon/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── components/
│       │   ├── navigation.blade.php
│       │   ├── footer.blade.php
│       │   ├── button.blade.php
│       │   ├── section-heading.blade.php
│       │   ├── project-meta.blade.php
│       │   ├── project-image.blade.php
│       │   ├── technical-note.blade.php
│       │   └── social-link.blade.php
│       │
│       ├── pages/
│       │   ├── home.blade.php
│       │   └── projects/
│       │       └── assetflow.blade.php
│       │
│       └── partials/
│           └── seo.blade.php
│
├── routes/
│   └── web.php
│
├── tests/
│
├── PRD.md
├── DESIGN.md
├── ARCHITECTURE.md
├── RULES.md
├── composer.json
├── package.json
└── vite.config.js
```

The exact Laravel-generated files may differ depending on the installed Laravel version. Existing framework conventions must be preserved.

---

# 6. Routing Architecture

V1 contains two primary application routes.

```text
GET /
GET /work/assetflow
```

Recommended route names:

```text
home
projects.assetflow
```

Conceptual implementation:

```php
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/work/assetflow', [ProjectController::class, 'assetflow'])
    ->name('projects.assetflow');
```

No additional application routes should be introduced without a product requirement.

### Explicitly Not Required

```text
/api/*
/admin/*
/login
/register
/dashboard
```

---

# 7. Controller Architecture

Controllers must remain thin.

## HomeController

Responsibilities:

* Prepare homepage data when necessary
* Return the homepage view

## ProjectController

Responsibilities:

* Prepare AssetFlow case study data when necessary
* Return the AssetFlow case study view

Controllers must not contain presentation-heavy markup.

Controllers must not become a replacement for services, view models, or content files unless actual complexity justifies those abstractions.

---

# 8. View Architecture

The Blade view layer follows a layout + reusable component architecture.

### Directory Structure

```text
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    │
    ├── components/
    │   ├── navigation.blade.php
    │   ├── footer.blade.php
    │   ├── button.blade.php
    │   ├── section-heading.blade.php
    │   ├── project-meta.blade.php
    │   ├── project-image.blade.php
    │   ├── technical-note.blade.php
    │   └── social-link.blade.php
    │
    ├── pages/
    │   ├── home.blade.php
    │   └── projects/
    │       └── assetflow.blade.php
    │
    └── partials/
        └── seo.blade.php

### Application Layout

```text
resources/views/layouts/app.blade.php
```

Responsible for:

* HTML document structure
* `<head>`
* Global metadata integration
* Global stylesheet loading
* Global JavaScript loading
* Navigation
* Main content slot
* Footer

## Global Layout Contract

`layouts/app.blade.php` is the global application shell.

Every public page must extend `layouts.app`.

The global layout is responsible for:

- HTML document structure
- SEO metadata
- Global assets
- Navigation
- Main content container
- Footer
- Head and script stacks

Page-specific content must be provided through:

`@section('content')`

Pages must not duplicate global navigation or footer markup.

---

## Navigation Contract

`components/navigation.blade.php` is the single source of truth
for global site navigation.

The navigation is rendered exclusively by `layouts/app.blade.php`.

Desktop navigation:

- INDEX
- PROJECTS
- ABOUT
- CONTACT
- GITHUB

Brand:

`REVAN.DEV`

Internal navigation must use named Laravel routes.

External destinations must use explicit external URLs.

The GitHub link is treated as an external action and must not
participate in internal route active-state logic.

The navigation must provide:

- active route state
- responsive mobile navigation
- keyboard accessibility
- visible focus states
- semantic navigation markup
- accessible mobile menu state

Navigation must follow DESIGN.md.

Do not use:

- pill shapes
- rounded corners
- glassmorphism
- excessive shadows
- decorative floating containers
- placeholder `href="#"` links
---

# 9. Page Architecture

## Homepage

```text
resources/views/pages/home.blade.php
```

Structure:

```text
Home
│
├── Hero
├── Selected Work
├── About
├── Skills
├── Development Approach
├── Contact
└── Footer
```

---

## AssetFlow Case Study

```text
resources/views/pages/projects/assetflow.blade.php
```

Structure:

```text
AssetFlow
│
├── Project Header
├── Overview
├── Problem
├── Goals
├── Role
├── Solution
├── Key Features
├── Technical Architecture
├── Data Model
├── Technical Decisions
├── Challenges
├── Solutions
├── Results
├── Lessons Learned
└── Future Improvements
```

The case study structure follows the requirements defined in `PRD.md`.

---

# 10. Component Architecture

Components should represent reusable semantic UI patterns.

## Global Components

Examples:

```text
navigation
footer
button
section-heading
social-link
```

## Project Components

Examples:

```text
project-meta
project-image
technical-note
project-feature
```

Components should remain focused and composable.

Avoid components that contain unrelated page-level business logic.

---

# 11. Component Creation Rules

Create a component when at least one of the following is true:

1. The pattern is reused.
2. The pattern has meaningful semantic identity.
3. The pattern has independent responsive behavior.
4. The pattern has meaningful accessibility behavior.
5. Extracting it significantly improves readability.

Do not create components for every HTML element.

### Avoid

```text
UniversalContainer
GenericWrapper
BaseSection
AbstractCard
UniversalText
```

unless their abstraction provides genuine value.

---

# 12. Styling Architecture

Tailwind CSS is the primary styling system.

The styling architecture must follow `DESIGN.md`.

```text
DESIGN.md
    ↓
Design Tokens
    ↓
Tailwind Configuration / CSS
    ↓
Components
    ↓
Pages
```

The visual system must not be recreated independently inside individual components.

---

# 13. Design Token Architecture

The following categories must be centralized:

```text
Colors
Typography
Spacing
Borders
Grid
Motion
Breakpoints
Focus States
```

Examples:

```text
--color-background
--color-surface
--color-foreground
--color-muted
--color-border
--color-accent

--font-display
--font-body
--font-mono
```

Exact token values are defined in `DESIGN.md`.

Components should consume the existing design tokens rather than inventing local visual values.

---

# 14. CSS Rules

Use Tailwind utilities for normal component styling.

Custom CSS should be introduced when:

* A design-system primitive cannot reasonably be represented with utilities.
* A global style is required.
* A complex visual pattern benefits from centralized CSS.
* A browser-specific behavior requires custom CSS.

Do not create large custom CSS systems that duplicate Tailwind.

---

# 15. JavaScript Architecture

JavaScript is optional and minimal.

The project must not depend on client-side JavaScript for core content access.

### Approved Use Cases

* Mobile navigation
* Small interaction states
* Progressive enhancement
* Motion enhancement
* UI behavior that cannot reasonably be implemented with HTML/CSS

### Not Required

* Global client-side state management
* Client-side routing
* API data fetching
* SPA rendering
* Complex application state

---

# 16. Alpine.js Architecture

Alpine.js may be used for localized interactive behavior.

Examples:

```text
Mobile navigation
Disclosure elements
Small toggles
Simple UI state
```

Alpine must not become the primary application architecture.

Avoid:

* Large global stores
* Complex state trees
* Application-wide client-side data management
* Recreating backend behavior in the browser

---

# 17. No SPA Architecture

The portfolio does not use:

* React
* Vue
* Next.js
* Nuxt
* Inertia
* Client-side routers
* API-driven SPA architecture

This is an intentional architectural decision.

The portfolio is primarily content-driven and does not require complex client-side state.

---

# 18. Data Architecture

V1 does not require a database.

Portfolio content is treated as static application content.

```text
Static Content
     │
     ├── Blade
     ├── Static configuration
     └── Project assets
```

Do not introduce:

* MySQL
* PostgreSQL
* SQLite as a persistent production data layer
* MongoDB
* Redis

unless future product requirements explicitly require persistent dynamic data.

---

# 19. Content Architecture

The initial implementation may keep content directly inside Blade views when the content structure is simple.

If content volume increases significantly, content may be moved into structured Markdown or another content representation.

The architecture must support this evolution without requiring the initial implementation to build a full content management system.

### Current Principle

> Do not build a content engine before content complexity requires one.

---

# 20. Asset Architecture

Assets must be organized semantically.

```text
public/
│
├── images/
│   ├── projects/
│   │   └── assetflow/
│   │       ├── hero.webp
│   │       ├── dashboard.webp
│   │       ├── catalog.webp
│   │       └── maintenance.webp
│   │
│   └── og/
│
├── fonts/
└── favicon/
```

Actual filenames may differ based on available assets.

Avoid meaningless names such as:

```text
Screenshot_123.png
final-final-2.png
image-new.png
```

---

# 21. Image Architecture

Project screenshots must:

* Use optimized formats where practical.
* Use meaningful filenames.
* Include appropriate `alt` text.
* Use responsive dimensions.
* Avoid unnecessary resolution.
* Preserve aspect ratio.
* Avoid causing layout shifts.

Prefer:

```text
WebP
AVIF
```

where supported by the asset workflow.

---

# 22. Typography Architecture

Typography follows the hierarchy defined in `DESIGN.md`.

Recommended font categories:

```text
Primary:
Sans-serif

Technical:
Monospace
```

Monospace may be used for:

* Technical annotations
* Metadata
* Technical labels
* Code
* Small system-like information

Do not introduce multiple unrelated font families.

---

# 23. Icon Architecture

The project uses **Lucide** as the primary icon system.

Icons may be used for:

* Navigation
* External links
* Download actions
* Email
* LinkedIn
* GitHub
* Directional actions
* Menu controls

Do not mix multiple icon libraries without a specific reason.

Icons must not replace meaningful text where text is necessary for comprehension.

---

# 24. SEO Architecture

SEO metadata should be handled centrally through the application layout.

Each page should be able to provide:

```text
title
description
canonical URL
Open Graph metadata
social sharing metadata
```

Example:

### Homepage

```text
Revan — Software Engineering Student & Full-stack Developer
```

### AssetFlow

```text
AssetFlow — Office Asset Management System | Revan
```

SEO implementation must not introduce unnecessary third-party dependencies.

---

# 25. Accessibility Architecture

Accessibility is a core implementation requirement.

The architecture must support:

* Semantic HTML
* Keyboard navigation
* Visible focus states
* Sufficient color contrast
* Accessible names
* Appropriate alternative text
* Logical heading hierarchy
* Reduced-motion support
* Usable touch targets

Prefer native semantic elements:

```text
<header>
<nav>
<main>
<section>
<article>
<footer>
<button>
<a>
```

Use ARIA only when native HTML semantics are insufficient.

---

# 26. Responsive Architecture

The website follows a mobile-first responsive strategy.

```text
Base
 ↓
Small
 ↓
Medium
 ↓
Large
 ↓
XL
```

Responsive behavior must be defined by component requirements rather than arbitrary breakpoint changes.

Responsive implementation must account for:

* Navigation
* Typography
* Layout
* Spacing
* Images
* Metadata
* Technical annotations
* Project sections

Mobile must be treated as an intentional layout, not merely a reduced desktop version.

---

# 27. Performance Architecture

Performance priorities:

```text
Optimized HTML
      ↓
Efficient CSS
      ↓
Optimized images
      ↓
Minimal JavaScript
      ↓
Progressive enhancement
```

Avoid:

* Large JavaScript bundles
* Heavy animation libraries
* Video backgrounds
* Unoptimized screenshots
* Unnecessary third-party scripts
* Excessive client-side rendering
* Unnecessary network requests

---

# 28. Motion Architecture

Motion must enhance usability rather than become the focus of the interface.

Preferred motion:

* Short transitions
* Subtle entrance effects
* Hover/focus feedback
* Navigation transitions
* Small interaction feedback

Avoid:

* Scroll hijacking
* Excessive parallax
* Cursor-following effects
* Continuous decorative animation
* Heavy 3D scenes
* Excessive page transitions

All meaningful motion must respect:

```text
prefers-reduced-motion
```

---

# 29. Technical Annotation Architecture

Technical annotations are a core part of the visual identity.

Examples:

```text
ROLE
FULL-STACK DEVELOPER
```

```text
STACK
LARAVEL · LIVEWIRE · MYSQL
```

```text
STATUS
COMPLETED
```

Annotations must provide useful information.

They must not be used merely as decorative noise.

---

# 30. Grid & Divider Architecture

The portfolio uses a fine grid and divider system to establish visual structure.

The grid may be used to organize:

* Main content
* Metadata
* Project visuals
* Supporting information

Dividers may separate:

* Sections
* Metadata groups
* Navigation groups
* Project information
* Supporting content

Grid and divider usage must remain subtle and must not reduce readability.

Exact visual rules are defined in `DESIGN.md`.

---

# 31. Card Architecture

The portfolio follows a **cardless-first** architecture.

Cards are not the default container for content.

Prefer:

```text
Typography
+
Whitespace
+
Grid
+
Dividers
+
Image
+
Metadata
```

instead of:

```text
Card
 ├── Icon
 ├── Title
 ├── Description
 └── Button
```

Cards may only be introduced when they provide meaningful grouping or interaction value.

Default cards must not use rounded corners.

---

# 32. Shape Architecture

The visual language uses:

* Sharp geometry
* Minimal corner rounding
* Strong alignment
* Clean boundaries
* Rectangular content areas

Do not use pill-shaped UI.

Do not use rounded cards as a generic component pattern.

Any exception must be justified by accessibility or interaction requirements.

---

# 33. Deployment Architecture

The production deployment should provide a standard Laravel runtime.

Conceptually:

```text
GitHub
   │
   ▼
Deployment
   │
   ▼
Laravel Application
   │
   ├── PHP
   ├── Blade
   ├── Tailwind-generated assets
   └── Static assets
```

The production environment does not require:

* Database server
* Redis
* Queue worker
* WebSocket server
* Separate API server

for V1.

---

# 34. Development Workflow

Recommended development workflow:

```text
Google Stitch
      ↓
Visual Exploration
      ↓
DESIGN.md
      ↓
PRD.md
      ↓
ARCHITECTURE.md
      ↓
RULES.md
      ↓
Antigravity
      ↓
Implementation
      ↓
Browser Verification
      ↓
Responsive Review
      ↓
Accessibility Review
      ↓
Performance Review
      ↓
Final Refinement
```

AI agents must inspect the existing project and context files before making implementation changes.

---

# 35. AI-Assisted Development Architecture

AI development must follow this context hierarchy:

```text
PRD.md
   ↓
DESIGN.md
   ↓
ARCHITECTURE.md
   ↓
RULES.md
   ↓
Implementation
```

### PRD.md

Defines:

* Product goals
* Scope
* Audience
* Content
* Requirements
* Success criteria

### DESIGN.md

Defines:

* Visual identity
* Design tokens
* Layout
* Typography
* Color
* Components
* Responsive behavior
* Accessibility presentation
* Motion

### ARCHITECTURE.md

Defines:

* Technology
* Application structure
* Rendering strategy
* Component strategy
* Data strategy
* Performance architecture

### RULES.md

Defines:

* AI behavior
* Coding constraints
* Change management
* Quality gates
* Forbidden patterns

---

# 36. AI Change Management

Before modifying the codebase, an AI agent must:

1. Inspect the relevant existing files.
2. Read applicable context documentation.
3. Identify the actual requirement.
4. Determine the smallest reasonable implementation.
5. Modify only affected areas.
6. Verify the result.
7. Check for regressions.

AI agents must not perform unrelated refactoring.

Avoid:

> "While I'm here, I'll refactor the entire project."

---

# 37. Dependency Policy

New dependencies must have a concrete justification.

Before adding a dependency, determine whether the requirement can be satisfied using:

1. Existing framework functionality.
2. Existing project dependencies.
3. Native browser capabilities.
4. Existing design-system utilities.

Only then consider adding a new package.

Every significant new dependency should have a clear reason documented in the implementation context.

---

# 38. Testing Architecture

Testing is divided into four categories.

## 38.1 Functional

Verify:

* Homepage loads.
* AssetFlow page loads.
* Navigation works.
* Resume link works.
* Email link works.
* LinkedIn link works.
* Mobile navigation works.

---

## 38.2 Visual

Verify:

* Desktop layout
* Tablet layout
* Mobile layout
* Typography
* Spacing
* Images
* Technical annotations
* Dividers
* Responsive behavior

---

## 38.3 Accessibility

Verify:

* Keyboard navigation
* Focus states
* Heading hierarchy
* Semantic HTML
* Contrast
* Alternative text
* Reduced motion

---

## 38.4 Performance

Verify:

* Image optimization
* Asset size
* JavaScript payload
* Layout stability
* Unnecessary network requests
* Initial page rendering

---

# 39. Architecture Decision Records

Significant architectural changes should document:

```text
Decision
Context
Options
Chosen Approach
Reason
Trade-offs
```

Example:

```text
Decision:
Use Blade instead of SPA architecture.

Context:
The portfolio is primarily static and content-driven.

Options:
Blade
React
Vue
Inertia

Chosen Approach:
Blade

Reason:
The project does not require complex client-side state or
client-side routing.

Trade-offs:
Less client-side interactivity.

Benefits:
Simpler architecture, smaller JavaScript requirements,
better maintainability, and faster implementation.
```

---

# 40. Future Scalability

The architecture should allow additional content such as:

```text
LifeLog
Additional Projects
Experience
Certifications
Technical Articles
```

to be added without requiring a complete architectural rewrite.

However:

> Scalability does not justify implementing unused infrastructure.

The system should be designed for **reasonable extension**, not hypothetical complexity.

---

# 41. Explicitly Prohibited Architecture

Unless product requirements change, do not introduce:

```text
React
Vue
Next.js
Nuxt
Inertia
REST API
GraphQL
Database
Redis
WebSockets
CMS
Authentication
Admin Dashboard
Global State Management
Heavy Animation Framework
Analytics Platform
Client-side Router
```

Any exception requires a concrete requirement and architectural justification.

---

# 42. Architecture Quality Gates

Before considering an implementation complete, verify:

### Architecture

* [ ] Laravel conventions are preserved.
* [ ] Blade remains the primary rendering layer.
* [ ] No unnecessary backend infrastructure exists.
* [ ] Controllers remain lightweight.
* [ ] Components are appropriately scoped.
* [ ] No unnecessary dependencies were introduced.

### Design

* [ ] `DESIGN.md` is followed.
* [ ] Design tokens are reused.
* [ ] Cardless-first design is maintained.
* [ ] Rounded cards are not used by default.
* [ ] Pill-shaped UI is not used.
* [ ] Technical annotations remain consistent.

### UX

* [ ] Mobile and desktop experiences are intentional.
* [ ] Navigation is understandable.
* [ ] Important content is easily discoverable.
* [ ] Interactions provide clear feedback.

### Accessibility

* [ ] Semantic HTML is used.
* [ ] Keyboard navigation works.
* [ ] Focus states are visible.
* [ ] Contrast is sufficient.
* [ ] Images have appropriate alt text.
* [ ] Reduced motion is respected.

### Performance

* [ ] Images are optimized.
* [ ] JavaScript is minimal.
* [ ] No unnecessary third-party scripts exist.
* [ ] Heavy visual effects are avoided.
* [ ] Layout stability is maintained.

---

# 43. Final V1 Architecture

```text
                         ┌──────────────────┐
                         │     Browser      │
                         └────────┬─────────┘
                                  │
                                  ▼
                         ┌──────────────────┐
                         │      Laravel     │
                         │                  │
                         │     Routing      │
                         │        │         │
                         │   Controllers    │
                         │        │         │
                         │      Blade       │
                         └────────┬─────────┘
                                  │
                    ┌─────────────┴─────────────┐
                    │                           │
                    ▼                           ▼
             ┌─────────────┐             ┌─────────────┐
             │   Tailwind  │             │   Alpine    │
             │     CSS     │             │   Optional  │
             └─────────────┘             └─────────────┘
                    │                           │
                    └─────────────┬─────────────┘
                                  │
                                  ▼
                         ┌──────────────────┐
                         │ Optimized Assets │
                         └──────────────────┘
```

There is intentionally **no database, API, authentication layer, CMS, analytics platform, or SPA layer** in V1.

---

# 44. Architecture North Star

> **Build the simplest maintainable Laravel architecture that satisfies the portfolio's product, visual, accessibility, and performance requirements without introducing infrastructure the product does not need.**

The architecture should support the portfolio's primary objective:

> **Demonstrate software engineering capability through clarity, evidence, structured implementation, and thoughtful product decisions.**
