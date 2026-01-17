<?php

function exceptionHandler(Throwable $exception)
{
    $message = "Uncaught Exception (" . get_class($exception) . "):
               " . $exception->getMessage() .
        " in " . $exception->getFile() . " in file: " . $exception->getFile() .
        " on line " . $exception->getLine();
    error_log($message);

    serverError("An unexpected error occurred. Please try again later.");
}
