const whatsappNumber = '+6285316440018'; // Replace with your WhatsApp phone number

// Get the message from the form submission
const message = document.getElementById('message').value;

// Create the WhatsApp API URL
const apiUrl = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;

// Redirect the user to the WhatsApp API URL
window.location.href = apiUrl;
