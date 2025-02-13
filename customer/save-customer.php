<?php

//include koneksi database
include('../config.php');

//get data dari form
$name       = $_POST['name'];
$contact    = $_POST['contact'];
$address    = $_POST['address'];
$gender     = $_POST['gender'];

//query insert data ke dalam database
$query = "INSERT INTO customer(name, contact, address, gender) VALUES ('$name', '$contact', '$address', '$gender')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>