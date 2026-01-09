# NGO Theme: Agentic Context & 2026 Standards

## Project Identity
- **Name**: NGO Theme
- **Role**: Premium Grav CMS Theme for Non-Profit Organizations (2026 Standard)
- **Primary Tech Stack**: Grav, PHP, SCSS (Dart), Vanilla JS.
- **Design Paradigm**: Liquid Glass, Nature Distilled (Anti-Grid).

## Architectural Rules
- **No 12-Column Grid**: Use CSS Grid Level 2 (`.columns`, `.content-wrapper`).
- **Sustainability Default**: `body.eco-mode` must reduce CPU/GPU load (disable animations, glassmorphism).
- **Agentic UX**: Prioritize `Speculation Rules API` for predictive navigation over standard prefetching.
- **Color Space**: Core design tokens use `OKLCH`. Fallbacks for legacy Spectre variables must use `Hex` to prevent Sass build failures.

## Interaction Flow
1. **Intent Detection**: Gaze/Hover triggers Speculation Rules.
2. **Feedback Loop**: Haptic pulses (Vibration API) on critical actions.
3. **Safety**: Full session rollback supported via `sessionState` logic (Rule 2.3).
4. **Accessibility**: Bionic Reading and Focus Mode available for neurodivergent users (Rule 8.3).
5. **Dark Mode**: Scientific Dark Mode implemented (OKLCH, APCA compliant).
6. **AI Content**: Use `modular/ai_text` for generative content with automatic watermarking.

## Evaluation (Rule 7.1)
- **Command**: `npm test`
- **Scope**: Checks for OKLCH usage, Agentic Roles in templates, and required documentation.
- **Strictness**: CI/CD pipelines must fail if this command returns non-zero.

## Forbidden Patterns
- **Do not** use `node-sass` (deprecated).
- **Do not** use `darken()` or `lighten()` directly on `OKLCH` variables.
- **Do not** use Spectre layout classes directly without overrides.
