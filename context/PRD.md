# PRD.md

# Personal Portfolio Website

**Product Requirements Document**

> **Product:** Revan — Personal Portfolio
> **Positioning:** Software Engineering Student & Full-stack Developer
> **Primary Purpose:** Professional portfolio and recruitment
> **Primary Audience:** Recruiters and hiring managers
> **Status:** V1
> **Last Updated:** 2026

---

# 1. Product Overview

This project is a personal portfolio website for **Revan**, a Software Engineering student and Full-stack Developer.

The website is designed to communicate Revan's professional identity, demonstrate practical software engineering capability through selected projects, present relevant technical skills, and provide a clear path for professional contact.

The portfolio prioritizes **clarity, credibility, usability, and engineering evidence** over visual complexity.

The primary project showcased in V1 is **AssetFlow**, a web-based office asset management application developed by Revan as a Full-stack Developer.

---

# 2. Product Vision

Create a clear, credible, and technically focused personal portfolio that demonstrates the ability to build structured web and mobile applications and communicate engineering decisions effectively.

The portfolio should demonstrate capability through:

* Real project evidence
* Clear technical explanations
* Structured presentation
* Practical problem solving
* Thoughtful product decisions

The portfolio must avoid relying on exaggerated claims, excessive visual effects, or generic developer clichés.

---

# 3. Product Positioning

## Primary Identity

**Software Engineering Student & Full-stack Developer**

## Tagline

> I build structured web and mobile applications that turn practical problems into usable digital products.

## Professional Statement

> Software Engineering student focused on Laravel and Flutter development, with experience building productivity, asset management, and real-time monitoring applications. I use AI-assisted workflows to accelerate research, design, development, and testing without compromising engineering fundamentals.

### Positioning Note

AI-assisted development is a **supporting workflow advantage**, not the primary professional identity.

The portfolio must not position Revan as an AI Engineer, AI Developer, or AI specialist.

The primary positioning remains software engineering and application development.

---

# 4. Product Principles

The portfolio follows these principles:

## 4.1 Evidence Over Claims

Important professional claims should be supported by:

* Projects
* Technical explanations
* Implementation details
* Demonstrable outcomes

Avoid unsupported statements such as:

> "Highly skilled developer."

Prefer concrete statements describing what was actually built.

---

## 4.2 Clarity Over Complexity

The visitor should understand the portfolio without needing to navigate complicated interactions.

Information hierarchy takes priority over decorative design.

---

## 4.3 Recruiter First

The website should support visitors who scan quickly.

Important information must be discoverable without requiring the visitor to read every section.

---

## 4.4 Engineering Over Decoration

Visual design should reinforce technical credibility rather than compete with project content.

---

## 4.5 Honest Representation

The portfolio must never:

* Invent project metrics
* Invent achievements
* Exaggerate technical proficiency
* Claim responsibilities that were not performed
* Present incomplete knowledge as expertise

---

# 5. Problem Statement

Recruiters and hiring managers evaluating junior software engineering candidates need to quickly understand:

* Who the candidate is
* What the candidate focuses on
* What the candidate has actually built
* What role the candidate played
* What technologies were used
* How the candidate approaches engineering problems
* How to contact the candidate

A conventional resume can communicate basic qualifications but provides limited context about project implementation and engineering thinking.

This portfolio addresses that gap by combining concise professional positioning with detailed project evidence.

---

# 6. Goals

## Primary Goals

### G1 — Establish Professional Positioning

Clearly present Revan as a:

> Software Engineering Student & Full-stack Developer

with a primary focus on Laravel-based web development and secondary experience with Flutter.

---

### G2 — Demonstrate Practical Engineering Capability

Use AssetFlow as the primary evidence of practical full-stack development experience.

---

### G3 — Support Recruitment

Make it easy for recruiters and hiring managers to:

* Understand Revan's profile
* Review selected work
* Access the resume
* View LinkedIn
* Contact Revan by email

---

## Secondary Goals

### G4 — Demonstrate Technical Breadth

Show relevant experience across:

* Backend development
* Frontend development
* Database development
* Mobile development

without presenting every technology ever explored.

---

### G5 — Demonstrate Engineering Thinking

