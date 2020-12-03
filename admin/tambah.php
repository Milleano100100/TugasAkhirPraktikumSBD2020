<?php
require '../db_login/db_login.php';
if (isset($_POST['tambah']));

$id_pembayaran = $_POST['id_pembayaran'];
$lapangan = $_POST['lapangan'];
$jns_lapangan = $_POST['jns_lapangan'];
$jam = $_POST['jam'];
$tanggal = $_POST['tanggal'];



$query = "INSERT INTO transaksi values ('$id_pembayaran','$lapangan','$jns_lapangan','1','$jam','$tanggal')";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA BERHASIL DIMASUKKAN'); window.location='sewa.php'</script>";
} else {
    echo "<script>window.alert('MOHON MAAF ID SUDAH ADA'); window.location='input.php'</script>";
}