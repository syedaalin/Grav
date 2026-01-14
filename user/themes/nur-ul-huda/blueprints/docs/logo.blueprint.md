# Logo Blueprint Documentation

## Identity
- **System Name**: `logo`
- **Purpose**: Manages global site branding assets (Header & Footer logos).
- **Behaviors**: 
    - Supports separate files for Desktop and Mobile.
    - Integrated with `MediaHelper` for SVG/Image validation.

## Admin Settings (Blueprints)
- **Desktop Logo**: `custom_logo` (File)
    - Destination: `theme://images/logo`
- **Mobile Logo**: `custom_logo_mobile` (File)
    - Destination: `theme://images/logo`

## UX/UI
- Header and footer components automatically inject the correct logo based on viewport size using `@container` or `@media`.
