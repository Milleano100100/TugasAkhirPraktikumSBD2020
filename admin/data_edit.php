<?php
require_once('../db_login/db_login.php');

$id_pelanggan = $_GET['id_pembayaran'];
if (isset($_POST['hitme'])) {

    $id_pembayaran = $_POST['id_pembayaran'];
    $lapangan = $_POST['lapangan'];
    $jns_lapangan = $_POST['jns_lapangan'];
    $jam = $_POST['jam'];
    $tanggal = $_POST['tanggal'];

    $result = mysqli_query($mysqli, "UPDATE transaksi SET id_pembayaran='$id_pembayaran',lapangan='$lapangan',jns_lapangan='$jns_lapangan',jam='$jam',tanggal='$tanggal' WHERE id_pembayaran=$id_pembayaran");

    header("Location: sewa.php");
}
?>

<?php

$id_pembayaran = $_GET['id_pembayaran'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE id_pembayaran=$id_pembayaran");

while ($user_data = mysqli_fetch_array($result)) {
    $id_pembayaran = $user_data['id_pembayaran'];
    $lapangan = $user_data['lapangan'];
    $jns_lapangan = $user_data['jns_lapangan'];
    $jam = $user_data['jam'];
    $tanggal = $user_data['tanggal'];
}
?>