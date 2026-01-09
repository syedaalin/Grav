---
trigger: always_on
---

2026 Theme Design & Feature Best Practices
Context: Modern Web Architecture & User Experience Standards Source: GitHub Ecosystem Analysis (2026 Era)

1. Core Architectural Concepts
1.1 The "Headless" Foundation
Modern themes in 2026 are no longer monolithic templates. They are skins over headless primitives.

Best Practice: Do not build UI logic (accordions, tabs, modals) from scratch. Use unstyled, accessible-by-default primitives (e.g., MUI Base UI, Radix, or Bento primitives).
Benefit: Zero-compromise accessibility (a11y) and keyboard navigation while retaining 100% visual freedom.
1.2 "Oxide-Native" Performance
With the dominance of Rust-based tooling (Tailwind Oxide, Turbopack), themes must be "Zero Runtime".

Best Practice: Avoid JavaScript-heavy layout calculations. Use CSS for layout (Grid/Flex) and native CSS features (Anchor Positioning) instead of JS popper libraries.
Metric: Sub-millisecond build times are the baseline.
1.3 Intrinsic Design 2.0
Responsiveness has moved beyond the viewport.

Feature: Container Queries are mandatory for all components. A card must look good whether it's in a sidebar or a main feed, without media queries.
Feature: Fluid Typography & Spacing using clamp() logic, ensuring smooth scaling across the infinite canvas of foldable and spatial devices.
2. Visual Design Trends (The "Neo-Premium" Look)
2.1 Neo-Skeuomorphism & Glassmorphism
Flat design is dead. 2026 interfaces feel "touchable" and "alive".

Trend: Deep layers, background blur (glassmorphism), and subtle inner shadows to create depth.
Implementation: backdrop-filter: blur(), variable transparency, and noise textures to reduce digital starkness.
2.2 Micro-Interactions as Standard
Motion is not an afterthought; it is a primary feedback mechanism.

Feature: Hover states that track cursor position (spotlight effects).
Feature: "Shared Element Transitions" (View Transitions API) for seamless morphing between pages.
2.3 Vivid & Dynamic Color (OkLCH)
Standard: Use the Display P3 gamut via oklch() color space.
Trait: Colors should be perceptible and vibrant. Themes often generate palettes dynamically based on a seed color (Material You influence).
3. Essential Feature Set (The 2026 Checklist)
3.1 Advanced Personalization
Users expect to own the interface.

Must-Have: Granular Dark Mode (System, Light, Dark, "black" for OLEDs).
Next-Level: "User Preference Media Queries" support (Reduced Motion, High Contrast, Data Saving) integrated deeply into the theme's logic.
3.2 "Spatial" Readiness
Web apps are increasingly viewed in VR/AR headsets (Spatial Computing).

Best Practice: Large hit targets (min 44px -> 48px).
Concept: "Hover" is replaced by "Gaze" intent; UI elements should gently scale or lift when looked at.
3.3 Semantic & AI-Ready HTML
Themes are read by Agents as much as humans.

Requirement: Strict semantic HTML5 (Articles, Sections, Navs).
Meta: Rich JSON-LD structured data baked into the theme templates for automatic content discovery by AI search engines.
4. Specific to Grav CMS (2026 Context)
4.1 The "Skeleton" Approach
Observation: Leading themes (like Hadron) provide a "Skeleton" package—a full site start-kit, not just a folder of templates.
Standard: Themes should ship with "Demo Blueprints" that auto-populate dummy content so the user sees the design immediately upon installation.
4.2 Blueprint Sovereignty
Rule: Every visual quirk (border radius, font scale, primary color) should be configurable via the Admin Panel (blueprints.yaml), exposing CSS variables to the user without code edits.