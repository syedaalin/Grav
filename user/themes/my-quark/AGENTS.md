# My-Quark Theme - Agent Context Documentation

**Version**: 0.5.3  
**Type**: Grav CMS Theme (Child of Quark)  
**Architecture**: Atomic Design + Token-Based System  
**Last Updated**: 2026-01-07

---

## Project Identity

**Name**: My Quark  
**Purpose**: Fully dynamic, token-driven Grav theme implementing 2026 web standards  
**Parent Theme**: Quark 2.0+  
**Minimum Grav Version**: 1.6.0

---

## Technical Stack (Strict Versions)

### Core Technologies
- **PHP**: 7.3.6+ (Free-Threading compatible where available)
- **Twig**: 3.x (Templating engine)
- **SCSS**: Dart Sass (no LibSass, no Ruby Sass)
- **CSS**: Modern CSS (Container Queries, Anchor Positioning, View Transitions)
- **JavaScript**: ES2023+ (native modules)

### Build Tools
- **SCSS Compiler**: Dart Sass CLI
- **Package Manager**: npm
- **Polyfills**: @oddbird/css-anchor-positioning (for anchor positioning)

---

## Architecture Overview

### Design Pattern: Atomic Design

```
templates/components/
├── atoms/           → Smallest building blocks (button, input, image)
├── molecules/       → Simple combinations (card, contact-info, menu-list)
└── organisms/       → Complex components (hero)
```

**Rule**: Components must only reference lower-level components or same-level siblings.

### SCSS Architecture

```
scss/
├── tokens/          → Design system source of truth
│   └── _design-tokens.scss
├── core/            → Grid system, variables
├── components/      → Component styles
├── utils/           → Helper mixins and functions
└── theme-core.scss  → Main import orchestrator
```

**Compilation Flow**: 
1. Tokens loaded first (foundation)
2. Core systems (grid, utilities)
3. Components (use tokens)
4. Legacy compatibility (if needed)

---

## Design Token System

### Color Space Strategy

**Compilation Time** (SCSS):
- Format: Hex colors
- Purpose: Build-time defaults
- Location: `scss/tokens/_design-tokens.scss`

**Runtime** (CSS Custom Properties):
- Format: OKLCH (2026 standard)
- Purpose: Dynamic theming via Admin Panel
- Location: Generated in `templates/partials/custom-styles.html.twig`
- Gamut: P3 wide-gamut support

### Token Categories

1. **Colors**
   - Brand: Primary, Secondary, Accent
   - Surface: Body BG, Card BG
   - Text: Primary, Secondary


2. **Typography**
   - Font Families: Outfit (default), Roboto, Inter, Merriweather, Playfair
   - Scale Ratios: 1.067 (Minor Second) → 1.618 (Golden Ratio)
   - Fluid Sizing: clamp() between min/max
   - Line Heights: 1.2 (headings) to 1.8 (loose)

3. **Spacing**
   - Base Unit: 1rem (16px default)
   - Scale: Perfect Fourth ratio
   - Range: 3xs (4px) → 3xl (96px)

4. **Effects**
   - Border Radius: 0px → 999px (pill)
   - Glassmorphism: Backdrop blur + opacity
   - Neomorphism: Soft 3D shadows (0-1 strength)
   - Transitions: 150ms (fast) → 500ms (slower)

---

## Accessibility Standards

### WCAG 3.0 (APCA) Compliance

**Contrast Measurement**: Advanced Perceptual Contrast Algorithm (APCA)

```scss
// Minimum Lc (Lightness contrast) values
$apca-lc-body-text: 75;        // Normal weight body
$apca-lc-heading-bold: 45;     // Bold headings
$apca-lc-small-text: 90;       // <14px text
```

**Touch Targets**: Minimum 44x44px for all interactive elements

**Keyboard Navigation**: Full keyboard support with visible focus indicators

**Screen Readers**: Semantic HTML5 + ARIA labels where needed

---

## Security Standards

### Content Security Policy (CSP)

**Implementation**: PHP event hook in `my-quark.php`

