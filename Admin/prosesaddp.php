<?php
require_once "config.php";

if (file_exists("image/" . $_FILES["image"]["name"])) {
    $img = $_FILES["image"]["name"];
    echo "<script>alert('Image already exists + $img');</script>";
    echo "<script type='text/javascript'> document.location ='forms-validationp.php'; </script>";
} else {
    if (isset($_POST['submit'])) {
        $name_product = $_POST["name_product"];
        $price_product = $_POST["price_product"];
        $qty_product = $_POST["qty_product"];
        $image = $_FILES["image"]["name"];
        $id_category = $_POST["id_category"];
        $id_brand = $_POST["id_brand"];

        $data = mysqli_query($host, "INSERT INTO `product`(`name_product`, `price_product`, `qty_product`, `image`, `id_category`, id_brand) VALUES ('$name_product','$price_product','$qty_product','$image','$id_category','$id_brand')");

        if ($data) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script type='text/javascript'> document.location ='index.php'; </script>";
        }else{
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='forms-validationp.php'; </script>";
        }
    }
}
?>