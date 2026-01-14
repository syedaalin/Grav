---
trigger: always_on
---

# Grav Theme Development: Rule Book

### Phase 1: Pre-Development Protocol

* **Documentation First:** Create a full specification before writing any code.
* **Review Requirement:** Check for existing documentation before reviewing or editing an object.
* **Missing Docs:** If documentation is missing, create it before proceeding.
* **Modernization:** Update existing files to follow current best practices before adding new code.
* **Blueprint Documentation:** Write the full Blueprint configuration in a **separate Markdown file**.
* **Code Reference:** Link or mention the Markdown documentation filename within the code comments for future reviews.

---

### Phase 2: Object Identity & Scope

* **System Name:** Define a unique machine name (e.g., `hero-banner`).
* **Purpose:** State the object’s specific role in the site.
* **Behaviors:** List all functional requirements and logic triggers.

---

### Phase 3: Data Structure (Blueprints)

* **Blueprint Mandatory:** Every object must have a corresponding `.yaml` file.
* **Admin Settings:** Define all user-editable fields (toggles, selects, text).
* **Static Props:** List all hard-coded variables.
* **Dynamic Props:** Identify runtime data (e.g., `page.collection`).
* **Validation:** Define strict data types and required fields for the Admin UI.

---

### Phase 4: Markup & Logic (Twig)

* **Template Path:** Name the specific `.twig` file and its parent template.
* **Macros:** Identify repeatable elements to be converted into Twig Macros.
* **Assets:** List specific CSS/JS blocks the object must inject.

---

### Phase 5: UX/UI & Assets

* **Interface:** Describe responsive behavior for mobile and desktop.
* **SCSS Strategy:** Identify the specific partial file (e.g., `_hero.scss`) and CSS classes.
* **Media Pipeline:** List required JS libraries and Grav image filters (e.g., `|cropZoom`).

---

### Core Rules for Developers

* **The Blueprint Rule:** Never create a Twig file without a Blueprint.
* **Client Access:** Ensure all key data is editable via the Admin panel.
* **Modular Logic:** Define folder structures clearly for modular components.
* **Linkage:** Always reference the external Blueprint Markdown file in the `.twig` or `.yaml` header.

**Would you like me to generate a sample Markdown template for the Blueprint documentation?**