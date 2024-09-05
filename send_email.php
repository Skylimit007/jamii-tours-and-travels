<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $package = $_POST["package"];
    $message = $_POST["message"];
    $email = $_POST["email"];
    $to = "richardagaya278@gmail.com"; // Replace with your organization's email address
    $subject = "Quotation Request for $package";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Your request has been sent successfully.";
    } else {
        echo "Error sending the request. Please try again later.";
    }
}
?>
