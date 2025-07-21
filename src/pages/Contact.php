<?php
require("../components/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f4f4;
    }

    .container {
      width: 90%;
      max-width: 800px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    h2 {
      text-align: center;
      font-size: 32px;
      color: #e30613;
    }

    h2 span {
      color: #333;
      font-weight: 400;
    }

    .contact-info {
      margin-bottom: 30px;
    }

    .contact-info p {
      font-size: 16px;
      margin: 10px 0;
    }

    form input,
    form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0 20px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 15px;
    }

    form textarea {
      resize: vertical;
    }

    form button {
      background-color: #28a745;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    form button:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
 <div class="container">
  <h2>Contact <span><strong>Us</strong></span></h2>
   <div class="contact-info">
    <p><strong>Phone:</strong> +91-9876543210</p>
    <p><strong>Email:</strong> stylish@gmail.com</p>
    <p><strong>Address:</strong> 123 Market Street, Kolkata, West Bengal, India</p>
  </div>
   <form onsubmit="return validateForm()">
    <label for="name">Your Name</label>
    <input type="text" id="name" placeholder="Enter your name" required>

    <label for="email">Your Email</label>
    <input type="email" id="email" placeholder="Enter your email" required>

   <label for="phone">Contact Number</label>
   <input type="tel" id="phone" placeholder="Enter your phone number" required>

    <label for="message">Message</label>
    <textarea id="message" rows="5" placeholder="Write your message..." required></textarea>

    <button type="submit">Send Message</button>
  </form>
    <script>
    function validateForm() {
      alert("Form submitted successfully!");
    }
  </script>
</div>
</body>
</html>
<?php
require("../components/footer.php");
?>