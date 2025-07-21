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
  width: 60px;
  height: 60px;
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
        <img src="https://static.vecteezy.com/system/resources/thumbnails/028/535/150/small/a-myriad-of-vibrant-toys-carefully-curated-and-proudly-displayed-generative-ai-photo.jpg" class="card-img-top" class="img-fluid mb-3" alt="Main Product">

        <div class="my-3 d-flex gap-2">
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
        <h2 class="product-title">Toys for kids</h2>
        <h3 class="text-success">₹299</h3>
        <p class="rating">4.1 ★ | 30,143 Ratings, 6,719 Reviews</p>
        <p class="text-muted">Free Delivery</p>

        <div class="size-section">
          <h3>Select Size</h3>
            <div class="size-options">
       <button class="size-btn">
         <div>Free Size</div>
        </button>
      </div>
    </div>


        <div class="product-details">
         <h3>Product Details</h3>
        <p><strong>Name :</strong> 2 Feet Teddy Bear with Neck Bow Stuffed Spongy Cute Teddy Bear (Pink_2 Feet) stuffed toys 60.5 cm</p>
    <p><strong>Character :</strong> Teddy Bear</p>
    <p><strong>Colour :</strong> Pink</p>
    <p><strong>Gender :</strong> Unisex</p>
    <p><strong>Net Quantity (N) :</strong> 1</p>
    <p><strong>Recommended Age :</strong> 0-2 Years</p>
    <p><strong>Theme :</strong> Teddies</p>
    <p><strong>Toy Size :</strong> 10 to 14.9 Inches</p>
    <p><strong>Type :</strong> Stuffed Animals</p>

    <p><strong>Warranty Note :</strong></p>
    <p>
      Whether a teddy bear has an international warranty can depend on the manufacturer and the specific product.
      Some manufacturers may offer warranties that are valid only in the country of purchase, while others may offer
      warranties that are valid globally. It's important to read the warranty terms and conditions carefully to
      understand the coverage and restrictions, as well as any requirements for making a claim, such as proof of purchase
      or shipping the product back to the manufacturer. If you are purchasing a teddy bear for use outside of the
      country of purchase, it's a good idea to check with the manufacturer or seller to see if the warranty is valid in
      your country and what the process is for making a claim, if needed.
    </p>

    <p><strong>Sizes :</strong></p>
    <ul>
      <li>Free Size (Length Size: 10 in, Width Size: 15 in, Height Size: 15 in)</li>
    </ul>

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