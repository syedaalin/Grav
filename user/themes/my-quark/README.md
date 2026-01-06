# My-Quark Child Theme (Enhanced)

This theme is a robust child theme of **Quark**, customized with modern 2026 web standards.

## Features

### 1. Modern CSS Architecture (`css/custom.css`)
We have pre-configured a modern CSS foundation using:
- **CSS Variables**: Easily change colors and spacing in `:root`.
- **Fluid Typography**: Headings automatically scale with viewport size.
- **Dark Mode Support**: `prefers-color-scheme` block ready for your overrides.
- **Accessibility**: Enhanced focus states and logical properties.

### 2. Custom Logo Support
You can upload your logo directly via the Admin Panel:
- Go to **Themes** -> **My Quark**.
- Use the **Custom Logo** field.

### 3. Safe Customization
- **CSS**: Edit `css/custom.css` for all styling. It will never be overwritten by updates.
- **Templates**: To override HTML, copy `quark/templates/foo.html.twig` to `my-quark/templates/foo.html.twig`.

## How to Customize Colors
Open `css/custom.css` and change these values:
```css
:root {
    --brand-primary: #3b4252; /* Change this! */
    --brand-secondary: #88c0d0;
}
```
