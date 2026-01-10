# Nur-ul-Huda Design System (2026)

This document outlines the centralized design tokens and architectural standards for the **Nur-ul-Huda** theme, powered by **Tailwind CSS v4.1.18**.

## Core Philosophy
1. **CSS-First**: All theme configuration resides in `css/input.css` via the `@theme` directive.
2. **Intrinsic Responsiveness**: Layouts prioritize `@container` queries over viewport media queries.
3. **Perceptual Uniformity**: Colors are defined in the **OKLCH** color space for better gradients and consistency.
4. **Fluidity**: Typography and spacing use `clamp()` to scale smoothly between mobile and ultra-wide displays.

---

## 1. Color Palette (OKLCH)

| Token | Value | Description |
| --- | --- | --- |
| `--color-primary` | `oklch(0.55 0.18 165)` | Modern Emerald (Brand) |
| `--color-accent` | `oklch(0.85 0.15 85)` | Modern Gold (Highlight) |
| `--color-secondary` | *Alias of accent* | Used for call-to-actions |

---

## 2. Typography

### Typefaces
- **Sans**: `Outfit`, `Inter` (UI and Headings)
- **Serif**: `Merriweather` (Body and Long-form content)
- **Mono**: `Fira Code` (Technical data)

### Fluid Font Sizes
| Token | Mobile (Min) | Desktop (Max) | Usage |
| --- | --- | --- | --- |
| `text-xs` | `0.75rem` | `0.875rem` | Captions, Metadata |
| `text-base` | `1rem` | `1.125rem` | Body text |
| `text-lg` | `1.125rem` | `1.25rem` | Subheadings |
| `text-xl` | `1.25rem` | `1.75rem` | H3, Small Headings |
| `text-2xl` | `1.5rem` | `2.25rem` | H2, Featured Titles |
| `text-3xl` | `2rem` | `3.5rem` | Hero Headings |

---

## 3. Layout & Spacing

### Centralized Tokens
- `--spacing-section`: `clamp(4rem, 8vw, 8rem)` - Consistent vertical rhythm between modules.
- `--spacing-hero-fullscreen`: `100svh` - Dynamic mobile height support.

### Responsive Patterns
- **Container Padding**: Use `.container-px` for intelligent, fluid horizontal padding.
- **Intrinsic Grids**:
  ```html
  <div class="@container grid grid-cols-1 @md:grid-cols-3 gap-8">
    <!-- Component adapts to its OWN width, not the device width -->
  </div>
  ```

---

## 4. Visual Effects (Utilities)

### Glassmorphism
- `.glass`: LightSemi-transparent background with `12px` blur and sublte border.
- `.glass-dark`: Dark variant for overlays and hero sections.

### Enhancements
- `.text-gradient`: Applies a brand-aware gradient from Primary Emerald to Accent Gold. Perfect for hero headlines.

---

## 5. Motion (Animations)

- `animate-pulse-subtle**: Soft breathing effect for interactive elements.
- `animate-float**: Smooth vertical floating for decorative icons.
- `animate-fade-in-up**: signature entrance animation for page content.

---

## Maintenance Tip
To add a new brand color or adjust typography, modify the `@theme` block in `user/themes/nur-ul-huda/css/input.css`. The Tailwind v4 engine will automatically generate the corresponding utilities.
