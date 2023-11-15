<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Change the email address below to your own email address
    $to = "aaronmanlogon0@gmail.com";
    $subject = "New Contact Form Submission";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);
    
    echo "Message sent successfully!";
} else {
    echo "Invalid request!";
}
?>