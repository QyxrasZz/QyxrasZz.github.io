<?php
  // Set your WhatsApp phone number
  $whatsapp_number = '+6285316440018'; // Replace with your WhatsApp phone number

  // Get the message from the form submission
  $message = $_POST['message'];

  // Create the WhatsApp API URL
  $api_url = 'https://api.whatsapp.com/send?phone=' . $whatsapp_number . '&text=' . urlencode($message);

  // Redirect the user to the WhatsApp API URL
  header('Location: ' . $api_url);
  exit;
?>