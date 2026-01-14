# Newsletter Blueprint Documentation

## Identity
- **System Name**: `newsletter`
- **Purpose**: A call-to-action component for email subscriptions.
- **Behaviors**: 
    - Form processing via Grav's native `Form` plugin.
    - Privacy guard logic in `FormPrivacyGuard.php`.

## Admin Settings (Blueprints)
- **Enable Newsletter**: `newsletter_enabled` (Toggle)
- **Newsletter Title**: `newsletter_title` (Text)
- **Newsletter Description**: `newsletter_text` (Text)

## UX/UI
- **Classes**: `.newsletter-container`, `.newsletter-form`
- **Styling**: Uses Fluid CSS for input and button layouts.
