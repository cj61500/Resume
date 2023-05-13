<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Email information
  $to = "charliegilljr@gmail.com"; // Replace with your own email address
  $subject = "New Contact Form Submission";
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  
  // Email content
  $email_content = "Name: " . $name . "\n";
  $email_content .= "Email: " . $email . "\n";
  $email_content .= "Message: \n" . $message;

  // Send email
  if (mail($to, $subject, $email_content, $headers)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
