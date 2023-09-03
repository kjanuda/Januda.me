<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email_address"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Send an email notification to your address
    $to = "janudakodi@gmail.com";
    $subject = "New Contact Form Submission";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    mail($to, $subject, $email_content);

    // Optionally, you can send a confirmation email to the user
    $user_subject = "Thank you for contacting us";
    $user_message = "Dear $name,\n\nThank you for getting in touch. We have received your message and will get back to you shortly.\n\nBest regards,\nYour Company";

    mail($email, $user_subject, $user_message);

    // Redirect the user after submission
    header("Location: thank-you.html");
    exit;
}
?>
