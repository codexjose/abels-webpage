<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email
    $to = 'nzambajosephmuthui32@gmail.com'; // Your email address
    $subject = 'New message from your website';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Error sending message. Please try again later.';
    }
} else {
    echo 'Form submission method not allowed.';
}
?>
