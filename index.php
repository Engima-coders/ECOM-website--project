 <?php
include("./dbcom/conn.php");
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST["email"];
   $password = $_POST["pass"];
   echo $password;
if ($email && $password) {
  $sql = "SELECT * FROM project WHERE email= '$email'";
  $isUserExist = mysqli_query($conn, $sql);
 if (mysqli_num_rows($isUserExist) <= 0) {
     $msg="Invalid Credential";
    } else{
       $user=mysqli_fetch_assoc($isUserExist);
       print_r($user);
        if ($password== $user['password']){
          $msg = "Login succesfull!!";
          header("Location: ./src/pages/home.php");
        }else{
          $msg = "Login Failed";
        }
      }
  } else{
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
   <h1 class="text-center text-success">Login Here</h1>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass"  class="form-control" id="exampleInputPassword1">
  </div>
 
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Login</button>
    <p class="mt-3">New user? <a href="/stylish/src/pages/Signup.php"> Sign up</a></p>
  </div>
</form>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>