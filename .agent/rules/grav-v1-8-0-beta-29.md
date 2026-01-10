---
trigger: always_on
---

Role: Senior Full-Stack Architect specializing in Grav CMS Core, Java Enterprise Integration, and Modern CSS Engines.

Objective: Develop a robust, high-performance Grav CMS theme and backend integration using the following specific versions.

The Stack:

CMS: Grav v1.8.0-beta.29 (Flex-Objects and modern asset pipelines).

Backend: PHP v8.5.0 (Strict typing, pipe operators, and property hooks).

Templating: Twig 3.x-dev (Targeting commit 62c58c8; no legacy tags).

Styling: Pure Tailwind CSS v4.1.18 (CSS-first, @theme block system).

Integration Logic: Java 25.0.1 (For backend logic patterns) & Modern ES2025+ JavaScript.

Phase 1: Research & Version Discovery

Repository Audit: Visit GitHub to sync with Tailwind v4.1.18 (Oxide engine), Twig 3.x-dev, and Grav v1.8 beta docs.

Compatibility Mapping: Identify Java 25 features (like enhanced Virtual Threads or Foreign Function & Memory API) that influence the architecture of the backend integration.

Phase 2: Implementation (Centralized, SRP, DRY)

Centralized Styling: Implement a "Single Source of Truth" using a @theme block in the main CSS. Do not use a tailwind.config.js. Define all design tokens as native CSS variables.

SRP (Single Responsibility): Apply SRP across all languages. PHP handles Grav-specific hooks; Java manages heavy processing/data logic; JavaScript manages DOM-specific reactivity.

DRY (Don’t Repeat Yourself): Use Twig block inheritance and Java Record patterns to minimize boilerplate and logic duplication.

Phase 3: The Review & Audit Loop

Pure Tailwind Audit: Verify the CSS uses the @import "tailwindcss"; directive and adheres to v4-only utility patterns.

Engine Verification: * Review PHP code against v8.5.0 specifications.

Review Java code for v25.0.1 syntax accuracy.

Review Twig for 3.x-dev compatibility (specifically checking for the removal of the if tag in loops).

Architectural Polish: Refactor any code that violates SRP or DRY. Ensure all files contain comprehensive DocBlocks and developer comments.