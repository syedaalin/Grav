# Component Showcase

> **Purpose**: Visual documentation for all 26 CSS components in the nur-ul-huda theme  
> **Audience**: Developers, designers, and contributors  
> **Last Updated**: 2026-01-16

---

## Navigation Components

### Nav Link

**Purpose**: Primary navigation links with underline hover effect

**HTML Example**:
```html
<a href="/about" class="nav-link">About Us</a>
<a href="/current" class="nav-link active">Current Page</a>
```

**CSS File**: [navigation.css](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/css/components/navigation.css)

**Features**:
- Animated underline on hover
- Active state using `.active` class
- Uses `@scope` for isolation
- RTL-compatible (logical properties)

**Accessibility**: 
- ✅ Keyboard navigable
- ✅ Focus visible states
- ✅ ARIA current="page" supported

---

### Desktop Submenu

**Purpose**: Dropdown navigation menus

**HTML Example**:
```html
<div class="desktop-nav">
  <div class="nav-item">
    <a href="#">Services</a>
    <ul class="desktop-submenu">
      <li><a href="/service-1">Service 1</a></li>
      <li><a href="/service-2">Service 2</a></li>
    </ul>
  </div>
</div>
```

**Features**:
- Hover-triggered dropdown
- Smooth opacity/transform transitions
- Accessible focus management

---

## Card Components

### Solid Card

**Purpose**: Standard content cards with hover effects

**HTML Example**:
```html
<div class="card-solid" style="padding: var(--space-2xl);">
  <h3>Card Title</h3>
  <p>Card content goes here...</p>
</div>
```

**CSS File**: [cards.css](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/css/components/cards.css)

**Features**:
- Glassmorphism hover effect
- Dark mode synchronization
- Elevation on hover (`translateY(-2px)`)

---

### Child Card

**Purpose**: Blog post cards with image, title, and metadata

**HTML Example**:
```html
<a href="/post" class="child-card">
  <div class="child-card-bg">
    <img src="image.jpg" alt="Post image">
  </div>
  <div class="child-card-content">
    <h3 class="child-card-title">Post Title</h3>
    <div class="child-card-label">Read More →</div>
  </div>
</a>
```

**Features**:
- Container queries with `cqi` units
- 16:9 aspect ratio images
- Image scale on hover
- Responsive typography

**Container Query**:
```css
@scope (.child-card) {
  .child-card-title {
    font-size: clamp(1.25rem, 8cqi, 1.75rem);
  }
}
```

---

## Form Components

### Form Checkbox

**Purpose**: Custom styled checkboxes with animations

**HTML Example**:
```html
<div class="form-checkbox">
  <label class="checkbox-label">
    <div class="checkbox-indicator">
      <input type="checkbox" hidden>
      <span class="checkbox-mark">✓</span>
    </div>
    <span class="checkbox-text">I agree to terms</span>
  </label>
</div>
```

**CSS File**: [forms.css](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/css/components/forms.css)

**Features**:
- `:has()` selector for state management
- Bounce animation on check
- Focus ring with `focus-visible`
- Accessible hidden input

---

### Form Switch

**Purpose**: Toggle switches for binary options

**HTML Example**:
```html
<div class="form-switch-group">
  <input type="checkbox" class="switch-input" id="dark-mode" hidden>
  <label class="switch-track" for="dark-mode">
    <div class="switch-thumb"></div>
  </label>
  <span class="switch-label-text">Dark Mode</span>
</div>
```

**Features**:
- RTL-aware slide animation
- Bounce easing (`cubic-bezier`)
- Color transition on toggle

---

### TNTSearch Form

**Purpose**: Search input with autocomplete

**Uses Container Queries**: Yes (`@container (width >= 640px)`)

**HTML Example**:
```html
<div class="tntsearch-form">
  <div class="tntsearch-icon-wrapper">
    <svg>...</svg>
  </div>
  <input type="search" class="tntsearch-input" placeholder="Search...">
  <div class="tntsearch-results">
    <!-- Results populated by JS -->
  </div>
</div>
```

---

## Button Components

**CSS File**: [buttons.css](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/css/components/buttons.css)

### Primary Button

```html
<button class="btn btn-primary">Submit</button>
```

### Ghost Button

```html
<button class="btn btn-ghost">Cancel</button>
```

**Features**:
- Consistent padding/sizing
- Hover state transformations
- Loading state support

---

## Sidebar Components

**CSS File**: [sidebar.css](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/css/components/sidebar.css)

### Sidebar Wrapper

**Uses Container Queries**: Yes (`container-type: inline-size`)

**HTML Example**:
```html
<aside class="sidebar-wrapper">
  <div class="sidebar-widget">
    <h3 class="sidebar-heading">
      <span class="sidebar-heading-dot"></span>
      Recent Posts
    </h3>
    <ul class="widget-list">
      <!-- Posts -->
    </ul>
  </div>
</aside>
```

**Features**:
- Container query-based responsiveness
- Sticky last widget
- Animated transitions

---

## Alert Components

### Form Alert

**Purpose**: Success/error/warning messages

**HTML Example**:
```html
<div class="form-alert alert-success">
  <p>✓ Your form has been submitted successfully!</p>
</div>

<div class="form-alert alert-error">
  <p>✗ Please correct the errors below.</p>
</div>
```

