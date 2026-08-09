# DESIGN.md

> **Design System & Visual Direction for Personal Portfolio**
>
> This document defines the visual language, design tokens, layout rules, component principles, responsive behavior, accessibility requirements, and motion guidelines for the portfolio website.
>
> All UI implementation must follow this document unless a deliberate design decision is explicitly documented and approved.

---

# 1. Design Philosophy

## 1.1 Core Direction

The portfolio follows a **Sharp Technical Editorial** visual direction.

The design combines:

* Editorial clarity
* Software engineering precision
* Modern minimalism
* Elegant geometric structure
* Strong typography
* Technical metadata
* Generous whitespace
* Restrained visual decoration

The primary visual character is:

> **Modern + Elegant + Clean + Technical + Professional**

The interface should feel like a carefully designed digital product and engineering portfolio rather than a generic developer template.

---

## 1.2 Core Design Principle

> **Precision through simplicity.**

Every visual element must have a clear purpose.

The design should create hierarchy through:

* Typography
* Spacing
* Alignment
* Grid systems
* Dividers
* Borders
* Background transitions
* Technical annotations

Do not rely on excessive cards, rounded containers, gradients, or decorative effects to create visual interest.

The layout itself must provide structure.

---

## 1.3 Primary UX Priority

The highest priority is:

1. Readability
2. Content clarity
3. Navigation simplicity
4. Accessibility
5. Performance
6. Visual polish
7. Decorative effects

Visual design must never reduce usability.

---

## 1.4 Design Personality

The portfolio should feel:

* Professional
* Clear
* Structured
* Approachable
* Modern
* Thoughtful
* Product-oriented
* Technically capable

Avoid feeling:

* Overly corporate
* Overly playful
* Overly futuristic
* Hacker-themed
* Over-decorated
* Visually noisy
* AI-generated or template-like

---

# 2. Theme

## 2.1 Primary Theme

The portfolio uses a **light theme as the default and primary experience**.

The visual system is based on:

* Off-white canvas
* White surfaces
* Neutral gray hierarchy
* Muted cobalt blue accent
* Thin neutral borders
* Strong dark typography

Avoid pure black backgrounds and neon-heavy aesthetics.

---

# 3. Design Tokens

All colors, spacing, typography, borders, and motion values should be centralized as design tokens.

Do not hardcode arbitrary values repeatedly throughout the application.

---

# 4. Color Tokens

## 4.1 Base Colors

```text
--color-canvas: #F7F8FA
--color-surface: #FFFFFF
--color-surface-soft: #F1F3F5
--color-surface-accent: #E9EEFF
```

### Usage

`canvas`

Primary page background.

`surface`

Used for elevated or interactive areas that require a distinct background.

`surface-soft`

Used to separate sections or create subtle visual rhythm.

`surface-accent`

Used sparingly for highlighted content, selected states, and important contextual areas.

---

## 4.2 Text Colors

```text
--color-text-primary: #16181D
--color-text-secondary: #5F6672
--color-text-muted: #858C98
--color-text-inverse: #FFFFFF
```

### Usage

`text-primary`

Use for:

* Main headings
* Important body text
* Primary navigation
* Main content

`text-secondary`

Use for:

* Supporting paragraphs
* Secondary information
* Descriptions

`text-muted`

Use sparingly for:

* Metadata
* Timestamps
* Supporting labels
* Low-priority contextual information

Never use excessively light gray text for critical content.

---

## 4.3 Border Colors

```text
--color-border-default: #DDE1E7
--color-border-strong: #C7CDD6
--color-border-accent: #C7D3FF
```

Use thin borders as a primary structural tool.

Borders should generally be preferred over heavy shadows.

---

## 4.4 Accent Colors

```text
--color-accent: #315EF8
--color-accent-dark: #2448C7
--color-accent-soft: #E9EEFF
```

The accent color represents:

* Primary actions
* Active navigation
* Important links
* Focus states
* Selected states
* Key highlights

Accent usage must remain restrained.

