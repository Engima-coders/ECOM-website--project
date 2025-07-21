<?php
  include("../../dbcom/conn.php");
 $msg="";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    if ($name && $email && $password) {
      $isUserExist = $conn->prepare("SELECT email FROM project WHERE email= ?");
      $isUserExist->bind_param("s", $email);
      $isUserExist->execute();
      $isUserExist->store_result();

      if ($isUserExist->num_rows > 0){
        $msg = "Email Already Exist";
      }else{
        $sub = $conn->prepare("INSERT INTO project(name,email,password) VALUES(?,?,?)");
        $sub->bind_param("sss",$name, $email, $password);
        if ($sub->execute()){
          $msg = "Signup succesfull";
          header("Location: /stylish/src/pages/home.php");
        }else{
          $msg = "Signup Failed";
        }
      }
    }else{
      $msg = "All Fields Are Required";
    }
 }
?>

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
<title>Title</title>
</head>
<body>
  <?php if($msg)echo "<p>$msg</p>" ?>
 <div class="container w-25 mx-auto mt-5 card p-5">
  <form method="post">
   <h1 class="text-center text-success">Sign up</h1>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
 
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Sign up</button>
      <p class="mt-3">You have an account? <a href="/stylish/index.php"> Login</a></p>
  </div>
</form>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>