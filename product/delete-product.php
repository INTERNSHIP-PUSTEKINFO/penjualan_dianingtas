<?php

include('../config.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM product WHERE id = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>