# RULES.md

# AI Development Rules

**Project:** Revan Personal Portfolio
**Version:** V1
**Status:** Final
**Primary Consumer:** AI Coding Agents
**Applies To:** Antigravity and other AI-assisted development tools

---

# 1. Purpose

This document defines the rules and constraints that AI coding agents must follow when developing, modifying, reviewing, or refactoring the portfolio.

The purpose is to ensure that AI-assisted development remains:

* Consistent
* Intentional
* Maintainable
* Accessible
* Performant
* Aligned with the product requirements
* Aligned with the established visual identity
* Technically appropriate for the project's scope

AI must treat this document as an engineering guardrail.

---

# 2. Source of Truth

The project uses the following context hierarchy:

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

Each document has a different responsibility.

## PRD.md

Defines:

* Product goals
* Target audience
* Product scope
* Content
* Features
* User experience requirements
* Success criteria

## DESIGN.md

Defines:

* Visual identity
* Design tokens
* Typography
* Color
* Layout
* Components
* Responsive behavior
* Accessibility presentation
* Motion

## ARCHITECTURE.md

Defines:

* Technology stack
* Application structure
* Rendering strategy
* Component architecture
* Data architecture
* Performance architecture

## RULES.md

Defines:

* AI behavior
* Coding constraints
* Change management
* Quality requirements
* Forbidden patterns

---

# 3. Core Development Philosophy

## 3.1 Requirements Before Code

Do not implement a feature merely because it seems useful.

Every significant implementation must trace back to:

* PRD requirements
* Design requirements
* Architecture requirements
* Explicit user instruction

---

## 3.2 Simplicity Over Complexity

Prefer the simplest implementation that correctly solves the problem.

Do not introduce complexity for:

* Future possibilities
* Demonstration purposes
* Personal preference of the AI
* Architectural trends
* "Best practice" without context

---

## 3.3 Existing Code Before New Code

Before creating a new abstraction, component, utility, or dependency:

1. Inspect the existing project.
2. Determine whether an equivalent solution already exists.
3. Reuse it when appropriate.
4. Only create something new when reuse is not suitable.

---

## 3.4 Minimal Change Principle

When modifying an existing implementation:

> Change only what is necessary to satisfy the requirement.

Do not perform unrelated refactoring.

Do not reorganize files simply because another structure appears cleaner.

Do not rewrite working code without a concrete reason.

---

# 4. Mandatory Context Inspection

Before making implementation changes, the AI agent must inspect:

```text
PRD.md
DESIGN.md
ARCHITECTURE.md
RULES.md
```

as well as the relevant existing source files.

The AI must understand the current implementation before modifying it.

Do not assume that the project is empty.

Do not recreate files that already exist without inspection.

---

# 5. Requirement Interpretation

When requirements are ambiguous:

1. Prefer the existing project context.
2. Prefer the smallest reasonable interpretation.
3. Preserve existing behavior.
4. Do not invent product requirements.
5. Ask for clarification when ambiguity could materially affect the result.

Do not silently make major product decisions.

---

# 6. Content Integrity

AI must never fabricate portfolio content.

This includes:

* Work experience
* Job titles
* Client names
* Project metrics
* Technologies
* Certifications
* Achievements
* Responsibilities
* Results
* Testimonials
* Education details
* Project outcomes

If information is unavailable, use a clear placeholder or ask for the required information.

Never invent impressive-sounding numbers.

For example, do not create:

```text
"Reduced processing time by 47%"
```

unless that result is supported by actual evidence.

---

# 7. AssetFlow Content Rules

AssetFlow is currently the primary featured project.

Its feature information must be based on the approved project summary.

Do not add functionality that is not supported by the actual project.

Approved feature areas include:

```text
Authentication & Access Control
User Management
Category Management
Location Management
Asset Management
Asset Catalog
Asset Borrowing
Borrowing Verification
Borrowing History
Asset Return
Damage Reporting
Maintenance Management
Admin Dashboard Analytics
Borrowing Reports & PDF Export
```

The AI may reorganize or explain these features for clarity, but must not fabricate additional functionality.

---

# 8. Project Scope Rules

V1 currently focuses on:

