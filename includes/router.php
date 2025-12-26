<?php

declare(strict_types=1);

function normalizeUri(string $uri): string
{
    $uri = strtolower(trim($uri, '/'));

    return $uri === '' ? 'index' : $uri;
}



function dispatch(string $uri, string $method): void
{
    //  1.) normalize the URI: GET /guestbook -> routes/guestbook_get.php
    $uri = normalizeUri($uri);
    var_dump($uri);
    die;


    // 2.) if !GET or POST - return 404
    // 3.) file path - PHP file path
    // 4.) if file exists, if not 404
    // 5.) if file exists, handle the route by including the PHP file
}
