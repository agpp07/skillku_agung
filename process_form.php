<?php

// Capture form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email content
$body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email using mail function (replace with more robust email library)
if (mail('vinsenagung14@gmail.com', $subject, $body, $headers)) {
  echo "Thank you for contacting us! Your message has been sent.";
} else {
  echo "There was an error sending your message. Please try again later.";
}

?>