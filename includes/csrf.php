<?php

declare(strict_types=1);

const CSRF_TOKEN_LENGTH = 32;
const CSRF_TOKEN_LIFETIME = 60 * 30;
function generateCsrfToken(): string
{
    $token = bin2hex(random_bytes(CSRF_TOKEN_LENGTH));
    $_SESSION['csrf_token'] = $token;
    $_SESSION['csrf_token_time'] = time();

    return $token;
}

var_dump(generateCsrfToken());
die;

function validateCsrfToken(?string $token): bool
{
    return false;
}
