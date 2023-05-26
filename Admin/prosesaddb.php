<?php
require_once "config.php";

if (isset($_POST['submit'])) {
    $name_brand = $_POST['name_brand'];
	$data=mysqli_query($host,"INSERT INTO `brand` (`id_brand`, `name_brand`) 
	VALUES ('', '$name_brand')");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>