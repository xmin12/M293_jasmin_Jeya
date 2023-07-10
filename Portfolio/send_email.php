<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Configure your email settings
  $to = 'srivision.photography@gmail.com';
  $subject = 'Contact Form Submission';
  $message = "Name: $name\nEmail: $email";

  // Send the email
  if (mail($to, $subject, $message)) {
    echo 'Email sent successfully!';
  } else {
    echo 'Error sending email.';
  }
}
?>
