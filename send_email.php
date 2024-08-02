<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sakshishinde00070@gmail.com"; // Replace with your email address
    $subject = "New message from website contact form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Access forbidden.";
}
?>
