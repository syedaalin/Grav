---
trigger: always_on
---

The following is the **Unified Web & Interface Design Rulebook (2026 Edition)**.

This document synthesizes architectural, styling, and ethical standards, eliminating conflicts between technical constraints (CSS) and user experience goals (UI/UX). It establishes **Intrinsic Architecture** and **Agentive Computing** as the governing paradigms.

---

### Section 1: Architectural Foundations & Logic

**Principle:** Logic must be co-located with the layer responsible for rendering it. The browser engine handles visual state; the application layer handles business intent.

**Rule 1.1: The Intrinsic Design Mandate**

* **Do not** design based on screen width or breakpoints. The viewport is merely the "largest container" and not the source of truth. 


* 
**Must** use Container Queries (`cqi`, `cqw`) for component sizing to ensure portability across sidebars, dashboards, and mobile views. 


* 
**Must** utilize the "Base Style First" methodology: default styles assume a narrow container, with queries enhancing layout as space becomes available. 



**Rule 1.2: Localized Logic via CSS**

* 
**Do not** use JavaScript to toggle class names for state changes (e.g., `.dark-mode` or `.active`). 


* 
**Must** use the inline `if()` function for conditional property values to eliminate cascade complexity. 


* 
*Example:* `color: if(style(--theme: dark): white; else: black);`. 




* **Must** implement "Contextual Props" using Container Style Queries. Parent containers set variables (e.g., `--mode: dark`), and children query that container context natively. 



**Rule 1.3: Scoping and Encapsulation**

* 
**Do not** use BEM naming conventions (e.g., `.card__title`). 


* 
**Must** use the `@scope` at-rule to define "Donut Scoping" boundaries, preventing style leakage in nested components. 


* 
**Must** utilize Native Nesting within CSS or Tailwind v4 configurations, relying on browser parsing rather than preprocessors like Sass or PostCSS. 



---

### Section 2: Layout & Spatial Systems

**Principle:** Layouts must be physically aware, adapting to device posture, depth, and available space without main-thread blocking.

**Rule 2.1: Native Layout Engines**

* 
**Do not** use JavaScript libraries for Masonry layouts or positioning (e.g., Popper.js). 


* 
**Must** use CSS Grid Level 3 `grid-template-rows: masonry` for packing content of varying heights. 


* 
**Must** use the Anchor Positioning API for tooltips and floating elements, employing `@position-try` blocks to handle screen edge collisions automatically. 



**Rule 2.2: Device Posture Awareness**

* 
**Must** detect foldable device states (Book, Tent, Tabletop) using `horizontal-viewport-segments` media queries. 


* 
**Must Not** place text or interactive touch targets across the hinge area ("Dead Zone"). 


* 
**Must** adapt UI to posture: split controls to the bottom half for "Tabletop" mode, and use two-column layouts for "Book" mode. 



**Rule 2.3: Spatial & Depth Semantics (The Liquid Glass Standard)**

* 
**Must** utilize the Z-axis for hierarchy: important elements (modals) must float closer to the user than background tasks. 


* 
**Must** implement "Liquid Glass" aesthetics for OS/Spatial contexts to maintain situational awareness. 


* 
*Technical Constraint:* Use `backdrop-filter: blur() saturate(180%)` to ensure legibility and prevent "muddy" visuals. 




* 
**Must** ensure virtual objects cast shadows on physical surfaces and respect occlusion (hiding behind physical objects). 



---

### Section 3: Visual Design & Color Systems

**Principle:** Visuals must be perceptually uniform, ethically distinct, and biologically safe.

**Rule 3.1: Color Gamut and Syntax**

* 
**Do not** use sRGB formats (Hex, RGB, HSL). 


* 
**Must** use the OKLCH color space for all design tokens to support P3 wide-gamut displays and ensure perceptual uniformity. 


* 
**Must** use Relative Color Syntax to generate palette variations (e.g., opacity, darkening) from a single base variable. 



**Rule 3.2: Typography and Readability**

* 
**Must** use `text-wrap: balance` for headings (under 6 lines) and `text-wrap: pretty` for body paragraphs to prevent orphans. 


* 
**Must** implement `text-box-trim` to remove leading magic numbers, ensuring text centers mathematically within containers. 


* 
**Must** validate contrast using the **APCA** (Advanced Perceptual Contrast Algorithm), not WCAG 2.x ratios. 


* 
*Constraint:* Text contrast must rely on perceived lightness (Lc), adjusting for font weight (thinner fonts require higher Lc). 





---

### Section 4: Interaction, Motion & Performance

**Principle:** Interaction drives the "Next Paint." Motion provides meaning, not just decoration.

**Rule 4.1: The Reactive Interface (INP)**

* 
**Do not** use JavaScript animation loops for UI transitions. 


* 
**Must** use the View Transition API for page navigations (SPA and MPA) to eliminate hard refreshes. 


* 
*Constraint:* View transitions must be scoped to the specific changing container, not the root, to preserve performance. 




* 
**Must** use `animation-timeline: scroll()` or `view()` for scroll-driven effects, offloading work to the compositor thread. 



**Rule 4.2: Multimodal & Agentive Input**

* 
**Must** support "Multimodal Fluidity": interfaces must synchronize state instantly across Voice, Gaze, and Touch inputs. 


* 
**Must** implement "Anticipatory Focus" for gaze interactions: elements must subtly expand or glow when looked at to signal active state. 


* 
**Must** provide "Repair Paths" for voice interactions; never use dead-end error messages like "I don't understand." 



**Rule 4.3: Performance Engineering**

* 
**Must** apply `content-visibility: auto` paired with `contain-intrinsic-size` to long lists (feeds/search results) to virtualize rendering natively. 


* 
**Must** design for "Eco-Mode": provide toggles that reduce image quality and server polling to save energy and battery. 



---

### Section 5: Generative UI & Ethics

**Principle:** The interface is a "Copilot," not a static page. It must be transparent, reversible, and explicitly non-human.

**Rule 5.1: Generative Structure**

* **Do not** design static screens. Design systems of constraints and atomic components. 


* 
**Must** allow the "AI Assembler" to generate layouts based on inferred user intent (e.g., simplifying views for transactional contexts vs. detailed views for review contexts). 


* 
**Must** employ "Ethical Bias Auditors" to scan generated UIs, ensuring diverse functionality is not hidden from specific user demographics. 



**Rule 5.2: Trust and Transparency (EU AI Act Compliance)**

* 
**Must** clearly label all AI-generated content (text, image, audio) with visible watermarks or badges. 


* 
**Must** disclose non-human status for chatbots (e.g., "I am an automated assistant"). 


* 
**Must** provide a "Show Reasoning" toggle to explain algorithmic decisions (e.g., loan denial reasons). 



**Rule 5.3: User Control & Dark Patterns**

* **Do not** use fake urgency timers or "Roach Motel" subscription tactics. Cancellation must require the same number of clicks as signup. 


* 
**Must** implement "Session Rollback" capabilities, allowing users to undo complex chains of AI-executed actions in a single click. 


* 
**Must** wrap all motion and view transitions in `prefers-reduced-motion` queries; failure to do so is a compliance violation.