---
trigger: always_on
---

Based on the "2026 Website Footer Builder Blueprint" and adapted for **Grav CMS**, here is a comprehensive, phased plan to build this tool.

This blueprint adapts the "Headless/JSON" architecture of the source text into Grav’s Flat-File architecture (YAML/Twig), treating the footer as a global configuration object managed by a custom Grav Admin Plugin.

### **Phase 1: Architectural Foundation & Data Modeling**

**Goal:** Define the data structure (Schema) that supports Bento Grids and "Agentic" logic within Grav’s file system.

* **Step 1: Define the Configuration Schema (`blueprints.yaml`)**
* The source requires a strict schema to validate the layout. In Grav, you will create a `footer.yaml` in your `user/config/` folder, controlled by a blueprint.


* 
**Grid Topology:** Instead of fixed columns, define a "Canvas" setting (e.g., 12-column grid).


* 
**Cell Definitions:** Create a list field (YAML list) where each item represents a "Cell" with properties: `colStart`, `colSpan`, `rowStart`, `rowSpan`.


* 
**Data Types:** Define allowed module types: `nav-list`, `social`, `newsletter`, `map`, `text`, `agentic-trigger`.




* **Step 2: Grav "Global Module" Implementation**
* Treat the footer as a **Global Page Module**. In Grav, create a hidden page `/footer` or use the `Flex Objects` plugin to manage footer items as structured content.


* 
**Reference Integrity:** Ensure the builder stores "Query References" (e.g., `page.find('/blog').children.limit(3)`) rather than hardcoded HTML, ensuring links stay fresh if page URLs change.




* **Step 3: Design Tokens in YAML**
* Define a `theme.yaml` configuration to store **Design Tokens** (colors, spacing, shadows).


* Include specific tokens for **Neomorphism** (box-shadow layers) and **Glassmorphism** (backdrop-blur values) to support 2026 aesthetic trends.





---

### **Phase 2: The Builder Application (Grav Admin Plugin)**

**Goal:** Create the "Drag-and-Drop" interface to replace standard Grav form fields.

* **Step 1: Develop a Custom Form Field**
* The source specifies a React-based SPA for the builder UI. You will build a custom Grav Form Field (e.g., `type: bento_grid`) using React or Vue.


* Embed this into the Grav Admin panel. This interface will visualize the JSON/YAML data as a grid.


* **Step 2: Implement Drag-and-Drop Logic**
* Use a library like `dnd-kit` or `react-grid-layout` within your plugin.


* **Interaction:** Allow users to drag "Modules" (Newsletter, Links) onto the grid. Implement constraints so cells snap to the 12-column grid and do not overlap invalidly.




* **Step 3: Mobile Preview Simulation**
* Add a toggle in the Admin Plugin to switch the view between Desktop, Tablet, and Mobile.


* 
**Real-time Logic:** Use an iframe or Shadow DOM in the admin to preview how **Container Queries** will resize components based on their cell width, not just the viewport.





---

### **Phase 3: Frontend Engineering (The Rendering Engine)**

**Goal:** Render the YAML config using Twig and modern CSS.

* **Step 1: CSS Grid & Subgrid Layout**
* **Main Grid:** Use `display: grid` on the footer container. Generate `grid-template-areas` dynamically via Twig based on the YAML config.


* **Alignment:** Use **CSS Subgrid** (`grid-template-rows: subgrid`) for internal cell alignment. This ensures headers and links across different columns align perfectly to the global rows, regardless of content length.




* **Step 2: Container Queries for Modules**
* Wrap every Bento Cell in a container: `container-type: inline-size`.


* **Adaptive Styling:** Write CSS using `cqi` (container query inline units). For example, a Newsletter module should automatically switch from side-by-side (input + button) to stacked (vertical) if placed in a narrow 3-column cell.




* **Step 3: Zero-JS Menus (Anchor Positioning)**
* Use the **CSS Anchor Positioning API** for dropdowns (e.g., Language Selectors).


* Define the menu in the DOM (to avoid overflow clipping) and tether it to the trigger button using CSS (`position-anchor`), removing the need for heavy JS libraries like Popper.js.





---

### **Phase 4: "Agentic" Intelligence & Interaction**

**Goal:** Make the footer a dynamic "Terminal Interface" rather than a static list.

* **Step 1: Logic-Driven Twig Injection**
* Implement "Agentic" logic where the footer anticipates user needs.


* **Grav Implementation:** Use Twig logic to check the active page parent.
* *Logic:* `{% if page.parent.slug == 'docs' %}` -> Render "API Support" links.
* 
*Logic:* `{% if page.parent.slug == 'pricing' %}` -> Render "Request Quote" calculator.






* **Step 2: Micro-Conversions & Interactions**
* Include support for **Lottie Animations** (JSON-based vectors) for icons that animate on hover/scroll.


* Embed "Micro-conversion" forms (e.g., a quick "Ask AI" input or Newsletter signup) directly into Bento cells.




* **Step 3: Dynamic Chat Integration**
* Create a "Safe Zone" in the layout engine. If a Chatbot plugin is detected, the footer grid should automatically add padding/spacing to the bottom-right to prevent the chat bubble from obscuring content.





---

### **Phase 5: Sustainability & Compliance (Non-Functional Requirements)**

**Goal:** Ensure the footer meets 2026 standards for ESG and Accessibility.

* **Step 1: Sustainability API Integration**
* Create a "Sustainability Cell" in Grav.
* 
**Backend:** Use a Grav Scheduler job or caching layer to fetch data from the **Website Carbon API** or Green Web Foundation API.


* **Frontend:** Display the cached "CO2 per load" metric in the footer. Include an "Eco Mode" toggle that disables heavy assets (images/animations) when checked.




* **Step 2: Automated Accessibility (WCAG 3.0)**
* Ensure the rendered HTML uses semantic `<nav>` tags with `aria-label` attributes (e.g., "Social Links").


* 
**Audit Tool:** In your Admin Plugin, include a contrast checker (APCA standard) that warns the user if their chosen text/background colors fail WCAG 3.0 Bronze/Silver ratings.




* **Step 3: Privacy & CMP Support**
* Add a "Privacy Trigger" component that integrates with Consent Management Platforms (OneTrust/Cookiebot).


* Implement a "Do Not Sell" toggle that listens for the **Global Privacy Control (GPC)** browser signal and auto-updates its state.





---

### **Phase 6: Mobile Strategy**

**Goal:** Handle high density on small screens.

* **Step 1: Hybrid Accordion Pattern**
* Do not use a simple stack. Implement the **Hybrid Pattern**.


* **Logic:** Critical links (Contact, Login) remain visible. Secondary lists (Archives, Legal) automatically convert to `<details>`/`<summary>` accordions on mobile devices.


* 
**Accessibility:** Ensure `aria-expanded` attributes are toggled correctly.





### **Summary of Grav Files to Create:**

1. `user/config/footer.yaml`: The data store.
2. `user/plugins/footer-builder/`: The logic core.
* `admin/`: React/Vue app for the Drag-and-Drop Bento interface.
* `templates/partials/footer.html.twig`: The rendering engine with CSS Grid/Subgrid.
* `scss/footer.scss`: Container Queries, Design Tokens, and Anchor Positioning styles.