# Bottom Banner Blueprint Documentation

## Identity
- **System Name**: `bottom-banner`
- **Purpose**: A comprehensive site footer with branding, newsletter, navigation, and social features.
- **Behaviors**: 
    - Supports dynamic reordering of sections.
    - Responsive design using CSS Container Queries.
    - Integrated with JazzCash and Moodle services via backend helpers.

## Admin Settings (Blueprints)
- **Site Logo**: `bottom_banner_show_logo` (Toggle)
- **Site Name**: `bottom_banner_show_site_name` (Toggle)
- **Site Tagline**: `bottom_banner_show_tagline` (Toggle)
- **Copyright Text**: `bottom_banner_copyright` (Textarea)
- **Section Order**: `bottom_banner_widgets_order` (Selectize)
    - brand
    - social
    - nav
    - newsletter
    - copyright

## Data Structure
The data is processed via `BottomBannerHelper::getData()` which merges theme configuration with global site settings and prepares OKLCH color styles.

## UX/UI
- **Classes**: `.bottom-banner-main`
- **Layers**: `@layer components`
- **Responsive**: Mobile-first, transitions to grid layout at `768px` and `1024px` using `@container`.
