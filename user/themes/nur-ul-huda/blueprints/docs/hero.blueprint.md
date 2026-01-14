# Hero Blueprint Documentation

## Identity
- **System Name**: `hero`
- **Purpose**: A high-impact hero banner supports images, videos, and dynamic sizing.
- **Behaviors**: 
    - Adaptive height (Full screen, Large, Medium, Small, Tiny).
    - Support for parallax and overlay effects.
    - Optimized media delivery via `MediaHelper`.

## Admin Settings (Blueprints)
- **Enable Hero**: `hero_enabled` (Toggle)
- **Default Hero Style**: `hero_default_style` (Select)
    - hero-fullscreen
    - hero-large
    - hero-medium
    - hero-small
    - hero-tiny

## UX/UI
- **Classes**: `.hero-main`
- **Layers**: `@layer components`
- **Fluid Sizing**: Uses `svh` units for precise height control on mobile and desktop.
