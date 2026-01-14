# UI Utilities & Theme Configuration Documentation

## Identity
- **System Name**: `ui-utilities`
- **Purpose**: Global theme settings and layout controls.
- **Behaviors**: 
    - Manages design token overrides.
    - Controls global visibility of theme features.

## Tab Categories (blueprints/tabs/)
- **General**: Site identity and global toggles.
- **Theme Colors**: OKLCH color overrides for brand and semantic layers.
- **Glassmorphism**: Global control over frosted glass effects.
- **Integrations**: Moodle, JazzCash, and Snipcart configuration.
- **Religious**: Specialized settings for Hijri dates and Prayer timings.

## Design Tokens
- **Centralized**: All settings are injected into `:root` via `base.html.twig`.
- **DRY Principle**: Settings defined here are referenced throughout the CSS layers.