Do not use the accent color for every heading, icon, border, and background.

---

## 4.5 Semantic Colors

Use semantic colors only when necessary.

```text
--color-success: #16803C
--color-warning: #A15C00
--color-error: #C62828
--color-info: #315EF8
```

Semantic colors should always be accompanied by:

* Text
* Icon
* Or another non-color indicator

Never communicate meaning through color alone.

---

# 5. Color Usage Rules

## Do

* Use neutral colors as the visual foundation.
* Use blue as a controlled accent.
* Maintain strong text contrast.
* Use subtle background transitions between sections.
* Use color to support hierarchy.

## Do Not

* Use gradients as the primary visual language.
* Use neon colors.
* Use multiple competing accent colors.
* Use large blue background areas without purpose.
* Make every component colorful.
* Use low-contrast gray text for important information.

---

# 6. Typography

## 6.1 Primary Typeface

**Geist**

Use for:

* Headings
* Body text
* Navigation
* Buttons
* Form labels
* UI elements

---

## 6.2 Monospace Typeface

**Geist Mono**

Use selectively for:

* Technical annotations
* Project metadata
* Technology stacks
* Status labels
* Small technical identifiers
* Code snippets

Do not use monospace for long-form body text.

---

# 7. Typography Scale

Typography should use a controlled hierarchy.

## 7.1 Desktop

```text
Display:
72px
Line-height: 1.00–1.05
Weight: 600–700

H1:
56px
Line-height: 1.05–1.10
Weight: 600–700

H2:
44px
Line-height: 1.10–1.15
Weight: 600

H3:
30px
Line-height: 1.20
Weight: 600

H4:
24px
Line-height: 1.25
Weight: 600

Body Large:
20px
Line-height: 1.60
Weight: 400

Body:
16–18px
Line-height: 1.60–1.75
Weight: 400

Small:
14px
Line-height: 1.50
Weight: 400–500

Technical / Metadata:
12–14px
Line-height: 1.40–1.50
Weight: 500
```

---

## 7.2 Mobile

```text
Display:
44–52px
Line-height: 1.05

H1:
40–48px
Line-height: 1.08

H2:
32–38px
Line-height: 1.15

H3:
24–28px
Line-height: 1.20

Body Large:
18px
Line-height: 1.60

Body:
16px
Line-height: 1.65

Small:
14px
Line-height: 1.50

Technical / Metadata:
12–13px
Line-height: 1.40
```

---

## 7.3 Typography Rules

Headings should be:

* Strong
* Clean
* Slightly tight
* Highly readable

Avoid:

* Excessive font weights
* More than three heading styles within one section
* ALL CAPS for large headlines
* Decorative typography
* Overly condensed fonts

Technical annotations may use uppercase labels.

Long-form body text must remain comfortable to read.

---

# 8. Spacing System

Use a consistent spacing scale based on a 4px unit with an 8px primary rhythm.

```text
--space-1: 4px
--space-2: 8px
--space-3: 12px
--space-4: 16px
--space-5: 20px
--space-6: 24px
--space-8: 32px
--space-10: 40px
--space-12: 48px
--space-16: 64px
--space-20: 80px
--space-24: 96px
--space-32: 128px
--space-40: 160px
```

---

## 8.1 Spacing Principles

Use spacing to establish hierarchy.

Larger spacing should indicate:

* New section
* New content group
* Change in context

Smaller spacing should indicate:

* Related information
* Labels and values
* Metadata pairs

Avoid arbitrary spacing values unless there is a specific layout reason.

---

## 8.2 Section Spacing

Desktop:

```text
Major section:
96–160px vertical spacing

Section title to content:
40–64px

Content group:
32–48px
```

Mobile:

```text
Major section:
64–96px vertical spacing

Section title to content:
32–40px

Content group:
24–32px
```

---

# 9. Layout System

## 9.1 Container

Recommended maximum width:

```text
--container-max: 1280px
```

Primary content container:

```text
width: 100%
max-width: 1280px
margin-inline: auto
```