Show how Revan approaches:

* Problem understanding
* System structure
* Implementation
* Testing
* Refinement

---

### G6 — Demonstrate Product Awareness

Show that applications are designed around practical problems and user workflows rather than technology alone.

---

# 7. Non-Goals

The following are explicitly outside the scope of V1:

* Blog platform
* CMS
* Admin dashboard for the portfolio
* Visitor authentication
* Visitor accounts
* Comments
* Newsletter
* Multi-language support
* Dark mode
* E-commerce
* AI chatbot
* Complex interactive 3D experiences
* Heavy visual effects
* Portfolio analytics
* Visitor tracking
* Dynamic project management system

The portfolio should remain primarily a **content-focused professional website**.

---

# 8. Target Audience

## 8.1 Primary Audience — Recruiters

Recruiters need to quickly determine whether Revan is relevant for an internship or junior software engineering opportunity.

### Primary needs

* Professional identity
* Technical focus
* Relevant project
* Resume
* Contact information

### Behavior

Recruiters are expected to scan the website rather than read every section in detail.

---

## 8.2 Secondary Audience — Hiring Managers / Engineering Leads

Hiring managers may investigate the portfolio more deeply.

### Primary needs

* Project contribution
* Architecture
* Technical decisions
* Problem solving
* Implementation details
* Development approach

---

## 8.3 Tertiary Audience — Developers / Collaborators

Developers and potential collaborators may be interested in:

* Technology stack
* Engineering practices
* GitHub
* Project implementation
* Development philosophy

---

# 9. User Jobs

The portfolio should help visitors complete these jobs.

### Job 1

> Understand who this candidate is.

### Job 2

> Understand what this candidate can build.

### Job 3

> See evidence of real project experience.

### Job 4

> Understand the candidate's technical capabilities.

### Job 5

> Understand how the candidate approaches development.

### Job 6

> Find a way to contact the candidate.

---

# 10. Value Proposition

The portfolio communicates the following value proposition:

> Revan is a Software Engineering student who builds structured web and mobile applications focused on solving practical problems, with hands-on experience in Laravel-based full-stack development and Flutter.

Supporting differentiators:

* Practical application development
* Full-stack perspective
* Structured engineering approach
* Product-oriented thinking
* Ability to explain technical decisions
* AI-assisted workflows used as a productivity tool rather than a substitute for engineering fundamentals

---

# 11. Information Architecture

V1 intentionally uses a minimal information architecture.

```text
Portfolio
│
├── Home (/)
│   │
│   ├── Hero
│   ├── Selected Work
│   ├── About
│   ├── Skills & Technical Focus
│   ├── Development Approach
│   ├── Contact
│   └── Footer
│
├── AssetFlow Case Study
│   └── /work/assetflow
│
└── External Resources
    ├── Resume PDF
    ├── LinkedIn
    └── Email
```

There is no `/work` index page in V1 because AssetFlow is currently the only featured project.

Additional projects may be added later without requiring a redesign of the entire information architecture.

---

# 12. Primary User Journey

The intended primary journey is:

```text
Landing
   ↓
Understand Identity
   ↓
View Selected Work
   ↓
Explore AssetFlow
   ↓
Understand Engineering Capability
   ↓
Review Skills / Profile
   ↓
Download Resume or Contact
```

The primary information flow is:

```text
Identity
   ↓
Evidence
   ↓
Engineering Depth
   ↓
Capabilities
   ↓
Contact
```

---

# 13. Homepage Requirements

## Route

```text
/
```

## Required Sections

1. Hero
2. Selected Work
3. About
4. Skills & Technical Focus
5. Development Approach
6. Contact
7. Footer

---

# 14. Hero Requirements

The Hero must communicate:

* Name / identity
* Professional role
* Value proposition
* Primary development focus
* Primary CTA
* Resume access

## Primary Identity

```text
Software Engineering Student & Full-stack Developer
```

## Tagline

```text
I build structured web and mobile applications that turn
practical problems into usable digital products.
```

## Primary CTA

```text
View Selected Work
```

## Secondary CTA

```text
Download Résumé
```

Optional supporting metadata may include:

* Location
* Current availability
* Primary technologies

