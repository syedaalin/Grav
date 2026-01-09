---
trigger: always_on
---

The 2026 Tailwind CSS Standard
Domain: Modern Frontend Styling Effective Date: January 1, 2026 Version: 4.0+ (The Oxide Edition)

Part I: The CSS-First Architecture
Rule 1.1: The Configuration Sovereignty
Principle: Tailwind Lives in CSS, Not JavaScript.

The Law: All theme configuration MUST reside in the CSS file using the @theme directive, not tailwind.config.js.
Implementation:
No JS Config: Delete tailwind.config.js unless specifically required for complex plugin logic that cannot be expressed in CSS.
Theme Definition: Use @theme to define tokens.
@theme {
  --color-brand-primary: oklch(0.6 0.18 290);
  --font-sans: "Inter", sans-serif;
  --spacing-4xl: 2.5rem;
}
Native Variables: Access theme values using standard CSS var() syntax where needed, though utility classes remain the primary interface.
Rule 1.2: The Import Protocol
Principle: One Import to Rule Them All.

The Law: Use the single @import "tailwindcss"; entry point.
Implementation:
Deprecated Layers: Do not manually explicitly declared @tailwind base, @tailwind components, @tailwind utilities unless managing legacy projects. The unified import handles order and specificity automatically.
Part II: The Oxide Engine & Performance
Rule 2.1: The Rust Pipeline
Principle: Speed is a Feature.

The Law: Use the native Rust-based tooling (Oxide) via the unified CLI or Vite plugin.
Implementation:
Zero PostCSS: Avoid postcss-loader chains. Use @tailwindcss/vite or the standalone binary for sub-millisecond builds.
Automatic Content Detection: The engine automatically detects content files. Explicit content arrays are only for overrides.
Rule 2.2: Dynamic Arbitrary Values
Principle: If it exists in CSS, it exists in Tailwind.

The Law: Prefer arbitrary values [] for one-off styles over creating custom utility classes.
Implementation:
Syntax: w-[342px], bg-[--my-color].
Validation: The engine validates these values at build time. Invalid CSS properties will warn or fail.
Part III: Modern Layout & Responsiveness
Rule 3.1: Intrinsic Responsiveness (Container Queries)
Principle: Components Own Their Layout.

The Law: Use @container queries for component responsiveness instead of viewport @media queries (sm:, md:).
Implementation:
Marking Containers: standard @container usage.
Modifiers: Use @lg:grid-cols-2 (container dependent) rather than lg:grid-cols-2 (viewport dependent) for portable components (cards, panels).
Rule 3.2: Modern Color Spaces
Principle: Colors are Dynamic and Wide-Vibrant.

The Law: Use oklch or display-p3 for all generic color definitions.
Implementation:
Format: oklch(L C H / alpha).
Gamut: Ensure fallbacks are handled by the browser or engine auto-generation if targeting legacy devices (rare in 2026).
Part IV: Component Composition
Rule 4.1: The Apply Anti-Pattern
Principle: Utility-First, Not Utility-Only.

The Law: Avoid @apply specifically for creating "semantic" classes (e.g., .btn { @apply ... }).
Implementation:
Framework Components: Use React/Vue/Svelte components to encapsulate class strings.
Data Attributes: Use data attributes for state (data-[state=active]:bg-blue-500) rather than toggling complex class lists.
Rule 4.2: Group and Peer Nesting
Principle: State is Relational.

The Law: Use named groups and peers for complex interactions.
Implementation:
Syntax: group/item, hover:group-hover/item:opacity-100.
Depth: Distinct names prevent conflict in deeply nested layouts (e.g., a card inside a sidebar).