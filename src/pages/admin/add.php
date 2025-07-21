<?php
require("../../components/header.php");
include("../../../dbcom/conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $des = $_POST["des"];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $path = 'uploads/' . basename($image);

    if ($name && $price && $des && move_uploaded_file($tmp, $path)) {
        $sql = "INSERT INTO `products`(`name`, `price`, `img`, `des`) VALUES ('$name','$price','$image','$des')";
        $isAddData = mysqli_query($conn, $sql);
        if ($isAddData) {
            header("Location: ./index.php");
            exit();
        } else {
            echo "Data Add Failed";
        }
    } else {
        echo "All Fields Are Required";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Product name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Product price</label>
        <input type="number" name="price" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Product description</label>
        <input type="text" name="des" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Product image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require("../../components/footer.php"); ?>
