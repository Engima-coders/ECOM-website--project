<?php
require("../header.php");

?>
<h1>Welcome to Stylish </h1>
<h1>Seller's Corner</h1>
<h3>My Products</h3>
<div>
    <table class="table table-striped">
  <thead>
    <tr>
        <th>Product id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Image</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <td><button type="button" class="btn btn-success" style="margin:5px" ><a href="./product_management/add.php">Add New Product</a></button></td>
     </tr>
     <tr>
        <th>Product id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Image</th>
        <th>Description</th>
        <th></th>
     </tr>
  </tbody>
</table>
</div>
<?php
require("../footer.php");
?>