**Variants**:
- `.alert-success` - Green background
- `.alert-error` - Red background
- `.alert-warning` - Orange background
- `.alert-default` - Neutral

**Features**:
- Fade-in-up entrance animation
- Hover elevation
- Semantic color coding

---

## Hero Component

**CSS File**: [hero.css](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/css/components/hero.css)

### Hero Section

**HTML via Twig Template**

**Modifiers**:
- `.hero-fullscreen` - 100svh height
- `.hero-large` - 80svh
- `.parallax` - CSS parallax scrolling
- `.overlay-dark-gradient` - Darkening gradient
- `.text-light` - Light text on dark bg

**Features**:
- Modern viewport units (`svh`)
- Parallax effect via CSS transforms
- Responsive typography with clamp()

---

## Blog Components

**CSS File**: [blog.css](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/css/components/blog.css)

### Blog Listing

**Uses Container Queries**: Yes

```html
<div class="blog-listing">
  <div class="blog-grid">
    <!-- Blog cards -->
  </div>
</div>
```

**Grid Behavior**:
- Auto-fill with `minmax(300px, 1fr)`
- Container query at 1024px: 3-column grid
- Responsive gaps

---

## Accessibility Features Across Components

### Keyboard Navigation
- All interactive elements are focusable
- Focus indicators visible
- Tab order maintained

### Screen Readers
- ARIA labels on icon buttons
- `aria-current` for active states
- Hidden text for context

### Color Contrast
- WCAG 2.1 AA compliant
- High contrast mode support
- No color-only indicators

---

## Component Development Guidelines

### Adding New Components

1. **Create CSS file** in `css/components/your-component.css`
2. **Import in** `css/modern-vanilla.css`
3. **Use @scope** to isolate styles:
   ```css
   @layer components {
     @scope (.my-component) {
       :scope {
         /* wrapper styles */
       }
       .child { /* scoped child */ }
     }
   }
   ```
4. **Use design tokens** from `tokens.css`
5. **Add to this showcase** with examples

### Container Queries

Use container queries for component-level responsiveness:

```css
@scope (.my-component) {
  :scope {
    container-type: inline-size;
  }
  
  @container (width >= 640px) {
    .child {
      font-size: 1.25rem;
    }
  }
}
```

### RTL Support

Always use logical properties:

```css
/* ❌ Bad */
margin-left: 1rem;
padding-right: 2rem;

/* ✅ Good */
margin-inline-start: 1rem;
padding-inline-end: 2rem;
```

---

## Testing Components

### Browser Support

Test in:
- Chrome 118+ (container queries, @scope)
- Firefox 128+ (container queries, @scope)
- Safari 17.4+ (@scope partial support)
- Edge 118+

### Responsive Testing

- Mobile (320px - 640px)
- Tablet (640px - 1024px)
- Desktop (1024px+)
- Large screens (1440px+)

### Accessibility Testing

- Keyboard-only navigation
- Screen reader (NVDA/JAWS/VoiceOver)
- High contrast mode
- Font scaling (up to 200%)

---

## Component Inventory

| Component      | File               | Container Query | @scope | RTL |
| -------------- | ------------------ | --------------- | ------ | --- |
| Navigation     | navigation.css     | ❌               | ✅      | ✅   |
| Cards          | cards.css          | ✅               | ✅      | ✅   |
| Forms          | forms.css          | ✅               | ✅      | ✅   |
| Buttons        | buttons.css        | ❌               | ✅      | ✅   |
| Sidebar        | sidebar.css        | ✅               | ✅      | ✅   |
| Blog           | blog.css           | ✅               | ✅      | ✅   |
| Hero           | hero.css           | ❌               | ✅      | ✅   |
| Header         | header.css         | ❌               | ✅      | ✅   |
| Mobile Menu    | mobile-menu.css    | ❌               | ✅      | ✅   |
| Alerts         | forms.css          | ❌               | ✅      | ✅   |
| Pagination     | pagination.css     | ❌               | ✅      | ✅   |
| Breadcrumbs    | breadcrumbs.css    | ❌               | ✅      | ✅   |
| Social Icons   | social-icons.css   | ❌               | ✅      | ✅   |
| Gallery        | gallery.css        | ❌               | ✅      | ✅   |
| Features       | features.css       | ❌               | ✅      | ✅   |
| Services       | services.css       | ❌               | ✅      | ✅   |
| Calculator     | calculator.css     | ❌               | ✅      | ✅   |
| Media          | media.css          | ❌               | ✅      | ✅   |
| Search Overlay | search-overlay.css | ❌               | ✅      | ✅   |
| Top Banner     | top-banner.css     | ❌               | ✅      | ✅   |
| Bottom Banner  | bottom-banner.css  | ❌               | ✅      | ✅   |
| Badges         | badges.css         | ❌               | ✅      | ✅   |
| Modals         | modals.css         | ❌               | ✅      | ✅   |
| States         | states.css         | ❌               | ✅      | ✅   |
| Error          | error.css          | ❌               | ✅      | ✅   |
| Logo           | logo.css           | ❌               | ✅      | ✅   |

**Summary**: 26 components, 100% use `@scope`, 100% RTL-ready, 15% use container queries

---

*For implementation details, refer to individual CSS files linked throughout this document.*
