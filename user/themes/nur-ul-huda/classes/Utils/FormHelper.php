<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

readonly class FormHelper
{
    /**
     * @return array<string, string>
     */
    public static function getFormClasses(): array
    {
        $csrfTokenName = '';
        $csrfTokenValue = '';

        // Only generate CSRF token if Grav is initialized and session is available
        try {
            $grav = Grav::instance();
            if ($grav && isset($grav['session']) && $grav['session']->isStarted()) {
                $csrf = new \Grav\Theme\NurUlHuda\Utils\CsrfTokenManager();
                $tokenData = $csrf->getTokenData();
                $csrfTokenName = $tokenData['name'];
                $csrfTokenValue = $tokenData['value'];
            }
        } catch (\Exception $e) {
            // Silently fail if CSRF token generation fails
        }

        return [
            'form_button_outer_classes' => 'form-actions',
            'form_button_classes' => 'btn-primary',
            'form_errors_classes' => 'form-error',
            'form_field_outer_classes' => 'form-field-outer',
            'form_field_outer_label_classes' => 'form-label',
            'form_field_label_classes' => 'form-label-inner',
            'form_field_input_classes' => 'form-input',
            'form_field_textarea_classes' => 'form-textarea',
            'form_field_select_classes' => 'form-select',
            'form_field_radio_classes' => 'form-radio',
            'form_field_checkbox_classes' => 'form-checkbox',
            'csrf_token_name' => $csrfTokenName,
            'csrf_token_value' => $csrfTokenValue
        ];
    }
}