The Hero must not be overloaded with technology logos or decorative content.

---

# 15. Selected Work Requirements

The Selected Work section presents AssetFlow as the primary featured project.

## Required Information

* Project name
* Short description
* Project visual
* Role
* Project type
* Technology stack
* Case study CTA

## Project

**AssetFlow**

**Description:**

A web-based office asset management application designed to manage asset inventory, borrowing workflows, maintenance, damage tracking, and administrative reporting.

## Role

**Full-stack Developer**

## Primary Stack

* Laravel
* Livewire
* PHP
* MySQL
* Tailwind CSS

The section should direct users to:

```text
/work/assetflow
```

---

# 16. About Requirements

The About section should provide concise professional context.

It should explain:

* Current educational background
* Software engineering focus
* Primary development focus
* Secondary development experience
* General development philosophy

The section should remain concise.

Avoid turning the About section into an autobiography.

---

# 17. Skills & Technical Focus Requirements

Skills must be grouped rather than represented as arbitrary percentage scores.

## Primary Focus

```text
Laravel
PHP
MySQL
```

## Frontend

```text
HTML
CSS
JavaScript
Tailwind CSS
Livewire
```

## Mobile

```text
Flutter
Dart
```

## Tools / Platform

```text
Git
GitHub
Firebase
```

The final skill list should only contain technologies that accurately represent current knowledge and project experience.

Do not use:

* Skill percentage bars
* Fake proficiency scores
* Unsupported expertise claims

---

# 18. Development Approach Requirements

The portfolio should communicate a structured development process.

Recommended conceptual flow:

```text
Understand
    ↓
Structure
    ↓
Build
    ↓
Refine
```

### Understand

Understand the problem, users, requirements, and constraints.

### Structure

Plan application architecture, data flow, and implementation approach.

### Build

Implement features with maintainability and usability in mind.

### Refine

Test, debug, review, and improve the result.

AI-assisted development may be mentioned as a supporting workflow, but it must not dominate this section.

The focus should remain on engineering fundamentals.

---

# 19. Contact Requirements

The portfolio does not require a complex contact system in V1.

Primary contact methods:

* Email
* LinkedIn

The Contact section should provide a clear CTA to initiate professional communication.

No contact form is required for V1.

---

# 20. Resume Requirements

The resume will be provided as a PDF.

The portfolio should provide a clear:

```text
Download Résumé
```

action.

The website does not require a dedicated `/resume` page in V1.

---

# 21. AssetFlow Case Study

## Route

```text
/work/assetflow
```

The case study is the primary technical evidence within the portfolio.

It should communicate:

```text
What was built?
Why was it built?
What was Revan's role?
How does it work?
What technical decisions were made?
What challenges were encountered?
What was learned?
```

---

# 22. AssetFlow Project Overview

**AssetFlow** is a web-based office asset management application.

The application provides workflows for:

* User access management
* Asset inventory
* Asset categorization
* Location management
* Asset catalog browsing
* Asset borrowing
* Borrowing verification
* Asset return
* Damage reporting
* Maintenance management
* Reporting and administrative analytics

---

# 23. AssetFlow Role

Revan's role:

> **Full-stack Developer**

The case study should clearly communicate that Revan contributed across the application's development rather than representing the project solely as a frontend or backend exercise.

The case study must not imply contributions beyond the actual work performed.

---

# 24. AssetFlow Feature Summary

## 24.1 Authentication & Access Control

### User Registration & Login

Users can:

* Register an account
* Log in
* Log out securely

### Password Management & Verification

Users can:

* Request password resets through email links
* Verify email addresses during registration

### Role-Based Access Control

The system supports:

* Administrator
* Staff

Users are directed to appropriate dashboards and restricted from unauthorized functionality.

---

# 25. AssetFlow User Management

Administrators can:

* View paginated users
* Search users
* Create users
* Edit users
* Delete users
* Assign roles

---

# 26. AssetFlow Core Features

## Category Management

Administrators can:

* Add categories
* View categories
* Edit categories
* Delete categories

---

## Location Management

Administrators can:

* Add locations
* View locations
* Edit locations
* Delete locations

---

## Asset Management

Administrators can manage the complete asset inventory:

