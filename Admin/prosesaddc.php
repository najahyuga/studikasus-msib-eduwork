<?php
require_once "config.php";

if (isset($_POST['submit'])) {
    $name_category = $_POST['name_category'];
    $data=mysqli_query($host,"INSERT INTO `category` (`id_category`, `name_category`) 
    VALUES ('', '$name_category')");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>