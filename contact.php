<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'anthonybollas@hotmail.com';
  $headers = "From: $name <$email>" . "\r\n";
  $body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for your message.';
  } else {
    echo 'There was a problem sending your message. Please try again.';
  }
}
?>
<script>
alert('Email is submitted');
window.location.href="contact_me.html";
</script>;