* Add assets
* View assets
* Edit assets
* Delete assets
* Assign categories
* Assign locations
* Define usage type
* Set prices
* Upload asset photos

Supported usage types:

* Individual
* Shared

---

## Asset Catalog

Staff can:

* Browse available individual assets
* Search assets by name
* Filter assets by category

---

## Asset Borrowing

Staff can submit borrowing requests by specifying:

* Start date
* End date
* Supporting notes

---

## Borrowing Verification

Administrators can:

* View pending requests
* Approve requests
* Reject requests

When a request is approved, the corresponding asset is automatically marked as in use.

---

## Personal Borrowing History

Staff can:

* View their borrowing history
* Check request status
* Cancel pending requests

---

## Asset Return

Staff can initiate an asset return.

Administrators then:

* Verify the physical return
* Complete the return workflow

Once completed, the asset becomes available in the catalog again.

---

# 27. AssetFlow Maintenance & Damage Tracking

## Damage Reporting

Staff can:

* Search for assets
* Report asset damage
* Submit a problem description

The asset status is immediately updated to indicate that it is damaged.

---

## Maintenance Management

Administrators can:

* View reported damages
* Move damaged assets into active maintenance
* Record repair actions
* Record maintenance costs
* Resolve maintenance logs

After maintenance is resolved, the asset returns to an available state.

---

# 28. AssetFlow Reporting & Analytics

The following analytics refer to **AssetFlow functionality**, not analytics for the portfolio website.

## Admin Dashboard Analytics

Administrators can view:

* Total assets
* Available assets
* Borrowed assets
* Pending requests
* Asset status breakdown
* Asset category breakdown
* Recent activity

The dashboard may use visual charts to communicate asset statistics.

---

## Borrowing Reports & Export

Administrators can:

* Generate borrowing reports
* Filter reports by date range
* Filter reports by request status
* Export reports as PDF documents

---

# 29. AssetFlow Case Study Structure

The case study should follow this structure:

```text
Project Header
    ↓
Overview
    ↓
Problem
    ↓
Goals
    ↓
Role
    ↓
Solution
    ↓
Key Features
    ↓
Technical Architecture
    ↓
Data Model
    ↓
Technical Decisions
    ↓
Challenges
    ↓
Solutions
    ↓
Results
    ↓
Lessons Learned
    ↓
Future Improvements
```

Not every section must have equal visual weight.

The most important sections should receive greater emphasis:

* Problem
* Role
* Solution
* Features
* Architecture
* Technical Decisions
* Challenges / Solutions

---

# 30. Case Study Content Rules

The AssetFlow case study must:

* Explain actual functionality.
* Clearly distinguish Revan's contribution.
* Use screenshots as evidence where possible.
* Explain technical decisions rather than only listing technologies.
* Avoid unsupported performance claims.
* Avoid fabricated metrics.
* Avoid describing features that do not exist.

Technical details should be understandable to both technical and non-technical readers.

---

# 31. CTA Strategy

The website should maintain a restrained CTA hierarchy.

## Primary CTA

```text
View Selected Work
```

Location:

Hero.

---

## Secondary CTA

```text
Download Résumé
```

Location:

Hero / Navigation.

---

## Project CTA

```text
View Case Study
```

Location:

Selected Work.

---

## Final CTA

```text
Get in Touch
```

Location:

Contact section.

---

# 32. External Links

The portfolio should provide access to:

* Email
* LinkedIn
* Resume PDF

GitHub may be included if the repository is appropriate for public presentation.

External links should open predictably and use descriptive labels.

---

# 33. SEO Requirements

The portfolio should provide basic SEO support.

Required:

* Descriptive page title
* Meta description
* Semantic HTML
* Proper heading hierarchy
* Descriptive URLs
* Appropriate image alt text
* Open Graph metadata where appropriate

Primary search context should naturally reflect:

* Revan
* Software Engineering Student
* Full-stack Developer
* Laravel Developer
* Web Developer
* Flutter Developer

Avoid keyword stuffing.

---

# 34. Accessibility Requirements

The website must:

