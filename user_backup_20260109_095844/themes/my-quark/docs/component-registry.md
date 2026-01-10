# Component Registry

**Version:** 1.0.0  
**Last Updated:** 2026-01-07

This document serves as the complete reference for all custom objects in the `my-quark` Grav theme. It catalogs design tokens, components, JavaScript modules, builders, and SCSS utilities.

---

## 1. Design Tokens

Design tokens are the atomic design decisions that power the theme. They are defined in two locations:

- **Source of Truth (SCSS):** [`scss/tokens/_design-tokens.scss`](file:///Users/syedaalin/Documents/Grav/user/themes/my-quark/scss/tokens/_design-tokens.scss)
- **Runtime (CSS Custom Properties):** [`templates/partials/custom-styles.html.twig`](file:///Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/custom-styles.html.twig)

### 1.1 Brand Colors

| Token | Default Value | Description | Admin Control |
|-------|---------------|-------------|---------------|
| `--brand-primary` | `#3b4252` | Main brand identity color | `token_color_primary` |
| `--brand-secondary` | `#88c0d0` | Secondary/interactive elements | `token_color_secondary` |
| `--brand-accent` | `#bf616a` | Highlights and alerts | `token_color_accent` |
| `--bg-body` | `#eceff4` | Page background | `token_color_bg_body` |
| `--bg-card` | `#ffffff` | Card/surface background | `token_color_bg_card` |
| `--text-main` | `#2e3440` | High contrast text | `token_color_text_main` |
| `--text-muted` | `#4c566a` | Low contrast text | `token_color_text_muted` |

**Notes:**
- Uses OKLCH color space for perceptual uniformity
- Supports relative color syntax for derived shades
- Automatic dark mode via `prefers-color-scheme`

### 1.2 Typography

| Token | Default Value | Description | Admin Control |
|-------|---------------|-------------|---------------|
| `--font-base` | `clamp(16px, ...)` | Base font size (fluid) | `token_typo_min_size`, `token_typo_max_size` |
| `--scale-ratio` | `1.25` | Type scale multiplier | `token_typo_scale` |
| `--line-height-body` | `1.6` | Body text line height | `token_typo_lh_body` |
| `--line-height-heading` | `1.2` | Heading line height | `token_typo_lh_heading` |
| `--tracking-heading` | `-0.02em` | Heading letter spacing | `token_typo_ls_heading` |
| `--measure` | `65ch` | Optimal line length | `token_typo_measure` |

**Font Families:**
- Body: Configurable via `token_font_body` (default: Outfit)
- Headings: Configurable via `token_font_header` (default: Outfit)
- All fonts are self-hosted (GDPR compliant)

**Modular Scale:**
```
H6: var(--font-base)
H5: calc(var(--font-base) * var(--scale-ratio))
H4: calc(var(--font-base) * var(--scale-ratio)²)
H3: calc(var(--font-base) * var(--scale-ratio)³)
H2: calc(var(--font-base) * var(--scale-ratio)⁴)
H1: calc(var(--font-base) * var(--scale-ratio)⁵)
```

### 1.3 Spacing

| Token | Value | Size (16px base) |
|-------|-------|------------------|
| `$space-3xs` | `0.25rem` | 4px |
| `$space-2xs` | `0.5rem` | 8px |
| `$space-xs` | `0.75rem` | 12px |
| `$space-sm` | `1rem` | 16px |
| `$space-md` | `1.5rem` | 24px |
| `$space-lg` | `2rem` | 32px |
| `$space-xl` | `3rem` | 48px |
| `$space-2xl` | `4rem` | 64px |
| `$space-3xl` | `6rem` | 96px |

**Global Multiplier:** `token_layout_spacing` (Admin Panel)

### 1.4 Physics & Effects

| Token | Default | Description | Admin Control |
|-------|---------|-------------|---------------|
| `--radius-main` | `12px` | Border radius | `physic_radius_main` |
| `--glass-opacity` | `0.85` | Glass transparency | `physic_glass_opacity` |
| `--glass-blur` | `blur(20px)` | Backdrop blur | `physic_glass_blur` |
| `--neo-shadow` | dynamic | Soft 3D shadows | `physic_neo_strength`, `physic_neo_lightSource` |

**Neomorphism Light Sources:**
- `top-left` - Northeast lighting
- `top-right` - Northwest lighting  
- `top` - Overhead/zenith lighting

### 1.5 Layout

| Token | Default | Description |
|-------|---------|-------------|
| `--site-width` | `1200px` | Maximum content width |
| `--logo-h-desktop` | `48px` | Logo height (desktop) |
| `--logo-h-mobile` | `32px` | Logo height (mobile) |

---

## 2. Twig Components

### 2.1 Builder Partials

Located in [`templates/partials/`](file:///Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/)



#### Hero Builder
**File:** `hero-builder.html.twig`  
**Purpose:** Dynamic hero sections with media support  
**Features:**
- Background image or video
- Overlay with opacity control
- LCP optimization (preload)
- Button actions array
- Text balance/pretty wrapping

**Page Header Variables:**
- `hero_enabled` - Enable/disable hero
- `hero_style` - Style variant
- `hero_title` - Main heading
- `hero_subtitle` - Subheading
- `hero_image` - Background image
- `hero_video` - Background video
- `hero_overlay_opacity` - Overlay darkness
- `hero_buttons` - CTA buttons array

### 2.2 Utility Partials

#### Logo Component
**File:** `logo.html.twig`  
**Purpose:** Renders logo with fallback to brand text  
**Features:** Responsive sizing, CLS prevention

#### Email Obfuscate
**File:** `email-obfuscate.html.twig`  
**Purpose:** Renders obfuscated email to prevent spam bots  
**Requires:** `email-deobfuscate.js`

#### Structured Data
**File:** `structured-data.html.twig`  
**Purpose:** JSON-LD schema markup for SEO  
**Schemas:** Organization, WebSite, SiteNavigationElement

---

## 3. JavaScript Modules

### 3.1 Core Modules

#### Theme Core
**File:** [`js/theme-core.js`](file:///Users/syedaalin/Documents/Grav/user/themes/my-quark/js/theme-core.js)  
**Purpose:** Orchestrates all theme functionality

**Modules:**
1. **Haptics** - Vibration feedback on interactions
2. **Spatial** - Device orientation for parallax (Magic Window)
3. **Predictive** - Speculation Rules API for instant navigation
4. **Agentic** - AI agent action discovery

**API:**
```javascript
ThemeCore.init() // Initialize all modules
```

**Features:**
- Speculation Rules API (prerender/prefetch)
- Fallback to basic prefetch for older browsers
- Haptic feedback on buttons/links
- Device orientation parallax
- Error handling and graceful degradation



#### Email Deobfuscate
**File:** `email-deobfuscate.js`  
**Purpose:** Client-side email deobfuscation

#### Builder Features
**File:** `builder-features.js`  
**Purpose:** Interactive features for admin builders

### 3.2 Module Structure (Planned)

```
js/modules/
├── core/
│   ├── haptics.js       - Vibration feedback
│   ├── spatial.js       - Device orientation
│   ├── predictive.js    - Speculation API
│   └── agentic.js       - AI agent actions
├── ui/
│   └── email-obfuscate.js - Email protection
└── builders/
    └── features.js      - Builder enhancements
```

---

## 4. SCSS Architecture

### 4.1 File Structure

```
scss/
├── tokens/
│   └── _design-tokens.scss    - Centralized token registry
├── core/
│   ├── _variables.scss         - Compile-time variables
│   └── _grid.scss              - Grid system
├── components/
│   ├── _hero.scss              - Hero sections
│   └── _modern-css.scss        - 2026 CSS features
├── utils/
│   └── (utility mixins)
└── theme.scss                  - Main entry point
```

### 4.2 Modern CSS Features

**File:** [`scss/components/_modern-css.scss`](file:///Users/syedaalin/Documents/Grav/user/themes/my-quark/scss/components/_modern-css.scss)

**Features Implemented:**
1. **CSS Subgrid** - Mega menu alignment
2. **Container Queries** - Intrinsic component design
3. **Anchor Positioning** - Dropdown positioning (replaces Popper.js)
4. **Scroll-driven Animations** - Header shrink on scroll
5. **Content Visibility** - Performance optimization

**Container Query Units:**
- `cqi` - Container query inline size (width)
- `cqb` - Container query block size (height)

---

## 5. Builders (React-based)



---

## 6. Admin Configuration Mapping

### 6.1 Blueprint Structure

**File:** [`blueprints.yaml`](file:///Users/syedaalin/Documents/Grav/user/themes/my-quark/blueprints.yaml)

**Tab Organization:**
1. **BRAND & DESIGN** - Core design tokens
   - Colors (Brand, UI surfaces)
   - Typography (Fonts, scaling, fluidity)
   - Layout & Width
2. **EFFECTS & UX** - Physics and experience
   - Shapes & Shadows (Radius, neomorphism)
   - Atmospheric (Glass effects, vignette)
   - Adaptive UX (Eco mode, focus mode)
3. **BUILDERS & COMPONENTS** - Intelligent components
   - Background Builder
4. **BRAND IDENTITY** - Global identity
   - Logo, brand name
   - Contact information
   - Social media links
5. **SITE GOVERNANCE** - Performance & protocols

### 6.2 Key Configuration Paths

Use `theme_var()` in Twig templates:
```twig
{{ theme_var('token_color_primary') }}
{{ theme_var('physic_radius_main') }}
```

---

## 7. Usage Examples

### 7.1 Using Design Tokens in Custom CSS

```css
.my-custom-element {
  background: var(--brand-primary);
  color: var(--text-main);
  border-radius: var(--radius-main);
  padding: var(--space-md);
  box-shadow: var(--neo-shadow);
}
```

### 7.2 Using SCSS Tokens

```scss
@import 'tokens/design-tokens';

.my-component {
  padding: $space-lg;
  border-radius: $radius-modern;
  @media (min-width: breakpoint('lg')) {
    padding: $space-xl;
  }
}
```

### 7.3 Creating a Custom Page with Hero

```yaml
---
hero_enabled: true
hero_style: standard
hero_title: "Welcome to Our Site"
hero_subtitle: "Building the future of web design"
hero_image: hero-bg.jpg
hero_overlay_opacity: 0.4
hero_buttons:
  - text: "Get Started"
    url: "/start"
    class: "btn-primary"
  - text: "Learn More"
    url: "/about"
    class: "btn-secondary"
---

# Page Content

Your page content here...
```

---

## 8. 2026 Standards Compliance

### 8.1 Accessibility (WCAG 3.0)
- ✅ APCA contrast algorithm
- ✅ Focus-visible outlines (3px, offset 2px)

- ✅ Minimum 44x44px touch targets
- ✅ Semantic HTML5 markup
- ✅ ARIA labels and roles

### 8.2 Performance (Core Web Vitals)
- ✅ LCP optimization (preload critical images)
- ✅ Content visibility for off-screen content
- ✅ Speculation Rules API for instant navigation
- ✅ Will-change management
- ✅ Reduced motion support

### 8.3 Privacy & Sustainability
- ✅ Self-hosted fonts (GDPR compliant)
- ✅ Eco mode (disables animations/heavy assets)
- ✅ Focus mode (cognitive accessibility)
- ✅ No external font CDNs

### 8.4 Modern CSS
- ✅ OKLCH color space
- ✅ Container Queries
- ✅ CSS Subgrid
- ✅ Anchor Positioning
- ✅ Scroll-driven animations
- ✅ Relative color syntax

---

## 9. Extending the Theme

### 9.1 Adding Custom Design Tokens

1. Add token to `scss/tokens/_design-tokens.scss`
2. Expose in `custom-styles.html.twig` as CSS custom property
3. Add admin control in `blueprints.yaml`
4. Document in this registry

### 9.2 Creating New Components

1. Create Twig file in `templates/components/`
2. Add corresponding SCSS in `scss/components/`
3. Include in main theme SCSS
4. Document usage in this file

### 9.3 Adding JavaScript Modules

1. Create module in `js/modules/[category]/`
2. Import in `theme-core.js`
3. Register initialization in `ThemeCore.init()`
4. Document API in this registry

---

## 10. Troubleshooting

### Common Issues

**Tokens not updating in admin:**
- Clear Grav cache: `bin/grav cache`
- Check `custom-styles.html.twig` syntax
- Verify blueprint field names match `theme_var()` calls

**SCSS compilation errors:**
- Run `npm run build` in theme directory
- Check for syntax errors in SCSS files
- Verify all `@import` paths are correct

**JavaScript modules not loading:**
- Check browser console for errors
- Verify module export/import syntax
- Ensure `theme-core.js` is included in base template

**CSS features not working:**
- Check browser support (use caniuse.com)
- Verify `@supports` fallbacks are in place
- Test in modern Chrome/Safari/Firefox

---

## Changelog

### 1.0.0 (2026-01-07)
- Initial centralized component registry
- Consolidated design token system
- Documented all builders and components
- Added 2026 standards compliance checklist
