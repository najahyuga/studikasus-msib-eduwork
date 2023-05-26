<?php
include_once("config.php");
if (isset($_POST['submit'])) {
    $id_category = $_GET['id_category'];
    $name_category = $_POST['name_category'];
    $data=mysqli_query($host,"UPDATE `category` SET `name_category`='$name_category' WHERE `id_category`='$id_category'");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}