```php
default-src 'self'
script-src 'self' 'unsafe-inline' https://unpkg.com
style-src 'self' 'unsafe-inline'
img-src 'self' data: https:
font-src 'self' data:
```

**Headers**: 
- `X-Content-Type-Options: nosniff`
- `X-Frame-Options: SAMEORIGIN`
- `Referrer-Policy: strict-origin-when-cross-origin`

### GDPR Compliance

**Local Font Hosting**: All fonts self-hosted (no Google Fonts CDN)
- Auto-download via `downloadGoogleFont()` method
- Stored in `fonts/` directory
- WOFF2 format for optimal performance

**No Third-Party Tracking**: Zero external analytics or tracking scripts

---

## Admin Panel Configuration

### Blueprint Structure (7 Tabs)

1. **Design System** - Atomic design tokens (colors, typography, spacing, effects)
2. **Brand Identity** - Logo, contact info, social media
3. **Hero** - Styles, overlays, animations
4. **Backgrounds** - Background configuration

**Total Configuration Options**: 100+ without code changes

---

## Coding Standards

### PHP (PSR-12 + Grav Conventions)

```php
namespace Grav\Theme;

class MyQuark extends Theme
{
    // Event-driven architecture
    public static function getSubscribedEvents(): array
    {
        return [
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onPageInitialized' => ['onPageInitialized', 0]
        ];
    }
}
```

### Twig (Strict Mode)

- **Variables**: Always check existence with `{{ var|default('') }}`
- **Filters**: Use built-in filters (escape, raw, date, etc.)
- **Macros**: Reusable template chunks in `templates/macros/`
- **Partials**: Template fragments in `templates/partials/`

### SCSS (BEM Alternative - Component Scoped)

```scss
// Use CSS @scope for encapsulation
@scope (.card) to (.card__content) {
  .title {
    font-size: var(--font-size-lg);
  }
}
```

### JavaScript (ES Modules)

```javascript
// Modern syntax only


// No jQuery dependency
document.querySelector('.menu-toggle').addEventListener('click', toggleMenu);
```

---

## File Organization Rules

### Templates

**Naming Convention**: `kebab-case.html.twig`

**Component Levels**:
- Atoms: Single-purpose, no internal structure
- Molecules: 2-5 atoms combined
- Organisms: Complex structures with business logic

**Page Templates**: Root of `templates/` directory

### SCSS Files

**Naming Convention**: `_kebab-case.scss` (partials with underscore)

**Import Order** (critical):
1. Tokens
2. Core/Variables
3. Components
4. Utilities

### Asset Loading

**CSS**: Compiled to `css-compiled/theme.css`
**JS**: Modular files in `js/` directory
**Fonts**: Self-hosted in `fonts/`
**Images**: Theme assets in `images/`

---

## Forbidden Patterns

### ❌ Never Do This

1. **Hard-Coded Colors**
   ```scss
   // WRONG
   color: #3b4252;
   
   // CORRECT
   color: var(--color-primary);
   ```

2. **Fixed Breakpoints for Component Logic**
   ```scss
   // WRONG
   @media (min-width: 768px) { ... }
   
   // CORRECT
   @container (min-width: 768px) { ... }
   ```

3. **External Font CDNs**
   ```html
   <!-- WRONG -->
   <link href="https://fonts.googleapis.com/..." />
   
   <!-- CORRECT -->
   @font-face in local CSS
   ```

4. **Inline Styles (CSP Violation)**
   ```html
   <!-- WRONG -->
   <div style="color: red;">
   
   <!-- CORRECT -->
   <div class="text-danger">
   ```

5. **!important (Design Token Override)**
   ```scss
   // WRONG
   color: blue !important;
   
   // CORRECT
   Use CSS custom property cascade
   ```

---

## Performance Requirements

### Core Web Vitals Targets

- **LCP** (Largest Contentful Paint): ≤ 2.5s
- **INP** (Interaction to Next Paint): ≤ 200ms
- **CLS** (Cumulative Layout Shift): ≤ 0.1

### Optimization Strategies