```text
Homepage
+
AssetFlow Case Study
+
Resume
+
LinkedIn
+
Email Contact
```

Do not add:

* Blog
* CMS
* Authentication
* Admin panel
* Comments
* Analytics
* Newsletter
* Contact database
* User accounts
* Search system
* Dynamic project management

unless explicitly requested.

---

# 9. Technology Rules

The approved primary stack is:

```text
Laravel
Blade
Tailwind CSS
Vite
Alpine.js (optional)
Lucide
PHP
Git / GitHub
```

Do not replace the stack without explicit approval.

---

# 10. No Unnecessary Dependencies

Before adding a dependency, check whether the requirement can be solved with:

1. Existing dependencies.
2. Laravel functionality.
3. Tailwind utilities.
4. Native browser APIs.
5. Native HTML/CSS.

Only add a dependency when there is a clear technical reason.

Every significant dependency addition must be justified.

---

# 11. No SPA Conversion

Do not introduce:

```text
React
Vue
Next.js
Nuxt
Inertia
Client-side Router
```

The portfolio is intentionally server-rendered.

Do not convert Blade pages into SPA architecture.

---

# 12. No Unnecessary Backend Infrastructure

Do not introduce:

```text
Database
REST API
GraphQL
Redis
Queues
WebSockets
Authentication
CMS
Admin Dashboard
```

unless explicitly required by a new feature.

---

# 13. Laravel Rules

Follow Laravel conventions.

Prefer:

* Standard route definitions
* Thin controllers
* Blade views
* Blade components
* Laravel helpers
* Framework conventions
* Clear naming

Avoid unnecessary custom framework abstractions.

Do not create:

```text
BaseController
UniversalService
GenericRepository
AbstractManager
```

unless actual complexity requires them.

---

# 14. Blade Rules

Blade is the primary presentation layer.

Use:

* Layouts
* Components
* Sections
* Slots
* Blade directives

Keep page templates readable.

Avoid putting large amounts of business logic inside Blade templates.

Do not use Blade as a replacement for application logic.

---

# 15. Component Rules

Create reusable components when they have meaningful semantic or functional reuse.

Good candidates:

```text
Navigation
Footer
Button
Section Heading
Social Link
Project Meta
Project Image
Technical Note
```

Avoid creating components for every small HTML fragment.

Do not create generic abstractions merely to reduce line count.

---

# 16. Styling Rules

`DESIGN.md` is the visual source of truth.

AI must not independently redesign the interface.

Always reuse:

* Color tokens
* Typography scale
* Spacing system
* Layout rules
* Border rules
* Motion rules
* Responsive rules

Do not introduce arbitrary design values without justification.

---

# 17. Shape Language Rules

The visual identity emphasizes:

* Modern
* Elegant
* Clean
* Sharp
* Structured

Therefore:

### Do

* Use sharp geometry.
* Use clean rectangular boundaries.
* Use strong alignment.
* Use whitespace.
* Use dividers.
* Use fine grid structures.

### Do Not

* Use pill-shaped UI.
* Use excessive rounded corners.
* Use generic rounded cards.
* Use bubbly interfaces.
* Use excessive decorative shapes.

---

# 18. Cardless-First Rule

Cards are not the default UI pattern.

Prefer:

```text
Typography
+
Whitespace
+
Grid
+
Divider
+
Image
+
Metadata
```

instead of wrapping every section in a card.

A card may only be introduced when it provides a clear functional or semantic benefit.

Default cards must not use prominent rounded corners.

---

# 19. No Pill UI

Do not use pill-shaped elements for:

* Buttons
* Tags
* Navigation
* Filters
* Status indicators
* Technology labels

unless explicitly approved for a specific use case.

Technical labels should use the established annotation system instead.

---

# 20. Technical Annotation Rules

Technical annotations are part of the portfolio identity.

Use them to communicate useful information such as:

```text
ROLE
STACK
STATUS
YEAR
SCOPE
```

Annotations must remain:

* Concise
* Structured
* Legible
* Informative

Do not add annotations merely to fill empty space.

---

# 21. Grid & Divider Rules

Fine grids and dividers are approved visual elements.

