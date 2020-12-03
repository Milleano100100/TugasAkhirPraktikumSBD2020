<?php
require '../db_login/db_login.php';
$id_pembayaran = $_GET['id_pembayaran'];

$query = "DELETE FROM transaksi WHERE id_pembayaran = '$id_pembayaran'";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('Ah....Mantab'); window.location='sewa.php';</script>";
} else {
    echo "<script>window.location='sewa.php';</script>";
}