Desktop horizontal padding:

```text
48–64px
```

Tablet:

```text
32–40px
```

Mobile:

```text
20–24px
```

---

## 9.2 Reading Width

Long-form text should be limited to a readable width.

Recommended:

```text
640–760px
```

Case study narrative:

```text
760–900px
```

Do not stretch paragraphs across the full viewport.

---

## 9.3 Grid System

Use CSS Grid for major page layouts.

Recommended desktop structure:

```text
12-column grid
```

Common layouts:

```text
Hero:
7 / 5

Content:
8 / 4

Project:
7 / 5

Case study:
8 / 4

Metadata:
4 / 8
```

Do not force every section to use the same column distribution.

The grid should support content hierarchy.

---

# 10. Responsive Breakpoints

Use behavior-based breakpoints.

Recommended:

```text
Mobile:
< 640px

Tablet:
640px–1023px

Desktop:
1024px–1279px

Large Desktop:
1280px+
```

These breakpoints are guidelines, not rigid requirements.

Components must remain visually stable between breakpoint transitions.

---

# 11. Responsive Rules

## 11.1 General

All pages must be fully responsive.

Desktop layouts must not simply be scaled down.

Adapt:

* Grid structure
* Typography
* Spacing
* Navigation
* Metadata layout
* Image proportions
* Content order

---

## 11.2 Mobile

On mobile:

* Convert multi-column layouts into single-column layouts where appropriate.
* Reduce heading sizes.
* Maintain generous vertical spacing.
* Keep body text at a comfortable size.
* Prevent horizontal overflow.
* Allow technical metadata to wrap naturally.
* Maintain clear visual hierarchy.

Do not reduce font sizes excessively just to fit content.

---

## 11.3 Navigation

Desktop:

```text
Horizontal navigation
```

Mobile:

```text
Compact menu
```

The mobile menu should be:

* Simple
* Easy to access
* Keyboard accessible
* Visually consistent with the sharp geometry system

Do not use large pill-style floating menus.

---

## 11.4 Images

Project images should:

* Maintain aspect ratio.
* Avoid unexpected cropping.
* Remain visually dominant where appropriate.
* Load responsively.
* Use optimized formats.

Do not sacrifice image quality excessively for performance.

---

# 12. Shape Language

## 12.1 Core Rule

The design uses **sharp geometric forms**.

Default:

```text
border-radius: 0
```

Major elements should use sharp rectangular geometry.

This includes:

* Buttons
* Navigation
* Project previews
* Images
* Form inputs
* Containers
* Content sections

---

## 12.2 Rounded Corners

Rounded corners are not part of the default visual language.

Do not use:

* `rounded-lg`
* `rounded-xl`
* `rounded-2xl`
* Fully rounded buttons
* Circular content cards

unless there is a specific functional requirement.

---

## 12.3 Pill Shapes

Pill-shaped UI elements are prohibited.

Do not use pills for:

* Skills
* Technology tags
* Categories
* Status indicators
* Navigation
* Buttons

Use simple text, separators, or sharp rectangular labels instead.

Example:

```text
Laravel · Livewire · MySQL
```

or:

```text
[LARAVEL] [LIVEWIRE] [MYSQL]
```

Use the bracketed style only when visual grouping is necessary.

---

# 13. Surface System

The design follows a **cardless-first philosophy**.

The primary methods of grouping content are:

* Spacing
* Typography
* Dividers
* Borders
* Grid alignment
* Background transitions

Cards should not be the default UI pattern.

---

## 13.1 Cardless-First Rule

Before creating a card, ask:

> Can spacing, typography, borders, or grid structure communicate this relationship more elegantly?

If yes, do not use a card.

---

## 13.2 Allowed Containers

Rectangular containers may be used when they improve usability or structure.

Examples:

* Navigation
* Mobile menu
* Contact form fields
* Code snippets
* Technical information blocks
* Important callouts
* Interactive controls
* Primary CTA blocks

