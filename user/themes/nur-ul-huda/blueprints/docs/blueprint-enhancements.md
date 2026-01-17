# Blueprint Visual Enhancement Examples

This document provides examples for enhancing the nur-ul-huda theme blueprints with visual previews and conditional field visibility.

> **Note**: These enhancements require Grav Admin Plugin 1.10+ and may need custom JavaScript for full functionality.

---

## Visual Color Picker Previews

### Current Implementation

```yaml
primary_color:
  type: colorpicker
  label: Primary Brand Color
  default: '#2ecc71'
```

### Enhanced with Visual Preview

```yaml
primary_color:
  type: colorpicker
  label: Primary Brand Color
  default: '#2ecc71'
  description: 'Used for buttons, links, and accents'
  help: 'Preview: <span style="display:inline-block;width:24px;height:24px;background:var(--admin-accent, #2ecc71);border-radius:4px;vertical-align:middle;margin-left:8px;border:1px solid #ddd;"></span>'
  data-preview@: this.config.theme.primary_color
```

**Alternative using markdown-notice:**

```yaml
color_preview_section:
  type: section
  title: Color Palette Preview
  text: |
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:1rem;margin:1rem 0;">
      <div style="text-align:center;">
        <div style="width:100%;height:80px;background:#2ecc71;border-radius:8px;margin-bottom:0.5rem;"></div>
        <small>Primary</small>
      </div>
      <div style="text-align:center;">
        <div style="width:100%;height:80px;background:#e74c3c;border-radius:8px;margin-bottom:0.5rem;"></div>
        <small>Error</small>
      </div>
      <div style="text-align:center;">
        <div style="width:100%;height:80px;background:#f39c12;border-radius:8px;margin-bottom:0.5rem;"></div>
        <small>Warning</small>
      </div>
    </div>
  markdown: true
```

---

## Font Specimen Displays

### Enhanced Font Selection

```yaml
fonts_section:
  type: section  
  title: Typography
  underline: true

heading_font:
  type: select
  label: Heading Font
  default: 'Inter'
  options:
    'Inter': 'Inter (Recommended)'
    'Roboto': 'Roboto'
    'Outfit': 'Outfit'
    'Montserrat': 'Montserrat'
  description: |
    <div style="font-family:var(--selected-heading-font, 'Inter');font-size:24px;font-weight:700;margin:1rem 0;">
      The quick brown fox jumps over the lazy dog
    </div>
    <div style="font-family:var(--selected-heading-font, 'Inter');font-size:16px;margin-bottom:1rem;">
      ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
      abcdefghijklmnopqrstuvwxyz<br>
      0123456789
    </div>
  markdown: true

body_font:
  type: select
  label: Body Font
  default: 'system-ui'
  options:
    'system-ui': 'System UI (Native)'
    'Inter': 'Inter'
    'Open Sans': 'Open Sans'  
    'Lato': 'Lato'
  description: '<em style="font-family:var(--selected-body-font, system-ui);font-size:15px;">Typography preview: The quick brown fox jumps over the lazy dog. 0123456789</em>'
  markdown: true
```

---

## Conditional Field Visibility

### Example 1: Moodle Integration

**Hide Moodle token field when URL is empty:**

```yaml
moodle_section:
  type: section
  title: Moodle LMS Integration
  underline: true

moodle_url:
  type: text
  label: Moodle URL
  placeholder: 'https://moodle.example.com'
  validate:
    type: url

moodle_token:
  type: text
  label: Moodle Web Service Token
  placeholder: 'Enter your Moodle token'
  description: 'Required for Moodle integration'
  # Conditional visibility (Grav 1.7+)
  depends@:
    moodle_url: { pattern: '.+' }
```

### Example 2: Prayer Times Toggle

**Show location fields only when Prayer Times is enabled:**

```yaml
show_prayer_times:
  type: toggle
  label: Show Prayer Times Widget
  highlight: 1
  default: 1
  options:
    1: PLUGIN_ADMIN.ENABLED
    0: PLUGIN_ADMIN.DISABLED

prayer_location:
  type: text
  label: Default Location
  placeholder: 'e.g., Karachi, Pakistan'
  depends:
    show_prayer_times: 1

prayer_calculation_method:
  type: select
  label: Calculation Method
  default: 'ISNA'
  options:
    'MWL': 'Muslim World League'
    'ISNA': 'Islamic Society of North America'
    'Egypt': 'Egyptian General Authority'
    'Makkah': 'Umm Al-Qura University, Makkah'
    'Karachi': 'University of Islamic Sciences, Karachi'
  depends:
    show_prayer_times: 1
```

