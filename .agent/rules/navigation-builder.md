---
trigger: always_on
---

Here is a comprehensive blueprint for building the **Cognitive Navigation Builder** within the **Grav CMS** ecosystem.

This blueprint adapts the high-performance, database-driven architecture described in the source document  to Grav’s specific flat-file, Twig, and YAML-based infrastructure while maintaining the innovative "Ambient Navigation" and "Zero-UI" principles.

---

### **Blueprint 2026: Grav CMS Edition**

**Project Title:** Cognitive Navigation Plugin for Grav


**Core Philosophy:** Transcend static menus to create an "Alive and Responsive" navigation agent.

---

### **Phase 1: The "Builder" Interface (Admin Plugin)**

The goal is to replace the standard Grav Menu editor with a "Liquid Glass" visual interface that supports complex hierarchies and physics-based interactions.

#### **1.1 Technology Stack Selection**

* **Container:** Grav Admin Plugin (PHP/YAML).
* 
**UI Engine:** Embed a **React 19** application within the Grav Admin panel div to leverage "Islands of Reactivity" and **Signals**.


* 
**State Management:** Use **Zustand + Immer**  to manage the complex JSON tree state within the editor before saving to YAML.



#### **1.2 Visual Architecture**

* 
**Force-Directed Graph View:** Implement a view that visualizes Grav Pages as physics-enabled particles.


* ```
* [cite_start]**Orphan Detection:** Visually identify Grav pages that exist in the `user/pages` folder but are not linked in any custom menu configuration[cite: 22].

```




* 
**"Liquid Glass" Aesthetic:** Use CSS backdrop filters in the Admin UI to retain context when editing deep sub-menus (Level 5+).



#### **1.3 Interaction Design**

* 
**Physics-Based Drag-and-Drop:** Integrate **Pragmatic drag and drop (Atlassian)** or **react-arborist**  to handle large page lists.


* 
*Grav Specific:* When dragging a "Folder" (Parent Page), visual feedback must show the collapse of all children into a stack to represent weight.




* 
**Virtualization:** Use `react-window` to ensure the editor remains smooth (60fps) even if the Grav site has 5,000+ pages.



---

### **Phase 2: Backend Data Architecture (Flat-File Adaptation)**

The source relies on PostgreSQL `ltree`. In Grav, we must adapt this to **YAML** and **File System** structures while ensuring performance.

#### **2.1 The Hybrid Data Model**

Instead of a database, use a **Hybrid YAML Schema** stored in `user/config/navigation.yaml`.

* **Static Nodes (The Skeleton):** Hardcoded links mapped to specific routes.
* **Smart Nodes (The "Query Builder"):** Instead of SQL, use **Grav Collection Definitions**.
* 
*Source Requirement:* "Include pages WHERE type = 'Article'...".


* *Grav Implementation:* The Builder UI saves a collection definition:
```yaml
# user/config/navigation.yaml
main_menu:
  - title: "Latest News"
    type: "smart_node"
    collection:
      items: '@root.descendants'
      filter:
        type: 'blog'
        tag: 'AI'
      order:
        by: date
        dir: desc
      limit: 5

```


* This fulfills the "Smart Node" requirement  using native Grav logic.





#### **2.2 Git-Like Versioning**

* **Draft Branches:** Implement "Environments" in the plugin.
* Save drafts to `navigation.draft.yaml`.
* Include a "Visual Diff" view  in the React Admin to compare `navigation.yaml` (Live) vs. `navigation.draft.yaml` before publishing.





---

### **Phase 3: Frontend Engineering (The "Ambient" Experience)**

This phase focuses on how the menu renders on the site, prioritizing **Core Web Vitals** and **Resumability**.

#### **3.1 Zero-Hydration Rendering**

* **Technique:** Do not hydrate a massive React app on the frontend. Instead, use **Grav Twig** to render the initial HTML (Serialized State).


* **Interactivity:** Use **Alpine.js** or vanilla Web Components for interaction.
* 
*Why:* This mimics the "Resumability" of Qwik. The HTML is fully interactive immediately; JS only executes when a specific sub-menu trigger is hovered.





#### **3.2 CSS Modernization**

* 
**Anchor Positioning:** Use the native CSS Anchor Positioning API  in your theme to link "Triggers" (Links) to "Targets" (Mega Menus) without heavy JavaScript positioning libraries (like Popper.js).


* 
*Fallback:* Include a polyfill for browsers that do not support it yet.




* 
**Container Queries:** Make the navigation bar a "Universal Component".


```css
.nav-container { container-type: inline-size; }
@container (max-width: 600px) { ... } /* Switch to Accordion */

```


This ensures the menu adapts whether it is in a sidebar or a header.



---

### **Phase 4: The Intelligence Layer (AI & Personalization)**

Since Grav is flat-file, we cannot do heavy DB writes for clickstream analysis. We will use a **Hybrid Edge** approach.

#### **4.1 Intent Mapping & Smart Reordering**

* 
**Taxonomy as Intent:** Use Grav's Taxonomy system to map "Intents" (e.g., `intent: support`, `intent: buy`).


* **Dynamic Reordering:**
* Create a Twig Extension `{{ predictive_nav('main_menu') }}`.
* *Logic:* Read a cookie (e.g., `user_intent_score`). If the user has visited 3 "Support" pages, the extension dynamically moves "Help Center" to the first position in the array before rendering.





#### **4.2 Clickstream Data (External Integration)**

* Do not write logs to the Grav file system (performance bottleneck).
* 
**Implementation:** Inject a lightweight JS collector  that sends events to an external endpoint (e.g., Tinybird, Google Analytics 4, or a self-hosted n8n webhook).


* 
**Feedback Loop:** A scheduled Grav Cron job fetches "Top Trending Pages" from this external source and updates a `trending.yaml` file, which the "Smart Nodes" use to populate "Popular Now" menu sections.



---

### **Phase 5: Zero-UI & Accessibility (WCAG 3.0)**

#### **5.1 Voice Navigation Integration**

* **Web Speech API:** Inject a small JS module that listens for voice commands.
* 
**Grammar Generation:** The Plugin should automatically generate a `SpeechGrammarList` based on the active `navigation.yaml` titles (e.g., "Open Services").



#### **5.2 Accessibility Compliance**

* 
**Automated Audits:** Integrate **Pa11y** or similar into the plugin's "Save" action to check for **Keyboard Traps**.


* 
**Semantic Integrity:** Ensure the Twig templates output strict semantic HTML (`<nav>`, `aria-expanded`, `role="menubar"`) to prevent "div soup".



---

### **Summary of Grav Architecture**

| Feature | Source Requirement [Cite] | Grav CMS Adaptation |
| --- | --- | --- |
| **Data Structure** | PostgreSQL `ltree` [5] | `user/config/navigation.yaml` (Tree) + Page Folders |
| **Builder UI** | React 19 + Signals [53] | React App embedded in Grav Admin Plugin |
| **Frontend** | Qwik / Resumability [64] | Twig (Server-Side) + Alpine.js (Micro-interactions) |
| **Styling** | CSS Anchor Positioning [89] | Native CSS in Theme (SCSS) |
| **Intelligence** | Real-time Clickstream [11] | External Analytics + Grav Cron for "Trending" updates |
| **Query Logic** | SQL Query Builder [40] | Grav Collection Definitions (`@root.descendants`) |

### **Next Step**
