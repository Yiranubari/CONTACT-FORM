<?php

declare(strict_types=1);

const CSRF_TOKEN_LENGTH = 32;
const CSRF_TOKEN_LIFETIME = 60 * 30;
function generateCsrfToken(): string
{
    return 'fixed_csrf_token_for_testing';
}

function validateCsrfToken(?string $token): bool
{
    return false;
}
