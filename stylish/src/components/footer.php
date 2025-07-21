<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<title>Footer</title>
<style>
  footer a {
    color: #000;
    text-decoration: none;
  }

  footer a:hover {
    text-decoration: underline;
  }

  footer ul li {
    margin-bottom: 8px;
  }

  @media (max-width: 768px) {
    footer {
      padding: 30px 15px;
    }

    footer > div:first-child {
      flex-direction: column;
    }

    footer div[style*="justify-content: space-between;"] {
      flex-direction: column;
    }

    footer div[style*="display: flex; gap: 15px;"] {
      justify-content: center;
      margin-top: 20px;
    }
  }
</style>
</head>
<body>

<footer style="background-color: #fff; border-top: 1px solid #ddd; font-family: Arial, sans-serif; padding: 40px 20px;">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 30px; max-width: 1200px; margin: auto;">
    
    <div style="flex: 1 1 300px; max-width: 350px;">
      <h2 style="color: red; font-size: 36px; font-weight: bold; margin: 0;">STYLISH CLUB</h2>
      <h2 style="color: red; font-size: 36px; font-weight: bold; margin: 0;">WILL SURPRISE YOU</h2>
      <p style="margin: 15px 0 5px;">Benefits and plenty of surprises are waiting for you!</p>
      <p>Sign up now</p>
      <a href="/stylish/src/pages/Products.php" style="display: inline-block; background-color: red; color: white; padding: 12px 25px; font-weight: bold; text-decoration: none;">Discover more</a>
    </div>

    <div style="flex: 2 1 600px; display: flex; justify-content: space-between; flex-wrap: wrap;">
      
      <div style="min-width: 140px;">
        <h4 style="color: gray;">SUPPORT</h4>
        <ul style="list-style: none; padding: 0;">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Chat with us</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <div style="min-width: 180px;">
        <h4 style="color: gray;">EXCLUSIVE SERVICE</h4>
        <ul style="list-style: none; padding: 0;">
          <li><a href="#">Check / Return Order</a></li>
          <li><a href="#">Invite Stylish Club On Wheels</a></li>
          <li><a href="#">COVID Safety Guidelines</a></li>
          <li><a href="#">Stylish Loyalty</a></li>
          <li><a href="#">Stylish Franchise</a></li>
        </ul>
      </div>

      <div style="min-width: 180px;">
        <h4 style="color: gray;">COMPANY</h4>
        <ul style="list-style: none; padding: 0;">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Stylish Worldwide</a></li>
          <li><a href="#">The Stylish Company</a></li>
          <li><a href="#">CSR</a></li>
          <li><a href="#">Awards & Recognition</a></li>
          <li><a href="#">Become Our Partner</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>

      <div style="min-width: 180px;">
        <h4 style="color: gray;">LEGALS</h4>
        <ul style="list-style: none; padding: 0;">
          <li><a href="#">Terms and Conditions</a></li>
          <li><a href="#">Press Release</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Cookie Policy</a></li>
          <li><a href="#">Whistle Blow Policy</a></li>
          <li><a href="#">POSH Policy</a></li>
          <li><a href="#">Investor Relations</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div style="border-top: 1px solid #ddd; margin-top: 40px; padding-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; max-width: 1200px; margin-left: auto; margin-right: auto;">
    <div style="display: flex; gap: 20px; font-size: 14px;">
      <a href="#">📍 FIND A STORE</a>
      <a href="#">🌐 INDIA | ENGLISH</a>
    </div>
    <div style="display: flex; gap: 15px;">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-pinterest-p"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fas fa-times"></i></a>
    </div>
  </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
