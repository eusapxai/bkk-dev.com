<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submitEmail'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = 'bkk website';
    $msg = $_POST['message'];
    // Content-Type helps email client to parse file as HTML
    // therefore retaining styles
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
      <p>" . $name . "</p>
      <p>" . $email . "</p>
      <p>" . $msg . "</p>

  </body>
  </html>";
    if (mail('website_owner@example.com', $subject, $message, $headers)) {
        echo "email sent successfully";
    } else {
        echo "Failed to send email. Please try again later";
    }
}
