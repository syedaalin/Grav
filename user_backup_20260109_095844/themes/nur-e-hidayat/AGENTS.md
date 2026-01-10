# Nur-e-Hidayat: Agent Context & Architecture

This file provides context for AI agents working on the Nur-e-Hidayat theme.

## Architecture

- **CMS**: Grav (Flat-file).
- **Styling**: Tailwind CSS v4 (Oxide engine).
- **Interactivity**: Alpine.js (Lightweight UI) + Custom JS (`main.js`, `calculators.js`).
- **Integrations**:
  - **Moodle**: Courses are fetched via API and displayed in `modular/featured-courses.html.twig`.
  - **Snipcart**: Headless E-commerce for donations and services.

## Logic Hooks

### Prayer Times and Hijri Date
- `partials/base.html.twig` passes configuration to `main.js` via data attributes on `<body>`.
- `main.js` fetches prayer times from Aladhan API and handles the Maghrib transition for the Hijri date.
- Hijri calendar uses `Intl.DateTimeFormat` with `islamic-uma` calendar.

### CSS Variables
The theme uses CSS variables for runtime configuration (e.g., blur strength):
- `--glass-blur`: Set via `blueprints.yaml` and injected in `base.html.twig`.
- OKLCH colors are defined in `css-src/input.css` using the `@theme` directive.

### Event System
- `nur-e-hidayat.php` handles Grav events like `onTwigSiteVariables` to inject theme-specific assets or logic.

## Design tokens
- Primary: `oklch(0.45 0.12 163)` (Emerald Green)
- Accent: `oklch(0.85 0.21 80)` (Gold)
- Surface: `glass-panel` class with backdrop-blur.