* Support keyboard navigation.
* Provide visible focus states.
* Maintain sufficient color contrast.
* Use semantic HTML.
* Provide appropriate alternative text.
* Use accessible interactive controls.
* Avoid relying on color alone.
* Support reduced motion.
* Maintain usable touch targets.
* Remain readable on small screens.

Detailed visual accessibility rules are defined in `DESIGN.md`.

---

# 35. Performance Requirements

The portfolio should prioritize lightweight delivery.

Requirements:

* Optimize project images.
* Use responsive images.
* Lazy-load non-critical images when appropriate.
* Avoid unnecessary JavaScript.
* Avoid heavy visual effects.
* Minimize third-party dependencies.
* Avoid layout shifts.
* Keep animations lightweight.
* Prioritize fast initial rendering.

Visual design must not compromise usability or loading performance.

---

# 36. Responsive Requirements

The website must provide a complete experience across:

* Mobile
* Tablet
* Desktop
* Large desktop

Responsive behavior should adapt:

* Layout
* Typography
* Navigation
* Spacing
* Image presentation
* Metadata arrangement
* Content hierarchy

Mobile should not simply be a smaller desktop layout.

---

# 37. Content Strategy

The portfolio follows an **evidence-driven content strategy**.

Preferred content structure:

```text
Claim
  ↓
Evidence
  ↓
Explanation
```

Example:

Instead of:

> I am an expert Laravel developer.

Use:

> Built AssetFlow as a full-stack web application using Laravel and Livewire, implementing asset management, borrowing workflows, maintenance tracking, and administrative reporting.

The portfolio should favor specific descriptions over generic self-promotion.

---

# 38. Copywriting Rules

Use:

* Clear English
* Concise sentences
* Specific terminology
* Professional but approachable language
* First-person voice when describing personal experience
* Technical accuracy

Avoid:

* Generic motivational language
* Excessive buzzwords
* Empty claims
* Corporate jargon
* Excessive self-praise
* Artificially sophisticated wording

Avoid phrases such as:

> Passionate developer dedicated to delivering innovative solutions.

unless there is a specific contextual reason to use them.

---

# 39. Visual Product Direction

The product follows the **Sharp Technical Editorial** visual direction defined in `DESIGN.md`.

Core characteristics:

* Light theme
* Sharp geometric forms
* No default rounded corners
* No pill-shaped UI
* Cardless-first layouts
* Strong typography
* Generous whitespace
* Thin dividers
* Fine grid
* Technical annotations
* Restrained blue accent
* Minimal decorative elements

Visual design must prioritize:

1. Readability
2. Clarity
3. Accessibility
4. Performance
5. Structural consistency
6. Visual elegance
7. Decorative enhancement

---

# 40. Content Priority

Information should be prioritized in this order:

```text
1. Professional Identity
2. Value Proposition
3. Selected Project
4. Project Contribution
5. Engineering Capability
6. Technical Skills
7. Development Approach
8. Resume
9. Contact
```

Secondary information must not visually compete with primary information.

---

# 41. Portfolio Analytics

The portfolio itself will **not implement analytics in V1**.

Do not add:

* Google Analytics
* Plausible
* PostHog
* Visitor tracking
* Event tracking
* Heatmaps
* Session recording

The project does not require visitor analytics at this stage.

Note:

AssetFlow's own reporting and dashboard analytics are part of the showcased project and are unrelated to portfolio visitor tracking.

---

# 42. Scope Constraints

## V1 Platform

Responsive web application.

## Primary Purpose

Professional portfolio and recruitment.

## Primary Project

AssetFlow.

## Secondary Technology Focus

Flutter.

## Primary Development Focus

Laravel / Full-stack Web Development.

## Visual Theme

Light.

## Content Model

Primarily static.

## CMS

Not required.

## Authentication

Not required for portfolio visitors.

## Database

Not required unless implementation requirements justify its use.

## Analytics

Not required.

## Contact System

Email and LinkedIn.

## Resume

PDF.

## Project Routing

No `/work` index page in V1.

AssetFlow is directly accessible through:

```text
/work/assetflow
```

---

# 43. Future Roadmap

Future development may include:

## Phase 2

* LifeLog revised project
* Additional project case studies
* Experience information
* Certifications

---

## Phase 3

