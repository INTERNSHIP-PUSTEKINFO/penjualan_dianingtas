<?php

//include koneksi database
include('../config.php');

//get data dari form
$name       = $_POST['name'];
$price      = intval($_POST['price']);
$stock      = intval($_POST['stock']);
$category   = $_POST['category'];
$weight     = intval($_POST['weight']);
$id_supp    = intval($_POST['id_supp']);

//query insert data ke dalam database
$query = "INSERT INTO product(name, price, stock, category, weight, id_supp) VALUES ('$name', $price, $stock, '$category', $weight, $id_supp)";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>