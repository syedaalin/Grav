# Centralized System Quick Reference

## File Locations

### Design Tokens
- **SCSS Tokens:** `scss/tokens/_design-tokens.scss`
- **CSS Properties:** `templates/partials/custom-styles.html.twig`
- **Documentation:** `docs/component-registry.md`

### Components (Twig)
- `templates/components/button.html.twig`
- `templates/components/social-links.html.twig`
- `templates/components/contact-info.html.twig`
- `templates/components/card.html.twig`

### JavaScript Modules
- `js/modules/core/haptics.js`
- `js/modules/core/spatial.js`
- `js/modules/core/predictive.js`
- `js/modules/core/agentic.js`
- `js/theme-core-new.js` (orchestrator)

### SCSS Architecture
- `scss/theme-core.scss` (master file)
- `scss/components/_components.scss` (component styles)

## Quick Usage

### Using Button Component
```twig
{% include 'components/button.html.twig' with {
    text: 'Click Me',
    url: '/page',
    variant: 'primary',
    size: 'md'
} %}
```

### Using Social Links
```twig
{% include 'components/social-links.html.twig' with {
    size: 'lg',
    layout: 'horizontal'
} %}
```

### Using Contact Info
```twig
{% include 'components/contact-info.html.twig' with {
    layout: 'list',
    icons: true
} %}
```

### Using Card Component
```twig
{% embed 'components/card.html.twig' with { variant: 'glass' } %}
    {% block content %}
        <p>Your content</p>
    {% endblock %}
{% endembed %}
```

### Using Design Tokens (SCSS)
```scss
@import 'tokens/design-tokens';

.element {
    padding: $space-lg;
    border-radius: $radius-modern;
    font-family: font-family('outfit');
}
```

### Using JavaScript Modules
```javascript
// Pre-initialized, auto-loaded
ThemeCore.modules.haptics.vibrate(15);
ThemeCore.modules.predictive.prerender('/next');
```

## Admin Panel Mapping

### Colors
- Primary: `token_color_primary`
- Secondary: `token_color_secondary`
- Accent: `token_color_accent`

### Typography
- Body Font: `token_font_body`
- Header Font: `token_font_header`
- Type Scale: `token_typo_scale`

### Physics
- Border Radius: `physic_radius_main`
- Glass Blur: `physic_glass_blur`
- Neomorphism: `physic_neo_strength`

## Documentation
See [`docs/component-registry.md`](file:///Users/syedaalin/Documents/Grav/user/themes/my-quark/docs/component-registry.md) for complete reference.
