<?php
include_once("config.php");
if (isset($_POST['submit'])) {
    $id_product = $_GET['id_product'];
    $name_product = $_POST["name_product"];
    $price_product = $_POST["price_product"];
    $qty_product = $_POST["qty_product"];
    $image = $_FILES["image"]["name"];
    $id_category = $_POST["id_category"];
    $id_brand = $_POST["id_brand"];

    $querydata = mysqli_query($host, "SELECT * FROM `product` WHERE `id_product` = '$id_product'");
    foreach ($querydata as $drow) {
        if ($image == null) {
            //Update with existing image
            $imageData = $drow['image'];
        } else {
            //Update with new image and delete file image old
            if ($imgPath = "image/" . $drow['image']) {
                unlink($imgPath);
                $imageData = $image;
            }
        }
    }

    $query = mysqli_query($host, "UPDATE `product` SET `name_product` = '$name_product', `price_product` = '$price_product', `qty_product` = '$qty_product', `image` = '$imageData', `id_category` = '$id_category', `id_brand` = '$id_brand' WHERE `id_product`='$id_product'");

    if ($query) {
        if ($image == null) {
            //Update with existing image
            echo "<script>alert('You have successfully update the data with existing image');</script>";
            echo "<script type='text/javascript'> document.location ='updatedatap.php'; </script>";
        } else {
            //Update with new image and delete file image old
            move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
            echo "<script>alert('You have successfully update the data');</script>";
            echo "<script type='text/javascript'> document.location ='updatedatap.php'; </script>";
        }
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='updatep.php'; </script>";
    }
}