* Blog
* Markdown / MDX-based technical articles
* Additional technical writing

---

## Phase 4

Only if justified by content volume:

* Optional CMS
* Dynamic content management
* Additional portfolio infrastructure

Future features must not be added merely to increase technical complexity.

---

# 44. Success Criteria

The portfolio is considered successful when:

## Professional Positioning

* Visitors can understand Revan's role quickly.
* Laravel / full-stack development is clearly positioned as the primary focus.
* Flutter is presented as a relevant secondary competency.

---

## Project Evidence

* AssetFlow is easy to discover.
* Revan's role as Full-stack Developer is explicit.
* The case study explains the problem and solution.
* Key functionality is clearly communicated.
* Technical decisions are understandable.
* The case study demonstrates actual engineering thinking.

---

## Recruitment

A recruiter can easily:

* Understand the candidate.
* Review the primary project.
* Download the resume.
* Access LinkedIn.
* Contact Revan through email.

---

## User Experience

* Navigation is intuitive.
* Important information is easy to scan.
* Mobile experience is fully usable.
* Pages load efficiently.
* No unnecessary interaction is required to understand the content.

---

## Visual Quality

* Sharp Technical Editorial identity is consistent.
* The light theme remains comfortable to read.
* Cardless-first design is maintained.
* Rounded corners are not used as the default visual language.
* Pill-shaped UI is not used.
* Visual decoration does not overpower content.

---

## Engineering Quality

* Responsive implementation
* Accessible interaction
* Semantic structure
* Maintainable code
* SEO-friendly structure
* Performance-conscious implementation

---

# 45. Definition of Done

The portfolio V1 can be considered complete when:

### Product

* [ ] Homepage is complete.
* [ ] AssetFlow case study is complete.
* [ ] Resume PDF is accessible.
* [ ] Email contact is accessible.
* [ ] LinkedIn is accessible.
* [ ] All project information is factually accurate.

### UX

* [ ] Navigation works across breakpoints.
* [ ] Primary CTAs are clear.
* [ ] AssetFlow can be reached easily.
* [ ] Case study is scannable.
* [ ] Mobile experience is intentional.

### Design

* [ ] `DESIGN.md` rules are followed.
* [ ] Sharp geometry is consistent.
* [ ] No unnecessary cards.
* [ ] No pill-shaped components.
* [ ] Typography hierarchy is consistent.
* [ ] Technical annotations are consistent.
* [ ] Fine grid and divider system are used appropriately.

### Accessibility

* [ ] Keyboard navigation works.
* [ ] Focus states are visible.
* [ ] Contrast is sufficient.
* [ ] Images have appropriate alt text.
* [ ] Semantic HTML is used.
* [ ] Reduced-motion behavior is implemented.

### Performance

* [ ] Images are optimized.
* [ ] No unnecessary dependencies exist.
* [ ] Heavy visual effects are avoided.
* [ ] Layout shifts are minimized.
* [ ] Initial loading is lightweight.

### Engineering

* [ ] Project structure follows `ARCHITECTURE.md`.
* [ ] Implementation follows `RULES.md`.
* [ ] Design tokens are centralized.
* [ ] No unnecessary backend infrastructure is introduced.
* [ ] No analytics infrastructure is included.

---

# 46. Product North Star

The portfolio should communicate one fundamental idea:

> **This is a software engineering portfolio that proves capability through real work, clear thinking, and structured presentation.**

The website should never attempt to compensate for limited project quantity with unnecessary visual complexity.

One well-presented project with meaningful technical depth is more valuable than a collection of shallow project cards.

---

# 47. Final Product Direction

The final V1 experience should feel:

**Clear. Structured. Professional. Technical. Modern. Approachable.**

It should communicate:

```text
Who am I?
        ↓
Software Engineering Student
        ↓
What do I build?
        ↓
Structured web & mobile applications
        ↓
What have I built?
        ↓
AssetFlow
        ↓
How do I approach engineering?
        ↓
Understand → Structure → Build → Refine
        ↓
How can you reach me?
        ↓
Email / LinkedIn
```

The portfolio should demonstrate engineering capability through **clarity, evidence, and thoughtful presentation rather than visual complexity or exaggerated claims.**
