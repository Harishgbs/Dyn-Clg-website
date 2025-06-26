<?php
$to = "harishgb3805@gmail.com";
$subject = "Test email";
$message = "This is a test email sent from localhost.";
$headers = "From: sender@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
  echo "Email sent successfully.";
} else {
  echo "Email sending failed.";
}
?>
