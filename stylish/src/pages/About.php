<?php
require("../components/header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Stylish Club</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .stylish-club {
      background: #fff;
      padding: 40px 20px;
      max-width: 1200px;
      margin: auto;
      text-align: center;
    }

    .stylish-club h2 {
      font-size: 32px;
      color: #e30613;
      margin-bottom: 10px;
    }

    .stylish-club h2 span {
      color: #333;
      font-weight: 400;
    }

    .info-section {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin: 40px 0;
      flex-wrap: wrap;
    }

    .info-box {
      flex: 1;
      min-width: 200px;
      max-width: 250px;
      background: #fff0f0;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .info-box img {
      height: 60px;
      margin-bottom: 15px;
    }

    .info-box h3 {
      color: #d70000;
      font-size: 20px;
      margin-bottom: 10px;
    }

    .info-box p {
      font-size: 14px;
      color: #333;
    }

    .features {
      max-width: 600px;
      margin: 0 auto;
      text-align: left;
    }

    .features h3 {
      font-size: 24px;
      color: #e30613;
      margin-bottom: 15px;
      border-bottom: 2px solid #e30613;
      display: inline-block;
    }

    .features ul {
      list-style: none;
      padding-left: 0;
    }

    .features ul li {
      padding: 8px 0;
      position: relative;
      padding-left: 24px;
      color: #333;
      font-size: 15px;
    }

    .features ul li::before {
      content: "●";
      position: absolute;
      left: 0;
      color: #e30613;
      font-size: 16px;
    }
    .stylish-club-container {
      max-width: 1000px;
      margin: 50px auto;
      padding: 30px;
      background: #fff;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      border-radius: 10px;
    }
    .stylish-club-container h2 {
      color: #d72638;
      font-size: 28px;
      margin-bottom: 20px;
    }
    .stylish-club-container h3 {
      color: #111;
      font-size: 22px;
      margin-top: 30px;
    }
    .stylish-club-container p {
      font-size: 16px;
      line-height: 1.7;
      margin-bottom: 15px;
    }
    .stylish-club-container ul {
      padding-left: 20px;
    }
    .stylish-club-container ul li {
      margin-bottom: 10px;
      font-size: 16px;
    }
    a {
      color: #d72638;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    @media (max-width: 600px) {
      .stylish-club-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <section class="stylish-club">
    <h2>Welcome to <span>Stylish <strong>Club</strong></span></h2>

    <div class="info-section">
      <div class="info-box">
        <img src="https://img.icons8.com/ios-filled/100/people-working-together.png" alt="Join Icon"/>
        <h3>JOIN</h3>
        <p>Join to start receiving rewards.</p>
      </div>
      <div class="info-box">
        <img src="https://img.icons8.com/ios-filled/100/hand-holding-heart.png" alt="Earn Icon"/>
        <h3>EARN</h3>
        <p>Earn bonus points & discount coupons.</p>
      </div>
      <div class="info-box">
        <img src="https://img.icons8.com/ios-filled/100/gift.png" alt="Redeem Icon"/>
        <h3>REDEEM</h3>
        <p>Benefits up to Rs 1000.</p>
      </div>
    </div>

    <div class="features">
      <h3>FEATURES</h3>
      <ul>
        <li>Up to 20% saving on next purchase</li>
        <li>Welcome offers up to Rs 1000</li>
        <li>Birthday offers</li>
        <li>Profile update offers</li>
        <li>Earn bonus points</li>
        <li>Digital receipt R for saving</li>
        <li>Easy exchange & claim</li>
      </ul>
    </div>
  </section>
  <section>
    <div class="stylish-club-container">
  <h2>STYLISH CLUB</h2>

  <h3>What is the Stylish Club Loyalty Program?</h3>
  <p>The Stylish Club Loyalty Program is the premier rewards initiative from our e-commerce platform, designed exclusively for our most loyal customers. As a member, you’ll enjoy exclusive discounts, reward points, special offers, and early access to sales across <strong>women's wear, men's wear, kids' wear, and footwear</strong>.</p>
  <p>Simply register with your mobile number to join. Provide your number at checkout in-store or log in to your registered account while shopping online at <a href="#">stylish@gmail.com</a> to earn and redeem rewards.</p>

  <h3>Stylish Club Subscription – How to Join?</h3>
  <p>To join Stylish Club in-store, just give your mobile number during checkout or give a missed call to <strong>0800 778 2345</strong>. To register online, sign up with your mobile number and email at <a href="#">stylish@gmail.com</a>, fill out your profile, and verify via OTP.</p>

  <h3>How Does Mobile Number-Based Loyalty Work?</h3>
  <p>Your mobile number is your unique ID. Use it in-store or login online to enjoy your benefits. Check your status anytime via missed call or send "hi" on WhatsApp:</p>
  <ul>
    <li><strong>Stylish Club WhatsApp:</strong> 7042667003</li>
    <li><strong>Premium Wear WhatsApp:</strong> 7042667002</li>
  </ul>
  <p>Some offers come with unique Gift Voucher (GV) codes that can be redeemed online or in-store.</p>

  <h3>Bonus Points Validity</h3>
  <p>Bonus points come with a limited-time validity (shared via SMS). They expire at 11:59 PM on the given date. No revalidation requests accepted. Use them on <a href="#">stylish@gmail.com</a> or in-store before they expire.</p>

  <h3>Benefits – Why Join Stylish Club?</h3>
  <p>Enjoy exclusive access to:</p>
  <ul>
    <li>Special discounts on fashionwear & footwear</li>
    <li>Reward points on every order</li>
    <li>Personalized offers</li>
    <li>Early access to product launches</li>
  </ul>

  <h3>New Member Welcome Kit</h3>
  <p>Get benefits worth up to ₹1000:</p>
  <ul>
    <li>Welcome Voucher – up to ₹500</li>
    <li>₹100 Profile Update Reward (min purchase ₹999)</li>
    <li>Birthday Gift Voucher – up to ₹750 (if DOB is updated)</li>
    <li>₹200 Voucher on accessories (min purchase ₹999)</li>
  </ul>
  <p>All benefits activate from your second purchase. Plus, returns are <strong>free for Stylish Club Members</strong>. <a href="#">stylish@gmail.com/delivery-returns</a></p>
</div>
  </section>
</body>
</html>

<?php
require("../components/footer.php");
?>