1. **Content Visibility**
   ```scss
   .off-screen-hero {
     content-visibility: auto;
     contain-intrinsic-size: 0 600px;
   }
   ```

2. **Lazy Loading**
   - Images: `loading="lazy"` by default
   - Fonts: `font-display: swap`

3. **Resource Hints**
   ```html
   <link rel="preload" href="theme://fonts/Outfit.woff2" as="font">
   ```

---

## Browser Support Matrix

### Minimum Supported Versions

- **Chrome/Edge**: 120+ (Dec 2023)
- **Safari**: 17+ (Sep 2023)
- **Firefox**: 120+ (Nov 2023)

### Feature Detection

```scss
@supports (container-type: inline-size) {
  // Modern layout
}

@supports not (container-type: inline-size) {
  // Fallback layout
}
```

---

## Development Workflow

### Local Development

1. **Clone theme**
   ```bash
   cd user/themes/
   git clone [repo] my-quark
   ```

2. **Install dependencies**
   ```bash
   npm install
   ```

3. **Compile SCSS**
   ```bash
   npm run sass:watch
   ```

4. **Run Grav dev server**
   ```bash
   cd ../../..
   php -S localhost:8000 system/router.php
   ```

### Deployment

**Production Build**:
```bash
npm run sass:build
```

**Assets to Include**:
- `css-compiled/` (compiled CSS)
- `fonts/` (local fonts)
- `js/` (JavaScript modules)
- `templates/` (Twig files)
- `blueprints.yaml` (admin config)

**Assets to Exclude**:
- `scss/` (source files)
- `node_modules/`
- `.git/`

---

## Testing Requirements

### Visual Regression

**Tool**: BackstopJS
**Scenarios**: Hero, Cards

### Accessibility

**Tool**: axe DevTools
**Target**: WCAG 2.2 Level AA minimum (WCAG 3.0 APCA preferred)

### Performance

**Tool**: Lighthouse CI
**Target**: 95+ performance score

---

## Special Considerations for AI Agents

### When Generating Code

1. **Always use design tokens** - Never hard-code values
2. **Respect component hierarchy** - Atoms don't import molecules
3. **Check admin config** - User may have customized defaults
4. **Include ARIA labels** - Accessibility is non-negotiable
5. **Use semantic HTML** - `<main>`

### When Modifying Existing Code

1. **Preserve token references** - Don't replace with hard-coded values
2. **Maintain cascade order** - SCSS imports must stay ordered
3. **Test in admin panel** - Ensure configuration still works
4. **Check CSP compliance** - No inline scripts/styles

### When Debugging

1. **Check custom-styles.html.twig** - CSS custom properties are generated here
2. **Verify SCSS compilation** - Check `css-compiled/theme.css`
3. **Inspect blueprints** - Configuration might override defaults
4. **Review PHP logs** - Font download and CSP issues logged

---

## Key Files Reference

| File | Purpose | Edit Frequency |
|------|---------|----------------|
| `AGENTS.md` | This file - design system docs | Rarely |
| `blueprints.yaml` | Admin panel configuration | Moderate |
| `my-quark.yaml` | Default theme settings | Rarely |
| `my-quark.php` | PHP event hooks, security | Rarely |
| `scss/tokens/_design-tokens.scss` | Design token definitions | Moderate |
| `templates/partials/custom-styles.html.twig` | CSS custom properties | Often |
| `templates/components/**/*.html.twig` | UI components | Often |
| `scss/components/*.scss` | Component styles | Often |

---

## Version History

- **0.5.3** (Current) - 2026 standards implementation
- **0.5.0** - Atomic design refactor
- **0.4.0** - Token system introduction
- **0.1.0** - Initial fork from Quark

---

## Support & Resources

- **Grav Documentation**: https://learn.getgrav.org/17/
- **Parent Theme (Quark)**: https://github.com/getgrav/grav-theme-quark
- **APCA Calculator**: https://www.myndex.com/APCA/
- **Container Queries**: https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_container_queries

---

**Last AI Agent Review**: 2026-01-07  
**Compliance Score**: 92/100  
**Next Review**: Add automated testing, complete OKLCH migration
