# Ticker Component Documentation

## Identity
- **System Name**: `ticker` (formerly `top-banner`)
- **Purpose**: A scrolling marquee for site-wide announcements.
- **Behaviors**: 
    - Infinite looping scroll (CSS-based).
    - Pause on hover.
    - Optional full-strip link.

## Admin Settings (Blueprints)
- **Display**: `ticker_enabled`, `ticker_pause`.
- **Content**: `ticker_text`, `ticker_link`.
- **Styling**: `ticker_bg`, `ticker_color`, `ticker_speed`.
 
## UX/UI
- **Classes**: `.ticker-component`, `.ticker-marquee`
- **Layers**: `@layer components`
- **Animation**: `ticker-scroll` (linear, infinite).
- **RTL Support**: Automatically reverses direction for RTL languages.
