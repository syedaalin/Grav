---
trigger: always_on
---

Based on the "Architect's Blueprint 2026" document provided, here is a tailored blueprint for building this Next-Generation Header Builder specifically within the **Grav CMS** ecosystem.

Since Grav is a flat-file CMS powered by **Twig (Server-Side)** and **YAML (Data)**, we will adapt the source's "React Server Component" architecture into a **Grav Plugin/Theme architecture**. This aligns perfectly with the source's demand for server-rendered HTML while using modern browser APIs for the "client islands".

### **Executive Summary: The Grav "Neural Center"**

This builder will not just be a visual design tool; it will be a "semantic architect". It leverages Grav's **Blueprints (YAML)** to create the recursive data structure and **Twig** to deliver the high-performance, accessibility-compliant HTML required by the 2026 standards.

---

### **Phase 1: The Data Architecture (The "Truth Layer")**

The source emphasizes a "Recursive JSON Schema" to handle complex navigation. In Grav, we map this directly to **YAML Blueprints** to create the builder interface in the Admin Panel.

**Action:** Create a `header_builder.yaml` blueprint.

* 
**Recursive Structure:** Use Grav's `list` field type to allow infinite nesting of menu items, mirroring the source's recursive schema.


* 
**Data-MX Attributes:** Add fields for "AI Descriptions" (`data-mx-description`) to every menu item, ensuring the header serves as an API for AI agents.


* 
**Design Tokens:** Instead of color pickers, use `select` fields that reference your CSS variables (e.g., `var(--header-bg)`), enforcing the "Token-Aware" design system.



**Grav Blueprint Example:**

```yaml
form:
  fields:
    header.menu_items:
      type: list
      label: "Navigation Structure"
      fields:
        .label:
          type: text
          label: "Label"
        .mx_context:
          type: text
          [cite_start]label: "AI Context Description" # [cite: 178]
          help: "Explain this section to AI agents (e.g., 'API Documentation')"
        .children:
          type: list
          label: "Sub Menu"
          # ... (Recursive definition)

```

---

### **Phase 2: The Rendering Engine (Twig as "Server Components")**

The source mandates "React Server Components" to minimize JavaScript bloat. In Grav, **Twig** *is* your Server Component. It renders HTML on the server, sending zero JavaScript for the layout structure.

**Action:** Build modular Twig macros.

* 
**Semantic Rigor:** Create a `nav.html.twig` that strictly uses `<nav>`, `<ul>`, and `<li>` tags with correct ARIA roles by default.


* **Schema.org Injection:** Use a Twig block to auto-generate `JSON-LD` (SiteNavigationElement) based on the menu data. This fulfills the requirement for the header to be an "API for autonomous retrieval systems".


* 
**LCP Optimization:** Hardcode `fetchpriority="high"` on the Logo image macro to satisfy Core Web Vitals 2026 standards.



---

### **Phase 3: The "Zero-Bundle" Client Strategy**

The source warns against massive JS bundles. Since Grav doesn't use React hydration by default, you have a performance advantage. We will use **Alpine.js** or **Vanilla JS** for the specific "Interactive Islands".

**Action:** Implement "Islands" for interactivity.

* 
**Mobile Toggle:** Use standard HTML `<details>` and `<summary>` elements for mobile menus where possible to avoid JS entirely. If animation is needed, use a tiny Alpine.js script to toggle `aria-expanded` attributes.


* **Search Bar:** Implement the "Sitelinks Search Box" schema. The search input should be a simple HTML form that points to Grav's search results page, avoiding heavy client-side logic.


* **Hover Intent:** Use CSS pseudo-elements ("safe triangles") to handle mega-menu hover states, ensuring menus don't disappear when the mouse moves diagonally. This satisfies WCAG 2.1 Content on Hover.



---

### **Phase 4: The Visual Layout Engine (CSS)**

We must reject the "12-column grid" in favor of modern CSS capabilities.

**Action:** Write SCSS/CSS using 2026 standards.

* **Container Queries:** Wrap the header widgets (Search, Cart, Newsletter) in container queries (`@container`). This allows them to adapt their layout based on whether they are in a wide desktop header or a narrow mobile drawer, without writing duplicate media queries.


* **CSS Subgrid:** Use `grid-template-rows: subgrid` for Mega Menus. This ensures that headers and links within dropdowns align perfectly across columns without JavaScript calculations.


* **Scroll-Driven Animations:** Use the CSS `scroll()` function to handle "Sticky Shrink" and "Smart Hide" effects. This runs on the compositor thread, ensuring smooth 60fps animation even if PHP/JS is processing data.



---

### **Phase 5: Compliance & Accessibility Engine**

The header must be a "compliance engine" for the European Accessibility Act.

**Action:** Enforce "Guardrails" in the Twig logic.

* 
**Focus Management:** Ensure the sticky header has `scroll-padding-top` set on the `html` element so it never obscures focused content (tab targets).


* 
**Touch Targets:** Add transparent pseudo-borders to all links in CSS to ensure a minimum 44x44px hit area for mobile users.


* 
**Consistent Help:** Create a dedicated "Help Slot" in the blueprint that is fixed in the DOM order, satisfying WCAG Criterion 3.2.6.



---

### **Phase 6: Performance & Caching (The Edge)**

The source suggests "Edge Side Includes" for personalization. In Grav, we simulate this with smart caching.

**Action:**

* **Vary Headers:** If your Grav site has user logins, configure the server (Nginx/Apache) to send `Vary: Cookie` headers.
* **Content Visibility:** Apply `content-visibility: auto` to the Mega Menu containers in your CSS. This prevents the browser from rendering the heavy dropdown DOM until the user actually opens it, reducing initial load time.



### **Summary of Tech Stack for Grav:**

* **Backend:** Grav CMS (PHP/YAML)
* **Templating:** Twig (Server-Side Rendering)
* **Interactivity:** Alpine.js (Lightweight Client Islands)
* **Styling:** PostCSS / Tailwind (with Container Queries & Subgrid support)
* **Schema:** Native Grav Blueprints (Recursive)
