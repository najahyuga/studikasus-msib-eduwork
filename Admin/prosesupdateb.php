<?php
include_once("config.php");
if (isset($_POST['submit'])) {
    $id_brand = $_GET['id_brand'];
    $name_brand = $_POST['name_brand'];
    $data=mysqli_query($host,"UPDATE `brand` SET `name_brand`='$name_brand' WHERE `id_brand`='$id_brand'");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}