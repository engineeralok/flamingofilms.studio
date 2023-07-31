<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address where you want to receive the messages
    $recipient_email = "contact@flamingofilms.studio"; // Replace with your email

    // Set the email subject
    $subject = "New Message from $name";

    // Set the email content
    $content = "Name: $name\n";
    $content .= "Email: $email\n";
    $content .= "Message:\n$message";

    // Send the email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($recipient_email, $subject, $content, $headers)) {
        echo json_encode(array("status" => "success", "message" => "Message sent successfully."));
    } else {
        echo json_encode(array("status" => "error", "message" => "Failed to send message. Please try again later."));
    }
}
?>
