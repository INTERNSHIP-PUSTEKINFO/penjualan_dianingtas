<?php

//include koneksi database
include('../config.php');

//get data dari form
$id         = $_POST['id'];
$id_cust    = $_POST['id_cust'];
$id_product = $_POST['id_product'];
$qty        = intval($_POST['qty']);

$queryProduct = mysqli_query($connection,"SELECT * FROM product where id = $id_product");
$row = mysqli_fetch_array($queryProduct);

$total_price = intval($row['price'] * $qty);

//query update data ke dalam database berdasarkan ID
$query = "UPDATE transaction SET id_cust = $id_cust, id_product = $id_product, qty = $qty WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>