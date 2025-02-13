<?php

//include koneksi database
include('../config.php');

//get data dari form
$id         = $_POST['id'];
$name       = $_POST['name'];
$contact    = $_POST['contact'];
$address    = $_POST['address'];
$email     = $_POST['email'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE supplier SET name = '$name', contact = '$contact', address = '$address', email = '$email' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>