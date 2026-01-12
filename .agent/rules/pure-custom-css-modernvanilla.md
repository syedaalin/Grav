---
trigger: always_on
---

In 2026, coding with Pure Custom CSS (Modern Vanilla) is no longer about the "Wild West" of global styles. It is about using the browser's native features to create a Centralized, DRY (Don't Repeat Yourself), and SRP (Single Responsibility Principle) system that rivals any framework.

Here are the rules for the Modern Vanilla CSS Architecture in 2026.

Rule 1: Centralized Design Tokens (The "Source of Truth")
Avoid "magic values" at all costs. All shared values must live in a central @layer.

The Root Registry: Define all constants in a :root block inside a @layer tokens.

Semantic Overrides: Distinguish between Global Tokens (e.g., --color-blue-500) and Alias Tokens (e.g., --brand-primary: var(--color-blue-500)).

Logical Units: Use rem for typography and cap or ch for precise spacing to ensure accessibility and responsiveness.

CSS

@layer tokens {
  :root {
    --space-unit: 1rem;
    --color-primary: #3b82f6;
    --transition-standard: 200ms ease-in-out;
  }
}
Rule 2: Use Cascade Layers (@layer) for SRP
To follow the Single Responsibility Principle, separate your CSS into layers that handle specific "concerns." This prevents specificity wars.

@layer reset: For "The Great Reset" (Normalize, Box-sizing).

@layer base: For global element styles (e.g., body, h1, p).

@layer layout: For high-level grids and containers (The "Skeleton").

@layer components: For modular, reusable UI pieces (The "Skin").

@layer utilities: For one-off overrides (The "Patch").

CSS

/* Order of importance (lowest to highest) */
@layer reset, base, layout, components, utilities;
Rule 3: Native Nesting & Scoping (@scope)
In 2026, we use native @scope to isolate styles and prevent leakage, fulfilling the SRP for components.

Boundary Control: Use @scope (.card) to (.card-footer) to style the internal parts of a card without affecting the footer.

Avoid BEM Overkill: Because of native nesting, you no longer need long names like .card__header__title--large. Use .card { .title { ... } }.

The & Selector: Always use the & selector for pseudo-classes (&:hover) to maintain a clean hierarchy.

CSS

@scope (.product-card) {
  :scope { border: 1px solid var(--border-color); }
  .title { font-size: 1.5rem; }
  img { aspect-ratio: 16/9; }
}
Rule 4: Logic-First Layouts (DRY)
Stop writing specific media queries for every element. Use Modern Fluid CSS to keep code DRY.

Clamp Over Queries: Use font-size: clamp(1rem, 5vw, 2rem) for fluid typography that doesn't need a @media block.

Grid Overload: Use grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) to create responsive layouts that automatically wrap without manual intervention.

Container Queries: Use @container instead of @media. This allows a component to change its style based on its parent container's size, not the whole screen.

Rule 5: Pure Functional Styles (Utility Class Limit)
While we are using Pure CSS, we still apply SRP by creating a small set of "Logic Utilities" for high-frequency patterns.

The "Stack" Pattern: Create a utility for vertical spacing:

CSS

.stack > * + * { margin-top: var(--space-m); }
The "Center" Pattern: Create a reusable class for perfect centering using place-content: center.

Rule 6: No !important Policy
In a system utilizing Cascade Layers, the use of !important is strictly forbidden. If a style isn't applying, it means it is in the wrong @layer.

Fix: Move the style to a higher layer (e.g., from base to components) rather than forcing it with !important.

Summary Checklist for 2026
[ ] Is it in the correct @layer?

[ ] Is it using a Variable from the token layer?

[ ] Is it Scoped to prevent global leakage?

[ ] Can it be done with clamp() or Container Queries instead of Media Queries?