Containers must remain:

* Sharp-edged
* Minimal
* Flat or subtly elevated

Avoid:

* Card stacks
* Floating card collections
* Excessive box shadows
* Glassmorphism
* Decorative containers

---

# 14. Borders and Dividers

Thin borders are an important part of the design identity.

Default:

```text
1px solid var(--color-border-default)
```

Use borders for:

* Section separation
* Project metadata
* Navigation boundaries
* Technical groupings
* Footer structure
* Form controls

Borders should be subtle but visible.

Avoid thick decorative borders.

---

# 15. Background Treatment

Use subtle technical background elements.

## 15.1 Fine Grid

A low-contrast fine grid may appear in:

* Hero
* Featured project introduction
* Selected CTA areas

The grid must be:

* Subtle
* Low contrast
* Lightweight
* Non-distracting

The grid should communicate structure rather than decoration.

---

## 15.2 Soft Radial Accent

A very subtle radial blue accent may be used selectively behind major visual areas.

Do not make gradients the dominant visual language.

---

## 15.3 Fine Line Patterns

Thin geometric lines may be used sparingly.

Use them to:

* Reinforce layout structure
* Direct attention
* Create visual continuity

Never add line patterns purely for decoration.

---

# 16. Technical Annotations

Technical annotations are a signature visual element.

Use them to expose useful engineering context.

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
TYPE
ACADEMIC PROJECT
```

```text
STATUS
COMPLETED
```

---

## 16.1 Technical Annotation Rules

Annotations should be:

* Small
* Precise
* Visually secondary
* Consistently aligned
* Easy to scan

Recommended style:

```text
Label:
Geist Mono
12–13px
Uppercase
Muted or secondary text

Value:
Geist
13–15px
Medium weight
Primary or secondary text
```

Do not let metadata compete visually with main headings.

---

# 17. Component Principles

Components should exist to improve:

* Reusability
* Clarity
* Interaction
* Accessibility

Do not create a component solely because a visual block exists.

Prefer structural components.

Examples:

```text
ProjectSection
ProjectMeta
TechnicalAnnotation
SectionDivider
ContentGrid
CTASection
Navigation
```

Avoid excessive visual-card abstractions such as:

```text
ProjectCard
SkillCard
ToolCard
AboutCard
ExperienceCard
```

unless repeated use genuinely justifies them.

---

# 18. Button Rules

Buttons must use sharp rectangular geometry.

Default:

```text
border-radius: 0
```

Recommended height:

```text
44–48px
```

Recommended horizontal padding:

```text
16–24px
```

Primary button:

* Solid accent background
* White text
* Strong contrast

Secondary button:

* Transparent or white background
* Neutral border
* Dark text

Do not use:

* Pill buttons
* Excessive shadows
* Gradient buttons
* Animated button transformations

Button transitions should be subtle and functional.

---

# 19. Link Rules

Links should be visually recognizable.

Preferred techniques:

* Accent color
* Underline
* Underline transition

Avoid removing all visual distinction from links.

Do not rely only on hover to make links identifiable.

---

# 20. Form Controls

Form inputs should use:

* Sharp corners
* White or soft neutral background
* Thin border
* Clear labels
* Visible focus state

Recommended height:

```text
44–52px
```

Textarea should maintain enough vertical space for comfortable input.

Validation messages must be:

* Clear
* Specific
* Accessible
* Associated with the relevant field

---

# 21. Project Presentation

Featured projects should be presented as editorial case studies, not generic cards.

Primary structure:

```text
Featured Project

Project Name

Short Description

Hero Screenshot

Technical Metadata

Problem

Role

Key Features

Technical Decisions

Challenges

Solutions

Results

Lessons Learned

