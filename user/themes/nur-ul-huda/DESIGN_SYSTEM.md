# Nur-ul-Huda Design System (2026)

This document outlines the **Modern Vanilla CSS** architecture for the **Nur-ul-Huda** theme. We have moved away from Tailwind CSS to a native, centralized, and standards-compliant system.

## Core Philosophy

1.  **Centralized Tokens**: All design decisions (colors, spacing, typography) live in the `@layer tokens` block.
2.  **Cascade Layers**: We use `@layer` to manage specificity (Reset -> Base -> Layout -> Components -> Utilities).
3.  **Native Scoping**: Components are isolated using `@scope` (e.g., `@scope (.card)`) to prevent style leakage.
4.  **No Magic Values**: Every value in the CSS must reference a variable from the tokens layer.

## File Structure & Layers
The CSS is organized into modular layers, imported by the single entry point `css/modern-vanilla.css`.

- `css/modern-vanilla.css`: Entry point, manages imports.
- `css/layers/tokens.css`: **@layer tokens**. Design tokens (Colors, Spacing, Typography, Animation) in `:root`.
- `css/layers/reset.css`: **@layer reset**. Modern CSS reset and normalization.
- `css/layers/base.css`: **@layer base**. Global element styles (body, headings, links).
- `css/layers/layout.css`: **@layer layout**. High-level layout patterns (Grid, Flex containers, Holy Grail).
- `css/layers/components.css`: **@layer components**. Scoped component styles using `@scope`.
- `css/layers/utilities.css`: **@layer utilities**. Single-purpose utility classes and logic utilities.

---

## 1. Color Palette (OKLCH)

We use the **OKLCH** color space for perceptual uniformity.

| Token | Value | Description |
| --- | --- | --- |
| `--color-primary` | `oklch(0.55 0.18 165)` | Modern Emerald (Brand) |
| `--color-accent` | `oklch(0.85 0.15 85)` | Modern Gold (Highlight) |
| `--color-dark` | `oklch(0.2 0.01 165)` | Primary Text / Headings |
| `--color-text` | `oklch(0.3 0.02 165)` | Body Text |
| `--color-surface-subtle` | `oklch(0.98 0.005 165 / 0.5)` | Subtle Backgrounds |

---

## 2. Typography

### Typefaces
- **Sans**: `var(--font-sans)` ("Outfit", "Inter", etc.)
- **Serif**: `var(--font-serif)` ("Merriweather", etc.)
- **Mono**: `var(--font-mono)` ("Fira Code", etc.)

### Fluid Font Sizes (using `clamp()`)
| Token | Mobile (Min) | Desktop (Max) | Usage |
| --- | --- | --- | --- |
| `--font-size-sm` | `0.875rem` | `1rem` | Small text |
| `--font-size-base` | `1rem` | `1.125rem` | Body text |
| `--font-size-xl` | `1.25rem` | `1.75rem` | H3 |
| `--font-size-3xl` | `2rem` | `3.5rem` | Hero Headings |

---

## 3. Layout & Spacing

### Spacing Tokens
- Base Unit: `--space-unit` (1rem)
- Scale: `--space-xs` (0.25x) to `--space-3xl` (4x)
- Fluid Section Padding: `--spacing-section` (`clamp(4rem, 8vw, 8rem)`)

### Layout Patterns
- **Container**: Use `.container` or `.section-container`.
- **Grids**: Use `.grid-bento` or `.grid-gallery` for intrinsic responsive grids (no media queries needed).
- **Stack**: Use `.stack` to add top-margin to adjacent siblings.

---

## 4. Components Architecture

Components are defined in the `@layer components` and use `@scope`.

### Example: Glass Card
```css
@scope (.glass-card) {
  :scope {
    background-color: oklch(1 0 0 / 0.4);
    backdrop-filter: blur(16px);
    border: 1px solid oklch(1 0 0 / 0.3);
  }
}
```

### Example: Buttons
- `.btn-primary`: Brand action button.
- `.btn-page`: Pagination button.

---

## 5. Animations

- `--animate-pulse-subtle`
- `--animate-float`
- `--animate-fade-in-up`

---

## Maintenance

To update the theme:
1.  **Edit Tokens**: Go to `css/layers/tokens.css`.
2.  **Edit Components**: Find the specific file in `css/layers/`. 
3.  **New Layers**: If adding a generic partial, import it in `css/modern-vanilla.css`.
4.  **Do NOT use !important**: Fix the layer order or specificity instead.
