<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "contact@flamingofilms.studio"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    // Send email
    $isSent = mail($to, $subject, $message, $headers);

    if ($isSent) {
        echo json_encode(array("status" => "success", "message" => "Message sent successfully."));
    } else {
        echo json_encode(array("status" => "error", "message" => "Failed to send message. Please try again later."));
    }
}
?>
