<?php
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set the recipient email address
  $to = 'your@email.com';
  
  // Set the email subject
  $subject = 'New Contact Form Submission';
  
  // Build the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n\n";
  $email_content .= "Message:\n$message\n";
  
  // Set the email headers
  $headers = "From: $name <$email>";
  
  // Send the email
  mail($to, $subject, $email_content, $headers);
  
  // Redirect to the thank you page
  header('Location: thank-you.html');
?>
