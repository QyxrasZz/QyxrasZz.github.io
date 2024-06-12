<?php
  // Handle form submission
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email using PHP's mail() function
    $to = "dimashafizd67@gmail.com";
    $subject = "New Message from Website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
      // Redirect to thank you page
      header("Location: thank_you.php");
      exit;
    } else {
      echo "Error sending email";
    }
  }
?>