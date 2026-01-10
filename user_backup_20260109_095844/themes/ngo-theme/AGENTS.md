# NGO Theme: Agentic Context & 2026 Standards

## Project Identity
- **Name**: NGO Theme
- **Role**: Premium Grav CMS Theme for Non-Profit Organizations (2026 Standard)
- **Primary Tech Stack**: Grav, PHP, Tailwind CSS v4 (Oxide), Vanilla JS, Alpine.js.
- **Design Paradigm**: Liquid Glass, Nature Distilled (Anti-Grid), Tactile Maximalism.

## Architectural Rules
- **CSS-First Config**: No `tailwind.config.js`. Theme tokens reside in `css/input.css` using `@theme`.
- **Dynamic Color**: All design tokens use `OKLCH` format for perceptual uniformity and vibrancy.
- **Intrinsic Responsiveness**: Use `@container` queries for component-level layout control (Rule 3.1).
- **Sustainability Default**: `body.eco-mode` must reduce CPU/GPU load (disable animations, glassmorphism).
- **Agentic UX**: Prioritize `Speculation Rules API` for predictive navigation over standard prefetching.

## Interaction Flow
1. **Intent Detection**: Hover triggers Speculation Rules for predictive prerendering.
2. **Feedback Loop**: Haptic pulses (Vibration API) on critical actions (buttons, toggles).
3. **Safety**: Full session rollback supported via `sessionState` logic (Rule 2.3).
4. **Accessibility**: Bionic Reading and Focus Mode available for neurodivergent users (Rule 8.3).
5. **AI Content**: Use `ai-disclosure.html.twig` and `metadata.html.twig` for EU AI Act compliance.

## Evaluation (Rule 7.1)
- **Command**: `npm run build`
- **Scope**: Generates `css/build.css` using Rust-accelerated Oxide engine.
- **Strictness**: Build must succeed without warnings for production deployment.

## Forbidden Patterns
- **Do not** use `tailwind.config.js` unless explicitly justified.
- **Do not** use `darken()` or `lighten()` directly on `OKLCH` variables.
- **Do not** use viewport media queries (sm:, md:) for portable components; use `@container`.
