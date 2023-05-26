<?php
include_once "config.php";
    $id_category = $_GET['id_category'];

    $query = "SELECT * FROM category WHERE id_category = '" . $id_category. "' ";
    $sql = mysqli_query($host, $query);
    $data = mysqli_fetch_array($sql);
    $query2 = "DELETE FROM category WHERE id_category ='".$id_category."' ";
    $sql2 = mysqli_query($host, $query2);
    if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
        echo "<script>alert('You have successfully delete the data');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datac.php'; </script>";
    }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
?>