Use them to:

* Establish structure
* Separate content groups
* Organize metadata
* Strengthen hierarchy

Do not overuse them.

The grid must never interfere with readability.

Do not introduce section numbering as a decorative system.

---

# 22. Color Rules

The website uses a light visual identity.

The primary goal is:

> Clarity, comfort, readability, professionalism, and visual lightness.

Do not introduce:

* Heavy dark-mode styling as the default
* Excessive gradients
* Neon glow effects
* High-saturation backgrounds
* Excessive decorative color blocks

Accent colors should support hierarchy rather than dominate the page.

---

# 23. Typography Rules

Typography must prioritize readability.

Use:

```text
Primary Sans-serif
+
Monospace for technical information
```

Typography must have clear hierarchy.

Do not:

* Use excessive font sizes.
* Use too many font families.
* Use decorative fonts without approval.
* Sacrifice readability for visual style.

---

# 24. Responsive Rules

The website must be mobile-first.

Every new UI implementation must consider:

```text
Mobile
Tablet
Desktop
Large Desktop
```

Do not treat mobile as an afterthought.

Before considering a UI implementation complete, verify:

* Layout
* Typography
* Spacing
* Navigation
* Images
* Buttons
* Technical annotations
* Overflow behavior

---

# 25. Accessibility Rules

Accessibility is mandatory.

Every implementation should consider:

* Semantic HTML
* Keyboard navigation
* Focus visibility
* Color contrast
* Alternative text
* Heading hierarchy
* Accessible names
* Reduced motion

Prefer native HTML semantics over unnecessary ARIA.

Do not use `<div>` as an interactive element when `<button>` or `<a>` is appropriate.

---

# 26. Interaction Rules

Interactions should be:

* Predictable
* Subtle
* Fast
* Accessible

Every interactive element must provide appropriate feedback.

Do not create interactions merely because they look impressive.

---

# 27. Motion Rules

Motion should support usability.

Approved:

* Small transitions
* Hover/focus feedback
* Subtle entrance effects
* Navigation transitions

Avoid:

* Scroll hijacking
* Heavy parallax
* Cursor-following effects
* Continuous animations
* Excessive page transitions
* Large 3D effects

Respect:

```text
prefers-reduced-motion
```

---

# 28. JavaScript Rules

JavaScript must remain minimal.

Prefer:

```text
HTML
+
CSS
```

before:

```text
HTML
+
CSS
+
JavaScript
```

Use JavaScript only when it provides meaningful interaction.

Do not use JavaScript to solve problems that CSS or HTML can solve naturally.

---

# 29. Performance Rules

Performance is a first-class requirement.

Prioritize:

* Optimized images
* Minimal JavaScript
* Efficient CSS
* Semantic HTML
* Limited third-party resources
* Stable layouts
* Fast initial rendering

Avoid:

* Large bundles
* Heavy animation libraries
* Unnecessary dependencies
* Unoptimized screenshots
* Video backgrounds
* Excessive client-side rendering

---

# 30. Image Rules

Every project image must:

* Have a meaningful filename.
* Use an appropriate format.
* Be reasonably optimized.
* Have appropriate alt text.
* Preserve aspect ratio.
* Avoid unnecessary resolution.

Do not use massive source images when a smaller version is sufficient.

---

# 31. SEO Rules

Each page must have meaningful:

* `<title>`
* Meta description
* Canonical URL where applicable
* Open Graph metadata where applicable

SEO content must accurately represent the actual portfolio.

Do not keyword-stuff content.

Do not make exaggerated SEO claims.

---

# 32. Navigation Rules

Navigation must remain simple and predictable.

Primary navigation should prioritize:

```text
Home
Work
About
Contact
```

depending on the final IA defined in `PRD.md`.

Navigation must not become overloaded.

External links must clearly behave as external links where appropriate.

---

# 33. Contact Rules

The portfolio currently provides:

```text
Email
LinkedIn
```

Do not build a contact form unless explicitly requested.

Do not introduce a contact database.

Do not create a backend mail-processing system for V1.

---

# 34. Resume Rules

The resume must be treated as a downloadable document.

The UI should clearly communicate:

