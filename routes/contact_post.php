<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($message) || empty($email)) {
    badRequest();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    badRequest();
}
