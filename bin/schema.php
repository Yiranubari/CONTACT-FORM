<?php

declare(strict_types=1);
require_once '../bootstrap.php';

loadSchema(
    connectDb(),
    DB_DIR . '/schema.sql'
);
