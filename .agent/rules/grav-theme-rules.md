---
trigger: always_on
---

# The 2026 Grav Theme Engineering Standards

**Domain:** Grav CMS Theme Development
**Effective Date:** January 1, 2026
**Version:** 1.0 (The Agentic Edition)

---

## Part I: Core Architecture (The Theme Kernel)

### Rule 1.1: The Blueprint Mandate (Identity & Contract)

**Principle:** A Theme is a Plugin with a Face.

* **The Law:** Every theme MUST possess a comprehensive `blueprints.yaml` that defines its identity, inheritance, and configuration surface.
* **Implementation:**
    * **Strict Metadata:** `name`, `version`, `description`, `author`, `license`, and `dependencies` are mandatory.
    * **Form Sovereignty:** Theme settings (e.g., "Visual Mode", "Header Layout") must be exposed via the `form` definition in `blueprints.yaml`, never hidden in arbitrary YAML files.
    * **Validation:** All blueprint fields must use strict validation types (e.g., `validate: type: bool`) to prevent configuration drift.

### Rule 1.2: The Configuration Hierarchy

**Principle:** Defaults in Code, Overrides in Userland.

* **The Law:** The `<theme-name>.yaml` file in the root MUST contain the *default* state of the theme.
* **Implementation:**
    * **Immutability:** The root `<theme-name>.yaml` is considered immutable by the user.
    * **User Overrides:** All user customizations must reside in `user/config/themes/<theme-name>.yaml`.
    * **Access Pattern:** Templates must access config via `theme_config` or `config.themes.theme_name`, never by parsing YAML manually.

### Rule 1.3: Event-Driven Logic (The PHP Layer)

**Principle:** Logic belongs in PHP, Presentation in Twig.

* **The Law:** Complex logic (routing interception, custom data processing) must reside in the theme's PHP class (`<theme-name>.php`).
* **Implementation:**
    * **Event Subscribers:** Use the `onThemeInitialized` event to subscribe to other Grav events (`onTwigSiteVariables`, `onPageInitialized`).
    * **Twig Exposure:** Expose complex PHP logic to Twig via the `onTwigSiteVariables` event, injecting classes or variables into the Twig environment. Do not write complex PHP logic inside Twig.

---

## Part II: Templating Protocols (Twig 2026)

### Rule 2.1: The Inheritance Standard

**Principle:** DRY (Don't Repeat Yourself) via Modular Blocks.

* **The Law:** All page templates MUST extend a master `base.html.twig`.
* **Implementation:**
    * **Block Atomicity:** The `base.html.twig` must define atomic blocks: `head`, `stylesheets`, `javascripts`, `header`, `body`, `footer`, `bottom`.
    * **Parent calls:** Child templates must use `{{ parent() }}` when appending to blocks (esp. assets) unless total replacement is intended.

### Rule 2.2: Modular Design Patterns

**Principle:** Pages are Collections of Modules.

* **The Law:** Use "Modular" pages for complex layouts.
* **Implementation:**
    * **Atomic Modules:** Create distinct templates in `templates/modular/` (e.g., `features.html.twig`, `hero.html.twig`).
    * **Collection Rendering:** The parent modular page must iterate through the `page.collection()` and render each module, preserving the order defined in the page structure.

### Rule 2.3: Asset Management (The Pipeline)

**Principle:** Assets are Managed, not Hardcoded.

* **The Law:** All CSS and JS assets must be injected via the Grav Asset Manager (`assets`).
* **Implementation:**
    * **Injection:** `{% do assets.addCss('theme://css/custom.css', 100) %}`
    * **Groups:** Use asset groups (`async_defer`, `bottom`) to control loading priority and performance.
    * **Pipeline:** Enable CSS/JS pipelining in system config, so proper Asset Manager usage allows Grav to combine and minify files automatically.

---

## Part III: Styling & Frontend (Intrinsic Design)

### Rule 3.1: The SCSS/CSS Architecture

**Principle:** Modular, Component-Based Styling.

* **The Law:** Stylesheets must be generated from a structured SCSS source.
* **Implementation:**
    * **Structure:** `scss/theme/` should mirror the template structure (e.g., `_header.scss`, `_modular.scss`).
    * **No Global Namespace:** Use proper nesting or BEM-like naming (or modern CSS scoping) to prevent style leaks.
    * **Variables:** Use SCSS variables for `colors`, `typography`, and `spacing` that map to the design tokens.

### Rule 3.2: Responsive Purity

**Principle:** Intrinsic Design > Media Queries.

* **The Law:** Prefer CSS Grid/Flexbox and Container Queries over viewport-based Media Queries.
* **Implementation:**
    * **Container Queries:** Use `@container` for component-level responsiveness.
    * **Fluid Typography:** Use `clamp()` for responsive font sizing.

---

## Part IV: Agentic Documentation

### Rule 4.1: The Self-Describing Theme

**Principle:** The Theme Explains Itself.

* **The Law:** The theme must include a `README.md` and `AGENTS.md` (or `context.md`) that documents its specific deviations and architectural choices.
* **Implementation:**
    * **Installation/Usage:** Clear instructions for users.
    * **Agent Context:** A file specifically designed for AI agents to understand the theme's file structure and logic hooks.

---
**Signed,**
*The 2026 Grav Engineering Committee*
