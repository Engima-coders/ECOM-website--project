<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/ecom/src/assets/css/index.css">
<title>Title</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Stylish</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/stylish/src/pages/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stylish/src/pages/Products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stylish/src/pages/Contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stylish/src/pages/About.php">About</a>
        </li>
      </ul>
      <div class="d-flex gap-4">
          <?php
          session_start();
          if (isset($_SESSION["username"])) {
      
            $username = $_SESSION["username"];
            echo 
            '<form class="d-flex" role="search" method="get" action="search.php">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
            <button class="btn btn-outline-success" type="submit">Search</button>
           </form>';
            echo '<a href="/stylish/src/pages/profile.php" class="btn btn-outline-primary text-light fs-5">'.$username.'</a>';
           echo '<a href="logout.php" class="btn btn-outline-info text-light fs-5">Logout</a>';
          } 
         else {
          ?>
       <a href="/stylish/index.php" class="btn btn-outline-success" type="submit">Login</a>
       <a href="/stylish/src/pages/Signup.php"><button class="btn btn-outline-success" type="submit">Sign Up</button></a>
       <form class="d-flex">
       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success" type="submit">Search</button>
       </form>
       <?php }?>
     </div>
    </div>
  </div>
</nav>
