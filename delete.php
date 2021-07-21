<?php
// include database connection file
include("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
// Delete table kamar
$result = mysqli_query($conn, "DELETE FROM produk_cost WHERE id_produk=$id");
// Delete table tamu
$result = mysqli_query($conn, "DELETE FROM pembeli_cost WHERE id_pembeli=$id");
// Delete table transaksi
$result = mysqli_query($conn, "DELETE FROM transaksi_cost WHERE id_transaksi=$id");
// After delete redirect to Home, so that latest user list will be displayed.a

header("Location: index.php");
?>