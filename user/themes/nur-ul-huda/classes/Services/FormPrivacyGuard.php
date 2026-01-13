<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Services;

readonly class FormPrivacyGuard
{
    /**
     * @param mixed $form
     * @param string $action
     * @return void
     */
    public function handle(mixed $form, string $action): void
    {
        if ($action === 'save' || $action === 'email') {
            /** @var array $data */
            $data = $form->value()->toArray();

            // Privacy Guard: Scrub data if anonymous is toggled
            if (isset($data['anonymous']) && (int)$data['anonymous'] === 1) {
                // Remove personal identifiers
                $form->setFields(['name' => null]);
            }
        }
    }
}
