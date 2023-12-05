<?php
include 'koneksi.php';
$NPM = $_POST['NPM'];
$NAMA = $_POST['NAMA'];
$JKEL = $_POST['JKEL'];

mysqli_query($conn, "insert into mhs values('0', '$NPM', '$NAMA', '$JKEL')");

header("location:index.php");
?>