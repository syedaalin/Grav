---
title: Login Status Component
description: Blueprint documentation for the user authentication status indicator
---

# Login Status Component Blueprint

## 1. Object Identity & Scope

### System Name
`login-status`

### Purpose
Displays the current user's authentication status in the header. Shows login button for guests or user profile badge for authenticated users.

### Behaviors
- **Guest State**: Shows "Login" link
- **Authenticated State**: Shows user avatar, name, and logout button
- **Moodle Integration**: Links to Moodle LMS login if configured
- **Responsive**: Adapts layout for mobile/desktop
- **Logout Action**: Quick logout button for authenticated users

---

## 2. Data Structure (Blueprint Fields)

### Configuration Location
`user/config/themes/nur-ul-huda.yaml` → `moodle_url`

### Blueprint Fields

#### `moodle_url`
- **Type**: `text`
- **Label**: Moodle LMS URL
- **Placeholder**: `https://lms.example.com`
- **Description**: Base URL for Moodle integration (optional)
- **Example**: `https://moodle.nur-ul-huda.edu`

### Static Props
- **Login Route**: `/theme://login` (fallback)
- **Dashboard Route**: `/theme://dashboard`
- **Logout Route**: `/logout`

### Dynamic Props
- **User Object**: `grav.user` (from Login plugin)
- **Username**: `grav.user.username`
- **Full Name**: `grav.user.fullname`
- **Email**: `grav.user.email`

---

## 3. Markup & Logic (Twig)

### Template Path
Embedded in `templates/partials/header-wrapper.html.twig` (lines 57-67)

### Structure
```twig
{# Guest State #}
{% if not grav.user.username %}
    {% set login_url = theme_var('moodle_url') ? 
        theme_var('moodle_url') ~ '/login' : 
        url('theme://login') %}
    
    <a href="{{ login_url }}" class="btn-login" aria-label="Log in to your account">
        Login
    </a>
{% endif %}

{# Authenticated State #}
{% if config.plugins.login.enabled and grav.user.username %}
    <a href="{{ url('theme://dashboard') }}" class="btn-dashboard" aria-label="Go to Dashboard">
        <span>Dashboard</span>
    </a>
{% endif %}
```

### Conditional Logic
1. **Check Login Plugin**: `config.plugins.login.enabled`
2. **Check User Auth**: `grav.user.username`
3. **Determine Login URL**: Moodle or local
4. **Render Appropriate State**: Guest or authenticated

---

## 4. UX/UI & Assets

### Interface Behavior
- **Desktop**: Full button with text label
- **Mobile**: Icon-only button (space-saving)
- **Hover State**: Color change and background highlight

### SCSS Strategy
**File**: Embedded in `css/components/` (compiled into main CSS)

**Key Classes**:
- `.login-status` - Container
- `.status-badge` - Authenticated user badge
- `.status-avatar` - User icon
- `.status-name` - User's display name
- `.logout-btn` - Logout button
- `.login-link` - Guest login link

### Desktop Styling
```css
.login-link {
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--color-subtle);
  border-radius: var(--radius-xl);
  padding: 0.5rem 1rem;
  font-size: 0.75rem;
  font-weight: 900;
  transition: all 0.2s;
}

.login-link:hover {
  color: var(--color-primary);
  background-color: oklch(from var(--color-primary) l c h / 0.1);
}
```

### Authenticated Badge
```css
.status-badge {
  align-items: center;
  gap: var(--space-s);
  padding: 0.375rem var(--space-m);
  border-radius: var(--radius-xl);
  background-color: oklch(100% 0 0);
  border: 1px solid oklch(100% 0 0 / 0.2);
  font-size: 0.75rem;
  font-weight: 900;
}

.status-avatar {
  color: oklch(from var(--color-primary) l c h / 0.6);
  font-size: 1.125rem;
}

.logout-btn {
  border-radius: var(--radius-lg);
  height: 1.75rem;
  width: 1.75rem;
  background-color: oklch(0% 0 0 / 0.05);
  transition: all 0.2s;
}

.logout-btn:hover {
  background-color: oklch(from var(--color-error) l c h / 0.1);
  color: var(--color-error);
}
```

---

## 5. Integration Notes

### Login Plugin Required
**Plugin**: `grav-plugin-login`  
**Version**: Latest compatible with Grav 1.6+

**Configuration**:
```yaml
# user/config/plugins/login.yaml
enabled: true
built_in_css: false  # Use theme styles
route: /login
redirect_after_login: /dashboard
```

### Moodle Integration
If `moodle_url` is configured:
- Login button links to Moodle login page
- Users authenticate via Moodle SSO
- Grav session synced with Moodle

**Example**:
```yaml
# user/config/themes/nur-ul-huda.yaml
moodle_url: https://lms.nur-ul-huda.edu
```

---

## 6. User States

### State 1: Guest (Not Logged In)
**Display**: "Login" button  
**Action**: Redirect to login page  
**Icon**: None  

### State 2: Authenticated
**Display**: User badge with avatar and name  
**Components**:
- Avatar icon (user circle)
- Username or full name (truncated if long)
- Logout button (X icon)

**Actions**:
- Click badge → Go to dashboard
- Click logout → Sign out

---

## 7. Accessibility

### ARIA Attributes
- `aria-label="Log in to your account"` - Login button
- `aria-label="Go to Dashboard"` - Dashboard link
- `aria-label="Sign out"` - Logout button

### Keyboard Support
- **Tab**: Navigate to login/logout buttons
- **Enter/Space**: Activate button
- **Focus Visible**: Outline on keyboard focus

### Screen Reader Support
- Clear labels for all interactive elements
- Status changes announced
- Logout confirmation (optional)

---

## 8. Best Practices

### Security
1. **CSRF Protection**: Use Grav's built-in CSRF tokens
2. **Secure Logout**: Clear all session data
3. **HTTPS Only**: Enforce SSL for login pages
4. **Session Timeout**: Configure appropriate timeout

### UX Guidelines
1. **Clear State**: Obvious visual difference between logged in/out
2. **Quick Access**: Login button always visible
3. **Logout Confirmation**: Optional modal for accidental clicks
4. **Redirect Logic**: Send users to appropriate page after login

### Customization
To change button appearance:
```css
.btn-login {
  /* Custom login button styles */
  background: var(--color-primary);
  color: white;
  padding: 0.75rem 1.5rem;
}
```

---

## 9. Example Configurations

### Standard Grav Login
```yaml
# No moodle_url configured
# Uses built-in Grav login
```

### Moodle SSO Integration
```yaml
moodle_url: https://lms.example.com
```

### Custom Login Page
```twig
{# Override in child theme #}
{% set login_url = '/custom-login' %}
```

---

## 10. Related Components

- **Header Navigation**: Contains login status
- **User Dashboard**: Destination after login
- **Moodle Service**: Handles LMS integration
- **Security Helper**: Manages authentication

---

**Last Updated**: 2026-01-15  
**Component Version**: 2.1.2  
**Dependencies**: Login Plugin (optional), Moodle LMS (optional)
