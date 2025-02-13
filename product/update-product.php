<?php

//include koneksi database
include('../config.php');

//get data dari form
$id       = $_POST['id'];
$name       = $_POST['name'];
$price      = intval($_POST['price']);
$stock      = intval($_POST['stock']);
$category   = $_POST['category'];
$weight     = intval($_POST['weight']);
$id_supp    = intval($_POST['id_supp']);

//query update data ke dalam database berdasarkan ID
$query = "UPDATE product SET name = '$name', price = $price, stock = $stock, category = '$category', weight = $weight, id_supp = $id_supp WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>