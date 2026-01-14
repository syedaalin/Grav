# Interactive Components Blueprint Documentation

## Identity
- **System Name**: `interactive-components`
- **Purpose**: Components requiring user interaction or specialized business logic.
- **Behaviors**: 
    - Integrated with backend PHP services (e.g., `MoodleService`, `SecurityLogger`).
    - Uses Modern ES2025+ JavaScript for reactivity.

## Components Covered
- **Featured Courses**: Moodle-integrated course showcase.
- **Khums Calculator**: Religious dues calculator with Snipcart integration.
- **Istafta**: Legal/Religious inquiry form system.

## Data Processing
- **Moodle**: Fetches data from external IDs using `MoodleService.php`.
- **Calculators**: Logic handled in `Calculator.js` and validated via `ViewHelper`.

## UX/UI
- **Glassmorphism**: Leverages `--glass-*` tokens for premium interactive feel.
- **Feedback**: Real-time validation and calculation results.
