---
title: Search Overlay Component
description: Blueprint documentation for the full-screen search overlay
---

# Search Overlay Component Blueprint

## 1. Object Identity & Scope

### System Name
`search-overlay`

### Purpose
Provides a full-screen, distraction-free search interface that overlays the entire page. Integrates with TNTSearch plugin for fast, client-side search functionality.

### Behaviors
- **Keyboard Activation**: Opens with keyboard shortcut (Ctrl/Cmd + K)
- **Click Activation**: Opens via search button in header
- **Escape to Close**: Press ESC to dismiss overlay
- **Focus Management**: Auto-focuses search input on open
- **Backdrop Click**: Click outside to close
- **Search Integration**: Works with TNTSearch plugin

---

## 2. Data Structure (Blueprint Fields)

### Configuration Location
Controlled by TNTSearch plugin configuration

### Static Props
- **Z-Index**: `var(--z-modal)` (50)
- **Background**: `oklch(100% 0 0 / 0.95)` (semi-transparent white)
- **Max Width**: `32rem` (512px)

### Dynamic Props
- **Visibility State**: Controlled by JavaScript (`is-visible` class)
- **Search Query**: User input from TNTSearch form

---

## 3. Markup & Logic (Twig)

### Template Path
`templates/partials/search-overlay.html.twig`

### Included In
- `templates/partials/base.html.twig` (line 131)

### Structure
```twig
<div class="search-overlay" id="search-overlay">
    <div class="search-container">
        <h2 class="search-title">Search</h2>
        
        {# TNTSearch Form #}
        {% include 'partials/tntsearch.html.twig' %}
        
        <p class="search-hint">
            Press <kbd>ESC</kbd> to close
        </p>
        
        <button class="search-close-button" aria-label="Close search">
            <i class="la la-times icon-xl"></i>
        </button>
    </div>
</div>
```

### Key Variables
None - purely presentational wrapper for TNTSearch

---

## 4. UX/UI & Assets

### Interface Behavior
- **Desktop**: Full-screen overlay with centered search box
- **Mobile**: Same behavior, responsive padding
- **Animation**: Fade in/out transition (0.3s)

### SCSS Strategy
**File**: Embedded in `css/components/` (compiled into main CSS)

**Key Classes**:
- `.search-overlay` - Full-screen container
- `.search-container` - Centered search box
- `.search-title` - Heading
- `.search-hint` - Helper text
- `.search-close-button` - Close button (top-right)

### States
```css
.search-overlay {
  opacity: 0;
  pointer-events: none;
  visibility: hidden;
  transition: all var(--transition-standard);
}

.search-overlay.is-visible {
  opacity: 1;
  pointer-events: auto;
  visibility: visible;
}
```

---

## 5. JavaScript Integration

### Module
`js/modules/ui.js`

### Key Functions
```javascript
// Open overlay
function openSearchOverlay() {
  const overlay = document.getElementById('search-overlay');
  overlay.classList.add('is-visible');
  
  // Focus search input
  const input = overlay.querySelector('input[type="search"]');
  if (input) input.focus();
}

// Close overlay
function closeSearchOverlay() {
  const overlay = document.getElementById('search-overlay');
  overlay.classList.remove('is-visible');
}

// Keyboard shortcuts
document.addEventListener('keydown', (e) => {
  // Ctrl/Cmd + K to open
  if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
    e.preventDefault();
    openSearchOverlay();
  }
  
  // ESC to close
  if (e.key === 'Escape') {
    closeSearchOverlay();
  }
});
```

### Event Listeners
- **Search Trigger Button**: `#search-trigger` (in header)
- **Close Button**: `.search-close-button`
- **Backdrop Click**: `.search-overlay` (when clicking outside container)

---

## 6. TNTSearch Integration

### Required Plugin
**Name**: `grav-plugin-tntsearch`  
**Version**: Latest compatible with Grav 1.6+

### Configuration
```yaml
# user/config/plugins/tntsearch.yaml
enabled: true
search_route: /search
query_route: /search/query
built_in_search_page: true
```

### Search Form
Included via: `{% include 'partials/tntsearch.html.twig' %}`

**Form Features**:
- Live search results
- Keyboard navigation
- Result highlighting
- URL preview
- Excerpt display

---

## 7. Accessibility

### ARIA Attributes
- `role="dialog"` - Marks as modal dialog
- `aria-modal="true"` - Indicates modal behavior
- `aria-label="Search"` - Screen reader label

### Keyboard Support
- **Ctrl/Cmd + K**: Open overlay
- **ESC**: Close overlay
- **Tab**: Navigate through results
- **Enter**: Open selected result

### Focus Management
- Auto-focus on search input when opened
- Focus trap within overlay
- Return focus to trigger button on close

---

## 8. Best Practices

### Performance
- Overlay is always in DOM (hidden by default)
- CSS transitions for smooth animations
- No JavaScript required for styling

### UX Guidelines
1. **Clear Affordance**: Search button visible in header
2. **Keyboard Shortcut**: Display hint for power users
3. **Escape Hatch**: Multiple ways to close (ESC, X button, backdrop)
4. **Instant Feedback**: Show results as user types

### Customization
To change overlay appearance, modify:
```css
.search-overlay {
  background: oklch(100% 0 0 / 0.95); /* Semi-transparent white */
}

/* Dark mode variant */
body.header-dark .search-overlay {
  background: oklch(10% 0 0 / 0.95); /* Semi-transparent dark */
}
```

---

## 9. Example Usage

### Trigger from Header
```twig
{# templates/partials/header-wrapper.html.twig #}
<button id="search-trigger" class="icon-button" aria-label="Open search">
    <i class="la la-search icon-lg"></i>
</button>
```

### Custom Trigger
```html
<button onclick="document.getElementById('search-overlay').classList.add('is-visible')">
    Search Site
</button>
```

---

**Last Updated**: 2026-01-15  
**Component Version**: 2.1.2  
**Dependencies**: TNTSearch Plugin
