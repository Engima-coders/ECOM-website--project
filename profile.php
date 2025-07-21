<?php
include("../../dbcom/conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .profile-container {
      max-width: 500px;
      margin: 80px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 40px;
      text-align: center;
    }
    .profile-container img {
      width: 130px;
      height: 130px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 20px;
    }
    .profile-container h2 {
      margin-bottom: 10px;
    }
    .profile-container p {
      font-size: 1.1rem;
      color: #6c757d;
    }
  </style>
</head>
<body>

<div class="profile-container">
  <?php
          session_start();
          if (isset($_SESSION["username"])) {
      
            $username = $_SESSION["username"];
            // $email = $_SESSION["email"];
            echo
              '<img src="https://i.pinimg.com/736x/0d/64/98/0d64989794b1a4c9d89bff571d3d5842.jpg" alt="Default Profile Picture">';
            echo '<h2>'.$username.'</h2>';
            // echo '<h2>'.$email.'</h2>';
            echo
               '<form method="POST" action="">
                 <div class="mb-3">
                    <label class="form-label">Email</label>
                       <input type="email" name="email" class="form-control" value="">
                    </div>
                  <div class="mb-3">
                    <label class="form-label">Phone no.</label>
                       <input type="number" name="number" class="form-control" value="">
                    </div>
                  <div class="mb-3">
                    <label class="form-label">Address</label>
                       <input type="text" name="text" class="form-control" value="">
                    </div>
              </form>';
            // echo '<a href="" class="btn btn-primary mt-3">Update Profile</a>';
            echo '<a href="logout.php" class="btn btn-danger mt-3">Logout</a>';
          } 
         else {
          header("Location:/stylish/index.php");
          exit();
             } ?>
  </div>
</body>
</html>