### Example 3: Advanced Layout Options

**Show grid columns only for grid layout:**

```yaml
blog_layout:
  type: select
  label: Blog Layout
  default: 'grid'
  options:
    list: 'List View'
    grid: 'Grid View'
    masonry: 'Masonry Grid'

blog_grid_columns:
  type: select
  label: Grid Columns
  default: '3'
  options:
    '2': '2 Columns'
    '3': '3 Columns'
    '4': '4 Columns'
  depends:
    blog_layout:
      - grid
      - masonry
```

---

## Image Upload with Preview

```yaml
logo:
  type: file
  label: Site Logo
  destination: 'theme://images/logo'
  multiple: false
  accept:
    - 'image/*'
  description: |
    <div style="margin-top:1rem;">
      <strong>Preview:</strong><br>
      <img src="{{ config.theme.logo }}" alt="Logo preview" style="max-width:200px;margin-top:0.5rem;border:1px solid #ddd;padding:0.5rem;border-radius:4px;" onerror="this.style.display='none'">
    </div>
  markdown: true
  help: 'Upload a square logo (512x512px recommended)'
```

---

## Live Theme Preview

**Add a visual preview section:**

```yaml
theme_preview_section:
  type: section
  title: Theme Preview
  text: |
    <div class="theme-preview-container" style="border:1px solid #ddd;border-radius:8px;overflow:hidden;margin:1rem 0;">
      <div class="preview-header" style="background:var(--primary-color, #2ecc71);color:white;padding:1rem;display:flex;align-items:center;justify-content:space-between;">
        <div style="font-weight:700;">Site Title</div>
        <div style="display:flex;gap:1rem;">
          <a href="#" style="color:white;">Home</a>
          <a href="#" style="color:white;">About</a>
          <a href="#" style="color:white;">Contact</a>
        </div>
      </div>
      <div class="preview-content" style="padding:2rem;background:#f8f9fa;">
        <div style="background:white;padding:1.5rem;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
          <h3 style="margin:0 0 1rem 0;">Card Component</h3>
          <p style="color:#666;margin:0 0 1rem 0;">This is how your cards will look with the current theme settings.</p>
          <button style="background:var(--primary-color, #2ecc71);color:white;border:none;padding:0.5rem 1.5rem;border-radius:6px;cursor:pointer;">Learn More</button>
        </div>
      </div>
    </div>
  markdown: true
```

---

## Recommended Implementation

Add this to the end of `/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints.yaml`:

```yaml
# Enhanced Visual Previews (optional)
advanced_section:
  type: section
  title: Preview & Advanced Settings
  underline: true
  
blueprint_help:
  type: display
  size: large
  label: false
  markdown: true
  content: |
    ### 📚 Component Documentation
    
    View the [Component Showcase](theme://blueprints/docs/component-showcase.md) for detailed examples of all 26 CSS components.
    
    ### 🎨 Color Palette
    
    <div style="display:flex;gap:0.5rem;margin:1rem 0;">
      <div style="width:60px;height:60px;background:#2ecc71;border-radius:8px;" title="Primary"></div>
      <div style="width:60px;height:60px;background:#3498db;border-radius:8px;" title="Info"></div>
      <div style="width:60px;height:60px;background:#e74c3c;border-radius:8px;" title="Error"></div>
      <div style="width:60px;height:60px;background:#f39c12;border-radius:8px;" title="Warning"></div>
      <div style="width:60px;height:60px;background:#27ae60;border-radius:8px;" title="Success"></div>
    </div>
    
    ### 🔧 Development Mode
    
    - **Production Mode ON**: Minified assets, security headers enabled
    - **Production Mode OFF**: Source maps, debug mode, unminified files
```

---

## Notes on Grav Admin Compatibility

1. **depends** directive works in Grav 1.7+
2. **markdown** content allows HTML in descriptions
3. **data-preview@** is Grav 1.10+ feature
4. Custom JavaScript may be needed for dynamic live previews

For full implementation, consider creating a custom admin plugin that extends the theme blueprints with client-side reactivity.

---

*Reference: [Grav Blueprint Documentation](https://learn.getgrav.org/17/forms/blueprints)*
