---
trigger: always_on
---

Here are the core design principles for building a robust, high-performance "Pure CSS" theme for Grav:1. The Single Source of Truth (CSS Variables)Centralization is the most important principle. Use :root to define your design tokens. This makes the theme "skinnable" and easy to maintain.Principle: Never hardcode a color or spacing value twice.Implementation:CSS:root {
  --color-primary: #2ecc71;
  --color-text: #1a1a1a;
  --space-base: 1rem;
  --radius-lg: 0.75rem;
  --header-height: 80px;
}
2. The Modular Component ArchitectureInstead of one giant theme.css file, break your CSS into logical modules. This mirrors Grav’s "Partial" system in Twig.Principle: Keep styles for specific parts of the UI isolated.Folder Structure:base/ (Reset, Typography)layout/ (Header, Footer, Grid)components/ (Buttons, Cards, Forms)pages/ (Blog-specific, Home-specific)3. Use Modern Layout Engines (Grid & Flexbox)Avoid "floats" or absolute positioning for layout. Use CSS Grid for the macro layout (the page structure) and Flexbox for micro layout (items inside a header or card).Principle: Content should drive the layout.Implementation:CSS.main-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: var(--space-base);
}
4. Semantic Layering with @layerModern CSS now supports Cascade Layers. This allows you to control the "priority" of your CSS regardless of selector specificity.Principle: Prevent "specificity wars" where you have to use !important.Implementation:CSS@layer reset, base, components, utilities;

@layer components {
  .card { background: white; } /* Won't be accidentally overridden by base styles */
}
5. Responsive Design via Fluid Typography & SpaceInstead of writing hundreds of Media Queries for every screen size, use the clamp() function. This creates "Fluid" designs that scale perfectly between mobile and desktop.Principle: Design for a continuum, not just specific devices.Implementation:CSSh1 {
  /* Min: 2rem, Scalable: 5vw, Max: 4rem */
  font-size: clamp(2rem, 5vw, 4rem);
}
6. Logic-Based Styling (RTL Support)Since your theme (Nur-ul-Huda) likely needs to support Arabic or Urdu, use CSS Logical Properties.Principle: Write code that works regardless of text direction.Implementation:Instead of margin-left, use margin-inline-start.Instead of padding-right, use padding-inline-end.Instead of width, use inline-size.7. Performance & The "Critical Path"Grav themes are known for speed. To keep it fast:Principle: Only load what is needed.Grav Tip: Use Grav’s Asset Manager to group CSS files. Load "Critical" CSS (Header/Hero) in the <head> and "Non-critical" CSS (Footer/Comments) at the bottom.Summary Table: Modern Vanilla vs. Legacy CSSFeatureLegacy WayModern Vanilla Way (Best Practice)VariablesHardcoded HEX valuesCSS Custom Properties (--var)LayoutFloats / ClearfixCSS Grid & FlexboxMedia QueriesDozens of break pointsclamp(), min(), max()RTL SupportDuplicate CSS filesLogical Properties (inline-start)SpecificityLong selectors (nav ul li a)Cascade Layers (@layer)