```text
View
Download
```

where applicable.

Do not embed unnecessary third-party document viewers.

---

# 35. Code Quality Rules

Code must prioritize:

* Readability
* Predictability
* Consistency
* Maintainability
* Framework conventions

Avoid clever code when straightforward code is clearer.

Prefer explicit code over unnecessary abstraction.

---

# 36. Naming Rules

Use descriptive names.

### Good

```text
ProjectMeta
SectionHeading
AssetflowCaseStudy
technical-note
project-image
```

### Avoid

```text
Box1
Thing
Wrapper2
CompNew
SectionX
Temp
```

Naming should communicate intent.

---

# 37. File Organization Rules

Keep files organized according to their responsibility.

Do not:

* Put unrelated components together.
* Create unnecessary directories.
* Move existing files without a reason.
* Rename large groups of files for aesthetic reasons.

Follow the architecture defined in `ARCHITECTURE.md`.

---

# 38. Refactoring Rules

Refactoring is allowed when it directly improves:

* Correctness
* Maintainability
* Accessibility
* Performance
* Consistency

Do not refactor unrelated code while implementing a feature.

If a significant refactor is required, explain:

```text
Why
What changes
Why the existing implementation is insufficient
Potential impact
```

---

# 39. Bug Fix Rules

When fixing a bug:

1. Reproduce or understand the problem.
2. Identify the root cause.
3. Apply the smallest reliable fix.
4. Verify the affected behavior.
5. Check for obvious regressions.

Do not hide bugs with superficial workarounds.

---

# 40. AI Implementation Workflow

For every meaningful task:

```text
1. Read context
       ↓
2. Inspect existing implementation
       ↓
3. Identify affected files
       ↓
4. Plan the smallest valid change
       ↓
5. Implement
       ↓
6. Verify
       ↓
7. Review against PRD
       ↓
8. Review against DESIGN
       ↓
9. Review against ARCHITECTURE
       ↓
10. Report changes
```

---

# 41. AI Must Not Assume

The AI must not assume:

* Missing content
* Missing metrics
* Missing technologies
* Missing project functionality
* User preferences
* Future requirements
* Deployment configuration
* Existing credentials
* External service availability

If the assumption could materially affect the implementation, ask for clarification.

---

# 42. No Hallucinated Project Information

Never claim that a project has:

* Features it does not have
* Metrics that were not measured
* Technologies that were not used
* Responsibilities that were not performed
* Users that did not exist
* Business results that were not documented

Accuracy is more important than making the portfolio sound impressive.

---

# 43. Visual Validation

When implementing or modifying UI, visual validation is required.

At minimum inspect:

```text
Desktop
Mobile
```

Preferably also:

```text
Tablet
Large Desktop
```

Check:

* Alignment
* Spacing
* Typography
* Contrast
* Image proportions
* Overflow
* Responsive behavior
* Navigation
* Interaction states

---

# 44. Screenshot / Reference Rules

When implementing a design from Google Stitch or another visual reference:

1. Treat the approved reference as visual intent.
2. Translate the design into the existing design system.
3. Do not blindly reproduce implementation details.
4. Preserve accessibility.
5. Preserve responsiveness.
6. Preserve semantic HTML.

The goal is not pixel-copying.

The goal is:

> Consistent implementation of the approved design language.

---

# 45. Google Stitch Rules

Google Stitch is primarily used for:

* Visual exploration
* Layout exploration
* UI direction
* Component exploration
* Responsive design exploration

Stitch output is **not automatically the source of truth**.

The approved visual decisions must be translated into:

```text
DESIGN.md
```

before being treated as implementation requirements.

---

# 46. Antigravity Rules

Antigravity is responsible for implementation and engineering work.

It must:

* Read all relevant context files.
* Inspect existing code.
* Follow established architecture.
* Follow established design rules.
* Preserve working behavior.
* Avoid unnecessary dependencies.
* Verify implementation.

Antigravity must not override the established design system merely because generated code uses a different visual style.

---

# 47. AI MCP Rules

When MCP tools are available, use them only when they provide meaningful value.

MCP tools must not be used merely for novelty.

Before using an MCP integration:

