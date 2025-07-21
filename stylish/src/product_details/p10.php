<?php
require("../components/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
    }
    .product-gallery img {
      border-radius: 10px;
      height: 500px;
    }
    .product-title {
      font-size: 1.2rem;
      font-weight: 500;
    }
    .rating {
      font-size: 1rem;
      color: green;
    }
    .btn-buy, .btn-cart {
      width: 48%;
    }
    .size-section {
  border: 1px solid #eee;
  padding: 16px;
  border-radius: 10px;
  max-width: 500px;
  margin-top: 20px;
}

.size-section h3 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 12px;
}

.size-options {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.size-btn {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border: 2px solid #222;
  border-radius: 9999px;
  padding: 8px 14px;
  background: white;
  cursor: pointer;
  font-size: 14px;
  transition: 0.3s ease;
  width: 80px;
  height: 80px;
}

.size-btn div {
  font-weight: 600;
  font-size: 16px;
}

.size-btn small {
  font-size: 12px;
  margin-top: 4px;
}

.size-btn:hover {
  background-color: #f1f1f1;
  border-color: #444;
}
.product-details {
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 10px;
  max-width: 700px;
  font-family: Arial, sans-serif;
  line-height: 1.6;
  font-size: 13px;
  color: #333;
}

.product-details h3 {
  font-size: 13px;
  font-weight: bold;
  margin-bottom: 15px;
}

.product-details p {
  margin: 10px 0;
}

.product-details ul {
  margin: 10px 0 20px;
  padding-left: 20px;
}

.product-details ul li {
  margin-bottom: 6px;
  list-style-type: none;
}

.product-details ul li::before {
  content: "✓ ";
  color: #1a1a1a;
  font-weight: bold;
}

.more-info {
  display: inline-block;
  color: #007bff;
  text-decoration: none;
  font-weight: 500;
  margin-top: 10px;
}
.more-info:hover {
  text-decoration: underline;
}
 .seller-card, .review-section {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      margin-top: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .review-rating-bar {
      height: 6px;
      border-radius: 3px;
      background-color: #ccc;
      margin-top: 5px;
    }
    .review-rating-bar-fill {
      height: 100%;
      background-color: #28a745;
      border-radius: 3px;
    }
  </style>
</head>
<body>
  <div class="container py-4">

    <div class="row">
      <!-- Image Gallery -->
      <div class="col-md-5">
        <img src="https://peppermint.in/cdn/shop/files/SS25-19176-Multi-G-M-1F3_617e04f0-0e66-4951-81ab-cfd9e6a86db6_332x.jpg?v=1742813453" class="img-fluid mb-3" alt="Main Product">

        <div class="d-flex gap-2">
          <button class="btn btn-outline-primary btn-cart">Add to Cart</button>
          <button class="btn btn-primary btn-buy">Buy Now</button>
        </div>
<!-- Seller Info -->
    <div class="seller-card mt-5">
      <h5>Sold By: JAY AMBEY FABRICS</h5>
      <div class="d-flex align-items-center gap-4">
        <span class="rating">4.1 ★</span>
        <span>6,537 Followers</span>
        <span>29 Products</span>
        <button class="btn btn-outline-dark btn-sm">View Shop</button>
      </div>
    </div>
    <p class="my-4"><strong>Don’t Miss Out on This Must-Have Fashion Staple – Order Yours Today!</strong></p>
  <p><strong>Country of Origin :</strong> India</p>

   </div>

      <!-- Product Info -->
      <div class="col-md-7">
        <h2 class="product-title">Frock for girls, girls frock, modern dress, latest frock, girls frock</h2>
        <h3 class="text-success">₹305</h3>
        <p class="rating">4.1 ★ | 30,143 Ratings, 6,719 Reviews</p>
        <p class="text-muted">Free Delivery</p>

        <div class="size-section">
          <h3>Select Size</h3>
            <div class="size-options">
              <button class="size-btn">
               <div>6-12 months</div>
            </button>
            <button class="size-btn">
               <div>2-4 years</div>
            </button>
        <button class="size-btn">
         <div>5-8 years</div>
         </button>
        <button class="size-btn">
           <div>9-11 years</div>
           </button>
          <button class="size-btn">
           <div>12-14 years</div>
        </button>
      </div>
    </div>


        <div class="product-details">
  <h3>Product Details</h3>

   <p><strong>Name :</strong> Frock for girls, girls frock, modern dress, latest frock, girls frock</p>
    <p><strong>Fabric :</strong> Cotton Blend</p>
    <p><strong>Sleeve Length :</strong> Short Sleeves</p>
    <p><strong>Pattern :</strong> Printed</p>
    <p><strong>Net Quantity (N) :</strong> Single</p>

    <p><strong>Sizes :</strong></p>
    <ul>
      <li>6-9 Months (Bust Size: 10 in, Length Size: 10 in)</li>
      <li>6-12 Months (Bust Size: 10 in, Length Size: 10 in)</li>
      <li>9-12 Months (Bust Size: 10 in, Length Size: 10 in)</li>
      <li>1-2 Years (Bust Size: 12 in, Length Size: 21 in)</li>
      <li>2-3 Years (Bust Size: 12 in, Length Size: 22 in)</li>
      <li>3-4 Years (Bust Size: 12 in, Length Size: 24 in)</li>
      <li>4-5 Years (Bust Size: 13 in, Length Size: 26 in)</li>
      <li>5-6 Years (Bust Size: 14 in, Length Size: 28 in)</li>
      <li>6-7 Years (Bust Size: 15 in, Length Size: 30 in)</li>
      <li>7-8 Years (Bust Size: 16 in, Length Size: 32 in)</li>
      <li>8-9 Years (Bust Size: 16 in, Length Size: 34 in)</li>
      <li>9-10 Years (Bust Size: 17 in, Length Size: 35 in)</li>
      <li>10-11 Years (Bust Size: 17 in, Length Size: 38 in)</li>
      <li>0-2 Months (Bust Size: 11 in, Length Size: 18 in)</li>
      <li>2-4 Months (Bust Size: 10 in, Length Size: 10 in)</li>
      <li>4-6 Months (Bust Size: 10 in, Length Size: 10 in)</li>
    </ul>

    <p><strong>Description :</strong></p>
    <p>M Prince brings new frock set for girls to wear in this festive season. This item is made of pure cotton blend material which is comfortable in any weather condition.</p>
  
</div>

      </div>
    </div>


    <!-- Review Section -->
    <div class="review-section mt-4">
      <h4>Product Ratings & Reviews</h4>
      <h3 class="text-success">4.1 ★</h3>
      <p>30,143 Ratings | 6,719 Reviews</p>

      <!-- Rating Bars -->
      <div class="mb-2">Excellent <div class="review-rating-bar"><div class="review-rating-bar-fill" style="width: 60%"></div></div></div>
      <div class="mb-2">Very Good <div class="review-rating-bar"><div class="review-rating-bar-fill" style="width: 15%"></div></div></div>
      <div class="mb-2">Good <div class="review-rating-bar"><div class="review-rating-bar-fill" style="width: 10%"></div></div></div>
      <div class="mb-2">Average <div class="review-rating-bar"><div class="review-rating-bar-fill" style="width: 7%"></div></div></div>
      <div class="mb-2">Poor <div class="review-rating-bar"><div class="review-rating-bar-fill" style="width: 8%"></div></div></div>

      <!-- User Review -->
      <div class="mt-4 border-top pt-3">
        <strong>Stylish User</strong> <span class="text-success">5.0 ★</span>
        <p>Posted on 12 Jul 2025</p>
        <p>Bahut achcha hai jaisa product manga tha aur color bhi same hai, bahut pyara hai. Thank you Stylish!</p>
      </div>
      <div class="mt-4 border-top pt-3">
        <strong>Stylish User</strong> <span class="text-success">4.0 ★</span>
        <p>Posted on 19 Jul 2025</p>
        <p>Very nice. Thank you Stylish!</p>
      </div>
    </div>
  </div>
</body>
</html>
<?php
require("../components/footer.php");
?>