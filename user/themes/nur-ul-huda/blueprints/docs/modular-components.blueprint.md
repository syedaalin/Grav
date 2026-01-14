# Modular Components Blueprint Documentation

## Identity
- **System Name**: `modular-components`
- **Purpose**: A collection of reusable content blocks for building dynamic pages.
- **Behaviors**: 
    - Full Grav Modular support.
    - Optimized rendering via specific Twig templates.

## Components Covered
- **Features**: Icon-focused highlights grid.
- **Gallery**: Media-rich image/video showcase.
- **Services**: Service offerings with dynamic columns.
- **Text**: Standard textual content block.
- **Trust Signals**: Logos or testimonials to build credibility.
- **Timeline**: Chronological event tracking.

## Admin Settings
Most modular components follow a shared pattern:
- **Title/Content**: Standard Grav fields.
- **Style/Layout**: (e.g., column count, standard vs. small layout).
- **Items**: List of entries with icons, images, and text.

## UX/UI
- **Layers**: `@layer components`
- **Grid Layouts**: Uses responsive CSS Grids (`auto-fit`) to handle wrapping without media queries.
