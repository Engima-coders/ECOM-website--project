<?php
require("../../components/header.php");
include("../../../dbcom/conn.php");

$id = $_GET['id'];
$product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $des = $_POST["des"];

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $path = 'uploads/' . basename($image);
        move_uploaded_file($tmp, $path);
    } else {
        $image = $product['img'];
    }

    $sql = "UPDATE products SET name='$name', price='$price', des='$des', img='$image' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ./index.php");
        exit();
    } else {
        echo "Update Failed";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Product name</label>
        <input type="text" name="name" class="form-control" value="<?= $product['name']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Product price</label>
        <input type="number" name="price" class="form-control" value="<?= $product['price']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Product description</label>
        <input type="text" name="des" class="form-control" value="<?= $product['des']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Current Image</label><br>
        <img src="uploads/<?= $product['img']; ?>" width="80"><br><br>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php require("../../components/footer.php"); ?>
