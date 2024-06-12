<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        $_SESSION['feedback'] = [
            'type' => 'success',
            'message' => 'Your message has been sent.'
        ];
    } else {
        $_SESSION['feedback'] = [
            'type' => 'error',
            'message' => implode("<br>", $errors)
        ];
    }
}

header("Location: form.php");