Future Improvements
```

The visual system should use:

* Large images
* Grid layouts
* Technical annotations
* Dividers
* Strong typography

Avoid compressing project information into small cards.

---

# 22. Navigation Rules

Navigation should be:

* Simple
* Predictable
* Lightweight
* Sticky when useful
* Visually consistent with the sharp geometry system

Desktop:

```text
Logo / Name
About
Work
Skills
Contact
Resume
```

Mobile navigation should collapse into an accessible menu.

The Resume action may use a strong rectangular button.

Do not use:

* Pill navigation
* Oversized floating capsules
* Excessive blur effects

---

# 23. Hero Rules

The hero should immediately communicate:

1. Who the developer is
2. What they build
3. Their primary focus
4. The main action the visitor can take

The visual hierarchy should prioritize:

* Small professional label
* Large headline
* Supporting statement
* Primary CTA
* Secondary CTA
* Optional technical metadata

The hero should rely primarily on:

* Typography
* Spacing
* Grid
* Technical annotations

Do not depend on decorative illustrations or heavy animation.

---

# 24. Iconography

Use **Lucide Icons** as the primary icon library.

Icon style:

* Outline
* Consistent stroke width
* Minimal
* Functional

Recommended sizes:

```text
Small:
16px

Default:
20px

Large:
24px
```

Icons should communicate meaning.

Do not add icons purely for decoration.

Do not mix multiple icon libraries unless required.

---

# 25. Imagery

Project imagery should prioritize authenticity.

Preferred:

* Real application screenshots
* UI detail crops
* Product mockups with restrained presentation
* Architecture diagrams
* User flow diagrams
* Technical illustrations

Avoid:

* Generic AI-generated coding images
* Stock photos of developers
* Decorative programmer illustrations
* Excessive 3D laptop mockups
* Futuristic holographic visuals

The project itself should be the visual focus.

---

# 26. Motion System

Motion should be:

**Fast + Precise + Intentional**

Motion exists to improve:

* Feedback
* Navigation
* Context
* Perceived responsiveness

Motion must not exist only to impress.

---

## 26.1 Motion Tokens

```text
--motion-fast: 120ms
--motion-normal: 180ms
--motion-medium: 240ms
--motion-slow: 300ms
--motion-reveal: 400ms
```

---

## 26.2 Easing

Use natural easing.

Preferred:

```text
ease-out
cubic-bezier(0.22, 1, 0.36, 1)
```

For simple transitions:

```text
ease-in-out
```

Avoid exaggerated elastic or bouncing animations.

---

## 26.3 Allowed Motion

Use:

* Fade
* Small vertical reveal
* Underline transition
* Border transition
* Opacity transition
* Image reveal
* Navigation state transition

---

## 26.4 Prohibited Motion

Do not use:

* Scroll hijacking
* Heavy parallax
* Cursor-following effects
* Large particle systems
* Constant animated backgrounds
* Infinite decorative motion
* Excessive text-by-text reveals
* Large 3D transitions
* Long blocking animations

---

## 26.5 Reduced Motion

Always respect:

```text
prefers-reduced-motion: reduce
```

When reduced motion is enabled:

* Remove non-essential animations.
* Disable parallax.
* Reduce transitions.
* Keep functional state changes immediate or minimal.

---

# 27. Accessibility

Accessibility is a core requirement.

Target:

**WCAG 2.2 AA where reasonably applicable.**

---

## 27.1 Color Contrast

Text must maintain sufficient contrast.

Do not use:

* Very light gray body text
* Low-contrast metadata for essential content
* Color-only status communication

---

## 27.2 Keyboard Navigation

All interactive elements must be keyboard accessible.

Required:

* Visible focus state
* Logical tab order
* No keyboard traps
* Accessible navigation

---

## 27.3 Focus State

Focus states must be clearly visible.

Recommended:

* Accent outline
* Accent border
* High-contrast focus ring

Do not remove browser focus indicators without providing an accessible alternative.

---

## 27.4 Touch Targets

Interactive targets should generally be at least:

```text
44 × 44px
```

on touch devices.

---

## 27.5 Semantic HTML

Prefer semantic elements:

```html
<header>
<nav>
<main>
<section>
<article>
<footer>
<button>
```

Do not use `<div>` as a replacement for semantic elements when a semantic element is appropriate.

---

## 27.6 Images

All meaningful images require useful `alt` text.

Decorative images should use empty alt attributes where appropriate.

---

## 27.7 Motion Accessibility

Respect `prefers-reduced-motion`.

Do not rely on animation to communicate essential information.

---

## 27.8 Typography Accessibility

Body text should generally remain at:

```text
16px minimum
```

on mobile.

Maintain comfortable line height.

Avoid excessively long text lines.

---

# 28. Performance-Aware Design

Visual quality must not come at the cost of performance.

Prioritize:

* Optimized images
* Responsive images
* Lazy loading where appropriate
* Minimal third-party scripts
* Lightweight animations
* No unnecessary JavaScript
* Efficient CSS
* Stable layouts

Avoid large background videos or heavy WebGL effects unless there is a compelling reason.

---

# 29. Design Anti-Patterns

The following patterns are explicitly discouraged.

## Visual

* Excessive rounded corners
* Pill-shaped components
* Card-heavy layouts
* Excessive shadows
* Glassmorphism
* Neon gradients
* Random blobs
* Generic 3D illustrations
* Excessive decorative icons
* Overly futuristic visuals

## UX

* Long animated intro screens
* Hidden navigation
* Difficult-to-read typography
* Excessively wide paragraphs
* Unclear CTA hierarchy
* Hover-only critical interactions

## Engineering

* Hardcoded repeated design values
* Inconsistent spacing
* Arbitrary border-radius values
* Multiple unrelated color systems
* Mixing multiple icon libraries
* Inconsistent typography
* Desktop-first layouts that break on mobile

---

# 30. Visual Quality Checklist

Before considering a page complete, verify:

### Visual

* [ ] Light theme is consistent.
* [ ] Sharp geometry is maintained.
* [ ] No unnecessary rounded corners.
* [ ] No pill-shaped components.
* [ ] Cardless-first principle is respected.
* [ ] Typography hierarchy is clear.
* [ ] Accent blue is used sparingly.
* [ ] Borders and dividers are consistent.
* [ ] Fine grid is subtle.
* [ ] Technical annotations are aligned.

### Layout

* [ ] Content has enough whitespace.
* [ ] Grid alignment is consistent.
* [ ] Reading width is comfortable.
* [ ] Mobile layout is intentional.
* [ ] No horizontal overflow.
* [ ] Images maintain appropriate proportions.

### UX

* [ ] Navigation is intuitive.
* [ ] Primary CTA is obvious.
* [ ] Links are recognizable.
* [ ] Buttons have clear labels.
* [ ] Forms have visible labels.
* [ ] Interactive states are clear.

### Accessibility

* [ ] Text contrast is sufficient.
* [ ] Keyboard navigation works.
* [ ] Focus states are visible.
* [ ] Images have appropriate alt text.
* [ ] Semantic HTML is used.
* [ ] Reduced motion is supported.

### Performance

* [ ] Images are optimized.
* [ ] Animations are lightweight.
* [ ] No unnecessary JavaScript.
* [ ] No heavy decorative effects.
* [ ] Layout shifts are minimized.

---

# 31. Final Design Summary

The portfolio should visually communicate:

> **Sharp geometry. Generous whitespace. Strong typography. Thin technical lines. Minimal color. Clear information.**

The portfolio should not depend on:

* Cards
* Rounded corners
* Pills
* Heavy gradients
* Excessive animation

to appear modern.

Modernity should come from:

* Precision
* Typography
* Layout
* Spacing
* Grid
* Interaction quality

Elegance should come from:

* Restraint
* Consistency
* Whitespace
* Alignment
* Visual hierarchy

The final visual direction is:

**Sharp Technical Editorial**

with the following priorities:

```text
1. Readability
2. Clarity
3. Accessibility
4. Performance
5. Structural consistency
6. Visual elegance
7. Decorative enhancement
```

When making a design decision that conflicts with this document, prioritize the principles above and document the reason for the exception.
