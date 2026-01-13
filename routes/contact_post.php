<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($message) || empty($email)) {
    http_response_code(400);
    echo "All fields are required.";
    exit;
}
