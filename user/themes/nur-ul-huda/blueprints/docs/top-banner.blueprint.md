# Top Banner Blueprint Documentation

## Identity
- **System Name**: `top-banner`
- **Purpose**: A high-utility header strip for dates, prayer times, and announcements.
- **Behaviors**: 
    - Dynamic reordering of widgets (Gregorian, Hijri, Prayer).
    - Integrated scrolling announcement ticker with scheduling.
    - Glassmorphism support.

## Admin Settings (Blueprints)
- **Display**: `top_banner_enabled`, `top_banner_glass`.
- **Radiant Trio**: `top_banner_widgets_order` (Selectize).
- **Announcement Ticker**: 
    - `top_banner_announcement_enabled`
    - `top_banner_announcement_text`
    - `top_banner_announcement_starts` / `expires` (Scheduling)
    - `top_banner_announcement_speed`

## UX/UI
- **Classes**: `.top-banner-main`, `.ticker-strip`
- **Layers**: `@layer components`
- **Responsive**: Mobile-hide options per widget for clean handheld experience.
