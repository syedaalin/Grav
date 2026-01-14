# Sidebar Blueprint Documentation

## Identity
- **System Name**: `sidebar`
- **Purpose**: Dynamic sidebar with reorderable widgets.
- **Behaviors**: 
    - Full widget stack control (Search, Related, Random, Taxonomy, Archives, Feed).
    - Grid-based layout for widget segments.

## Admin Settings (Blueprints)
- **Enable Sidebar**: `sidebar_enabled` (Toggle)
- **Widget Order**: `sidebar_widgets_order` (Selectize)
    - search
    - related
    - random
    - taxonomy
    - archives
    - feed
- **Individual Toggles**: Each widget has a dedicated `enabled` toggle.

## UX/UI
- **Classes**: `.sidebar-grid`
- **Responsive**: Adjusts visibility and width based on container size using `@container`.
