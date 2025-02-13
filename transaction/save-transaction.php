<?php

//include koneksi database
include('../config.php');

//get data dari form
$id_cust    = $_POST['id_cust'];

date_default_timezone_set("Asia/Jakarta");
$datetime   = date("Y-m-d H:i:s");

$id_product = $_POST['id_product'];
$qty        = intval($_POST['qty']);

$queryProduct = mysqli_query($connection,"SELECT * FROM product where id = $id_product");
$row = mysqli_fetch_array($queryProduct);

$total_price = intval($row['price'] * $qty);

//query insert data ke dalam database
$query = "INSERT INTO transaction(id_cust, id_product, qty, total_price, datetime) VALUES ('$id_cust', '$id_product', $qty, $total_price, '$datetime')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>