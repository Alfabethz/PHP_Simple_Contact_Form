<?php
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Validate the form data
  if (empty($name) || empty($email) || empty($message)) {
    // One or more fields are empty. Redirect back to the form.
    header('Location: contact-form.html');
    exit;
  }
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // The email address is invalid. Redirect back to the form.
    header('Location: contact-form.html');
    exit;
  }
  
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
curl $REPLIT_DB_URL -d 'key=value'