1. Determine what task it solves.
2. Confirm that it is relevant.
3. Use the minimum required capability.
4. Do not expose secrets or credentials.
5. Do not modify external resources without authorization.

External integrations must follow the project's security and privacy requirements.

---

# 48. Security Rules

Never expose:

* API keys
* Passwords
* Tokens
* Private credentials
* `.env` values
* Private configuration
* Personal secrets

Do not commit secrets to Git.

Use:

```text
.env
.env.example
```

appropriately.

Never place secrets inside Blade templates or public assets.

---

# 49. Git Rules

Changes should be logically scoped.

Prefer commits that represent meaningful units such as:

```text
feat: implement portfolio hero
feat: add AssetFlow case study
fix: improve mobile navigation
style: refine typography
perf: optimize project images
a11y: improve keyboard navigation
```

Avoid giant commits containing unrelated changes.

Do not rewrite Git history unless explicitly requested.

---

# 50. Verification Rules

Before reporting a task as complete, verify the relevant implementation.

At minimum:

```text
Code
 ↓
Build
 ↓
Browser
 ↓
Responsive
 ↓
Accessibility
```

If a verification step cannot be performed, explicitly state that limitation.

Never claim a test was performed when it was not.

---

# 51. Completion Criteria

A task is considered complete only when:

* The requested requirement is implemented.
* Existing functionality still works.
* The implementation follows `DESIGN.md`.
* The implementation follows `ARCHITECTURE.md`.
* No unnecessary dependencies were introduced.
* Responsive behavior has been considered.
* Accessibility has been considered.
* Relevant verification has been performed.

---

# 52. Conflict Resolution

When instructions conflict, use the following priority:

```text
1. Explicit user instruction
2. PRD.md
3. DESIGN.md
4. ARCHITECTURE.md
5. RULES.md
6. Existing implementation preference
7. AI preference
```

AI preference must always have the lowest priority.

If an explicit user request intentionally changes an established rule, follow the explicit request and update the relevant context documentation when appropriate.

---

# 53. Forbidden AI Behaviors

AI must not:

* Invent portfolio information.
* Invent project metrics.
* Invent project features.
* Add unnecessary dependencies.
* Convert the project into an SPA.
* Add a database without a requirement.
* Add analytics without a requirement.
* Add authentication without a requirement.
* Introduce pill UI.
* Introduce generic rounded-card layouts.
* Add excessive visual effects.
* Perform unrelated refactoring.
* Rewrite working code without justification.
* Delete existing work without authorization.
* Expose secrets.
* Claim unverified results.
* Claim tests were run when they were not.
* Optimize for visual novelty over usability.
* Optimize for code cleverness over maintainability.

---

# 54. Quality Gate

Before finalizing any significant change, ask:

### Product

* Does this satisfy an actual requirement?
* Does it improve the intended user experience?

### Design

* Does it follow `DESIGN.md`?
* Does it preserve the light, clean, modern, elegant identity?
* Does it avoid unnecessary cards and rounded UI?
* Does it use the grid and divider system appropriately?

### Architecture

* Does it follow `ARCHITECTURE.md`?
* Is the implementation simpler than the alternatives?
* Did it introduce unnecessary infrastructure?

### Content

* Is every claim accurate?
* Did the AI invent anything?

### Accessibility

* Can it be used with keyboard navigation?
* Is the semantic structure correct?
* Is the contrast sufficient?
* Does reduced motion work?

### Performance

* Is JavaScript necessary?
* Are images optimized?
* Were unnecessary resources introduced?

### Maintainability

* Is the code understandable?
* Is the abstraction justified?
* Can another developer easily modify it?

If any answer is "no", the implementation should be reviewed before completion.

---

# 55. Final Engineering Principle

The portfolio should demonstrate engineering maturity through **restraint**.

The goal is not to maximize:

```text
Features
Dependencies
Animations
Abstractions
Frameworks
```

The goal is to maximize:

```text
Clarity
+
Usability
+
Accuracy
+
Maintainability
+
Performance
+
Engineering Quality
```

The AI should always prefer:

> **Simple, intentional, explainable solutions over impressive but unnecessary complexity.**
