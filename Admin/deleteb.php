<?php
include_once "config.php";
$id_brand = $_GET['id_brand'];
$query = "SELECT * FROM brand WHERE id_brand = '" . $id_brand. "' ";
$sql = mysqli_query($host, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM brand WHERE id_brand ='".$id_brand."' ";
$sql2 = mysqli_query($host, $query2);
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
    echo "<script>alert('You have successfully delete the data');</script>";
    echo "<script type='text/javascript'> document.location ='tables-datab.php'; </script>";
}else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
?>