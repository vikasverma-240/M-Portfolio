<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone_number"];
    $subject = $_POST["email_subject"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "vikasvermasaras132@gmail.com";

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone_number\n";
    $email_message .= "Subject: $email_subject\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, "Contact Form Submission", $email_message, $headers)) {
        echo "Thank you for your message! We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If accessed directly, redirect to the contact page
    header("Location: your_contact_page.html");
    exit;
}
?>
