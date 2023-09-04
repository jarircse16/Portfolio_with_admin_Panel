<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "recipient@example.com"; // Replace with your recipient's email address
    $subject = "Message from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mailBody = "Name: $name<br>";
    $mailBody .= "Email: $email<br><br>";
    $mailBody .= "Message:<br>$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully. Thank you!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
