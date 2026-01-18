<?php

declare(strict_types=1);

const CSRF_TOKEN_LENGTH = 32;
const CSRF_TOKEN_LIFETIME = 60 * 30;
function generateCsrfToken(): string
{
    $token = random_bytes(CSRF_TOKEN_LENGTH);
    return $token;
}

var_dump(generateCsrfToken());
die;

function validateCsrfToken(?string $token): bool
{
    return false;
}
