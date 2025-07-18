<?php
require("../../components/header.php");
include("../../../dbcom/conn.php");
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
<title>Wishlist</title>
<style>
  .wishlist {
    margin:10px;
  }

  .wishlist h2 {
      font-size: 32px;
      color: #e30613;
      margin-bottom: 10px;
    }

    .wishlist h2 span {
      color: #333;
      font-weight: 400;
    }

    .wishlist h4{
      font-size: 28px;
      color: #0666e3ff;
      margin-bottom: 10px;
      margin-top: 10px;
    }
  
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
  font-size: 15px;
}

table thead {
  background-color: #f4f4f4;
}

table th, table td {
  border: 1px solid #ddd;
  padding: 10px 12px;
  text-align: left;
}

table th {
  background-color: #fafafa;
  font-weight: bold;
}

table td img {
  width: 100px;
  height: 60px;
  border-radius: 4px;
}
</style>
</head>
<body>
  <div class= "wishlist">
<h2>Welcome to <span>Seller's <strong>Corner</strong></span></h2>
<a href="/stylish/src/pages/admin/add.php"><button type="button" class="btn btn-success">Add Product</button></a>
<h4>My Products :</h4>

<table class="table">
  <thead class="table-light">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Image</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM products");
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td><?= $row['name']; ?></td>
      <td><?= $row['des']; ?></td>
      <td>$<?= $row['price']; ?></td>
      <td><img src="uploads/<?= $row['img']; ?>" width="60" height="60"></td>
      <td>
        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</div>
</body>
</html>
<?php require("../../components/footer.php"); ?>

