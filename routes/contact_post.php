<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($message) || empty($email)) {
    badRequest("All fields are required");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    badRequest("Email is invalid");
}



insertMessage(
    connectDb(),
    name: $name,
    email: $email,
    message: $message
);

if ($inserted) {
    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    echo "Thank you, $safeName, for your message!";
}

var_dump($email, $name, $message);
die;
