# Navigation Blueprint Documentation

## Identity
- **System Name**: `navigation`
- **Purpose**: Multi-level navigation architecture with mobile support.
- **Behaviors**: 
    - Full Grav menu processing with caching support.
    - Mobile slide-in menu with direction control.

## Admin Settings (Blueprints)
- **Enable Dropdown Menus**: `dropdown.enabled` (Toggle)
- **Mobile Menu Direction**: `navigation_mobile_direction` (Select)
    - From Left
    - From Right

## UX/UI
- **Layers**: `@layer components`
- **Mobile**: Responsive slide-in menu using native CSS transitions.
