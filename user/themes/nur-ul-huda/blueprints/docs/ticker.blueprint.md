---
title: Ticker Component
description: Blueprint documentation for the announcement ticker component
---

# Ticker Component Blueprint

## 1. Object Identity & Scope

### System Name
`ticker-component`

### Purpose
Displays a scrolling marquee announcement banner at the top of the site. Replaces the traditional static top banner with a dynamic, attention-grabbing ticker.

### Behaviors
- **Horizontal Scrolling**: Seamless infinite loop animation
- **Pause on Hover**: Optional pause when user hovers (configurable)
- **Scheduling**: Show/hide based on start and expiration dates
- **Link Support**: Optional clickable link to announcement details
- **RTL Support**: Automatically adjusts scroll direction for RTL languages
- **Customizable Speed**: Adjustable animation duration

---

## 2. Data Structure (Blueprint Fields)

### Configuration Location
`user/config/themes/nur-ul-huda.yaml` → `ticker_*` fields

### Blueprint Fields

#### `ticker_enabled`
- **Type**: `toggle`
- **Label**: Enable Ticker
- **Default**: `false`
- **Description**: Show/hide the announcement ticker

#### `ticker_text`
- **Type**: `text`
- **Label**: Ticker Text
- **Required**: Yes (when enabled)
- **Description**: The announcement message to display
- **Example**: "🎉 New Course: Advanced Fiqh - Enroll Now!"

#### `ticker_speed`
- **Type**: `range`
- **Label**: Animation Speed (seconds)
- **Default**: `20`
- **Min**: `5`
- **Max**: `60`
- **Step**: `5`
- **Description**: Duration for one complete scroll cycle

#### `ticker_link`
- **Type**: `text`
- **Label**: Link URL
- **Placeholder**: `/courses/advanced-fiqh`
- **Description**: Optional link when ticker is clicked

#### `ticker_new_tab`
- **Type**: `toggle`
- **Label**: Open in New Tab
- **Default**: `true`
- **Description**: Open link in new window/tab

#### `ticker_bg`
- **Type**: `colorpicker`
- **Label**: Background Color
- **Default**: `oklch(0.55 0.25 25)` (warm orange)
- **Description**: Ticker background color (OKLCH format)

#### `ticker_color`
- **Type**: `colorpicker`
- **Label**: Text Color
- **Default**: `oklch(0.98 0 0)` (near white)
- **Description**: Ticker text color (OKLCH format)

#### `ticker_pause`
- **Type**: `toggle`
- **Label**: Pause on Hover
- **Default**: `true`
- **Description**: Pause animation when user hovers

#### `ticker_starts`
- **Type**: `datetime`
- **Label**: Start Date/Time
- **Description**: When to start showing the ticker (optional)

#### `ticker_expires`
- **Type**: `datetime`
- **Label**: Expiration Date/Time
- **Description**: When to stop showing the ticker (optional)

---

## 3. Markup & Logic (Twig)

### Template Path
`templates/partials/top-banner.html.twig`

### Included In
- `templates/partials/header-wrapper.html.twig` (line 6)

### Key Variables
```twig
{% set ticker_text = theme_var('ticker_text') %}
{% set ticker_speed = theme_var('ticker_speed', 20) %}
{% set ticker_link = theme_var('ticker_link') %}
{% set ticker_bg = theme_var('ticker_bg', 'oklch(0.55 0.25 25)') %}
{% set ticker_color = theme_var('ticker_color', 'oklch(0.98 0 0)') %}
```

### Scheduling Logic
```twig
{% set now_timestamp = "now"|date("U") %}
{% set show_ticker = true %}

{% if ticker_starts and date(ticker_starts).timestamp > now_timestamp %}
    {% set show_ticker = false %}
{% endif %}

{% if ticker_expires and date(ticker_expires).timestamp < now_timestamp %}
    {% set show_ticker = false %}
{% endif %}
```

---

## 4. UX/UI & Assets

### Interface Behavior
- **Desktop**: Full-width banner at top of page
- **Mobile**: Same behavior, responsive text size
- **Height**: Fixed at `2.5rem` (40px)

### SCSS Strategy
**File**: `css/components/ticker.css` (embedded in compiled CSS)

**Key Classes**:
- `.ticker-component` - Main container
- `.ticker-wrapper` - Inner wrapper
- `.ticker-marquee` - Animated scrolling element
- `.ticker-content` - Text content (duplicated for seamless loop)

### Animations
```css
@keyframes ticker-scroll {
  0% { transform: translate(0); }
  100% { transform: translate(-50%); }
}

/* RTL variant */
@keyframes ticker-scroll-rtl {
  0% { transform: translate(0); }
  100% { transform: translate(50%); }
}
```

### CSS Custom Properties
- `--ticker-bg`: Background color (dynamic)
- `--ticker-text`: Text color (dynamic)
- `--marquee-duration`: Animation speed (dynamic)

---

## 5. Integration Notes

### Admin Panel Configuration
Navigate to: **Themes** → **Nur-ul-Huda** → **Ticker Settings**

### Best Practices
1. **Keep it Short**: Ticker text should be concise (max 100 characters)
2. **High Contrast**: Ensure text color contrasts well with background
3. **Appropriate Speed**: 20-30 seconds is optimal for readability
4. **Use Sparingly**: Don't overuse - reserve for important announcements
5. **Schedule Wisely**: Set expiration dates to avoid stale content

### Accessibility
- `role="complementary"` - Marks as supplementary content
- `aria-label="Announcements"` - Screen reader label
- `dir` attribute - Respects language direction
- Pause on hover - Allows users to read at their own pace

---

## 6. Example Configuration

```yaml
ticker_enabled: true
ticker_text: "🎉 Ramadan Special: 50% Off All Courses - Limited Time!"
ticker_speed: 25
ticker_link: /courses/ramadan-special
ticker_new_tab: true
ticker_bg: oklch(0.55 0.25 25)
ticker_color: oklch(0.98 0 0)
ticker_pause: true
ticker_starts: "2026-03-01 00:00"
ticker_expires: "2026-04-01 23:59"
```

---

**Last Updated**: 2026-01-15  
**Component Version**: 2.1.2
