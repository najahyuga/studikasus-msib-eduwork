<?php
$host = mysqli_connect("localhost", "root", "", "db_product");
// $host = mysqli_connect("localhost", "root", "", "tes");

if (mysqli_connect_errno()) {
    echo "KONEKSI DATABASE GAGAL : " . mysqli_connect_errno();
}